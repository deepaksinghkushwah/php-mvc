
<div class="row">
    <div class="col-6 offset-3">
        <h1>Forgot Password</h1>
        <p class="help-block">Please enter your email address, we will send you new password of your account.</p>
        <form method="post" action="" name="forgotPasswordForm">
            <?=Form::addCsrfToken("forgotPasswordForm")?>
            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            <table class="table table-light table-bordered">                
                <tr>
                    <td class="text-center"><input placeholder="Email" type="email" name="email" class="form-control"></td>            
                </tr>
                <tr>
                    <td class="text-center"><input type="submit" name="forgotPassword" value="Send Link" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
    </div>
</div>