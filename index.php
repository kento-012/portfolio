<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTFOLIO</title>
    <!-- フォント読み込み -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <!-- cssの読み込み -->
    <link rel="stylesheet" href="https://use.typekit.net/fuk1nmg.css">
    <link rel="stylesheet" href="css/cssreset-min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/takechi.css">
    <!-- リセットCSS -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <!-- slick.cssの読み込み -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <!-- lightbox.css読み込み -->
    <link rel="stylesheet" href="css/lightbox.css">
</head>

<body>
    <?php include "dbConfig.php"; ?>
    <?php
    // 作品情報を取得
    $sql = "SELECT * FROM works";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $works = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php include "header.html"; ?>

    <!-- メイン -->
    <main>
        <!-- TOP -->
        <div class="area_top_view">
            <div class="container">
                <div class="top_title js_lp">
                    <h1>KENTO UCHIDA</h1>
                </div>
                <div class="sub_title js_lp">
                    <h2>portfolio</h2>
                </div>
                <div class="top_caption js_lp">
                    <p>明星大学デザイン学部の内田健斗です。</p>
                    <p>学部では企画の立案やプレゼンを学んでいますが、ある授業からプログラミングに興味を持ち、独学でプログラミングを始めました。</p>
                    <p>今では情報学部の授業に参加するなど、日々プログラミングを学んでいます。</p>
                    <p>このポートフォリオではプログラミングを使ったものとデザイン学部で取り組んだものを紹介しています。</p>
                </div>
            </div>
        </div>

        <div class="js_fade">
            <section class="area_home_feature">
                <div class="container">
                    <div class="head_home">
                        <a id="works">
                            <h2 class="ttl">WORKS</h2>
                        </a>
                    </div>

                    <!-- WORKS カルーセル -->
                    <ul class="slider">
                        <?php foreach ($works as $work): ?>
                            <a href="work.php?id=<?= htmlspecialchars($work['id'], ENT_QUOTES, 'UTF-8') ?>">
                                <li><img src="images/work/<?= htmlspecialchars($work['image_path_1'], ENT_QUOTES, 'UTF-8') ?>" alt=""></li>
                                <p><?= htmlspecialchars($work['title'], ENT_QUOTES, 'UTF-8') ?></p>
                            </a>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </section>

            <!-- "more"ボタン WORKS-->
            <div class="area_more_button">
                <div class="container">
                    <div class="more">
                        <a href="works_table.php">
                            <button class="square_button">more</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="js_fade">
            <!-- PROFILE -->
            <section class="area_home_profile">
                <div class="container">
                    <div class="head_home">
                        <a id="profile">
                            <h2 class="ttl">PROFILE</h2>
                        </a>
                    </div>

                    <div class="body_home">
                        <div class="layout_2_div">
                            <div class="img">
                                <img src="images/top_kento.jpg">
                            </div>
                            <div class="text_home">
                                <p class="ttl">内田健斗</p>
                                <div class="description">
                                    <p>明星大学デザイン学部デザイン学科</p>
                                    <p>リアルタイムに動くものが好きでデザインの知識を活かしつつプログラミングで作品を作ることが多いです。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- "more"ボタン プロフィール-->
            <div class="area_more_button">
                <div class="container">
                    <div class="more">
                        <a href="profile.php">
                            <button class="square_button">more</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "footer.html" ?>

    <!-- jqueryの読み込み -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <!-- slickの読み込み -->
    <script src="js/slick.min.js"></script>
    <!-- jsの読み込み -->
    <script src="js/main.js"></script>
</body>

</html>