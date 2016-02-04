<?php
/**
 * Bootstrao Twitter Theme for Croogo CMS
 *
 * @author Nitish Dhar <nitishdhar11@gmail.com>
 * @link http://www.croogo.org
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title_for_layout; ?> &raquo; <?php echo Configure::read('Site.title'); ?></title>
    <!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />
        <!--[if lt IE 9]>
		<?php echo $this->Html->css('ie'); ?>
	<![endif]-->
    <?php
        echo $this->Html->css(array('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700'));
        echo $this->Layout->meta();
        echo $this->Layout->feed();
        echo $this->Html->css(array(
            'jquery-ui.min',
            'bootstrap.min2',
            'style',
            'template',
            'template_media',
            'font-awesome'
        ));
        echo $this->Layout->js();
        echo $this->Html->script(array(
            'jquery-2.1.4.min',
            'jquery-ui.min',
            'bootstrap.min2',
            'script',
            'jquery.simple-sidebar.min'
            
        ));
        echo $scripts_for_layout;
    ?>
</head>
<body>
    <!--COVER-->
    <section id="top">
        <?php echo $this->element('nav', array('viewName' => 'Blog')); ?>
    </section>
    <!--END COVER-->
    <div id="wrapper" class="container">
        <!--div class="row">
            <div class="span12">
                <div class="page-header">
                    <h1><?php /*echo $this->Html->link(Configure::read('Site.title'), '/'); ?> <small><?php echo Configure::read('Site.tagline');*/ ?></small></h1>
                </div>
            </div>
        </div-->
       <br />
       <br />

       <!--div class="row">
            <div class="span12">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </a>
                            <span class="hidden-desktop"><a href="#" class="brand">Navigation</a></span>
                            <div class="nav-collapse">
                            <?php /*echo $this->Custom->menu('main', array('dropdown' => true));*/ ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div-->

            <div class="row">
                <div class="span8">
                <?php
                    echo $this->Layout->sessionFlash();
                    echo $content_for_layout;
                ?>
                </div>
                <div class="span4">
                    <div class="hidden-desktop">
                        <hr/>
                    </div>
                <?php echo $this->Layout->blocks('right'); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        Decidere is a product of Decidere Analytics, LLC
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2 col-lg-offset-3">
                        Fort Wayne, Indiana 46805
                    </div>
                    <!--div class="span5">
                        Theme by <a href="http://www.linkedin.com/profile/view?id=76383741&trk=tab_pro">Nitish Dhar</a> Powered by <a href="http://www.croogo.org">Croogo</a>.
                    </div>
                    <div class="span1 offset4">
                        <a href="http://www.cakephp.org"><?php /*echo $this->Html->image('/img/cake.power.gif');*/ ?></a>
                    </div>
                    </div-->
                    <br />
                    <br />
                </div>
            </div>
        </div>
        <?php echo $this->element('side_nav', array('viewName' => 'Blog')); ?>
        <?php echo $this->element('modals'); ?>
    </div>
</body>
</html>