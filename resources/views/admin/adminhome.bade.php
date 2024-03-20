<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
            margin-bottom: 150px;
        }
        h4 {
            color: #007bff;
            margin-bottom: 20px;
        }
        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #007bff;
            margin: 0 auto 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .profile-image img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }
        .profile-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .profile-description {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .profile-links a {
            color: #007bff;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        .profile-links a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- <div class="profile-image">
        <img src="https://via.placeholder.com/150" alt="Profile Image">
    </div> -->
    <div class="profile-name">Admin Page</div>
    <div class="profile-description">Software Developer</div>
    <div class="profile-links">
        <a href="https://github.com/sponsors/taylorotwell">Edit Profile</a>
        <!-- <a href="#">Settings</a>
        <a href="#">Logout</a> -->
    </div>
</div>

</body>
</html>
