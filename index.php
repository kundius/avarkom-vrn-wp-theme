<!DOCTYPE html>
<html class="no-js" <?php language_attributes();?> itemscope itemtype="http://schema.org/WebSite">
  <head>
    <?php get_template_part('partials/head');?>
  </head>
  <body <?php body_class();?>>
    <?php wp_body_open();?>

    <div class="wrapper">
      <?php get_template_part('partials/header'); ?>

      <section class="page-section">
        <div class="ui-container">
          <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php bcn_display() ?>
          </div>

          <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
          <h1 class="page-title">
            <?php the_title() ?>
          </h1>
          <?php the_content() ?>
          <?php endwhile; else: ?>
            <p>Извините, ничего не найдено.</p>
          <?php endif; ?>
        </div>
      </section>

      <?php get_template_part('partials/footer'); ?>
    </div>
  </body>
</html>
