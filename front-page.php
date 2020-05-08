<?php get_header(); ?>

<section class="top">
    <div class="top__ttl">kappa works</div>
    <div class="top__ttl2">Portfolio</div>
</section>

<section class="scroll">
    <span class="vertical"></span>
    <span class="horizonal"></span>
    <p class="scroll__sent">scroll</p>
</section>


<section class="about mycontainer card">
   <h3 class="card__ttl">About</h2>
    <div class="container">
        <div class="photo"></div>
        <p class="about__sent"><span class="about__name">川野　翔太郎</span><br>サイトにご訪問いただきありがとうございます。関西大学4回生で在学中の川野翔太郎と申します。このサイトでは学習してきた内容等を掲載していきます。よろしくお願いします。
        企業の人事様に関しては採用の参考にしていただけるとありがたいです。<br>
        さらに詳しい情報はwantedlyに掲載しています。<br>
        <a href="https://www.wantedly.com/users/115977563" target="_blank"><span class="blue">wantedlyプロフィールページをみる</span></a>
    </p>
    </div>
</section>

<section class="news mycontainer card">
    <h3 class="card__ttl">News</h3>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <article class="news__item" <?php post_class(); ?>>
          <a href="<?php the_permalink(); ?>">
           <h4 class="news__ttl"><?php the_title(); ?></h4>
            </a>
        </article>
    <?php endwhile; endif; ?>
    <button type="button" class="news-button" onclick="javascript:location.href='<?php echo esc_url(home_url('blog')); ?>';">もっと詳しく見る</button>
</section>




<section class="help mycontainer card">
    <h3 class="card__ttl">出来ること（スキル等）</h3>
    <p>HTML,CSS:レスポンシブデザイン、デザインをみながらのコーディング、CSSアニメーションなど<br>
    javascript :vue.js アニメーション　jquery<br>
    php: wordpressで使用しました。　laravelは学習中です。<br>
    その他:git ,unix ,github,扱えます
</p>
</section>

<?php get_footer(); ?>