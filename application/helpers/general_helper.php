<?php
if (!function_exists('clean_text')) {

    function clean_text($name) {
        if (is_array($name))
            $name = '';
        //$name = html_entity_decode($name, ENT_QUOTES);
        $name = str_replace('"', "'", $name);
        //echo $name;
        $name = strip_tags($name);
        return $name;
    }
}

if (!function_exists("get_sections_for_nav")) {

	function get_sections_for_nav() {
		$CI = & get_instance();
		$CI->load->model("section_navbar_model", "section_navbar");
		$sections = $CI->section_navbar->get_nav_bar();
		return $sections;
	}

}