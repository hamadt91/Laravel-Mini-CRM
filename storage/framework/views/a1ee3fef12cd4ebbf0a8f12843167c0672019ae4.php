<?php $__env->startSection('content'); ?>
    <div class="d-flex align-items-stretch w-100">
        <div class="page-content form-page">
            <!-- Page Header-->
            <div class="bg-dash-dark-2 py-4">
                <div class="container-fluid">
                    <h2 class="h5 mb-0">Forms</h2>
                </div>
            </div>
            <!-- Breadcrumb-->
            <div class="container-fluid py-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 py-3 px-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form</li>
                    </ol>
                </nav>
            </div>
            <!-- Forms Section-->
            <section class="pt-0">
                <div class="container-fluid ">
                    <div class="row gy-4">
                        <!-- Basic Form-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="h4 mb-0">Registration Form</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <p class="text-sm">Edit your Company data</p>
                                    <form action="<?php echo e(route('admin.company.update', $company->id)); ?>" method="post"
                                          enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputEmail1">Name</label>
                                            <input class="form-control" id="exampleInputEmail1" type="text"
                                                   aria-describedby="emailHelp" name="name" value="<?php echo e($company->name); ?>">
                                            <label class="form-label" for="exampleInputEmail1">Email</label>
                                            <input class="form-control" id="exampleInputEmail1" type="email"
                                                   aria-describedby="emailHelp" name="email"
                                                   value="<?php echo e($company->email); ?>">
                                            <label class="form-label" for="exampleInputEmail1">Logo</label><br>
                                            <img src="<?php echo e(URL::asset('storage/images/'.$company->logo)); ?>" alt="logo"
                                                 style="width: 50px">
                                            <input class="form-control" id="exampleInputEmail1" type="file" required
                                                   aria-describedby="emailHelp" name="logo" value="<?php echo e($company->logo); ?>">
                                            <label class="form-label" for="exampleInputEmail1">Website</label>
                                            <input class="form-control" id="exampleInputEmail1" type="text"
                                                   aria-describedby="emailHelp" name="website"
                                                   value="<?php echo e($company->website); ?>">
                                        </div>
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Footer-->
                <footer class="position-absolute bottom-0 bg-dash-dark-2 text-white text-center py-3 w-100 text-xs"
                        id="footer">
                    <div class="container-fluid text-center">
                        <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                        <p class="mb-0 text-dash-gray">2021 &copy; Your company. Design by <a
                                href="https://bootstrapious.com">Bootstrapious</a>.</p>
                    </div>
                </footer>
            </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mini-CRM\resources\views/admin/company/edit.blade.php ENDPATH**/ ?>