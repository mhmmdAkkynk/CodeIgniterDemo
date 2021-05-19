<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeigniter 4 CRUD - Edit User Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form method="post" name="update_user" id="update_user" action="<?= site_url('/update') ?>">
            <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $user_obj['name']; ?>">
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $user_obj['email']; ?>">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update Data</button>
            </div>
        </form>
    </div>
</body>
</html>