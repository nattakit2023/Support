<table class="table table-bordered table-hover" id="tblCalendar3">

    <thead>

        <tr class="text-center">

            <th style="width: 5%">ID</th>

            <th style="width: 10%">Installation Date</th>

            <th style="width: 10%">End Date</th>

            <th style="width: 15%">Title</th>

            <th style="width: 15%">Descript</th>

            <th style="width: 10%">ตัวเลือก</th>

        </tr>

    </thead>

    <tbody>

        <?php foreach ($event as $item) : ?>

            <tr id="row<?= $item->id; ?> " class="text-center">

                <td><?= $item->id; ?></td>

                <td><?= date_format(date_create($item->due_date), 'd/m/Y'); ?></td>

                <td><?= date_format(date_create($item->end_date), 'd/m/Y'); ?></td>

                <td><?= $item->title ?></td>

                <td><?= $item->descript ?></td>

                <td>
                    <button id="<?= $item->id ?>" class="btn btn-success" data-toggle="modal" data-target="#modalEditEvent<?= $item->id ?>">Edit</button>
                    <button id="deleteCalendar" value="<?= $item->id ?>" class="btn btn-danger">Delete</button>
                </td>

            </tr>

            <div class="modal fade" id="modalEditEvent<?= $item->id ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

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
                                            <input type="text" id="edit_title" class="form-control rounded-0" value="<?= $item->title ?>">
                                        </div>

                                    </div>

                                    <div class="row mb-2">

                                        <label class="col-md-3"><strong class="text-danger">*</strong>Descript :</label>

                                        <div class="col-md-9">
                                            <textarea id="edit_descript" class="form-control rounded-0" required><?= $item->descript ?></textarea>
                                        </div>

                                    </div>

                                    <div class="row mb-2">

                                        <label class="col-md-3"><strong class="text-danger">*</strong>Start Date :</label>

                                        <div class="col-md-9">
                                            <input type="date" id="edit_due_date" class="form-control rounded-0" placeholder="วันที่ซ่อมบำรุงเสร็จ" value="<?= date($item->due_date) ?>">
                                        </div>

                                    </div>

                                    <div class="row mb-2">

                                        <label class="col-md-3"><strong class="text-danger">*</strong>End Date :</label>

                                        <div class="col-md-9">
                                            <input type="date" id="edit_end_date" class="form-control rounded-0" placeholder="วันที่ซ่อมบำรุงเสร็จ" value="<?= date($item->end_date) ?>">
                                        </div>

                                    </div>

                                    <div class="row mb-2">

                                        <label class="col-md-3"><strong class="text-danger">*</strong>Color :</label>

                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <input id="edit_color" name="color" type="color" class="form-control input-md" readonly="readonly" value="<?= $item->color ?>" />
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row" style="text-align: center;">
                                        <div class="col-md-4"></div>

                                        <div class="col-md-4 mt-2">

                                            <button id="editCalendar" value="<?= $item->id ?>" class="btn btn-success rounded-0">Edit Event</button>

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

        <?php endforeach; ?>

    </tbody>

</table>

<script>
    $(document).on('click', '#deleteCalendar', function() {

        let id = $('#deleteCalendar').val();

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

                            url: '<?= base_url(); ?>calendar/delCalendar',

                            method: 'POST',

                            dataType: 'JSON',

                            data: {

                                id: id

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

                                    calendar(months, years);

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

    $(document).on('click', '#editCalendar', function() {

        let id = $('#editCalendar').val();

        let due_date = $('#edit_due_date').val();

        let end_date = $('#edit_end_date').val();

        let title = $('#edit_title').val();

        let descript = $('#edit_descript').val();

        let color = $('#edit_color').val();


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

            title: 'แก้ไขอีเวนท์บนปฏิทิน',

            text: "ต้องการแก้ไขอีเว้นท์นี้?",

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

                            url: '<?= base_url(); ?>calendar/editCalendar',

                            method: 'POST',

                            dataType: 'JSON',

                            data: {

                                id: id,

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

                                    $('#modalEditEvent' + res.id).modal('hide');

                                    

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



    $('#tblCalendar3').DataTable({

        "paging": true,

        "lengthChange": false,

        "searching": true,

        "ordering": false,

        "info": false,

        "autoWidth": false,

        "responsive": true,

        "pageLength": 5,



        language: {

            search: "ค้นหา :",

            searchPlaceholder: "ค้นหาข้อมูลในตาราง",

            "lengthMenu": "แสดง _MENU_ รายการ/หน้า",

            "zeroRecords": "--ไม่มีข้อมูล--",

            "paginate": {

                "first": "<<",

                "last": ">>",

                "next": ">",

                "previous": "<"

            },

            "info": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",

        },

    });
</script>