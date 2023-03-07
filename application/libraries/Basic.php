<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Basic
{
    var $CI;
    public function __construct($params = array())
    {
        $this->CI = &get_instance();
        $this->CI->load->helper(['url']);
        $this->CI->config->item('base_url');
        date_default_timezone_set('Asia/Kolkata');
        $this->dt_now = date("Y-m-d H:i:s");
    }
    public function header($meta=[])
    {
        $this->CI->load->view('web/common/header', $meta);
    }
    public function footer()
    {
        $this->CI->load->view('web/common/footer');
    }
    public function footer_design()
    {
        $this->CI->load->view('web/pages/footer-design');
    }
    public function inner_page_header($data)
    {
        $this->CI->load->view('web/pages/inner-page-header', $data);
    }
    public function delete_file($filePath)
    {
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }
    public function file_upload($file_path, $file_name, $custom_name = "", $overwrite = false)
    {
        $new_name = mt_rand(111111, 999999) . $file_name;
        if ($custom_name != "") {
            $new_name = $custom_name;
        }
        $config['file_name'] = $new_name;
        $config['upload_path'] = 'assets/admin/' . $file_path;
        $config['allowed_types'] = '*';
        $config['overwrite'] = $overwrite;
        //  $config['max_size'] = 100;
        $this->CI->load->library('upload', $config);
        $this->CI->upload->initialize($config);
        if (!$this->CI->upload->do_upload($file_name)) {
            $error = $this->CI->upload->display_errors();
            $new_name = '';
            return $error;
            exit;
        } else {
            $upload_data = $this->CI->upload->data();
            $new_name = '';
            return $config['upload_path'] . '/' . $upload_data['file_name'];
        }
    }
}
