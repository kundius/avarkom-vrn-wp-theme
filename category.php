<?php
$category = get_queried_object();
$query_params = [
  'post_type' => 'post',
  'posts_per_page' => 12,
  'order' => 'DESC',
  'orderby' => 'date',
  'paged' => get_query_var('paged') ?: 1,
  'tax_query' => [
    'relation' => 'OR',
    [
      'taxonomy' => $category->taxonomy,
      'field' => 'id',
      'terms' => [$category->term_id]
    ]
  ]
];
$query = new WP_Query($query_params);
?>
<!DOCTYPE html>
<html lang="ru" itemscope itemtype="http://schema.org/WebSite">
  <head>
    <?php get_template_part('partials/head'); ?>
  </head>
  <body>
    <div class="wrapper">
    <?php get_template_part('partials/header'); ?>

    <section class="page-section">
      <div class="ui-container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php bcn_display() ?>
        </div>

        <h1 class="page-title"><?php single_cat_title() ?></h1>

        <?php if ($query->have_posts()): ?>
        <div class="articles-layout__list">
          <div class="articles-layout__list-grid">
            <?php foreach ($query->posts as $item): ?>
            <div class="articles-layout__list-item">
              <article class="articles-item">
                <?php if ($thumbnail = get_the_post_thumbnail($item, 'w400')): ?>
                <div class="articles-item__image">
                  <?php echo $thumbnail ?>
                </div>
                <?php endif; ?>
                <div class="articles-item__date"><?php echo get_the_date('d.m.Y', $item) ?></div>
                <div class="articles-item__title"><a href="<?php the_permalink($item) ?>"><?php echo get_the_title($item) ?></a></div>
                <?php if ($excerpt = get_the_excerpt($item)): ?>
                  <div class="articles-item__desc"><?php echo $excerpt ?></div>
                <?php endif; ?>
              </article>
            </div>
            <?php endforeach; ?>
          </div>

          <div class="articles-layout__list-more">
            <?php wp_pagenavi(['query' => $query]) ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </section>

    <?php get_template_part('partials/footer'); ?>
    </div>
  </body>
</html>
