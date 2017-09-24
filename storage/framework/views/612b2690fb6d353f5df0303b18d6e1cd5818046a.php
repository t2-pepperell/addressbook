<?php $__env->startSection('content'); ?>

 <div class="container pt-lg-5">
    <div class="jumbotron text-center"><h3>Address Book Application</h3>
        <p>Welcome to the Address book Application, the list of searchable contacts can be found below. To create a contact and edit you must be registered and logged in as a user.</p>
    </div>
        
    <div class=" row mb-2"> 
        <div class="col-6">
            <?php echo Form::open(['action' => 'SearchController@search', 'method' => 'GET']); ?>

            <form>
                <div class="input-group">
                        <?php echo e(Form::text('search', '', ['class' => 'form-control', 'placeholder' => 'Search Name'])); ?>

                        <span class="input-group-btn">
                            <?php echo e(Form::submit('Search', ['class' => 'btn btn-secondary'])); ?>

                        </span>
                </div>
            </form>
            <?php echo Form::close(); ?>

        </div>    
    </div>

    <div class="row">
        <table class="table  table-bordered table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Company Name</th>
                    <th>Job Title</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Mobile Number</th>        
                    <th>Address</th>
                    <th>Notes</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php if(count($contacts)> 0): ?>
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr> 
                        <td><?php echo e($contact->title); ?></td>
                        <td><?php echo e($contact->name); ?></td>
                        <td><?php echo e($contact->company_name); ?></td>
                        <td><?php echo e($contact->job_title); ?></td>
                        <td><?php echo e($contact->email); ?></td>
                        <td><?php echo e($contact->phone_number); ?></td>
                        <td><?php echo e($contact->mobile_number); ?></td>
                        <td><?php echo e(substr($contact->address, 0, 20)); ?><?php echo e(strlen($contact->address) > 20 ? "..." : ""); ?></td>
                        <td><?php echo e(substr($contact->notes, 0, 20)); ?><?php echo e(strlen($contact->notes) > 20 ? "..." : ""); ?></td>
                        <td>
                            <?php if(!Auth::guest()): ?>
                                <?php if(Auth::user()->id == $contact->user_id): ?>
                                    <a class="btn btn-link" href="contacts/<?php echo e($contact->id); ?>">View</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </td> 
                        <td>
                            <?php if(!Auth::guest()): ?>
                                <?php if(Auth::user()->id == $contact->user_id): ?>
                                    <a  class="btn btn-link" href="contacts/<?php echo e($contact->id); ?>/edit">Edit</a> 
                                <?php endif; ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if(!Auth::guest()): ?>
                                <?php if(Auth::user()->id == $contact->user_id): ?>
                                    <?php echo Form::open(['action' => ['ContactsController@destroy', $contact->id,'method' => 'POST','class' => 'form-inline']]); ?>

                                        <?php echo e(Form::hidden('_method','DELETE')); ?>

                                        <?php echo e(Form::submit('Delete', ['class' => ' btn btn-link'])); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php else: ?>
            <tr> <td><p>No post found</p></td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-4">
            <?php if(!Auth::guest()): ?>
                <a class="btn btn-primary" href="contacts/create">Create Contact</a>
            <?php endif; ?>                      
        </div>
        <div class="col-2 ml-auto"><?php echo e($contacts->links()); ?></div>
    </div>

</div>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>