
grecaptcha.ready(function () {
            grecaptcha.execute('6Ld4qr4ZAAAAAPF2iiLOn8_XBCSVyptL9S3y9kHB', { action: 'submit' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });