<?php 
/*
Template Name: About
*/
get_header(); ?>

<!--==============================================================
About
============================================================== -->
<div class="wrapper">
    <section class="About">
            <div class="section__title fadein">
                <h2> About</h2>
                <p>制作者について</p>
            </div>
            <div class="introduction">
                <img src="<?php echo get_template_directory_uri(); ?>/images/About__img/About__img.png" alt="自己紹介画像">

                <div class="introduction__text">
                    <h3>高橋遼平<span>(たかはし りょうへい)</span></h3>

                    <p>1987年生まれ、栃木県出身。自分の力で作ったものを形にして人に届けて仕事にしたいと思いWEB制作の道を歩みました。
                        現在一児の父。子供が生まれてからは育児の大変さを知り、日々成長する喜びと変化に奮闘しています。</p>

                    <p>Web制作も子供と同じように移り変わりが激しく、柔軟な対応が迫られますが
                        どんなに時代が変わっても一貫した姿勢でお客様の悩みに真摯に向き合い問題解決できるようなWeb制作者であることを信条に日々励んでいます。</p>
                </div>
            </div>

            <div class="accordion">

                <div class="accordion__question">
                    <h4>趣味</h4>
                    <div class="cross__line">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            
                <div class="accordion__answer">
                    <p><span>旅行</span><br>
                        行った（タイ、カンボジア、台湾、ブータン）行きたい（ヨーロッパ、ハワイ、アフリカ)</p>
                </div>
                <div class="accordion__question">
                    <h4>将来の夢</h4>
                    <div class="cross__line">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            
                <div class="accordion__answer">
                    <p>家族を連れて世界一周！</p>
                </div>
                <div class="accordion__question">
                    <h4>性格</h4>
                    <div class="cross__line">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            
                <div class="accordion__answer">
                    <p>堅実（一発で大きな事より小さくコツコツと大きくする）穏やか（とよく言われる）</p>
                </div>
            
            </div>
</div>
    </section>
</div>
<!--==============================================================
concept
============================================================== -->
    <section class="Concept">
        <div class="wrapper">
            <div class="section__title fadein">
                <h2>Concept</h2>
                <p>Web制作への想い</p>
            </div>

            <p class="Concept__text">私が一番大切にしていることは、お客様の悩みも期待も全て受け止め問題を解決するパートナーでありたいという事です。</p>
                <p class="Concept__text">自分の作った製品を多くの人に知って頂きたい！自分の事や仕事をもっと知って欲しい！など、さまざまな期待や目標を抱えていると思います。</p>
                <p class="Concept__text">それと同時にその過程で多くの不安や課題を抱えていると思います。私は単にサイトを作る人ではなく、その不安を親身になって受け入れ、その課題に向けて共に歩める制作者になれれば幸いです。
                </p>
        </div>
    </section>
<!--==============================================================
Skills
============================================================== -->
<div class="wrapper">
    <section class="Skills">
        <div class="section__title fadein">
            <h2>Skills</h2>
            <p>スキル</p>
        </div> 

        <ul>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/About__img/Skills__HTML.png" alt="スキル、HTML">
                <div class="Skills__text">
                    <h3>HTML</h3>
                    <p>サイト全体を考慮しバランスの良いマークアップを心掛け、保守性、汎用性に優れたマークアップを心掛けています。</p>
                </div>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/About__img/Skills__CSS.png" alt="スキル、CSS">
                <div class="Skills__text">
                    <h3>CSS</h3>
                    <p>スマートフォンやタブレットなどの画面にも対応できるレスポンシブデザインにも対応致します。SCSSを使用し効率的なCSSを作成致します。</p>
                </div>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/About__img/Skills__JavaScript.png" alt="スキル、JavaScript">
                <div class="Skills__text">
                    <h3>JavaScript</h3>
                    <p>JavaScript(jQuery,DOM)を用いてサイトにスライダーやハンバーガーメニューの実装などを作成し、躍動感のあるサイトを作成致します。</p>
                </div>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/About__img/Skills__WordPress .png" alt="スキル、WordPress">
                <div class="Skills__text">
                    <h3>HTML</h3>
                    <p>サイト全体を考慮しバランスの良いマークアップを心掛け、保守性、汎用性に優れたマークアップを心掛けています。</p>
                </div>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/About__img/Skills__Photoshop.png" alt="スキル、Photoshop">
                <div class="Skills__text">
                    <h3>Photoshop</h3>
                    <p>主に画像の加工、編集などを行います。グラデーションを追加したり画像の切り抜きなども可能です。</p>
                </div>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/About__img/Skills__Figma.png" alt="スキル、Figma">
                <div class="Skills__text">
                    <h3>Figma</h3>
                    <p>ワイヤーフレーム作成に使用します。お客様から頂いた情報を基にサイトの設計図を作成し、お客様のイメージの摺り合わせを行います。</p>
                </div>
            </li>
        </ul>
    </section>
</div>
<?php get_template_part('contact-part'); ?>
<?php get_footer(); ?>