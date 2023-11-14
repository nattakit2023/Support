<?php

defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH . 'vendor/autoload.php';

class Service extends CI_Controller

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

    //del_file

    function del_file()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        $filename = $this->input->post('filename');

        $check = $this->input->post('check');

        if ($check == 'created') {
            $res = $this->Function_model->deleteData('tbl_uploads', ['uploads_name' => $filename, 'service_invoice' => $service_invoice]);

            $filePath = "uploads/" . $service_invoice . "/" . $filename;
        }
        if ($check == 'fixed') {
            $res = $this->Function_model->deleteData('tbl_uploads_back', ['uploads_name' => $filename, 'service_invoice' => $service_invoice]);

            $filePath = "uploads_back/" . $service_invoice . "/" . $filename;
        }




        if ($res == TRUE) {

            unlink($filePath);

            echo json_encode([

                'status' => 'SUCCESS',

                'service_invoice' => $service_invoice

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'This File Uploaded'

            ]);

            exit();
        }
    }

    //upload_atp_back

    function upload_atp_back()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        $files = $_FILES['files'];

        foreach ($files['name'] as $index => $name) {
            $filename = $name;
            $fileTmp = $files['tmp_name'][$index];
            $filePath = "upload_atp_back/" . $service_invoice . "/" . $name;

            $check = $this->Function_model->fetchDataResult('tbl_atp_upload_back', ['uploads_name' => $filename]);

            if (count($check) > 0) {
                $data = [
                    'service_invoice' => $service_invoice,
                    'uploads_name' => $filename,
                    'uploads_tmp' => $fileTmp
                ];
                $where = [
                    'service_invoice' => $service_invoice,
                    'uploads_name' => $filename,
                ];

                $res = $this->Function_model->updateData('tbl_atp_upload_back', $where, $data);
            } else {
                move_uploaded_file($fileTmp, $filePath);

                $res = $this->Function_model->insertData('tbl_atp_upload_back', ['service_invoice' => $service_invoice, 'uploads_name' => $filename, 'uploads_tmp' => $fileTmp]);
            }
        }


        if ($res == TRUE) {

            echo json_encode([

                'status' => 'SUCCESS',

                'service_invoice' => $service_invoice

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'This File Uploaded'

            ]);

            exit();
        }
    }
    //uploads

    function uploads()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        $files = $_FILES['files'];

        foreach ($files['name'] as $index => $name) {
            $filename = $name;
            $fileTmp = $files['tmp_name'][$index];
            $filePath = "uploads/" . $service_invoice . "/" . $name;

            $check = $this->Function_model->fetchDataResult('tbl_uploads', ['uploads_name' => $filename]);

            if (count($check) > 0) {
                $data = [
                    'service_invoice' => $service_invoice,
                    'uploads_name' => $filename,
                    'uploads_tmp' => $fileTmp
                ];
                $where = [
                    'service_invoice' => $service_invoice,
                    'uploads_name' => $filename,
                ];

                $res = $this->Function_model->updateData('tbl_uploads', $where, $data);
            } else {
                move_uploaded_file($fileTmp, $filePath);

                $res = $this->Function_model->insertData('tbl_uploads', ['service_invoice' => $service_invoice, 'uploads_name' => $filename, 'uploads_tmp' => $fileTmp]);
            }
        }


        if ($res == TRUE) {

            echo json_encode([

                'status' => 'SUCCESS',

                'service_invoice' => $service_invoice

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'This File Uploaded'

            ]);

            exit();
        }
    }

    //uploads back

    function uploads_back()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        $files = $_FILES['files'];

        foreach ($files['name'] as $index => $name) {
            $filename = $name;
            $fileTmp = $files['tmp_name'][$index];
            $filePath = "uploads_back/" . $service_invoice . "/" . $name;

            $check = $this->Function_model->fetchDataResult('tbl_uploads_back', ['service_invoice' => $service_invoice, 'uploads_name' => $filename]);

            if (count($check) > 0) {
                $data = [
                    'service_invoice' => $service_invoice,
                    'uploads_name' => $filename,
                    'uploads_tmp' => $fileTmp
                ];
                $where = [
                    'service_invoice' => $service_invoice,
                    'uploads_name' => $filename,
                ];

                $res = $this->Function_model->updateData('tbl_uploads_back', $where, $data);
            } else {
                move_uploaded_file($fileTmp, $filePath);

                $res = $this->Function_model->insertData('tbl_uploads_back', ['service_invoice' => $service_invoice, 'uploads_name' => $filename, 'uploads_tmp' => $fileTmp]);
            }
        }


        if ($res == TRUE) {

            echo json_encode([

                'status' => 'SUCCESS',

                'service_invoice' => $service_invoice

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'This File Uploaded'

            ]);

            exit();
        }
    }

    //getService

    function get_service()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            show_404();
            exit;
        }

        $res = $this->Function_model->fetchDataResult('tbl_service', '', 'id', 'asc');

        if ($res == true) {

            echo json_encode([
                'status' => 'SUCCESS',
                'data' => []
            ]);
        }
    }

    //tblService

    function tblService()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $datestart = $this->input->post('datestart');

        $dateend = $this->input->post('dateend');

        $service_status = $this->input->post('status');

        $admin_name = $this->input->post('admin_name');

        if ($datestart == null || $dateend == null) {

            $datestart = date('Y-m-d');

            $dateend = date('Y-m-d');
        }

        $where_arr = array(

            'due_date >=' => $datestart,

            'due_date <=' => $dateend

        );

        if ($service_status != null) {

            $where_arr = [

                'service_status' => $service_status

            ];
        }


        $data['service'] = $this->Function_model->fetchDataResult('tbl_service', $where_arr, '', 'ASC');

        $data['service_vessel'] = $this->Function_model->fetchDataResult('tbl_vessel_name', '', 'id', 'ASC');

        $data['admin'] = $this->Function_model->fetchDataResult('tbl_admin', ['admin_name' => $admin_name], 'admin_id', 'ASC');

        $data['history'] = $this->Function_model->fetchDataResult('tbl_history', '', 'id', 'ASC');

        $this->load->view('components/tbl_service', $data);
    }

    //อัพเดทรายการซ่อม

    function update_service()
    {


        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        $projects = $this->input->post('projects');

        $cus_name = $this->input->post('cus_name');

        $cus_tel = $this->input->post('cus_tel');

        $cus_email = $this->input->post('cus_email');

        $cus_address = $this->input->post('cus_address');

        $cus_zipcode = $this->input->post('cus_zipcode');

        $ves_fleet = $this->input->post('ves_fleet');

        $ves_name = $this->input->post('ves_name');

        $ves_type = $this->input->post('ves_type');

        $ves_callsign = $this->input->post('ves_callsign');

        $ves_imo = $this->input->post('ves_imo');

        $ves_mmsi = $this->input->post('ves_mmsi');

        $ves_year = $this->input->post('ves_year');

        $ves_maintenance = $this->input->post('ves_maintenance');

        $ves_survey = $this->input->post('ves_survey');

        $ves_installation = $this->input->post('ves_installation');

        $con_name = $this->input->post('con_name');

        $con_tel = $this->input->post('con_tel');

        $port_name = $this->input->post('port_name');

        $con_email = $this->input->post('con_email');

        $admin_name = $this->input->post('admin_name');

        $product = $this->input->post('product');

        $pack_name = $this->input->post('pack_name');

        $pack_internet = $this->input->post('pack_internet');

        $remark_create = $this->input->post('remark_create');

        $create_date = $this->input->post('create_date');

        $due_date = $this->input->post('due_date');

        $end_date = $this->input->post('end_date');

        $eta = $this->input->post('eta');

        $etd = $this->input->post('etd');

        $contract_start = $this->input->post('contract_start');

        $contract_end = $this->input->post('contract_end');

        if (
            $service_invoice == null || $projects == null || $cus_name == null || $cus_tel == null ||  $cus_email == null || $cus_address == null || $cus_zipcode == null
            || $ves_fleet == null || $ves_name == null || $ves_type == null || $ves_callsign == null || $ves_imo == null || $ves_mmsi == null || $ves_year == null
            || $ves_maintenance == null || $con_name == null || $con_tel == null || $port_name == null || $con_email == null || $admin_name == null || $product == null
            || $pack_name == null || $pack_internet == null || $remark_create == null || $create_date == null || $due_date == null || $end_date == null
            || $eta == null || $etd == null || $contract_start == null || $contract_end == null
        ) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No data input'

            ]);

            exit();
        }

        if ($ves_survey == null && $ves_installation == null) {
            $ves_survey = '';
            $ves_installation = '';
        } elseif ($ves_survey == null) {
            $ves_survey = '';
        } elseif ($ves_installation == null) {
            $ves_installation = '';
        }

        $data_arr = [

            'service_invoice' => $service_invoice,

            'cus_name' => $cus_name,

            'cus_address' => $cus_address,

            'cus_tel' => $cus_tel,

            'cus_email' => $cus_email,

            'cus_zipcode' => $cus_zipcode,

            'ves_fleet' => $ves_fleet,

            'ves_type' => $ves_type,

            'ves_callsign' => $ves_callsign,

            'ves_imo' => $ves_imo,

            'ves_mmsi' => $ves_mmsi,

            'ves_year' => $ves_year,

            'ves_maintenance' => $ves_maintenance,

            'ves_survey' => $ves_survey,

            'ves_installation' => $ves_installation,

            'con_name' => $con_name,

            'con_tel' => $con_tel,

            'con_email' => $con_email,

            'port_name' => $port_name,

            'remark_create' => $remark_create,

            'create_date' => $create_date,

            'due_date' => $due_date,

            'end_date' => $end_date,

            'ETA' => $eta,

            'ETD' => $etd,

            'contract_start' => $contract_start,

            'contract_end' => $contract_end,

        ];



        $where = [
            'service_invoice' => $service_invoice,
        ];

        //service

        $res = $this->Function_model->updateData('tbl_service', $where, $data_arr);

        //product

        $res = $this->Function_model->deleteData('tbl_service_product', $where);

        foreach ($product as $item) {
            $res = $this->Function_model->insertData('tbl_service_product', ['service_invoice' => $service_invoice, 'product' => $item]);
        }

        //package

        $res = $this->Function_model->deleteData('tbl_service_package', $where);

        foreach ($pack_name as $item1) {
            foreach ($pack_internet as $item2) {

                $check = $this->Function_model->getDataRow('tbl_package', ['pack_name' => $item1, 'pack_internet' => $item2]);

                if ($check != null) {
                    $res = $this->Function_model->insertData('tbl_service_package', ['service_invoice' => $service_invoice, 'pack_name' => $item1, 'pack_internet' => $item2]);
                }
            }
        }

        //project

        $res = $this->Function_model->deleteData('tbl_service_project', $where);

        foreach ($projects as $item) {
            $res = $this->Function_model->insertData('tbl_service_project', ['service_invoice' => $service_invoice, 'projects' => $item]);
        }

        //engineer

        $res = $this->Function_model->deleteData('tbl_engineer', $where);

        foreach ($admin_name as $item) {
            $res = $this->Function_model->insertData('tbl_engineer', ['service_invoice' => $service_invoice, 'engineer' => $item]);
        }

        //vessel name

        $res = $this->Function_model->deleteData('tbl_vessel_name', $where);

        foreach ($ves_name as $item) {
            $res = $this->Function_model->insertData('tbl_vessel_name', ['service_invoice' => $service_invoice, 'ves_name' => $item]);
        }


        if ($res == TRUE) {

            echo json_encode([

                'status' => 'SUCCESS',

                'service_invoice' => $service_invoice

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'Create Service Fail!'

            ]);

            exit();
        }
    }


    //สร้างรายการซ่อม

    function create_service()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->Function_model->genInvoice();

        $projects = $this->input->post('projects');

        $cus_name = $this->input->post('cus_name');

        $cus_tel = $this->input->post('cus_tel');

        $cus_email = $this->input->post('cus_email');

        $cus_address = $this->input->post('cus_address');

        $cus_zipcode = $this->input->post('cus_zipcode');

        $ves_fleet = $this->input->post('ves_fleet');

        $ves_name = $this->input->post('ves_name');

        $ves_type = $this->input->post('ves_type');

        $ves_callsign = $this->input->post('ves_callsign');

        $ves_imo = $this->input->post('ves_imo');

        $ves_mmsi = $this->input->post('ves_mmsi');

        $ves_year = $this->input->post('ves_year');

        $ves_flag = $this->input->post('ves_flag');

        $ves_home_port = $this->input->post('ves_home_port');

        $ves_gross_tonnage = $this->input->post('ves_gross_tonnage');

        $ves_maintenance = $this->input->post('ves_maintenance');

        $ves_survey = $this->input->post('ves_survey');

        $ves_installation = $this->input->post('ves_installation');

        $con_name = $this->input->post('con_name');

        $con_tel = $this->input->post('con_tel');

        $port_name = $this->input->post('port_name');

        $port_province = $this->input->post('port_province');

        $con_email = $this->input->post('con_email');

        $admin_name = $this->input->post('admin_name');

        $product = $this->input->post('product');

        $pack_name = $this->input->post('pack_name');

        $pack_internet = $this->input->post('pack_internet');

        $remark_create = $this->input->post('remark_create');

        $create_date = $this->input->post('create_date');

        $due_date = $this->input->post('due_date');

        $end_date = $this->input->post('end_date');

        $eta = $this->input->post('eta');

        $etd = $this->input->post('etd');

        $contract_start = $this->input->post('contract_start');

        $contract_end = $this->input->post('contract_end');

        if (
            $service_invoice == null || $projects == null || $cus_name == null || $cus_tel == null ||  $cus_email == null || $cus_address == null || $cus_zipcode == null ||
            $ves_fleet == null || $ves_name == null || $ves_type == null || $ves_callsign == null || $ves_imo == null || $ves_mmsi == null || $ves_year == null ||
            $ves_flag == null || $ves_home_port == null || $ves_gross_tonnage == null || $ves_maintenance == null || $con_name == null || $con_tel == null || $port_name == null ||
            $port_province == null || $con_email == null || $admin_name == null || $product == null || $pack_name == null || $pack_internet == null ||
            $remark_create == null || $create_date == null || $due_date == null || $end_date == null || $eta == null || $etd == null || $contract_start == null || $contract_end == null
        ) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No data input'

            ]);

            exit();
        }

        if ($ves_survey == null && $ves_installation == null) {
            $ves_survey = '';
            $ves_installation = '';
        } elseif ($ves_survey == null) {
            $ves_survey = '';
        } elseif ($ves_installation == null) {
            $ves_installation = '';
        }

        $data_arr = [

            'service_invoice' => $service_invoice,

            'cus_name' => $cus_name,

            'cus_address' => $cus_address,

            'cus_tel' => $cus_tel,

            'cus_email' => $cus_email,

            'cus_zipcode' => $cus_zipcode,

            'ves_fleet' => $ves_fleet,

            'ves_type' => $ves_type,

            'ves_callsign' => $ves_callsign,

            'ves_imo' => $ves_imo,

            'ves_mmsi' => $ves_mmsi,

            'ves_year' => $ves_year,

            'ves_flag' => $ves_flag,

            'ves_home_port' => $ves_home_port,

            'ves_gross_tonnage' => $ves_gross_tonnage,

            'ves_maintenance' => $ves_maintenance,

            'ves_survey' => $ves_survey,

            'ves_installation' => $ves_installation,

            'con_name' => $con_name,

            'con_tel' => $con_tel,

            'con_email' => $con_email,

            'port_name' => $port_name,

            'port_province' => $port_province,

            'remark_create' => $remark_create,

            'create_date' => $create_date,

            'due_date' => $due_date,

            'end_date' => $end_date,

            'ETA' => $eta,

            'ETD' => $etd,

            'contract_start' => $contract_start,

            'contract_end' => $contract_end,

        ];


        $target = "uploads/" . $service_invoice . "/";

        $target_back = "uploads_back/" . $service_invoice . "/";

        $target_atp_back =  "upload_atp_back/" . $service_invoice . "/";

        $target_atp = "upload_atp/" . $service_invoice . "/";

        $target_atp_network = "upload_atp/" . $service_invoice . "/network//";

        $target_atp_A = "upload_atp/" . $service_invoice . "/app_a";

        $target_atp_B = "upload_atp/" . $service_invoice . "/app_b";

        $target_atp_C = "upload_atp/" . $service_invoice . "/app_c";


        mkdir("$target");
        chmod("$target", 0755);

        mkdir("$target_back");
        chmod("$target_back", 0755);

        mkdir("$target_atp_back");
        chmod("$target_atp_back", 0755);

        mkdir("$target_atp");
        chmod("$target_atp", 0755);

        mkdir("$target_atp_network");
        chmod("$target_atp_network", 0755);

        mkdir("$target_atp_A");
        chmod("$target_atp_A", 0755);

        mkdir("$target_atp_B");
        chmod("$target_atp_B", 0755);

        mkdir("$target_atp_C");
        chmod("$target_atp_C", 0755);




        foreach ($product as $name) {
            $res = $this->Function_model->insertData('tbl_service_product', ['service_invoice' => $service_invoice, 'product' => $name]);
        }

        foreach ($projects as $name) {
            $res = $this->Function_model->insertData('tbl_service_project', ['service_invoice' => $service_invoice, 'projects' => $name]);
        }

        foreach ($ves_name as $name) {
            $res = $this->Function_model->insertData('tbl_vessel_name', ['service_invoice' => $service_invoice, 'ves_name' => $name]);
        }

        foreach ($admin_name as $name) {
            $res = $this->Function_model->insertData('tbl_engineer', ['service_invoice' => $service_invoice, 'engineer' => $name]);
        }

        foreach ($pack_name as $item1) {
            foreach ($pack_internet as $item2) {

                $check = $this->Function_model->getDataRow('tbl_package', ['pack_name' => $item1, 'pack_internet' => $item2]);

                if ($check != null) {
                    $res = $this->Function_model->insertData('tbl_service_package', ['service_invoice' => $service_invoice, 'pack_name' => $item1, 'pack_internet' => $item2]);
                }
            }
        }

        $res = $this->Function_model->insertData('tbl_service', $data_arr);



        if ($res == TRUE) {

            $this->Function_model->insertData('tbl_notify', ['service_invoice' => $service_invoice, 'status' => 'created']);

            $token = "aOQ43KJ6pn623siACkh3zbCtRtxrGB32mVe4WeLLCke"; // LINE Token Wq0HPXFx0ou0TIVDHCX0KztKNRq5daZeSejEmZ0YqXQ
            //Message
            $mymessage = "Job Order : $service_invoice \n"; //Set new line with '\n'
            $mymessage .= "กรุณาเพิ่มEquipment  \n";
            $mymessage .= "support.shipexpert.info/pages/service_detail/$service_invoice \n";
            $mymessage .= "Engineer :";
            $i = 1;
            foreach ($admin_name as $name) {
                $mymessage .= "$name";
                if ($i < count($admin_name)) {
                    $mymessage .= ",";
                }
            }


            $data = array(
                'message' => $mymessage,
            );
            $chOne = curl_init();
            curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
            curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($chOne, CURLOPT_POST, 1);
            curl_setopt($chOne, CURLOPT_POSTFIELDS, $data);
            curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
            $headers = array('Method: POST', 'Content-type: multipart/form-data', 'Authorization: Bearer ' . $token,);
            curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($chOne);
            //Check error
            if (curl_error($chOne)) {
                echo 'error:' . curl_error($chOne);
            } else {
                $result_ = json_decode($result, true);
            }

            echo json_encode([

                'status' => 'SUCCESS',

                'service_invoice' => $service_invoice

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'Create Service Fail!'

            ]);

            exit();
        }
    }

    //ลบสถานะ

    function update_status($invoice)
    {
        if ($invoice == null) {

            show_404();
            exit();
        }

        $data_arr = [
            'service_status' => 'uninstall'
        ];

        $where = [
            'service_invoice' => $invoice
        ];

        $res = $this->Function_model->updateData('tbl_service', $where, $data_arr);

        if ($res == TRUE) {

            echo json_encode([

                'status' => 'SUCCESS',

                'service_invoice' => $invoice

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'Create Service Fail!'

            ]);

            exit();
        }

        $this->load->view('pages/');
    }


    //ดึงข้อมูลใบซ่อม

    function get_invoice()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        if ($service_invoice == null) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No data input'

            ]);

            exit();
        }

        $res = $this->Function_model->getDataRow('tbl_service', ['service_invoice' => $service_invoice]);

        if ($res != null) {

            echo json_encode([

                'status' => 'SUCCESS',

                'data' => [

                    'service_id' => $res->service_id,

                    'service_invoice' => $res->service_invoice,

                    'option_vat' => $res->option_vat,

                    'service_total' => number_format($res->service_total, 2),

                    'service_price' => number_format($res->service_price, 2),

                    'service_discount' => number_format($res->service_discount, 2),

                    'service_vat' => number_format($res->service_vat, 2)

                ]

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'ไม่พบเลขใบส่งซ่อม'

            ]);

            exit();
        }
    }

    //ค้นหาข้อมูลจากเลขทะเบียนรถ

    function search_license_plate()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $license_plate = $this->input->post('license_plate');

        if ($license_plate == null) {

            echo '<div class="row">

            <div class="col-md-12 mt-2 mb-2 text-center">

                <h5 class="text-info">แจ้งเตือน! <small>กรอกเลขทะเบียนรถที่ต้องการค้นหา</small></h5>

            </div>

            </div>';

            exit();
        }

        $this->db->like('license_plate', $license_plate, 'after');

        $data['customer'] = $this->db->get('tbl_customer')->result();

        $this->load->view('components/search_customer', $data);
    }



    //ตารางรายการสินค้าและบริการ

    function tbl_service_detail()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        if ($service_invoice == null) {

            show_404();

            exit();
        }

        $data['service_detail'] = $this->Function_model->fetchDataResult('tbl_service_detail', ['service_invoice' => $service_invoice]);

        $data['service'] = $this->Function_model->getDataRow('tbl_service', ['service_invoice' => $service_invoice]);

        $this->load->view('components/tbl_service_detail', $data);
    }

    //อัพเดท รีมาร์ค

    function updateRemarkAdd()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        $remark_add = $this->input->post('remark_add');

        if ($service_invoice == null || $remark_add == null) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No data input'

            ]);

            exit();
        }


        $res = $this->Function_model->updateData('tbl_service', ['service_invoice' => $service_invoice], ['remark_add' => $remark_add]);

        if ($res == TRUE) {

            echo json_encode([

                'status' => 'SUCCESS',

                'message' => 'เพิ่มรายการสินค้าและบริการเรียบร้อยแล้ว'

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'มีบางอย่างผิดพลาด กรุณาทำรายการใหม่อีกครั้ง'

            ]);
        }
    }

    //เพิ่มสินค้าและบริการ

    function add_service_detail()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        $service_name = $this->input->post('service_name');

        $amount = $this->input->post('amount');

        $detail = $this->input->post('detail');

        $service = $this->Function_model->getDataRow('tbl_service', ['service_invoice' => $service_invoice]);

        $service_detail = $this->Function_model2->getDataRow('sma_products', ['name' => $service_name]);


        if ($service_invoice == null || $service_name == null || $amount == null || $service_detail == NULL) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No data input'

            ]);

            exit();
        }

        if ($service == null) {

            show_404();

            exit();
        }

        $data_arr = [

            'service_invoice' => $service_invoice,

            'service_name' => $service_name,

            'amount' => $amount,

            'service_detail' => $service_detail->details,

            'detail' => $detail

        ];

        //insert to tbl_service_detail

        $res_detail = $this->Function_model->insertData('tbl_service_detail', $data_arr);

        if ($res_detail != TRUE) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'Have someting wrong when insert service_detail'

            ]);

            exit();
        }


        if ($res_detail == TRUE) {

            echo json_encode([

                'status' => 'SUCCESS',

                'message' => 'เพิ่มรายการสินค้าและบริการเรียบร้อยแล้ว'

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'มีบางอย่างผิดพลาด กรุณาทำรายการใหม่อีกครั้ง'

            ]);
        }
    }

    //อัพเดตส่วนลด

    function update_discount()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        $service_discount = $this->input->post('service_discount');



        if ($service_invoice == null || $service_discount == null) {

            show_404();

            exit();
        }

        $res_discount = $this->Function_model->updateData('tbl_service', ['service_invoice' => $service_invoice], ['service_discount' => $service_discount]);

        if ($res_discount != TRUE) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'Have something wrong add discount'

            ]);

            exit();
        }

        $service = $this->Function_model->getDataRow('tbl_service', ['service_invoice' => $service_invoice]);

        if ($service == null) {

            show_404();

            exit();
        }

        //ขั้นตอนการคำนวณสรุปยอด

        $sum_detail = $this->Function_model->getSum('tbl_service_detail', 'total', ['service_invoice' => $service_invoice]);

        switch ($service->option_vat) {

            case 'in':

                $sum_after_discount = $sum_detail - $service->service_discount; //ยอดหลังหักจากส่วนลด

                $service_vat = ($sum_after_discount * 7) / 107; //หาค่าของ vat 7%

                $service_price = $sum_after_discount - $service_vat;

                $service_total = $sum_after_discount;

                break;

            case 'out':

                $sum_after_discount = $sum_detail - $service->service_discount; //ยอดหลังหักจากส่วนลด

                $service_vat = ($sum_after_discount * 7) / 100; //หาค่าของ vat 7%

                $service_price = $sum_after_discount;

                $service_total = ($sum_detail - $service->service_discount) + $service_vat;

                break;

            default:

                $service_total = $sum_detail - $service->service_discount;

                $service_price = $sum_detail - $service->service_discount;

                $service_vat = 0;
        }

        $data_arr = [

            'service_total' => $service_total,

            'service_vat' => $service_vat,

            'service_price' => $service_price

        ];

        $res = $this->Function_model->updateData('tbl_service', ['service_invoice' => $service_invoice], $data_arr);



        if ($res == TRUE) {

            echo json_encode([

                'status' => 'SUCCESS',

                'message' => 'แก้ไขส่วนลดเรียบร้อยแล้ว'

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'มีบางอย่างผิดพลาด กรุณาทำรายการใหม่อีกครั้ง'

            ]);
        }
    }

    //ดึงเอาส่วนลด

    function get_discount()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        if ($service_invoice == null) {

            show_404();

            exit();
        }

        $res = $this->Function_model->getDataRow('tbl_service', ['service_invoice' => $service_invoice]);

        if ($res != null) {

            echo json_encode([

                'status' => 'SUCCESS',

                'data' => [

                    'service_discount' => $res->service_discount

                ]

            ]);
        }
    }

    //ลบสินค้าและบริการ

    function del_service_detail()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        $id = $this->input->post('detail_id');

        $service = $this->Function_model->getDataRow('tbl_service', ['service_invoice' => $service_invoice]);

        if ($id == null || $service_invoice == null) {

            show_404();

            exit();
        }

        if ($service->service_status == 'done' || $service->service_status == 'fixed') {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'ไม่สามารถลบได้ เนื่องจากซ่อมเสร็จแล้ว หรือรับรถไปแล้ว'

            ]);

            exit();
        }

        $where_arr = [

            'service_invoice' => $service_invoice,

            'id' => $id

        ];

        $res_del = $this->Function_model->deleteData('tbl_service_detail', $where_arr);

        if ($res_del != TRUE) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'Cannot Delete This Service Detail'

            ]);

            exit();
        }

        if ($res_del == TRUE) {

            echo json_encode([

                'status' => 'SUCCESS',

                'message' => 'ลบสินค้าและบริการเรียบร้อยแล้ว'

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'มีบางอย่างผิดพลาดกรุณาทำรายการใหม่อีกครั้ง'

            ]);

            exit();
        }
    }



    //อัพเดตฟังก์ชั่นของ vat 

    function update_option_vat()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        $option_vat = $this->input->post('option_vat');

        if ($service_invoice == null) {

            show_404();

            exit();
        }



        $service = $this->Function_model->getDataRow('tbl_service', ['service_invoice' => $service_invoice]);

        if ($service == null) {

            show_404();

            exit();
        }

        $data_arr = [

            'option_vat' => $option_vat

        ];

        $res_option_vat = $this->Function_model->updateData('tbl_service', ['service_invoice' => $service_invoice], $data_arr);

        if ($res_option_vat != TRUE) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'Cannot update option for Vat'

            ]);

            exit();
        }

        //ขั้นตอนการคำนวณสรุปยอด

        $sum_detail = $this->Function_model->getSum('tbl_service_detail', 'total', ['service_invoice' => $service_invoice]);

        switch ($option_vat) {

            case 'in':

                $sum_after_discount = $sum_detail - $service->service_discount; //ยอดหลังหักจากส่วนลด

                $service_vat = ($sum_after_discount * 7) / 107; //หาค่าของ vat 7%

                $service_price = $sum_after_discount - $service_vat;

                $service_total = $sum_after_discount;

                break;

            case 'out':

                $sum_after_discount = $sum_detail - $service->service_discount; //ยอดหลังหักจากส่วนลด

                $service_vat = ($sum_after_discount * 7) / 100; //หาค่าของ vat 7%

                $service_price = $sum_after_discount;

                $service_total = ($sum_detail - $service->service_discount) + $service_vat;

                break;

            default:

                $service_total = $sum_detail - $service->service_discount;

                $service_price = $sum_detail - $service->service_discount;

                $service_vat = 0;
        }

        $data_arr = [

            'service_total' => $service_total,

            'service_vat' => $service_vat,

            'service_price' => $service_price

        ];

        $res = $this->Function_model->updateData('tbl_service', ['service_invoice' => $service_invoice], $data_arr);

        if ($res == TRUE) {

            echo json_encode([

                'status' => 'SUCCESS',

                'message' => 'อัพเดตข้อมูลภาษีสำเร็จ'

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'มีบางอย่างผิดพลาดกรุณาทำรายการใหม่อีกครั้ง'

            ]);

            exit();
        }
    }

    // Option history

    function option_history()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }
        echo '<option value="" disabled selected>เลือกหัวข้อ</option>';
        echo '<option value="Add Service Order" >Add Service Order</option>';
        echo '<option value="Edit Customer" >Edit Customer</option>';
    }

    //Order ไม่ครบ

    function Back_Order()
    {


        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('invoice');

        $his_name = $this->input->post('his_name');

        $descript = $this->input->post('descript');

        if ($service_invoice == null || $his_name == null || $descript == null) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No data input'

            ]);

            exit();
        }

        $res_his = count($this->Function_model->fetchDataResult('tbl_history', ['service_invoice' => $service_invoice], 'id', 'ASC'));
        $data = [

            'service_invoice' => $service_invoice,

            'his_name' => $his_name,

            'descript' => $descript

        ];

        $data_arr = [

            'service_status' => 'created',
            'his_count' => $res_his + 1

        ];

        $where_arr = [

            'service_invoice' => $service_invoice

        ];

        $res = $this->Function_model->updateData('tbl_service', $where_arr, $data_arr);

        $res = $this->Function_model->insertData('tbl_history', $data);

        $engineer = $this->Function_model->fetchDataResult('tbl_engineer', ['service_invoice' => $service_invoice]);

        if ($res == TRUE) {

            $token = "aOQ43KJ6pn623siACkh3zbCtRtxrGB32mVe4WeLLCke"; // LINE Token Wq0HPXFx0ou0TIVDHCX0KztKNRq5daZeSejEmZ0YqXQ
            //Message
            $mymessage = "Job Order : $service_invoice \n"; //Set new line with '\n'
            $mymessage .= "มีการแก้ไขข้อมูล กรุณาตรวจสอบ \n";
            $mymessage .= "support.shipexpert.info/pages/service_detail/$service_invoice \n";
            $mymessage .= "Engineer :";
            $i = 1;
            foreach ($engineer as $item) {
                $mymessage .= "$item->engineer ";
                if ($i < count($engineer)) {
                    $mymessage .= ",";
                }
            }

            $data = array(
                'message' => $mymessage,
            );
            $chOne = curl_init();
            curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
            curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($chOne, CURLOPT_POST, 1);
            curl_setopt($chOne, CURLOPT_POSTFIELDS, $data);
            curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
            $headers = array('Method: POST', 'Content-type: multipart/form-data', 'Authorization: Bearer ' . $token,);
            curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($chOne);
            //Check error
            if (curl_error($chOne)) {
                echo 'error:' . curl_error($chOne);
            } else {
                $result_ = json_decode($result, true);
            }

            echo json_encode([

                'status' => 'SUCCESS',

                'message' => 'ยืนยันการส่งซ่อมเรียบร้อยแล้ว'

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'ยืนยันไม่สำเร็จ กรุณาทำรายการใหม่อีกครั้ง'

            ]);

            exit();
        }
    }



    //verify

    function confirm_verify()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        if ($service_invoice == null) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No data input'

            ]);

            exit();
        }



        $service_detail = $this->Function_model->fetchDataResult('tbl_service_detail', ['service_invoice' => $service_invoice]);

        if ($service_detail == null) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'ไม่มีรายการซ่อมหรือบริการ ไม่สามารถยืนยันงานบริการหรือซ่อมได้'

            ]);

            exit();
        }

        $data_arr = [

            'service_status' => 'verify'

        ];

        $where_arr = [

            'service_invoice' => $service_invoice

        ];

        $res = $this->Function_model->updateData('tbl_service', $where_arr, $data_arr);

        $engineer = $this->Function_model->fetchDataResult('tbl_engineer', ['service_invoice' => $service_invoice]);

        if ($res == TRUE) {

            $token = "aOQ43KJ6pn623siACkh3zbCtRtxrGB32mVe4WeLLCke"; // LINE Token Wq0HPXFx0ou0TIVDHCX0KztKNRq5daZeSejEmZ0YqXQ
            //Message
            $mymessage = "Job Order : $service_invoice \n"; //Set new line with '\n'
            $mymessage .= "กรุณาตรวจสอบข้อมูลและยืนยัน \n";
            $mymessage .= "support.shipexpert.info/pages/service_detail/$service_invoice \n";
            $mymessage .= "Engineer :";
            $i = 1;
            foreach ($engineer as $item) {
                $mymessage .= "$item->engineer ";
                if ($i < count($engineer)) {
                    $mymessage .= ",";
                }
            }
            $data = array(
                'message' => $mymessage,
            );
            $chOne = curl_init();
            curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
            curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($chOne, CURLOPT_POST, 1);
            curl_setopt($chOne, CURLOPT_POSTFIELDS, $data);
            curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
            $headers = array('Method: POST', 'Content-type: multipart/form-data', 'Authorization: Bearer ' . $token,);
            curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($chOne);
            //Check error
            if (curl_error($chOne)) {
                echo 'error:' . curl_error($chOne);
            } else {
                $result_ = json_decode($result, true);
            }


            echo json_encode([

                'status' => 'SUCCESS',

                'message' => 'ยืนยันการส่งซ่อมเรียบร้อยแล้ว'

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'ยืนยันไม่สำเร็จ กรุณาทำรายการใหม่อีกครั้ง'

            ]);

            exit();
        }
    }


    //Approve

    function confirm_check()
    {


        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        if ($service_invoice == null) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No data input'

            ]);

            exit();
        }

        $service_detail = $this->Function_model->fetchDataResult('tbl_service_detail', ['service_invoice' => $service_invoice]);

        if ($service_detail == null) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'ไม่มีรายการซ่อมหรือบริการ ไม่สามารถยืนยันงานบริการหรือซ่อมได้'

            ]);

            exit();
        }

        $data_arr = [

            'service_status' => 'approve'

        ];

        $where_arr = [

            'service_invoice' => $service_invoice

        ];

        $res = $this->Function_model->updateData('tbl_service', $where_arr, $data_arr);

        if ($res == TRUE) {

            $token = "aOQ43KJ6pn623siACkh3zbCtRtxrGB32mVe4WeLLCke"; // LINE Token Wq0HPXFx0ou0TIVDHCX0KztKNRq5daZeSejEmZ0YqXQ
            //Message
            $mymessage = "Job Order : $service_invoice \n"; //Set new line with '\n'
            $mymessage .= "ต้องการ การApprove Order \n";
            $mymessage .= "support.shipexpert.info/pages/service_detail/$service_invoice \n";
            $mymessage .= "Management : MR. Kirk Vilaimal";


            $data = array(
                'message' => $mymessage,
            );
            $chOne = curl_init();
            curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
            curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($chOne, CURLOPT_POST, 1);
            curl_setopt($chOne, CURLOPT_POSTFIELDS, $data);
            curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
            $headers = array('Method: POST', 'Content-type: multipart/form-data', 'Authorization: Bearer ' . $token,);
            curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($chOne);
            //Check error
            if (curl_error($chOne)) {
                echo 'error:' . curl_error($chOne);
            } else {
                $result_ = json_decode($result, true);
            }

            echo json_encode([

                'status' => 'SUCCESS',

                'message' => 'ยืนยันการส่งซ่อมเรียบร้อยแล้ว'

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'ยืนยันไม่สำเร็จ กรุณาทำรายการใหม่อีกครั้ง'

            ]);

            exit();
        }
    }


    //ยืนยันการแจ้งซ่อม

    function confirm_fix()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        if ($service_invoice == null) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No data input'

            ]);

            exit();
        }

        $service_detail = $this->Function_model->fetchDataResult('tbl_service_detail', ['service_invoice' => $service_invoice]);

        if ($service_detail == null) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'ไม่มีรายการซ่อมหรือบริการ ไม่สามารถยืนยันงานบริการหรือซ่อมได้'

            ]);

            exit();
        }

        $data_arr = [

            'service_status' => 'wait'

        ];

        $where_arr = [

            'service_invoice' => $service_invoice

        ];

        $res = $this->Function_model->updateData('tbl_service', $where_arr, $data_arr);

        $engineer = $this->Function_model->fetchDataResult('tbl_engineer', $where_arr);

        if ($res == TRUE) {

            $token = "aOQ43KJ6pn623siACkh3zbCtRtxrGB32mVe4WeLLCke"; // LINE Token Wq0HPXFx0ou0TIVDHCX0KztKNRq5daZeSejEmZ0YqXQ
            //Message
            $mymessage = "Job Order : $service_invoice \n"; //Set new line with '\n'
            $mymessage .= "กำลังดำเนินการติดตั้ง \n";
            $mymessage .= "support.shipexpert.info/pages/service_detail/$service_invoice \n";
            $mymessage .= "Engineer :";
            $i = 1;
            foreach ($engineer as $item) {
                $mymessage .= "$item->engineer ";
                if ($i < count($engineer)) {
                    $mymessage .= ",";
                }
            }


            $data = array(
                'message' => $mymessage,
            );
            $chOne = curl_init();
            curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
            curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($chOne, CURLOPT_POST, 1);
            curl_setopt($chOne, CURLOPT_POSTFIELDS, $data);
            curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
            $headers = array('Method: POST', 'Content-type: multipart/form-data', 'Authorization: Bearer ' . $token,);
            curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($chOne);
            //Check error
            if (curl_error($chOne)) {
                echo 'error:' . curl_error($chOne);
            } else {
                $result_ = json_decode($result, true);
            }

            echo json_encode([

                'status' => 'SUCCESS',

                'message' => 'ยืนยันการส่งซ่อมเรียบร้อยแล้ว'

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'ยืนยันไม่สำเร็จ กรุณาทำรายการใหม่อีกครั้ง'

            ]);

            exit();
        }
    }


    //ยืนยันการซ่อมเสร็จแล้ว

    function confirm_fixed()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice =  $this->input->post('service_invoice');

        if ($service_invoice == null) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No data input'

            ]);

            exit();
        }

        $res = $this->Function_model->updateData('tbl_service', ['service_invoice' => $service_invoice], ['service_status' => 'fixed']);

        $engineer = $this->Function_model->fetchDataResult('tbl_engineer', ['service_invoice' => $service_invoice]);

        if ($res == TRUE) {

            $token = "aOQ43KJ6pn623siACkh3zbCtRtxrGB32mVe4WeLLCke"; // LINE Token Wq0HPXFx0ou0TIVDHCX0KztKNRq5daZeSejEmZ0YqXQ
            //Message
            $mymessage = "Job Order : $service_invoice \n"; //Set new line with '\n'
            $mymessage .= "ติดตั้งเสร็จเรียบร้อย \n";
            $mymessage .= "support.shipexpert.info/pages/service_detail/$service_invoice \n";
            $mymessage .= "Engineer :";
            $i = 1;
            foreach ($engineer as $item) {
                $mymessage .= "$item->engineer ";
                if ($i < count($engineer)) {
                    $mymessage .= ",";
                }
            }

            $data = array(
                'message' => $mymessage,
            );
            $chOne = curl_init();
            curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
            curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($chOne, CURLOPT_POST, 1);
            curl_setopt($chOne, CURLOPT_POSTFIELDS, $data);
            curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
            $headers = array('Method: POST', 'Content-type: multipart/form-data', 'Authorization: Bearer ' . $token,);
            curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($chOne);
            //Check error
            if (curl_error($chOne)) {
                echo 'error:' . curl_error($chOne);
            } else {
                $result_ = json_decode($result, true);
            }

            echo json_encode([

                'status' => 'SUCCESS',

                'message' => 'ยืนยันการซ่อมเสร็จ เรียบร้อยแล้ว'

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'มีบางอย่างผิดพลาด กรุณาทำรายการอีกครั้ง'

            ]);

            exit();
        }
    }

    //ยืนยันการแจ้งซ่อม

    function uninstall()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        if ($service_invoice == null) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No data input'

            ]);

            exit();
        }

        $service_detail = $this->Function_model->fetchDataResult('tbl_service_detail', ['service_invoice' => $service_invoice]);

        if ($service_detail == null) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'ไม่มีรายการซ่อมหรือบริการ ไม่สามารถยืนยันงานบริการหรือซ่อมได้'

            ]);

            exit();
        }

        $data_arr = [

            'service_status' => 'uninstall'

        ];

        $where_arr = [

            'service_invoice' => $service_invoice

        ];

        $res = $this->Function_model->updateData('tbl_service', $where_arr, $data_arr);

        $engineer = $this->Function_model->fetchDataResult('tbl_engineer', $where_arr);

        if ($res == TRUE) {

            $token = "aOQ43KJ6pn623siACkh3zbCtRtxrGB32mVe4WeLLCke"; // LINE Token Wq0HPXFx0ou0TIVDHCX0KztKNRq5daZeSejEmZ0YqXQ
            //Message 
            $mymessage = "Job Order : $service_invoice \n"; //Set new line with '\n'
            $mymessage .= "รอการอนุมัติ ถอนการติดตั้ง \n";
            $mymessage .= "support.shipexpert.info/pages/service_detail/$service_invoice \n";
            $mymessage .= "Engineer :";
            $i = 1;
            foreach ($engineer as $item) {
                $mymessage .= "$item->engineer ";
                if ($i < count($engineer)) {
                    $mymessage .= ",";
                }
            }

            $data = array(
                'message' => $mymessage,
            );
            $chOne = curl_init();
            curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
            curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($chOne, CURLOPT_POST, 1);
            curl_setopt($chOne, CURLOPT_POSTFIELDS, $data);
            curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
            $headers = array('Method: POST', 'Content-type: multipart/form-data', 'Authorization: Bearer ' . $token,);
            curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($chOne);
            //Check error
            if (curl_error($chOne)) {
                echo 'error:' . curl_error($chOne);
            } else {
                $result_ = json_decode($result, true);
            }


            echo json_encode([

                'status' => 'SUCCESS',

                'message' => 'ยืนยันการส่งซ่อมเรียบร้อยแล้ว'

            ]);
            curl_close($chOne);
            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'ยืนยันไม่สำเร็จ กรุณาทำรายการใหม่อีกครั้ง'

            ]);

            exit();
        }
    }

    //ยืนยันรับรถ

    function confirm_pick_car()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        if ($service_invoice == null) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No Data Input'

            ]);

            exit();
        }



        $data_arr = [

            'ves_maintenance' => 'Uninstall',

            'service_status' => 'done'

        ];

        $res = $this->Function_model->updateData('tbl_service', ['service_invoice' => $service_invoice], $data_arr);

        $engineer = $this->Function_model->fetchDataResult('tbl_engineer', ['service_invoice' => $service_invoice]);

        if ($res == TRUE) {

            $token = "aOQ43KJ6pn623siACkh3zbCtRtxrGB32mVe4WeLLCke"; // LINE Token aOQ43KJ6pn623siACkh3zbCtRtxrGB32mVe4WeLLCke
            //Message
            $mymessage = "Job Order : $service_invoice \n"; //Set new line with '\n'
            $mymessage .= "กำลังถอนการติดตั้ง \n";
            $mymessage .= "support.shipexpert.info/pages/service_detail/$service_invoice \n";
            $mymessage .= "Engineer :";
            $i = 1;
            foreach ($engineer as $item) {
                $mymessage .= "$item->engineer ";
                if ($i < count($engineer)) {
                    $mymessage .= ",";
                }
            }

            $data = array(
                'message' => $mymessage,
            );
            $chOne = curl_init();
            curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
            curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($chOne, CURLOPT_POST, 1);
            curl_setopt($chOne, CURLOPT_POSTFIELDS, $data);
            curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
            $headers = array('Method: POST', 'Content-type: multipart/form-data', 'Authorization: Bearer ' . $token,);
            curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($chOne);
            //Check error
            if (curl_error($chOne)) {
                echo 'error:' . curl_error($chOne);
            } else {
                $result_ = json_decode($result, true);
            }
            echo json_encode([

                'status' => 'SUCCESS',

                'message' => 'ยืนยันการรับรถเรียบร้อยแล้ว'

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'มีบางอย่างผิดพลาด กรุณาทำรายการใหม่อีกครั้ง'

            ]);

            exit();
        }
    }



    //ยกเลิกรับงานซ่อม

    function cancel_service()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        $service = $this->Function_model->getDataRow('tbl_service', ['service_invoice' => $service_invoice]);

        if ($service_invoice == null || $service == null) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No Data Input'

            ]);

            exit();
        }

        //ตรวจสอบในตาราง tbl_atp_upload ถ้ามีให้ทำการลบข้อมูล

        $uploads_atp = $this->Function_model->fetchDataResult('tbl_atp_upload', ['service_invoice' => $service_invoice]);


        if ($uploads_atp != null || $service_invoice != null) {

            //ลบไฟล์ 

            foreach ($uploads_atp as $index) {
                if ($index->page == 'page4') {
                    unlink('upload_atp/' . $service_invoice . '/network//' . $index->uploads_name);
                } elseif ($index->page == 'page10') {
                    unlink('upload_atp/' . $service_invoice . '/app_a//' . $index->uploads_name);
                } elseif ($index->page == 'page11') {
                    unlink('upload_atp/' . $service_invoice . '/app_b//' . $index->uploads_name);
                } else {
                    unlink('upload_atp/' . $service_invoice . '/app_c//' . $index->uploads_name);
                }
            }

            rmdir('upload_atp/' . $service_invoice . '/network');
            rmdir('upload_atp/' . $service_invoice . '/app_a');
            rmdir('upload_atp/' . $service_invoice . '/app_b');
            rmdir('upload_atp/' . $service_invoice . '/app_c');
            //ลบโฟล์เดอร์ไฟล์

            rmdir('upload_atp/' . $service_invoice);

            $this->Function_model->deleteData('tbl_atp_upload', ['service_invoice' => $service_invoice]);
        }

        //ตรวจสอบในตาราง tbl_atp_detail ถ้ามีให้ทำการลบข้อมูล

        $atp_detail = $this->Function_model->fetchDataResult('tbl_atp_detail',  ['service_invoice' => $service_invoice]);

        if ($atp_detail != NULL || $service_invoice != null) {

            $this->Function_model->deleteData('tbl_atp_detail', ['service_invoice' => $service_invoice]);
        }

        //ตรวจสอบในตาราง tbl_atp_history ถ้ามีให้ทำการลบข้อมูล

        $atp_history = $this->Function_model->fetchDataResult('tbl_atp_history',  ['service_invoice' => $service_invoice]);

        if ($atp_history != NULL || $service_invoice != null) {

            $this->Function_model->deleteData('tbl_atp_history', ['service_invoice' => $service_invoice]);
        }

        //ตรวจสอบในตาราง tbl_atp_upload_back ถ้ามีให้ทำการลบข้อมูล

        $uploads = $this->Function_model->fetchDataResult('tbl_atp_upload_back', ['service_invoice' => $service_invoice]);


        if ($uploads != null || $service_invoice != null) {

            //ลบไฟล์ 

            foreach ($uploads as $index) {
                unlink('upload_atp_back/' . $service_invoice . '/' . $index->uploads_name);
            }

            //ลบโฟล์เดอร์ไฟล์

            rmdir('upload_atp_back/' . $service_invoice);

            $this->Function_model->deleteData('tbl_atp_upload_back', ['service_invoice' => $service_invoice]);
        }

        //ตรวจสอบในตาราง tbl_uploads ถ้ามีให้ทำการลบข้อมูล

        $uploads = $this->Function_model->fetchDataResult('tbl_uploads', ['service_invoice' => $service_invoice]);


        if ($uploads != null || $service_invoice != null) {

            //ลบไฟล์ 

            foreach ($uploads as $index) {
                unlink('uploads/' . $service_invoice . '/' . $index->uploads_name);
            }

            //ลบโฟล์เดอร์ไฟล์

            rmdir('uploads/' . $service_invoice);

            $this->Function_model->deleteData('tbl_uploads', ['service_invoice' => $service_invoice]);
        }

        //ตรวจสอบในตาราง tbl_uploads_back ถ้ามีให้ทำการลบข้อมูล

        $uploads = $this->Function_model->fetchDataResult('tbl_uploads_back', ['service_invoice' => $service_invoice]);


        if ($uploads != null || $service_invoice != null) {

            //ลบไฟล์ 

            foreach ($uploads as $index) {
                unlink('uploads_back/' . $service_invoice . '/' . $index->uploads_name);
            }

            //ลบโฟล์เดอร์ไฟล์

            rmdir('uploads_back/' . $service_invoice);

            $this->Function_model->deleteData('tbl_uploads_back', ['service_invoice' => $service_invoice]);
        }

        //ตรวจสอบในตาราง tbl_service_detail ถ้ามีให้ทำการลบข้อมูล

        $service_detail = $this->Function_model->fetchDataResult('tbl_service_detail', ['service_invoice' => $service_invoice]);

        if ($service_detail != null) {

            $this->Function_model->deleteData('tbl_service_detail', ['service_invoice' => $service_invoice]);
        }

        //ตรวจสอบในตาราง tbl_notify ถ้ามีให้ทำการลบข้อมูล

        $notify = $this->Function_model->fetchDataResult('tbl_notify', ['service_invoice' => $service_invoice]);

        if ($notify != null) {

            $this->Function_model->deleteData('tbl_notify', ['service_invoice' => $service_invoice]);
        }

        //ตรวจสอบในตาราง tbl_service_product ถ้ามีให้ทำการลบข้อมูล

        $product = $this->Function_model->fetchDataResult('tbl_service_product', ['service_invoice' => $service_invoice]);

        if ($product != null) {

            $this->Function_model->deleteData('tbl_service_product', ['service_invoice' => $service_invoice]);
        }

        //ตรวจสอบในตาราง tbl_service_project ถ้ามีให้ทำการลบข้อมูล

        $projects = $this->Function_model->fetchDataResult('tbl_service_project', ['service_invoice' => $service_invoice]);

        if ($projects != null) {

            $this->Function_model->deleteData('tbl_service_project', ['service_invoice' => $service_invoice]);
        }

        //ตรวจสอบในตาราง tbl_service_package ถ้ามีให้ทำการลบข้อมูล

        $projects = $this->Function_model->fetchDataResult('tbl_service_package', ['service_invoice' => $service_invoice]);

        if ($projects != null) {

            $this->Function_model->deleteData('tbl_service_package', ['service_invoice' => $service_invoice]);
        }

        //ตรวจสอบในตาราง tbl_vessel_name ถ้ามีให้ทำการลบข้อมูล

        $ves_name = $this->Function_model->fetchDataResult('tbl_vessel_name', ['service_invoice' => $service_invoice]);

        if ($ves_name != null) {

            $this->Function_model->deleteData('tbl_vessel_name', ['service_invoice' => $service_invoice]);
        }

        //ตรวจสอบในตาราง tbl_engineer ถ้ามีให้ทำการลบข้อมูล

        $engineer = $this->Function_model->fetchDataResult('tbl_engineer', ['service_invoice' => $service_invoice]);

        if ($engineer != null) {

            $this->Function_model->deleteData('tbl_engineer', ['service_invoice' => $service_invoice]);
        }

        //ตรวจสอบในตาราง tbl_history ถ้ามีให้ทำการลบข้อมูล

        $history = $this->Function_model->fetchDataResult('tbl_history', ['service_invoice' => $service_invoice]);

        if ($history != null) {

            $this->Function_model->deleteData('tbl_history', ['service_invoice' => $service_invoice]);
        }

        //ลบ tbl_service

        $res = $this->Function_model->deleteData('tbl_service', ['service_invoice' => $service_invoice]);

        if ($res == TRUE) {

            $this->Function_model->insertData('tbl_notify', ['service_invoice' => $service_invoice, 'status' => 'created']);

            $token = "aOQ43KJ6pn623siACkh3zbCtRtxrGB32mVe4WeLLCke"; // LINE Token Wq0HPXFx0ou0TIVDHCX0KztKNRq5daZeSejEmZ0YqXQ
            //Message
            $mymessage = "Job Order : $service_invoice \n"; //Set new line with '\n'
            $mymessage .= "ถูกลบออกจากระบบ  \n";
            $mymessage .= "support.shipexpert.info/pages/service_detail/$service_invoice \n";

            $data = array(
                'message' => $mymessage,
            );
            $chOne = curl_init();
            curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
            curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($chOne, CURLOPT_POST, 1);
            curl_setopt($chOne, CURLOPT_POSTFIELDS, $data);
            curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
            $headers = array('Method: POST', 'Content-type: multipart/form-data', 'Authorization: Bearer ' . $token,);
            curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($chOne);
            //Check error
            if (curl_error($chOne)) {
                echo 'error:' . curl_error($chOne);
            } else {
                $result_ = json_decode($result, true);
            }

            echo json_encode([

                'status' => 'SUCCESS',

                'message' => 'ลบเรียบร้อยแล้ว'

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'มีบางอย่างผิพลาด กรุณาทำรายการใหม่อีกครั้ง'

            ]);

            exit();
        }
    }

    function create_atp()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        $page6_11 = $this->input->post('page6_11');

        $page6_12 = $this->input->post('page6_12');

        $page6_13 = $this->input->post('page6_13');

        $page6_21 = $this->input->post('page6_21');

        $page6_31 = $this->input->post('page6_31');

        $page6_32 = $this->input->post('page6_32');

        $page6_41 = $this->input->post('page6_41');

        $page7_41 = $this->input->post('page7_41');

        $remark_page6 = $this->input->post('remark_page6');

        $add_info = $this->input->post('add_info');

        $mac_page7 = $this->input->post('mac_page7');

        $type_page7 = $this->input->post('type_page7');

        $email_page7 = $this->input->post('email_page7');

        $website_page7 = $this->input->post('website_page7');

        $download = $this->input->post('download');

        $upload = $this->input->post('upload');

        $version = $this->input->post('version');

        $date = $this->input->post('date');

        $author = $this->input->post('author');

        $detail = $this->input->post('detail');

        $count = $this->input->post('count');

        $file_network = $_FILES['files_network'];

        $file_app_a = $_FILES['files_app_a'];

        $file_app_b = $_FILES['files_app_b'];

        $file_app_c = $_FILES['files_app_c'];

        if (
            $remark_page6 == NULL || $download == NULL || $upload == NULL || $add_info == NULL || $page6_11 == NULL || $page6_12 == NULL || $page6_13 == NULL ||
            $page6_21 == NULL || $page6_31 == NULL || $page6_32 == NULL || $page6_41 == NULL || $page7_41 == NULL
        ) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No Data Input'

            ]);

            exit();
        }

        $data = [
            'service_invoice' => $service_invoice,
            'page6_11' => $page6_11,
            'page6_12' => $page6_12,
            'page6_13' => $page6_13,
            'page6_21' => $page6_21,
            'page6_31' => $page6_31,
            'page6_32' => $page6_32,
            'page6_41' => $page6_41,
            'page7_41' => $page7_41,
            'download' => $download,
            'upload' => $upload,
            'remark_page6_11' => $remark_page6,
            'additional' => $add_info,
            'mac_address' => $mac_page7,
            'type_device' => $type_page7,
            'email' => $email_page7,
            'website' => $website_page7,

        ];

        $res = $this->Function_model->insertData('tbl_atp_detail', $data);

        for ($num = 0; $num < ($count - 1); $num++) {

            $data = [
                'service_invoice' => $service_invoice,
                'engineer' => $author[$num],
                'version' => $version[$num],
                'his_date' => $date[$num],
                'his_detail' => $detail[$num]
            ];

            $res = $this->Function_model->insertData('tbl_atp_history', $data);
        }

        foreach ($file_network['name'] as $index => $name) {

            $filename = $name;
            $fileTmp = $file_network['tmp_name'][$index];
            $filePath = "upload_atp/" . $service_invoice . "/network//" . $name;

            $check = $this->Function_model->fetchDataResult('tbl_atp_upload', ['service_invoice' => $service_invoice, 'uploads_name' => $filename, 'page' => 'page4']);

            if (count($check) > 0) {
                $data = [
                    'service_invoice' => $service_invoice,
                    'uploads_name' => $filename,
                    'uploads_tmp' => $fileTmp,
                    'page' => 'page4'
                ];
                $where = [
                    'service_invoice' => $service_invoice,
                    'uploads_name' => $filename,
                    'page' => 'page4'
                ];

                $res = $this->Function_model->updateData('tbl_atp_upload', $where, $data);
            } else {
                move_uploaded_file($fileTmp, $filePath);

                $res = $this->Function_model->insertData('tbl_atp_upload', ['service_invoice' => $service_invoice, 'uploads_name' => $filename, 'uploads_tmp' => $fileTmp, 'page' => 'page4']);
            }
        }

        foreach ($file_app_a['name'] as $index => $name) {
            $filename = $name;
            $fileTmp = $file_app_a['tmp_name'][$index];
            $filePath = "upload_atp/" . $service_invoice . "/app_a//" . $name;

            $check = $this->Function_model->fetchDataResult('tbl_atp_upload', ['service_invoice' => $service_invoice, 'uploads_name' => $filename, 'page' => 'page10']);

            if (count($check) > 0) {
                $data = [
                    'service_invoice' => $service_invoice,
                    'uploads_name' => $filename,
                    'uploads_tmp' => $fileTmp,
                    'page' => 'page10'
                ];
                $where = [
                    'service_invoice' => $service_invoice,
                    'uploads_name' => $filename,
                    'page' => 'page10'
                ];

                $res = $this->Function_model->updateData('tbl_atp_upload', $where, $data);
            } else {
                move_uploaded_file($fileTmp, $filePath);

                $res = $this->Function_model->insertData('tbl_atp_upload', ['service_invoice' => $service_invoice, 'uploads_name' => $filename, 'uploads_tmp' => $fileTmp, 'page' => 'page10']);
            }
        }

        foreach ($file_app_b['name'] as $index => $name) {
            $filename = $name;
            $fileTmp = $file_app_b['tmp_name'][$index];
            $filePath = "upload_atp/" . $service_invoice . "/app_b//" . $name;

            $check = $this->Function_model->fetchDataResult('tbl_atp_upload', ['service_invoice' => $service_invoice, 'uploads_name' => $filename, 'page' => 'page11']);

            if (count($check) > 0) {
                $data = [
                    'service_invoice' => $service_invoice,
                    'uploads_name' => $filename,
                    'uploads_tmp' => $fileTmp,
                    'page' => 'page11'
                ];
                $where = [
                    'service_invoice' => $service_invoice,
                    'uploads_name' => $filename,
                    'page' => 'page11'
                ];

                $res = $this->Function_model->updateData('tbl_atp_upload', $where, $data);
            } else {
                move_uploaded_file($fileTmp, $filePath);

                $res = $this->Function_model->insertData('tbl_atp_upload', ['service_invoice' => $service_invoice, 'uploads_name' => $filename, 'uploads_tmp' => $fileTmp, 'page' => 'page11']);
            }
        }

        foreach ($file_app_c['name'] as $index => $name) {
            $filename = $name;
            $fileTmp = $file_app_c['tmp_name'][$index];
            $filePath = "upload_atp/" . $service_invoice . "/app_c//" . $name;

            $check = $this->Function_model->fetchDataResult('tbl_atp_upload', ['service_invoice' => $service_invoice, 'uploads_name' => $filename, 'page' => 'page12']);

            if (count($check) > 0) {
                $data = [
                    'service_invoice' => $service_invoice,
                    'uploads_name' => $filename,
                    'uploads_tmp' => $fileTmp,
                    'page' => 'page12'
                ];
                $where = [
                    'service_invoice' => $service_invoice,
                    'uploads_name' => $filename,
                    'page' => 'page12'
                ];

                $res = $this->Function_model->updateData('tbl_atp_upload', $where, $data);
            } else {
                move_uploaded_file($fileTmp, $filePath);

                $res = $this->Function_model->insertData('tbl_atp_upload', ['service_invoice' => $service_invoice, 'uploads_name' => $filename, 'uploads_tmp' => $fileTmp, 'page' => 'page12']);
            }
        }

        if ($res == true) {
            echo json_encode([

                'status' => 'SUCCESS',

                'service_invoice' => $service_invoice

            ]);

            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'Create ATP Fail!'

            ]);

            exit();
        }
    }

    function print_atp()
    {

        $service_invoice = $this->input->get('invoice');

        $where_arr = ['service_invoice' => $service_invoice];

        $service = $this->Function_model->getDataRow('tbl_service', $where_arr);


        if ($service == null) {

            echo 'ไม่มีรายการนี้อยู่ในระบบ';

            exit();
        }

        $this->Function_model->updateData('tbl_service', $where_arr, ['atp_create' => 'created']);


        $data['title'] = 'ATP Report ' . $service_invoice;

        $data['service'] = $service;

        $data['engineer'] = $this->Function_model->getDataRow('tbl_engineer', $where_arr);

        $data['vessel'] = $this->Function_model->fetchDataResult('tbl_vessel_name', $where_arr);

        $data['atp_history'] = $this->Function_model->fetchDataResult('tbl_atp_history', $where_arr);

        $data['atp_detail'] = $this->Function_model->getDataRow('tbl_atp_detail', $where_arr);

        $data['atp_upload'] = $this->Function_model->fetchDataResult('tbl_atp_upload', $where_arr);

        $data['service_package'] = $this->Function_model->fetchDataResult('tbl_service_package', $where_arr);

        $data['service_project'] = $this->Function_model->fetchDataResult('tbl_service_project', $where_arr);

        $data['service_product'] = $this->Function_model->fetchDataResult('tbl_service_product', $where_arr);

        $data['service_detail'] = $this->Function_model->fetchDataResult('tbl_service_detail', $where_arr);

        $html = $this->load->view('print/service_atp', $data, true);


        $mpdf = new \Mpdf\Mpdf([

            'setAutoTopMargin' => 'stretch',

            'mode' => '',

            'format' => 'A4',

            'margin_left' => 10,

            'margin_right' => 10,

            'margin_top' => 5,

            'margin_bottom' => 5,

            'margin_header' => 0,

            'margin_footer' => 0,

            'orientation' => 'P',

            'mode' => 'utf-8',

            'default_font_size' => 14,

            'default_font' => 'sarabun'

        ]);

        $mpdf->useFixedNormalLineHeight = false;

        $mpdf->useFixedTextBaseline = false;

        $mpdf->adjustFontDescLineheight = 1;

        $mpdf->SetHeader(
            '<div>{PAGENO}</div> 
        <table class="tableheader">
            <tr>
                <td style=""><img src="https://support.shipexpert.info/assets/img/logo.png" alt="" style="max-width: 150px;"></td>
                <td style=""><strong>Shipexpert Co.,Ltd Final Acceptance Test</strong></td>
            </tr>
        </table>'
        );

        $mpdf->SetFooter('Job Order : ' . $service_invoice . '     ');

        $mpdf->WriteHTML($html);

        $mpdf->Output($data['title'] . '.pdf', 'I');
    }



    //ปริ้นใบแจ้งซ่อม ใบเสร็จ

    function print_job()
    {

        $service_invoice = $this->input->get('invoice');

        $where_arr = ['service_invoice' => $service_invoice];

        $service = $this->Function_model->getDataRow('tbl_service', $where_arr);


        if ($service == null) {

            echo 'ไม่มีรายการนี้อยู่ในระบบ';

            exit();
        }



        $data['title'] = 'Job Order ' . $service_invoice;

        $data['service'] = $service;

        $data['vessel'] = $this->Function_model->fetchDataResult('tbl_vessel_name', $where_arr);

        $data['engineer'] = $this->Function_model->fetchDataResult('tbl_engineer', $where_arr);

        $data['history'] = $this->Function_model->fetchDataResult('tbl_atp_history', $where_arr);

        $data['service_package'] = $this->Function_model->fetchDataResult('tbl_service_package', $where_arr);

        $data['service_project'] = $this->Function_model->fetchDataResult('tbl_service_project', $where_arr);

        $data['service_product'] = $this->Function_model->fetchDataResult('tbl_service_product', $where_arr);

        $data['uploads'] = $this->Function_model->fetchDataResult('tbl_atp_upload', $where_arr);

        $data['service_detail'] = $this->Function_model->fetchDataResult('tbl_service_detail', $where_arr);

        $html = $this->load->view('print/service_job', $data, true);



        $mpdf = new \Mpdf\Mpdf([

            'setAutoTopMargin' => 'stretch',

            'mode' => '',

            'format' => 'A4',

            'margin_left' => 10,

            'margin_right' => 10,

            'margin_top' => 5,

            'margin_bottom' => 5,

            'margin_header' => 0,

            'margin_footer' => 0,

            'orientation' => 'P',

            'mode' => 'utf-8',

            'default_font_size' => 14,

            'default_font' => 'sarabun'

        ]);

        $mpdf->useFixedNormalLineHeight = false;

        $mpdf->useFixedTextBaseline = false;

        $mpdf->adjustFontDescLineheight = 1;

        $mpdf->SetHeader(
            '<div>{PAGENO}</div> 
        <table class="tableheader" >
        <tbody>
            <tr>
                <td rowspan="3" style="width:150px;">

                    <img src="https://support.shipexpert.info/assets/img/logo.png" alt="" style="max-width: 150px;">

                </td>
                <td colspan="3" rowspan="2" style="text-align: center;">

                    <h3> <strong> Job Order </strong></h3>

                </td>
                <td style="padding-left: 5px;">

                    from

                </td>
            </tr>
            <tr>
                <td style="height: 50px;width:150px;">

                </td>
            </tr>
            <tr>
                <td style="text-align: center;width:20%;">

                </td>
                <td style="text-align: center;width:20%;">

                </td>
                <td style="text-align: center;width:20%;">
                Page {PAGENO} of {nb}
                </td>
                <td style="padding-left: 5px;">
                    Filling no.
                </td>
            </tr>
        </tbody>
        </table>'
        );

        $mpdf->SetFooter('Job Order : ' . $service_invoice . '     ');

        $mpdf->WriteHTML($html);

        $mpdf->Output($data['title'] . '.pdf', 'I');
    }



    //ปริ้นใบกำกับภาษี

    function print_customer()
    {

        $service_invoice = $this->input->get('invoice');

        $where_arr = ['service_invoice' => $service_invoice];

        $service = $this->Function_model->getDataRow('tbl_service', $where_arr);

        if ($service == null) {

            echo 'ไม่มีรายการนี้อยู่ในระบบ';

            exit();
        }



        $data['title'] = 'Customer Acceptance Report ' . $service_invoice;

        $data['service'] = $service;

        $data['engineer'] = $this->Function_model->fetchDataResult('tbl_engineer', $where_arr);

        $data['vessel'] = $this->Function_model->fetchDataResult('tbl_vessel_name', $where_arr);

        $data['service_package'] = $this->Function_model->fetchDataResult('tbl_service_package', $where_arr);

        $data['service_project'] = $this->Function_model->fetchDataResult('tbl_service_project', $where_arr);

        $data['service_product'] = $this->Function_model->fetchDataResult('tbl_service_product', $where_arr);

        $data['service_uploads_back'] = $this->Function_model->fetchDataResult('tbl_uploads_back', $where_arr);

        $data['service_detail'] = $this->Function_model->fetchDataResult('tbl_service_detail', $where_arr);

        $html = $this->load->view('print/service_customer', $data, true);



        $mpdf = new \Mpdf\Mpdf([

            'setAutoTopMargin' => 'stretch',

            'mode' => '',

            'format' => 'A4',

            'margin_left' => 10,

            'margin_right' => 10,

            'margin_top' => 5,

            'margin_bottom' => 5,

            'margin_header' => 0,

            'margin_footer' => 0,

            'orientation' => 'P',

            'mode' => 'utf-8',

            'default_font_size' => 14,

            'default_font' => 'sarabun'

        ]);

        $mpdf->SetHeader(
            '<div>{PAGENO}</div> <table class="tableheader" >
        <tbody>
            <tr>
                <td rowspan="3" style="width:150px;">

                    <img src="https://support.shipexpert.info/assets/img/logo.png" alt="" style="max-width: 150px;">

                </td>
                <td colspan="3" rowspan="2" style="text-align: center;">

                    <h3> <strong> Customer Acceptance Report </strong></h3>

                </td>
                <td style="padding-left: 5px;">

                    from

                </td>
            </tr>
            <tr>
                <td style="height: 50px;width:150px;">

                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>

                </td>
                <td style="text-align: center;width:20%;">
                Page {PAGENO} of {nb}
                </td>
                <td style="padding-left: 5px;">
                    Filling no.
                </td>
            </tr>
        </tbody>
        </table>'
        );

        $mpdf->SetFooter('Job Order : ' . $service_invoice . '     ');

        $mpdf->WriteHTML($html);

        $mpdf->Output($data['title'] . '.pdf', 'I');
    }



    //genarate invoice

    function gen_invoice()
    {

        echo $this->Function_model->genInvoice();
    }



    //ค้นหาใบส่งซ่อม

    function search_service_invoice()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        if ($service_invoice == null) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No Data Input'

            ]);
            exit();
        }

        $res = $this->Function_model->getDataRow('tbl_service', ['service_invoice' => $service_invoice]);

        if ($res != null) {

            echo json_encode([

                'status' => 'SUCCESS',

                'service_invoice' => $res->service_invoice

            ]);
            exit();
        } else {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'ไม่พบหมายเลขใบสั่งซื้อ'

            ]);
            exit();
        }
    }



    //จำนวนรายการที่ต่างๆ

    function get_service_amount()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $amount_all_service = count($this->Function_model->fetchDataResult('tbl_service'));

        $amount_service_approve = count($this->Function_model->fetchDataResult('tbl_service', ['service_status' => 'approve']));

        $amount_service_wait = count($this->Function_model->fetchDataResult('tbl_service', ['service_status' => 'wait']));

        $amount_service_fixed = count($this->Function_model->fetchDataResult('tbl_service', ['service_status' => 'fixed']));

        $amount_customer = count($this->Function_model3->fetchDataResult('customers'));

        echo json_encode([

            'status' => 'SUCCESS',

            'amount_all_service' => number_format($amount_all_service),

            'amount_service_approve' => number_format($amount_service_approve),

            'amount_service_wait' => number_format($amount_service_wait),

            'amount_service_fixed' => number_format($amount_service_fixed),

            'amount_customer' => number_format($amount_customer)



        ]);
        exit();
    }



    /****************************************** */

    //              Side Bar

    /****************************************** */

    function sidebar_status()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }



        echo json_encode([

            'service_created' => count($this->Function_model->fetchDataResult('tbl_service', ['service_status' => 'created'])),

            'service_verify' => count($this->Function_model->fetchDataResult('tbl_service', ['service_status' => 'verify'])),

            'service_approve' => count($this->Function_model->fetchDataResult('tbl_service', ['service_status' => 'approve'])),

            'service_wait' => count($this->Function_model->fetchDataResult('tbl_service', ['service_status' => 'wait'])),

            'service_fixed' => count($this->Function_model->fetchDataResult('tbl_service', ['service_status' => 'fixed'])),

            'service_uninstall' => count($this->Function_model->fetchDataResult('tbl_service', ['service_status' => 'uninstall'])),

            'service_done' => count($this->Function_model->fetchDataResult('tbl_service', ['service_status' => 'done'])),

        ]);
        exit();
    }
}
