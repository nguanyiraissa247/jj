<?php
declare(strict_types=1);

require_once __DIR__ . '/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    if ($id !== false && $id !== null && $id > 0) {
        try {
            $statement = db()->prepare('DELETE FROM enquiries WHERE id = :id');
            $statement->execute(['id' => $id]);
        } catch (Throwable $exception) {
            http_response_code(503);
            exit('The database is temporarily unavailable. Start MySQL in XAMPP and try again.');
        }
    }
}

header('Location: index.php');
exit;
