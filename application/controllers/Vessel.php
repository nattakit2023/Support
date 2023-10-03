<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Vessel extends CI_Controller

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

    //-------------------------------------------------------------------------V E S S E L---------------------------------------------------------------------------------------

    // option Type Vessel
    function option_type_vessel()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $vessel = $this->Function_model->fetchDataResult('tbl_type_vessel', '', 'id', 'ASC');

        echo '<option value="" disabled selected>Vessel Type</option>';

        foreach ($vessel as $item) {

            echo '<option value="' . $item->ves_type . '">' . $item->id . " . "  .  $item->ves_type . '</option>';
        }
    }

    //option project

    function option_project()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $projects = $this->Function_model3->fetchDataResult('projects', '', 'id', 'ASC');

        echo '<option value="" disabled selected>Project</option>';

        foreach ($projects as $item) {

            echo '<option value="' . $item->name . '">' . $item->id . " . " .  $item->name . '</option>';
        }
    }


    // option vessel
    function option_vessel()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $vessel = $this->Function_model3->fetchDataResult('product_warehouse', '', 'id', 'ASC');

        echo '<option value="" disabled selected>Vessel Name</option>';

        foreach ($vessel as $item) {

            echo '<option value="' . $item->title . '">' .  $item->title . '</option>';
        }
    }

    // option fleet

    function option_fleet()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $vessel = $this->Function_model->fetchDataResult('tbl_fleet', '', 'id', 'DESC');


        $vessel_fleet = "";
        echo '<option value="" disabled selected>Vessel Fleet</option>';

        foreach ($vessel as $item) {
            $check = $item->ves_fleet;

            if (strtoupper($check) == strtoupper($vessel_fleet)) {
            } else {
                $vessel_fleet = $check;
                echo '<option value="' . $item->ves_fleet . '">' .  $item->ves_fleet . '</option>';
            }
        }
    }

    //Create Vessel

    function create_Vessel()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }


        $ves_fleet = $this->input->post('ves_fleet');

        $ves_name = $this->input->post('ves_name');

        $ves_type = $this->input->post('ves_type');

        $ves_mmsi = $this->input->post('ves_mmsi');

        $ves_imo = $this->input->post('ves_imo');

        $ves_callsign = $this->input->post('ves_callsign');

        $ves_country = $this->input->post('ves_country');

        $ves_year = $this->input->post('ves_year');

        if ($ves_fleet == '' || $ves_name == '' || $ves_type == '' || $ves_mmsi == '' || $ves_imo == '' || $ves_callsign == ''  || $ves_country == ''  || $ves_year == '') {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No data input'

            ]);

            exit();
        }

        $this->db->like('ves_name', $ves_name, 'both');

        $check_name = $this->db->get('tbl_vessel')->row();

        if ($check_name == null) {
            $data_arr = [

                'ves_fleet' => strtoupper($ves_fleet),

                'ves_name' => strtoupper($ves_name),

                'ves_type' => $ves_type,

                'ves_mmsi' => $ves_mmsi,

                'ves_imo' => $ves_imo,

                'ves_callsign' => $ves_callsign,

                'ves_country' => $ves_country,

                'ves_year' => $ves_year

            ];

            $res = $this->Function_model->insertData('tbl_vessel', $data_arr);

            if ($res == TRUE) {

                echo json_encode([

                    'status' => 'SUCCESS'

                ]);

                exit();
            }
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'Create Service Fail!'

            ]);

            exit();
        }
    }
    //-------------------------------------------------------------------------C O N T R A C T----------------------------------------------------------------------------------

    //Option Contract Name
    function option_contract_name()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $con = $this->Function_model->fetchDataResult('tbl_contract', '', 'con_id', 'ASC');

        echo '<option value="" disabled selected>Contract Name</option>';

        foreach ($con as $item) {

            echo '<option value="' . $item->con_name . '">' .  $item->con_name . '</option>';
        }
    }


    //Option Contract Phone
    function option_contract_phone()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $con_name = $this->input->post('con_name');

        $con = $this->Function_model->fetchDataResult('tbl_contract', '', 'con_id', 'ASC');


        foreach ($con as $item) {

            if ($con_name == $item->con_name) {
                echo '<option value="' . $item->con_tel . '">' .  $item->con_tel . '</option>';
            }
        }
    }

    //Option Contract Email
    function option_contract_email()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $con_name = $this->input->post('con_name');

        $con = $this->Function_model->fetchDataResult('tbl_contract', '', 'con_id', 'ASC');

        foreach ($con as $item) {

            if ($con_name == $item->con_name) {
                echo '<option value="' . $item->con_email . '">' .  $item->con_email . '</option>';
            }
        }
    }

    //Create Contract

    function create_Contract()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $con_name = $this->input->post('con_name');

        $con_tel = $this->input->post('con_tel');

        $con_email = $this->input->post('con_email');


        if ($con_name == '' || $con_tel == '' || $con_email == '') {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No data input'

            ]);

            exit();
        }

        $this->db->like('con_name', $con_name, 'both');

        $check_name = $this->db->get('tbl_contract')->row();

        if ($check_name == null) {
            $data_arr = [

                'con_name' => strtoupper($con_name),

                'con_tel' => $con_tel,

                'con_email' => $con_email

            ];

            $res = $this->Function_model->insertData('tbl_contract', $data_arr);

            if ($res == TRUE) {

                echo json_encode([

                    'status' => 'SUCCESS'

                ]);

                exit();
            }
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'Create Service Fail!'

            ]);

            exit();
        }
    }
}