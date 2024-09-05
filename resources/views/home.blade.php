<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            background: linear-gradient(-45deg, #E5E0FF, #FFF2F2, #8EA7E9, #7286D3);
            background-size: 400% 400%;
            font-family: 'Arial', sans-serif;
            color: #333333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            animation: gradientBG 10s ease infinite;
            overflow: hidden;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .welcome-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 100px;
            border-radius: 50px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            animation: slideIn 2s cubic-bezier(0.68, -0.55, 0.27, 1.55);
        }

        @keyframes slideIn {
            from {
                transform: translateY(100vh) scale(0.8);
                opacity: 0;
            }
            to {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
        }

        .welcome-container h1 {
            font-size: 3.5em;
            margin-bottom: 20px;
            color: #8EA7E9;
            animation: textPop 1.5s ease-in-out infinite alternate;
        }

        @keyframes textPop {
            from {
                transform: scale(1);
                text-shadow: 0 0 10px rgba(142, 167, 233, 0.5);
            }
            to {
                transform: scale(1.1);
                text-shadow: 0 0 30px rgba(142, 167, 233, 1);
            }
        }

        .welcome-container p {
            font-size: 1.2em;
            color: #2F3645;
            animation: fadeInUp 2s ease-in-out 1s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .welcome-container a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #8EA7E9;
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.1);
            }
        }

        .welcome-container a:hover {
            background-color: #7286D3;
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Selamat Datang!</h1>
        <p>Gagal itu gapapa yang ga boleh itu nyerah</p>
        <a href="home.php">Mulai Sekarang</a>
    </div>
</body>
</html>
