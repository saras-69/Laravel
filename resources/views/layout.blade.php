<!-- filepath: resources/views/layouts/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Platform - @yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-areas:
                "header header"
                "sidebar content"
                "footer footer";
            grid-template-columns: 250px 1fr;
            grid-template-rows: auto 1fr auto;
            min-height: 100vh;
        }
        header {
            grid-area: header;
            background-color: #3498db;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        .sidebar {
            grid-area: sidebar;
            background-color: #f5f5f5;
            padding: 1rem;
            border-right: 1px solid #ddd;
        }
        .content {
            grid-area: content;
            padding: 1rem;
        }
        footer {
            grid-area: footer;
            background-color: #34495e;
            color: white;
            text-align: center;
            padding: 1rem;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            margin-bottom: 10px;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
    <header>
        <h1>E-Learning Platform</h1>
    </header>

    <div class="sidebar">
        <h3>Navigation</h3>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">My Learning</a></li>
                <li><a href="#">Account</a></li>
                <li><a href="#">Support</a></li>
            </ul>
        </nav>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2025 E-Learning Platform. All rights reserved.</p>
    </footer>
</body>
</html> 