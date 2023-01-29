<?php 
/*
Template Name: Service
*/

get_header('service'); ?>
<!--==============================================================
Service
============================================================== -->
<div class="wrapper">
    <section class="Service">
        <div class="section__title fadein">
            <h2>Service</h2>
            <p>出来ること</p>
        </div>
        
        <ul>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Service__img/Service__webdesign.png" alt="デザインと制作、画像">
                <div class="Service__text">
                    <h3>デザインと制作</h3>
                    <p>1ページで完結するランディングページから、複数ページからなるコーポレートサイトまで幅広く制作致します。
                        お客様から頂いた情報を基にデザインを提案し、制作致します。
                    </p>
                    <dl>
                    <div class="fee__list">
                        <dt>トップページ</dt>
                        <dd>￥25,000～</dd>
                    </div>
                    <div class="fee__list">
                        <dt>下層ページ</dt>
                        <dd>￥10,000～</dd>
                    </div>
                    <div class="fee__list">
                        <dt>ランディングページ</dt>
                        <dd>￥30,000～</dd>
                    </div>
                    </dl>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Service__img/Service__coding.png" alt="コーディング画像">
                <div class="Service__text">
                    <h3>コーディング</h3>
                    <p>作成したサイトの目的やデザインの意図に沿って適切なコーディングを行います。保守性、汎用性に優れたコーディングを心掛けています。
                    </p>
                    <dl>
                        <div class="fee__list">
                            <dt>トップページ</dt>
                            <dd>￥15,000～</dd>
                        </div>
                        <div class="fee__list">
                            <dt>下層ページ</dt>
                            <dd>￥8,000～</dd>
                        </div>
                        <div class="fee__list">
                            <dt>ランディングページ</dt>
                            <dd>￥20,000～</dd>
                        </div>
                    </dl>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Service__img/Service__wordpress.png" alt="WordPress">
                <div class="Service__text">
                    <h3>WordPress</h3>
                    <p>ホームページをWordPressで作成致します。お客様ご自身での運用や、記事の更新や投稿を簡単に行えるサイトを作成致します。
                    </p>
                    <dl>
                    <div class="fee__list">
                        <dt>新規サイトの作成</dt>
                        <dd>￥70,000～</dd>
                    </div>
                    <div class="fee__list">
                        <dt>既存サイトのWordPress化</dt>
                        <dd>￥30,000～</dd>
                    </div>
                        <div class="fee__list">
                        <dt>プラグイン導入</dt>
                        <dd>￥10,000～</dd>
                    </div>
                    </dl>
            </li>
        </ul>
    </section>
<!--==============================================================
Flow
============================================================== -->
    <section class="Flow">
        <div class="section__title fadein">
            <h2>Flow</h2>
            <p>制作の流れ</p>
        </div>
        
        <ul>
            <li>
                    <div class="Flow__circles">
                        <p>STEP 1</p>
                        <span class="circle1 fadein"></span>
                        <span class="circle2 fadein"></span>
                        <span class="circle3 fadein"></span>
                    </div>
                    
                    <div class="Flow__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Service__img/Flow__contact.png" alt="お問い合わせ、画像">
                    </div>
                <div class="Flow__text">
                    <h3>お問い合わせ</h3>
                    <p>お問い合わせから必須事項をご記入の上、ご連絡ください。検討でのご相談や悩みまでお気軽にご連絡くださいませ。</p>
            </li>
            <li>
                    <div class="Flow__circles">
                        <p>STEP 2</p>
                        <span class="circle1 fadein"></span>
                        <span class="circle2 fadein"></span>
                        <span class="circle3 fadein"></span>
                    </div>
                    
                    <div class="Flow__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Service__img/Flow__hearing.png" alt="ヒアリング、画像">
                    </div>
                <div class="Flow__text">
                    <h3>ヒアリング</h3>
                    <p>お客様のご要望や課題、お悩みなどを聞き、頂いた情報をもとに、目標達成にはどのようなサイトを制作すれば良いのかを明確にします。</p>
            </li>
            <li>
                
                    <div class="Flow__circles">
                        <p>STEP 3</p>
                        <span class="circle1 fadein"></span>
                        <span class="circle2 fadein"></span>
                        <span class="circle3 fadein"></span>
                    </div>
                    
                    <div class="Flow__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Service__img/Flow__estimation.png" alt="お見積もり、画像">
                    </div>
                <div class="Flow__text">
                    <h3>お見積もり</h3>
                    <p>ヒアリングをもとに、サイトの構成やデザインのイメージ、ご依頼範囲、金額、納期、納品方法などをご提案させて頂きます。納得頂ければ契約となります。</p>
            </li>
            <li>
                    <div class="Flow__circles">
                        <p>STEP 4</p>
                        <span class="circle1 fadein"></span>
                        <span class="circle2 fadein"></span>
                        <span class="circle3 fadein"></span>
                    </div>
                    
                    <div class="Flow__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Service__img/Flow__making.png" alt="制作制作、画像">
                    </div>
                <div class="Flow__text">
                    <h3>制作</h3>
                    <p>契約後、サイト制作を致します。基本的な流れはデザイン作成し、コーディングを行います。お客様のイメージに沿うように、お客様との進捗をお伝えし、都度確認頂き修正致します。</p>
            </li>
            <li>
                    <div class="Flow__circles">
                        <p>STEP 5</p>
                        <span class="circle1 fadein"></span>
                        <span class="circle2 fadein"></span>
                        <span class="circle3 fadein"></span>
                    </div>
                    
                    <div class="Flow__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Service__img/Flow__delively.png" alt="納品、画像">
                    </div>
                <div class="Flow__text">
                    <h3>納品</h3>
                    <p>全ての工程を終えましたらお客様に確認後、納品させて頂きます。納品方法はサーバーにアップ、もしくはzipファイルにて納品となります。</p>
            </li>
        </ul>
    </section>
</div>

<?php get_template_part('contact-part'); ?>
<?php get_footer(); ?>