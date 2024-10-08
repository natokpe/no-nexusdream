<?php
declare(strict_types = 1);

use NatOkpe\Wp\Theme\Nexusdream\Theme;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta name="theme-color" content="black" />

        <link id="favicon" rel="shortcut icon" href="<?= Theme::url('assets/img/favicon.ico') ?>" type="image/ico" />

        <script type="text/javascript">
            window.nowpt = {
                bloginfo                     : function (info) {
                    switch (info) {
                        case charset:
                            return '<?php bloginfo('charset'); ?>';
                            break;
                        case name:
                            return '<?php bloginfo('name'); ?>';
                            break;
                        default:
                            return undefined;
                            break;
                    }
                },

                home_url                     : '<?= home_url() ?>',
                get_stylesheet_directory_uri : '<?= get_stylesheet_directory_uri() ?>',
                splashscreenClass            : '<?php echo 'splashscreen' ?>'
            };
        </script>

        <?php wp_head(); ?>
        <style type="text/css">
        </style>

    </head>
    <body <?php body_class('splashscreen'); ?>><?php wp_body_open(); ?>
        <div class="content-frame-splashscreen">
            <div class="preloader-area">
                <img class="preloader" src="<?= Theme::url('assets/img/preloader.svg') ?>">
            </div>
        </div>
