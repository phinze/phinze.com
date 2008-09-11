<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>Paul Hinze | A Convergence of Distractions</title>
	<link rel="icon" type="image/png" href="<?php echo $this->getHomeUrl(); ?>favicon.png" />
    <!--[if IE]> <link rel="stylesheet" type="text/css" href="<?php echo $this->getHomeUrl(); ?>css/ie-all.css" /> <![endif]-->
    <!--[if lte IE 6]> <link rel="stylesheet" type="text/css" href="<?php echo $this->getHomeUrl(); ?>css/ie-lte6.css" /> <![endif]-->
	<script type="text/javascript" src="<?php echo $this->getHomeUrl(); ?>js/FancyZoom.js"></script>
	<script type="text/javascript" src="<?php echo $this->getHomeUrl(); ?>js/FancyZoomHTML.js"></script>
    <style type="text/css">
    @import url("<?php echo $this->getHomeUrl(); ?>css/phinze.css");
	<?php
		$chars = array( 'c', '6', '3' );
		shuffle( $chars );
		$color = '#' . implode( '', $chars );
	?>
	#titlebar { background-color: <?php echo $color; ?>; }
	a, a:visited, a:active { color: <?php echo $color; ?>; }
	#nav a:hover { color: <?php echo $color; ?>; } 
    </style>
</head>

<body onload="setupZoom();">
<div id="qotd"><?php include('lib/quote.php'); ?></div>
<div id="titlebar">
	<a href="<?php echo $this->getHomeUrl(); ?>"><img src="<?php echo $this->getHomeUrl(); ?>img/head.png" width="240" height="75" alt="head" /></a>
	<!--Creative Commons License-->
	<div id="cc_license">
	</div>
	<!--/Creative Commons License-->
	<h1>~phinze/<?php if($this->contentTitle) echo strtolower( $this->contentTitle ) . '/'; ?></h1>
</div>
<div id="nav">
<ul>
	<li><a href="<?php echo $this->getHomeUrl(); ?>">home</a></li>
	<li><dl><dt><a href="<?php echo $this->getHomeUrl(); ?>projects/">projects</a></dt><dd>Serves as both an archive of past work and a list of present interests and endeavors.</dd></dl></li>
	<li><dl><dt><a href="<?php echo $this->getHomeUrl(); ?>philosophy/">philosophy</a></dt><dd>Rants and reflections on the "why" of topics both technical and general.</dd></dl></li>
	<li><dl><dt><a href="<?php echo $this->getHomeUrl(); ?>academics/">academics</a></dt><dd>Information about courses I have taken and details of my toils at Marquette University.</dd></dl></li>
</ul>
</div>
<div id="content">
<?php $this->displayContent(); ?>
</div> <!-- content -->
<div id="footer">
<div class="right">Some rights reserved.  <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.5/" title="This website is licensed under the Creative Commons License">CC BY-NC-SA 2.5</a></div>
This page was last updated: <?php $this->displayLastMod(); ?>
</div>
<!--
<rdf:RDF xmlns="http://web.resource.org/cc/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
    <Work rdf:about="">
        <license rdf:resource="http://creativecommons.org/licenses/by-nc-sa/2.5/" />
        <dc:type rdf:resource="http://purl.org/dc/dcmitype/Text" />
    </Work>
    <License rdf:about="http://creativecommons.org/licenses/by-nc-sa/2.5/"><permits rdf:resource="http://web.resource.org/cc/Reproduction"/><permits rdf:resource="http://web.resource.org/cc/Distribution"/><requires rdf:resource="http://web.resource.org/cc/Notice"/><requires rdf:resource="http://web.resource.org/cc/Attribution"/><prohibits rdf:resource="http://web.resource.org/cc/CommercialUse"/><permits rdf:resource="http://web.resource.org/cc/DerivativeWorks"/><requires rdf:resource="http://web.resource.org/cc/ShareAlike"/></License></rdf:RDF>
-->
</body>
</html>
