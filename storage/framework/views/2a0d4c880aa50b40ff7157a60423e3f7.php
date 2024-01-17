<!--footer area start-->
<footer class="footer_widgets">

    <div class="footer_top">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 col-md-3 col-sm-6 offset-lg-1">
                    <div class="widgets_container widget_menu">
                        <h3>About</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="<?php echo e(route('aboutPage')); ?>">About Us</a></li>
                                <li><a href="<?php echo e(route('deliveryInformationPage')); ?>">Delivery Information</a></li>
                                <li><a href="<?php echo e(route('exchangePolicyPage')); ?>">Exchange Policy</a></li>
                                <li><a href="<?php echo e(route('privacyPolicyPage')); ?>">Privacy Policy</a></li>
                                <li><a href="<?php echo e(route('careerPage')); ?>">Career</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 ">
                    <div class="widgets_container widget_menu">
                        <h3>Info</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="javascript:void(0)">Size Guide</a></li>
                                <li><a href="javascript:void(0)">Store Locator</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 offset-lg-1">
                    <div class="widgets_container widget_menu">
                        <h3>Customer Support</h3>
                        <div class="footer_menu">
                            <ul>
                                <?php if($company->phone): ?>
                                    <li><a href="tel:<?php echo e($company->phone); ?>"><?php echo e($company->phone); ?></a></li>
                                <?php endif; ?>
                                <?php if($company->support_hour): ?>
                                    <li><a href="javascript:void(0)"><?php echo e($company->support_hour); ?></a></li>
                                <?php endif; ?>
                                <?php if($company->email): ?>
                                    <li><a href="mailto:<?php echo e($company->email); ?>"><?php echo e($company->email); ?></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="stayConnected col-lg-2 col-md-3 col-sm-6">
                    <div class="widgets_container" style="float: right">
                        <h3>STAY CONNECTED</h3>
                        <?php
                        $socialArray = ['facebook'=>$company->fb_order,'youtube'=>$company->youtube_order,'instagram'=>$company->insta_order];
                        asort($socialArray);

                        ?>
                        <div class="footer_social">
                            <ul>
                                <?php $__currentLoopData = $socialArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($key == 'facebook'): ?>
                                        <?php if($company->facebook): ?>
                                            <li><a class="facebook" href="<?php echo e($company->facebook); ?>" target="_new"><i class="fa fa-facebook"></i></a></li>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if($key == 'youtube'): ?>
                                        <?php if($company->youtube): ?>
                                            <li><a class="youtube" style="background: red" href="<?php echo e($company->youtube); ?>" target="_new"><i class="fa fa-youtube-play"></i></a></li>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if($key == 'instagram'): ?>
                                        <?php if($company->instagram): ?>
                                            <li><a class="instagram" href="<?php echo e($company->instagram); ?>" target="_new"><i class="fa fa-instagram"></i></a></li>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="copyright_area text-center">
                        <p>&copy; <?php echo e(date('Y')); ?> <a href="<?php echo e(route('client.home')); ?>" class="text-uppercase">Easy Ecommerce</a>.
                            Technical Support <i
                                class="fa fa-heart"></i> by <a target="_blank"
                                                               href="https://www.zariq.com.bd" style="color: rgb(207, 149, 111)">Zariq
                                ltd</a></p>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="footer_payment text-center py-3">
                            <img src="<?php echo e(asset('client')); ?>/assets/img/icon/payment.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!--footer area end-->

<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
<?php if ($__env->exists('client.layouts._quickview')) echo $__env->make('client.layouts._quickview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<div class="modal fade" id="modal_size" tabindex="-1" role="dialog" aria-hidden="true">
    <?php if ($__env->exists('client.layouts._sizeguide')) echo $__env->make('client.layouts._sizeguide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- modal area end-->

<!--newsletter popup start-->

<!--news letter popup start-->


<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="<?php echo e(asset('client')); ?>/assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="<?php echo e(asset('client')); ?>/assets/js/main.js"></script>

<script
    src="<?php echo e(asset('client')); ?>/assets/js/api.jquery-b0af070cfe3f5cf7c92f9e2a5da2665ee07ed2aad63bb408f8d6672f894a5996.js"></script>
<script
    src="<?php echo e(asset('client')); ?>/assets/js/option_selection-86cdd286ddf3be7e25d68b9fc5965d7798a3ff6228ff79af67b3f4e41d6a34be.js"></script>
<script src="<?php echo e(asset('client')); ?>/assets/js/jquery.history.js"></script>
<script src="<?php echo e(asset('client')); ?>/assets/js/furnitica.js"></script>
<script src="<?php echo e(asset('client')); ?>/assets/js/modernizr.custom.js"></script>
<script src="<?php echo e(asset('client')); ?>/assets/js/classie.js"></script>
<script src="<?php echo e(asset('client')); ?>/assets/js/wow.min.js"></script>

<script src="<?php echo e(asset('client')); ?>/assets/js/booster-page-speed-optimizer.js"></script>

<script src="<?php echo e(asset('client')); ?>/assets/js/addToCart.js"></script>
<script src="<?php echo e(asset('client')); ?>/assets/js/addToWishList.js"></script>
<script>


    $("#showLeftPush").click(function () {
        $('#showLeftPush1, #showLeftPush2').addClass('active');
    });

</script>

<script>
    // jQuery to handle quick view functionality

</script>

</body>

</html>
<?php /**PATH E:\Zariq\Zariq Ltd\Project\EasyEcommerce\lifestyle\resources\views/client/layouts/footer.blade.php ENDPATH**/ ?>