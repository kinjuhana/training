

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('components.big-slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <section class="bl">
            <div class="heading">
                <h2><?php echo e(__('menu.movies')); ?></h2>
                <div class="tabs">
                    <span class="active">
                        <i class="fa fa-play-circle"></i>
                        <?php echo e(__('section.title.popular')); ?></span>
                    <span><a href="<?php echo e(route('movie.now.playing')); ?>"><?php echo e(__('menu.now_playing')); ?></a></span>
                    <span><a href="<?php echo e(route('movie.top.rated')); ?>"><?php echo e(__('menu.top_rated')); ?></a></span>
                    <span><a href="<?php echo e(route('movie.upcoming')); ?>"><?php echo e(__('menu.upcoming')); ?></a></span>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="content tab-content" data-name="movies">
                <div class="filmlist">
                    <?php $__currentLoopData = collect(getMovies('popular')->results)->take(16); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('components.item-movie', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>

        <section class="bl">
            <div class="heading">
                <h2><?php echo e(__('menu.tv_shows')); ?></h2>
                <div class="tabs">
                    <span class="active">
                        <i class="fa fa-play-circle"></i>
                        Movies</span>
                    <span><a href="<?php echo e(route('tv.top.rated')); ?>"><?php echo e(__('menu.top_rated')); ?></a></span>
                    <span><a href="<?php echo e(route('tv.on.the.air')); ?>"><?php echo e(__('menu.on_tv')); ?></a></span>
                    <span><a href="<?php echo e(route('tv.airing.to.day')); ?>"><?php echo e(__('menu.airing_today')); ?></a></span>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="content tab-content" data-name="movies">
                <div class="filmlist">
                    <?php $__currentLoopData = collect(getTvShows('popular')->results)->take(16); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('components.item-tv', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<script>
    new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 5000,
        },
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /www/wwwroot/cineinc.biz/engine/resources/views/home.blade.php ENDPATH**/ ?>