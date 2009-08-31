---
layout: base
title: ~/phinze
---

Sometimes a clean slate is nice...
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
$ cat visited_urls | perl -pe 's|https?://(.*?)/.*|\1|' | uniq -c | sort -rn | head -n 50 | pr -2T

    885 www.facebook.com                     16 github.com                            7 www.mozilla.com
    311 www.google.com                       16 en.wikipedia.org                      7 www.fsf.org
    118 news.bbc.co.uk                       15 apps.facebook.com                     7 www.archlinux.org
     85 github.com                           14 rails.lighthouseapp.com               7 technologizer.com
     79 www.youtube.com                      14 bit.ly                                7 sclegacy.com
     57 wiki.archlinux.org                   12 groups.google.com                     7 research.uiowa.edu
     46 mail.google.com                      12 ask.metafilter.com                    7 pygments.org
     43 twitter.com                          11 support.dell.com                      7 makeofficebetter.com
     35 sandbox.phinze.com                    9 code.google.com                       7 gist.github.com
     27 redmine.ruby-lang.org                 8 www.ruby-lang.org                     7 en.gravatar.com
     22 www.somethingawful.com                8 www.npr.org                           7 codezen.org
     22 www.mininova.org                      8 www.feedly.com                        7 answers.launchpad.net
     22 www.google.com                        8 wiki.github.com                       6 xkcd.com
     20 bbs.archlinux.org                     8 vpn.uiowa.edu                         6 www.slackware.com
     19 redmine.research.uiowa.edu            8 pandora.com                           6 www.python.org
     18 email.uiowa.edu                       8 localhost:3000                        6 www.netflix.com
     16 vimeo.com                             8 gallery.menalto.com
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
