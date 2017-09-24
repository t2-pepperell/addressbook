<?php $__env->startSection('content'); ?>
         <div class="container pt-lg-3">
         <div class="card" >
         <div class="card-header">
            <h4 class="card-title"><?php echo e($contact->title); ?> <?php echo e($contact->name); ?></h4>
         </div>
            <div class="row m-4">
                <div class=" col">
                    <div>
                    <h5 class="card-subtitle">Company Name</h5><?php echo e($contact->company_name); ?><br>
                    <h5 class="card-subtitle mt-3">Job Title</h5><?php echo e($contact->job_title); ?><br>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                    <div class="col-6"><h5 class="card-subtitle">Email</h5><?php echo e($contact->email); ?></div>
                    <div class="col-6"><h5 class="card-subtitle">Phone Number</h5><?php echo e($contact->phone_number); ?></div>
                    <div class="col-6"><h5 class="card-subtitle mt-3">Address</h5><?php echo e($contact->address); ?></div>
                    <div class="col-6"><h5 class="card-subtitle mt-3">Mob Number</h5><?php echo e($contact->mobile_number); ?></div>
                    </div>
                </div>
            </div>
            <div class="row m-4">
                   <div class="col"> <h5 class="card-subtitle">Notes</h5><br><p><?php echo e($contact->notes); ?></p></div>
            </div>

            
            </div>
            <?php if(!Auth::guest()): ?>
                <?php if(Auth::user()->id == $contact->user_id): ?>
                    <a href="/contacts/<?php echo e($contact->id); ?>/edit" class="btn btn-primary">Edit</a>

                    <?php echo Form::open(['action' => ['ContactsController@destroy', $contact->id,'method' => 'POST']]); ?>

                        <?php echo e(Form::hidden('_method','DELETE')); ?>

                        <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

                    <?php echo Form::close(); ?>

                <?php endif; ?>
            <?php endif; ?>
            </div>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>