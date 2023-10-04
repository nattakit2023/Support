<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h3><i class="fas fa-tools"></i><strong> Create Job Order</strong></h3>

                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/pages">Index</a></li>

                        <li class="breadcrumb-item active">Create Job Order</li>

                    </ol>

                </div>

            </div>

        </div><!-- /.container-fluid -->

    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12 mb-2">

                    <div class="card rounded-0">

                        <div class="card-header bg-dark rounded-0">

                            Customer Information

                            <div class="card-tools">

                                <button type="button" class="btn btn-warning btn-sm rounded-0" data-toggle="modal" data-target="#modalSearchData"><i class="fas fa-search"></i> Search Vessel</button>

                            </div>

                        </div>

                        <div class="card-body">

                            <div class="row mb-3">
                                <div class="col-md-2 mb-2">

                                    <h2><strong class="text-danger"></strong>Project Code :</h2>

                                </div>

                                <div class="col-md-2">

                                    <select class="form-control select2 rouned-0" id="projects">

                                        <option value="">Loading...</option>

                                    </select>

                                </div>
                            </div>

                            <div class="row mb-2">

                                <div class="col-md-3 mb-2">

                                    <label>Created Date :</label>

                                    <input type="date" id="create_date" class="form-control rounded-0" placeholder="วันที่ส่งซ่อม" value="<?= date('Y-m-d'); ?>">

                                </div>

                                <div class="col-1"></div>

                                <div class="col-md-3 mb-2">

                                    <label>Due Date :</label>

                                    <input type="date" id="due_date" class="form-control rounded-0" placeholder="วันที่ส่งซ่อม" value="<?= date('Y-m-d'); ?>">

                                </div>

                                <div class="col-1"></div>

                                <div class="col-md-3 mb-2">

                                    <label>End Date :</label>

                                    <input type="date" id="end_date" class="form-control rounded-0" placeholder="วันที่ส่งซ่อม" value="<?= date('Y-m-d'); ?>">

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-2">

                                    <p class="text-primary"><i class="fas fa-circle"></i> Customer</p>

                                </div>

                            </div>


                            <div class="row">

                                <div class="col-md-4 mb-2">

                                    <label><strong class="text-danger">*</strong>Name :</label>

                                    <div>

                                        <select class="form-control select2 rouned-0" id="cus_name" onchange="optionPhone(value),optionEmail(value),optionAddress(value),optionZipcode(value)">

                                            <option value="">Loading...</option>

                                        </select>

                                    </div>

                                </div>

                                <div class="col-md-4 mb-2">

                                    <label><strong class="text-danger">*</strong>Telephone :</label>

                                    <select class="form-control select2 rouned-0" id="cus_phone">

                                        <option value="">Telephone</option>

                                    </select>
                                </div>

                                <div class="col-md-4 mb-2">

                                    <label><strong class="text-danger">*</strong>E-mail :</label>

                                    <select class="form-control select2 rouned-0" id="cus_email">

                                        <option value="">Email</option>

                                    </select>

                                </div>

                            </div>

                            <div class="row mb-2">

                                <div class="col-md-8 mb-2">

                                    <label><strong class="text-danger">*</strong>Address :</label>

                                    <select class="form-control select2 rouned-0" id="cus_address">

                                        <option value="">Address</option>

                                    </select>

                                </div>

                                <div class="col-md-4 mb-2">

                                    <label><strong class="text-danger">*</strong>Zipcode :</label>

                                    <select class="form-control select2 rouned-0" id="cus_zipcode">

                                        <option value="">Zipcode</option>

                                    </select>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-2">

                                    <p class="text-primary"><i class="fas fa-circle"></i> Vessel</p>

                                </div>



                            </div>


                            <div class="row mb-2">

                                <div class="col-md-3 mb-2">

                                    <label><strong class="text-danger">*</strong>Fleet :</label>

                                    <select class="form-control select2 rouned-0" id="ves_fleet">

                                        <option value="fleet">Loading...</option>

                                    </select>

                                </div>

                                <div class="col-md-3 mb-2">

                                    <label><strong class="text-danger">*</strong>Name :</label>

                                    <select class="form-control select2 rouned-0" id="ves_name">

                                        <option value="">Loading...</option>

                                    </select>

                                </div>

                                <div class="col-md-2 mb-2">

                                    <label><strong class="text-danger">*</strong>Type :</label>

                                    <select class="form-control select2 rouned-0" id="ves_type">

                                        <option value="">Vessel Type</option>

                                    </select>
                                </div>

                                <div class="col-md-2 mb-2">

                                    <label><strong class="text-danger">*</strong>Maintenance :</label>

                                    <select class="form-control select2 rouned-0" id="ves_maintenance">

                                        <option value="PM">Preventive Maintenance</option>
                                        <option value="CM">Corrective Maintenance</option>

                                    </select>

                                </div>

                                <div class="col-md-2 mb-2">
                                    <div class="row mb-2">
                                        <div class="col-md-5">
                                            <label><strong class="text-danger">*</strong>Survey :</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="checkbox" id="ves_survey" name="ves_survey" >
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <label><strong class="text-danger">*</strong>Installation :</label>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="checkbox" id="ves_installation" name="ves_installation" >
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 mb-2">

                                    <label><strong class="text-danger">*</strong>Call Sign :</label>

                                    <input type="text" id="ves_callsign" class="form-control rounded-0" placeholder="Call Sign">

                                </div>

                                <div class="col-md-3 mb-2">

                                    <label><strong class="text-danger">*</strong>IMO :</label>

                                    <input type="text" maxlength="6" id="ves_imo" class="form-control rounded-0" placeholder="IMO" maxlength="6" oninput="this.value=this.value.replace(/[^0-9\s]/g,'');">

                                </div>

                                <div class="col-md-2 mb-2">

                                    <label><strong class="text-danger">*</strong>MMSI :</label>

                                    <input type="text" id="ves_mmsi" class="form-control rounded-0" placeholder="MMSI">

                                </div>

                                <div class="col-md-2 mb-2">

                                    <label><strong class="text-danger">*</strong>Year Built :</label>

                                    <input type="text" id="ves_year" class="form-control rounded-0" placeholder="Year Built" maxlength="4" oninput="this.value=this.value.replace(/[^0-9\s]/g,'');">

                                </div>


                            </div>


                            <div class="row">
                                <div class="col-md-2 mb-2">

                                    <p class="text-primary"><i class="fas fa-circle"></i> Contract Onboard</p>

                                </div>

                                <div>

                                    <button type="button" class="btn btn-primary rounded-0" data-toggle="modal" data-target="#modalAddContract"><i class="fas fa-plus"></i> Add Contract</button>

                                </div>

                            </div>


                            <div class="row mb-2">

                                <div class="col-md-3 mb-2">

                                    <label><strong class="text-danger">*</strong>Name :</label>

                                    <select class="form-control select2 rouned-0" id="con_name" onchange="optionContractphone(value),optionContractemail(value)">

                                        <option value="">Contract Name</option>

                                    </select>

                                </div>

                                <div class="col-md-3 mb-2">

                                    <label><strong class="text-danger">*</strong>Tel :</label>

                                    <select class="form-control select2 rouned-0" id="con_tel">

                                        <option value="">Contract Phone</option>

                                    </select>

                                </div>

                                <div class="col-md-6 mb-2">

                                    <label><strong class="text-danger">*</strong>ETA :</label>

                                    <input type="date" id="ETA" class="form-control rounded-0" placeholder="วันที่ส่งซ่อม" value="<?= date('Y-m-d'); ?>">

                                </div>

                                <div class="col-md-3 mb-2">

                                    <label><strong class="text-danger">*</strong>Port :</label>

                                    <input type="text" id="con_port" class="form-control rounded-0" placeholder="Port">

                                </div>

                                <div class="col-md-3 mb-2">

                                    <label><strong class="text-danger">*</strong>Email :</label>

                                    <select class="form-control select2 rouned-0" id="con_email">

                                        <option value="">Contract Email</option>

                                    </select>

                                </div>

                                <div class="col-md-6 mb-2">

                                    <label><strong class="text-danger">*</strong>ETD :</label>

                                    <input type="date" id="ETD" class="form-control rounded-0" placeholder="วันที่ส่งซ่อม" value="<?= date('Y-m-d'); ?>">

                                </div>


                            </div>


                            <div class="row">
                                <div class="col-md-2 mb-2">

                                    <p class="text-primary"><i class="fas fa-circle"></i> Contract Time</p>

                                </div>

                            </div>


                            <div class="row mb-2">

                                <div class="col-md-3 mb-2">

                                    <label><strong class="text-danger">*</strong>Start Date :</label>

                                    <input type="date" id="contract_start" class="form-control rounded-0" placeholder="วันที่ส่งซ่อม" value="<?= date('Y-m-d'); ?>">

                                </div>

                                <div class="col-1"></div>

                                <div class="col-md-3 mb-2">

                                    <label><strong class="text-danger">*</strong>End Date :</label>

                                    <input type="date" id="contract_end" class="form-control rounded-0" placeholder="วันที่ส่งซ่อม" value="<?= date('Y-m-d'); ?>">

                                </div>

                            </div>

                            <div class="row mb-2">

                                <p class="text-primary"><i class="fas fa-circle"></i> Engineer</p>

                            </div>

                            <div class="col-md-8 mb-3">

                                <div class="row mb-2">

                                    <div class="col-md-2">
                                        <label><strong class="text-danger">*</strong>Engineer :</label>
                                    </div>

                                    <div class="col-md-6">

                                        <select class="form-control select2 rouned-0" id="admin_name" onchange="optionAdmins(value)">

                                            <option value="">Loading...</option>

                                        </select>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-2 ">
                                        <label><strong class="text-danger">*</strong>Support :</label>
                                    </div>

                                    <div class="col-md-6">

                                        <select class="form-control select2 rouned-0" id="admin_names">

                                            <option value="">Select Support Engineer</option>

                                        </select>

                                    </div>

                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary rounded-0" id=""><i class="fas fa-plus"></i> Add</button>
                                    </div>
                                </div>

                            </div>



                            <div class="row">

                                <div class="col-md-12 mt-2">

                                    <button id="createService" class="btn btn-primary rounded-0">Create</button>

                                    <button onclick="clearForm()" class="btn btn-default rounded-0">Clear</button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>





