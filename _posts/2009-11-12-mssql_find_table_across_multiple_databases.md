---
layout: post
title: MSSQL - find table across multiple databases
---

We have a server at work with a legacy system that uses a _lot_ of databases.
Sometimes I find myself in management studio looking and looking for a table
that I just can't seem to find.

Here's a little snippet I found when I finally decided to look around for a
better solution than lumbering around the database server till I bumped into my
table.

When searching for table names starting with 'FOO':

{% highlight sql %}
exec sp_MSforeachdb '
  SELECT ''?'' AS dbname, 
          * FROM ?.INFORMATION_SCHEMA.Tables 
  WHERE TABLE_NAME LIKE ''FOO%''
'
{% endhighlight %}

The answer comes back as many result sets (one per database) which is a little
clunky, but it's short, and it gets the job done.  Plus I get wildcards.
Neato.

[(via)](http://weblogs.sqlteam.com/brettk/archive/2005/01/13/3977.aspx "X002548's Blog - Search SQL Server for a table in any database")
