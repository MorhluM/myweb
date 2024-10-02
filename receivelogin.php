<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CS Supermarket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image:url('imgs/797920.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 80%;
            max-width: 400px;
        }
        h1 {
            color: #0073e6;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            background-color: #0073e6;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #005bb5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ยินดีต้อนรับ</h1>
        <?php
            $showuser = $_POST['user'];
            echo "<p>Welcome to CS Supermarket website: $showuser</p>";
        ?>
        <form action="shopping.html">
            <p>Shopping click here!</p>
            <input type="submit" name="shop" value="Shopping Here!">
        </form>
    </div>
</body>
</html>