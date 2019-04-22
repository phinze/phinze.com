--- 
wordpress_id: 73
layout: post
title: rubygems requirement syntax for config.gem :version
wordpress_url: http://www.beyond-syntax.com/?p=73
---
This shouldn't have been as difficult to find as it was, so I figured I'd better throw it somewhere.

<pre lang="ruby">
  OPS = {
    "="  =>  lambda { |v, r| v == r },
    "!=" =>  lambda { |v, r| v != r },
    ">"  =>  lambda { |v, r| v > r },
    "<"  =>  lambda { |v, r| v < r },
    ">=" =>  lambda { |v, r| v >= r },
    "<=" =>  lambda { |v, r| v <= r },
    "~>" =>  lambda { |v, r| v = v.release; v >= r && v < r.bump }
  }
</pre>

Found deep in the <a href="http://rubygems.rubyforge.org/svn/trunk/lib/rubygems/requirement.rb">rubygems source</a>.
