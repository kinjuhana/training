<footer>
    <div class="top">
        <div class="container">
            <div class="about">
                <div>
                    <div class="logo" style="background-image: url(<?php echo e(asset('logo.png')); ?>)"></div>
                    <div class="desc text-center text-md-left">
                        <p><?php echo e(__('section.title.home_2')); ?></p>
                    </div>
                </div>
            </div>
            <div class="links">
                <div class="bl">
                    <div class="heading"><?php echo e(__('menu.movies')); ?></div>
                    <ul>
                        <li><a href="<?php echo e(route('movie.popular')); ?>" title="<?php echo e(__('menu.popular')); ?>"><?php echo e(__('menu.popular')); ?></a></li>
                        <li><a href="<?php echo e(route('movie.now.playing')); ?>" title="<?php echo e(__('menu.now_playing')); ?>"><?php echo e(__('menu.now_playing')); ?></a></li>
                        <li><a href="<?php echo e(route('movie.top.rated')); ?>" title="<?php echo e(__('menu.top_rated')); ?>"><?php echo e(__('menu.top_rated')); ?></a></li>
                        <li><a href="<?php echo e(route('movie.upcoming')); ?>" title="<?php echo e(__('menu.upcoming')); ?>"><?php echo e(__('menu.upcoming')); ?></a></li>
                    </ul>
                </div>
                <div class="bl">
                    <div class="heading"><?php echo e(__('menu.tv_shows')); ?></div>
                    <ul>
                        <li><a href="<?php echo e(route('tv.popular')); ?>" title="<?php echo e(__('menu.popular')); ?>"><?php echo e(__('menu.popular')); ?></a></li>
                        <li><a href="<?php echo e(route('tv.top.rated')); ?>" title="<?php echo e(__('menu.top_rated')); ?>"><?php echo e(__('menu.top_rated')); ?></a></li>
                        <li><a href="<?php echo e(route('tv.on.the.air')); ?>" title="<?php echo e(__('menu.on_tv')); ?>"><?php echo e(__('menu.on_tv')); ?></a></li>
                        <li><a href="<?php echo e(route('tv.airing.to.day')); ?>" title="<?php echo e(__('menu.airing_today')); ?>"><?php echo e(__('menu.airing_today')); ?></a></li>
                    </ul>
                </div>
                <div class="bl">
                    <div class="heading">Page</div>
                    <ul>
                        <li>
                            <a href="<?php echo e(route('page', 'contact')); ?>" title="Contact">Contact</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('page', 'copyright')); ?>" title="Copyright">Copyright</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('page', 'dmca')); ?>" title="DMCA">DMCA</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('page', 'privacy-policy')); ?>" title="Privacy Policy">PrivacyPolicy</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer><?php /**PATH /www/wwwroot/cineinc.biz/engine/resources/views/components/footer.blade.php ENDPATH**/ ?>