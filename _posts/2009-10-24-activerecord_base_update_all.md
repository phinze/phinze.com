---
layout: post
title: ActiveRecord::Base#update_all
---

Don't:

{% highlight ruby %}
# Set bar_id null for all Foos in database
foos = Foo.find(:all)
foos.each do |f|
  f.bar_id = nil
  f.save_without_validation
end
{% endhighlight %}

Do:

{% highlight ruby %}
# Set bar_id null for all Foos in database
Foo.update_all('bar_id = NULL')
{% endhighlight %}
