<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Activation</title>
</head>
<body>
<p>Hello {{ $userName }},</p>

<p>Thank you for signing up with our service. To activate your account, please click the following link:</p>

<p><a href="{{ $activationLink }}">{{ $activationLink }}</a></p>

<p>If you did not sign up for this account, you can safely ignore this email.</p>

<p>Best regards,</p>
<p>The {{ $appName }} Team</p>
</body>
</html>
