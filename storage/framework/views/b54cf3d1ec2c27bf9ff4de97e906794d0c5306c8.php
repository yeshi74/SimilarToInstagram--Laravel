<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fblr2-1.fna.fbcdn.net/vp/15714d1e1144da71dd55415fbf4a39c3/5D7FAE1C/t51.2885-19/s150x150/58409811_1038547469671473_8563792470394011648_n.jpg?_nc_ht=instagram.fblr2-1.fna.fbcdn.net" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1><?php echo e($user->username); ?></h1>
        <a href="#">Add New Post</a>
        </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> Posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
        <div class="pt-4 font-weight-bold"><?php echo e($user->profile->title); ?></div>
        <div><?php echo e($user->profile->description); ?></div>
        <div><a href="#"><?php echo e($user->profile->url); ?></a></div>
        </div>
    </div>

    <div class="row pt-4">
    <div class="col-4">
        <img src="https://instagram.fblr2-1.fna.fbcdn.net/vp/35be1699c70c5263f7b8650459fcc518/5D9E5693/t51.2885-15/sh0.08/e35/c3.0.744.744/s640x640/61895701_468968617186490_3920851586775761705_n.jpg?_nc_ht=instagram.fblr2-1.fna.fbcdn.net" class="w-100">
</div>
<div class="col-4">
        <img src="https://instagram.fblr2-1.fna.fbcdn.net/vp/47cb04c97392416765d8dd92e032f3f3/5D9C4049/t51.2885-15/sh0.08/e35/c0.78.883.883a/s640x640/60721114_308501250092136_1832984087716609793_n.jpg?_nc_ht=instagram.fblr2-1.fna.fbcdn.net" class="w-100">
</div>
<div class="col-4">
        <img src="https://instagram.fblr2-1.fna.fbcdn.net/vp/1d985e4ba33c63955a020558d6d28a0b/5D7F3E0C/t51.2885-15/sh0.08/e35/c6.0.736.736/s640x640/61803144_1347893638700212_5812654661089840425_n.jpg?_nc_ht=instagram.fblr2-1.fna.fbcdn.net" class="w-100">
</div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Project\freeCodeGram\resources\views/home.blade.php ENDPATH**/ ?>