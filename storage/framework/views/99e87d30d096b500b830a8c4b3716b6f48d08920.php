<?php $__env->startSection('content'); ?>
     <div class="container pt-lg-3">
        <div class="jumbotron text-center"><h1>Welcome to Address Book Application</h1>
            <p>Welcome to the Address book Application, to find the list of contacts click on the button below </p>
        </div>
    </div>
       
      
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>