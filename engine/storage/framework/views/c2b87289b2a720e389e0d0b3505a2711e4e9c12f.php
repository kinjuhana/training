<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/all.css')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <?php echo SEO::generate(); ?>

    <?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('header'); ?>
    <style>
        a,
        section.bl .heading .title,
        section.bl .heading h1,
        section.bl .heading h2,
        section.bl .heading h3,
        #slider .item .info .actions .watchnow,
        .btn-outline-info,
        .filmlist .item:hover .title,
        .vjs-icon-play:before,
        .video-js .vjs-play-control .vjs-icon-placeholder:before,
        .video-js .vjs-big-play-button .vjs-icon-placeholder:before,
        header #menu>li>a:hover,
        header #menu>li>ul>li>a:hover,
        .page-link:hover,
        #episodes .bl-servers .heading,
        #episodes .bl-seasons .heading {
            color: <?php echo e(conf('theme.primary-color')); ?>

        }
        a:hover{
            opacity: .7;
            color: <?php echo e(conf('theme.primary-color')); ?>

        }
        .filmlist .item .poster:before {
            background-color: <?php echo e(conf('theme.primary-color')); ?>;
            background-image: -webkit-gradient(linear,left top,left bottom,from(<?php echo e(conf('theme.primary-color')); ?>),to(<?php echo e(conf('theme.primary-color')); ?>));
            background-image: -webkit-linear-gradient(top,<?php echo e(conf('theme.primary-color')); ?>,<?php echo e(conf('theme.primary-color')); ?>);
        }
        #slider .paging>span.active,
        #slider .paging>span.swiper-pagination-bullet-active,
        #slider .item .info .actions .watchnow:hover,
        .btn-outline-info:hover,
        .btn-outline-info:not(:disabled):not(.disabled).active,
        .btn-outline-info:not(:disabled):not(.disabled):active,
        .show>.btn-outline-info.dropdown-toggle,
        #slider .item .info .meta .quality,
        .watch-extra section.info .info .meta .quality,
        section.bl .heading .tabs>span.active,
        .filmlist .item .icons>div.quality,
        #episodes .bl-seasons ul li.active,
        #episodes .bl-servers ul.episodes li a.active {
            background-color: <?php echo e(conf('theme.primary-color')); ?>

        }
        section.bl .heading .tabs>span.active {
            color: <?php echo e(conf('theme.button-tab-text-color')); ?>

        }
        #slider .item .info .actions .watchnow,
        .btn-outline-info:hover,
        .btn-outline-info:not(:disabled):not(.disabled).active,
        .show>.btn-outline-info.dropdown-toggle,
        .btn-outline-info,
        .video-js .vjs-big-play-button,
        .page-link,
        #episodes .bl-seasons ul li.active,
        #episodes .bl-servers ul.episodes li a.active {
            border-color: <?php echo e(conf('theme.primary-color')); ?>

        }
        .btn-outline-info.focus,
        .btn-outline-info:not(:disabled):not(.disabled).active:focus,
        .btn-outline-info:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-info.dropdown-toggle:focus,
        .btn-outline-info:focus {
            box-shadow: 0 0 0 0.2rem <?php echo e(conf('theme.primary-color')); ?>50;
        }
        .proof>* {
            background-color: <?php echo e(conf('theme.bg-fake')); ?>

        }
        .proof .proof-data {
            color: <?php echo e(conf('theme.color-fake')); ?>

        }
    </style>
  </head>
  <body>
    <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="body">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
      <?php
          $popular_movie = collect(getMovies('popular')->results)->shuffle()->pluck('title')->toJson();
      ?>
      var movies = <?php echo $popular_movie; ?>

    </script>

    <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    <script src="<?php echo e(asset('assets/my.js')); ?>"></script>

    <?php echo $__env->yieldContent('footer'); ?>

    <?php echo $__env->make('foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH /home/inachan/public_html/4kwatchvid.fun/engine/resources/views/layouts.blade.php ENDPATH**/ ?>