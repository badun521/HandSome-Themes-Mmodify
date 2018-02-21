<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>



<!DOCTYPE HTML>

<!--suppress ALL -->

<?php echo Content::exportHtmlTag($this->options->indexsetup)?> lang="<?php _me("zh-cmn-Hans") ?>">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <meta charset="<?php $this->options->charset(); ?>">

    <!--IE 8浏览器的页面渲染方式-->

    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">

    <!--默认使用极速内核：针对国内浏览器产商-->

    <meta name="renderer" content="webkit">

    <!--chrome Android 地址栏颜色-->

    <?php if($this->options->ChromeThemeColor): ?>

    <meta name="theme-color" content="<?php $this->options->ChromeThemeColor() ?>" />

    <?php endif; ?>



    <?php echo Content::exportDNSPrefetch(); ?>



    <title><?php Content::echoTitle($this,$this->options->title,$this->_currentPage); ?></title>

    <?php if($this->options->favicon != ""): ?>

        <link rel="icon" type="image/ico" href="<?php $this->options->favicon() ?>">

    <?php else: ?>

        <link rel="icon" type="image/ico" href="/favicon.ico">

    <?php endif; ?>

    <?php $this->header(Content::exportGeneratorRules($this)); ?>



    <?php if (@in_array('mathJax',$this->options->featuresetup)): ?>

    <script type="text/x-mathjax-config">

        MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});

    </script>

    <?php endif; ?>

    <!-- 第三方CDN加载CSS -->

    <?php $PUBLIC_CDN_ARRAY = unserialize(PUBLIC_CDN); ?>

    <link href="<?php echo $PUBLIC_CDN_ARRAY['css']['bootstrap'] ?>" rel="stylesheet">





    <!-- 本地css静态资源 -->

    <link rel="stylesheet" href="<?php echo STATIC_PATH; ?>css/function.min.css?v=<?php echo Handsome::$version.Handsome::$versionTag ?>" type="text/css" />

    <link rel="stylesheet" href="<?php echo STATIC_PATH; ?>css/handsome.min.css?v=<?php echo Handsome::$version.Handsome::$versionTag ?>" type="text/css" />

    
    



    <!--主题组件css文件加载-->

    <link rel="stylesheet" href="<?php echo STATIC_PATH; ?>css/features/jquery.fancybox.min.css?v=<?php echo Handsome::$version.Handsome::$versionTag ?>" type="text/css" />
    
   

    <!-- <link type="text/css" rel="styleSheet"  href="https://lolicm.com/usr/themes/handsome/assets/css/JindaiKirin.css" /> -->
    <link type="text/css" rel="styleSheet"  href="https://lolicm.com/usr/themes/handsome/assets/css/SimpleZero.css" />

    <!--引入英文字体文件-->

    <?php if (!empty($this->options->featuresetup) && in_array('laodthefont', $this->options->featuresetup)): ?>

    <link rel="stylesheet" href="<?php echo STATIC_PATH; ?>css/font.css?v=<?php echo Handsome::$version.Handsome::$versionTag ?>" type="text/css" />

    <?php endif; ?>



    <style type="text/css">

        <?php echo Content::exportCss($this) ?>

    </style>



    <!--全站jquery-->

    <script src="<?php echo $PUBLIC_CDN_ARRAY['js']['jquery'] ?>"></script>


    <!--网站统计代码-->

    <script type="text/javascript">

    <?php $this->options->analysis(); ?>

    </script>



</head>



<body id="body">

    <?php echo Content::selectLayout($this->options->indexsetup) ?>
    <div class="bg"></div>
    <!-- header -->
    <?php $this->need('component/headnav.php'); ?>

    <!-- / header -->

