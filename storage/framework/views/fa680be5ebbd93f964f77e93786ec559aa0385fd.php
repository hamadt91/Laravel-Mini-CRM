<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <!-- Page Header-->
        <div class="bg-dash-dark-2 py-4">
            <div class="container-fluid">
                <h2 class="h5 mb-0">Dashboard</h2>
            </div>
        </div>
        <section>
            <div class="container-fluid">
                <div class="row gy-4">
                    <div class="col-md-3 col-sm-6">
                        <div class="card mb-0">
                            <a href="<?php echo e(route('admin.get.company.list')); ?>">
                                <div class="card-body">
                                    <div class="d-flex align-items-end justify-content-between mb-2">
                                        <div class="me-2">
                                            <svg class="svg-icon svg-icon-sm svg-icon-heavy text-gray-600 mb-2">
                                                <use xlink:href="#stack-1"></use>
                                            </svg>
                                            <p class="text-sm text-uppercase text-gray-600 lh-1 mb-0">Companies</p>
                                        </div>
                                        <p class="text-xxl lh-1 mb-0 text-dash-color-1"><?php echo e($companies); ?></p>
                                    </div>
                                    <div class="progress" style="height: 3px">
                                        <div class="progress-bar bg-dash-color-1" role="progressbar" style="width: 30%"
                                             aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card mb-0">
                            <a href="<?php echo e(route('admin.get.employee.list')); ?>">
                                <div class="card-body">
                                    <div class="d-flex align-items-end justify-content-between mb-2">
                                        <div class="me-2">
                                            <svg class="svg-icon svg-icon-sm svg-icon-heavy text-gray-600 mb-2">
                                                <use xlink:href="#user-1"></use>

                                            </svg>
                                            <p class="text-sm text-uppercase text-gray-600 lh-1 mb-0">Employees</p>
                                        </div>
                                        <p class="text-xxl lh-1 mb-0 text-dash-color-2"><?php echo e($employees); ?></p>
                                    </div>
                                    <div class="progress" style="height: 3px">
                                        <div class="progress-bar bg-dash-color-2" role="progressbar" style="width: 70%"
                                             aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Mini-CRM/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>