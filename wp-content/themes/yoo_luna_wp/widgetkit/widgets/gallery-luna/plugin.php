<?php
/**
* @package   Luna
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

return array(

    'name' => 'widget/gallery-luna',

    'main' => 'YOOtheme\\Widgetkit\\Widget\\Widget',

    'config' => array(

        'name'  => 'gallery-luna',
        'label' => 'Gallery Luna',
        'core'  => false,
        'icon'  => 'plugins/widgets/gallery-luna/widget.svg',
        'view'  => 'plugins/widgets/gallery-luna/views/widget.php',
        'item'  => array('title', 'content', 'media'),
        'fields' => array(
            array(
                'name' => 'tags'
            ),
            array(
                'type' => 'htmleditor',
                'name' => 'lightbox_content',
                'label' => 'Lightbox Content'
            )
        ),
        'settings' => array(
            'grid'                   => 'default',
            'parallax'               => false,
            'parallax_translate'     => '',
            'gutter'                 => 'default',
            'gutter_dynamic'         => '20',
            'gutter_v_dynamic'       => '',
            'filter'                 => 'none',
            'filter_tags'            => array(),
            'filter_align'           => 'left',
            'filter_all'             => true,
            'columns'                => '1',
            'columns_small'          => 0,
            'columns_medium'         => 0,
            'columns_large'          => 0,
            'columns_xlarge'         => 0,
            'animation'              => 'none',

            'image_width'            => 'auto',
            'image_height'           => 'auto',
            'media_border'           => 'none',
            'overlay'                => 'default',
            'panel'                  => 'blank',
            'overlay_center'         => 'icon',
            'overlay_background'     => 'hover',
            'overlay_image'          => false,
            'hover_overlay'          => true,
            'overlay_animation'      => 'fade',
            'image_animation'        => 'scale',

            'title'                  => true,
            'content'                => true,
            'tags'                   => true,
            'title_size'             => 'panel',
            'link'                   => false,
            'link_style'             => 'button',
            'link_icon'              => 'share',
            'link_text'              => 'View',

            'lightbox'               => 'default',
            'lightbox_caption'       => 'content',
            'lightbox_nav_width'     => '70',
            'lightbox_nav_height'    => '70',
            'lightbox_nav_contrast'  => true,
            'lightbox_title_size'    => 'panel',
            'lightbox_content_size'  => '',
            'lightbox_content_width' => '',
            'lightbox_width'         => 'auto',
            'lightbox_height'        => 'auto',
            'lightbox_alt'           => false,

            'lightbox_link'          => false,
            'lightbox_style'         => 'button',
            'lightbox_icon'          => 'arrow-right',
            'lightbox_text'          => 'Details',

            'link_target'            => false,
            'class'                  => ''
        )

    ),

    'events' => array(

        'init.site' => function($event, $app) {

        },

        'init.admin' => function($event, $app) {
            $app['angular']->addTemplate('gallery-luna.edit', 'plugins/widgets/gallery-luna/views/edit.php', true);
        }

    )

);
