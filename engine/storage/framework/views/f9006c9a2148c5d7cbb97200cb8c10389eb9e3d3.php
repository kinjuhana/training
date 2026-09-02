<div class="item">
    <div class="icons">
        <div class="quality">HD</div>
    </div>
    <a href="<?php echo e(route('tv.single',['id' => $item->id, 'slug' => Str::slug($item->original_name)])); ?>" title="<?php echo e($item->name); ?>" class="poster">
        <img src="<?php echo e(img_poster($item->poster_path)); ?>">
    </a>
    <h3>
        <a class="title" title="<?php echo e($item->name); ?>" href="<?php echo e(route('tv.single',['id' => $item->id, 'slug' => Str::slug($item->original_name)])); ?>"><?php echo e($item->name); ?></a>
    </h3>
    <div class="meta">
        <?php echo e(to_year($item->first_air_date ?? '')); ?>

        <i class="type">Tv</i>
    </div>
</div><?php /**PATH /home/inachan/public_html/4kwatchvid.fun/engine/resources/views/components/item-tv.blade.php ENDPATH**/ ?>