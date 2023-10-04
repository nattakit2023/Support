<table class="table table-bordered table-hover" id="tblService">

    <thead>

        <tr class="text-center">

            <th style="width: 10%">Job Order</th>

            <th style="width: 15%">Vessel</th>

            <th>Customer</th>

            <th style="width: 15%">Telephone</th>

            <th style="width: 10%">Status</th>

            <th style="width: 15%">Option</th>

        </tr>

    </thead>

    <tbody>

        <?php foreach ($service as $item) : ?>

            <tr>

                <td class="text-center"><span class="badge badge-dark"><?=$item->service_invoice;?></span></td>

                <td><?=$item->ves_name;?></td>

                <td><?=$item->cus_name;?></td>

                <td><?=$item->cus_tel;?></td>

                <td class="text-center">

                    <?php

                        switch($item->service_status){

                            case 'created' :

                                echo '<span class="badge badge-primary">Created</span>';

                                break;

                            case 'wait':

                                echo '<span class="badge badge-danger">Wait</span>';

                                break;

                            case 'fixed':

                                echo '<span class="badge badge-warning">Inprogress</span>';

                                break;

                            case 'done':

                                echo '<span class="badge badge-success">Completed</span>';

                                break;

                            default :

                                echo '';

                        }

                    ?>

                </td>

                <td class="text-center">

                    <a href="<?=base_url();?>pages/service_detail/<?=$item->service_invoice;?>" class="btn btn-sm btn-default rounded-0">Details</a>

                </td>

            </tr>

        <?php endforeach; ?>

    </tbody>

</table>



<script>

    $('#tblService').DataTable({

        "paging": true,

        "lengthChange": false,

        "searching": true,

        "ordering": false,

        "info": true,

        "autoWidth": false,

        "responsive": true,

        "pageLength": 25,

        language: {

            search: "Search :",

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
