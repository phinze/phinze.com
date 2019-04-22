--- 
wordpress_id: 79
layout: post
title: git branch --force
wordpress_url: http://www.beyond-syntax.com/2009/05/git-branch-force/
---
The headaches of coordinating a transition from svn => bzr at $JOB a few months ago have had time to fade, and I've now had some time to get used to using a DVCS on a day-to-day basis.  Much like the experience of working with revision control is to the absence of it, I've found that the move to distributed revision control from centralized leaves one reluctant to return to the old way.

So, I've got Bazaar down pretty well---it's design has been engineered for a smooth transition from Subversion---but Git is a different beast.

Git breaks a lot of the conceptual assumptions made in svn-land that you didn't even know you were using to understand your daily VCS use; the basic "checkout, update, commit" operations don't cleanly map to the git paradigm.  This can create many WTF moments spent staring at lines of help like:

<blockquote>
<pre>git-rebase - Forward-port local commits to the updated upstream head</pre>
</blockquote>

The payoff for diving into these treacherous waters is, IMHO, worth it.  When your first 'git commit' or 'git checkout' comes back within a few milliseconds and you're left sitting there still trying to believe it's already done... this is when you realize "Wow, this tool might actually change the way I work."
