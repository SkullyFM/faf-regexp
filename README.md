faf-regexp
==========
(FeedWordPress Advanced Filters - Regexp Filter)

This filter is an addon for:
http://www.weblogmechanic.com/plugins/feedwordpress-advanced-filters/
(also available here: http://wordpress.org/plugins/faf/)

Before using it you'll need to have installed:
- PHP 5.3
- Feedwordpress plugin
- FeedWordPress Advanced Filters plugin

To install, just copy `remove_keywords.php` into `~/wp-content/plugins/faf/filters/`

A new filter is then available which will allow you to use regular expressions
in order to removed text or HTML parts from te posts.
Just be careful if you mix it with existing "Image Filters" or "Remove HTML from post" 
filters as the input HTML to this filter is not necessarily the full HTML from the original article
