<div class="row">
    <div class="col-4 offset-4">
        <h1>Sign Up</h1>
        <form method="post" action="" name="registerForm">
            <?= Form::addCsrfToken('registerForm');?>
            <table class="table table-bordered">
                <tr>
                    <td><input class="form-control" type="text" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td><input class="form-control" type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td><input class="form-control" type="email" name="email" placeholder="Email"></td>
                </tr>
                <tr>
                    <td><input class="btn btn-primary" type="submit" name="register" value="Register"></td>
                </tr>
            </table>
        </form>
    </div>
</div>