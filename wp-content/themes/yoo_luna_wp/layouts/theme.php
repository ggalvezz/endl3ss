<?php
/**
* @package   Luna
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get theme configuration
include($this['path']->path('layouts:theme.config.php'));

?>
<!DOCTYPE HTML>
<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>"  data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>

<head>
<?php echo $this['template']->render('head'); ?>
</head>

<body class="<?php echo $this['config']->get('body_classes'); ?>">

    <?php if ($this['widgets']->count('logo + logo-small + menu + offcanvas + toolbar-l + toolbar-r')) : ?>

        <div class="tm-navbar-container <?php echo $nav_class; echo $this['config']->get('navbar_absolute', false) ? ' tm-navbar-absolute' : ''; ?>">

            <?php if ($this['widgets']->count('toolbar-l + toolbar-r')) : ?>
            <div class="tm-toolbar uk-clearfix uk-hidden-small">
                <div class="uk-container uk-container-center">

                    <?php if ($this['widgets']->count('toolbar-l')) : ?>
                    <div class="uk-float-left"><?php echo $this['widgets']->render('toolbar-l'); ?></div>
                    <?php endif; ?>

                    <?php if ($this['widgets']->count('toolbar-r')) : ?>
                    <div class="uk-float-right"><?php echo $this['widgets']->render('toolbar-r'); ?></div>
                    <?php endif; ?>

                </div>
            </div>
            <?php endif; ?>

            <?php echo $this['template']->render('header.'.$this['config']->get('navigation_style', 'default').''); ?>

        </div>
    <?php endif; ?>

    <?php if ($this['widgets']->count('top-a')) : ?>
    <div id="tm-top-a" class="tm-block-top-a <?php echo @$block_classes['top-a']; ?>" <?php echo $styles['block.top-a'] ?>>
        <div class="uk-display-block" style="width: 100%;">

            <section class="<?php echo $grid_classes['top-a']; echo $display_classes['top-a']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
                <?php echo $this['widgets']->render('top-a', array('layout'=>$this['config']->get('grid.top-a.layout'))); ?>
            </section>

        </div>
    </div>
    <?php endif; ?>

    <div class="cloud-container">
            <?php if ($this['widgets']->count('top-b')) : ?>
                <div id="tm-top-b" class="tm-block-top-b <?php echo @$block_classes['top-b']; ?>" <?php echo $styles['block.top-b'] ?>>
                    <div class="cloud">
                        <div class="uk-container uk-container-center">
                            <section class="<?php echo $grid_classes['top-b']; echo $display_classes['top-b']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
                                <?php echo $this['widgets']->render('top-b', array('layout'=>$this['config']->get('grid.top-b.layout'))); ?>
                            </section>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
    </div>

    <?php if ($this['widgets']->count('top-c')) : ?>
    <div id="tm-top-c" class="tm-block-top-c <?php echo @$block_classes['top-c']; ?>" <?php echo $styles['block.top-c'] ?>>
        <div class="uk-container uk-container-center">

            <section class="<?php echo $grid_classes['top-c']; echo $display_classes['top-c']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
                <?php echo $this['widgets']->render('top-c', array('layout'=>$this['config']->get('grid.top-c.layout'))); ?>
            </section>

        </div>
    </div>
    <?php endif; ?>

    <?php if ($this['widgets']->count('top-d')) : ?>
    <div id="tm-top-d" class="tm-block-top-d <?php echo @$block_classes['top-d']; ?>" <?php echo $styles['block.top-d'] ?>>
        <div class="uk-container uk-container-center">
            <section class="<?php echo $grid_classes['top-d']; echo $display_classes['top-d']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
            <?php echo $this['widgets']->render('top-d', array('layout'=>$this['config']->get('grid.top-d.layout'))); ?>
            </section>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($this['widgets']->count('main-top + main-bottom + sidebar-a + sidebar-b') || $this['config']->get('system_output', true)) : ?>
    <div id="tm-main" class="tm-block-main <?php echo @$block_classes['main']; ?>" <?php echo $styles['block.main'] ?>>
        <div class="uk-container uk-container-center">
            <div class="tm-main uk-grid uk-position-relative" data-uk-grid-match data-uk-grid-margin>

                <?php if ($this['widgets']->count('main-top + main-bottom') || $this['config']->get('system_output', true)) : ?>
                <div class="<?php echo $columns['main']['class'] ?>">

                    <?php if ($this['widgets']->count('main-top')) : ?>
                    <section id="tm-main-top" class="<?php echo $grid_classes['main-top']; echo $display_classes['main-top']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('main-top', array('layout'=>$this['config']->get('grid.main-top.layout'))); ?></section>
                    <?php endif; ?>

                    <?php if ($this['config']->get('system_output', true)) : ?>
                    <main id="tm-content" class="tm-content">

                        <?php if ($this['widgets']->count('breadcrumbs')) : ?>
                        <?php echo $this['widgets']->render('breadcrumbs'); ?>
                        <?php endif; ?>

                        <?php echo $this['template']->render('content'); ?>

                    </main>
                    <?php endif; ?>

                    <?php if ($this['widgets']->count('main-bottom')) : ?>
                    <section id="tm-main-bottom" class="<?php echo $grid_classes['main-bottom']; echo $display_classes['main-bottom']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('main-bottom', array('layout'=>$this['config']->get('grid.main-bottom.layout'))); ?></section>
                    <?php endif; ?>

                </div>
                <?php endif; ?>

                <?php foreach($columns as $name => &$column) : ?>
                <?php if ($name != 'main' && $this['widgets']->count($name)) : ?>
                <aside class="<?php echo $column['class'] ?>"><?php echo $this['widgets']->render($name) ?></aside>
                <?php endif ?>
                <?php endforeach ?>

            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($this['widgets']->count('bottom-a')) : ?>
    <div id="tm-bottom-a" class="tm-block-bottom-a <?php echo @$block_classes['bottom-a']; ?>" <?php echo $styles['block.bottom-a'] ?>>
        <div class="uk-container uk-container-center">
            <section class="<?php echo $grid_classes['bottom-a']; echo $display_classes['bottom-a']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
                <?php echo $this['widgets']->render('bottom-a', array('layout'=>$this['config']->get('grid.bottom-a.layout'))); ?>
            </section>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($this['widgets']->count('bottom-b')) : ?>
    <div id="tm-bottom-b" class="tm-block-bottom-b <?php echo @$block_classes['bottom-b']; ?>" <?php echo $styles['block.bottom-b'] ?>>
        <div class="uk-container uk-container-center">
            <section class="<?php echo $grid_classes['bottom-b']; echo $display_classes['bottom-b']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
                <?php echo $this['widgets']->render('bottom-b', array('layout'=>$this['config']->get('grid.bottom-b.layout'))); ?>
            </section>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($this['widgets']->count('bottom-c')) : ?>
    <div id="tm-bottom-c" class="tm-block-bottom-c <?php echo @$block_classes['bottom-c']; ?>" <?php echo $styles['block.bottom-c'] ?>>
        <div class="uk-container uk-container-center">
            <section class="<?php echo $grid_classes['bottom-c']; echo $display_classes['bottom-c']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
                <?php echo $this['widgets']->render('bottom-c', array('layout'=>$this['config']->get('grid.bottom-c.layout'))); ?>
            </section>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($this['widgets']->count('bottom-d')) : ?>
    <div id="tm-bottom-d" class="tm-block-bottom-d <?php echo @$block_classes['bottom-d']; ?>" <?php echo $styles['block.bottom-d'] ?>>
        <div class="uk-container uk-container-center">
            <section class="<?php echo $grid_classes['bottom-d']; echo $display_classes['bottom-d']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
                <?php echo $this['widgets']->render('bottom-d', array('layout'=>$this['config']->get('grid.bottom-d.layout'))); ?>
            </section>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($this['widgets']->count('footer-left + footer-right + debug') || $this['config']->get('warp_branding', true) || $this['config']->get('totop_scroller', true)) : ?>
    <footer id="tm-footer" class="tm-footer <?php echo @$block_classes['footer']; ?>">
        <div class="uk-container uk-container-center">
            <div class="uk-flex uk-flex-middle uk-flex-space-between uk-text-center-small">

                <?php if ($this['widgets']->count('footer-left')) : ?>
                <div class="tm-footer-left">
                    <?php echo $this['widgets']->render('footer-left'); ?>
                    <?php $this->output('warp_branding'); ?>
                </div>
                <?php endif; ?>

                <?php if ($this['config']->get('totop_scroller', true)) : ?>
                <a class="tm-totop-scroller" data-uk-smooth-scroll href="#"></a>
                <?php endif; ?>

                <?php if ($this['widgets']->count('footer-right')) : ?>
                <div class="tm-footer-right">
                    <?php echo $this['widgets']->render('footer-right'); ?>
                </div>
                <?php endif; ?>

                <?php echo $this['widgets']->render('debug'); ?>

            </div>
        </div>
    </footer>
    <?php endif; ?>

    <?php if ($this['widgets']->count('smoothscroll')) : ?>
        <div class="tm-smoothscroll-bar uk-flex uk-flex-middle uk-visible-large">
            <?php echo $this['widgets']->render('smoothscroll'); ?>
        </div>
    <?php endif; ?>

    <?php echo $this->render('footer'); ?>

    <?php if ($this['widgets']->count('offcanvas')) : ?>
    <div id="offcanvas" class="uk-offcanvas">
        <div class="uk-offcanvas-bar uk-offcanvas-bar-flip"><?php echo $this['widgets']->render('offcanvas'); ?></div>
    </div>
    <?php endif; ?>

</body>
</html>
