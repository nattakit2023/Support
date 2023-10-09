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

                    <h3><i class="fas fa-tools"></i> Job Order <strong><?= $service->service_invoice ?></strong></h3>

                    <p class="text-muted">Installation Date :
                        <?= date_format(date_create($service->due_date), 'd/m/Y'); ?>
                    </p>

                    <p class="text-muted">Completed Date :
                        <?= date_format(date_create($service->end_date), 'd/m/Y'); ?>
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

                    <button class="rounded-0 btn btn-default" onclick="window.history.back();"><i class="fas fa-angle-left"></i> Back</button>

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
                                        </strong><em><?= ($service->cus_email != null ? $service->cus_email : '-'); ?></em>
                                    </p>

                                </div>

                                <div class="col-md-4">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Address :
                                        </strong><em> <?= $service->cus_address; ?></em></p>

                                </div>

                                <div class="col-md-4">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Zipcode :
                                        </strong><em> <?= $service->cus_zipcode ?> </em></p>

                                </div>

                            </div>

                            <p style="margin:0px;" class="text-info mt-2"><i class="fas fa-circle"></i> Vessel</p>

                            <div class="row mb-2">

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Fleet :
                                        </strong><em><?= $service->ves_fleet; ?></em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Vessel :
                                        </strong><em><?= $service->ves_name; ?></em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Type :
                                        </strong><em><?= $service->ves_type; ?></em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>MMSI : </strong><em>
                                            <?= $service->ves_mmsi; ?></em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>IMO Number :
                                        </strong><em> <?= $service->ves_imo; ?></em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Call Sign :
                                        </strong><em> <?= $service->ves_callsign ?> </em></p>

                                </div>



                            </div>

                            <div class="row">

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Year Built :
                                        </strong><em> <?= $service->ves_year ?> </em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Survey :
                                        </strong><em> <?= $service->ves_survey ?> </em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Installation :
                                        </strong><em> <?= $service->ves_installation ?> </em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Maintenance :
                                        </strong><em> <?= $service->ves_maintenance ?> </em></p>

                                </div>

                            </div>

                            <p style="margin:0px;" class="text-info mt-2"><i class="fas fa-circle"></i> Contract Onboard</p>

                            <div class="row">
                                <div class="col-md-2 mb-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Name :
                                        </strong><em> <?= $service->con_name; ?></em></p>

                                </div>
                                <div class="col-md-2 mb-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Tel :
                                        </strong><em> <?= $service->con_tel; ?></em></p>

                                </div>
                                <div class="col-md-2 mb-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Email :
                                        </strong><em> <?= $service->con_email; ?></em></p>

                                </div>
                                <div class="col-md-2 mb-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Port :
                                        </strong><em> <?= $service->con_port; ?></em></p>

                                </div>
                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>ETA :
                                        </strong><em> <?= date_format(date_create($service->ETA), ' d/m/Y H:i:s'); ?> </em></p>

                                </div>

                                <div class="col-md-2">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>ETD :
                                        </strong><em> <?= date_format(date_create($service->ETD), ' d/m/Y  H:i:s'); ?> </em></p>

                                </div>

                            </div>

                            <p style="margin:0px;" class="text-info mt-2"><i class="fas fa-circle"></i> Assign</p>

                            <div class="row">

                                <div class="col-md-4">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Engineer :
                                        </strong><em> <?= $service->engineer; ?></em></p>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4">

                                    <p style="padding:0px; margin :0px;" class="text-muted"><strong>Support :
                                        </strong><em> <?= $service->support_1; ?></em></p>

                                </div>

                            </div>



                        </div>

                    </div>

                </div>

            </div>

            <?php if ($service->service_status == 'created') : ?>

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

                                                <select class="form-control select2 rounded-0" id="service_name" onchange="optionQuantity(value)">

                                                    <option value="">Loading...</option>

                                                </select>

                                            </div>

                                            <div class="col-md-2 mb-2">

                                                <select class="form-control select2 rounded-0" id="amount">

                                                    <option value="">กรุณาเลือกสินค้า</option>

                                                </select>

                                            </div>



                                            <!--<div class="col-md-3 mb-2">

                                                <input type="number" id="price" class="form-control rounded-0" min="0" placeholder="ราคาต่อหน่วย">

                                            </div>
                                            -->
                                        </div>

                                        <div class="row">

                                            <div class="col-md-9 mb-2">

                                                <input type="text" id="detail" class="form-control rounded-0" placeholder="More Detail (ถ้ามี)">

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-2 mb-2">

                                        <button id="addServiceDetail" class="btn btn-block btn-primary rounded-0"><i class="fas fa-plus"></i> Add</button>

                                    </div>

                                </div>

                            </div>

                        </div>



                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card rounded-0">

                            <div class="card-header bg-dark rounded-0">

                                Remark

                            </div>

                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-8 mb-2 ">

                                        <textarea id="remark" class="form-control rounded-0" placeholder="Remark" required></textarea>

                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2 mb-2">

                                        <button id="updateRemark" class="btn btn-block btn-primary rounded-0"><i class="fas fa-plus"></i> Add</button>

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

                        <!-- ใบกำกับภาษี ใบเสร็จ -->

                        <?php if ($service->service_status != 'created' && $service->service_status != 'approve' && $service->service_status != 'verify') : ?>

                            <div class="row">

                                <div class="col-md-6 mt-2">

                                    <a id="paper_receipt" class="btn btn-default btn-block rounded-0" target="_blank" href="<?= base_url(); ?>/service/print_receipt?invoice=<?= $service->service_invoice; ?>">Job
                                        Order<a>

                                </div>

                                <div class="col-md-6 mt-2">

                                    <a id="paper_receipt" class="btn btn-default btn-block rounded-0" target="_blank" href="<?= base_url(); ?>/service/print_tax?invoice=<?= $service->service_invoice; ?>">ATP
                                        Report<a>

                                </div>

                            </div>

                        <?php endif; ?>



                        <!-- สร้างงานรับซ่อม -->

                        <?php if ($service->service_status == 'created') : ?>

                            <div class="row">

                                <div class="col-md-12 mt-2">

                                    <button id="btnVerify" class="btn btn-primary btn-block rounded-0"><i class="fas fa-save"></i> Save</button>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12 mt-2">

                                    <button id="btnCancelService" class="btn btn-default btn-block rounded-0">Cancle</button>

                                </div>

                            </div>

                        <?php endif; ?>


                        <!-- รอการเช็คของ -->
                        <?php if ($this->session->userdata('admin_position') == 'support' || $this->session->userdata('admin_position') == 'admin') : ?>
                            <?php if ($service->service_status == 'verify') : ?>

                                <div class="row">

                                    <div class="col-md-12 mt-2">

                                        <button id="btnCheck" class="btn btn-success btn-block rounded-0"><i class="fas fa-check"></i> Verify</button>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12 mt-2">

                                        <button type="button" class="btn btn-danger btn-block rounded-0" data-toggle="modal" data-target="#modalAddContract">Back Order</button>

                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12 mt-2">

                                        <button id="btnCancelService" class="btn btn-default btn-block rounded-0">Cancel Order</button>

                                    </div>

                                </div>

                            <?php endif; ?>
                        <?php endif; ?>

                        <!-- รอการอนุมัติการซ่อม -->
                        <?php if ($this->session->userdata('admin_position') == 'admin') : ?>
                            <?php if ($service->service_status == 'approve') : ?>

                                <div class="row">

                                    <div class="col-md-12 mt-2">

                                        <button id="btnConfirm" class="btn btn-primary btn-block rounded-0"><i class="fas fa-check"></i> Approve</button>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12 mt-2">

                                        <button type="button" class="btn btn-danger btn-block rounded-0" data-toggle="modal" data-target="#modalAddContract">Back Order</button>

                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12 mt-2">

                                        <button id="btnCancelService" class="btn btn-default btn-block rounded-0">Cancel Order</button>

                                    </div>

                                </div>

                            <?php endif; ?>
                        <?php endif; ?>


                        <!-- ซ่อมเสร็จแล้ว -->
                        <?php if (($this->session->userdata('admin_position') == 'support') || ($this->session->userdata('admin_position') == 'admin')) : ?>
                            <?php if ($service->service_status == 'wait') : ?>

                                <div class="row">

                                    <div class="col-md-12 mt-2">

                                        <button id="btnConfirmFixed" class="btn btn-warning btn-block rounded-0"><i class="fas fa-check"></i> Completed Job</button>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12 mt-2">

                                        <button type="button" class="btn btn-danger btn-block rounded-0" data-toggle="modal" data-target="#modalAddContract">Back Order</button>

                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12 mt-2">

                                        <button id="btnCancelService" class="btn btn-default btn-block rounded-0">Cancel Order</button>

                                    </div>

                                </div>

                            <?php endif; ?>
                        <?php endif; ?>


                        <!-- รับรถ  -->
                        <?php if (($this->session->userdata('admin_position') == 'support') || ($this->session->userdata('admin_position') == 'admin')) : ?>
                            <?php if ($service->service_status == 'fixed') : ?>

                                <div class="row">

                                    <div class="col-md-12 mt-2">

                                        <button id="btnConfirmPickCar" class="btn btn-success btn-block rounded-0"><i class="fas fa-check"></i> Success Job Order</button>

                                    </div>

                                    <div class="col-md-12 mt-2">

                                        <button type="button" class="btn btn-danger btn-block rounded-0" data-toggle="modal" data-target="#modalAddContract">Back Order</button>

                                    </div>

                                </div>

                            <?php endif; ?>
                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

