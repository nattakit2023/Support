<style>
    .headercalendar {
        border-collapse: collapse;
        width: 100%;
        height: 600px;
    }

    .headercalendar thead th {
        background-color: rgb(240, 240, 240);
        border: 1px solid #ddd;
        width: 14.285%;
        height: 40px;
        font-size: 16px;
        text-align: center;
    }

    .headercalendar tbody td {
        position: relative;
        border: 1px solid #ddd;
        font-size: 16px;
        width: 14.285%;
        height: 80px;
    }

    .headercalendar tbody td .header {
        text-align: right;
        position: absolute;
        top: 0px;
        right: 2px;
        width: 100%;
    }

    .bg_gray {
        background-color: rgb(240, 240, 240);
    }

    .bg_yellow_low {
        background-color: rgb(255, 255, 210);

    }

    .bg_job {
        background-color: #a1ebff;
        border-collapse: collapse;
        border-radius: 0.25rem;
        border: 1px solid #ddd;
        text-align: left;
        font-size: 12px;
    }

    .bg_event {
        position: relative;
        border-collapse: collapse;
        border-radius: 0.25rem;
        border: 1px solid #ddd;
        text-align: left;
        color: white;
        font-size: 12px;
    }

    .bg_pms {
        background-color: rgb(255, 255, 210);
    }

    .button-group {
        position: absolute;
        text-align: right;
        padding: 0px 5px 0px;

    }

    .button-group .button {
        border: none;
        border-radius: 0.25rem;
        background-color: rgb(255, 255, 255);
        transition-duration: 0.4s;
    }

    .button :hover {
        background-color: rgb(210, 210, 210);
        color: white;
    }

    .btn_event {
        width: 100px;
        border-radius: 0.25rem;

        background-color: #ffffff;
        border: 2px solid #ddd;
        text-align: center;
        cursor: pointer;
    }

    .btn_event:hover {
        background-color: #ddd;

    }

    .btn_event:after {
        background-color: #ddd;
    }
