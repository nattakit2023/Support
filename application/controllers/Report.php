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

                'service_status' => ''

            );

        }else{

            $where_arr = array(

                'due_date >=' => $datestart,

                'due_date <=' => $dateend,

                'service_status' => ''

            );

        }

        $data['service'] = $this->Function_model->fetchDataResult('tbl_service', $where_arr, 'service_invoice', 'DESC');

        $data['service_project'] = $this->Function_model->fetchDataResult('tbl_service_project', '', 'service_invoice', 'DESC');

        $data['service_vessel'] = $this->Function_model->fetchDataResult('tbl_vessel_name','','id','ASC');

        $this->load->view('components/tbl_report_service', $data);

    }

    



}

