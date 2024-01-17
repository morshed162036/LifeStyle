
<div class="off_canvars_overlay"></div>

   <div class="Offcanvas_menu">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="canvas_open">
                       <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                   </div>
                   <div class="Offcanvas_menu_wrapper">
                       <div class="canvas_close">
                           <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                       </div>
                       
                       
                       <div class="search_container">
                           <form action="#">
                               
                               <div class="search_box">
                                   <input placeholder="Search product..." type="text">
                                   <button type="submit">Search</button>
                               </div>
                           </form>
                       </div>
                       <div id="menu" class="text-start ">
                           <ul class="offcanvas_main_menu">
                               <li class="menu-item-has-children active"> <a href="<?php echo e(route('client.home')); ?>">Home</a>
                                   
                               </li>
                               <li class="menu-item-has-children active"> <a href="<?php echo e(route('client.shop')); ?>">Shop</a>
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
                                                              <li>
                                                                  <a href="<?php echo e(url('shop/category/'.$subcategory->id)); ?>"><?php echo e($subcategory->name); ?></a>
                                                              </li>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                      </ul>
                                                  <?php endif; ?>
                                              </li>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </ul>
                                  <?php endif; ?>
                              </li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                

                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!--Offcanvas menu area end-->

   
   <!--header area start-->
   <header>
       <div class="main_header">
           <div class="container">
               <!--header top start-->
               <div class="header_top">
                   <div class="row align-items-center">
                       <div class="col-lg-4 col-md-5">
                           <div class="antomi_message">
                               <p>Step into  the festival season with Easy E-commerce</p>
                           </div>
                       </div>
                       <div class="col-lg-8 col-md-7">
                           <div class="header_top_settings text-end">
                               <ul>
                                   <li> <?php if(Auth::check()): ?>
                                    <a class="login visible-xs" href="<?php echo e(route('client.account')); ?>">
                                        My Account
                                    </a>
                                <?php else: ?>
                                    <a class="login visible-xs" href="<?php echo e(route('login.website')); ?>">
                                        Sign In
                                    </a>
                                <?php endif; ?></li>
                                   
                                   <li>Hotline: <a href="tel:+0123456789">0123456789 </a></li>
                                   <li>Quality Guarantee Of Products</li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <!--header top start-->

               <!--header middel start-->
               <div class="header_middle sticky-header">
                   <div class="row align-items-center">
                       <div class="col-lg-2 col-md-3 col-4">
                           <div class="logo">
                               <a href="<?php echo e(route('client.home')); ?>"><img src="<?php if($company->logo): ?>
                                <?php echo e(asset('images/company/'.$company->logo)); ?>

                            <?php endif; ?>" width="206" height="20" alt=""></a>
                           </div>
                       </div>
                       <div class="col-lg-7 col-md-12">
                           <div class="main_menu menu_position text-center">
                               <nav>
                                   <ul>
                                       <li><a href="<?php echo e(route('client.home')); ?>">home</a>
                                           
                                       </li>
                                       
                                       <li class="mega_items"><a href="<?php echo e(route('client.shop')); ?>">Product</a>
                                            
                                       </li>
                                        <?php if(App\Models\Catalogue::get()): ?>
                                                <?php $__currentLoopData = App\Models\Catalogue::get()->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="mega_items"><a href="<?php echo e(url('shop/catalogue/'.$catalogue->id)); ?>"><?php echo e($catalogue->name); ?></a>
                                                        <?php if($catalogue->category): ?>
                                                            <div class="mega_menu">
                                                                <ul class="mega_menu_inner">
                                                                    <?php $__currentLoopData = $catalogue->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li><a href="<?php echo e(url('shop/category/'.$category->id)); ?>"><?php echo e(ucwords($category->name)); ?></a>
                                                                            <?php if($category->subcategories): ?>
                                                                                <ul>
                                                                                    <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <li>
                                                                                            <a href="<?php echo e(url('shop/category/'.$subcategory->id)); ?>"><?php echo e($subcategory->name); ?></a>
                                                                                        </li>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                </ul>
                                                                            <?php endif; ?>
                                                                        </li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>
                                                            </div>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                   </ul>
                               </nav>
                           </div>
                       </div>
                       <div class="col-lg-3 col-md-7 col-6">
                           <div class="header_configure_area">
                               <div class="header_wishlist">
                                   <a href="<?php echo e(url('/wishlist')); ?>" id="">
                                    
                                    <span class="icon"><i class="fa fa-heart" aria-hidden="true"></i></span>
                                    <span class="first" data-translate="cart.general.shopping_cart"></span>
                                       <span class="cart-count wishlist_count" id="cartCount">0</span>
                                       
                                   </a>
                               </div>
                               <div class="mini_cart_wrapper">
                                   <a href="javascript:void(0)" id="cartToggle">
                                       
                                       <span class="icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                       <span class="first" data-translate="cart.general.shopping_cart"></span>
                                       
                                       <span class="cart_count" id="cartCount">0</span>

                                   </a>
                               </div>
                                    <div id="dropdown-cart" style="display:none" class="shadow">
                                    <div class="no-items" id="noItems" style="text-align: center !important;">
                                        <p>Your cart is currently empty.</p>
                                        <p class="text-continue">
                                            <a href="<?php echo e(route('client.shop')); ?>">Continue Shopping</a>
                                        </p>
                                    </div>
                                    <div class="has-items">
                                        <ol class="mini-products-list">

                                        </ol>

                                        <div class="summary">
                                            <p class="total">
                                                <span class="label"><span data-translate="cart.label.total">Total</span>:</span>
                                                <span class="price cart-total-price">৳ 0</span>
                                            </p>
                                        </div>
                                        <div class="actions">
                                            <a class="btn" href="<?php echo e(route('client.checkout')); ?>"
                                            data-translate="cart.general.checkout">Checkout Now
                                            </a>
                                        </div>
                                        <p class="text-cart"><a href="<?php echo e(route('cart.index')); ?>"
                                                                data-translate="cart.general.view_cart">Or
                                                View Cart</a>
                                        </p>
                                    </div>
                                </div>
                           </div>
                       </div>
                   </div>
               </div>
               <!--header middel end-->


                <!--mini cart-->
               
               <!--mini cart end-->

               <!--header bottom satrt-->
               <div class="header_bottom">
                   <div class="row align-items-center">
                       <div class="column1 col-lg-4 col-md-6"  style="margin-right: 70px">
                           <div class="categories_menu categories_three">
                               <div class="categories_title">
                                   <h2 class="categori_toggle">ALL CATEGORIES</h2>
                               </div>
                               <?php if(App\Models\Catalogue::get()): ?>
                                 <div class="categories_menu_toggle">
                                   <ul>
                                        <?php $__currentLoopData = App\Models\Catalogue::with('category')->get()->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <li class="menu_item_children"><a href="<?php echo e(url('shop/catalogue/'.$catalogue->id)); ?>"><?php echo e($catalogue->name); ?> <i class="fa fa-angle-right"></i></a>
                                            <?php if($catalogue->category): ?>
                                                <ul class="categories_mega_menu">
                                                    <?php $__currentLoopData = $catalogue->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="menu_item_children"><a class="text-primary" href="<?php echo e(url('shop/category/'.$category->id)); ?>"><?php echo e($category->name); ?></a>
                                                            <?php if(count($category->subcategories) > 0): ?>
                                                                <ul>
                                                                    <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li>
                                                                            <a href="<?php echo e(url('shop/category/'.$subcategory->id)); ?>"><?php echo e($subcategory->name); ?></a>
                                                                        </li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </ul>
                               </div>
                               <?php endif; ?>

                           </div>
                       </div>
                       <div class="column2 col-lg-8">
                           <div class="search_container">
                               <form action="#">
                                   <div class="hover_category" style="border-left: 2px solid #ebebeb">
                                       
                                   </div>
                                   <div class="search_box" >
                                       <input placeholder="Search product..." type="text">
                                       <button type="submit">Search</button>
                                   </div>
                               </form>
                           </div>

                       </div>
                       
                   </div>
               </div>
               <!--header bottom end-->
           </div>
       </div>
   </header>
   
<?php /**PATH E:\Zariq\Zariq Ltd\Project\EasyEcommerce\lifestyle\resources\views/client/layouts/menu.blade.php ENDPATH**/ ?>