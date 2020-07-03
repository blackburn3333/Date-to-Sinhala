<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $date_object = array(
            "date_time" => "2020-06-17 13:15:00",
            "want" => "time",
            "want_m_type" => "num",
            "want_d_type" => "s",
            "want_t_type" => "f",
            "date_join_type" => "-",
            "format" => "y-m-d",
            "time_format" => "24"
        );
        $this->load->library('sinhaladate');
        $generate_date_time = $this->sinhaladate->get_date($date_object);
        echo $generate_date_time;
    }
}
