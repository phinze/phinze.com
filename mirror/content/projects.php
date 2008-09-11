<?php $pagetitle="Projects"; 
$linkUrl = $this->getHomeUrl() . 'projects/';

$projectList = array(
	'Currently' => array(
		'imageareas' => array(
			'desc' => 'My Google Summer of Code 2008 project for Gallery',
	    ),
		'Apostles &amp; Markets' => array(
			'desc' => 'Taking a cutting edge curriculum online',
		)
	),
	'Recently' => array(
		'XINU' => array(
			'desc' => 'XINU is most definitely <em>not</em> UNIX.',
		)
	),
	'Long Ago' => array(
		'windowbox' => array(
			'desc' =>  'Making Flash do what it was never ever meant to do',
		),
		'zoomquilt' => array(
			'desc' =>  'Recursive, collaborative artwork',
		),
		'kellysmurals.com' => array(
			'desc' =>  'Kelley paints custom murals as a summer job, and she wanted a website',
		),
		'marquetteradio.mu.edu' => array(
			'desc' =>  'One of the sites that I reworked in my first year at Student Media Interactive',
		),
		'nationaltryst.com' => array(
			'desc' =>  'A small site for this Chicago-based folk-pop band',
		),
		'rubberband' => array(
			'desc' => 'The CMS I wrote before I knew what a CMS was',
			'link' => 'rubberband/'
		),
	),
);

foreach ( $projectList as $heading => $projects) {
	echo '<h2>'.$heading."</h2>\n";
	echo "<dl>\n";
	foreach ( $projects as $projName => $projData ) {
		$class = (null == $class) ? ' class="odd"' : null;
		$line = '<dt'.$class.'>'.$projName.'</dt><dd'.$class.'>'.$projData['desc']."</dd>";
		if ( array_key_exists('link', $projData) ) {
			$line = '<a href="'.$projData['link'].'">'.$line.'</a>';
		}
		echo $line . "\n";
	}
	echo "</dl>\n\n";
}
?>
