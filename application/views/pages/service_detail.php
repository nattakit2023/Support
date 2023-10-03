<?php if ($service == null) {

    redirect('/pages/service_create');
}

?>

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

        <div class="container-fluid">

            <div class="row">

                <div class="col-sm-6">

                    <h3><i class="fas fa-tools"></i> Job Order <strong id="titleInvoice"></strong></h3>

                    <p class="text-muted">Installation Date :
                        <?= date_format(date_create($service->create_date), 'd/m/Y'); ?>

                        <?php if ($service->end_date != null) : ?>

                        Completed Date : <?= date_format(date_create($service->end_date), 'd/m/Y'); ?>

                        <?php endif; ?>

                    </p>

                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/pages">Index</a></li>

                        <li class="breadcrumb-item active">Detail</li>

                    </ol>

                </div>

            </div>

        </div><!-- /.container-fluid -->

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12 mb-2">

                    <button class="rounded-0 btn btn-default" onclick="window.history.back();"><i
                            class="fas fa-angle-left"></i> Back</button>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12">

                    <div class="card rounded-0">

                        <div class="card-header bg-light rounded-0">

                            Customer Information

                        </div>

                        <div class="card-body">

                            <p style="margin:0px;" class="text-info"><i class="fas fa-circle"></i> Customer</p>

                            <div class="row">

                                <div class="col-md-4">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Name :
                                        </strong><em><?= $service->cus_name; ?></em></p>

                                </div>

                                <div class="col-md-4">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Telephone :
                                        </strong><em><?= $service->cus_tel; ?></em></p>

                                </div>

                                <div class="col-md-4">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>E-mail :
                                        </strong><em><?= ($service->cus_tax != null ? $service->cus_tax : '-'); ?></em>
                                    </p>

                                </div>

                                <div class="col-md-4">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Address :
                                        </strong><em> <?= $service->cus_address; ?></em></p>

                                </div>

                                <div class="col-md-4">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Zipcode :
                                        </strong><em> ... </em></p>

                                </div>

                            </div>

                            <p style="margin:0px;" class="text-info mt-2"><i class="fas fa-circle"></i> Vessel</p>

                            <div class="row mb-2">

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Fleet :
                                        </strong><em><?= $service->license_plate; ?></em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Vessel :
                                        </strong><em><?= $service->car_brand; ?></em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Type :
                                        </strong><em><?= $service->car_model; ?></em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>MMSI : </strong><em>
                                            <?= $service->car_mile_number; ?></em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>IMO Number :
                                        </strong><em> <?= $service->car_mile_number; ?></em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Call Sign :
                                        </strong><em> ... </em></p>

                                </div>



                            </div>

                            <div class="row">

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Year Built :
                                        </strong><em> ... </em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Survey :
                                        </strong><em> ... </em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Installation :
                                        </strong><em> ... </em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Maintenance :
                                        </strong><em> ... </em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Start Date :
                                        </strong><em> ... </em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>End Date :
                                        </strong><em> ... </em></p>

                                </div>

                            </div>

                            <p style="margin:0px;" class="text-info mt-2"><i class="fas fa-circle"></i> Assign</p>

                            <div class="row">

                                <div class="col-md-4">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Person :
                                        </strong><em> <?= $service->admin_name; ?></em></p>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Engineer :
                                        </strong><em> <?= $service->admin_name; ?></em></p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <?php if ($service->service_status == 'created' || $service->service_status == 'wait') : ?>

            <div class="row">

                <div class="col-md-12">

                    <div class="card rounded-0">

                        <div class="card-header rounded-0 bg-dark">

                            <i class="fas fa-cart-plus"></i> Add Service & Order

                        </div>

                        <div class="card-body">

                            <div class="row">

                                <div class="col-md-10">

                                    <div class="row">

                                        <div class="col-md-7 mb-2">

                                            <select class="form-control select2 rounded-0" id="service_name">

                                                <option value="">Loading...</option>

                                            </select>

                                        </div>

                                        <div class="col-md-2 mb-2">

                                            <input type="number" id="amount" class="form-control rounded-0" min="1"
                                                placeholder="Quantity"
                                                oninput="this.value=this.value.replace(/[^0-9\\]/g,'');">

                                        </div>



                                        <!--<div class="col-md-3 mb-2">

                                                <input type="number" id="price" class="form-control rounded-0" min="0" placeholder="ราคาต่อหน่วย">

                                            </div>
                                            -->
                                    </div>

                                    <div class="row">

                                        <div class="col-md-9 mb-2">

                                            <input type="text" id="detail" class="form-control rounded-0"
                                                placeholder="More Detail (ถ้ามี)">

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-2 mb-2">

                                    <button id="addServiceDetail" class="btn btn-block btn-primary rounded-0"><i
                                            class="fas fa-plus"></i> Add</button>

                                </div>

                            </div>

                        </div>

                    </div>



                </div>

            </div>

            <?php endif; ?>



            <div class="row">

                <div class="col-md-8 mb-2">

                    <div class="card rounded-0">

                        <div class="card-header bg-dark rounded-0">

                            Service Order

                        </div>

                        <div class="card-body" id="showServiceDetail">

                            <div class="row">

                                <div class="col-md-12 mb-2 text-center">

                                    <p class="text-muted"><em>--Loading..--</em></p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-4 mb-2">

                    <div class="card rounded-0">

                        <!--<div class="card-header bg-warning rounded-0 text-center">

                            <strong>Conclude</strong>

                        </div>

                        <div class="card-body">

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="form-group row">

                                        <label for="inputEmail3" class="col-sm-5 col-form-label">Option TAX</label>

                                        <div class="col-sm-7">

                                            <select id="option_vat" class="form-control rounded-0" onchange="updateVat()" <?= ($service->service_status == 'done' ? 'disabled' : ''); ?>>

                                                <option value="no">No VAT</option>

                                                <option value="in">Include VAT</option>

                                                <option value="out">Exclude VAT</option>

                                            </select>

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <div class="row">

                                <div class="col-md-12">

                                    <ul class="list-group list-group-unbordered">

                                        <li class="list-group-item">

                                            ส่วนลด <p class="float-right"><strong id="showServiceDiscount">...</strong> <small>บาท</small></p>

                                        </li>

                                        <li class="list-group-item">

                                            ยอดก่อน VAT <p class="float-right"><strong id="showServicePrice">...</strong> บาท</p>

                                        </li>

                                        <li class="list-group-item">

                                            ภาษี (%7) <p class="float-right"><strong id="showServiceVat">...</strong> บาท</p>

                                        </li>

                                        <li class="list-group-item">

                                            <b>ยอดสุทธิ</b>

                                            <h2 class="float-right"><strong id="showServiceTotal">...</strong> <small>บาท</small></h2>

                                        </li>

                                    </ul>

                                </div>

                            </div>
            -->
                        <!-- ส่วนลด 

                            <?php if ($service->service_status == 'wait') : ?>

                                <div class="row">

                                    <div class="col-md-12 mt-2">

                                        <button class="btn btn-block btn-outline-success rounded-0" data-toggle="modal" data-target="#modalAddDiscount" onclick="getDiscount();">ส่วนลด</button>

                                    </div>

                                </div>

                            <?php endif; ?>
                            -->


                        <!-- สร้างงานรับซ่อม -->

                        <?php if ($service->service_status == 'created') : ?>

                        <div class="row">

                            <div class="col-md-12 mt-2">

                                <button id="btnConfirm" class="btn btn-primary btn-block rounded-0"><i
                                        class="fas fa-save"></i> Save</button>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-12 mt-2">

                                <button id="btnCancelService"
                                    class="btn btn-default btn-block rounded-0">Cancle</button>

                            </div>

                        </div>

                        <?php endif; ?>



                        <!-- ใบกำกับภาษี ใบเสร็จ -->

                        <?php if ($service->service_status != 'created') : ?>

                        <div class="row">

                            <div class="col-md-6 mt-2">

                                <a id="paper_receipt" class="btn btn-default btn-block rounded-0" target="_blank"
                                    href="<?= base_url(); ?>/service/print_receipt?invoice=<?= $service->service_invoice; ?>">Job
                                    Order<a>

                            </div>

                            <div class="col-md-6 mt-2">

                                <a id="paper_receipt" class="btn btn-default btn-block rounded-0" target="_blank"
                                    href="<?= base_url(); ?>/service/print_tax?invoice=<?= $service->service_invoice; ?>">ATP
                                    Report<a>

                            </div>

                        </div>

                        <?php endif; ?>



                        <!-- ซ่อมเสร็จแล้ว -->

                        <?php if ($service->service_status == 'wait') : ?>

                        <div class="row">

                            <div class="col-md-12 mt-2">

                                <button id="btnConfirmFixed" class="btn btn-warning btn-block rounded-0"><i
                                        class="fas fa-check"></i> ดำเนินการเสร็จแล้ว</button>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-12 mt-2">

                                <button id="btnCancelService"
                                    class="btn btn-default btn-block rounded-0">ยกเลิกงาน</button>

                            </div>

                        </div>

                        <?php endif; ?>



                        <!-- รับรถ  -->

                        <?php if ($service->service_status == 'fixed') : ?>

                        <div class="row">

                            <div class="col-md-12 mt-2">

                                <button id="btnConfirmPickCar" class="btn btn-success btn-block rounded-0"><i
                                        class="fas fa-check"></i> ยืนยันปิดงาน</button>

                            </div>

                        </div>

                        <?php endif; ?>


                    </div>

                </div>

            </div>

        </div>

