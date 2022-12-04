<?php echo $__env->make('layouts.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="login-page">
    <div class="container d-flex align-items-center position-relative py-5">
        <div class="card shadow-sm w-100 rounded overflow-hidden bg-none">
            <div class="card-body p-0">
                <?php if(Session('email-message')): ?>
                    <div class="alert alert-danger"><?php echo e(Session('email-message')); ?></div>
                <?php elseif(Session('password-message')): ?>
                    <div class="alert alert-danger"><?php echo e(Session('password-message')); ?></div>
                <?php endif; ?>
                <div class="row gx-0 align-items-stretch">
                    <div class="col-lg-6">
                        <div class="info d-flex justify-content-center flex-column p-4 h-100 ">
                            <div class="py-5">
                                <h1 class="display-6 fw-bold">Admin Login</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 bg-white">
                        <div class="d-flex align-items-center px-4 px-lg-5 h-100 bg-dash-dark-2">
                            <form class="login-form py-5 w-100" method="post" action=<?php echo e(route('check.credentials')); ?>>
                                <?php echo csrf_field(); ?>
                                <div class="input-material-group mb-3">
                                    <input class="input-material" id="login-username" type="text" name="email" placeholder="E-mail"/>
                                </div>
                                <div class="input-material-group mb-4">
                                    <input class="input-material" type="password" name="password" placeholder="Password"/>
                                </div>
                                <button class="btn btn-primary mb-3" id="login" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/Mini-CRM/resources/views/admin/login.blade.php ENDPATH**/ ?>