</style>

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h3><i class="fas fa-calendar-day"></i><strong> Calendar</strong></h3>

                    <p class="text-muted">Event Daily of Calendar</p>

                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/pages">Index</a></li>

                        <li class="breadcrumb-item active">Calendar</li>

                    </ol>

                </div>

            </div>

        </div>

    </section>

    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card rounded-0">
                        <div class="card-header bg-light rounded-0">
                            CALENDAR
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="row" style="padding-bottom: 10px;">
                                    <div class="col-md-2">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default" style="margin-right:10px;" id="Back_Month"><i class="fas fa-chevron-left"></i></button>
                                            <button type="button" class="btn btn-default" style="margin-right:10px;" id="Go_Month"><i class="fas fa-chevron-right"></i></button>
                                            <button type="button" class="btn btn-default" id="Today">Today</button>
                                        </div>
                                    </div>
                                    <div class="col-md-8" style="text-align:center;">
                                        <button type="button" class="btn btn-info" id="month"></button>
                                    </div>
                                    <div class="col-md-2" style="text-align:right;">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAddEvent">add Event</button>
                                    </div>
                                </div>

                                <table class="headercalendar">
                                    <thead>
                                        <tr>
                                            <th>SUN</th>
                                            <th>MON</th>
                                            <th>TUE</th>
                                            <th>WED</th>
                                            <th>THU</th>
                                            <th>FRI</th>
                                            <th>SAT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td id="bg1">
                                                <div id="date1">

                                                </div>
                                            </td>
                                            <td id="bg2">
                                                <div id="date2">

                                                </div>
                                            </td>
                                            <td id="bg3">
                                                <div id="date3">

                                                </div>
                                            </td>
                                            <td id="bg4">
                                                <div id="date4">

                                                </div>
                                            </td>
                                            <td id="bg5">
                                                <div id="date5">

                                                </div>
                                            </td>
                                            <td id="bg6">
                                                <div id="date6">

                                                </div>
                                            </td>
                                            <td id="bg7">
                                                <div id="date7">

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td id="bg8">
                                                <div id="date8">

                                                </div>
                                            </td>
                                            <td id="bg9">
                                                <div id="date9">

                                                </div>
                                            </td>
                                            <td id="bg10">
                                                <div id="date10">

                                                </div>
                                            </td>
                                            <td id="bg11">
                                                <div id="date11">

                                                </div>
                                            </td>
                                            <td id="bg12">
                                                <div id="date12">

                                                </div>
                                            </td>
                                            <td id="bg13">
                                                <div id="date13">

                                                </div>
                                            </td>
                                            <td id="bg14">
                                                <div id="date14">

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td id="bg15">
                                                <div id="date15">

                                                </div>
                                            </td>
                                            <td id="bg16">
                                                <div id="date16">

                                                </div>
                                            </td>
                                            <td id="bg17">
                                                <div id="date17">

                                                </div>
                                            </td>
                                            <td id="bg18">
                                                <div id="date18">

                                                </div>
                                            </td>
                                            <td id="bg19">
                                                <div id="date19">

                                                </div>
                                            </td>
                                            <td id="bg20">
                                                <div id="date20">

                                                </div>
                                            </td>
                                            <td id="bg21">
                                                <div id="date21">

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td id="bg22">
                                                <div id="date22">

                                                </div>
                                            </td>
                                            <td id="bg23">
                                                <div id="date23">

                                                </div>
                                            </td>
                                            <td id="bg24">
                                                <div id="date24">

                                                </div>
                                            </td>
                                            <td id="bg25">
                                                <div id="date25">

                                                </div>
                                            </td>
                                            <td id="bg26">
                                                <div id="date26">

                                                </div>
                                            </td>
                                            <td id="bg27">
                                                <div id="date27">

                                                </div>
                                            </td>
                                            <td id="bg28">
                                                <div id="date28">

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td id="bg29">
                                                <div id="date29">

                                                </div>
                                            </td>
                                            <td id="bg30">
                                                <div id="date30">

                                                </div>
                                            </td>
                                            <td id="bg31">
                                                <div id="date31">

                                                </div>
                                            </td>
                                            <td id="bg32">
                                                <div id="date32">

                                                </div>
                                            </td>
                                            <td id="bg33">
                                                <div id="date33">

                                                </div>
                                            </td>
                                            <td id="bg34">
                                                <div id="date34">

                                                </div>
                                            </td>
                                            <td id="bg35">
                                                <div id="date35">

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td id="bg36">
                                                <div id="date36">

                                                </div>
                                            </td>
                                            <td id="bg37">
                                                <div id="date37">

                                                </div>
                                            </td>
                                            <td id="bg38">
                                                <div id="date38">

                                                </div>
                                            </td>
                                            <td id="bg39">
                                                <div id="date39">

                                                </div>
                                            </td>
                                            <td id="bg40">
                                                <div id="date40">

                                                </div>
                                            </td>
                                            <td id="bg41">
                                                <div id="date41">

                                                </div>
                                            </td>
                                            <td id="bg42">
                                                <div id="date42">

                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card rounded-0">
                        <div class="card-header bg-light rounded-0">
                            <div class="row">
                                <div class="col-md-6" id="head">

                                </div>
                                <div class="col-md-6 ">
                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-2"><button class="btn_event" id="service">Service</button></div>
                                        <div class="col-md-2"><button class="btn_event" id="pms">PMS</button></div>
                                        <div class="col-md-2"><button class="btn_event" id="event">Event</button></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body" id="showTable">
                            <div class="text-center">

                                <div class="spinner-border text-dark" role="status">

                                    <span class="sr-only">Loading...</span>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Add Event -->

        <div class="modal fade" id="modalAddEvent" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content rounded-0">

                    <div class="modal-header bg-dark rounded-0">

                        <h5 class="modal-title">ข้อมูลการวางแผน</h5>

                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                        </button>

                    </div>

                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-12 mb-2">

                                <div class="row mb-2">

                                    <label class="col-md-3"><strong class="text-danger">*</strong>Title :</label>
                                    <div class="col-md-9">
                                        <input type="text" id="title" class="form-control rounded-0" placeholder="Title">
                                    </div>

                                </div>

                                <div class="row mb-2">

                                    <label class="col-md-3"><strong class="text-danger">*</strong>Descript :</label>

                                    <div class="col-md-9">
                                        <textarea id="descript" class="form-control rounded-0" placeholder="Descript" required></textarea>
                                    </div>

                                </div>

                                <div class="row mb-2">

                                    <label class="col-md-3"><strong class="text-danger">*</strong>Start Date :</label>

                                    <div class="col-md-9">
                                        <input type="date" id="due_date" class="form-control rounded-0" placeholder="วันที่ซ่อมบำรุงเสร็จ" value="<?= date('Y-m-d'); ?>">
                                    </div>

                                </div>

                                <div class="row mb-2">

                                    <label class="col-md-3"><strong class="text-danger">*</strong>End Date :</label>

                                    <div class="col-md-9">
                                        <input type="date" id="end_date" class="form-control rounded-0" placeholder="วันที่ซ่อมบำรุงเสร็จ" value="<?= date('Y-m-d'); ?>">
                                    </div>

                                </div>

                                <div class="row mb-2">

                                    <label class="col-md-3"><strong class="text-danger">*</strong>Color :</label>

                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input id="color" name="color" type="color" class="form-control input-md" readonly="readonly" />
                                        </div>
                                    </div>

                                </div>




                                <div class="row" style="text-align: center;">
                                    <div class="col-md-4"></div>

                                    <div class="col-md-4 mt-2">

                                        <button id="createCalendar" class="btn btn-primary rounded-0">Add Event</button>

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

        <div class="modal fade" id="modalEditEvent" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content rounded-0">

                    <div class="modal-header bg-dark rounded-0">

                        <h5 class="modal-title">ข้อมูลการวางแผน</h5>

                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                        </button>

                    </div>

                    <div class="modal-body">

                        <div class="row">

                            <div class="col-md-12 mb-2">

                                <div class="row mb-2">

                                    <label class="col-md-3"><strong class="text-danger">*</strong>Title :</label>
                                    <div class="col-md-9">
                                        <input type="text" id="edit_title" class="form-control rounded-0" value="">
                                    </div>

                                </div>

                                <div class="row mb-2">

                                    <label class="col-md-3"><strong class="text-danger">*</strong>Descript :</label>

                                    <div class="col-md-9">
                                        <textarea id="edit_descript" class="form-control rounded-0" required></textarea>
                                    </div>

                                </div>

                                <div class="row mb-2">

                                    <label class="col-md-3"><strong class="text-danger">*</strong>Start Date :</label>

                                    <div class="col-md-9">
                                        <input type="date" id="edit_due_date" class="form-control rounded-0" placeholder="วันที่ซ่อมบำรุงเสร็จ" value="">
                                    </div>

                                </div>

                                <div class="row mb-2">

                                    <label class="col-md-3"><strong class="text-danger">*</strong>End Date :</label>

                                    <div class="col-md-9">
                                        <input type="date" id="edit_end_date" class="form-control rounded-0" placeholder="วันที่ซ่อมบำรุงเสร็จ" value="">
                                    </div>

                                </div>

                                <div class="row mb-2">

                                    <label class="col-md-3"><strong class="text-danger">*</strong>Color :</label>

                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input id="edit_color" name="color" type="color" class="form-control input-md" readonly="readonly" value="" />
                                        </div>
                                    </div>

                                </div>

                                <div class="row" style="text-align: center;">
                                    <div class="col-md-4"></div>

                                    <div class="col-md-4 mt-2">

                                        <button id="editCalendar" value="" class="btn btn-success rounded-0">Edit Event</button>

                                    </div>

                                    <div class="col-md-4"></div>


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

    </section>

