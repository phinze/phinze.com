<?php $pagetitle="proj/rb";
$linkUrl = $this->getHomeUrl() . 'content/projects/';
?>
<h2>Rubber Band</h2>
<p><em>Ahh the days of high school.  We were young; we were naive; we coded in 
a carefree world.</em></p>

<a style="display: block; float: right;" href="<?php echo $linkUrl; ?>img/rb_front.png" title="Rubber Band's main admin interface">
	<img src="<?php echo $linkUrl; ?>img/rb_front.png" style="width: 200px"/>
</a>
<p>This was my first major programming project of any real importance.  I was 
in a band, and so were many of my friends.  It was the new milenium, which of 
course meant that everybody wanted a website.  As one of the only people straddling 
the computer geek / band scene divide, I found myself agreeing to design and 
build websites for two other bands in addition to my own.</p>

<p>I came up with a grand vision of One System that would sit behind each of 
the sites and allow band members to update and change anything they wanted,
and started promising great things to my friends about how cool it would be.</p>

<p>If only I had known then what I was getting myself into...</p>

<p>You see, I had enough of an intuitive DRY principle inside of me to realize 
that the backend system could be the same for all three websites, but I did not 
have any sort of insight to reduce code duplication for each data type.  There 
was no framework, only raw PHP logic mixed with HTML for each page.  For an 
example, here's list-users.php:</p>

<a style="display: block; float: right;" href="<?php echo $linkUrl; ?>img/rb_front.png" title="Links interface">
	<img src="<?php echo $linkUrl; ?>img/rb_links.png" style="width: 200px"/>
</a>

<?php 
require_once('lib/geshi/geshi.php');
$rb_code = file_get_contents(dirname(__FILE__) . '/../../extras/list-users.php');
$geshi = new GeSHi($rb_code, 'php');
echo $geshi->parse_code();
?>

<p>Spitting out HTML with <code>echo()</code>?  Database code on every page??  Inline SQL?!?  
Why would I ever want anyone to see this code?!!  In a word, it was gross.  I 
get embarassed looking at it now.  But I publish it here because, at the end of 
the day, it did what it was supposed to do, and that was a serious 
accomplishment for a high school sophomore.  And so with a wince and a warning (and 
a smidge of nostalgic pride) I give you this link: <a href="<?php echo 
$linkUrl; ?>code/rubberband.tar.gz">rubberband.tar.gz</a></p>
