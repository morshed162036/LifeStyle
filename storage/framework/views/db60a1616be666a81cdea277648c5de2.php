<?php $__env->startSection('css'); ?>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/vendors/css/vendors.min.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('admin_template/app-assets/vendors/css/tables/datatable/datatables.min.css')); ?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/bootstrap-extended.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/colors.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/components.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/themes/dark-layout.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/themes/semi-dark-layout.css')); ?>">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('admin_template/app-assets/css/core/menu/menu-types/vertical-menu.css')); ?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/assets/css/style.css')); ?>">
    <!-- END: Custom CSS-->
    <style>
        a label {
            cursor: pointer;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <?php if(Session::has('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success: </strong><?php echo e(Session::get('success')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <h5 class="content-header-title float-left pr-1 mb-0">Categories Table</h5>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i
                                        class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Categories
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Category List</h5>
                            
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li class="ml-2"><a href="<?php echo e(route('category.create')); ?>" class="btn btn-primary">+ Create</a></li>
                                    </ul>
                                </div>
                            
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Category</th>
                                                <th>Parent Category</th>
                                                <th>Catalogue</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($categories): ?>
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php if($category['image']): ?>
                                                            <img src="
                                                            <?php echo e(asset('images/category/'.$category['image'])); ?>

                                                       " class="mr-50" alt="" height="25" width="35"><?php endif; ?></td>
                                                        <td class="text-bold-600"><?php echo e($category['name']); ?></td>
                                                        <td>
                                                            <?php if(isset($category['parentcategory']['name']) && !empty($category['parentcategory']['name'])): ?>
                                                                <?php echo e($category['parentcategory']['name']); ?>

                                                            <?php else: ?>
                                                                <?php echo e('Root'); ?>

                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo e($category['catalogue']['name']); ?></td>
                                                        <td>
                                                            <?php if($category['status'] == 'Active'): ?>
                                                                <a class="updateCategoryStatus"
                                                                    id="category-<?php echo e($category['id']); ?>"
                                                                    category_id="<?php echo e($category['id']); ?>"
                                                                    href="javascript:void(0)">
                                                                    <label class="badge badge-success"
                                                                        status="Active">Active</label>
                                                                </a>
                                                            <?php else: ?>
                                                                <a class="updateCategoryStatus"
                                                                    id="category-<?php echo e($category['id']); ?>"
                                                                    category_id="<?php echo e($category['id']); ?>"
                                                                    href="javascript:void(0)">
                                                                    <label class="badge badge-danger"
                                                                        status="Inactive">Inactive</label>
                                                                </a>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <span
                                                                    class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false" role="menu"></span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    
                                                                        <a class="dropdown-item"
                                                                        href="<?php echo e(route('category.edit', $category['id'])); ?>"><i
                                                                            class="bx bx-edit-alt mr-1"></i> edit</a>
                                                                    
                                                                        <form
                                                                        action="<?php echo e(route('category.destroy', $category['id'])); ?>"
                                                                        method="post"> <?php echo csrf_field(); ?> <?php echo method_field('Delete'); ?>
                                                                            <button type="submit" class="dropdown-item"><i class="bx bx-trash mr-1"></i> delete</button>
                                                                        </form>
                                                                    
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <?php echo e('No Data Found'); ?>

                                            <?php endif; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Category</th>
                                                <th>Parent Category</th>
                                                <th>Catalogue</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/vendors.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')); ?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/vfs_fonts.js')); ?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo e(asset('admin_template/app-assets/js/core/app-menu.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/js/core/app.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/js/scripts/components.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_template/app-assets/js/scripts/footer.js')); ?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo e(asset('admin_template/app-assets/js/scripts/datatables/datatable.js')); ?>"></script>
    <!-- END: Page JS-->
    <script>
        $(document).ready(function() {
            $(document).on("click", ".updateCategoryStatus", function() {
                var status = $(this).children("label").attr("status");
                var category_id = $(this).attr("category_id");

                $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    type: "post",
                    url: "<?php echo e(route('updateCategoryStatus')); ?>",
                    data: {
                        status: status,
                        category_id: category_id
                    },
                    success: function(resp) {
                        if (resp["status"] == 'Inactive') {
                            $("#category-" + category_id).html(
                                "<label class='badge badge-danger' status='Inactive'>Inactive</label>"
                            );
                        } else if (resp["status"] == 'Active') {
                            $("#category-" + category_id).html(
                                "<label class='badge badge-success' status='Active'>Active</label>"
                            );
                        }
                    },
                    error: function() {
                        alert("Error");
                    },
                });
            });
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('server.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zariijsr/ecom.zariq.com.bd/resources/views/server/category/index.blade.php ENDPATH**/ ?>