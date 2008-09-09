<?php

/**********************************************************
 *  Student Media Interactive                             *
 *  Common Code                                           *
 **********************************************************/
/**
 * ContentDispatcher
 * 	Loads and displays content for use in the layout of an XHTML web page.
 *
 * Use Case:
 *      [index.php]
 *      require_once('common/ContentDispatcher.php');
 * 		$cd = new ContentDispatcher();
 *      $cd->displayPage();
 *
 *      [layouts/default.php]
 * 		echo "<h1>";
 * 		$this->displayTitle();
 * 		echo "</h1>\n<div id=\"content">";
 * 		$this->displayContent();
 * 		echo "</div>";
 *
 *      [content/main.php]
 *      $pagetitle = "Main Page"
 *      <p>Content here.</p>
 *
 * For displayTitle to work set the $title variable in a content page.
 * For alternate layouts, set the $layout variable in a content page
 */

class ContentDispatcher {
	
	/* Class Constants */
	var $DEFAULT_CONTENT_VAR = 'content'; // index name in _GET
	var $DEFAULT_CONTENT_DIR = 'content/';
	var $DEFAULT_CONTENT     = 'main';
	var $DEFAULT_LAYOUT_DIR  = 'layouts/';
	var $DEFAULT_LAYOUT      = 'default';
	
	/* Attributes */
	var $contentVar;
	var $contentDir;
	var $defaultContent;
	var $layoutDir;
	var $homeUrl = NULL;

	/* Loaded Data */
	var $contentData;
	var $contentTitle;
	var $contentLayout;
	var $lastMod;

	/**
	 * Constructor.  Unused arguments set to defaults.
	 * @param contentVar GET param name used to select content to display.
	 * @param contentDir relative path in which to search for content.
	 *                   should include trailing backslash.
	 * @param defaultContent value to use if contentVar is blank or invalid.
	 */
	function ContentDispatcher( $contentVar=NULL,
								$contentDir=NULL,
								$defaultContent=NULL,
								$layoutDir=NULL)
	{
		// hack to flip in defaults; only constants allowed in args--odd.
		$contentVar     = ($contentVar == NULL) ?
							$this->DEFAULT_CONTENT_VAR : $contentVar;
		$contentDir     = ($contentDir == NULL) ?
							$this->DEFAULT_CONTENT_DIR : $contentDir;
		$defaultContent = ($defaultContent == NULL) ?
							$this->DEFAULT_CONTENT : $defaultContent;
		$layoutDir      = ($layoutDir == NULL) ?
							$this->DEFAULT_LAYOUT_DIR : $layoutDir;

		// set class variables
		$this->contentVar     = str_replace('/', '', $_GET[$contentVar]);
		$this->contentDir     = $contentDir;
		$this->defaultContent = $defaultContent;
		$this->layoutDir      = $layoutDir;

		// add path to include so that includes with output buffering work
		// this should allow content to include relative to launching point
		$path = realpath( dirname( $_SERVER['SCRIPT_FILENAME'] ) );
		set_include_path(get_include_path() . PATH_SEPARATOR . $path);

		// load the include
		$this->loadContent();
	}

	/**
	 * Tries to load the content defined for this dispatcher into a
	 *   variable.  Falls back to defaults if invalid.  Dies if defaults
	 *   fail.  Calling this with invalid content will switch
	 *   $this->contentVar back to $this->DEFAULT_CONTENT;
	 */
	function loadContent()
	{
		$cpath = $this->contentDir . $this->contentVar . '.php';
		// first check alphanumeric, then check existence
		if ( preg_match( "/^[a-zA-Z0-9\-\_]+$/", $this->contentVar )
			 && file_exists( $cpath ) ) {
			// output buffering include
			ob_start();
			include $cpath;
			$this->contentData = ob_get_contents();
			ob_end_clean();
			/*
			 * inside of the include file, a pagetitle can be set
			 * the include above should have run any php and any variables
			 * are now set in this scope to extract to the dispatcher
			 */
			if( isset( $pagetitle ) ) {
				$this->contentTitle = $pagetitle;
			}

			/*
			 * if the include file has a non-standard layout that should be
			 * used, set contentLayout to point to it. Otherwise, use the 
			 * default layout. (Although, this can be handled in displayPage
			 * since it is such a common case, might as well save a preg_match
			 * and file_exists).
			 */
			if( isset( $layout ) ) {
				$this->contentLayout = $layout;
			}
			else {
				$this->contentLayout = $this->DEFAULT_LAYOUT;
			}

			/*
			 * get a last modified date for use on the page
			 */
			$cinfo = stat( $cpath );
			$this->lastMod = $cinfo['mtime'];
		}
		// if we haven't tried the default content already, fall back to it
		else if ( $this->contentVar != $this->DEFAULT_CONTENT ) {
			$this->contentVar = $this->DEFAULT_CONTENT;
			$this->loadContent();
		}
		else {
			die("Could not find valid content.  Default values are invalid.");
		}
	}

	/**
	 * Displays the page, using the appropriate layout media
	 */
	function displayPage()
	{
		$layout_path = $this->layoutDir . $this->contentLayout . '.php';
		// Since we strongly rely on the layout file, if it does not
		// exist, we should just error out
		if ( preg_match( "/^[a-zA-Z0-9\-\_]+$/", $this->contentLayout )
				&& file_exists( $layout_path ) ) {
			require( $layout_path );
		}
		// fall back on the default layout
		else if ( $this->contentLayout != $this->DEFAULT_LAYOUT ) {
			$this->contentLayout = $this->DEFAULT_LAYOUT;
			$this->displayPage();
		}
		// oh boy, we're in trouble.
		else {
			die("Could not find a valid layout.  Default values are invalid.");
		}
	}

	/**
	 * Displays the title set in the content file.
	 */
	function displayTitle()
	{
		echo $this->contentTitle;
	}

	/**
	 * Displays the loaded content.
	 */
	function displayContent()
	{
		echo $this->contentData;
	}

	/**
	 * @returns variable that selects the content
	 */
	function getContentVar()
	{
		return $this->contentVar;
	}

	function getHomeUrl()
	{
		if ( $this->homeUrl ) return $this->homeUrl;
		else {
			$url = 'http';
			$dir_name = dirname( $_SERVER['PHP_SELF'] );
			if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') {
				$url .=  's';
			}
			$url .=  '://';
			if($_SERVER['SERVER_PORT']!='80')  {
				$url .=
				$_SERVER['HTTP_HOST'].':'.$_SERVER['SERVER_PORT'].$dir_name;
			} else {
				$url .=  $_SERVER['HTTP_HOST'].$dir_name;
			}
			$url .= '/'; //trailing slash
			$this->homeUrl = $url;
			return $url;
		}
	}

	function getLastMod($dateString = "") {
		$ds = ( $dateString != "" ) ? $dateString : 'l, F jS, Y';
		if ( $this->lastMod ) {
			return date($ds, $this->lastMod);
		}
	}

	function displayLastMod($dateString = "") {
		echo $this->getLastMod();
	}


} // end class ContentDispatcher
?>
