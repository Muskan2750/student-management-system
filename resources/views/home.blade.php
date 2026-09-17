<html>
    <head>
        <title></title>
    </head>
    <style>
        .bottom{
            margin-top: 10%;
            width: 40%;
            height: 30%;
            border:none;
            margin-left: 20%;
            border-radius:10px;
            background: hsl(160, 21%, 84%);
            color: #100f11;
            position: absolute;
        }
        h2{
            font-weight:bold;
            text-align: center;
            text-shadow: 2px 1px 1px rgb(157, 115, 115),1px 3px rgb(56, 84, 56),3px 1px blue;
            font-size: 30px;
            padding-top: 5%;
        }
        .card{
            width: 180px;
            margin-top: 30px;
            padding: 15px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-left: 80%;
        }
        .card h2{
            color: #444444;
        }
        .card h3{
            font-size: 20px;
            color: rgb(108, 40, 37);
            font-weight: bold;
        }
    </style>
<body>
    @include('navigation.nav')

    <div class="bottom">
        <h2>Welcome to Dashboard</h2>
    </div>
    {{-- <div class="card">
        <h3>Total Students</h3>
        <h2>{{ $totalStudents}}</h2>
    </div> --}}
</body>
</html>