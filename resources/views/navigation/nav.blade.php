<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <style>
        ul{
            float: left;
            display: block;
            overflow: hidden;
            background-color: black;
            color: white;
            text-shadow: 2px 1px 5px green;
            box-shadow: 5px 5px 8px blueviolet;
            animation-iteration-count: infinite;
            animation-delay: 1s;
            padding: 10px;

        }
        a{
            
     		text-decoration: none;
     		line-break: none;
     		text-underline-position:none;
            padding: 7px 50px;
            margin: 4px;
            color: white;        

        }
        h1{
            color: rgb(120, 57, 129);
            text-shadow: 2px 1px 1px red,1px 3px green,3px 1px blue;
        }
        button{
            padding: 10px;
            margin-right: 55px; 
            color: white;
            border: 2px solid rgb(236, 204, 99);
            background-color: rgb(241, 168, 72);
            float: right;
            display: block;
        }
        body{
            width: 100%;
            background-color: rgb(177, 221, 238);
        }
    </style>
<body>
    <h1>Dashboard</h1>
    <header>
    <ul>
    <a href="/home" type="tag">Home</a>
    <a href="/login" type="tag">Registration</a>
    <a href="/service" type="tag">Course</a>
     <a href="/contect" type="tag">Login</a>
    </ul>
    </header>
    <div>
    <a href="{{url('/array')}}"><button>Detailes page</button></a>
    </div>
    @yield('contact')
</body>
</html>