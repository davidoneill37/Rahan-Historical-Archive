<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * SEO Helper function
 * https://stackoverflow.com/questions/6779797/codeigniter-displaying-and-entering-dynamic-meta-data
 * Generates Meta tags for SEO
 *
 * @author    Henrik Oldenborg
 * @version   1.0
 */

/**
 * meta_tags() 
 *
 * Generates tags for title, description and robots
 * Using title and description from config file as default
 *
 * @access  public
 * @param   string  Title
 * @param   string  Description (155 characters)
 * @param   bool    Robots follow or no folow
 */

if(! function_exists('meta_tags')){
  function meta_tags($meta)
  {
    $CI =& get_instance();
    $CI->config->load('seo_config');

    if(!isset($meta['title']))
      $meta['title'] = $CI->config->item('seo_title');

    if(!isset($meta['desc']))
      $meta['desc'] = $CI->config->item('seo_desc');

    if(!isset($meta['robot']))
      $meta['robot'] = $CI->config->item('seo_robot');

    $html = '';

    //uses default set in seo_config.php

    $html .= '<title>'.$meta['title'].'</title>';
    $html .= '<meta name="title" content="'.$meta['title'].'"/>';
    $html .= '<meta name="description" content="'.$meta['desc'].'"/>';
    if($meta['robot'] == true){
      $html .= '<meta name="robots" content="index,follow"/>';

    } else {
      $html .= '<meta name="robots" content="noindex,nofollow"/>';
    }
    echo $html;
  }
}

/* End of file seo_helper.php */
/* Location: ./application/helpers/seo_helper.php */