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

    function tblService()

    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $datestart = $this->input->post('datestart');

        $dateend = $this->input->post('dateend');

        $service_status = $this->input->post('status');

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

        $data['service'] = $this->Function_model->fetchDataResult('tbl_service', $where_arr, 'service_id', 'DESC');

        $this->load->view('components/tbl_service', $data);
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

        $ves_maintenance = $this->input->post('ves_maintenance');

        $ves_survey = $this->input->post('ves_survey');

        $ves_installation = $this->input->post('ves_installation');

        $con_name = $this->input->post('con_name');

        $con_tel = $this->input->post('con_tel');

        $con_port = $this->input->post('con_port');

        $con_email = $this->input->post('con_email');

        $admin_name = $this->input->post('admin_name');

        $admin_names = $this->input->post('admin_names');

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
            || $ves_maintenance == null || $con_name == null || $con_tel == null || $con_port == null || $con_email == null
            || $admin_name == null || $admin_names == null || $create_date == null || $due_date == null || $end_date == null || $eta == null || $etd == null || $contract_start == null
            || $contract_end == null
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

            'projects' => $projects,

            'cus_name' => $cus_name,

            'cus_address' => $cus_address,

            'cus_tel' => $cus_tel,

            'cus_email' => $cus_email,

            'cus_zipcode' => $cus_zipcode,

            'ves_fleet' => $ves_fleet,

            'ves_name' => $ves_name,

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

            'con_port' => $con_port,

            'engineer' => $admin_name,

            'support_1' => $admin_names,

            'create_date' => $create_date,

            'due_date' => $due_date,

            'end_date' => $end_date,

            'ETA' => $eta,

            'ETD' => $etd,

            'contract_start' => $contract_start,

            'contract_end' => $contract_end,

        ];

        $res = $this->Function_model->insertData('tbl_service', $data_arr);

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

        $this->load->view('components/tbl_service_detail', $data);
    }

    //อัพเดท รีมาร์ค

    function updateRemark()

    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();

            exit();
        }

        $service_invoice = $this->input->post('service_invoice');

        $remark = $this->input->post('remark');

        if ($service_invoice == null || $remark == null) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'No data input'

            ]);

            exit();
        }


        $res = $this->Function_model->updateData('tbl_service', ['service_invoice' => $service_invoice], ['remark' => $remark]);

        if ($res != TRUE) {

            echo json_encode([

                'status' => 'ERROR',

                'message' => 'Have someting wrong when insert service_detail'

            ]);

            exit();
        }


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


        if ($service_invoice == null || $service_name == null || $amount == null) {

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

        if ($res == TRUE) {

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

        if ($res == TRUE) {

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

            'end_date' => date('Y-m-d'),     //วันที่รับรถ

            'service_status' => 'done'

        ];

        $res = $this->Function_model->updateData('tbl_service', ['service_invoice' => $service_invoice], $data_arr);

        if ($res == TRUE) {

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



        //ตรวจสอบในตาราง tbl_service_detail ถ้ามีให้ทำการลบข้อมูล

        $service_detail = $this->Function_model->fetchDataResult('tbl_service_detail', ['service_invoice' => $service_invoice]);

        if ($service_detail != null) {

            $this->Function_model->deleteData('tbl_service_detail', ['service_invoice' => $service_invoice]);
        }

        //ลบ tbl_service

        $res = $this->Function_model->deleteData('tbl_service', ['service_invoice' => $service_invoice]);

        if ($res == TRUE) {

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



    //ปริ้นใบแจ้งซ่อม ใบเสร็จ

    function print_receipt()

    {

        $service_invoice = $this->input->get('invoice');

        $where_arr = ['service_invoice' => $service_invoice];

        $service = $this->Function_model->getDataRow('tbl_service', $where_arr);

        if ($service == null) {

            echo 'ไม่มีรายการนี้อยู่ในระบบ';

            exit();
        }



        $data['title'] = 'Job Order ' . $service_invoice . ' ทะเบียนรถ ' . $service->license_plate;

        $data['service'] = $service;

        $data['service_detail'] = $this->Function_model->fetchDataResult('tbl_service_detail', $where_arr);

        $html = $this->load->view('print/service_receipt', $data, true);



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

        $mpdf->WriteHTML($html);

        $mpdf->Output($data['title'] . '.pdf', 'I');
    }



    //ปริ้นใบกำกับภาษี

    function print_tax()

    {

        $service_invoice = $this->input->get('invoice');

        $where_arr = ['service_invoice' => $service_invoice];

        $service = $this->Function_model->getDataRow('tbl_service', $where_arr);

        if ($service == null) {

            echo 'ไม่มีรายการนี้อยู่ในระบบ';

            exit();
        }



        $data['title'] = 'Job Order ' . $service_invoice . ' Vessel ' . $service->license_plate;

        $data['service'] = $service;

        $data['service_detail'] = $this->Function_model->fetchDataResult('tbl_service_detail', $where_arr);

        $html = $this->load->view('print/service_tax', $data, true);



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

        $amount_service_wait = count($this->Function_model->fetchDataResult('tbl_service', ['service_status' => 'wait']));

        $amount_service_fixed = count($this->Function_model->fetchDataResult('tbl_service', ['service_status' => 'fixed']));

        $amount_customer = count($this->Function_model3->fetchDataResult('customers'));

        echo json_encode([

            'status' => 'SUCCESS',

            'amount_all_service' => number_format($amount_all_service),

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

            'service_wait' => count($this->Function_model->fetchDataResult('tbl_service', ['service_status' => 'wait'])),

            'service_fixed' => count($this->Function_model->fetchDataResult('tbl_service', ['service_status' => 'fixed'])),

            'service_done' => count($this->Function_model->fetchDataResult('tbl_service', ['service_status' => 'done'])),

        ]);
        exit();
    }
}
