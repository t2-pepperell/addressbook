<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
        <?php echo e(config('app.name', 'Addressbook ')); ?>

    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/')); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>

     <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav ">
            <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a></li>
 
            <?php else: ?>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle"  id="DropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                </a>

                <div class="dropdown-menu"  aria-labelledby="DropdownMenuLink" >
                    <a href="/dashboard" class="dropdown-item">Dashboard</a>
                    <a class="dropdown-item">
                        <!--<a href="/dashboard" class="dropdown-item">Dashboard</a>-->
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </a>
                </div>
            </div>
            <?php endif; ?>
        </ul>
    </div>

  </div>
</nav>
