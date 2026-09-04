<?php
declare(strict_types=1);

require_once __DIR__ . '/database.php';

$error = null;
$enquiries = [];
$ratings = [];
try {
    $enquiries = db()->query('SELECT id, name, email, service, message, created_at FROM enquiries ORDER BY created_at DESC')->fetchAll();
    $ratings = db()->query('SELECT id, name, rating, feedback, is_approved, created_at FROM ratings ORDER BY created_at DESC')->fetchAll();
} catch (Throwable $exception) {
    $error = 'Your enquiries are temporarily unavailable. Please make sure MySQL is running in XAMPP and refresh this page.';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raissa | Client Enquiries</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="topbar">
    <div class="shell topbar-inner">
        <a class="logo" href="../project/index.php">RAISSA</a>
        <a class="button secondary" href="create.php">+ New enquiry</a>
    </div>
</header>
<main class="shell">
    <span class="eyebrow">PHP + MySQL workspace</span>
    <h1>Client enquiries</h1>
    <p class="lead">Keep requests for websites, shops, and booking pages in one simple place.</p>
    <?php if ($error !== null): ?>
        <p class="error"><?= e($error) ?></p>
    <?php else: ?>
        <section class="card">
            <?php if ($enquiries === []): ?>
                <p class="empty">No enquiries yet. Add the first one to test the system.</p>
            <?php else: ?>
                <div class="table-wrap">
                    <table>
                        <thead><tr><th>Name</th><th>Email</th><th>Service</th><th>Message</th><th>Actions</th></tr></thead>
                        <tbody>
                        <?php foreach ($enquiries as $enquiry): ?>
                            <tr>
                                <td><?= e($enquiry['name']) ?></td>
                                <td><a href="mailto:<?= e($enquiry['email']) ?>"><?= e($enquiry['email']) ?></a></td>
                                <td><?= e($enquiry['service']) ?></td>
                                <td class="message"><?= e($enquiry['message']) ?></td>
                                <td>
                                    <div class="actions">
                                        <a class="button secondary" href="update.php?id=<?= (int) $enquiry['id'] ?>">Edit</a>
                                        <form class="inline-form" action="delete.php" method="post" onsubmit="return confirm('Delete this enquiry?');">
                                            <input type="hidden" name="id" value="<?= (int) $enquiry['id'] ?>">
                                            <button class="button danger" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </section>
    <?php endif; ?>

    <?php if ($error === null): ?>
        <section class="card">
            <div class="section-heading">
                <div>
                    <span class="eyebrow">Choose what visitors see</span>
                    <h2>Rating approvals</h2>
                </div>
                <a class="button secondary" href="rating.php">Open rating page</a>
            </div>
            <?php if ($ratings === []): ?>
                <p class="empty">No ratings have been submitted yet.</p>
            <?php else: ?>
                <div class="table-wrap">
                    <table>
                        <thead><tr><th>Name</th><th>Rating</th><th>Feedback</th><th>Status</th><th>Action</th></tr></thead>
                        <tbody>
                        <?php foreach ($ratings as $rating): ?>
                            <tr>
                                <td><?= e($rating['name']) ?></td>
                                <td class="stars"><?= str_repeat('★', (int) $rating['rating']) . str_repeat('☆', 5 - (int) $rating['rating']) ?></td>
                                <td class="message"><?= e($rating['feedback']) ?></td>
                                <td><?= (int) $rating['is_approved'] === 1 ? 'Visible' : 'Hidden' ?></td>
                                <td>
                                    <form class="inline-form" action="approve-rating.php" method="post">
                                        <input type="hidden" name="id" value="<?= (int) $rating['id'] ?>">
                                        <input type="hidden" name="approved" value="<?= (int) $rating['is_approved'] === 1 ? '0' : '1' ?>">
                                        <button class="button <?= (int) $rating['is_approved'] === 1 ? 'danger' : '' ?>" type="submit"><?= (int) $rating['is_approved'] === 1 ? 'Hide' : 'Approve' ?></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </section>
    <?php endif; ?>
</main>
</body>
</html>
