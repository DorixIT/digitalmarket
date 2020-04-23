<?php
/**
 * @package Unlimited Elements
 * @author UniteCMS.net
 * @copyright (C) 2017 Unite CMS, All Rights Reserved. 
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * */
defined('UNLIMITED_ELEMENTS_INC') or die('Restricted access');


class UniteCreatorTemplateEngine extends UniteCreatorTemplateEngineWork{
	
	
	/**
	 * put post date
	 */
	public function putPostDate($postID, $dateFormat = ""){
		
		$date = get_the_date($dateFormat, $postID);
		echo $date;
	}
	
	
	/**
	 * put font override
	 */
	public function putPostMeta($postID, $key){
		
		$metaValue = get_post_meta($postID, $key, true);
		
		echo $metaValue;
	}
	
	/**
	 * put font override
	 */
	public function printPostMeta($postID){
		
		$postMeta = UniteFunctionsWPUC::getPostMeta($postID);
				
		if(empty($postMeta))
			dmp("no meta for this post");
		else{
			echo "<pre>";
			$content = print_r($postMeta, true);
			$content = str_replace("[", "[ ", $content);
			$content = str_replace("]", " ]", $content);
			
			echo $content;
			echo "</pre>";
		}
		
	}
	
	
	/**
	 * get post meta
	 */
	public function getPostMeta($postID, $key){
		
		$metaValue = get_post_meta($postID, $key, true);
		
		return($metaValue);
	}
	
	
	/**
	 * put font override
	 */
	public function putAcfField($postID, $fieldname){
		
		if(class_exists('acf') == false)
			return(true);
		
		$value = get_field($fieldname, $postID);
		
		if(is_string($value) == false)
			return(true);
			
		echo UniteProviderFunctionsUC::escCombinedHtml($value);
	}
	
	
	
	/**
	 * put font override
	 */
	public function putPostTags($postID){
		
		$htmlTags = UniteFunctionsWPUC::getTagsHtmlList($postID);
		
		echo UniteProviderFunctionsUC::escCombinedHtml($htmlTags);
	}
	
		
	
	/**
	 * add extra functions to twig
	 */
	/*
	protected function initTwig_addExtraFunctions(){
		
		parent::initTwig_addExtraFunctions();
				
	}
	*/
	
}