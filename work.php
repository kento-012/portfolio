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




$sql = "SELECT * FROM works";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$works = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
                        <!-- <p class="works_tech">使用技術：Processing、Arduino</p> -->
                    </header>

                    <!-- リード文 -->
                    <section class="lead">
                        <p><?= htmlspecialchars($work['lead_paragraph'], ENT_QUOTES, 'UTF-8') ?></p>
                    </section>

                    <!-- 動画 -->
                    <?php if (!empty($work['video_path'])): ?>
                        <div class="video_test">
                            <iframe width="1920" height="1080"
                                src="<?= htmlspecialchars($work['video_path'], ENT_QUOTES, 'UTF-8') ?>"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    <?php endif; ?>

                    <!-- グリッド -->
                    <div class="article_imgae_grid">
                        <?php
                        for ($i = 1; $i <= 4; $i++) {
                            $imagePathKey = 'image_path_' . $i;
                            $captionPathKey = 'caption_' . $i;
                            if (!empty($work[$imagePathKey])): ?>
                                <div class="item">
                                    <img src="images/work/<?= htmlspecialchars($work[$imagePathKey], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($work['title'], ENT_QUOTES, 'UTF-8') ?>">
                                    <p><?= htmlspecialchars($work[$captionPathKey], ENT_QUOTES, 'UTF-8') ?></p>
                                </div>
                        <?php endif;
                        }
                        ?>
                    </div>

                    <h4><?= htmlspecialchars($work['description_heading'], ENT_QUOTES, 'UTF-8') ?></h4>
                    <p><?= nl2br(htmlspecialchars($work['description'], ENT_QUOTES, 'UTF-8')) ?></p>

                    <h4><?= htmlspecialchars($work['description_heading'], ENT_QUOTES, 'UTF-8') ?></h4>
                    <p><?= nl2br(htmlspecialchars($work['description'], ENT_QUOTES, 'UTF-8')) ?></p>

                    <h4>工夫した点</h4>
                    <ul class="ingenuity">
                        <li>うようよ動く赤血球の、有機的な動き</li>
                        <li>脈がくる時、加速度の他に色の明度を上げ、視覚的にわかりやすくした。</li>
                        <li>パーティクルの数、大きさ、色を何度も変更し、わかりやすさを出した</li>
                    </ul>

                    <!-- 外部リンクが存在する場合に表示 -->
                    <div class="sourceURL">
                        <?php if (!empty($work['external_link']) && !empty($work['external_link_text'])): ?>
                            <p><a href="<?= htmlspecialchars($work['external_link'], ENT_QUOTES, 'UTF-8') ?>" target="_blank"><?= htmlspecialchars($work['external_link_text'], ENT_QUOTES, 'UTF-8') ?></a></p>
                        <?php endif; ?>
                    </div>

                </article>

                <aside>
                    <h5 class="aside_works_title">WORKS</h5>

                    <?php foreach ($works as $work): ?>
                        <ul class="aside_works">
                            <li><a href="work.php?id=<?= htmlspecialchars($work['id'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($work['title'], ENT_QUOTES, 'UTF-8') ?></a></li>
                        </ul>
                    <?php endforeach; ?>
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