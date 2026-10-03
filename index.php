<?php
$title = 'PHP Test';
$message = 'It works!';
$time = date('H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: system-ui, sans-serif;
            background: #111;
            color: #eee;
        }
        .card {
            text-align: center;
            padding: 2.5rem 3rem;
            border-radius: 12px;
            background: #1c1c1c;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .5);
        }
        h1 {
            margin: 0 0 .5rem;
            font-size: 2rem;
        }
        .msg {
            color: #4ade80;
            font-size: 1.25rem;
            margin: 0 0 1rem;
        }
        .time {
            color: #888;
            font-size: .85rem;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1><?= htmlspecialchars($title) ?></h1>
        <p class="msg"><?= htmlspecialchars($message) ?></p>
        <p class="time">PHP <?= htmlspecialchars(PHP_VERSION) ?> &middot; <?= htmlspecialchars($time) ?></p>
    </div>
</body>
</html>