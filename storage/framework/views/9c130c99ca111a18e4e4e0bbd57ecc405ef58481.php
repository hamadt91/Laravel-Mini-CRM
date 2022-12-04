<?php $__env->startSection('content'); ?>
    <div class="page-content form-page w-100">
        <!-- Page Header-->
        <div class="bg-dash-dark-2 py-4">
            <div class="container-fluid">
                <h2 class="h5 mb-0">Company Employee List</h2>
            </div>
        </div>
        <section class="tables py-0 mt-5">
            <div class="container-fluid">
                <div class="row gy-4">
                    <div class="col-lg-6 w-100">
                        <div class="card mb-0">
                            <div class="card-header">
                                <div class="row">
                                    <div class="class col-6">
                                        <h3 class="h4 mb-0">Company: <?php echo e($company->name); ?> </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Company</th>
                                            <th>Phone</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($employee->first_name); ?></td>
                                                <td><?php echo e($employee->last_name); ?></td>
                                                <td><?php echo e($employee->email); ?></td>
                                                <td><?php echo e($employee->company->name); ?></td>
                                                <td><?php echo e($employee->phone); ?></td>
                                                <td>
                                                    <form action="<?php echo e(route('admin.employee.edit', $employee->id)); ?>"
                                                          method="">
                                                        <button type="submit" class="btn btn-primary">Edit</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="<?php echo e(route('admin.employee.delete', $employee->id)); ?>"
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
                                    <?php echo e($employees->links()); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Footer-->
        <footer class="position-absolute bottom-0 bg-dash-dark-2 text-white text-center py-3 w-100 text-xs" id="footer">
            <div class="container-fluid text-center">
                <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                <p class="mb-0 text-dash-gray">2021 &copy; Your company. Design by <a href="https://bootstrapious.com">Bootstrapious</a>.
                </p>
            </div>
        </footer>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Mini-CRM/resources/views/admin/company/employee_list.blade.php ENDPATH**/ ?>