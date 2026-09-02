<header class="home">
    <div class="container">
        <div id="menu-toggler">
            <i class="fa fa-list-ul"></i>
        </div>
        <a href="<?php echo e(route('home')); ?>" id="logo" style="background-image: url(<?php echo e(asset('logo.png')); ?>)">
            <h2>Watch Movies Online Free</h2>
        </a>
        <ul id="menu">
            <li>
                <a><?php echo e(__('menu.genres')); ?></a>
                <ul class="genre">
                    <?php $__currentLoopData = getGenreLists('movie'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a title="<?php echo e($item->name); ?>" href="<?php echo e(route('genre', ['id' => $item->id, 'slug' => Str::slug($item->name)])); ?>"><?php echo e($item->name); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
            <li>
                <a title="<?php echo e(__('menu.movies')); ?>"><?php echo e(__('menu.movies')); ?></a>
                <ul class="movie">
                    <li><a href="<?php echo e(route('movie.popular')); ?>" title="<?php echo e(__('menu.popular')); ?>"><?php echo e(__('menu.popular')); ?></a></li>
                    <li><a href="<?php echo e(route('movie.now.playing')); ?>" title="<?php echo e(__('menu.now_playing')); ?>"><?php echo e(__('menu.now_playing')); ?></a></li>
                    <li><a href="<?php echo e(route('movie.top.rated')); ?>" title="<?php echo e(__('menu.top_rated')); ?>"><?php echo e(__('menu.top_rated')); ?></a></li>
                    <li><a href="<?php echo e(route('movie.upcoming')); ?>" title="<?php echo e(__('menu.upcoming')); ?>"><?php echo e(__('menu.upcoming')); ?></a></li>
                </ul>
            </li>
            <li>
                <a title="<?php echo e(__('menu.tv_shows')); ?>"><?php echo e(__('menu.tv_shows')); ?></a>
                <ul class="movie">
                    <li><a href="<?php echo e(route('tv.popular')); ?>" title="<?php echo e(__('menu.popular')); ?>"><?php echo e(__('menu.popular')); ?></a></li>
                    <li><a href="<?php echo e(route('tv.top.rated')); ?>" title="<?php echo e(__('menu.top_rated')); ?>"><?php echo e(__('menu.top_rated')); ?></a></li>
                    <li><a href="<?php echo e(route('tv.on.the.air')); ?>" title="<?php echo e(__('menu.on_tv')); ?>"><?php echo e(__('menu.on_tv')); ?></a></li>
                    <li><a href="<?php echo e(route('tv.airing.to.day')); ?>" title="<?php echo e(__('menu.airing_today')); ?>"><?php echo e(__('menu.airing_today')); ?></a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo e(route('people.popular')); ?>"><?php echo e(__('menu.popular_people')); ?></a>
            </li>
            <li>
                <a><span><i class="fa fa-globe"></i></span></a>
                <ul class="country">
                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a rel="alternate" hreflang="<?php echo e($localeCode); ?>" title="<?php echo e($properties['native']); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>"><?php echo e($properties['native']); ?></a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
        </ul>
        <div id="user">
            <a class="guest" href="<?php echo e(route('loading')); ?>" style="color: #bbb;">
                <i class="fa fa-user-circle"></i>
                <span><?php echo e(__('utilities.register')); ?></span>
            </a>
        </div>
        <div id="search-toggler">
            <i class="fa fa-search"></i>
        </div>
        <form id="search" autocomplete="off" action="<?php echo e(route('home')); ?>">
            <input
                type="text"
                name="s"
                placeholder="<?php echo e(__('menu.search')); ?>"
                autocomplete="off">
                <button></button>
                <div class="suggestions"></div>
            </form>
        </div>
    </header><?php /**PATH /www/wwwroot/cineinc.biz/engine/resources/views/components/navbar.blade.php ENDPATH**/ ?>