<!-- Modal SearchData -->

<div class="modal fade" id="modalSearchData" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content rounded-0">

            <div class="modal-header bg-dark rounded-0">

                <h5 class="modal-title">ค้นหาทะเบียนรถ</h5>

                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-12 mb-2">

                        <div class="input-group">

                            <input type="text" onkeyup="search_license_plate()" id="search_license_plate" class="form-control rounded-0" placeholder="กรอกเลขทะเบียนรถ ตัวอย่าง 1กด-2565 เป็นต้น">

                            <span class="input-group-append">

                                <button type="button" onclick="search_license_plate()" class="btn btn-warning btn-flat"><i class="fas fa-search"></i> ค้นหา</button>

                            </span>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12 mb-2" id="showSearch">

                        <div class="row">

                            <div class="col-md-12 mt-2 mb-2 text-center">

                                <h5 class="text-info"><small>กรอกเลขทะเบียนรถที่ต้องการค้นหา</small></h5>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Modal Add Customer -->

<div class="modal fade" id="modalAddCustomer" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content rounded-0">

            <div class="modal-header bg-dark rounded-0">

                <h5 class="modal-title">กรอกข้อมูลบริษัท</h5>

                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-12 mb-2">

                        <div class="row mb-2">

                            <label class="col-md-2"><strong class="text-danger">*</strong>Name :</label>

                            <div class="col-md-10">
                                <input type="text" id="cus_names" class="form-control rounded-0" placeholder="Customer Name" autocomplete="on">
                            </div>

                        </div>

                        <div class="row mb-2">

                            <label class="col-md-2"><strong class="text-danger">*</strong>Addr :</label>
                            <div class="col-md-10">
                                <input type="text" id="cus_addresss" class="form-control rounded-0" placeholder="Address">
                            </div>

                        </div>

                        <div class="row mb-2">

                            <label class="col-md-2"><strong class="text-danger">*</strong>Zip :</label>

                            <div class="col-md-10">
                                <input type="text" id="cus_zipcodes" class="form-control rounded-0" placeholder="Zipcode">
                            </div>

                        </div>

                        <div class="row mb-2">

                            <label class="col-md-2"><strong class="text-danger">*</strong>Email :</label>

                            <div class="col-md-10">
                                <input type="text" id="cus_emails" class="form-control rounded-0" placeholder="Email">
                            </div>

                        </div>

                        <div class="row mb-2">

                            <label class="col-md-2"><strong class="text-danger">*</strong>Tel :</label>

                            <div class="col-md-10">
                                <input type="text" id="cus_tels" class="form-control rounded-0" placeholder="Telephone" maxlength="10" oninput="this.value=this.value.replace(/[^0-9\\s]/g,'');">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-5"></div>

                            <div class="col-md-4 mt-2">

                                <button id="createCustomer" class="btn btn-primary rounded-0">Create</button>

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


