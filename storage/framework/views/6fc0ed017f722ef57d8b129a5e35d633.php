<?php $__env->startSection('content'); ?>


    <section>

        <div class="card animated fadeInRight mr-5 ml-5">
            <div class="card-header  with-border">
                <h3 class="card-title"><?php echo e(__('Import EXCEL/CSV file only')); ?></h3>
                <?php echo $__env->make('shared.flash_message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <div id="form_result"></div>
            </div>
            <div class="card-body">
                <h6><a href="<?php echo e(url('sample_file/sample_employee.xlsx')); ?>" class="btn btn-primary"> <i
                    class="fa fa-download"></i> <?php echo e(__('Download Sample File')); ?> </a></h6>
                <p class="card-text">The first line in downloaded sample file should remain as it is. Please do not change
                    the order of columns in file.</p>
                <p class="card-text">The correct column order is (First Name, Last Name, Staff Id, Username, Email, Password, Joining Date, Gender, Date of Birth, Contact Number, Address, City, Zip, County, Attendance Type, Company Name, Department Name, Designation Name, Shift Name, Role Name).</p>
                <ul>
                    <li>Date format should be (According to general settings)</li>
                    <li>Company, Department, Designation, Shift and Role name must be matched with your existing data.</li>
                    <li>Gender must be Male / Female / Other.</li>
                    <li>Attendance Type must be general / ip_based.</li>
                    <li>You must follow the file, otherwise you will get an error while importing the file.</li>
                </ul>
                <form action="<?php echo e(route('employees.importPost')); ?>" name="import_employee" id="import_employee" autocomplete="off" enctype="multipart/form-data"
                      method="post" accept-charset="utf-8">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <fieldset class="form-group">
                                    <label for="logo"><?php echo e(trans('file.Upload')); ?> <?php echo e(trans('file.File')); ?></label>
                                    <input type="file" class="form-control-file" id="file" name="file"
                                           accept=".xlsx, .xls, .csv">
                                    <small><?php echo e(__('Please select excel/csv')); ?> file (allowed file size 2MB)</small>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="mt-1">
                        <div class="form-actions box-footer">
                            <button name="import_form" type="submit" class="btn btn-primary"><i
                                        class="fa fa fa-check-square-o"></i> <?php echo e(trans('file.Save')); ?>

                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abbisfar/payroll.abbisfarmltd.com/resources/views/employee/import.blade.php ENDPATH**/ ?>