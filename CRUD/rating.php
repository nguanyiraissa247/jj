<?php
declare(strict_types=1);

require_once __DIR__ . '/database.php';

$values = ['name' => '', 'rating' => '', 'feedback' => ''];
$error = null;
$success = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($values as $field => $unused) {
        $values[$field] = trim((string) ($_POST[$field] ?? ''));
    }
    $rating = filter_var($values['rating'], FILTER_VALIDATE_INT);

    if ($values['name'] === '' || $rating === false || $rating < 1 || $rating > 5 || $values['feedback'] === '') {
        $error = 'Please enter your name, choose 1 to 5 stars, and write your feedback.';
    } else {
        try {
            $statement = db()->prepare('INSERT INTO ratings (name, rating, feedback, is_approved) VALUES (:name, :rating, :feedback, 0)');
            $statement->execute([
                'name' => $values['name'],
                'rating' => $rating,
                'feedback' => $values['feedback'],
            ]);
            $success = 'Thank you. Your rating has been saved.';
            $values = ['name' => '', 'rating' => '', 'feedback' => ''];
        } catch (Throwable $exception) {
            $error = 'Your rating could not be saved right now. Please start MySQL in XAMPP and try again.';
        }
    }
}

$ratings = [];
try {
    $ratings = db()->query('SELECT name, rating, feedback, created_at FROM ratings WHERE is_approved = 1 ORDER BY created_at DESC')->fetchAll();
} catch (Throwable $exception) {
    if ($error === null) {
        $error = 'Ratings are temporarily unavailable. Please start MySQL in XAMPP and refresh this page.';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate My Work | Raissa</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .rating-options { display: flex; gap: 8px; margin-top: 8px; }
        .rating-options label { cursor: pointer; color: #d96c7c; font-size: 28px; }
        .rating-options input { position: absolute; opacity: 0; width: 1px; }
        .rating-options label:has(input:checked), .rating-options label:hover { color: #a9485b; }
        .rating-list { display: grid; gap: 14px; margin-top: 24px; }
        .rating-item { padding: 18px; border: 1px solid var(--line); border-radius: 8px; background: #fffdfc; }
        .rating-item strong { font: 700 16px Arial, sans-serif; }
        .stars { color: var(--rose); letter-spacing: 2px; }
        .rating-item p { color: var(--muted); font: 15px/1.5 Arial, sans-serif; }
    </style>
</head>
<body>
<header class="topbar">
    <div class="shell topbar-inner">
        <a class="logo" href="../project/index.php">RAISSA</a>
        <div class="actions">
            <a class="button secondary" href="../project/index.php#testimonials">Back to portfolio</a>
            <a class="button secondary" href="index.php">Manage ratings</a>
        </div>
    </div>
</header>
<main class="shell">
    <span class="eyebrow">Client feedback</span>
    <h1>Rate my work</h1>
    <p class="lead">Tell Raissa what you think about the website or service. Your feedback helps future clients feel confident.</p>
    <section class="card">
        <?php if ($success !== null): ?><p class="success"><?= e($success) ?></p><?php endif; ?>
        <?php if ($error !== null): ?><p class="error"><?= e($error) ?></p><?php endif; ?>
        <form method="post">
            <div class="field"><label for="name">Your name</label><input id="name" name="name" value="<?= e($values['name']) ?>" required></div>
            <div class="field">
                <label>Choose your rating</label>
                <div class="rating-options" role="radiogroup" aria-label="Rating from one to five stars">
                    <?php for ($star = 1; $star <= 5; $star++): ?>
                        <label title="<?= $star ?> star<?= $star === 1 ? '' : 's' ?>"><input type="radio" name="rating" value="<?= $star ?>" <?= (string) $values['rating'] === (string) $star ? 'checked' : '' ?> required><?= str_repeat('★', $star) ?></label>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="field"><label for="feedback">Your feedback</label><textarea id="feedback" name="feedback" placeholder="Write a few kind words..." required><?= e($values['feedback']) ?></textarea></div>
            <button class="button" type="submit">Submit rating</button>
        </form>
    </section>

    <section class="card">
        <h2>What clients say</h2>
        <?php if ($ratings === []): ?>
            <p class="empty">No ratings yet. Be the first to share your feedback.</p>
        <?php else: ?>
            <div class="rating-list">
                <?php foreach ($ratings as $item): ?>
                    <article class="rating-item">
                        <strong><?= e($item['name']) ?></strong>
                        <div class="stars" aria-label="<?= (int) $item['rating'] ?> out of 5 stars"><?= str_repeat('★', (int) $item['rating']) . str_repeat('☆', 5 - (int) $item['rating']) ?></div>
                        <p><?= e($item['feedback']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>
</main>
</body>
</html>
