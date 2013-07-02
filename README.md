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

To install, just copy remove_keywords.php into ~/wp-content/plugins/faf/filters/

Regular expressions can then be used as a filter in order to be removed... 
Just be careful if you mix it with existing "Image Filters" or "Remove HTML from post" 
filters as the HTML as an input is not necessarily the HTML which will be passed to the Regexp filter