<!-- Modal Add Vessel -->

<div class="modal fade" id="modalAddVessel" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content rounded-0">

            <div class="modal-header bg-dark rounded-0">

                <h5 class="modal-title">ข้อมูลเรือ</h5>

                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-12 mb-2">

                        <div class="row mb-2">

                            <label class="col-md-3"><strong class="text-danger">*</strong>Fleet :</label>

                            <div class="col-md-9">
                                <input type="text" id="ves_fleets" class="form-control rounded-0" placeholder="Fleet Name">
                            </div>

                        </div>

                        <div class="row mb-2">

                            <label class="col-md-3"><strong class="text-danger">*</strong>Name :</label>
                            <div class="col-md-9">
                                <input type="text" id="ves_names" class="form-control rounded-0" placeholder="Vessel Name">
                            </div>

                        </div>

                        <div class="row mb-2">

                            <label class="col-md-3"><strong class="text-danger">*</strong>Type :</label>

                            <div class="col-md-9">
                                <input type="text" id="ves_types" class="form-control rounded-0" placeholder="Type Vessel">
                            </div>

                        </div>

                        <div class="row mb-2">

                            <label class="col-md-3"><strong class="text-danger">*</strong>MMSI :</label>

                            <div class="col-md-9">
                                <input type="text" id="ves_mmsis" class="form-control rounded-0" placeholder="MMSI">
                            </div>

                        </div>

                        <div class="row mb-2">

                            <label class="col-md-3"><strong class="text-danger">*</strong>IMO :</label>

                            <div class="col-md-9">
                                <input type="text" id="ves_imos" class="form-control rounded-0" placeholder="IMO" maxlength="10" oninput="this.value=this.value.replace(/[^0-9\\s]/g,'');">
                            </div>

                        </div>

                        <div class="row mb-2">

                            <label class="col-md-3"><strong class="text-danger">*</strong>Call Sign :</label>

                            <div class="col-md-9">
                                <input type="text" id="ves_callsigns" class="form-control rounded-0" placeholder="Call Sign">
                            </div>

                        </div>

                        <div class="row mb-2">

                            <label class="col-md-3"><strong class="text-danger">*</strong>Country :</label>

                            <div class="col-md-9">
                                <input type="text" id="ves_countrys" class="form-control rounded-0" placeholder="Country">
                            </div>

                        </div>

                        <div class="row mb-2">

                            <label class="col-md-3"><strong class="text-danger">*</strong>Year Built :</label>

                            <div class="col-md-9">
                                <input type="text" id="ves_years" class="form-control rounded-0" placeholder="Year" maxlength="4" oninput="this.value=this.value.replace(/[^0-9\\s]/g,'');">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-5"></div>

                            <div class="col-md-4 mt-2">

                                <button id="createVessel" class="btn btn-primary rounded-0">Create</button>

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

