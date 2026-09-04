<?php
declare(strict_types=1);

require_once __DIR__ . '/database.php';

$values = ['name' => '', 'email' => '', 'service' => '', 'message' => ''];
$error = null;
$services = ['Personal website', 'Small business page', 'Online shop', 'Booking page', 'Contact form'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($values as $field => $unused) {
        $values[$field] = trim((string) ($_POST[$field] ?? ''));
    }

    if ($values['name'] === '' || !filter_var($values['email'], FILTER_VALIDATE_EMAIL) || $values['service'] === '' || $values['message'] === '') {
        $error = 'Please complete every field with a valid email address.';
    } else {
        try {
            $statement = db()->prepare('INSERT INTO enquiries (name, email, service, message) VALUES (:name, :email, :service, :message)');
            $statement->execute($values);
            header('Location: index.php');
            exit;
        } catch (Throwable $exception) {
            $error = 'Your enquiry could not be saved right now. Please make sure MySQL is running in XAMPP and try again.';
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Enquiry | Raissa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="topbar"><div class="shell topbar-inner"><a class="logo" href="../project/index.php">RAISSA</a><a class="button secondary" href="index.php">View enquiries</a></div></header>
<main class="shell">
    <span class="eyebrow">Create</span>
    <h1>Add an enquiry</h1>
    <p class="lead">Save a new client request to your MySQL database.</p>
    <section class="card">
        <?php if ($error !== null): ?><p class="error"><?= e($error) ?></p><?php endif; ?>
        <form method="post">
            <div class="field"><label for="name">Client name</label><input id="name" name="name" value="<?= e($values['name']) ?>" required></div>
            <div class="field"><label for="email">Email address</label><input id="email" name="email" type="email" value="<?= e($values['email']) ?>" required></div>
            <div class="field"><label for="service">Service needed</label><select id="service" name="service" required><option value="">Choose a service</option><?php foreach ($services as $service): ?><option value="<?= e($service) ?>" <?= $values['service'] === $service ? 'selected' : '' ?>><?= e($service) ?></option><?php endforeach; ?></select></div>
            <div class="field"><label for="message">Message</label><textarea id="message" name="message" required><?= e($values['message']) ?></textarea></div>
            <div class="form-actions"><a class="button secondary" href="index.php">Cancel</a><button class="button" type="submit">Save enquiry</button></div>
        </form>
    </section>
</main>
</body>
</html>
