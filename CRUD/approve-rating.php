<?php
declare(strict_types=1);

require_once __DIR__ . '/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $approved = filter_input(INPUT_POST, 'approved', FILTER_VALIDATE_INT);
    if ($id !== false && $id !== null && $id > 0 && ($approved === 0 || $approved === 1)) {
        try {
            $statement = db()->prepare('UPDATE ratings SET is_approved = :approved WHERE id = :id');
            $statement->execute(['approved' => $approved, 'id' => $id]);
        } catch (Throwable $exception) {
            http_response_code(503);
            exit('The rating could not be updated. Start MySQL in XAMPP and try again.');
        }
    }
}

header('Location: index.php');
exit;
