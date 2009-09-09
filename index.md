---
layout: base
title: ~/phinze
---

command line forensics
==================================

{% highlight console %}
$ who am i
phinze   pts/20       2009-08-26 12:00 (:pts/7:S.1)
$ uname -a
Linux vpr1000 2.6.30-ARCH #1 SMP PREEMPT Fri Jul 31 18:10:38 UTC 2009 
  i686 Intel(R) Core(TM)2 Duo CPU T9500 @ 2.60GHz GenuineIntel GNU/Linux
$ uptime
 17:04:08 up 10 days,  8:34, 14 users,  load average: 0.08, 0.06, 0.09
$ wget http://www.gravatar.com/avatar/1dad4013c9d7688e54c2a2dbe0a059b3.png
2009-08-30 17:13:40 URL:http://www.gravatar.com/avatar/1dad4013c9d7688e54c2a2dbe0a059b3.png [3000/3000]
  -> "1dad4013c9d7688e54c2a2dbe0a059b3.png" [1]
$ cat 1dad4013c9d7688e54c2a2dbe0a059b3.png
{% endhighlight %}

![gravatar](/img/1dad4013c9d7688e54c2a2dbe0a059b3.png)

{% highlight console %}
$ sqlite3 ~/.mozilla/firefox/phinze.firefoxprofile/places.sqlite "select url from moz_places order by url;" > /tmp/visited_urls
$ cat /tmp/visited_urls | perl -pe 's|https?://(.*?)/.*|\1|' | uniq -c | sort -rn | head -n 50 | pr -3Tw120

   5183 www.google.com                      107 rubyforge.org                        63 www.rubybrain.com
   1430 www.facebook.com                    103 www.thinkgeek.com                    63 www.redmine.org
   1276 redmine.research.uiowa.edu          101 code.google.com                      63 www.railsbrain.com
    886 github.com                          101 cnsurvey.biz                         60 web4.sendtoprint.net
    357 mail.google.com                      93 www.mail-archive.com                 58 www.flickr.com
    346 news.bbc.co.uk                       87 email.uiowa.edu                      57 xkcd.com
    284 twitter.com                          86 rails.lighthouseapp.com              55 www.ruby-forum.com
    283 uiris.uiowa.edu                      79 wiki.github.com                      54 ubuntuforums.org
    251 images.google.com                    79 stackoverflow.com                    54 thepeerhub.com
    250 en.wikipedia.org                     78 hris.uiowa.edu                       54 googleads.g.doubleclick.net
    228 iowacity.craigslist.org              76 www.mininova.org                     51 lifehacker.com
    152 awesome.naquadah.org                 75 bit.ly                               51 launchpad.net
    145 localhost:3000                       71 www.prototypejs.org                  45 www.apostlesandmarkets.com
    143 jobs.uiowa.edu                       71 wiki.archlinux.org                   44 blade.nagaokaut.ac.jp
    136 www.youtube.com                      69 research.uiowa.edu                   44 bbs.archlinux.org
    128 192.168.1.100:3000                   65 gist.github.com                      43 xinu.mscs.mu.edu
    109 groups.google.com                    64 www.new.facebook.com

{% endhighlight %}

{% highlight console %}
$ curl --silent -u 'phinze' https://api.del.icio.us/v1/posts/recent > /tmp/delicious.xml
$ cat /tmp/delicious.xml | ruby -e "require 'rubygems'; require 'nokogiri'; Nokogiri::XML.parse(STDIN).css('post').each_with_index { |n, i| puts %{[#{i}]> #{n['description']}} }"

[0]> Rails-like Quickly tools brings rapid development to Ubuntu - Ars Technica
[1]> Ruby Unroller
[2]> Arch Linux Forums / HOW to build ruby 1.8.6 package (p287) ???
[3]> Strategies for Sustainability: Upstream vs. Downstream
[4]> nafai77: Finally, a Near Ideal IRC and Instant Messaging Setup
[5]> Regexp Syntax Summary
[6]> use a literal bang (exclamation point) in a command | commandlinefu.com
[7]> 8 tips for testing Rails apps with Cucumber - Momoro Machine
[8]> How do you clone an Element - Prototype & script.aculo.us | Google Groups
[9]> Farhavens volume widget - awesome
[10]> Unix/Linux - find & xargs - Spaces in filenames >> Not So Frequently Asked Questions
[11]> Nabble - ruby-talk - remove_const, Kernel.load, and already instantiated objects
[12]> >> Migrating from Test::Unit to RSpec - DevChix - Blog Archive
[13]> Power Management in Linux-Based Systems
[14]> Labnotes >> assert_select cheat sheet
{% endhighlight %}
