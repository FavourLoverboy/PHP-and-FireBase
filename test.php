<?php
               
    include('includes/config.php');
    $reference = $database->getReference('status/2')->getValue();

    // $reference = $database->getReference('status')
    //     ->orderByChild('user_id')
    //     ->equalTo(1)
    //     ->getSnapshot();

    print_r($reference);

?>