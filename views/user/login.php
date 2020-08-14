<div class="row">
    <div class="col-4 col-md-4 offset-md-4  offset-lg-4">
        <form method="post" action="">
            <table class="table table-bordered">
                <tr>
                    <td><input type="text" class="form-control" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td><input type="password" class="form-control" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td align="center"><input type="submit" name="login" value="Login" class="btn btn-primary"></td>
                </tr>
                <tr>
                    <td align="center"><a href="<?=SITE_URL.'user/forgot-password'?>">Forgot Password</a></td>
                </tr>
            </table>
        </form>
    </div>
</div>