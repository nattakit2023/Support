<?php

function Convert($amount_number)

{

    $amount_number = number_format($amount_number, 2, ".", "");

    $pt = strpos($amount_number, ".");

    $number = $fraction = "";

    if ($pt === false)

        $number = $amount_number;

    else {

        $number = substr($amount_number, 0, $pt);

        $fraction = substr($amount_number, $pt + 1);
    }



    $ret = "";

    $baht = ReadNumber($number);

    if ($baht != "")

        $ret .= $baht . "บาท";



    $satang = ReadNumber($fraction);

    if ($satang != "")

        $ret .=  $satang . "สตางค์";

    else

        $ret .= "ถ้วน";

    return $ret;
}



function ReadNumber($number)

{

    $position_call = array("แสน", "หมื่น", "พัน", "ร้อย", "สิบ", "");

    $number_call = array("", "หนึ่ง", "สอง", "สาม", "สี่", "ห้า", "หก", "เจ็ด", "แปด", "เก้า");

    $number = $number + 0;

    $ret = "";

    if ($number == 0) return $ret;

    if ($number > 1000000) {

        $ret .= ReadNumber(intval($number / 1000000)) . "ล้าน";

        $number = intval(fmod($number, 1000000));
    }



    $divider = 100000;

    $pos = 0;

    while ($number > 0) {

        $d = intval($number / $divider);

        $ret .= (($divider == 10) && ($d == 2)) ? "ยี่" : ((($divider == 10) && ($d == 1)) ? "" : ((($divider == 1) && ($d == 1) && ($ret != "")) ? "เอ็ด" : $number_call[$d]));

        $ret .= ($d ? $position_call[$pos] : "");

        $number = $number % $divider;

        $divider = $divider / 10;

        $pos++;
    }

    return $ret;
}

## วิธีใช้งาน

// $num1 = '3500.01'; 

// $num2 = '120000.50'; 

// echo  $num1  . "&nbsp;=&nbsp;" .Convert($num1),"<br>"; 

// echo  $num2  . "&nbsp;=&nbsp;" .Convert($num2),"<br>";

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">

    <title><?= $title; ?></title>

    <style>
        h1,

        h2,

        h3,

        h4,

        h5,

        h6,

        p {

            padding: 0px;

            margin: 0px;

        }



        .table {

            border-collapse: collapse;

        }



        .table th,

        .table td {

            border: 1px solid #333;

        }



        .table td {

            padding-left: 5px;

        }



        .bg-dark {

            background-color: #333;

        }



        .text-white {

            color: white;

        }
    </style>

</head>



