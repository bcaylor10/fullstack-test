<?php

include('includes/Submission.php');
use Includes\Submission as Submission;

$fields = ['name', 'email', 'phone', 'industry'];
$values = [];
$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submission = new Submission();
    
    foreach ($fields as $f) {
        $values[$f] = $_POST[$f];
    }

    $errors = $submission->validateFields($fields);

    if (count($errors) === 0) {
        $success = $submission->storeSubmission($values);
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geofencing</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/app.css">
</head>
<body>
    <div class="container">

        <?php require_once __DIR__ . '/components/form.php'; ?>

    </div> <!-- container -->

    <script src="public/app.js"></script>
</body>
</html>