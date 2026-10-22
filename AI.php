<?php
// hours.php - 靠泊時間判斷網頁
$result = '';
$input = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = trim($_POST['hours'] ?? '');

    // 檢查是否為有效正整數或正小數
    if ($input === '') {
        $result = '請輸入靠泊時間';
    } elseif (!is_numeric($input)) {
        $result = '請輸入阿拉伯正整數或小數';
    } elseif ($input < 0) {
        $result = '靠泊時間不能為負數';
    } else {
        $hours = floatval($input);
        if ($hours >= 20) {
            $result = '長時間靠泊';
        } else {
            $result = '一般靠泊';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>靠泊時間判斷</title>
    <style>
        body { font-family: "Microsoft JhengHei", Arial, sans-serif; max-width: 500px; margin: 50px auto; padding: 20px; }
        input[type="text"] { padding: 8px; width: 200px; font-size: 16px; }
        input[type="submit"] { padding: 8px 20px; font-size: 16px; cursor: pointer; }
        .result { margin-top: 20px; font-size: 20px; font-weight: bold; color: #0066cc; }
        .error { color: #cc0000; }
    </style>
</head>
<body>
    <h2>靠泊時間判斷系統</h2>
    <form method="post">
        <label>請輸入一般靠泊時間（小時）：</label><br><br>
        <input type="text" name="hours" value="<?= htmlspecialchars($input) ?>" placeholder="例如：19.5 或 20">
        <input type="submit" value="判斷">
    </form>

    <?php if ($result !== ''): ?>
        <div class="result <?= (strpos($result, '請') === 0 || strpos($result, '不能') !== false) ? 'error' : '' ?>">
            <?= htmlspecialchars($result) ?>
        </div>
    <?php endif; ?>
</body>
</html>