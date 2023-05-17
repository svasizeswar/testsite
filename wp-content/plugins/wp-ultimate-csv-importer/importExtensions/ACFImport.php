<?php
/******************************************************************************************
 * Copyright (C) Smackcoders. - All Rights Reserved under Smackcoders Proprietary License
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * You can contact Smackcoders at email address info@smackcoders.com.
 *******************************************************************************************/

namespace Smackcoders\FCSV;

if ( ! defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

class ACFImport {
	private static $acf_instance = null,$media_instance;

	public static function getInstance() {
		if (ACFImport::$acf_instance == null) {
			ACFImport::$acf_instance = new ACFImport;
			return ACFImport::$acf_instance;
		}
		return ACFImport::$acf_instance;
	}

    function set_acf_values($header_array ,$value_array , $map, $maps, $post_id , $type,$mode, $hash_key,$line_number){	
		$helpers_instance = ImportHelpers::getInstance();
		$helpers_instance = ImportHelpers::getInstance();
        $post_values =$helpers_instance->get_header_values($maps , $header_array , $value_array);
		foreach($map as $key => $value){
			$csv_value= trim($map[$key]);
			if(!empty($csv_value) || $csv_value == 0){
				//$pattern = "/({([a-z A-Z 0-9 | , _ -]+)(.*?)(}))/";
				$pattern = '/{([^}]*)}/';

				if(preg_match_all($pattern, $csv_value, $matches, PREG_PATTERN_ORDER)){	
					$csv_element = $csv_value;
					//foreach($matches[2] as $value){
					foreach($matches[1] as $value){
						$get_key = array_search($value , $header_array);
						if(isset($value_array[$get_key])){
							$csv_value_element = $value_array[$get_key];	
							$value = '{'.$value.'}';
							$csv_element = str_replace($value, $csv_value_element, $csv_element);
						}
					}

					$math = 'MATH';
						if (strpos($csv_element, $math) !== false) {
									
							$equation = str_replace('MATH', '', $csv_element);
							$csv_element = $helpers_instance->evalmath($equation);
						}
					$wp_element= trim($key);

					if((!empty($csv_element) || $csv_element == 0) && !empty($wp_element)){
                        if(is_plugin_active('advanced-custom-fields/acf.php')){
                            $acf_pluginPath = WP_PLUGIN_DIR . '/advanced-custom-fields/pro';
                            if(is_dir($acf_pluginPath)) {
                                $this->acfpro_import_function($wp_element ,$post_values, $csv_element ,$type, $post_id,$mode, $hash_key,$line_number);
                            }
                            else{
                                $this->acf_import_function($wp_element ,$post_values, $csv_element ,$type, $post_id,$mode, $hash_key,$line_number);
                            }
                        }
					}
				}

				elseif(!in_array($csv_value , $header_array)){
					$this->acf_import_function($wp_element ,$post_values, $csv_value ,$type, $post_id,$mode, $hash_key,$line_number);
				}

				else{
					$get_key= array_search($csv_value , $header_array);
					if(isset($value_array[$get_key])){
						$csv_element = $value_array[$get_key];	

						$wp_element= trim($key);
						if($mode == 'Insert'){
							if((!empty($csv_element) || $csv_element == 0) && !empty($wp_element)){
							    $this->acf_import_function($wp_element ,$post_values, $csv_element ,$type, $post_id,$mode, $hash_key,$line_number);
							}	
						}
						else{
							if(!empty($csv_element) || !empty($wp_element)){
								$this->acf_import_function($wp_element ,$post_values, $csv_element ,$type, $post_id,$mode, $hash_key,$line_number);
							}	

						}
						
					}
				}
			}
		} 
	}

	/**
	 * Imports ACF Free fields
	 * @param string $acf_wpname_element - acf fields
	 * @param string $acf_csv_element - csv headers
	 * @param string $importAs - selected import type
	 * @param string $post_id - inserted post id
	 */
	function acf_import_function($acf_wpname_element ,$post_values,$acf_csv_element, $importAs , $post_id,$mode, $hash_key,$line_number){

		$acf_wp_name = $acf_wpname_element;

		$acf_csv_name = $acf_csv_element; 

		global $wpdb;

		$helpers_instance = ImportHelpers::getInstance();
		

        $plugin = 'acf';
		$get_acf_fields = $wpdb->get_results($wpdb->prepare("select post_content, post_name from {$wpdb->prefix}posts where post_type = %s and post_excerpt = %s", 'acf-field', $acf_wp_name ), ARRAY_A);

		foreach($get_acf_fields as $keys => $value_type){
			$get_type_field = unserialize($value_type['post_content']);	

			$field_type = $get_type_field['type'];
			$key = $get_acf_fields[0]['post_name'];
			// $return_format = $get_type_field['return_format'];
			$return_format = isset($get_type_field['return_format']) ? $get_type_field['return_format'] : '';
			
			if($field_type == 'text' || $field_type == 'textarea' || $field_type == 'number' || $field_type == 'email' || $field_type == 'url' || $field_type == 'password' || $field_type == 'range' || $field_type == 'radio' || $field_type == 'true_false' || $field_type == 'time_picker' || $field_type == 'color_picker' || $field_type == 'button_group' || $field_type == 'oembed' || $field_type == 'wysiwyg'){
				$map_acf_wp_element = $acf_wp_name;
				$map_acf_csv_element = $acf_csv_name;	
			}
			if($field_type == 'date_time_picker'){

				$dt_var = trim($acf_csv_name);
				$dateformat = "Y-m-d H:i:s";
				$date_time_of = $helpers_instance->validate_datefield($dt_var,$acf_wp_name,$dateformat,$line_number);
				
				if($mode == 'Insert'){
					if($dt_var == 0 || $dt_var == '')
						$map_acf_csv_element = $dt_var;	
					else{
						$map_acf_csv_element = $date_time_of;
					}
				}
				else{
						if($dt_var == 0 || $dt_var == '')
						$map_acf_csv_element = $dt_var;	
						else{
							$map_acf_csv_element = $date_time_of;
						}
				}
				$map_acf_wp_element = $acf_wp_name;
			}
			if($field_type == 'date_picker'){

				$var = trim($acf_csv_name);
				$dateformat = 'Ymd';
				$date = str_replace('/', '-', "$var");
				$date_of = $helpers_instance->validate_datefield($var,$acf_wp_name,$dateformat,$line_number);				

				if($mode == 'Insert'){
					if($var == 0 || $var == '')
						$map_acf_csv_element = $var;	
					else{
						$map_acf_csv_element = $date_of;
					}
				}
				else{
					if($var == 0 || $var == '')
						$map_acf_csv_element = $var;	
					else{
						$map_acf_csv_element = $date_of;
					}
				}
				$map_acf_wp_element = $acf_wp_name;

			}
			if($field_type == 'select'){
				if($get_type_field['multiple'] == 0){
					$map_acf_csv_element = $acf_csv_name;
				}
				$map_acf_wp_element = $acf_wp_name;
			}

			if($field_type == 'checkbox'){

				$explode_acf_csv = explode(',',trim($acf_csv_name));
				$explode_acf_csv_name = [];
				foreach($explode_acf_csv as $explode_acf_csv_value){
					$explode_acf_csv_name[] = trim($explode_acf_csv_value);
				}	

				$map_acf_csv_element = $explode_acf_csv_name;
				$map_acf_wp_element = $acf_wp_name;
			}
		}

		if ($importAs == 'Users') {
			update_user_meta($post_id, $map_acf_wp_element, $map_acf_csv_element);
			update_user_meta($post_id, '_' . $map_acf_wp_element, $key);
		} else {	
			update_post_meta($post_id, $map_acf_wp_element, $map_acf_csv_element);
			update_post_meta($post_id, '_' . $map_acf_wp_element, $key);
		}
		$listTaxonomy = get_taxonomies();
		if (in_array($importAs, $listTaxonomy)) {
			if($term_meta = 'yes'){

				update_term_meta($post_id, $map_acf_wp_element, $map_acf_csv_element);
				update_term_meta($post_id, '_' . $map_acf_wp_element, $key);
			}else{
				$option_name = $importAs . "_" . $post_id . "_" . $map_acf_wp_element;
				$option_value = $map_acf_csv_element;
				if (is_array($option_value)) {
					$option_value = serialize($option_value);
				}

				update_option("$option_name", "$option_value");
			}
		}
	}
}