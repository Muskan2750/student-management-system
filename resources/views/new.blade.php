<html>
    <head>
        <title></title>
    </head>
    <style>
        table{
            border-collapse: collapse;
            text-align: center;
            min-width: 70%;
            margin: auto;
            padding: 0px;
            backdrop-filter: blur(55px);
            border: 2px solid  var(--primary-color);
            border-radius: 1px;
            color: rgb(6, 6, 6);
            box-shadow: 0px 0px 10px 2px rgba(0, 0, 0,3);
        }
        table tr th{
            padding: 5px;
            background-color: rgba(110, 51, 51, 0.2);
            
        }
        button {
            text-align: center;
            width: 25%;
            color: white;
            background: blue;
            border: none;
            border-radius: 5px;
        }
        .btn{
            text-align: center;
            width: 15%;
            color: white;
            background: blue;
            border: none;
            border-radius: 5px;
        }
        a{
            text-decoration: none;
            text-align: center;
            color: rgb(26, 24, 24);
            text-decoration-color: rgb(152, 152, 222);
        }
        .Tail{
            margin-left: 2%;
            font-size: 20px;
            margin-bottom: 10px;
        }
        .foot{
            margin-top: 5%;
            margin-left: 85%;
        }
        body{
            width: 100%;
            padding: 10px;
            background-image: url("https://st2.depositphotos.com/1001069/6534/v/950/depositphotos_65347399-stock-illustration-colorful-light-gradient-background.jpg")
        }
    </style>
<body>
    <caption><h1>👨‍🎓 Student Manegment</h1>
        <div class="Tail">
        <a href="{{route('login')}}"> + Add Student </a>
        </div>  
    </caption>
    
     <table border="2" cellspacing="1">
        <tr>
            {{-- <th>roll_number</th> --}}
            <th>Name</th>
            {{-- <th>Age</th>
            <th>Course</th> --}}
            {{-- <th>Address</th>
            <th>contect</th> --}}
            <th>Email Id</th>
            <th>Action</th>
    </tr>
    @foreach ( $students as $value )
    <tr>
            {{-- <td>{{'*'}}</td> --}}
            {{-- <td>{{$value->roll_number}}</td> --}}
            <td>{{$value->name}}</td>
            {{-- <th>Age</th>
            <th>Course</th> --}}
            {{-- <th>Address</th>
            <th>contect</th> --}}
            <td>{{$value->email}}</td>
            <td>
                <a href="{{route('profile',$value->roll_number)}}"><button>view</button></a>
                <a href="{{route('updateform', $value->roll_number)}}">
                   <button>Update</button>
                </a>
                <form action="{{route('student.delete',$value->roll_number)}}" method="POST" style="display:inline;">
                    @csrf
                     @method('DELETE')
                     <button type="submit">Delete</button>
                </form>
        
            </td>
        </tr>
@endforeach
</table>
<div class="foot">
     <a href="/home">Back to bashboad</a>
</div>
    
</body>
</html>
    