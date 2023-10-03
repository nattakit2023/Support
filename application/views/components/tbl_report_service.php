<table class="table table-bordered table-hover" id="tblReportService">

    <thead>

        <tr class="text-center">

            <th style="width: 10%">Job Order</th>

            <th style="width: 15%">Vessel</th>

            <th>Name</th>

            <th style="width: 12%">Telephone</th>

            <th style="width: 15%">Installation Date</th>

            <th style="width: 15%">Completed Date</th>

            <th style="width: 12%">Option</th>

        </tr>

    </thead>

    <tbody>

        <?php foreach ($service as $item) : ?>

            <tr>

                <td class="text-center"><span class="badge badge-dark"><?=$item->service_invoice;?></span></td>

                <td><?=$item->license_plate;?></td>

                <td><?=$item->cus_name;?></td>

                <td><?=$item->cus_tel;?></td>

                <td class="text-center">

                    <?=date_format(date_create($item->create_date), 'd/m/Y');?>

                </td>

                <td>

                <?=date_format(date_create($item->end_date), 'd/m/Y');?>

                </td>

                <td class="text-center">

                    <a href="<?=base_url();?>pages/service_detail/<?=$item->service_invoice;?>" class="btn btn-sm btn-default rounded-0">Details</a>

                </td>

            </tr>

        <?php endforeach; ?>

    </tbody>

</table>

<script>

    $('#tblReportService').DataTable({

        "paging": true,

        "lengthChange": false,

        "searching": true,

        "ordering": true,

        "info": false,

        "autoWidth": false,

        "responsive": true,

        "pageLength": 25,

        language: {

            search: "ค้นหา :",

            searchPlaceholder: "",

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
