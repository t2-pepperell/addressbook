<?php $__env->startSection('content'); ?>
 <div class="container pt-lg-3">
       <div class="jumbotron">
            <h1 class="text-center">Create a contact</h1>
            <?php echo Form::open(['action' => 'ContactsController@store', 'method' => 'POST']); ?>

                 <form>
                 <div class="form-group">
                        <?php echo e(Form::label('title','Title (required)')); ?>

                        <?php echo e(Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Mr, Mrs, Miss, Master'])); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('name','Name (required)')); ?>

                        <?php echo e(Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('company_name','Company Name')); ?>

                        <?php echo e(Form::text('company_name', '', ['class' => 'form-control', 'placeholder' => ''])); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('job_title','Job Title')); ?>

                        <?php echo e(Form::text('job_title', '', ['class' => 'form-control', 'placeholder' => ''])); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('email','Email (required)')); ?>

                        <?php echo e(Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'example@example.com'])); ?>

                    </div>
                     <div class="form-group">
                        <?php echo e(Form::label('phone_number','Phone Number')); ?>

                        <?php echo e(Form::tel('phone_number', '', ['class' => 'form-control', 'placeholder' => ''])); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('mobile_number','Mobile Number')); ?>

                        <?php echo e(Form::tel('mobile_number', '', ['class' => 'form-control', 'placeholder' => ''])); ?>

                    </div>
                     <div class="form-group">
                        <?php echo e(Form::label('address','Address (required)')); ?>

                        <?php echo e(Form::textarea('address', '', ['class' => 'form-control', 'placeholder' => ''])); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('notes','Notes')); ?>

                        <?php echo e(Form::textarea('notes', '', ['class' => 'form-control', 'placeholder' => ''])); ?>

                    </div>
                    <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

                 </form>
            <?php echo Form::close(); ?>

            </div>

       </div>
      
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>