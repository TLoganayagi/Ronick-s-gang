
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Portal</title>
        <link rel="stylesheet" href="styles.css">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                color: #333;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .container {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 20px 40px;
                text-align: center;
                width: 300px;
            }
            h1 {
                color: #000;
                margin-bottom: 20px;
            }
            .login-options {
                display: flex;
                flex-direction: column;
            }
            .login-option {
                background-color: #dc3545;
                color: #fff;
                margin: 10px 0;
                padding: 15px;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s, transform 0.3s;
            }
            .login-option:hover {
                background-color: #c82333; /* Darker shade of red for hover */
                transform: scale(1.05);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>HOME </h1>
            <div class="login-options">
                <div class="login-option" onclick="window.location.href='getbyauthor.php'">
                    GET BOOKS BY AUTHOR AND GENRE
                </div>
                <div class="login-option" onclick="window.location.href='getbyid.php'">
                    GET BOOKS BY ID 
                </div>                    
                <div class="login-option" onclick="window.location.href='putbooks.php'">
                    PUT BOOKS
                </div>
                <div class="login-option" onclick="window.location.href='postbooks.php'">
                    POST BOOKS
                </div>
                <div class="login-option" onclick="window.location.href='delete.php'">
                    DELETE
                </div>
            </div>
        </div>
    </body>
    </html>
    </h3>
