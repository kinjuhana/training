<div id="slider" class="swiper-container">
    <div class="swiper-wrapper">
        <?php $__currentLoopData = collect(getMovies('now_playing')->results)->take(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item swiper-slide lazyload"
                style="background-image: url(<?php echo e(img_backdrop($item->backdrop_path, 'original')); ?>)">
                <div class="container">
                    <div class="info">
                        <h3 class="title"><?php echo e($item->title); ?></h3>
                        <div class="meta">
                            <span class="quality">HD</span>
                            <span class="imdb">
                                <i class="fa fa-star"></i>
                                <?php echo e($item->vote_average); ?></span>
                            <span><?php echo e(to_year($item->release_date ?? '')); ?></span>
                        </div>
                        <div class="desc"><?php echo e($item->overview); ?></div>
                        <div class="actions">
                            <a class="watchnow" href="<?php echo e(route('movie.single',['id' => $item->id, 'slug' => Str::slug($item->original_title)])); ?>">
                                <i class="fa fa-play"></i>
                                <?php echo e(__('utilities.watch_now')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="paging swiper-pagination"></div>
</div>
<?php /**PATH /www/wwwroot/cineinc.biz/engine/resources/views/components/big-slider.blade.php ENDPATH**/ ?>