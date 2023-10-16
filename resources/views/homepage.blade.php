<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $subject }}</title>
</head>
<body>
<h1>{{ $greeting }}</h1>

<p>{{ $introLine }}</p>

<p>{{ $content }}</p>

<p>{{ $closing }}</p>

<p>Sincerely,</p>
<p>{{ env('APP_NAME') }}</p>
</body>
</html>
