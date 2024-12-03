<!DOCTYPE html>
<html>
<body>
    <h1>Угол между стрелками</h1>
    <?php if (isset($result)): ?>
        <p>Угол: <?= $result ?> градусов</p>
    <?php endif; ?>
    
    <form method="POST">
        <input type="number" name="hours" min="0" max="23" required placeholder="Часы">
        <input type="number" name="minutes" min="0" max="59" required placeholder="Минуты">
        <input type="submit" value="Рассчитать">
    </form>
</body>
</html>