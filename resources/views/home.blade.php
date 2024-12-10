<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7fafc;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .header h2 {
            font-size: 24px;
            color: #333;
        }
        .logout-link {
            position: absolute;
            top: 20px;
            right: 20px;
            color: rgb(0, 0, 0);
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }
        .content {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .section-title {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }
        .list {
            margin-top: 10px;
        }
        .list li {
            margin-bottom: 10px;
            font-size: 16px;
            color: #555;
        }
        .cards {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
            margin-top: 30px;
        }
        .card {
            background-color: #e6e6e6;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .card a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #ffc005;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .card a:hover {
            background-color: #2b6cb0;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Header Section -->
    <div class="header">
        <h2>Dashboard</h2>

        <!-- Logout Link -->
        <a href="{{ route('logout') }}" class="logout-link"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>

        <!-- Logout Form -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

    <!-- Main Content -->
    <div class="content">
        <p>You're logged in!</p>

        <!-- Recent Activities -->
        {{-- <div class="section-title">Recent Activities</div>
        <ul class="list">
            <li>➔ Update profile information</li>
            <li>➔ Check recent notifications</li>
            <li>➔ View account settings</li>
        </ul> --}}

        <!-- Profile Overview, Notifications, Settings -->
        <div class="cards">
            <div class="card">
                <h4>Profile Overview</h4>
                <p>Manage your personal details here.</p>
                <a href="">Go to Profile</a>
            </div>
            <div class="card">
                <h4>Notifications</h4>
                <p>Check your recent notifications.</p>
                <a href="">Go to Notifications</a>
            </div>
            <div class="card">
                <h4>Settings</h4>
                <p>Manage your account settings.</p>
                <a href="">Go to Settings</a>
            </div>
        </div>
    </div>

</div>

</body>
</html>
