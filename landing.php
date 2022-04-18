<?php
/*
Template Name: Главная
*/
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes();?> itemscope itemtype="http://schema.org/WebSite">
  <head>
    <?php get_template_part('partials/head');?>
  </head>
  <body <?php body_class();?>>
    <?php wp_body_open();?>

    <div class="ui-wrapper">
      <?php get_template_part('partials/header') ?>

      <section class="intro" data-scrollspy-section id="services">
        <div class="ui-container">
          <div class="intro-special">
            <div class="intro-special__title">
              Спецпредложение!
            </div>
            <div class="intro-special__desc">
              Вызовите комиссара сейчас и <span>оформите европротокол БЕСПЛАТНО!</span>
            </div>
          </div>

          <div class="intro-body">
            <div class="intro-body__content">
              <div class="intro-body__title">
                <span>Оформим ДТП</span>
                в Воронеже
              </div>
              <div class="intro-body__desc">
                Служба аварийных комиссаров
              </div>
            </div>

            <div class="intro-body__form">
              <form action="/wp-json/contact-form-7/v1/contact-forms/36/feedback" method="post" class="intro-form js-form">
                <div class="intro-form__title">
                  Срочно!!!
                </div>
  
                <div class="intro-form__process">
                  <div class="intro-form__input">
                    <span class="wpcf7-form-control-wrap your-phone">
                      <label class="ui-input-field">
                        <input
                          type="text"
                          class="ui-input-field__input"
                          name="your-phone"
                          data-inputmask="'mask': '+7 (999) 999-99-99'"
                          placeholder="+7 (___) ___-__-__"
                        />
                        <span class="ui-input-field__label">Введите ваш номер телефона</span>
                      </label>
                    </span>
                  </div>
                  <div class="intro-form__submit">
                    <button class="ui-button-primary" type="submit">
                      Вызвать комиссара
                      <span class="ui-button-primary__call"></span>
                    </button>
                  </div>
                </div>
  
                <div class="intro-form__success">
                  <div class="intro-form-result intro-form-result_success">
                    <div class="intro-form-result__head">
                      <div class="intro-form-result__head-icon"></div>
                      <div class="intro-form-result__head-title">
                        Ваша заявка успешно отправлена
                      </div>
                    </div>
                    <div class="intro-form-result__body">
                      <div class="intro-form-result__body-text">
                        Через 2 минуты мы Вам перезвоним
                      </div>
                      <div class="intro-form-result__body-close wpcf7-form-status-reset">
                        Закрыть окно
                      </div>
                    </div>
                  </div>
                </div>
  
                <div class="intro-form__failure">
                  <div class="intro-form-result intro-form-result_failed">
                    <div class="intro-form-result__head">
                      <div class="intro-form-result__head-icon"></div>
                      <div class="intro-form-result__head-title">
                        Возникла ошибка
                      </div>
                    </div>
                    <div class="intro-form-result__body">
                      <div class="intro-form-result__body-text">
                        Не удалось отправить сообщение
                      </div>
                      <div class="intro-form-result__body-close wpcf7-form-status-reset">
                        Закрыть окно
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="intro-advantages">
            <div class="intro-advantages__item">
              <div class="intro-advantages__item-icon">
                <img src="<?php bloginfo('template_url') ?>/dist/images/icon-advantages-1.svg" alt="" />
              </div>
              <div class="intro-advantages__item-body">
                <div class="intro-advantages__item-title">
                  Оперативно
                </div>
                <div class="intro-advantages__item-desc">
                  Выезд на место ДТП<br />
                  за 5 минут
                </div>
              </div>
            </div>
            <div class="intro-advantages__item">
              <div class="intro-advantages__item-icon">
                <img src="<?php bloginfo('template_url') ?>/dist/images/icon-advantages-2.svg" alt="" />
              </div>
              <div class="intro-advantages__item-body">
                <div class="intro-advantages__item-title">
                  Воронеж
                </div>
                <div class="intro-advantages__item-desc">
                  Наши комиссары<br />
                  во всех районах
                </div>
              </div>
            </div>
            <div class="intro-advantages__item">
              <div class="intro-advantages__item-icon">
                <img src="<?php bloginfo('template_url') ?>/dist/images/icon-advantages-3.svg" alt="" />
              </div>
              <div class="intro-advantages__item-body">
                <div class="intro-advantages__item-title">
                  Выгодно
                </div>
                <div class="intro-advantages__item-desc">
                  Оформление<br />
                  европротокола бесплатно
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="additional">
        <div class="ui-container">
          <div class="additional__title">Кроме того, выполняем:</div>
          <div class="additional__items">
            <div class="additional__grid">
              <div class="additional__grid-cell">
                <div class="additional-item additional-item_first">
                  <div class="additional-item__number">1</div>
                  <div class="additional-item__title">Бесплатная консультация</div>
                  <div class="additional-item__image">
                    <img
                      src="<?php bloginfo('template_url') ?>/dist/images/additional-1.svg"
                      alt=""
                      style="width: calc(108em / 16); height: calc(109em / 16);"
                    />
                  </div>
                </div>
              </div>
              <div class="additional__grid-cell">
                <div class="additional-item additional-item_middle">
                  <div class="additional-item__number">2</div>
                  <div class="additional-item__title">Юридическое сопровождение</div>
                  <div class="additional-item__image">
                    <img
                      src="<?php bloginfo('template_url') ?>/dist/images/additional-2.svg"
                      alt=""
                      style="width: calc(116em / 16); height: calc(133em / 16);"
                    />
                  </div>
                </div>
              </div>
              <div class="additional__grid-cell">
                <div class="additional-item additional-item_last">
                  <div class="additional-item__number">3</div>
                  <div class="additional-item__title">Оценка ущерба</div>
                  <div class="additional-item__image">
                    <img
                      src="<?php bloginfo('template_url') ?>/dist/images/additional-3.svg"
                      alt=""
                      style="width: calc(143em / 16); height: calc(134em / 16);"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="why-we" data-scrollspy-section id="advantages">
        <div class="ui-container">
          <div class="why-we__title">
            Почему мы
          </div>
          <div class="why-we__layout">
            <div class="why-we-years">
              <div class="why-we-years__number">
                20
              </div>
              <div class="why-we-years__label">
                лет работы
              </div>
            </div>
            <div class="why-we-expert">
              <div class="why-we-expert__image"></div>
              <div class="why-we-expert__label">
                Профессионалы комиссары
              </div>
            </div>
            <div class="why-we-total">
              <div class="why-we-total__before">Более</div>
              <div class="why-we-total__number">10 000</div>
              <div class="why-we-total__after">оформлений</div>
            </div>
          </div>
        </div>
      </section>

      <?php $reviews = get_field('theme_reviews_items', 'options') ?>
      <script>
        var theme_reviews = <?php echo json_encode($reviews) ?>;
      </script>
      <section class="reviews" data-scrollspy-section id="reviews">
        <div class="ui-container">
          <div class="reviews__layout">
            <div class="reviews__layout-headline">
              <div class="reviews-headline">
                <?php if ($title = get_field('theme_reviews_title', 'options')): ?>
                <div class="reviews-headline__title">
                  <?php echo $title ?>
                </div>
                <?php endif; ?>
                <?php if ($desc = get_field('theme_reviews_desc', 'options')): ?>
                <div class="reviews-headline__desc">
                  <?php echo $desc ?>
                </div>
                <?php endif; ?>
              </div>
            </div>

            <div class="reviews__layout-content">
              
              <div class="reviews-preview">
                <div class="reviews-preview__figure">
                  <div class="reviews-figure">
                    <div class="reviews-figure__image" style="background-image: url('<?php echo $reviews[0]['image']['url'] ?>')"></div>
                    <div class="reviews-figure__title"><?php echo $reviews[0]['name'] ?></div>
                    <div class="reviews-figure__desc"><?php echo $reviews[0]['description'] ?></div>
                  </div>
                </div>
                
                <div class="reviews-preview__date">
                  <div class="reviews-date">
                    <?php echo $reviews[0]['date'] ?>
                  </div>
                </div>

                <div class="reviews-preview__video">
                  <div
                    class="reviews-video"
                    style="display: <?php echo ($reviews[0]['video'] ? 'block' : 'none') ?>"
                  >
                    <?php echo $reviews[0]['video'] ?>
                  </div>
                </div>

                <div class="reviews-preview__content">
                  <div class="reviews-excerpt">
                    <?php echo $reviews[0]['excerpt'] ?>
                  </div>
                </div>

                <div class="reviews-preview__more">
                  <button
                    class="reviews-more"
                    style="display: <?php echo ($reviews[0]['content'] ? 'block' : 'none') ?>"
                  >
                    читать отзыв полностью
                  </button>
                </div>

                <div class="reviews-preview__nav">
                  <div class="reviews-nav">
                    <button class="reviews-nav__left"></button>
                    <button class="reviews-nav__right"></button>
                  </div>
                </div>
              </div>

              <div class="reviews__send">
                <button class="ui-button-primary" data-hystmodal="#modal-review-form">
                  Добавьте<span class="reviews-reviews__send-pronoun"> свой</span> отзыв
                  <span class="ui-button-primary__plus"></span>
                </button>
              </div>
            
            </div>
          </div>
        </div>
      </section>
              
      <div class="reviews-details">
        <button class="reviews-details__close"></button>
        <div class="reviews-details__figure">
          <div class="reviews-details__figure-image" style="background-image: url('<?php echo $reviews[0]['image']['url'] ?>')"></div>
        </div>
        <div class="reviews-details__content">
          <div
            class="reviews-details__content-video"
            style="display: <?php echo ($reviews[0]['video'] ? 'block' : 'none') ?>"
          >
            <?php echo $reviews[0]['video'] ?>
          </div>
          <div class="reviews-details__content-text">
            <?php echo $reviews[0]['content'] ?>
          </div>
        </div>
      </div>

      <div class="hystmodal" id="modal-review" aria-hidden="true">
        <div class="hystmodal__wrap">
          <div class="hystmodal__window" role="dialog" aria-modal="true">
            <button data-hystclose class="hystmodal__close"></button>

            <div class="hystmodal__title" id="modal-review-title">
            </div>

            <div class="hystmodal__content" id="modal-review-content">
            </div>
          </div>
        </div>
      </div>
    
      <?php $contacts = get_field('theme_contacts_items', 'options') ?>
      <section class="section-contacts" data-scrollspy-section id="contacts">
        <div class="ui-container">
          <div class="section-contacts__title">Контакты</div>

          <div class="contacts-body">
            <div class="contacts-body__groups">
              <?php foreach ($contacts as $contact): ?>
              <div class="contacts-group">
                <div class="contacts-group__title">
                  <?php echo $contact['title'] ?>
                </div>
                <div class="contacts-group__address">
                  <?php echo $contact['address'] ?>
                </div>
                <div class="contacts-group__data">
                  <?php foreach ($contact['data'] as $data): ?>
                  <div class="contacts-group__data-item contacts-group__data-item_<?php echo $data['type'] ?>">
                    <?php
                      if ($data['type'] === 'email') {
                        echo '<a href="mailto:' . $data['value'] . '">' . $data['value'] . '</a>';
                      } else if ($data['type'] === 'phone') {
                        echo '<a href="tel:' . $data['value'] . '">' . $data['value'] . '</a>';
                      } else {
                        echo $data['value'];
                      }
                    ?>
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
              <?php endforeach; ?>
            </div>

            <div class="contacts-body__title">
              Обратная связь
            </div>
          </div>

          <form action="/wp-json/contact-form-7/v1/contact-forms/36/feedback" method="post" class="contacts-form js-form">
            <div class="contacts-form__process">
              <div class="contacts-form__input">
                <span class="wpcf7-form-control-wrap your-phone">
                  <label class="ui-input-field">
                    <input
                      type="text"
                      class="ui-input-field__input"
                      name="your-phone"
                      data-inputmask="'mask': '+7 (999) 999-99-99'"
                      placeholder="+7 (___) ___-__-__"
                    />
                    <span class="ui-input-field__label">Введите ваш номер телефона</span>
                  </label>
                </span>
              </div>
              <div class="contacts-form__submit">
                <button class="ui-button-secondary" type="submit">
                  Хочу проконсультироваться
                </button>
              </div>
            </div>

            <div class="contacts-form__success">
              <div class="contacts-form-result contacts-form-result_success">
                <div class="contacts-form-result__head">
                  <div class="contacts-form-result__head-icon"></div>
                  <div class="contacts-form-result__head-title">
                    Ваша заявка успешно отправлена
                  </div>
                </div>
                <div class="contacts-form-result__body">
                  <div class="contacts-form-result__body-text">
                    Через 2 минуты мы Вам перезвоним
                  </div>
                  <div class="contacts-form-result__body-close wpcf7-form-status-reset">
                    Закрыть окно
                  </div>
                </div>
              </div>
            </div>

            <div class="contacts-form__failure">
              <div class="contacts-form-result contacts-form-result_failed">
                <div class="contacts-form-result__head">
                  <div class="contacts-form-result__head-icon"></div>
                  <div class="contacts-form-result__head-title">
                    Возникла ошибка
                  </div>
                </div>
                <div class="contacts-form-result__body">
                  <div class="contacts-form-result__body-text">
                    Не удалось отправить сообщение
                  </div>
                  <div class="contacts-form-result__body-close wpcf7-form-status-reset">
                    Закрыть окно
                  </div>
                </div>
              </div>
            </div>
          </form>

        </div>
      </section>

      <?php get_template_part('partials/footer') ?>
    </div>
  </body>
</html>