<body>

    <?php

    $startYear = date('Y', strtotime($service->due_date)) + 543;



    //หาวันปัจจุบันเป็นไทย

    $todayYear = date('Y', strtotime(date('Y-m-d'))) + 543;

    ?>



    <h2 style="text-align:center"><strong>Job Order <?= $service->service_id ?></strong></h2>

    <p style="text-align:center; margin:0px; padding:0px;">

        <strong>เลขที่ใบแจ้งซ่อม </strong> <?= $service->service_invoice; ?>

        <strong>วันที่ออกใบแจ้งซ่อม</strong> <?= date_format(date_create(date('Y-m-d')), 'd/m/' . $todayYear); ?>

        <strong> เวลา</strong> <?= date('H:i:s'); ?>

    </p>

    <!-- ข้อมูลเรือ  -->

    <div style="border-collapse: collapse; border:1px solid #333; padding-left: 10px; padding-right : 10px;">

        <table style="width: 100%; margin-top: 10px;">
            <!----------------------------------------------------------------C U S T O M E R--------------------------------------------------------------------------->
            <tr>
                <td>
                    <strong>CUSTOMER</strong>
                </td>
            </tr>


            <tr>

                <td style="width: 50%">

                    <strong>Name :</strong> <?= $service->cus_name; ?>

                </td>

                <td style="width: 25%">
                    <strong>Tel : </strong><?= $service->cus_tel; ?>


                </td>

                <td style="width: 25%">

                    <strong>Email :</strong> <?= $service->cus_email; ?>

                </td>




            </tr>

            <tr>
                <td>

                    <strong>Address :</strong> <?= $service->cus_address; ?>

                </td>
                <td>

                    <strong>Zipcode :</strong> <?= $service->cus_zipcode; ?>

                </td>
            </tr>

            <!----------------------------------------------------------------V E S S E L--------------------------------------------------------------------------->

            <tr>
                <td>
                    <strong>_________________________________________________</strong>
                </td>
                <td>
                    <strong>__________________________________</strong>
                </td>
                <td>
                    <strong>__________________________________</strong>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>VESSEL</strong>
                </td>
            </tr>

            <tr>
                <td>
                    <strong>Fleet : </strong><?= $service->ves_fleet; ?>
                </td>
                <td>
                    <strong>Type : </strong><?= $service->ves_type; ?>
                </td>
                <td>
                    <strong>Call Sign : </strong><?= $service->ves_callsign; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <strong>Name : </strong><?= $service->ves_name; ?>
                </td>
                <td>
                    <strong>MMSI : </strong><?= $service->ves_mmsi; ?>
                </td>
                <td>
                    <strong>IMO : </strong><?= $service->ves_imo; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <strong>Maintenance : </strong><?= $service->ves_maintenance; ?>
                </td>
                <td>
                    <strong>Survey : </strong><?= $service->ves_survey; ?>
                </td>
                <td>
                    <strong>Installation : </strong><?= $service->ves_installation; ?>
                </td>
            </tr>

            <!----------------------------------------------------------------C O N T R A C T--------------------------------------------------------------------------->
            <tr>
                <td>
                    <strong>_________________________________________________</strong>
                </td>
                <td>
                    <strong>__________________________________</strong>
                </td>
                <td>
                    <strong>__________________________________</strong>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>CONTRACT ONBOARD</strong>
                </td>
            </tr>

            <tr>
                <td>
                    <strong>Name : </strong><?= $service->con_name; ?>
                </td>
                <td>
                    <strong>Tel : </strong><?= $service->con_tel; ?>
                </td>
                <td>
                    <strong>ETA : </strong><?= date_format(date_create($service->ETA), ' d/m/Y H:i:s');; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <strong>Port : </strong><?= $service->con_port; ?>
                </td>
                <td>
                    <strong>Email : </strong><?= $service->con_email; ?>
                </td>
                <td>
                    <strong>ETD : </strong><?= date_format(date_create($service->ETD), ' d/m/Y H:i:s');; ?>
                </td>
            </tr>

            <tr>
                <td>
                    <strong>_________________________________________________</strong>
                </td>
                <td>
                    <strong>__________________________________</strong>
                </td>
                <td>
                    <strong>__________________________________</strong>
                </td>
            </tr>

            <tr>

                <td><strong>Due Date :</strong> <?= date_format(date_create($service->due_date), 'd/m/' . $startYear); ?></td>
                <td><strong>Complete Date :</strong> <?= date_format(date_create($service->end_date), 'd/m/' . $startYear); ?></td>
            </tr>

        </table>

    </div>



    <!-- รายการสั่งซื้อและบริการ -->

    <div style="margin-top: 10px;">

        <h3 style="text-align:center"><strong>รายการสินค้าและบริการ</strong></h3>

        <table class="table" style="width: 100%;">

            <thead>

                <tr class="bg-dark">

                    <th style="width: 6%; color:white;">ลำดับ</th>

                    <th style="width: 46%; color:white;">รายการ</th>

                    <th style="width: 8%; color:white;">จำนวน</th>

                    <!--    <th style="width: 20%; color:white;">หน่วยละ</th>

                    <th style="width: 10%; color:white;" colspan="2">ราคารวม</th>
                -->

                </tr>

            </thead>

            <tbody>

                <?php $i = 0;

                foreach ($service_detail as $item) : ?>

                    <tr>

                        <td style="text-align: center; padding:0px;"><?= ++$i; ?></td>

                        <td>

                            <?= $item->service_name; ?><br>

                            <em><small style="color: #333;"><?= $item->detail; ?></small></em>

                        </td>

                        <td style="text-align: center;">

                            <?= number_format($item->amount); ?>

                        </td>

                        <!--   <td style="text-align: center;">

                            <?= number_format($item->price, 2); ?>

                        </td>

                        <td style="text-align: center;">

                            <?= number_format($item->total, 2); ?>

                        </td>

                        <td style="width: 5%"><small>บาท</small></td>
                -->
                    </tr>

                <?php endforeach; ?>

            </tbody>

            <!--
            <tfoot>

                <tr style="padding-top :5px;">

                    <td colspan="4" style="text-align: right"><strong>ส่วนลด</strong></td>

                    <td style="text-align: right"><?= number_format($service->service_discount, 2); ?></td>

                    <td><small>บาท</small></td>

                </tr>
 
                <tr style="padding-top :5px;">

                    <td colspan="4" style="text-align: right"><strong>ยอดสุทธิ</strong></td>

                    <td style="text-align: right"><?= number_format($service->service_total, 2); ?></td>

                    <td><small>บาท</small></td>

                </tr>

                <tr>

                    <td colspan="6" style="text-align: center; background-color: lightgray"><em><?= Convert($service->service_total); ?></em></td>

                </tr>

            </tfoot>
                -->
        </table>

    </div>



    <!--ลายเซ็น -->

    <div style="padding-top:20px; ">

        <table style="width: 100%">

            <tr>

                <td style="width: 50%; text-align: center;">ลงชื่อ...............................................ผู้อนุมัติ</td>

                <td style="width: 50%; text-align: center;">ลงชื่อ...............................................เจ้าของหรือผู้ส่งซ่อม</td>

            </tr>

        </table>

    </div>

    <div>
        <div>**************************************************************************************************************************************</div>
        <h3>REMARK</h3>
        <div>
            <?= $service->remark ?>
        </div>
    </div>

</body>



</html>