<!-- Modal Add Contract -->

<div class="modal fade" id="modalAddContract" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content rounded-0">

            <div class="modal-header bg-dark rounded-0">

                <h5 class="modal-title">ข้อมูลติดต่อคุมบนเรือ</h5>

                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-12 mb-2">

                        <div class="row mb-2">

                            <label class="col-md-3"><strong class="text-danger">*</strong>Name :</label>
                            <div class="col-md-9">
                                <input type="text" id="con_names" class="form-control rounded-0" placeholder="Contract Name">
                            </div>

                        </div>

                        <div class="row mb-2">

                            <label class="col-md-3"><strong class="text-danger">*</strong>Email :</label>

                            <div class="col-md-9">
                                <input type="text" id="con_emails" class="form-control rounded-0" placeholder="Contract Email">
                            </div>

                        </div>

                        <div class="row mb-2">

                            <label class="col-md-3"><strong class="text-danger">*</strong>Tel :</label>

                            <div class="col-md-9">
                                <input type="text" id="con_tels" class="form-control rounded-0" placeholder="Contract Tel" maxlength="15" oninput="this.value=this.value.replace(/[^0-9\\-]/g,'');">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-5"></div>

                            <div class="col-md-4 mt-2">

                                <button id="createContract" class="btn btn-primary rounded-0">Create</button>

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








