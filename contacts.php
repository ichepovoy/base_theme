<?php
/*
	Template Name: Contact
	Template post type: post, page
 */
get_header();
?>

<div class="page page-contacts">

    <div class="container">
        <h1 class="page-title">
            <?php echo get_the_title(); ?>
            <!-- Таким чином виводиться заголовок сторінки. Альтернативний варіант без @echo@  просто the_title(); -->
        </h1>
    </div>
    <div class="container">
        <!-- Тут має бути контент -->
    </div>
</div>

<?php
get_footer();
