<?php
session_start();
include_once 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $password === $user['password']) {  // Directly compare plain text password
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_email'] = $user['email'];
        $_SESSION['admin_name'] = $user['name'];

        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid email or password";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/admin/assets/css/plugins.css">
    <link rel="stylesheet" href="/admin/assets/css/styles.css">
</head>
<body>
<section class="loginSec">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="blogCard py-5">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required value="admin@koder360.com">
                        </div>
                        <div class="form-group mt-2">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group mt-2 text-center">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger mt-2"><?php echo $error; ?></div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
