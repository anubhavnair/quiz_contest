<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfylly Submitted</title>
</head>

<body>
    <?php
    if (isset($_GET['success'])) {
        echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">Your response has been submitted successfully.</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        </span>
        </div>
        <br/>';
    } elseif (isset($_GET['error'])) {
        echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline">Something went wrong. Please try again.</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        </span>
        </div>
        <br/>';
    }
    ?>

</body>

</html>