</div>

</section>

</div>





<!-- Modal เพิ่มส่วนลด -->

<div class="modal fade" id="modalAddDiscount" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">

    <div class="modal-dialog modal-sm rounded-0" role="document">

        <div class="modal-content rounded-0">

            <div class="modal-header rounded-0 bg-dark">

                <h5 class="modal-title">ส่วนลด</h5>

                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-12 mb-2">

                        <input type="number" class="form-control rounded-0" id="service_discount"
                            placeholder="กรอกส่วนลด">

                    </div>

                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-primary rounded-0" onclick="updateDiscount()">บันทึก</button>

                <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">ยกเลิก</button>

            </div>

        </div>

    </div>

</div>


<script>
var service_invoice = '<?= $service->service_invoice; ?>'

function clearFormService() {

    $('#amount').val('');

    $('#price').val('');

    $('#detail').val('');

}

//get ส่วนลด

function getDiscount() {

    $.ajax({

        url: '<?= base_url(); ?>/service/get_discount',

        method: 'POST',

        dataType: 'JSON',

        data: {

            service_invoice: service_invoice

        },

        success: function(res) {

            if (res.status == 'SUCCESS') {

                $('#service_discount').val(res.data.service_discount);

            } else {

                console.log(res);

            }

        }

    })

}

