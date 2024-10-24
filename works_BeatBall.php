<?php

include "dbConfig.php";

// パラメータ取得とSQL実行
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    echo "Invalid ID.";
    exit;
}

$sql = "SELECT * FROM works WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$work = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$work) {
    echo "Work not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($work['title'], ENT_QUOTES, 'UTF-8') ?></title>
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
</head>

<body>
    <?php include "header.html"; ?>

    <main>
        <!-- ページタイトル -->
        <div class="area_works_view">
            <div class="container">
                <h2 class="page_title">WORKS</h2>
            </div>
        </div>

        <!-- worksコンテンツ -->
        <div class="area_works_article">
            <div class="works_contents container">
                <article>
                    <header class="works_info">
                        <h3 class="works_title"><?= htmlspecialchars($work['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                        <p class="works_tech">使用技術：Processing、Arduino</p>
                    </header>

                    <section class="lead">
                        <p>
                            心拍の情報の可視化が課題の授業で、ArduinoとProcessingを用い、データのビジュアライゼーションを行いました。
                        </p>
                    </section>

                    <!-- 動画 -->
                    <div class="video_test">
                        <iframe width="1920" height="1080"
                            src="https://www.youtube.com/embed/PDaTK3Ymhes?si=HuvK3JGzm1s8Qmh-"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <!-- グリッド -->
                    <div class="article_imgae_grid">
                        <div class="item">
                            <a href="images/works_images/BeatBall_04.jpg" data-lightbox="group"><img
                                    src="images/works_images/BeatBall_04.jpg"></a>
                            <p class="caption">経過時間や分間の脈数も表示</p>
                        </div>
                        <div class="item">
                            <a href="images/works_images/BeatBall_03.jpg" data-lightbox="group"><img
                                    src="images/works_images/BeatBall_03.jpg"></a>
                            <p>パルスオキシメーター、参考（https://www.mikroe.com/heart-rate-click）</p>
                        </div>
                    </div>

                    <h4>作品概要</h4>
                    <p>
                        Arduinoに接続したパルスセンサーで心拍の情報を検知し、その情報をProcessingに送り、可視化を行いました。
                    </p>
                    <h4>制作意図</h4>
                    <p>
                        心拍の可視化ということで、血中に漂う赤血球をイメージしました。
                        脈がなるごとに、赤血球に力が働き、動き出します。そしてその後は抵抗を感じ、徐々に減速していきます。
                    </p>

                    <h4>工夫した点</h4>
                    <ul class="ingenuity">
                        <li>うようよ動く赤血球の、有機的な動き</li>
                        <li>脈がくる時、加速度の他に色の明度を上げ、視覚的にわかりやすくした。</li>
                        <li>パーティクルの数、大きさ、色を何度も変更し、わかりやすさを出した</li>
                    </ul>

                    <div class="sourceURL">
                        <p>Github : <a href="https://github.com/kento-012/BeatBall">kento-012/BeatBall</a></p>
                    </div>
                </article>

                <aside>
                    <h5 class="aside_works_title">WORKS</h5>
                    <ul class="aside_works">
                        <li><a href="works_pilot.html">PILOT展</a></li>
                        <li><a href="works_HungaReCollection.html">Hunga -Re- Collection展</a></li>
                        <li><a href="works_BeatBall.html">心拍のビジュアライゼーション</a></li>
                        <li><a href="works_kikaku5.html">自治体との連携授業</a></li>
                        <li><a href="works_HangOut.html">建築分野とのコラボレーション・ハッカソン「モノの移り変わり」</a></li>
                        <li><a href="works_mediaB.html">ゲームの制作</a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </main>

    <?php include "footer.html" ?>

    <!-- jquery読み込み -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <!-- ligitbox読み込み -->
    <script src="js/lightbox.js" type="text/javascript"></script>
</body>

</html>