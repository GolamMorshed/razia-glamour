<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Add your CSS files here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your custom styles here -->
    <style>
        /* Custom styles for the sidebar */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }

        /* Style the sidebar links */
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }

        /* Change color on hover */
        .sidebar a:hover {
            background-color: #555;
        }

        /* Style the content */
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Style the navbar */
        .navbar {
            background-color: #343a40;
            padding: 15px 0;
        }

        /* Style the navbar links */
        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }

        /* Change color on hover */
        .navbar a:hover {
            color: #cccccc;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="">Dashboard</a>
        <a href="{{route('posts')}}">Posts</a>
        <a href="#">Users</a>
        <a href="#">Settings</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h1>Welcome {{auth()->user()->name}} to the Admin Dashboard</h1>
        
    </div>

    <!-- Add your JavaScript files here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
