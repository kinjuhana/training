

<?php
    $this_episode = isset($episode_info) ? $episode_info->episode_number : false;
    $season = $season ?? $tv->number_of_seasons;
?>

<?php $__env->startSection('content'); ?>
    <div id="watch">
        <?php echo $__env->make('components.player', ['backdrop' => $backdrop, 'video' => asset('/movie.mp4')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container py-4">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <a href="<?php echo e(route('loading', ['id' => $tv->id ,'title' => $tv->original_name, 'action' => 'play'])); ?>" class="btn btn-outline-info mx-1"><?php echo e(__('utilities.watch_now')); ?> <i class="fa fa-film" aria-hidden="true"></i></a>
                    <a href="<?php echo e(route('loading', ['id' => $tv->id ,'title' => $tv->original_name, 'action' => 'register'])); ?>" class="btn btn-outline-info mx-1"><?php echo e(__('utilities.download')); ?> <i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="episodes">
                <div class="bl-seasons">
                    <div class="heading"><?php echo e(__('utilities.season')); ?></div>
                    <ul class="seasons">
                        <?php $__currentLoopData = collect($tv->seasons)->sortKeysDesc()->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($item->season_number == $season): ?>
                                <li class="active">
                                    <?php echo e(__('utilities.season')); ?> <?php echo e($item->season_number); ?> <span><?php echo e($item->air_date); ?>

                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="<?php echo e(route('tv.single.season', ['id' => $tv->id, 'season' => $item->season_number, 'slug' => Str::slug($tv->original_name)])); ?>"><?php echo e(__('utilities.season')); ?> <?php echo e($item->season_number); ?> <span><?php echo e($item->air_date); ?></span></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

                <div class="bl-servers">
                    <div class="heading">
                        <span><i class="fa fa-hdd-o"></i> <?php echo e(__('utilities.episode')); ?></span>
                    </div>
                    <ul class="episodes">
                        <?php $__currentLoopData = $season_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a class="<?php echo e($item->episode_number == $this_episode ? 'active' : ''); ?>" href="<?php echo e(route('tv.single.season.episode', ['id'=>$tv->id, 'season' => $season, 'episode'=>$item->episode_number, 'slug' => Str::slug($tv->original_name.' '.$item->name) ])); ?>" title="<?php echo e($item->name); ?>">
                                <?php echo e(__('utilities.episode')); ?> <?php echo e($item->episode_number); ?>: <span><?php echo e($item->name); ?></span>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="watch-extra">
                <section class="info">
                    <div class="poster"> <span><img itemprop="image" src="<?php echo e(img_poster($tv->poster_path)); ?>" alt="<?php echo e($title); ?> <?php echo e(to_year($tv->last_air_date)); ?>"></span> </div>
                    <div class="info">
                        <h1 itemprop="name" class="title"><?php echo e($title); ?></h1>
                        <div class="meta lg"> <span class="quality">HD</span> <span class="imdb"><i class="fa fa-star"></i> <?php echo e($tv->vote_average); ?></span> <span><?php echo e($tv->episode_run_time[0]); ?> <?php echo e(__('utilities.minutes')); ?></span> </div>
                        <div itemprop="description" class="desc shorting" data-type="text"><?php echo e($tv->overview); ?></div>
                        <div class="meta">
                            <div> <span><?php echo e(__('utilities.genre')); ?>:</span> <span><?php echo e(collect($tv->genres)->implode('name', ', ')); ?></span> </div>
                            <div> <span><?php echo e(__('utilities.released')); ?>:</span> <span><?php echo e($tv->last_air_date); ?></span> </div>
                            <div><span><?php echo e(__('utilities.director')); ?>:</span> <span><?php echo director_comma($tv->credits->crew, 5); ?></span> </div>
                            <div class="casts"> <span><?php echo e(__('utilities.stars')); ?>:</span> <span><?php echo star_comma($tv->credits->cast, 5); ?></span> </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </section>
            </div>

            <div class="clearfix"></div>

            <?php if($tv->similar): ?>
                <section class="bl">
                    <div class="heading simple"> <h2 class="title"><?php echo e(__('section.title.similar')); ?></h2> </div>
                    <div class="content">
                        <div class="filmlist">
                            <?php $__currentLoopData = collect($tv->similar->results)->take(16); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $__env->make('components.item-tv', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <?php if($tv->recommendations): ?>
                <section class="bl">
                    <div class="heading simple"> <h2 class="title"><?php echo e(__('section.title.recommendation')); ?></h2> </div>
                    <div class="content">
                        <div class="filmlist">
                            <?php $__currentLoopData = collect($tv->recommendations->results)->take(16); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $__env->make('components.item-tv', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </section>
                <div class="clearfix"></div>
            <?php endif; ?>

            <div class="clearfix"></div>
        </div>
    </div>

    <?php echo $__env->make('components.modal_watch', ['backdrop' => $backdrop, 'id' => $tv->id, 'title' => $tv->original_name], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <link href="https://vjs.zencdn.net/7.10.2/video-js.css" rel="stylesheet" />
    <style>
        .video-js .vjs-big-play-button {
            line-height: 2.5em;
            height: 2.8em;
            width: 2.8em;
            border: .15em solid #00acc1;
            background-color: #1c242c;
            background-color: rgba(28,36,44,.7);
            border-radius: 50%;
        }
        .vjs-big-play-centered .vjs-big-play-button {
            margin-top: -1.4em;
            margin-left: -1.4em;
        }
        .vjs-icon-play:before, .video-js .vjs-play-control .vjs-icon-placeholder:before, .video-js .vjs-big-play-button .vjs-icon-placeholder:before {
            color: #00acc1;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>
    <script>
        var playDuration = 129*60;
        var myPlayer = videojs('play-video', {
            controlBar: {
                'pictureInPictureToggle': false
            }
        });
        var pausetime = 15;
        myPlayer.on('timeupdate', function(e) {
            if (myPlayer.currentTime() >= pausetime) {
                myPlayer.pause();
                $('#pop-login').modal({show: true, backdrop: 'static'});

                if (myPlayer.isFullscreen()) {
                    myPlayer.exitFullscreen();
                }
            }
        });
        myPlayer.paused();

        if ( $(".ep-item").length ) {
            $(".ep-item").on('click', function() {
                myPlayer.currentTime(0);
                myPlayer.play();
            });
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/inachan/public_html/4kwatchvid.fun/engine/resources/views/tv.blade.php ENDPATH**/ ?>