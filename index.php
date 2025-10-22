<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #00008b;
        }

        form {
            background-color: #fff;
            margin: 50px auto;
            padding: 20px;
            max-width: 400px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="email"],
        input[type="gender"],
        input[type="department"],
        input[type="university"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #00008b;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #00008b;
        }

        label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
        }
    </style>
</head>
<body>

<form action="welcome.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required placeholder="Enter your name" pattern="[A-Za-z\s]+" title="Name can only contain letters and spaces"><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required placeholder="Enter your email" title="Enter a valid email address"><br>
    
    <label for="Gender">Gender:</label>
    <input type="gender" id="gender" name="gender" required placeholder="Enter your gender" title="Enter a gender"><br>

    <label for="Department">Department:</label>
    <input type="department" id="department" name="department" required placeholder="Enter your department" title="Enter a department"><br>

    <label for="University">University:</label>
    <input type="university" id="university" name="university" required placeholder="Enter your university" title="Enter a university"><br>


    <input type="submit" value="Submit">
</form>

</body>
</html>
