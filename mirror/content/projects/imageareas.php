<?php $pagetitle="proj/ia";
$linkUrl = $this->getHomeUrl() . 'content/projects/';
?>
<h2>imageareas</h2>
<p><em>Flipping bits instead of burgers.</em></p>

<a style="display: block; float: right;" href="<?php echo $linkUrl; ?>img/gallery.png">
	<img src="<?php echo $linkUrl; ?>img/gallery.png" style="width: 200px"/>
</a>

<p>Having had a job every summer doing something computer-related for some 
university department every year I was in college, I realized in Spring of 2008 
that school was going to end and I was going to be a jobless graduate.  These 
turned out to be the perfect conditions for me to apply for <a 
href="http://code.google.com/soc/2008/">Google Summer of Code 2008</a>.</p>

<p>Knowing that the selection process for GSoC is <em>very</em> comptetitive.  
I submitted applications to two projects hoping to increase my chances of being 
accepted.  Here are the two applications I submitted for your reading pleasure:</p>

<dl>
	<dt><a href="http://gallery.menalto.com">Gallery</a></dt>
		<dd><a href="<?php echo $this->getHomeUrl(); ?>extras/gallery_app.pdf">Facebook / Flickr Style Image Region Based Tagging</a></dd>
	<dt class="odd"><a href="http://rockbox.org">Rockbox</a></dt>
		<dd class="odd"><a href="<?php echo $this->getHomeUrl(); ?>extras/rockbox_app.pdf">USB Audio Functionality for PortalPlayer Targets</a></dd>
</dl>

<p>To my great surprise and delight, I had <em>both</em> of my applications 
accepted!  I was forced to make a hard decision, and ended up going with 
Gallery because I had more experience with PHP/MySQL and because it seemed that 
the feature was a little more badly needed.  Plus, it helps to have a project 
that is tangible enough that you can at least <em>attempt</em> to explain it to 
your friends and family.</p>

<p>At the end of Summer 2008, I have a working module!  You can <a 
href="http://projects.phinze.com/imageareas/">download the latest release</a> 
or <a href="http://sandbox.phinze.com/imageareas/">check out a demo 
site</a>.</p>