</div>

</section>

</div>

<!-- Modal Add History -->

<div class="modal fade" id="modalAddContract" tabindex="-1" role="dialog" aria-labelledby="modelBackOrder" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content rounded-0">

            <div class="modal-header bg-dark rounded-0">

                <h5 class="modal-title">รายละเอียด</h5>

                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-12 mb-2">

                        <div class="row mb-2">

                            <label class="col-md-3"><strong class="text-danger">*</strong>Name:</label>
                            <div class="col-md-9">
                                <select class="form-control select2 rouned-0" id="his_name">
                                    <option value="">Loading ...</option>
                                </select>
                            </div>

                        </div>

                        <div class="row mb-2">

                            <label class="col-md-3"><strong class="text-danger">*</strong>Descript :</label>

                            <div class="col-md-9">
                                <textarea name="descript" id="descript" class="form-control rounded-0" placeholder="Descript"></textarea>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-5"></div>

                            <div class="col-md-4 mt-2">

                                <button id="btnBacktoOrder" class="btn btn-primary rounded-0">Create</button>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12 mb-2" id="showSearch">

                        <div class="row">

                            <div class="col-md-12 mt-2 mb-2 text-center">

                                <h5 class="text-info"><small>กรอกข้อมูลให้ครบทุกช่อง</small></h5>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>





