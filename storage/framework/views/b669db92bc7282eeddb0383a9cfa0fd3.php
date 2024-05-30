<?php $__env->startSection('content'); ?>


    <section>


        <div class="container-fluid">
            <h1><?php echo e(trans('file.Transaction')); ?> <?php echo e($account->account_name); ?> </h1>
        </div>


        <div class="table-responsive">
            <table id="transaction_show-table" class="table ">
                <thead>
                <tr>
                    <th class="not-exported"></th>
                    <th><?php echo e(trans('file.Date')); ?></th>
                    <th><?php echo e(trans('file.Account')); ?></th>
                    <?php if(config('variable.currency_format')=='suffix'): ?>
                        <th><?php echo e(trans('file.Credit')); ?> (<?php echo e(config('variable.currency')); ?>)</th>
                    <?php else: ?>
                        <th>(<?php echo e(config('variable.currency')); ?>) <?php echo e(trans('file.Credit')); ?></th>
                    <?php endif; ?>
                    <?php if(config('variable.currency_format')=='suffix'): ?>
                        <th><?php echo e(trans('file.Debit')); ?> (<?php echo e(config('variable.currency')); ?>)</th>
                    <?php else: ?>
                        <th>(<?php echo e(config('variable.currency')); ?>) <?php echo e(trans('file.Debit')); ?></th>
                    <?php endif; ?>
                    <th><?php echo e(trans('file.Type')); ?></th>
                    <th><?php echo e(__('Reference No')); ?></th>
                    <?php if(config('variable.currency_format')=='suffix'): ?>
                        <th><?php echo e(trans('file.Balance')); ?> (<?php echo e(config('variable.currency')); ?>)</th>
                    <?php else: ?>
                        <th>(<?php echo e(config('variable.currency')); ?>) <?php echo e(trans('file.Balance')); ?></th>
                    <?php endif; ?>
                </tr>
                <tr>
                    <?php if(config('variable.currency_format')=='suffix'): ?>
                        <th colspan="7" class="text-center"><?php echo e(__('Initial Balance')); ?> (<?php echo e(config('variable.currency')); ?>

                            )
                        </th>
                    <?php else: ?>
                        <th colspan="7" class="text-center">(<?php echo e(config('variable.currency')); ?>

                            ) <?php echo e(__('Initial Balance')); ?></th>
                    <?php endif; ?>
                    <th colspan="1"><?php echo e($account->initial_balance); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr data-id="<?php echo e($transaction->id); ?>">
                        <td><?php echo e($key); ?></td>
                        <td><?php echo e($transaction->expense_reference ? $transaction->expense_date : $transaction->deposit_date); ?></td>
                        <td><?php echo e($transaction->Account->account_name); ?></td>
                        <?php if($transaction->deposit_reference ==null): ?>
                            <td>0.00</td>
                            <td><?php echo e($transaction->amount); ?></td>
                        <?php else: ?>
                            <td><?php echo e($transaction->amount); ?></td>
                            <td>0.00</td>
                        <?php endif; ?>
                        <?php if($transaction->category == 'transfer'): ?>
                            <td><?php echo e(trans('file.Transfer')); ?></td>
                        <?php else: ?>
                            <td><?php echo e($transaction->expense_reference ? trans('file.Expense') : trans('file.Income')); ?></td>
                        <?php endif; ?>
                        <td><?php echo e($transaction->expense_reference ?? $transaction->deposit_reference); ?></td>
                        <td></td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><?php echo e(trans('file.Credit')); ?></th>
                    <th><?php echo e(trans('file.Debit')); ?></th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>
                </tfoot>
            </table>
        </div>
    </section>



<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    (function($) {
        "use strict";
        let bla = <?php echo json_encode($account->initial_balance) ?>

        $(document).ready(function () {


            var table_table = $('#transaction_show-table').DataTable({


                "footerCallback": function (row, data, start, end, display) {
                    var api = this.api(), data;

                    // converting to interger to find total
                    var intVal = function (i) {
                        return typeof i == 'string' ?
                            i.replace(/[\$,]/g, '') * 1 :
                            typeof i == 'number' ?
                                i : 0;
                    };

                    // computing column Total of the complete result
                    var credit = api
                        .column(3)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var debit = api
                        .column(4)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);


                    var total = intVal(bla) + credit - debit;


                    $(api.column(3).footer()).html('<p>Credit: </p>' + credit);
                    $(api.column(4).footer()).html('<p>Debit: </p>' + debit);
                    $(api.column(7).footer()).html('<p>Balance: </p>' + total);
                },
                responsive: true,
                fixedHeader: {
                    header: true,
                    footer: true
                },
                processing: true,


                "order": [],
                'language': {
                    'lengthMenu': '_MENU_ <?php echo e(__("records per page")); ?>',
                    "info": '<?php echo e(trans("file.Showing")); ?> _START_ - _END_ (_TOTAL_)',
                    "search": '<?php echo e(trans("file.Search")); ?>',
                    'paginate': {
                        'previous': '<?php echo e(trans("file.Previous")); ?>',
                        'next': '<?php echo e(trans("file.Next")); ?>'
                    }
                },
                'columnDefs': [
                    {
                        "orderable": false,
                        'targets': [0, 7],
                    },
                    {
                        'render': function (data, type, row, meta) {
                            if (type == 'display') {
                                data = '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>';
                            }

                            return data;
                        },
                        'checkboxes': {
                            'selectRow': true,
                            'selectAllRender': '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>'
                        },
                        'targets': [0]
                    }
                ],


                'select': {style: 'multi', selector: 'td:first-child'},
                'lengthMenu': [[10, 25, 50, -1], [10, 25, 50, "All"]],
                dom: '<"row"lfB>rtip',
                buttons: [
                    {
                        extend: 'pdf',
                        text: '<i title="export to pdf" class="fa fa-file-pdf-o"></i>',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible'
                        },
                    },
                    {
                        extend: 'csv',
                        text: '<i title="export to csv" class="fa fa-file-text-o"></i>',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible'
                        },
                    },
                    {
                        extend: 'print',
                        text: '<i title="print" class="fa fa-print"></i>',
                        exportOptions: {
                            columns: ':visible:Not(.not-exported)',
                            rows: ':visible'
                        },
                    },
                    {
                        extend: 'colvis',
                        text: '<i title="column visibility" class="fa fa-eye"></i>',
                        columns: ':gt(0)'
                    },
                ],
            });

        });

    })(jQuery);
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abbisfar/payroll.abbisfarmltd.com/resources/views/finance/transaction/show.blade.php ENDPATH**/ ?>