<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Temple Aerospace Secure Engineering Portal</title>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #6a0dad;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #6a0dad;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #5c0da0;
        }
        .note {
            text-align: center;
            font-size: 0.8em;
            color: #666;
            margin-top: 10px;
        }
</style>
</head>
<body>
 
<div class="container">
<div class="header">
<h2>Temple Aerospace Secure Engineering Portal</h2>
</div>
<form action="upload.php" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="name">Name:</label>
<input type="text" id="name" name="name" required>
</div>
<div class="form-group">
<label for="file">Choose File (Max 30MB):</label>
<input type="file" id="file" name="file" required>
</div>
<input type="submit" value="Submit">
</form>
<div class="note">
<p>Please note: Maximum size is 30 MB.</p>
</div>
</div>
 
</body>
</html>
