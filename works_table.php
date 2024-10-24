<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORKS</title>
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
    <?php include "dbConfig.php"; ?>
    <?php
    // 作品情報を取得
    $sql = "SELECT * FROM works";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $works = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php include "header.html"; ?>

    <main>
        <!-- ページタイトル -->
        <div class="area_works_view">
            <div class="container">
                <h2 class="page_title">WORKS</h2>
            </div>
        </div>

        <!-- WORKSグリッド -->
        <div class="area_works_grid js_lp">
            <div class="container grid">
                <?php foreach ($works as $work): ?>
                    <div class="item">
                        <a href="work.php?id=<?= htmlspecialchars($work['id'], ENT_QUOTES, 'UTF-8') ?>">
                            <img src="images/work/<?= htmlspecialchars($work['image_path_1'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($work['title'], ENT_QUOTES, 'UTF-8') ?>">
                            <p><?= htmlspecialchars($work['title'], ENT_QUOTES, 'UTF-8') ?></p>
                        </a>
                    </div>
                <?php endforeach; ?>
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