</div>


<style>
</style>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<script>
    var date = new Date();

    var day_month_arr = [31, getDateFeb(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

    var month_arr = ['January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

    var months = date.getMonth();

    var month = date.getMonth();

    var years = date.getFullYear();

    var year = date.getFullYear();

    function calendar(month, year) {
        if (month == months && year == years) {
            $('#Today').prop('disabled', true);
        } else {
            $('#Today').prop('disabled', false);
        }
        day_month_arr[1] = getDateFeb(year);
        $('#month').html(month_arr[month] + " " + year);

        $('#date').html(GetDate_Month(month, year));

        tblCalendar(month, year);

    }

    function getDateFeb(year) {
        day_month = year % 4;

        if (year % 100 == 0) {
            return 28;
        }

        if (day_month == 0) {
            return 29;
        } else {
            return 28;
        }
    }

    function GetDate_Month(month, year) {
        var first_date = new Date(year, month, 1).getDay();
        var current_date = 1;
        var next_date = 1;
        for (day = 1; day <= 42; day++) {

            $('#bg' + day).removeClass();
            $('#bg' + day).attr('onclick', 'modalAddEvent(value)');
            $('#date' + day).addClass('header');
            if (first_date > 0) {
                first_date--;
                $('#bg' + day).addClass('bg_gray text-gray').val('Not This Month');
                if (month == 0) {
                    $('#date' + day).html('<div id="' + day + '">' + (day_month_arr[11] - first_date) + '</div>');
                } else {
                    $('#date' + day).html('<div id="' + day + '">' + (day_month_arr[month - 1] - first_date) + '</div>');
                }
            } else if (current_date <= day_month_arr[month]) {
                $('#date' + day).val(year + '-' + (month + 1) + '-' + (current_date));
                if (current_date == date.getDate() && month == months && year == years) {
                    $('#date' + day).html('<div id="' + day + '">' + (current_date++) + '</div>');
                    $('#bg' + day).addClass('bg_yellow_low').val('This Month');
                } else {
                    $('#date' + day).html('<div id="' + day + '">' + (current_date++) + '</div>');
                    $('#bg' + day).val('This Month');
                }
            } else {
                $('#date' + day).html('<div id="' + day + '">' + (next_date++) + '</div>');
                $('#bg' + day).addClass('bg_gray text-gray').val('Not This Month');
            }
            $('#' + (day)).addClass('corner');
            <?php foreach ($calendar as $item) : ?>
                if (
                    ('<?= date_format(date_create($item->due_date), 'd') ?>' <= (current_date - 1) && '<?= date_format(date_create($item->end_date), 'd') ?>' >= (current_date - 1)) &&
                    ('<?= date_format(date_create($item->due_date), 'm') ?>' == (month + 1) && '<?= date_format(date_create($item->end_date), 'm') ?>' >= (month + 1)) &&
                    ('<?= date_format(date_create($item->due_date), 'Y') ?>' == year && '<?= date_format(date_create($item->end_date), 'Y') ?>' >= year)
                ) {
                    if ('<?= date_format(date_create($item->due_date), 'd') ?>' == (current_date - 1) || day % 7 == 1) {
                        $('#date' + day).append('<div id ="' + day + "-" + <?= $item->id ?> + '">' + '<?= $item->title ?>' + '</div>').attr('colspan',2);
                    } else {
                        $('#date' + day).append('<div id ="' + day + "-" + <?= $item->id ?> + '"> .</div>');
                    }

                    $('#' + day + "-" + <?= $item->id ?>).addClass('bg_event').attr('onclick', 'modalEditEvent(value)').val('<?= $item->id ?>');
                    $('#' + day + "-" + <?= $item->id ?>).css('background-color', '<?= $item->color ?>');
                }
            <?php endforeach; ?>


        }
    }

    function modalAddEvent(value) {
        $('#modalAddEvent').modal('show');
    }

    function modalEditEvent(value) {
        $('#modalEditEvent').modal('show');
    }

    function tblCalendar(month, year) {

        $.ajax({

            url: '<?= base_url(); ?>calendar/tblCalendar',

            method: 'POST',

            data: {
                month: month,
                year: year
            },

            success: function(res) {
                $('#head').html('Service on Month');
                $('#showTable').html(res);
                $('#service').prop('disabled', true);
                $('#pms').prop('disabled', false);
                $('#event').prop('disabled', false);

            }

        })

    }

    function tblCalendar2(month, year) {

        $.ajax({

            url: '<?= base_url(); ?>calendar/tblCalendar2',

            method: 'POST',

            data: {
                month: month,
                year: year
            },

            success: function(res) {
                $('#head').html('PMS on Month');
                $('#showTable').html(res);
                $('#service').prop('disabled', false);
                $('#pms').prop('disabled', true);
                $('#event').prop('disabled', false);

            }

        })

    }

    function tblCalendar3(month, year) {

        $.ajax({

            url: '<?= base_url(); ?>calendar/tblCalendar3',

            method: 'POST',

            data: {
                month: month,
                year: year
            },

            success: function(res) {
                $('#head').html('Event on Month');
                $('#showTable').html(res);
                $('#service').prop('disabled', false);
                $('#pms').prop('disabled', false);
                $('#event').prop('disabled', true);

            }

        })

    }

    $(document).on('click', '#createCalendar', function() {

        let due_date = $('#due_date').val();

        let end_date = $('#end_date').val();

        let title = $('#title').val();

        let descript = $('#descript').val();

        let color = $('#color').val();

        if (due_date == '' || end_date == '' || title == '' || descript == '' || color == '') {
            Swal.fire({

                icon: 'warning',

                title: 'แจ้งเตือน',

                text: 'กรุณากรอกข้อมูลให้ครบถ้วน',

                confirmButtonText: 'ตกลง'

            });

            return false;
        }

        Swal.fire({

            title: 'สร้างอีเวนท์บนปฏิทิน',

            text: "ต้องการสร้างอีเว้นท์นี้?",

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

                            url: '<?= base_url(); ?>calendar/createCalendar',

                            method: 'POST',

                            dataType: 'JSON',

                            data: {

                                due_date: due_date,

                                end_date: end_date,

                                title: title,

                                descript: descript,

                                color: color

                            },


                            success: function(res) {

                                if (res.status == 'SUCCESS') {

                                    Swal.fire({

                                        icon: 'success',

                                        title: 'สำเร็จ',

                                        text: res.message,

                                        showConfirmButton: false,

                                        timer: 1500

                                    });

                                    $('#modalAddEvent').modal('hide');

                                    setTimeout(function() {

                                        window.location.assign('<?= base_url(); ?>pages/calendar');

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

    $(document).ready(function() {
        calendar(months, years);
    });

    $(document).on('click', '#Today', function() {
        month = months;
        year = years;
        calendar(month, year);
    });

    $(document).on('click', '#Back_Month', function() {
        if (month < 1) {
            month = 11;
            year = year - 1;
        } else {
            month = month - 1;
        }
        calendar(month, year);
    });

    $(document).on('click', '#Go_Month', function() {
        if (month > 10) {
            month = 0;
            year = year + 1;
        } else {
            month = month + 1;
        }
        calendar(month, year);
    });

    $(document).on('click', '#service', function() {
        tblCalendar(month, year);
    });

    $(document).on('click', '#pms', function() {
        tblCalendar2(month, year);
    });

    $(document).on('click', '#event', function() {
        tblCalendar3(month, year);
    });
</script>