//update ส่วนลด

function updateDiscount() {

    let service_discount = $('#service_discount').val();

    if (service_discount == '') {

        Swal.fire({

            icon: 'warning',

            title: 'แจ้งเตือน',

            text: 'กรุณากรอกส่วนลด',

            confirmButtonText: 'ตกลง'

        });

        return false;

    }

    Swal.fire({

        title: 'บันทึกส่วนลด',

        text: "ต้องการบันทึกส่วนลดนี้?",

        icon: 'warning',

        showCancelButton: true,

        confirmButtonText: 'ตกลง',

        cancelButtonText: 'ยกเลิก'

    }).then((result) => {

        if (result.isConfirmed) {

            $.ajax({

                url: '<?= base_url(); ?>/service/update_discount',

                method: 'POST',

                dataType: 'JSON',

                data: {

                    service_invoice: service_invoice,

                    service_discount: service_discount

                },

                success: function(res) {

                    if (res.status == 'SUCCESS') {

                        Swal.fire({

                            icon: 'success',

                            title: 'สำเร็จ',

                            text: 'บันทึกส่วนลดเรียบร้อยแล้ว',

                            showConfirmButton: false,

                            timer: 1500

                        });

                        getInvoice();

                        $('#modalAddDiscount').modal('hide');

                    } else {

                        Swal.fire({

                            icon: 'warning',

                            title: 'แจ้งเตือน',

                            text: res.message,

                            confirmButtonText: 'ตกลง'

                        });

                        return false;

                    }

                }

            })

        }

    })

}