<!-- Modal เพิ่มส่วนลด -->

<div class="modal fade" id="modalAddDiscount" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

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

                        <input type="number" class="form-control rounded-0" id="service_discount" placeholder="กรอกส่วนลด">

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

    //Option History
    function optionHistory() {

        $.ajax({

            url: '<?= base_url(); ?>/service/option_history',

            method: 'POST',

            success: function(res) {

                $('#his_name').html(res);

            }

        })

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

    //ดึงOption ของ Product
    function optionQuantity($product_name) {
        $.ajax({

            url: '<?= base_url(); ?>/product/option_quantity',

            method: 'POST',

            data: {
                product_name: $product_name
            },


            success: function(res) {

                $('#amount').html(res);

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

        optionHistory();

    });

    // Create Contract

    $(document).on('click', '#createContract', function() {

        let con_name = $('#con_names').val();

        let con_tel = $('#con_tels').val();

        let con_email = $('#con_emails').val();

        if (con_name == '' || con_tel == '' || con_email == '') {

            Swal.fire({

                icon: 'warning',

                title: 'แจ้งเตือน',

                text: 'กรุณากรอกข้อมูลให้ครบถ้วน',

                confirmButtonText: 'ตกลง'

            });

            return false;

        }

        Swal.fire({

            title: 'เพิ่มผู้ใช้บริการ',

            text: "ต้องการสร้างรายการซ่อมนี้?",

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

                    html: 'กำลังสร้างรายการ กรุณารอสักครู่...',

                    timerProgressBar: true,

                    didOpen: () => {

                        Swal.showLoading();

                        $.ajax({

                            url: '<?= base_url(); ?>/vessel/create_Contract',

                            method: 'POST',

                            dataType: 'JSON',

                            data: {

                                con_name: con_name,

                                con_tel: con_tel,

                                con_email: con_email

                            },

                            success: function(res) {

                                if (res.status == 'SUCCESS') {

                                    Swal.fire({

                                        icon: 'success',

                                        title: 'สำเร็จ',

                                        text: 'สร้างรายการซ่อมสำเร็จ',

                                        showConfirmButton: false,

                                        timer: 1500

                                    });

                                    setTimeout(function() {

                                        window.location.assign('<?= base_url(); ?>/pages/service_create/');

                                    }, 1500);

                                } else {

                                    Swal.fire({

                                        icon: 'error',

                                        title: 'ผิดพลาด!',

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

    });

    //Update Service Remark

    $(document).on('click', '#updateRemark', function() {

        let service_name = $('#service_name').val();

        let remark = $('#remark').val();

        if (service_invoice == '' || remark == '') {

            Swal.fire({

                icon: 'warning',

                title: 'แจ้งเตือน',

                text: 'กรุณากรอกข้อมูลให้ครบถ้วน',

                confirmButtonText: 'ตกลง'

            });

            return false;

        }

        $.ajax({

            url: '<?= base_url(); ?>/service/updateRemark',

            method: 'POST',

            dataType: 'JSON',

            data: {

                service_invoice: service_invoice,

                remark: remark

            },

            success: function(res) {

                if (res.status == 'SUCCESS') {

                    Swal.fire({

                        icon: 'success',

                        title: 'สำเร็จ',

                        text: 'เพิ่มรีมาร์คสำเร็จ',

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

    //Add Service Detail

    $(document).on('click', '#addServiceDetail', function() {

        let service_name = $('#service_name').val();

        let amount = $('#amount').val();

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

    //btnBacktoOrder

    $(document).on('click', '#btnBacktoOrder', function() {

        let invoice = "<?= $service->service_invoice ?>";

        let his_name = $('#his_name').val();

        let descript = $('#descript').val();

        if (his_name == '' || descript == '' || invoice == '') {

            Swal.fire({

                icon: 'warning',

                title: 'แจ้งเตือน',

                text: 'กรุณากรอกข้อมูลให้ครบถ้วน',

                confirmButtonText: 'ตกลง'

            });

            return false;

        }

        Swal.fire({

            title: 'เพิ่มข้อความเรียบร้อย',

            text: "ต้องการสร้างรายการซ่อมนี้?",

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

                    html: 'กำลังสร้างรายการ กรุณารอสักครู่...',

                    timerProgressBar: true,

                    didOpen: () => {

                        Swal.showLoading();

                        $.ajax({

                            url: '<?= base_url(); ?>/service/Back_Order',

                            method: 'POST',

                            dataType: 'JSON',

                            data: {

                                his_name: his_name,

                                descript: descript,

                                invoice: invoice,

                            },

                            success: function(res) {

                                if (res.status == 'SUCCESS') {

                                    Swal.fire({

                                        icon: 'success',

                                        title: 'สำเร็จ',

                                        text: 'เตรียมพร้อมแก้ไขสำเร็จ',

                                        showConfirmButton: false,

                                        timer: 1500

                                    });

                                    setTimeout(function() {

                                        window.location.assign('<?= base_url(); ?>/pages/service_status?status=created');

                                    }, 1500);

                                } else {

                                    Swal.fire({

                                        icon: 'error',

                                        title: 'ผิดพลาด!',

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


    });

    //ตรวจสอบงานซ่อม

    $(document).on('click', '#btnVerify', function() {

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

                            url: '<?= base_url(); ?>/service/confirm_verify',

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

                                        text: 'ตรวจสอบงานเรียบร้อย',

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

    //รอการอนุมัติการซ่อม

    $(document).on('click', '#btnCheck', function() {

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

                            url: '<?= base_url(); ?>/service/confirm_check',

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

                                        text: 'ตรวจสอบงานเรียบร้อย',

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