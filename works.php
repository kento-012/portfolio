<?php
include "dbConfig.php";

// 作品情報を取得
$sql = "SELECT * FROM works";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$works = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ポートフォリオサイト</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>ポートフォリオ</h1>



    <div class="grid-container">
        <?php foreach ($works as $work): ?>
            <div class="grid-item">
                <a href="work.php?id=<?= htmlspecialchars($work['id'], ENT_QUOTES, 'UTF-8') ?>">
                    <img src="images/<?= htmlspecialchars($work['image_path_1'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($work['title'], ENT_QUOTES, 'UTF-8') ?>">
                </a>
                <h2><?= htmlspecialchars($work['title'], ENT_QUOTES, 'UTF-8') ?></h2>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>