<script>
    //-------------------------------------------------------------------------S C R I P T-----------------------------------------------------------------------------------

    //option admin

    function optionAdmin() {

        $.ajax({

            url: '<?= base_url(); ?>/user/option_admin',

            method: 'POST',

            success: function(res) {

                $('#admin_name').html(res);

            }

        })

    }

    //option admins

    function optionAdmins($admin_name) {

        $.ajax({

            url: '<?= base_url(); ?>/user/option_admins',

            method: 'POST',

            data: {
                admin_name: $admin_name
            },

            success: function(res) {

                $('#admin_names').html(res);

            }

        })

    }

    //-------------------------------------------------------------------------C U S T O M E R-----------------------------------------------------------------------------------
    //option customer
    function optionCustomer() {

        $.ajax({

            url: '<?= base_url(); ?>/customer/option_customer',

            method: 'POST',

            success: function(res) {

                $('#cus_name').html(res);

            }

        })

    }

    //option phone
    function optionPhone($cus_names) {

        $.ajax({

            url: '<?= base_url(); ?>/customer/option_phone',

            method: 'POST',

            data: {

                cus_names: $cus_names
            },

            success: function(res) {

                $('#cus_phone').html(res);



            }

        })

    }

    //option email
    function optionEmail($cus_names) {

        $.ajax({

            url: '<?= base_url(); ?>/customer/option_email',

            method: 'POST',

            data: {

                cus_names: $cus_names
            },

            success: function(res) {

                $('#cus_email').html(res);



            }

        })

    }

    //option address
    function optionAddress($cus_names) {

        $.ajax({

            url: '<?= base_url(); ?>/customer/option_address',

            method: 'POST',

            data: {

                cus_names: $cus_names
            },

            success: function(res) {

                $('#cus_address').html(res);



            }

        })

    }

    //option zipcode
    function optionZipcode($cus_names) {

        $.ajax({

            url: '<?= base_url(); ?>/customer/option_zipcode',

            method: 'POST',

            data: {

                cus_names: $cus_names
            },

            success: function(res) {

                $('#cus_zipcode').html(res);

            }

        })

    }
    //-------------------------------------------------------------------------V E S S E L---------------------------------------------------------------------------------------

    //option project
    function optionProject() {
        $.ajax({

            url: '<?= base_url(); ?>/vessel/option_project',

            method: 'POST',

            success: function(res) {

                $('#projects').html(res);

            }

        })
    }

    //option Fleet
    function optionFleet() {

        $.ajax({

            url: '<?= base_url(); ?>/vessel/option_fleet',

            method: 'POST',

            success: function(res) {

                $('#ves_fleet').html(res);

            }

        })

    }


    //option Vessel
    function optionVessel() {

        $.ajax({

            url: '<?= base_url(); ?>/vessel/option_vessel',

            method: 'POST',

            success: function(res) {

                $('#ves_name').html(res);

            }

        })

    }

    //option Type Vessel
    function optionTypeVessel() {

        $.ajax({

            url: '<?= base_url(); ?>/vessel/option_type_vessel',

            method: 'POST',


            success: function(res) {

                $('#ves_type').html(res);

            }

        })

    }

    //-------------------------------------------------------------------------C O N T R A C T----------------------------------------------------------------------------------

    //Option Contract Name
    function optionContractname() {

        $.ajax({

            url: '<?= base_url(); ?>/vessel/option_contract_name',

            method: 'POST',

            success: function(res) {

                $('#con_name').html(res);

            }

        })

    }

    //Option Contract Name
    function optionContractphone($con_name) {

        $.ajax({

            url: '<?= base_url(); ?>/vessel/option_contract_phone',

            method: 'POST',

            data: {
                con_name: $con_name
            },

            success: function(res) {

                $('#con_tel').html(res);

            }

        })

    }

    //Option Contract Email
    function optionContractemail($con_name) {

        $.ajax({

            url: '<?= base_url(); ?>/vessel/option_contract_email',

            method: 'POST',

            data: {
                con_name: $con_name
            },

            success: function(res) {

                $('#con_email').html(res);

            }

        })

    }
    //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------


    //clear form

    function clearForm() {

        $('#cus_name').val('');

        $('#cus_tel').val('');

        $('#cus_tax').val('');

        $('#cus_address').val('');

        $('#license_plate').val('');

        $('#car_brand').val('');

        $('#car_model').val('');

        $('#car_mile_number').val('');

    }


    function search_license_plate() {

        let license_plate = $("#search_license_plate").val();

        $.ajax({

            url: '<?= base_url(); ?>/service/search_license_plate',

            method: 'POST',

            data: {

                license_plate: license_plate

            },

            success: function(res) {

                $('#showSearch').html(res);

            }

        })

    }



    $(document).ready(function() {
        optionAdmin();
        optionCustomer();
        optionFleet();
        optionProject();
        optionVessel();
        optionTypeVessel();
        optionContractname();
    });






    // Create Customer

    $(document).on('click', '#createCustomer', function() {

        let cus_name = $('#cus_name').val();

        let cus_tel = $('#cus_tel').val();

        let cus_email = $('#cus_email').val();

        let cus_address = $('#cus_address').val();

        let cus_zip = $('#cus_zip').val();

        if (cus_name == '' || cus_tel == '' || cus_address == '' || cus_zip == '' || cus_email == '') {

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

                            url: '<?= base_url(); ?>/customer/create_customer',

                            method: 'POST',

                            dataType: 'JSON',

                            data: {

                                cus_name: cus_name,

                                cus_tel: cus_tel,

                                cus_address: cus_address,

                                cus_zip: cus_zip,

                                cus_email: cus_email

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




    // Create Vessel

    $(document).on('click', '#createVessel', function() {

        let ves_fleet = $('#ves_fleets').val();

        let ves_name = $('#ves_names').val();

        let ves_type = $('#ves_types').val();

        let ves_mmsi = $('#ves_mmsis').val();

        let ves_imo = $('#ves_imos').val();

        let ves_callsign = $('#ves_callsigns').val();

        let ves_country = $('#ves_countrys').val();

        let ves_year = $('#ves_years').val();

        if (ves_fleet == '' || ves_name == '' || ves_type == '' || ves_mmsi == '' || ves_imo == '' || ves_callsign == '' || ves_country == '' || ves_year == '') {

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

                            url: '<?= base_url(); ?>/vessel/create_Vessel',

                            method: 'POST',

                            dataType: 'JSON',

                            data: {

                                ves_fleet: ves_fleet,

                                ves_name: ves_name,

                                ves_type: ves_type,

                                ves_mmsi: ves_mmsi,

                                ves_imo: ves_imo,

                                ves_callsign: ves_callsign,

                                ves_country: ves_country,

                                ves_year: ves_year,

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


    // Create Service

    $(document).on('click', '#createService', function() {

        let projects = $('#projects').val();

        let cus_name = $('#cus_name').val();

        let cus_tel = $('#cus_phone').val();

        let cus_email = $('#cus_email').val();

        let cus_address = $('#cus_address').val();

        let cus_zipcode = $('#cus_zipcode').val();

        let ves_fleet = $('#ves_fleet').val();

        let ves_name = $('#ves_name').val();

        let ves_type = $('#ves_type').val();

        let ves_callsign = $('#ves_callsign').val();

        let ves_imo = $('#ves_imo').val();

        let ves_mmsi = $('#ves_mmsi').val();

        let ves_year = $('#ves_year').val();

        let ves_maintenance = $('#ves_maintenance').val();

        let ves_survey = document.getElementById('ves_survey').checked;

        let ves_installation = document.getElementById('ves_installation').checked;

        let con_name = $('#con_name').val();

        let con_tel = $('#con_tel').val();

        let con_email = $('#con_email').val();

        let con_port = $('#con_port').val();

        let admin_name = $('#admin_name').val();

        let admin_names = $('#admin_names').val();

        let create_date = $('#create_date').val();

        let due_date = $('#due_date').val();

        let end_date = $('#end_date').val();

        let eta = $('#ETA').val();

        let etd = $('#ETD').val();

        let contract_start = $('#contract_start').val();

        let contract_end = $('#contract_end').val();


        if (projects == '' || cus_name == '' || cus_tel == '' || cus_address == '' || cus_email == '' || cus_zipcode == '' || ves_fleet == '' || ves_name == '' ||
            ves_type == '' || ves_callsign == '' || ves_imo == '' || ves_mmsi == '' || ves_year == '' || ves_maintenance == '' || con_name == '' || con_tel == '' ||
            con_port == '' || con_email == '' || admin_name == '' || admin_names == '' || create_date == '' || due_date == '' || end_date == '' || eta == '' || etd == '' ||
            contract_start == '' || contract_end == '') {

            Swal.fire({

                icon: 'warning',

                title: 'แจ้งเตือน',

                text: 'กรุณากรอกข้อมูลให้ครบถ้วน',

                confirmButtonText: 'ตกลง'

            });

            return false;

        }

        Swal.fire({

            title: 'สร้างรายการซ่อม',

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

                            url: '<?= base_url(); ?>/service/create_service',

                            method: 'POST',

                            dataType: 'JSON',

                            data: {

                                projects: projects,

                                cus_name: cus_name,

                                cus_tel: cus_tel,

                                cus_address: cus_address,

                                cus_email: cus_email,

                                cus_zipcode: cus_zipcode,

                                ves_fleet: ves_fleet,

                                ves_name: ves_name,

                                ves_type: ves_type,

                                ves_callsign: ves_callsign,

                                ves_imo: ves_imo,

                                ves_mmsi: ves_mmsi,

                                ves_year: ves_year,

                                ves_maintenance: ves_maintenance,
                                
                                ves_survey: ves_survey,
                                
                                ves_installation: ves_installation,

                                con_name: con_name,

                                con_tel: con_tel,

                                con_port: con_port,

                                con_email: con_email,

                                admin_name: admin_name,

                                admin_names: admin_names,

                                create_date: create_date,

                                due_date: due_date,

                                end_date: end_date,

                                eta: eta,

                                etd: etd,

                                contract_start: contract_start,

                                contract_end: contract_end
                                
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

                                        window.location.assign('<?= base_url(); ?>/pages/service_detail/' + res.service_invoice);

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

    $(document).on('click', '#search', function() {

        let license_plate = $("#search_license_plate").val();

        if (license_plate == '') {

            Swal.fire({

                icon: 'warning',

                title: 'แจ้งเตือน',

                text: 'กรุณากรอกทะเบียนรถที่ต้องการค้นหา',

                confirmButtonText: 'ตกลง'

            })

            return false;

        }

        $.ajax({

            url: '<?= base_url(); ?>/service/search_license_plate',

            method: 'POST',

            data: {

                license_plate: license_plate

            },

            success: function(res) {

                $('#showSearch').html(res);

            }

        })

    })
</script>