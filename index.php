<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oleh's PHP project</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <h1>First PHP project!</h1>
    <?php
        $mark = 10;
    ?>

    <?php if ($mark >= 1 && $mark <= 3): ?>
    <p>Оцінка: Дуже погано</p>

    <?php elseif ($mark >= 4 && $mark <= 6): ?>
    <p>Оцінка: Погано</p>

    <?php elseif ($mark >= 7 && $mark <= 9): ?>
    <p>Оцінка: Добре</p>

    <?php elseif ($mark >= 10 && $mark <= 12): ?>
    <p>Оцінка: Відмінно</p>

    <?php else: ?>
    <p>Недопустима оцінка!</p>

    <?php endif; ?>

    <?php $year = 2020; ?>
    <?php if (($year % 4 === 0 && $year % 100 !== 0) || ($year % 400 === 0)): ?>
    <p><?php echo "$year — Високосний рік"; ?></p>
    <?php else: ?>
    <p><?php echo "$year — Не високосний рік"; ?></p>
    <?php endif; ?>


    

    
</body>
</html>
