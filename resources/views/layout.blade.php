<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Student Management System</title>
    <style>
        /* Navbar Styles */
        .navbar {
            background-color: #2c3e50; /* Dark blue-gray color */
            color: #ecf0f1; /* Light gray text */
            text-align: right; /* Align text to the right */
            padding: 10px; /* Add padding for better aesthetics */
            width: 100%; /* Full width */
            z-index: 1000; /* Set a high z-index to make sure it appears above other elements */
        }

        /* The side navigation menu */
        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #34495e;
            position: fixed;
            height: 100%;
            overflow: auto;
            text-align: 10px;
            margin-top: 27px; /* Adjusted margin-top to account for fixed navbar */
            left:0
        }

        /* Sidebar links */
        .sidebar a {
            display: block;
            color: #ecf0f1;
            padding: 16px;
            text-decoration: none;
        }

        /* Active/current link */
        .sidebar a.active {
            background-color: #2c3e50;
            color: #fff;
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
            background-color: #2c3e50;
            color: #fff;
        }

        /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
        .content {
            margin-left: 220px; /* Adjusted margin-left to account for sidebar width */
            padding: 1px 16px;
            height: 1000px;
            margin-top: 60px; /* Adjusted margin-top to account for fixed navbar */
            margin-right: auto;
            margin-left: auto;
        }

        /* Center the content horizontally on small screens */
        @media screen and (max-width: 767px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                text-align: left;
                margin-top: 0; /* Reset margin-top */
            }
            .content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body class="pt-5"> <!-- Added body padding to account for fixed navbar -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar fixed-top"> <!-- Added fixed-top class -->
                <a class="navbar-brand" href="#"><h2>Student Management Project</h2> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <!-- The sidebar -->
            <div class="sidebar">
                <a class="active" href="#home">Home</a>
                <a href="{{ url('/students')}}">Student</a>
                <a href="{{ url('/teachers')}}">Teacher</a>
                <a href="{{ url('/courses')}}">Courses</a>
                <a href="#about">Enrollment</a>
                <a href="#contact">Payment</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
