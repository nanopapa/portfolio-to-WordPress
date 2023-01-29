<?php get_header(); ?>
<!--==============================================================
Works
============================================================== -->
<div class="wrapper">
    <section class="Works">
        <div class="section__title fadein">
            <h2>Works</h2>
            <p>制作実績</p>
        </div>
        
        <?php 
    $args = array(
        'post_type' => 'works',
        'post_per-page' => 1
    );
    ?>
    <div class="container">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo CFS()->get('swiper-img1'); ?>" alt="幼稚園サイト スライド画像1"></div>
                <div class="swiper-slide"><img src="<?php echo CFS()->get('swiper-img2'); ?>" alt="幼稚園サイト スライド画像2"></div>
                <div class="swiper-slide"><img src="<?php echo CFS()->get('swiper-img3'); ?>" alt="幼稚園サイト スライド画像3"></div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
    </div>

        <dl class="Works__details">
            <dt>URL</dt>
            <dd><?php echo CFS()->get('URL'); ?></dd>
            <dt>サイトの概要</dt>
            <dd><?php echo CFS()->get('description'); ?></dd>
            <dt>使用した言語/ツール</dt>
            <dd><?php echo CFS()->get('tools'); ?></dd>
            <dt>作業範囲</dt>
            <dd><?php echo CFS()->get('workscop'); ?></dd>
        </dl>

    </section>
</div>

<?php get_template_part('contact-part'); ?>
<?php get_footer(); ?>