function getInvoice() {

    $.ajax({

        url: '<?= base_url(); ?>/service/get_invoice',

        method: 'POST',

        dataType: 'JSON',

        data: {

            service_invoice: service_invoice

        },

        success: function(res) {

            if (res.status == 'SUCCESS') {

                $('#titleInvoice').html(res.data.service_invoice);

                $('#showServicePrice').html(res.data.service_price);

                $('#showServiceVat').html(res.data.service_vat);

                $('#showServiceTotal').html(res.data.service_total)

                $('#showServiceDiscount').html(res.data.service_discount);

                document.getElementById('option_vat').value = res.data.option_vat;

                if (res.data.service_status === 'done') {

                    $('#delServiceDetail').hide();

                }

            } else {

                Swal.fire({

                    title: 'ผิดพลาด',

                    text: res.message + ' ระบบจะกลับสู่ในหน้าสร้างรายการ',

                    icon: 'error',

                    showCancelButton: false,

                    confirmButtonText: 'ตกลง',

                    allowEnterKey: false,

                    allowEscapeKey: false,

                    allowOutsideClick: false

                }).then((result) => {

                    if (result.isConfirmed) {

                        window.location.assign('<?= base_url(); ?>/pages/service_create')

                    }

                });

            }

        }

    })

}



//update Vat

function updateVat() {

    let option_vat = $('#option_vat').val();

    if (option_vat == '') {

        return false;

    }

    $.ajax({

        url: '<?= base_url(); ?>/service/update_option_vat',

        method: 'POST',

        dataType: 'JSON',

        data: {

            option_vat: option_vat,

            service_invoice: service_invoice

        },

        success: function(res) {

            if (res.status == 'SUCCESS') {

                getInvoice();

            } else {

                console.log(res);

            }

        }

    })

}


//ดึงOption ของ Product
function optionProduct() {

    $.ajax({

        url: '<?= base_url(); ?>/product/option_product',

        method: 'POST',

        success: function(res) {

            $('#service_name').html(res);

        }

    })

}

//ดึงข้อมูลรายละเอียด Service Detail
function getServiceDetail() {

    $.ajax({

        url: '<?= base_url(); ?>/service/tbl_service_detail',

        method: 'POST',

        data: {

            service_invoice: service_invoice

        },

        success: function(res) {

            $('#showServiceDetail').html(res);

        }

    })

}

//ลบข้อมูลรายละเอียด

function delServiceDetail(detail_id) {

    Swal.fire({

        title: 'ลบข้อมูล',

        text: "ต้องการลบสินค้า & บริการนี้?",

        icon: 'warning',

        showCancelButton: true,

        confirmButtonText: 'ตกลง',

        cancelButtonText: 'ยกเลิก'

    }).then((result) => {

        if (result.isConfirmed) {

            Swal.fire({

                allowEnterKey: false,

                allowOutsideClick: false,

                allowEscapeKey: false,

                html: 'กำลังบันทึกข้อมูล กรุณารอสักครู่...',

                timerProgressBar: true,

                didOpen: () => {

                    Swal.showLoading();

                    $.ajax({

                        url: '<?= base_url(); ?>/service/del_service_detail',

                        method: 'POST',

                        dataType: 'JSON',

                        data: {

                            service_invoice: service_invoice,

                            detail_id: detail_id

                        },

                        success: function(res) {

                            if (res.status == 'SUCCESS') {

                                Swal.fire({

                                    allowEnterKey: false,

                                    allowOutsideClick: false,

                                    allowEscapeKey: false,

                                    icon: 'success',

                                    title: 'สำเร็จ',

                                    text: 'ลบสินค้า & บริการเรียบร้อยแล้ว',

                                    showConfirmButton: false,

                                    timer: 1500

                                });

                                getServiceDetail();

                                getInvoice();

                            } else {

                                Swal.fire({

                                    icon: 'warning',

                                    title: 'ผิดพลาด',

                                    text: res.message,

                                    confirmButtonText: 'ตกลง'

                                })

                                return false;

                            }

                        }

                    })

                }

            })



        }

    })

}

$(document).ready(function() {

    getInvoice();

    optionProduct();

    getServiceDetail();


});


