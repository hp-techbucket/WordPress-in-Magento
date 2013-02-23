<?php

	

class Ip_WordPress_Block_Archive extends Mage_Core_Block_Template
{
    function __construct(){
			
		$posts = get_posts(array(
			'posts_per_page'  => -1,
			'orderby'         => 'post_date',
			'order'           => 'DESC',
			'post_type'       => 'post',
			'post_status'     => 'publish',
			'suppress_filters' => true 
		));
					
		$this->setData('posts',$posts);
			
		$this->setTemplate("wordpress/archive.phtml");		
	
	}

}
?>