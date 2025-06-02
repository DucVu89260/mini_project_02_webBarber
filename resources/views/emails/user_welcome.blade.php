<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Admin interface</title>
</head>
<body>
    <h1>Greetings {{ $admin->name }},</h1>
    <p>Email của bạn: {{ $admin->email }}</p>
    <p>Please login to access management interface</p>
    <a href="{{ route('login') }}">Login now</a>
</body>
</html>