$(document).on('click', '#addServiceDetail', function() {

    let service_name = $('#service_name').val();

    let amount = $('#amount').val();

    //let price = $('#price').val();

    let detail = $('#detail').val();

    if (service_invoice == '' || service_name == '' || amount == '') {

        Swal.fire({

            icon: 'warning',

            title: 'แจ้งเตือน',

            text: 'กรุณากรอกข้อมูลให้ครบถ้วน',

            confirmButtonText: 'ตกลง'

        });

        return false;

    }

    if (service_name == 'other') {

        if (detail == '') {

            Swal.fire({

                icon: 'warning',

                title: 'แจ้งเตือน',

                text: 'กรุณากรอกรายละเอียดเพิ่มเติม',

                confirmButtonText: 'ตกลง'

            });

            return false;

        }

        service_name = 'อื่นๆ';

    }

    $.ajax({

        url: '<?= base_url(); ?>/service/add_service_detail',

        method: 'POST',

        dataType: 'JSON',

        data: {

            service_invoice: service_invoice,

            service_name: service_name,

            amount: amount,

            //price: price,

            detail: detail

        },

        success: function(res) {

            if (res.status == 'SUCCESS') {

                Swal.fire({

                    icon: 'success',

                    title: 'สำเร็จ',

                    text: 'เพิ่มสินค้าและบริการสำเร็จ',

                    showConfirmButton: false,

                    timer: 1500

                });

                getInvoice();

                clearFormService();

                optionProduct();

                getServiceDetail();

            } else {

                Swal.fire({

                    icon: 'warning',

                    title: 'แจ้งเตือน',

                    text: res.message,

                    confirmButtonText: 'ตกลง'

                });

                return false;

            }

        }

    })

});



//ยืนยันงานซ่อม

$(document).on('click', '#btnConfirm', function() {

    Swal.fire({

        title: 'ส่งงานซ่อม',

        text: "ยืนยันการส่งงาน",

        icon: 'warning',

        showCancelButton: true,

        confirmButtonText: 'ตกลง',

        cancelButtonText: 'ยกเลิก'

    }).then((result) => {

        if (result.isConfirmed) {

            Swal.fire({

                allowEnterKey: false,

                allowOutsideClick: false,

                allowEscapeKey: false,

                html: 'กำลังบันทึกข้อมูล กรุณารอสักครู่...',

                timerProgressBar: true,

                didOpen: () => {

                    Swal.showLoading();

                    $.ajax({

                        url: '<?= base_url(); ?>/service/confirm_fix',

                        method: 'POST',

                        dataType: 'JSON',

                        data: {

                            service_invoice: service_invoice

                        },

                        success: function(res) {

                            if (res.status == 'SUCCESS') {

                                Swal.fire({

                                    allowEnterKey: false,

                                    allowOutsideClick: false,

                                    allowEscapeKey: false,

                                    icon: 'success',

                                    title: 'สำเร็จ',

                                    text: 'รับงานเรียบร้อย',

                                    showConfirmButton: false,

                                    timer: 1400

                                });

                                setTimeout(function() {

                                    window.location.reload();

                                }, 1500);

                            } else {

                                Swal.fire({

                                    icon: 'error',

                                    title: 'ผิดพลาด',

                                    text: res.message,

                                    confirmButtonText: 'ตกลง'

                                });

                                return false;

                            }

                        }

                    })

                }

            })

        }

    })

})



//ซ่อมเรียบเสร็จแล้ว

$(document).on('click', '#btnConfirmFixed', function() {

    Swal.fire({

        title: 'ยืนยันการซ่อม',

        text: "Job Order เรียบร้อยแล้ว?",

        icon: 'warning',

        showCancelButton: true,

        confirmButtonText: 'ตกลง',

        cancelButtonText: 'ยกเลิก'

    }).then((result) => {

        if (result.isConfirmed) {

            Swal.fire({

                allowEnterKey: false,

                allowEscapeKey: false,

                allowOutsideClick: false,

                html: 'กำลังบันทึกข้อมูล กรุณารอสักครู่...',

                timerProgressBar: true,

                didOpen: () => {

                    Swal.showLoading();

                    $.ajax({

                        url: '<?= base_url(); ?>/service/confirm_fixed',

                        method: 'POST',

                        dataType: 'JSON',

                        data: {

                            service_invoice: service_invoice

                        },

                        success: function(res) {

                            if (res.status == 'SUCCESS') {

                                Swal.fire({

                                    allowEnterKey: false,

                                    allowOutsideClick: false,

                                    allowEscapeKey: false,

                                    icon: 'success',

                                    title: 'สำเร็จ',

                                    text: 'อัพเดตสถานะข้อมูลเรียบร้อยแล้ว',

                                    showConfirmButton: false,

                                    timer: 1500

                                });

                                setTimeout(function() {

                                    window.location.reload();

                                }, 1400);

                            } else {

                                Swal.fire({

                                    icon: 'error',

                                    title: 'ผิดพลาด',

                                    text: res.message,

                                    confirmButtonText: 'ตกลง'

                                })

                            }

                        }

                    })

                }

            })

        }

    })

});



