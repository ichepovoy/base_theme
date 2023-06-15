<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 04.02.2021
 * Time: 12:19
 */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />

    <?php wp_head(); ?>
    <!-- Відповідає за виклик системних виконавчих файлів та скриптів -->

</head>

<body>
    <?php wp_body_open(); ?>
    <!-- Відкривається основна частина змісту -->

    <!--   
    Вивід меню (кастомний варіант). Іде запит на вивід меню з id=2
    <nav class="menu">
        <ul>
            <?php
            $getMenu = wp_get_nav_menu_items('2'); // Where menu1 can be ID, slug or title
            foreach ($getMenu as $item) { ?>
                <li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
            <?php }
            ?>
        </ul>
    </nav>

    Виконання шорткоду <?php echo do_shortcode('[shortcode-name]'); ?>

    Отримати посилання на папку теми <?php echo get_template_directory_uri(); ?>
    Отримати кастомне поле ACF для поточної сторінки  <?php echo get_field('field_name'); ?>
    Отримати кастомне поле ACF для сторінки з id = 73  <?php echo get_field('field_name', 73); ?>
            -->
    <header>
        <!-- Зміст хедеру -->
    </header>

    <main>
        <!-- Відкривається основна частина (тіло) сайту -->