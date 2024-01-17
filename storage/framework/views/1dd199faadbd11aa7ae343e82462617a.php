<?php $__env->startSection('content'); ?>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="<?php echo e(route('client.home')); ?>">home</a></li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

        <div class="shop_area shop_reverse" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_list widget_categories">
                            <h3>Product categories</h3>























                            <div id="menu" class="text-start ">
                                <ul class="offcanvas_main_menu">
                                    <li class="menu-item-has-children">
                                        <a href="<?php echo e(url('shop/new_arrival/new_arrival')); ?>">New arrival</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="<?php echo e(url('shop/winter/winter')); ?>">Winter</a>
                                    </li>

                                    <?php $__currentLoopData = App\Models\Catalogue::with('category')->get()->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0)"><?php echo e($catalogue->name); ?></a>
                                            <?php if($catalogue->category): ?>
                                                <ul class="sub-menu">
                                                    <?php $__currentLoopData = $catalogue->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="menu-item-has-children">
                                                            <a href="<?php echo e(url('shop/category/'.$category->id)); ?>"><?php echo e($category->name); ?></a>
                                                            <?php if(count($category->subcategories) > 0): ?>
                                                                <ul class="sub-menu">
                                                                    <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li><a href="<?php echo e(url('shop/category/'.$subcategory->id)); ?>"><?php echo e($subcategory->name); ?></a></li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <li class="menu-item-has-children">
                                        <a href="#"> Gift Voucher</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
               <div class="col-lg-9 col-md-12">

                    <!--shop toolbar start-->
                   <?php if(count($products) > 0): ?>
                        <div class="shop_toolbar_wrapper">
                            <div class="shop_toolbar_btn">
                                <button data-role="grid_4" type="button" class=" active btn-grid-4" data-toggle="tooltip" title="4"></button>
                                <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip" title="List"></button>
                            </div>
    
    
    
    
    
    
    
    
    
    
    
    
                            <!-- <div class="page_amount">
                                <p>Showing 1–9 of 21 results</p>
                            </div> -->
                        </div>
                   <?php endif; ?>
                    <!--shop toolbar end-->

                    <!--shop wrapper start-->
                    <div class="row no-gutters shop_wrapper">
                        <?php if(count($products) > 0): ?>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-3 col-md-4 col-6 ">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="<?php echo e(route('client.product_details',$product->id)); ?>"><img src="<?php echo e(asset('images/product_image/'.$product->image)); ?>" alt=""></a>
                                                
                                                <div class="label_product">
                                                    <span class="label_wishlist"><a class="btn-wishlist"
                                                                                    href="javascript:void(0)"
                                                                                    data-tippy-placement="top"
                                                                                    data-tippy-arrow="true" data-tippy-inertia="true"

                                                                                    cus-product-id="<?php echo e($product->id); ?>"
                                                                                    cus-product-name="<?php echo e(ucwords($product->title)); ?>"
                                                                                    cus-product-slug="<?php echo e(route('client.product_details',$product->id)); ?>"
                                                                                    cus-price="<?php echo e($product->mrp); ?>"
                                                                                    cus-photo="<?php echo e(asset('images/product_image/'.$product->image)); ?>"
                                                                                    cus-stock="<?php echo e($product->has_stock); ?>"
                                                                                    cus-date="<?php echo e(date('d M Y')); ?>"
                                                                                    cus-time="<?php echo e(date('h:i a')); ?>"
                                                        >
                                                        <i class="ion-android-favorite-outline"></i></a></span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>

                                                        <li class="compare"><a href="<?php echo e(route('client.product_details',$product->id)); ?>" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Cart"><i class="fa fa-shopping-cart"
                                                                aria-hidden="true"></i></a></li>
                                                        <li class="quick_button">
                                                            <a class="quickViewDetailsByPId" href="javascript:void(0)" data-tippy-placement="top"
                                                               data-tippy-arrow="true"
                                                               data-tippy-inertia="true"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#modal_box"
                                                               data-tippy="Quick View"
                                                               quick-product="<?php echo e($product->id); ?>"
                                                               quick-url="<?php echo e(route('quickViewDetails')); ?>"
                                                               quick-asset="<?php echo e(asset('')); ?>"
                                                            > <i class="ion-ios-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="product_content grid_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="<?php echo e(route('client.product_details',$product->id)); ?>"><?php echo e($product->title); ?></a></h4>

                                                    <div class="price_box">
                                                        
                                                        <span class="current_price">Tk <?php echo e(number_format($product->mrp,2)); ?></span>
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="product_content list_content">
                                                <h4 class="product_name"><a href="<?php echo e(route('client.product_details',$product->id)); ?>"><?php echo e($product->title); ?></a></h4>

                                                <div class="price_box">
                                                    
                                                    <span class="current_price">Tk <?php echo e(number_format($product->mrp,2)); ?></span>
                                                </div>
                                                <div class="product_desc">
                                                    <?php echo $product->details_description; ?>

                                                </div>



                                                <div class="action_links">
                                                    <ul>

                                                        <li class="compare"><a href="<?php echo e(route('client.product_details',$product->id)); ?>" title="Add to Compare"><i class="fa fa-shopping-cart" aria-hidden="true"></i> cart</a></li>
                                                        <li class="quick_button">
                                                            <a class="quickViewDetailsByPId" href="javascript:void(0)" data-tippy-placement="top"
                                                               data-tippy-arrow="true"
                                                               data-tippy-inertia="true"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#modal_box"
                                                               data-tippy="Quick View"
                                                               quick-product="<?php echo e($product->id); ?>"
                                                               quick-url="<?php echo e(route('quickViewDetails')); ?>"
                                                               quick-asset="<?php echo e(asset('')); ?>"
                                                            > <i class="ion-ios-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <h3 style="padding-top: 15px;">No Product Found</h3>
                        <?php endif; ?>

                    </div>
                   <?php if(count($products) > 0): ?>
                        <div class="shop_toolbar t_bottom">
                            <div class="pagination">
                                <?php echo e($products->links()); ?>

                            </div>
                        </div>
                   <?php endif; ?>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->

<?php $__env->stopSection(); ?>




<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Zariq\Zariq Ltd\Project\EasyEcommerce\lifestyle\resources\views/client/shop.blade.php ENDPATH**/ ?>