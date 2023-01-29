<?php get_header(); ?>
<!--==============================================================
    first__view
==============================================================-->
<div class="first__view">
    <img src="<?php echo get_template_directory_uri(); ?>./images/Top__img/first__view.jpg" alt="ファーストビュー画像">
    <div class="wrapper">
    <p>Web Designer<br>
        Ryohei Takahashi's Portfolio</p>
    </div>
</div>


<!--==============================================================
Service
============================================================== -->
<div class="wrapper">
<section class="Service">
    <div class="section__title fadein">
    <h2>Service</h2>
    <p>出来ること</p>
</div>

        <ul class="Service__list">
            <li>
                <img src= "<?php echo get_template_directory_uri(); ?>/images/Top__img/Service__Webdesign.png" alt="Webデザイン画像">
                <h3>Webデザイン</h3>
                <p>1ページで完結するランディングページから、複数ページからなるコーポレートサイトまで幅広く制作致します。お客様から頂いた情報をもとに課題を解決できるデザインを提案し、制作致します。</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Service__coding.png" alt="コーディング画像">
                <h3>コーディング</h3>
                <p>作成したサイトの目的やデザインの意図に沿って適切なコーディングを行います。保守性、汎用性に優れたコーディングを心掛けています。</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Service__WordPress.png" alt="WordPress画像">
                <h3>WordPress</h3>
                <p>ホームページをWordPressで作成致します。お客様ご自身での運用や、記事の更新や投稿を簡単に行えるサイトを作成致します。</p>
            </li>
        </ul>

    <div class="button__more">
        <a href="<?php echo esc_url(home_url('/service/')); ?>">詳しく見る</a>
    </div>

</section>
</div>
<!-- wrapper  -->

<!--==============================================================
AboutMe
============================================================== -->
<section class="AboutMe">
    <div class="wrapper">
    <div class="section__title fadein">
        <h2>About</h2>
        <p>制作者について</p>
    </div>

    <div class="AboutMe__introduction">
        <div class="AboutMe__img--left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/AboutMe__img.png" alt="自己紹介、画像">
        </div>

        <div class="AboutMe__text--right">
            <p>はじめまして。高橋遼平と申します。
                1987年生まれ。自分の力で作ったものを形にして人に届けて仕事にしたい
                と思いWEB制作の道を歩みました。
                現在一児の父。子供と同じようにクライアント様の悩みや課題と向き合い共に解決することをモットーとしています。
            </p>
        </div>
    </div>
    <div class="button__more">
        <a href="<?php echo esc_url(home_url('/about/')); ?>">詳しく見る</a>
    </div>
</div>
</section>

<!--==============================================================
Works
============================================================== -->
<div class="wrapper">
    <section class="Works">
        <div class="section__title fadein">
            <h2>Works</h2>
            <p>制作実績</p>
        </div>

    <ul>
        <li>
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Works_Kindergarden.png" alt="幼稚園サイト画像">
                <p>幼稚園サイト作成</p>
            </a>
            </li>
        <li>
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Works__Sneakers.png" alt="スニーカー専門店の画像">
                <p>スニーカー専門店のサイト作成</p>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Works__ProfileSite.png" alt="プロフィールサイト画像">
                <p>プロフィールサイト作成</p>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Works__Dogrun.png" alt="ドッグランサイト画像">
                <p>ドッグランのサイト作成</p>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Works__Officedesign.png" alt="オフィスデザイン会社の画像">
                <p>オフィスデザイン会社のサイト作成</p>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Works__CoffieSite.png" alt="カフェのサイト画像">
                <p>カフェのサイト作成</p>
            </a>
        </li>
    </ul>

    <div class="button__more">
        <a href="<?php echo esc_url(home_url('/works/')); ?>">詳しく見る</a>
    </div>
    </section>
</div>

<!--==============================================================
contact
============================================================== -->
<div class="Contact">
    <div class="section__title fadein">
        <h2>Contact</h2>
        <p>お問い合わせ</p>
    </div>

    <p>お仕事のご依頼やご相談はこちら<br>
        お気軽にご連絡ください！
    </p>
    <div class="wrapper">
        <div class="button__more ">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>