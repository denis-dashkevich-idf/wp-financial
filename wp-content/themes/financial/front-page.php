<?php get_header(); ?>

<section class="promo">
  <div class="container">
    <div class="row">
      <div class="promo__info-block">
        <h1 class="promo__title" data-aos="fade-right"><?php the_field('title'); ?></h1>
        <p class="promo__info-txt"><?php the_field('subtitle'); ?></p>
        <div class="promo__btns">
          <?php
          $link = get_field('link');
          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
          ?>
            <a href="<?php echo esc_url($link_url); ?>" class="promo__cta btn btn_prime btn_round"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
          <a href="#" class="promo__learn-more btn btn_transparent">Learn More</a>
        </div>
      </div>
      <div class="promo__bg-block">
        <?php
        $image = get_field('bg');
        // var_dump($image);
        if (!empty($image)) : ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="promo__phone-img" loading="lazy">
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="pluses">
  <div class="container">
    <h2 class="pluses__title s-title"><?php the_field('pluses_title'); ?></h2>
    <p class="pluses__subtitle s-subtitle">Problems trying to resolve the conflict between
      the&nbsp;two&nbsp;major&nbsp;realms of Classical physics: Newtonian mechanics </p>
    <?php if (have_rows('pluses_cards')) : ?>
      <div class="row">
        <?php while (have_rows('pluses_cards')) : the_row(); ?>
          <div class="pluses__card plus-card" data-aos="flip-left" data-aos-duration="500">
            <img src="<?php the_sub_field('pluses_icon'); ?>" alt="pluse icon" class="plus-card__ico" loading="lazy">
            <p class="plus-card__title"><?php the_sub_field('pluses_title'); ?></p>
            <p class="plus-card__subtitle"><?php the_sub_field('pluses_subtitle'); ?></p>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<section class="reviews">
  <div class="container">
    <h2 class="reviews__title s-title">What Clients Say</h2>
    <p class="reviews__subtitle s-subtitle">Problems trying to resolve the conflict between
      the two major realms of Classical physics: Newtonian mechanics </p>

    <div class="reviews__slider swiper-container">
      <div class="swiper-wrapper">
        <?php if (have_rows('reviews')) : ?>
          <?php while (have_rows('reviews')) : the_row(); ?>

            <div class="reviews__slide review-card swiper-slide">
              <div class="review-card__inner">
                <img src="<?php the_sub_field('re_icon'); ?>" alt="user" class="review-card__img" loading="lazy">
                <p class="review-card__desc"><?php the_sub_field('re_desc'); ?></p>
                <div class="review-card__rate rate" data-mark="<?php the_sub_field('re_mark'); ?>">
                  <span class="rate__star"></span>
                  <span class="rate__star"></span>
                  <span class="rate__star"></span>
                  <span class="rate__star"></span>
                  <span class="rate__star"></span>
                </div>
                <p class="review-card__name">Regina Miles</p>
                <p class="review-card__position">Designer</p>
              </div>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>

  </div>
</section>

<div class="app">
  <div class="container">
    <h2 class="app__title s-title">Download Our App</h2>
    <p class="app__subtitle s-subtitle">Problems trying to resolve the conflict between
      the two major realms of Classical physics: Newtonian mechanics </p>
    <div class="app__row">
      <div class="app__card app__card_apple" data-aos="zoom-in">
        <p class="app__card-txt">Download on <br>
          App Store
        </p>
        <a href="#" class="app__card-link"></a>
      </div>
      <div class="app__card app__card_google" data-aos="zoom-in">
        <p class="app__card-txt">Download on <br>
          Google Play
        </p>
        <a href="#" class="app__card-link"></a>
      </div>
      <div class="app__card app__card_amazon" data-aos="zoom-in">
        <p class="app__card-txt">Download on <br>
          Google Play
        </p>
        <a href="#" class="app__card-link"></a>
      </div>
      <div class="app__card app__card_windows" data-aos="zoom-in">
        <p class="app__card-txt">Download on <br>
          Windows Store
        </p>
        <a href="#" class="app__card-link"></a>
      </div>
    </div>
  </div>
</div>

<section class="price">
  <div class="container">
    <h2 class="price__title s-title">Pricing</h2>
    <p class="price__subtitle s-subtitle">Problems trying to resolve the conflict between
      the two major realms of Classical physics: Newtonian mechanics </p>
    <div class="row">
      <div class="price__card price-card">
        <div class="price-card__info-block">
          <p class="price-card__title">free</p>
          <p class="price-card__txt">Most calendars are designed
            for teams. Slate is designed
            for freelancers who want
            a simple way </p>
        </div>
        <div class="price-card__price-block">
          <span class="price-card__price">0 <sup>$</sup> </span>
          <button class="price-card__get-btn btn btn_prime">Try for free</button>
        </div>
      </div>
      <div class="price__card price-card">
        <div class="price-card__info-block">
          <p class="price-card__title">standard </p>
          <p class="price-card__txt">Most calendars are designed
            for teams. Slate is designed
            for freelancers who want
            a simple way </p>
        </div>
        <div class="price-card__price-block">
          <span class="price-card__price">19 <sup>$</sup> </span>
          <button class="price-card__get-btn btn btn_prime">Try for free</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="spread">
  <div class="container">
    <div class="spread__row row">
      <div class="spread__info-block" data-aos="fade-right" data-aos-duration="1000">
        <h2 class="spread__title s-title">We Have Branches All
          Over The World</h2>
        <p class="spread__subtitle s-subtitle">The gradual accumulation of information about atomic and
          small-scale behaviour during the first quarter of the 20th
          century, which gave some indications about how small things
          do behave, produced an increasing confusion which was
          Heisenberg, and Born.</p>
      </div>
      <div class="spread__bg-block" data-aos="fade-top" data-aos-duration="1000">
        <img class="spread__bg-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/spread/pngwing 1.png" alt="World" loading="lazy">
      </div>
    </div>
  </div>
</section>

<section class="contacts">
  <div class="contacts__container container">
    <div class="contacts__inner">
      <?php echo do_shortcode( '[contact-form-7 id="9" title="Contact form 1"]' ); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>