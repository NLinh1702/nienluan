<div class="mt-4">
    <form action="<?php echo BASE_URL?>/login/authen_login" method="POST">
    <?php
    if(isset($msg)){
        echo '<span>'.$msg.'</span>';
    }
    ?>
    <div class="container">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="login" value="Login">Login</button>
        </form>
    </div>
</div>
