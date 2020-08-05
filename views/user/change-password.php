
<div class="row">
    <div class="col-4 offset-4">
        <h1>Change Password</h1>
        <form method="post" action="" name="changePasswordForm">
            <?=Form::addCsrfToken("changePasswordForm")?>
            <table class="table table-light table-bordered">
                <tr>
                    <td class="text-center"><input placeholder="Password" type="password" name="password" class="form-control"></td>
                </tr>
                <tr>
                    <td class="text-center"><input placeholder="Confirm Password" type="password" name="confirm_password" class="form-control"></td>            
                </tr>
                <tr>
                    <td class="text-center"><input type="submit" name="changePassword" value="Change Password" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
    </div>
</div>