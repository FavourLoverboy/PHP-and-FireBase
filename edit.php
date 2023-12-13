<?php include('includes/header.php'); ?>
<?php include('includes/config.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <h3>How to Edit and Update Data in Firebase (Database) using PHP</h3>
            <hr>
            <?php
            
                $token = $_GET['token'];
                $reference = $database->getReference("contact")->getChild($token)->getValue();
                extract($reference);
                echo "
                    <form action='code.php' method='POST'>
                        <input type='hidden' name='token' value='$token'>
                        <div class='mb-3'>
                            <input type='text' name='username' class='form-control' value='$username' placeholder='Enter phone number'>
                        </div>
        
                        <div class='mb-3'>
                            <input type='email' name='email' class='form-control' value='$email' placeholder='Enter email'>
                        </div>
        
                        <div class='mb-3'>
                            <input type='number' name='phone' class='form-control' value='$phone' placeholder='Enter phone number'>
                        </div>
        
                        <div class='mb-3'>
                            <button type='submit' name='update_data' class='btn btn-primary btn-block'>Update Data</button>
                            <hr>
                            <a href='index.php' class='btn btn-danger btn-block'>Cancel</a>
                        </div>
                    </form>
                ";
            
            ?>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>