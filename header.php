<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
    <meta charset="<?php bloginfo('charset'); // кодировка ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php /* RSS и всякое */ ?>
    <link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="Comments RSS"
          href="<?php bloginfo('comments_rss2_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title><?php wp_get_document_title(); // выводи тайтл, функция лежит в functions.php ?></title>
    <?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>

<div class="container">

        <header>
            <div class="row">
                <div class="col-xs-12">
                    <a href="/"><img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" class="logo" alt=""></a>

                                    
                </div>
            </div>
        </header>

        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#">Примеры работ</a></li>
                <li><a href="#">Стоимость</a></li>
                <li><a href="#">Ответы</a></li>
                <li><a href="#">Контакты</a></li>
              </ul>
              <hr>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        
