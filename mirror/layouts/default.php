<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>Paul Hinze, Marquette University COSC Student</title>
    <link rel="stylesheet" href="<?php echo $this->getHomeUrl(); ?>css/nn4.css" type="text/css" />
    <style type="text/css">
	@import url("<?php echo $this->getHomeUrl(); ?>css/typography.css");
    @import url("<?php echo $this->getHomeUrl(); ?>css/design.css");
    @import url("<?php echo $this->getHomeUrl(); ?>css/layout.css");
	<?php
		$chars = array( 'c', '6', '3' );
		shuffle( $chars );
		$color = '#' . implode( '', $chars );
	?>
	#titlebar { background-color: <?php echo $color; ?>; }
	a, a:visited, a:active { color: <?php echo $color; ?>; }
	#nav a:hover { color: <?php echo $color; ?>; } 
    </style>
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->getHomeUrl(); ?>css/ie-all.css" />
    <![endif]-->

    <!--[if lte IE 6]>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->getHomeUrl(); ?>css/ie-lte6.css" />
    <![endif]-->
</head>

<body>
<div id="wrapper">
<div id="footer">
	<div id="qotd">&ldquo;<q>Computers are useless, they can only give you answers.</q>&rdquo; <cite>Picasso</cite></div>
	<div id="titlebar">
		<img src="<?php echo $this->getHomeUrl(); ?>img/head.png" width="240" height="75" alt="head" />
		<!--Creative Commons License-->
		<div id="cc_license">
		<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.5/" title="This website is licensed under the Creative Commons License"><img alt="Creative Commons License" style="border-width: 0" src="http://creativecommons.org/images/public/somerights20.png"/></a>
		</div>
		<!--/Creative Commons License-->
		<h1>~phinze/<?php echo strtolower( $this->contentTitle ); ?></h1>
	</div>
	<div id="nav">
	<ul>
		<li><a style="width: 14em;" href="<?php echo $this->getHomeUrl(); ?>">home</a></li>
		<li><a style="width: 12em;" href="<?php echo $this->getHomeUrl(); ?>projects/">projects</a></li>
		<li><a style="width: 10em;" href="<?php echo $this->getHomeUrl(); ?>philosophy/">philosophy</a></li>
		<li><a style="width: 8em;" href="<?php echo $this->getHomeUrl(); ?>academics/">academics</a></li>
	</ul>
	</div>
</div>
<div id="content">
<?php $this->displayContent(); ?>
</div> <!-- content -->
</div> <!-- wrapper -->
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
