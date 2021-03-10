<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {

    protected $CI;

    public function __construct()
    {
		$this->CI =& get_instance();
    }


    public function view($content, $data = NULL)
    {
        if ( ! $content)
        {
            return NULL;
        }
        else
        {
            $data['addcss']='admin/'.$content."css";
            $data['addjs']='admin/'.$content."js";
            $this->template['header']          = $this->CI->load->view('template/header', $data, TRUE);
            $this->template['main_header']     = $this->CI->load->view('template/main_header', $data, TRUE);
            $this->template['main_sidebar']    = $this->CI->load->view('template/main_sidebar', $data, TRUE);
            $this->template['content']         = $this->CI->load->view('admin/'.$content, $data, TRUE);
            $this->template['control_sidebar'] = $this->CI->load->view('template/control_sidebar', $data, TRUE);
            $this->template['footer']          = $this->CI->load->view('template/footer', $data, TRUE);

            return $this->CI->load->view('template/template', $this->template);
        }
  }




}
