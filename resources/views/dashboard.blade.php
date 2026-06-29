<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Screens Dashboard</title>

    <style>
        body{
            margin:0;
            font-family:Arial,Helvetica,sans-serif;
            background:#f5f7fb;
        }

        .sidebar{
            position:fixed;
            width:240px;
            height:100vh;
            background:#0B5ED7;
            color:white;
            padding:20px;
        }

        .sidebar h2{
            margin-bottom:30px;
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            padding:12px 0;
            text-decoration:none;
        }

        .content{
            margin-left:260px;
            padding:30px;
        }

        .cards{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:20px;
            margin-top:25px;
        }

        .card{
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 2px 8px rgba(0,0,0,.1);
        }

        .card h3{
            margin:0;
            color:#0B5ED7;
        }

        .number{
            font-size:32px;
            margin-top:15px;
            font-weight:bold;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Modern Screens</h2>

    <a href="#">🏠 Dashboard</a>
    <a href="#">👥 Customers</a>
    <a href="#">📐 Measurements</a>
    <a href="#">💬 Quotations</a>
    <a href="#">🧾 Invoices</a>
    <a href="#">📅 Installations</a>
    <a href="#">📦 Inventory</a>
    <a href="#">📊 Reports</a>
    <a href="#">⚙️ Settings</a>
</div>

<div class="content">

    <h1>Dashboard</h1>

    <p>Welcome to Modern Screens Business Manager Pro.</p>

    <div class="cards">

        <div class="card">
            <h3>Customers</h3>
            <div class="number">0</div>
        </div>

        <div class="card">
            <h3>Quotations</h3>
            <div class="number">0</div>
        </div>

        <div class="card">
            <h3>Invoices</h3>
            <div class="number">0</div>
        </div>

        <div class="card">
            <h3>Installations</h3>
            <div class="number">0</div>
        </div>

    </div>

</div>

</body>
</html>