<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colorful Static Web App</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(45deg, #ff9a9e, #fad0c4, #fbc2eb, #a18cd1, #f8a5c2);
            background-size: 300% 300%;
            animation: gradientBG 10s ease infinite;
            color: #ffffff;
            text-align: center;
        }
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        h1 {
            font-size: 4rem;
            margin-top: 20%;
        }
        p {
            font-size: 1.5rem;
        }
        a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 20px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 5px;
        }
        a:hover {
            background: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <h1>Welcome to the AWS ECR & ECS Demo!</h1>
    <p>You're seeing a static PHP web application.</p>
    <a href="https://docs.aws.amazon.com/AmazonECS/latest/developerguide/Welcome.html" target="_blank">Learn More</a>
</body>
</html>
