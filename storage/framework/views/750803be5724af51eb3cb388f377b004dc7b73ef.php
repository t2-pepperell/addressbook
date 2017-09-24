<?php $__env->startSection('content'); ?>
 <div class="container pt-lg-3">
            <div class="card panel-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <h3>Your Contacts</h3>
                     <?php if(count($contacts)> 0): ?>
                     <table class="table table-sm table-bordered table-hover">
                        <thead>
                            <tr>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Company Name</th>
                            <th>Job Title</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    
                                    <td><?php echo e($contact->title); ?></td>
                                    <td><?php echo e($contact->name); ?></td>
                                    <td><?php echo e($contact->company_name); ?></td>
                                    <td><?php echo e($contact->job_title); ?></td>
                                    <td><?php echo e($contact->email); ?></td>
                                    <td><?php echo e($contact->phone_number); ?></td>
                                    <td><?php echo e($contact->address); ?></td>
                                    <td>
                                        <a class="btn btn-link" href="contacts/<?php echo e($contact->id); ?>">View</a>
                                    </td> 
                                    <td>
                                        <a  class="btn btn-link" href="contacts/<?php echo e($contact->id); ?>/edit">Edit</a> 
                                    </td>
                                    <td>
                                        <?php echo Form::open(['action' => ['ContactsController@destroy', $contact->id,'method' => 'POST','class' => 'form-inline']]); ?>

                                            <?php echo e(Form::hidden('_method','DELETE')); ?>

                                            <?php echo e(Form::submit('Delete', ['class' => ' btn btn-link'])); ?>

                                        <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        </table>
                        <?php else: ?>
                       <p> No contacts have been created! </p>
                        <?php endif; ?>
                    <a class="btn btn-primary" href="contacts/create">Create Contact</a> <a class="btn btn-secondary" href="contacts/">Back to Contacts</a>
                </div>
                
            </div>
              
        </div>
       
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>