<!DOCTYPE html>
<!-- <html lang="ja"> -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>
    <!-- cssの読み込み -->
    <link rel="stylesheet" href="https://use.typekit.net/fuk1nmg.css">
    <link rel="stylesheet" href="css/cssreset-min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/takechi.css">
    <!-- リセットCSS -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <!-- slick.cssの読み込み -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <!-- フォント読み込み -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <!-- lightbox.css読み込み -->
    <link rel="stylesheet" href="css/lightbox.css">
</head>

<body>
    <?php include "header.html"; ?>

    <main>
        <!-- ページタイトル -->
        <div class="area_works_view">
            <div class="container">
                <h2 class="page_title">PROFILE</h2>
            </div>
        </div>

        <div class="area_profile_article">
            <div class="container">
                <div class="profile_layout_2">
                    <aside class="aside_profile">
                        <img src="images/top_kento.jpg">
                        <p class="ttl">内田健斗</p>
                        <p>メールアドレス : 21z1016@stu.meisei-u.ac.jp</p>
                        <p>githubアカウント : https://github.com/kento-012</p>
                    </aside>

                    <article class="article_profile">
                        <div class="profile_info">
                            <dl>
                                <dt>所属：</dt>
                                <dd>明星大学デザイン学部デザイン学科</dd>
                                <dt>専攻：</dt>
                                <dd>メディアデザイン専攻</dd>
                                <dt>資格：</dt>
                                <dd>
                                    <p>アドビ認定プロフェッショナル Photoshop 2022</p>
                                    <p>アドビ認定プロフェッショナル Illustrator 2020</p>
                                </dd>
                                <dt>使用言語：</dt>
                                <dd>HTML、CSS、JavaScript、PHP、Processing、Arduino IDE</dd>
                            </dl>
                        </div>

                        <div class="profile_contents">
                            <p>学部では企画の立案やプレゼンの方法を学んでいます。</p>
                            <p>同じことを伝える場合でもメディアによって受け取り方が違うことに面白さを感じ、メディアデザインを専攻しています。どのメディアを使って、どのように伝えるかを研究しています。</p>
                            <p>メディアの授業からプログラミングに興味を持ち始め、プログラミングで作品を作ることが多いです。</p>
                            <p>趣味は絵を描くことで、毎週通っている画塾ではデッサンをよくしています。</p>
                        </div>

                        <div class="article_imgae_grid">
                            <a href="images/profile_images/profile_01.jpg" data-lightbox="group"><img
                                    src="images/profile_images/profile_01.jpg"></a>
                            <a href="images/profile_images/profile_02.jpg" data-lightbox="group"><img
                                    src="images/profile_images/profile_02.jpg"></a>
                            <a href="images/profile_images/profile_03.jpg" data-lightbox="group"><img
                                    src="images/profile_images/profile_03.jpg"></a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>

    <?php include "footer.html" ?>

    <!-- jquery読み込み -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <!-- ligitbox読み込み -->
    <script src="js/lightbox.js" type="text/javascript"></script>
    <!-- jsの読み込み -->
    <script src="js/main.js"></script>
</body>

</html>