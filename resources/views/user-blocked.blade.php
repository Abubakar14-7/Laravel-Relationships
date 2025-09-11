<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Blocked</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .blocked-box {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
            max-width: 400px;
        }
        .blocked-box h1 {
            color: #dc2626;
            margin-bottom: 20px;
        }
        .blocked-box p {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .blocked-box a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2563eb;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            transition: background 0.3s;
        }
        .blocked-box a:hover {
            background-color: #1e40af;
        }
    </style>
</head>
<body>
    <div class="blocked-box">
        <h1>⚠ Account Blocked</h1>
        <p>Your account has been blocked. Please contact support for assistance.</p>
        <a href="{{ url('/') }}">Go to Home</a>
    </div>
</body>
</html>
