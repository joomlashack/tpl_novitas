<?php
/**
 * @package     Novitas
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2016 Joomlashack. Meritage Assets.
 *              All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Do not edit this file directly. You can copy it and create a new file called
 * 'custom.php' in the same folder, and it will override this file. That way
 * if you update the template ever, your changes will not be lost.
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

?>
<doctype>
<html>
    <head>
        <w:head />
        <link href="//fonts.googleapis.com/css?family=Droid+Serif:400,700" rel="stylesheet">
    </head>
    <body>

        <?php if ($this->countModules('toolbar')) : ?>
        <w:nav containerClass="<?php echo $wrightContainerClass ?>" wrapClass="navbar-fixed-top navbar-inverse" type="toolbar" name="toolbar" />
        <?php endif; ?>
        <header id="header" class="p-t-1 p-b-1 m-t-2 m-b-2 border-double">
            <div class="<?php echo $wrightContainerClass ?>">
                <div class="row-fluid">
                    <w:logo name="top" />
                </div>
            </div>
        </header>
        <?php if ($this->countModules('menu')) : ?>
        <!-- menu -->
        <w:nav containerClass="bg-color-five m-b-2" wrapClass="navbar-inverse <?php echo $wrightContainerClass; ?> m-b-0" name="menu" />
        <?php endif; ?>
        <div class="<?php echo $wrightContainerClass ?>">
            <?php if ($this->countModules('featured')) : ?>
             <!-- featured -->
             <div class="wrapper-featured">
                <div id="featured" class="lead p-t-1 p-b-1 m-b-0">
                    <w:module type="row-fluid" name="featured" chrome="wrightflexgrid" />
                </div>
             </div>
            <?php endif; ?>

            <?php if ($this->countModules('grid-top')) : ?>
            <!-- grid-top -->
            <div id="grid-top">
                <w:module type="row-fluid" name="grid-top" chrome="wrightflexgrid" />
            </div>
            <?php endif; ?>
            <?php if ($this->countModules('grid-top2')) : ?>
            <!-- grid-top2 -->
            <div id="grid-top2">
                <w:module type="row-fluid" name="grid-top2" chrome="wrightflexgrid" />
            </div>
            <?php endif; ?>

            <div id="main-content" class="row-fluid m-b-2">
                <!-- sidebar1 -->
                <aside id="sidebar1">
                    <w:module name="sidebar1" />
                </aside>
                <!-- main -->
                <section id="main">
                    <?php if ($this->countModules('above-content')) : ?>
                    <!-- above-content -->
                    <div id="above-content" class="m-b-2">
                        <w:module type="none" name="above-content" />
                    </div>
                    <?php endif; ?>
                    <?php if ($this->countModules('breadcrumbs')) : ?>
                    <!-- breadcrumbs -->
                    <div id="breadcrumbs">
                        <w:module type="single" name="breadcrumbs" chrome="none" />
                    </div>
                    <?php endif; ?>
                    <!-- component -->
                    <w:content />
                    <?php if ($this->countModules('below-content')) : ?>
                    <!-- below-content -->
                    <div id="below-content" class="m-t-2">
                        <w:module type="none" name="below-content" />
                    </div>
                    <?php endif; ?>
                </section>
                <!-- sidebar2 -->
                <aside id="sidebar2">
                    <w:module name="sidebar2" />
                </aside>
            </div>

            <?php if ($this->countModules('grid-bottom')) : ?>
            <!-- grid-bottom -->
            <div id="grid-bottom">
                <w:module type="row-fluid" name="grid-bottom" chrome="wrightflexgrid" />
            </div>
            <?php endif; ?>
            <?php if ($this->countModules('grid-bottom2')) : ?>
            <!-- grid-bottom2 -->
            <div id="grid-bottom2">
                <w:module type="row-fluid" name="grid-bottom2" chrome="wrightflexgrid" />
            </div>
            <?php endif; ?>
        </div>

        <div class="wrapper-footer">
            <footer id="footer" <?php if ($this->params->get('stickyFooter',1)) : ?> class="sticky"<?php endif;?>>
                <div class="hero-unit p-t-2 p-b-2 m-b-0">
                    <?php if ($this->countModules('bottom-menu')) : ?>
                    <!-- bottom-menu -->
                    <w:nav containerClass="<?php echo $wrightContainerClass ?>" rowClass="row-fluid" name="bottom-menu" wrapClass="navbar-transparent" />
                    <?php endif; ?>
                    <div class="<?php echo $wrightContainerClass ?> footer-content">
                        <?php if ($this->countModules('footer')) : ?>
                        <w:module type="row-fluid" name="footer" chrome="wrightflexgrid"/>
                        <?php endif; ?>
                        <w:footer />
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
