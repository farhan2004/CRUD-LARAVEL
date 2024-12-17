<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Kelas Laravel 3A</title>
    <style>
        /* Reset body styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f4f4f9 30%, #e0eafc);
            color: #333;
            min-height: 100vh;
        }

        /* Heading styling with animation */
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-top: 40px;
            font-size: 3rem;
            font-weight: bold;
            letter-spacing: 2px;
            animation: fadeIn 1.5s ease-in-out;
        }

        /* Horizontal rule styling */
        hr {
            border: none;
            height: 2px;
            background: #ccc;
            margin: 20px auto;
            width: 80%;
        }

        /* Navigation bar styling with gradient and hover effect */
        nav {
            display: flex;
            justify-content: center;
            background: linear-gradient(90deg, #3498db, #2c3e50);
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Styling for nav links with animations */
        nav a {
            text-decoration: none;
            color: white;
            padding: 12px 30px;
            margin: 0 15px;
            border-radius: 30px;
            background-color: rgba(255, 255, 255, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            font-size: 1rem;
        }

        /* Hover effect for nav links */
        nav a:hover {
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        /* Content area styling with shadow and rounded corners */
        .content {
            max-width: 1100px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            animation: slideUp 1.5s ease-out;
        }
        /* Center the table */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #3498db;
            color: white;
            font-weight: bold;
        }

        td {
            background-color: #f4f4f9;
        }


        /* Add some transition effects to the page */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Media queries for responsiveness */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
                margin-top: 20px;
            }

            nav a {
                padding: 10px 20px;
                margin: 0 10px;
            }

            .content {
                padding: 15px;
            }
        }

        /* Additional styles for page-specific customization */
        @yield('additional-styles')
    </style>
</head>
<body>
    <h1>Website Kelas Laravel 3A</h1>
    <hr>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/tentang') }}">Tentang</a>
        <a href="{{ url('/kontak') }}">Kontak</a>
        <a href="{{ url('/siswa') }}">Data Siswa</a>
    </nav>
    <hr>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
