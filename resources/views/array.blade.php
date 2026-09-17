<html>
    <head>
        <title></title>
    </head>

       <style>
    
        caption{
            font-size: 34px;
            margin-bottom: 10px;
            padding-bottom: 5%;
        }
        table{
            border-collapse: collapse;
            text-align: center;
            min-width: 70%;
            margin: auto;
            padding: 0px;
            backdrop-filter: blur(55px);
            border: 2px solid  var(--primary-color);
            border-radius: 1px;
            color: rgb(14, 13, 13);
            box-shadow: 0px 0px 10px 2px rgba(0, 0, 0,3);
        }
        table tr th{
            padding: 5px;
            background-color: rgba(110, 51, 51, 0.2);
            
        }
        button{
            padding-left: 6%;
            color: white;
            background: blue;
            border: none;
            border-radius: 20px;
        }
        a{
            text-decoration: none;
            text-align: center;
            text-decoration-color: rgb(152, 152, 222);
        }
        body{
            width: 100%;
            padding: 10px;
            background-image: url("https://st2.depositphotos.com/1001069/6534/v/950/depositphotos_65347399-stock-illustration-colorful-light-gradient-background.jpg")
        }

    </style>
<body>
     <table border="2" cellspacing="1">
        <caption>All Employee Data</caption>
        <tr>
            {{-- <th>roll_number</th> --}}
            <th>Name</th>
            {{-- <th>Age</th>
            <th>Course</th> --}}
            {{-- <th>Address</th>
            <th>contect</th> --}}
            <th>Details</th>
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
            <td>
                <a href="{{route('profile',$value->name)}}">Details of {{$value->name}}</a>
            </td>
              <td>
                <a href="{{route('Update')}}">
                    <Button>Update</Button>
                </a>
                @method('DELETE')
                {{-- <a href="{{route('deleteStudent',{{'id'}})}}"> --}}
                <button>Delete</button>
                {{-- </a> --}}
            </td>
        </tr>
@endforeach
</table>
    
</body>
</html>