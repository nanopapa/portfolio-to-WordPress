<?php 
/*
Template Name: works
*/

get_header(); ?>
<!--==============================================================
About
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
        'post_per-page' => 30,
        'nopaging'  => true,
    );
    $the_query = new WP_Query($args);
    if($the_query->have_posts()):
    ?>
        <ul>
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>
            <li>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo CFS()->get('works-img'); ?>" alt="幼稚園サイト画像">
                <p><?php echo CFS()->get('works-name'); ?></p>
            </a>
                </a>
            </li>
            <?php endwhile; endif; ?>
    </ul>
        
</div>
<?php get_template_part('contact-part'); ?>
<?php get_footer(); ?>