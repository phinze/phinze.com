<?php $pagetitle="aboutme"; 

function age( $yr, $mn, $dt ) {
    return( date("md") < $mn.$dt ? date("Y")-$Y-1 : date("Y")-$yr );
}

$personalData = array(
	'Full Name' => 'Paul Thomas Hinze',
	'Born' => 'May 21, 1986 ('.age(1986,5,21). ' years old)',
	'Hometown' => 'Milwaukee, WI',
);
?>
<h2>Privacy Schmivacy</h2>
<dl>
<?php
foreach ($personalData as $name => $value) {
	echo "\t<dt>".$name.'</dt><dd>'.$value."</dd>\n";
} ?>
</dl>
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
