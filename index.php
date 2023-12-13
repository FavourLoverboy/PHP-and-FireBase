<?php include('includes/header.php'); ?>

<?php session_start(); ?>
<?php include('includes/config.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
                if(isset($_SESSION['status']) && $_SESSION['status'] != ""){
                    echo "
                        <div class='alert alert-primary' role='alert'>
                            " . $_SESSION['status'] . "
                        </div>
                    ";
                    unset($_SESSION['status']);
                }else{
                    if(!empty( $_SESSION['status'])){
                        echo "
                            <div class='alert alert-danger' role='alert'>
                                " . $_SESSION['status'] . "
                            </div>
                        ";
                        unset($_SESSION['status']);
                    }
                }
            ?>
        </div>

        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4>
                        How to Retrieve/Fetch Data from Firebase (Database) using PHP
                        <a href="insert.php" class="btn btn-primary float-end">Add</a>
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>username</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                    $reference = $database->getReference('contact')->getValue();
                                    if($reference > 0){
                                        $i = 1;
                                        foreach($reference as $row){
                                            extract($row);
                                            echo "
                                                <tr>
                                                    <td>$i</td>
                                                    <td>$username</td>
                                                    <td>$email</td>
                                                    <td>$phone</td>
                                                    <td>
                                                        <a href='' class='btn btn-primary'>Edit</a>
                                                    </td>
                                                    <td>
                                                        <a href='' class='btn btn-danger'>Delete</a>
                                                    </td>
                                                </tr>
                                            ";
                                            $i++;
                                        }
                                    }else{
                                        echo "
                                            <tr>
                                                <td colspan='6'>No data Available</td>
                                            </tr>
                                        ";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>