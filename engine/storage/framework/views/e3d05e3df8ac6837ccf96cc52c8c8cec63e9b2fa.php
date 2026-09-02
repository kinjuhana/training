<div class="item">
    <div class="icons">
        <div class="quality">HD</div>
    </div>
    <a href="<?php echo e(route('movie.single',['id' => $item->id, 'slug' => Str::slug($item->original_title)])); ?>" title="<?php echo e($item->title); ?>" class="poster">
        <img src="<?php echo e(img_poster($item->poster_path)); ?>">
    </a>
    <h3>
        <a class="title" title="<?php echo e($item->title); ?>" href="<?php echo e(route('movie.single',['id' => $item->id, 'slug' => Str::slug($item->original_title)])); ?>"><?php echo e($item->title); ?></a>
    </h3>
    <div class="meta">
        <?php echo e(to_year($item->release_date ?? '')); ?>

        <i class="type">Movie</i>
    </div>
</div><?php /**PATH /home/inachan/public_html/4kwatchvid.fun/engine/resources/views/components/item-movie.blade.php ENDPATH**/ ?>