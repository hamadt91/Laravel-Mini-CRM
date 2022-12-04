<?php $__env->startSection('content'); ?>
    <div class="page-content form-page w-100">
        <!-- Page Header-->
        <div class="bg-dash-dark-2 py-4">
            <div class="container-fluid">
                <h2 class="h5 mb-0">List</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid py-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-3 px-0">
                </ol>
                <?php if(Session('create-message')): ?>
                    <div class="alert alert-success"><?php echo e(Session('create-message')); ?></div>
                <?php elseif(Session('update-message')): ?>
                    <div class="alert alert-info"><?php echo e(Session('update-message')); ?></div>
                <?php elseif(Session('delete-message')): ?>
                    <div class="alert alert-danger"><?php echo e(Session('delete-message')); ?></div>
                <?php endif; ?>
            </nav>
        </div>
        <section class="tables py-0">
            <div class="container-fluid">
                <div class="row gy-4">
                    <div class="col-lg-6 w-100">
                        <div class="card mb-0">
                            <div class="card-header">
                                <div class="row">
                                    <div class="class col-6">
                                        <h3 class="h4 mb-0">list of Companies</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                        <tr>
                                            <th>Logo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><img src="<?php echo e(asset('storage/images/'.$company->logo)); ?>" alt="logo"
                                                         style="width:40px">
                                                </td>
                                                <td>
                                                    <a href="<?php echo e(route('admin.get.company.employee.list', $company->id)); ?>"><?php echo e($company->name); ?></a>
                                                </td>
                                                <td><?php echo e($company->email); ?></td>
                                                <td>
                                                    <form action="<?php echo e(route('admin.company.edit', $company->id)); ?>">
                                                        <button type="submit" class="btn btn-success">Edit</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="<?php echo e(route('admin.company.delete', $company->id)); ?>"
                                                          method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                    <?php echo e($companies->links()); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="position-absolute bottom-0 bg-dash-dark-2 text-white text-center py-3 w-100 text-xs" id="footer">
            <div class="container-fluid text-center">
                <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                <p class="mb-0 text-dash-gray">2021 &copy; Your company. Design by <a href="https://bootstrapious.com">Bootstrapious</a>.
                </p>
            </div>
        </footer>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Mini-CRM/resources/views/admin/company/list.blade.php ENDPATH**/ ?>