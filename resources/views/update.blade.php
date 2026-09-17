<html>
    <head>
        <title></title>
    </head>
    <style>
        body{
            background-color: rgb(140, 228, 214);
        }
        h1{
            text-align: center;
        }
        .pin{
            padding: 20px 110px;
            text-align:justify;
            border: solid 1px;
            margin: 100px auto;
            width: 100vh;
            border: none;
            background: #88e1d9;
            box-shadow: 0 0 10px rgb(102, 26, 26);
        }

        .input-submit{
            background: rgb(248, 249, 250);
            border: none;
            box-shadow: 0 0 10px rgb(113, 89, 89);
        }
        label{
            font-size: 20px;
        }
        input{
            width: 50%;
            height: 25px;
            border: none;
        }
        select{
            width: 40%;
            padding: 0.7%;
        }
    
        a{
            color: black;
            text-decoration: none;
     		line-break: none;
     		text-underline-position:none;
            padding: 17px 10px;
            margin: 4px;    
        }
    </style>
<body>
    <h1>Student Information Update</h1>
    @if($student)
    <form action="{{route('update',$student->roll_number) }}" method="post">
        @csrf
        
        @method('PUT')
        <div class="pin">
            <label for="name">Username:-</label><br>
            <input type="text"  id="name" name="name" value="{{old('name',$student->name  )}}">
            <br><br>
            <label for="pass">Password</label><br>
            <input type="password" name="pass" value="{{old('pass',$student->password)}}"> 
            <br><br>
            <label for="mail">Email id:-</label><br>
            <input type="mail" id="mail" name="email" value="{{old('email',$student->email)}}">
            <br><br>
             <label for="">Father's Name:-</label><br>
            <input type="text" name="fname" value="{{old('fname',$student->fname)}}">
            <br><br>
            <label for="no">Contact Number</label><br>
            <input type="number" id="no" name="contact" value="{{old('contact',$student->contact ) }}">
            <br><br>
            <label for="dob">Date of Birth:-</label><br>
            <input type="date" id="dob" name="dob" value="{{old('dob',$student->dob)}}">
            <br><br>
            <label for="add">Address:-</label><br>
            <input type="address" id="add" name="add" value="{{old('add',$student->add)}}">
            <br><br>
            <label for="course">Course:-</label>
            <select name="course" id="course">
    <option value="" disabled {{ old('course', $student->course ?? '')}}>Select Current Course</option>
    <option value="MDCA" {{ old('course', $student->course ?? '') }}>MDCA</option>
    <option value="ADCE" {{ old('course', $student->course ?? '') }}>ADCE</option>
    <option value="DCAP" {{ old('course', $student->course ?? '') }}>DCAP</option>
    <option value="Ethical Hacking" {{ old('course', $student->course ?? '') }}>Ethical Hacking</option>
    <option value="Graphic Design" {{ old('course', $student->course ?? '') }}>Graphic Design</option>
    <option value="Digital Marketing" {{ old('course', $student->course ?? '')  }}>Digital Marketing</option>
    <option value="BCA" {{ old('course', $student->course ?? '') }}>BCA</option>
    <option value="Hardware" {{ old('course', $student->course ?? '') }}>Hardware</option>
    <option value="Web Developer" {{ old('course', $student->course ?? '') }}>Web Developer</option>
</select>
            <br><br>
            <div class="fill">
                <button type="submit" class="input-submit"> Update</button></a>
        </div>
    </form>
    @else
    <p>Student not found</p>
    @endif
</body>
</html>