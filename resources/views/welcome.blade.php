<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost & Found</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .container {
            text-align: center;
            background: rgba(0,0,0,0.3);
            padding: 40px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn {
            text-decoration: none;
            padding: 12px 25px;
            margin: 5px;
            border-radius: 8px;
            background: white;
            color: #333;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background: #ddd;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Lost & Found System</h1>
        <p>Helping you find what matters most.</p>

        <a href="#" class="btn">Report Lost Item</a>
        <a href="#" class="btn">View Found Items</a>
        <a href="/auth/google" class="btn">Login with Google</a>
    </div>

</body>
</html>