<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Customer extends CI_Controller

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


    //option customer

    function option_customer()
    {
        
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $name = $this->input->post('name');

        $customer = $this->Function_model3->fetchDataResult('customers', '', 'id', 'ASC');

        if($name == ''){
            echo '<option value="" disabled selected>Customer Name</option>';
        }else{
            echo '<option value="'.$name.'"  selected>'.$name.'</option>';
        }

        

        foreach ($customer as $item) {

            echo '<option value="' . $item->name . '">' . $item->id . " . " .  $item->name . '</option>';
        }
    }

    //option phone

    function option_phone()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $cus_name = $this->input->post('cus_names');

        $customer = $this->Function_model3->getDataRow('customers', ['name' => $cus_name]);

        echo '<option value="' . $customer->phone . '" selected> ' .  $customer->phone . '</option>';
    }

    //option phone

    function option_email()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $cus_name = $this->input->post('cus_names');

        $customer = $this->Function_model3->getDataRow('customers', ['name' => $cus_name]);

        echo '<option value="' . $customer->email . '"  selected> ' .  $customer->email . '</option>';
    }

    //option address

    function option_address()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $cus_name = $this->input->post('cus_names');

        $customer = $this->Function_model3->getDataRow('customers', ['name' => $cus_name]);

        echo '<option value="' . $customer->address . '"  selected> ' .  $customer->address . '</option>';
    }

    //option zipcode

    function option_zipcode()
    {

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {

            show_404();
            exit();
        }

        $cus_name = $this->input->post('cus_names');

        $customer = $this->Function_model3->getDataRow('customers', ['name' => $cus_name]);

        echo '<option value="' . $customer->postbox . '"  selected> ' .  $customer->postbox . '</option>';
    }


    
}
