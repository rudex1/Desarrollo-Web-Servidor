- https://github.com/PHPMailer/PHPMailer/wiki/Using-Gmail-with-XOAUTH2
- https://developers.google.com/oauthplayground/
- https://github.com/PHPMailer/PHPMailer/blob/master/examples/gmail_xoauth.phps
- https://developers.google.com/identity/protocols/OAuth2WebServer
- https://github.com/thephpleague/oauth2-google

(for gmail. OAUTH2)
```
$ composer require phpmailer/phpmailer league/oauth2-google
```

1. Get refresh token: get_oauth_token.php
2. Use the refresh token in gmail_xoauth.php