<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Report extends CI_Controller

{

    function __construct()

    {

        parent::__construct();

        if ($this->session->userdata('admin_id') == null) {

            redirect('/');

        }

    }

    public function index()

    {

        redirect('/');

    }



    function tblReportService()

    {

        if($_SERVER['REQUEST_METHOD'] != 'POST'){

            show_404();exit();

        }

        $datestart = $this->input->post('datestart');

        $dateend = $this->input->post('dateend');

        if($datestart ==null || $dateend == null){

            $where_arr = array(

                'service_status' => 'uninstall'

            );

        }else{

            $where_arr = array(

                'due_date >=' => $datestart,

                'due_date <=' => $dateend,

                'service_status' => 'uninstall'

            );

        }

        $data['service'] = $this->Function_model->fetchDataResult('tbl_service', $where_arr, 'service_id', 'DESC');

        $this->load->view('components/tbl_report_service', $data);

    }

    



}