//รับรถเรียบร้อย

$(document).on('click', '#btnConfirmPickCar', function() {

    Swal.fire({

        title: 'ยืนยันการซ่อม',

        text: "Job Order เรียบร้อยแล้ว?",

        icon: 'warning',

        showCancelButton: true,

        confirmButtonText: 'ตกลง',

        cancelButtonText: 'ยกเลิก'

    }).then((result) => {

        if (result.isConfirmed) {

            Swal.fire({

                allowEnterKey: false,

                allowEscapeKey: false,

                allowOutsideClick: false,

                html: 'กำลังบันทึกข้อมูล กรุณารอสักครู่...',

                timerProgressBar: true,

                didOpen: () => {

                    Swal.showLoading();

                    $.ajax({

                        url: '<?= base_url(); ?>/service/confirm_pick_car',

                        method: 'POST',

                        dataType: 'JSON',

                        data: {

                            service_invoice: service_invoice

                        },

                        success: function(res) {

                            if (res.status == 'SUCCESS') {

                                Swal.fire({

                                    allowEnterKey: false,

                                    allowOutsideClick: false,

                                    allowEscapeKey: false,

                                    icon: 'success',

                                    title: 'สำเร็จ',

                                    text: 'ยืนยันการรับรถเรียบร้อยแล้ว',

                                    showConfirmButton: false,

                                    timer: 1500

                                });

                                setTimeout(function() {

                                    window.location.reload();

                                }, 1400);

                            } else {

                                Swal.fire({

                                    icon: 'error',

                                    title: 'ผิดพลาด',

                                    text: res.message,

                                    confirmButtonText: 'ตกลง'

                                })

                            }

                        }

                    })

                }

            })

        }

    })

});



$(document).on('click', '#btnCancelService', function() {

    Swal.fire({

        title: 'ยกเลิก',

        text: "ต้องการยกเลิก?",

        icon: 'warning',

        showCancelButton: true,

        confirmButtonText: 'ตกลง',

        cancelButtonText: 'ยกเลิก'

    }).then((result) => {

        if (result.isConfirmed) {

            Swal.fire({

                html: 'กำลังลบข้อมูล กรุณารอสักครู่...',

                timerProgressBar: true,

                allowEnterKey: false,

                allowEscapeKey: false,

                allowOutsideClick: false,

                didOpen: () => {

                    Swal.showLoading();

                    $.ajax({

                        url: '<?= base_url(); ?>/service/cancel_service',

                        method: 'POST',

                        data: {

                            service_invoice: service_invoice

                        },

                        dataType: 'JSON',

                        success: function(res) {

                            if (res.status == 'SUCCESS') {

                                Swal.fire({

                                    icon: 'success',

                                    title: 'สำเร็จ',

                                    text: 'ยกเลิกเรียบร้อยแล้ว',

                                    showConfirmButton: false,

                                    timer: 1500,

                                    timerProgressBar: true,

                                    allowEnterKey: false,

                                    allowEscapeKey: false,

                                    allowOutsideClick: false,

                                });

                                setTimeout(function() {

                                    window.history.back();

                                }, 1400);

                            } else {

                                Swal.fire({

                                    icon: 'error',

                                    title: 'ผิดพลาด',

                                    text: res.message,

                                    confirmButtonText: 'ตกลง'

                                });

                                return false;

                            }

                        }

                    })

                }

            })

        }

    })

})
</script>