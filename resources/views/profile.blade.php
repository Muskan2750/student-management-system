    <html>
        <head>
            <title>Data</title>
        </head>
        <style>
            h1{
                text-align: center;
                color: #555;
                margin: auto;
            }
            .combo{
                margin: 100px auto;
                width: 300px;
                padding: 20px;
                border-radius: 10px;
                border: none;
                background: #f0f1ee;
                box-shadow: 0 0 10px gray;

            }
            button{
                margin-top: 20px;
                padding: 10px 30px;
                border: none;
                background: rgb(50, 112, 50);
                color: white;
                cursor: pointer;
            }
            body{
                font-family: Arial;
                background: linear-gradient(to right, #4fac4f, #00f2fe);
            }
            h2{
                color: rgb(147, 232, 204);
                text-shadow: 2px 1px 1px rgb(199, 135, 190),1px 3px rgb(110, 185, 178),3px 1px blue;
                text-wrap: none;
                text-align: center;
                font-size: 290%;
            }
        </style>
    <body>
        <h2>Student Profile</h2>
        <div class="combo">
            @if ($user)
                <h1>Hello, <u>{{$user->name}}</u></h1>
                <h3>Username:  {{$user->name}}</h3>
                <h3>Date of birth:  {{$user->dob}}</h3>
                <h3>Course: {{ $user->Course  }}</h3>
                <h3>Address:  {{$user->add}}</h3>
                <h3>Contect:  {{$user->contact}}</h3>
            <a href="{{route(   'array')}}"><Button>back to all</Button></a>
            <a href="{{route('updateform',$user->roll_number)}}"><Button>Edit Profile</Button></a>
            @else
            <p>User not found</p>
            @endif
        </div>
    </body>
    </html>