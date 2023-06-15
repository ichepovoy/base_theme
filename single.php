<?php
// Стандартний Шаблон виводу посту 
get_header();
?>

<div class="page news_page">
    <div class="container">
        <!--Вивід зображеня посту  -->
        <img src="<?php the_post_thumbnail_url(); ?>" class="single-news-image">
        <!-- Заголовок посту -->
        <h1 class="page-title"><?php the_title(); ?></h1>
        <!-- Контент посту -->
        <?php the_content(); ?>
    </div>
</div>



<?php
get_footer();
