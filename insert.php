<?php include('includes/header.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <h3>How to Insert Data into Firebase (Database) using PHP</h3>
            <hr>
            <form action="code.php" method="POST">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Enter username">
                </div>

                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                </div>

                <div class="mb-3">
                    <input type="number" name="phone" class="form-control" placeholder="Enter phone number">
                </div>

                <div class="mb-3">
                    <button type="submit" name="save_push_data" class="btn btn-primary btn-block">Save Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>