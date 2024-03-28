<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>/* Reset some default styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Basic styles for the navbar */
    .navbar {
        background-color: #333;
        color: #fff;
        padding: 10px;
    }

    .navbar ul {
        list-style: none;
        padding: 0;
    }

    .navbar ul li {
        display: inline;
        margin-right: 20px;
    }

    .navbar ul li a {
        color: #fff;
        text-decoration: none;
    }

    /* Styles for the sidebar */
    .sidebar {
        background-color: #f4f4f4;
        width: 200px;
        padding: 20px;
        position: fixed;
        top: 60px;
        left: 0;
        height: 100%;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
    }

    .sidebar ul li {
        margin-bottom: 10px;
    }

    .sidebar ul li a {
        color: #333;
        text-decoration: none;
    }

    /* Styles for the main content area */
    .content {
        margin-left: 220px;
        padding: 20px;
    }

    /* Styles for the footer */
    .footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>
<body>


<nav class="navbar">


    <ul style="margin-left: 800px;
    margin-right: auto;">
    <li style="margin-left: 250px"></li>
        <li><a href="index">Users</a></li>
        <li><a  href="/logins">Login</a></li>
        <li><a href="/test">Register</a></li>
        <li><a href="{{ route('form.restore') }}">Restore</a></li>
        
        <!-- <li><a href="#">Contact</a></li> -->
    </ul>
</nav>


<!-- <aside class="sidebar">
    <ul>
        <li><a href="#" id="mainLink">Register Here</a></li>
        <ul id="subLinks" style="display: none;">
            <li><a href="{{ route('test') }}">Create</a></li>
            <li><a href="{{ route('form.restore') }}">Restore</a></li>
        </ul>
    </ul>
</aside> -->

<script>
    document.getElementById('mainLink').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default behavior of the link

        var subLinks = document.getElementById('subLinks');
        if (subLinks.style.display === 'none') {
            subLinks.style.display = 'block';
        } else {
            subLinks.style.display = 'none';
        }
    });
</script>

<main class="py-4">
    @yield('content')
</main>

<footer class="footer">
    <p>&copy; 2024 Your Website. All rights reserved.</p>
</footer>
</body>
</html>
