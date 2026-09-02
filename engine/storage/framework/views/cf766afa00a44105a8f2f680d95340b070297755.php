

<?php $__env->startSection('content'); ?>
    <div style="height: 6em"></div>
    <div class="container mt-5">
        <div class="watch-extra">
            <section class="info">
                <div class="poster">
                    <span><img itemprop="image" src="<?php echo e(img_poster($data->profile_path)); ?>" alt="<?php echo e($data->name); ?>"></span>
                </div>
                <div class="info">
                    <h1 itemprop="name" class="title"><?php echo e($data->name); ?></h1>
                    <div itemprop="description" class="desc shorting"><?php echo e($data->biography); ?></div>
                    <div class="meta">
                        <div><span><?php echo e(__('utilities.know_for')); ?>:</span> <span><?php echo e($data->known_for_department); ?></span></div>
                        <div><span><?php echo e(__('utilities.birthday')); ?>:</span> <span><?php echo e($data->birthday); ?></span></div>
                        <div><span><?php echo e(__('utilities.place_of_birth')); ?>:</span> <span><?php echo e($data->place_of_birth); ?></span></div>
                        <div class="casts"><span><?php echo e(__('utilities.also_know_as')); ?>:</span> <span><?php echo e(implode(", ", $data->also_known_as)); ?></span></div>
                    </div>
                </div>
            </section>
        </div>

        <?php if(isset($data->movie_credits->cast)): ?>
        <section class="bl">
            <div class="heading simple"> <h2 class="title"><?php echo e(__('section.title.movie_list_of', ['name' => $data->name])); ?></h2> </div>
            <div class="content">
                <div class="filmlist">
                    <?php $__currentLoopData = $data->movie_credits->cast; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('components.item-movie', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/inachan/public_html/4kwatchvid.fun/engine/resources/views/people.blade.php ENDPATH**/ ?>