<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">


    
    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title> Easy Ecommerce</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="<?php if($company->favicon): ?>
    <?php echo e(asset('images/company/'.$company->favicon)); ?>

<?php endif; ?>" alt="">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <?php echo $__env->yieldContent('css'); ?>

</head>
<!-- END: Head-->
<?php /**PATH E:\Zariq\Zariq Ltd\Project\EasyEcommerce\lifestyle\resources\views/server/layout/header.blade.php ENDPATH**/ ?>