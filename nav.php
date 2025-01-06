<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>.navbar {
            background-color: rgb(229, 113, 92);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 5px;
        }

        .logo h3 {
            font-weight: bold;
            font-size: 25px;
            color: white;
        }

        .lebals {
            width: 35%;

            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            margin-top: 20px;
        }

        .lebals a {
            text-decoration: none;
            font-weight: bold;
            font-size: 20px;
            color: white;
        }</style>
</head>
<body>
<div class="container">
            <div class="navbar">
                <div class="logo">
                    <h3>blood donations</h3>
                </div>
                <div class="lebals"><a href="./index.php">home</a>
                    <a href="register.php">register doner</a>
                    <a href="./dooner.php">search doner</a>
                </div>
            </div>
        </div>
</body>
</html>