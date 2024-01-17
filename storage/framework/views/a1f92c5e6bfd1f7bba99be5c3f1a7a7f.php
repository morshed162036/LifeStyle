<?php $__env->startSection('content'); ?>
    <!--slider area start-->
    <?php if($sliders): ?>
        <section class="slider_section slider_s_three">
            <div class="slider_area slider3_carousel owl-carousel">
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single_slider d-flex align-items-center"
                         data-bgimg="<?php echo e(asset('images/banner/'.$slider->image)); ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2">
                                    <!-- <div class="slider_content slider_c_three color_white">
                                        <h3>new collection</h3>
                                        <h1>new Arrivals <br> cellphone new model 2022</h1>
                                        <p>discount <span> -30% off</span> this week</p>
                                        <a class="button" href="shop.html">DISCOVER NOW</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>
    <?php endif; ?>

    <!--slider area end-->

    <!-- bkash api ads section -->

    <?php if($ads): ?>
        <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($ad->view_section == 'bellow_slider'): ?>
                <?php if($ad->type == 'short'): ?>
                    <section class="shipping_area mb-0">
                        <div class="container-fluid px-0">
                            <div class="row g-0">
                                <div class="col-md-12 col-12"><a href="#"><img src="<?php echo e(asset('images/ad/'.$ad->image)); ?>"
                                                                               alt=""
                                                                               class="img-fluid"></a></div>
                                
                            </div>
                        </div>
                    </section>
                <?php else: ?>
                    <section class="ad-banner mt-35 mb-35">
                        <div class="container-fluid px-0">
                            <div class="row g-0">
                                <div class="col-12">
                                    <a href="javascript:void(0)" class="next-link-a">
                                        <img src="<?php echo e(asset('images/ad/'.$ad->image)); ?>"
                                             alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <!-- bkash api ads section -->

    <!--home section bg area start-->
    <div class="home_section_bg" style="padding: 60px 0 10px !important;">
        <!--Categories product area start-->

        <!--Categories product area end-->
        <!--product area start-->
        <div class="product_area deals_product">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="section_title s_title_style3">
                                <h2 class="text-uppercase">Trending Categories</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Fashion" role="tabpanel">
                        <div class="product_carousel product_style product_column4 owl-carousel">

                            <?php if($categories): ?>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <article class="trending_product px-2">
                                        <figure>
                                            <div class="trending_thumb">
                                                <a class="primary_img" href="<?php echo e(url('shop/category/'.$category->id)); ?>"><img
                                                        src="<?php echo e(asset('images/category/'.$category->image)); ?>" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="category-description text-uppercase">
                                                    <a class="" href="<?php echo e(url('shop/category/'.$category->id)); ?>"><?php echo e($category->name); ?></a>
                                                </div>
                                        </figure>
                                    </article>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php if($ads): ?>
            <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($ad->view_section == 'bellow_trending_categories'): ?>
                    <?php if($ad->type == 'short'): ?>
                        <section class="shipping_area mb-0">
                            <div class="container-fluid px-0">
                                <div class="row g-0">
                                    <div class="col-md-12 col-12"><a href="#"><img src="<?php echo e(asset('images/ad/'.$ad->image)); ?>"
                                                                                   alt=""
                                                                                   class="img-fluid"></a></div>
                                    
                                </div>
                            </div>
                        </section>
                    <?php else: ?>
                        <section class="ad-banner mt-35 mb-35">
                            <div class="container-fluid px-0">
                                <div class="row g-0">
                                    <div class="col-12">
                                        <a href="javascript:void(0)" class="next-link-a">
                                            <img src="<?php echo e(asset('images/ad/'.$ad->image)); ?>"
                                                 alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </div>

    <!--product area end-->


    <!--product area start-->
    <div class="product_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title s_title_style3">
                            <h2 class="text-uppercase">New Arrivals</h2>
                        </div>
                        <div class="product_tab_btn d-flex">
                            <ul class="nav mx-3" role="tablist" id="nav-tab3">
                                <li>
                                    <a class="active text-uppercase" data-toggle="tab" href="#men" role="tab"
                                       aria-controls="Men"
                                       aria-selected="true">
                                        Men
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#women" role="tab" aria-controls="Women"
                                       class="text-uppercase"
                                       aria-selected="false">
                                        women
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#kids" role="tab" aria-controls="Kids"
                                       class="text-uppercase"
                                       aria-selected="false">
                                        kids
                                    </a>
                                </li>

                            </ul>
                            <ul style="padding-left: 0px !important; margin-bottom: 0px !important;"><li><a href="<?php echo e(url('shop/new_arrival/new_arrival')); ?>" class="text-uppercase">
                                        See More
                                    </a></li></ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="men" role="tabpanel">
                    <div class="product_carousel product_style product_column4 owl-carousel">
                        <?php if($new_arrivals_men): ?>
                            <?php $__currentLoopData = $new_arrivals_men; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img"
                                               href="<?php echo e(route('client.product_details',$product->id)); ?>"><img
                                                    src="<?php echo e(asset('images/product_image/'.$product->image)); ?>" alt=""></a>
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




                                                    <li class="compare"><a
                                                            href="<?php echo e(route('client.product_details',$product->id)); ?>"
                                                            data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-tippy="Add to cart"><i class="fa fa-shopping-cart"
                                                                                        aria-hidden="true"></i></a></li>
                                                    <li class="quick_button">
                                                        <a class="quickViewDetailsByPId" href="javascript:void(0)"
                                                           data-tippy-placement="top"
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
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a
                                                        href="<?php echo e(route('client.product_details',$product->id)); ?>"><?php echo e(ucwords($product->title)); ?></a>
                                                </h4>
                                                <div class="price_box">
                                                    
                                                    <span
                                                        class="current_price">Tk <?php echo e(number_format($product->mrp,2)); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="women" role="tabpanel">
                    <div class="product_carousel product_style product_column4 owl-carousel">
                        <?php if($new_arrivals_women): ?>
                            <?php $__currentLoopData = $new_arrivals_women; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img"
                                               href="<?php echo e(route('client.product_details',$product->id)); ?>"><img
                                                    src="<?php echo e(asset('images/product_image/'.$product->image)); ?>" alt=""></a>
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
                                                    
                                                    
                                                    
                                                    
                                                    <li class="compare"><a
                                                            href="<?php echo e(route('client.product_details',$product->id)); ?>"
                                                            data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-tippy="Add to cart"><i class="fa fa-shopping-cart"
                                                                                        aria-hidden="true"></i></a></li>
                                                    <li class="quick_button">
                                                        <a class="quickViewDetailsByPId" href="javascript:void(0)"
                                                           data-tippy-placement="top"
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
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a
                                                        href="<?php echo e(route('client.product_details',$product->id)); ?>"><?php echo e(ucwords($product->title)); ?></a>
                                                </h4>
                                                <div class="price_box">
                                                    
                                                    <span
                                                        class="current_price">Tk <?php echo e(number_format($product->mrp,2)); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="tab-pane fade" id="kids" role="tabpanel">
                    <div class="product_carousel product_style product_column4 owl-carousel">
                        <?php if($new_arrivals_kids): ?>
                            <?php $__currentLoopData = $new_arrivals_kids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img"
                                               href="<?php echo e(route('client.product_details',$product->id)); ?>"><img
                                                    src="<?php echo e(asset('images/product_image/'.$product->image)); ?>" alt=""></a>
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
                                                    
                                                    
                                                    
                                                    
                                                    <li class="compare"><a
                                                            href="<?php echo e(route('client.product_details',$product->id)); ?>"
                                                            data-tippy-placement="top"
                                                            data-tippy-arrow="true" data-tippy-inertia="true"
                                                            data-tippy="Add to cart"><i class="fa fa-shopping-cart"
                                                                                        aria-hidden="true"></i></a></li>
                                                    <li class="quick_button">
                                                        <a class="quickViewDetailsByPId" href="javascript:void(0)"
                                                           data-tippy-placement="top"
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
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a
                                                        href="<?php echo e(route('client.product_details',$product->id)); ?>"><?php echo e(ucwords($product->title)); ?></a>
                                                </h4>
                                                <div class="price_box">
                                                    
                                                    <span
                                                        class="current_price">Tk <?php echo e(number_format($product->mrp,2)); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>

            
            
            
            
            
            

        </div>
    </div>
    <!--product area end-->

    <!-- metro ads start -->
    <?php if($ads): ?>
        <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($ad->view_section == 'bellow_new_arrivals'): ?>
                <?php if($ad->type == 'short'): ?>
                    <section class="shipping_area mb-0">
                        <div class="container-fluid px-0">
                            <div class="row g-0">
                                <div class="col-md-12 col-12"><a href="#"><img src="<?php echo e(asset('images/ad/'.$ad->image)); ?>"
                                                                               alt=""
                                                                               class="img-fluid"></a></div>
                                
                            </div>
                        </div>
                    </section>
                <?php else: ?>
                    <section class="ad-banner mt-35 mb-35">
                        <div class="container-fluid px-0">
                            <div class="row g-0">
                                <div class="col-12">
                                    <a href="javascript:void(0)" class="next-link-a">
                                        <img src="<?php echo e(asset('images/ad/'.$ad->image)); ?>"
                                             alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <!-- metro ads end -->

    <!--feature product area start-->
    <div class="product_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title s_title_style3">
                            <h2 class="text-uppercase">Featured Products</h2>
                        </div>
                        <div class="product_tab_btn d-flex">
                            <a href="<?php echo e(url('shop/Feature_Products/Feature_Products')); ?>" class="text-uppercase">
                                See More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="Computer3" role="tabpanel">
                <div class="product_carousel product_style product_column4 owl-carousel">
                    <?php if($featureProducts): ?>
                        <?php $__currentLoopData = $featureProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img"
                                           href="<?php echo e(route('client.product_details',$product->id)); ?>"><img
                                                src="<?php echo e(asset('images/product_image/'.$product->image)); ?>" alt=""></a>
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
                                                
                                                
                                                
                                                
                                                <li class="compare"><a
                                                        href="<?php echo e(route('client.product_details',$product->id)); ?>"
                                                        data-tippy-placement="top"
                                                        data-tippy-arrow="true" data-tippy-inertia="true"
                                                        data-tippy="Add to Cart"><i class="fa fa-shopping-cart"
                                                                                    aria-hidden="true"></i></a></li>
                                                <li class="quick_button">
                                                    <a class="quickViewDetailsByPId" href="javascript:void(0)"
                                                       data-tippy-placement="top"
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
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a
                                                    href="<?php echo e(route('client.product_details',$product->id)); ?>"><?php echo e($product->title); ?></a>
                                            </h4>
                                            <div class="price_box">
                                                <span
                                                    class="current_price">Tk <?php echo e(number_format($product->mrp,2)); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php if($ads): ?>
        <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($ad->view_section == 'bellow_featured_products'): ?>
                <?php if($ad->type == 'short'): ?>
                    <section class="shipping_area mb-0">
                        <div class="container-fluid px-0">
                            <div class="row g-0">
                                <div class="col-md-12 col-12"><a href="#"><img src="<?php echo e(asset('images/ad/'.$ad->image)); ?>"
                                                                               alt=""
                                                                               class="img-fluid"></a></div>
                                
                            </div>
                        </div>
                    </section>
                <?php else: ?>
                    <section class="ad-banner mt-35 mb-35">
                        <div class="container-fluid px-0">
                            <div class="row g-0">
                                <div class="col-12">
                                    <a href="javascript:void(0)" class="next-link-a">
                                        <img src="<?php echo e(asset('images/ad/'.$ad->image)); ?>"
                                             alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <!-- feature product area end-->

    <!-- four ads image -->
    <section class="ad-banner mt-35 mb-60">
        <div class="container">
            <div class="row">
                <div class="product_carousel product_style product_column4 owl-carousel">
                    <?php if($product_types): ?>
                        <?php $__currentLoopData = $product_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img"
                                           href="<?php echo e(url('shop/product_type',$product_type->id)); ?>"><img
                                                src="<?php echo e(asset('images/product_type/'.$product_type->image)); ?>"
                                                alt=""></a>
                                    </div>
                                </figure>
                            </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php if($ads): ?>
        <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($ad->view_section == 'bellow_product_type'): ?>
                <?php if($ad->type == 'short'): ?>
                    <section class="shipping_area mb-0">
                        <div class="container-fluid px-0">
                            <div class="row g-0">
                                <div class="col-md-12 col-12"><a href="#"><img src="<?php echo e(asset('images/ad/'.$ad->image)); ?>"
                                                                               alt=""
                                                                               class="img-fluid"></a></div>
                                
                            </div>
                        </div>
                    </section>
                <?php else: ?>
                    <section class="ad-banner mt-35 mb-35">
                        <div class="container-fluid px-0">
                            <div class="row g-0">
                                <div class="col-12">
                                    <a href="javascript:void(0)" class="next-link-a">
                                        <img src="<?php echo e(asset('images/ad/'.$ad->image)); ?>"
                                             alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <!-- four ads image -->

    </div>
    <!--home section bg area end-->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <Script>
        function addProductToWishlist(id, name, quantity, price) {
            $.ajax({
                type: 'POST',
                url: "<?php echo e(route('wishlist.store')); ?>",
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    id: id,
                    name: name,
                    quantity: quantity,
                    price: price
                },
                success: function (data) {
                    if (data.status == 200) {
                        getCartWishlistCount();
                        // $.notify({
                        //     icon:"fa fa-check",
                        //     title:"Success!",
                        //     message:"Item successfully addes to your wishlist!"
                        // })
                    }
                }
            })
        }

        function addToCart(id, quantity) {
            $.ajax({
                type: 'POST',
                url: "<?php echo e(route('cart.store')); ?>",
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    id: id,
                    quantity: quantity,
                },
                success: function (data) {
                    if (data.status == 200) {
                        getCartWishlistCount();
                        // $.notify({
                        //     icon:"fa fa-check",
                        //     title:"Success!",
                        //     message:"Item successfully addes to your wishlist!"
                        // })
                    }
                }
            })
        }

        function getCartWishlistCount() {
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('cart.wishlist.count')); ?>",
                success: function (data) {
                    if (data.status == 200) {
                        $("#cart_count").html(data.cartCount);
                        $("#wishlist_count").html(data.wishlistCount);
                    }
                }
            })
        }

    </Script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Zariq\ecom.zariq.com.bd\resources\views/client/index.blade.php ENDPATH**/ ?>