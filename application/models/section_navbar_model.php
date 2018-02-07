<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed.');

class Section_navbar_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function __destruct() {
        $this->db->close();
    }

    public function getData($params = array()) {
        
        $arrValue = array();


        if (isset($params['section']) && $params['section'] != "" && !empty($params['section'])) {
            $this->db->select('sec_id, sec_name,sec_stub, color_code');
            $this->db->where('status', '1');
            $this->db->where('sec_stub', $params['section']);
            $query = $this->db->get('gmanews_section');
            if($params['section'] == "photo"){ 

                $result = $query->row_array();
                
                $arrValue = $result;
                
                $this->db->select('sec_id, sec_name as ssec_name,sec_stub as ssec_stub', false);
                $this->db->where('status', '1');
                $this->db->where('navbar_order != ', '0');
                $this->db->where('sec_stub != ', 'cbb');
                $this->db->order_by('navbar_order', 'asc');
                $query = $this->db->get('gmanews_section');
                
                $arrValue['details'] = $query->result_array();
                
            }else if($params['section'] == "video"){
                
                
                $result = $query->row_array();
                $arrValue = $result;
                $this->load->model("show_model", "show");
                
                $gma7_show = $this->show->get_all_by_channel("gma7");
                $gntv_show = $this->show->get_all_by_channel("gntv");
                $web_show = $this->show->get_all_by_channel("web");
                $imr_show = $this->show->get_all_by_channel("imr");
                
                $res = $query->row_array();
                $arrVal = $res;
                $this->db->select('reporter_id, reporter_name, reporter_stub', false);
                $this->db->where('status', '1');
                $this->db->order_by('last_name', 'asc');
                $qry = $this->db->get('gmanews_reporter');
                $arrVal['details'] = $qry->result_array();
                
                $result = $query->row_array();
                $arrValue = $result;
                $this->db->select('sec_id, sec_name, sec_stub', false);
                $this->db->where('status', '1');
                $this->db->where('navbar_order > ', '0');
                $this->db->order_by('navbar_order', 'asc');
                $this->db->where('sec_stub != ', 'photo');
                $this->db->where('sec_stub != ', 'video');
                $query = $this->db->get('gmanews_section');
                $arrValue['details'] = $query->result_array();
                
                $arrValue['details'] = array(
                    array("ssec_name" => "Latest", "ssec_stub" => "latest", 'mother_stub' => 'latest', 'child' => array()),
                    array("ssec_name" => "GMA 7 Shows", "ssec_stub" => "shows/gma7", 'mother_stub' => 'shows', 'child' => $gma7_show),
                    array("ssec_name" => "GMA News TV Shows", "ssec_stub" => "shows/gntv", 'mother_stub' => 'shows', 'child' => $gntv_show),
                    array("ssec_name" => "Reporters", "ssec_stub" => "reporters", 'mother_stub' => 'reporters', 'child' => $arrVal['details']),
                    array("ssec_name" => "Sections", "ssec_stub" => "sections", 'mother_stub' => 'sections', 'child' => $arrValue['details']),
                    array("ssec_name" => "Web Exclusive", "ssec_stub" => "shows/web", 'mother_stub' => 'shows', 'child' => $web_show),
                    array("ssec_name" => "Livestream", "ssec_stub" => "livestream", 'mother_stub' => 'livestream', 'child' => array()),
                    array("ssec_name" => "Coverage", "ssec_stub" => "coverage", 'mother_stub' => 'coverage', 'child' => array()),
                    array("ssec_name" => "IMReady", "ssec_stub" => "shows/imr", 'mother_stub' => 'shows', 'child' => $imr_show),
                );
                
//                foreach($arrValue['details'] as $video_section){
//                    p($video_section);
//                    
//                }
                
            }else{
                if ($query->num_rows > 0) {


                    $result = $query->row_array();

                    $arrValue = $result;
                    $this->db->where('sec_id', $result['sec_id']);
                    $this->db->select('ssec_id, ssec_name, ssec_stub');
                    $this->db->where('status', '1');
                    $this->db->order_by('ssec_order');

                    $query = $this->db->get('gmanews_subsection');

                    $arrValue['details'] = $query->result_array();

                }
                
            }
        }
        return $arrValue;
    }

}
