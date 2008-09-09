<?php $pagetitle="philosophy"; ?>
<h2>I believe...</h2>
<?php
$belieflist = "in curiosity; in learning; in teaching; in listening; in good music; in rhythm; in humanity; in nature; in doing things right; in taking your time; in coding conventions; in web standards; in structure; in thinking things through; in humor; in balance; in purple; in source control; in dreams; in conversation; in vim; in love; in bootloaders; in backups; in hugs; in imperfection; in discovery; in you";
$beliefs = explode( '; ', $belieflist );
shuffle($beliefs);

echo '<p>...';
$s = count($beliefs) - 1;
foreach( $beliefs as $i => $belief ) {
	echo '<span style="font-size: 1.' . rand(0,9) . 'em">' . $belief;
	echo ( $i != $s ) ? '; ' : '.';
	echo '</span>';
}
echo '</p>'
?>
