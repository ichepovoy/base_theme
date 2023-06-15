<?php
// Базовий вигляд сторінок, тобто якщо для сторінки не назначено окремий шаблон
get_header();
?>

<?php
  the_title(); // Заголовок сторінки
?> 
<?php
  echo get_the_excerpt(); // Вступ - до  відмежування Читати далі
?>
<?php
  the_content(); // Контент сторінки, що внесено через стандартний редактор, або через блочний
?>
<!-- Інщі допоміжні елементи:

Отримати кастомне поле ACF для поточної сторінки  <?php echo get_field('field_name'); ?>
<?php the_field('field_name'); ?>
 get_field - з можливістю обробки результату
 the_field - без можливості обробки результату
 Отримати кастомне поле ACF для сторінки з id = 73  <?php echo get_field('field_name', 73); ?>

 Виконання шорткоду <?php echo do_shortcode('[shortcode-name]'); ?>

 Отримати посилання на папку теми <?php echo get_template_directory_uri(); ?>
 
 Використання поля повторювача
<?php if (have_rows('назва_поля повторювача')) :
  while (have_rows('назва_поля повторювача')) : the_row();
?>
          
              <?php the_sub_field('назва_поля_елемента'); ?>
    
        <?php endwhile;
    endif; ?>

  Отримати пости з певними параметрами
  <?php
  $args = array(
    'post_type'      => 'post',
    'category_name'  => 'news',
    'posts_per_page' => 3,

  );
  $query = new WP_Query($args);
  ?>
  <ul>
  <?php
  if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
  ?>
    <li>
     
      <img src="<?php echo get_the_post_thumbnail_url();  // отримуєто посилання на фото до посту 
                ?>" alt="" />
      <div class="base__text">
        <p>
          <?php echo get_the_excerpt(); // Визов короткого опису 
          ?> 
        </p>
      </div>

      <a class="main__btn btn__green-border" href="<?php echo get_permalink(); // Посилання на сторінку посту
                                                    ?>">Read more</a>
    </li>
<?php
    endwhile;
    wp_reset_postdata(); // скидаємо дані
  endif;
?>
</ul>
-->

<?php
get_footer();
