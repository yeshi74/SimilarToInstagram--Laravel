<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        <?php echo csrf_field(); ?>

            <div class="row">
                    <div class="col-8 offset-2">

                        <div class="row">
                            <h1>Add New Post</h1>
                        </div>

                            <div class="form-group row">
                                    <label for="caption" class="col-md-4 col-form-label">
                                        Post Caption
                                    </label>

                                        <input id="caption"
                                        type="text"
                                        class="form-control <?php if ($errors->has('caption')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('caption'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                        name="caption"
                                        value="<?php echo e(old('caption')); ?>"
                                        autocomplete="caption" autofocus>

                                        <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>

                                    <div class="row">
                                        <label for="image" class="col-md-4 col-form-label">Post Image</label>

                                        <input type="file" class="form-control-file" id="image" name="image">

                                        <?php if($errors->has('image')): ?>
                                                <strong><?php echo e($errors->first('image')); ?></strong>
                                        <?php endif; ?>

                                    </div>

                                    <div class="row pt-4">
                                        <button class="btn btn-primary">Add New Post</button>
                                    </div>

                    </div>
                </div>
    </form>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Project\freeCodeGram\resources\views/posts/create.blade.php ENDPATH**/ ?>