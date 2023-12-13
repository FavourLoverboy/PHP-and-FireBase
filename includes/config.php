<?php

    require __DIR__.'/vendor/autoload.php';

    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;

    $serviceAccount = ServiceAccount::fromValue(__DIR__ . "/nack-status-firebase-adminsdk-nzx3d-ebca708e58.json");

    $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://nack-status-default-rtdb.firebaseio.com');

    $database = $firebase->createDatabase();

    // Now you can use $database to interact with the Realtime Database


?>