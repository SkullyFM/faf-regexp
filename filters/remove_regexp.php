<?php
class faf_remove_regexp extends fafFilter 
 {
 
      public static $name = "remove_regexp"; 
     // public static $description = "Remove regexp from post"; 
      public static $context = "posts";
      //$c_search_excerpt, $c_search_content, 

    protected static $controls = "search_excerpt, search_content, html_remove_regexp"; 

	public static function display_help_text()
	{
		_e("Will remove Regexp from post and excerpt.");
	}
	
	/* Function not an attribute due for gettext */ 
	public static function get_description()
	{
		return __("Remove regexp from post"); 
	
	}
           
        function execute() 
        {
  		$post = $this->post; 
 		$args = $this->args; 
		$content = $post["post_content"]; 
		$excerpt = $post["post_excerpt"];

		if (isset($args["filter_remove_regexp"]))
                {
			$filter_remove_regexp = $args["filter_remove_regexp"];
			// Add a slash in front and one at the back plus the case insensitive (i) option 
			// to generate the regular expression
			$filter_remove_regexp = "/".$filter_remove_regexp."/i";
			// Replace 2 slashes by 1 just in case the user did add them in his regular expression
			// Do it only at the beginning and at the end in case the regular expression had 2 slashes
			$filter_remove_regexp = preg_replace('"^//"', '/', $filter_remove_regexp);
			$filter_remove_regexp = preg_replace('"//$"', '/', $filter_remove_regexp);
		
			if (isset($args["filter_search_content"]) && $args["filter_search_content"] == 1)
				$content = preg_replace($filter_remove_regexp,"", $content);
			if (isset($args["filter_search_excerpt"]) && $args["filter_search_excerpt"] == 1)     	
				$excerpt = preg_replace($filter_remove_regexp,"", $excerpt);
                }
	       
		$post["post_content"] = $content;
		$post["post_excerpt"] = $excerpt;
	       
		
	      return $post;
     	    }
 
	   
     protected static function setControls()
     {
     	$controls = parent::setControls();
	$controls["html_remove_regexp"] = array(
		"name" => "filter_remove_regexp",
		"desc" => __("Regexp to remove:"), 
		"type" => "text");		
	return $controls;	
     }  
}
?>
