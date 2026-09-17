<html>
    <head>
        <title>login </title>
    </head>
    <style>
        *{
            margin: 0;
            padding:0;
            box-sizing: border-box;
        }
        body{
            background: linear-gradient(135deg,#56d2dd, #6657db, #5fefc9);
            font-family:Arial;
            color: var(--second-color);
            position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        a{
            text-decoration: none;
                color: var(--second-color);
        }
        a.hover{
            text-decoration: underline;
        }
        .wrapper{
            min-width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 50vh;
            background-color: rgba(173, 108, 108, 0.2);
        }
        .login_box{
            position: relative;
            width: 480px;
            backdrop-filter: blur(55px);
            border: 2px solid  var(--primary-color);
            border-radius: 15px;
            margin: auto;
            padding: 4cm 2.5cm 0.2cm 2.5cm;
            color: white;
            box-shadow: 0px 0px 10px 2px rgba(0, 0, 0,3);
        }
        .login-header{
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
            background-color:rgb(250, 250, 250);
            width: 190px;
            height: 70px;
            border-radius: 0 0 20px 20px ;
        }
        .login-header span{
            font-size: 30px;
            color: black;
        }
        .login-header::before{
            content: "";
            position:absolute;
            top: 0;
            left: -30px;
            width: 30px;
            height: 30px;
            border-top-right-radius: 50%;
            background-color: transparent;
            box-shadow: 15px 0 0 0 rgb(253, 253, 253);
        }
        .login-header::after{
            content: "";
            position:absolute;
            top: 0;
            right: -30px;
            width: 30px;
            height: 30px;
            border-top-left-radius: 50%;
            background: transparent;
            box-shadow: -15px 0 0 0 rgb(254, 253, 253);
        }
        .input_box{
            position: relative;
            display: flex;
            flex-direction: column;
            margin: 10px 0;
        }
        .input-field{
            width: 100%;
            height: 55px;
            font-size: 16px;
            background: transparent;
            color: white;
            padding-inline: 20px 50px;
            border: 2px solid white;
            border-radius: 30px;
            outline: none;
        }
        #user{
            margin-bottom: 10px;
        }
        .label{
            position: absolute;
            top: 15px;
            left: 20px;
            transition: 2s;
        }
        .input-field:focus ~ .label,
        .input-field:valid ~ .label{
            position: absolute;
            top: -10px;
            left: 20px;
            font-size: 14px;
            background-color: white;
            border-radius: 30px;
            color: black;
            padding: 0  10px;
        }
        .remember-forget{
            display: flex;
            justify-content: space-between;
            font-size: 15px;
        }
        .input-submit{
            width: 100%;
            height: 50px;
            background: wheat;
            font-size: 16px;
            font-weight: 500;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: .3s;
        }
        .input-submit:hover{
            background:white;
        }
        .register{
            text-align: center;
        }
        .register a{
            font-weight: 500;
        }
        option{
            background-color: #3f2f4b;
        }
        @media only screen and (max-width:564px){
            .wrapper{
                padding: 40px;
            }
            .login_box{
                padding: 7.5cm 1.5cm 4cm 1.5cm;
            }
        }
    
    </style>
<body>
    <form method="post" action="{{route('addStudent')}}">
         
    @csrf
        <div class="login_box">
            <div class="login-header">
                <span>Register</span>
            </div>

            <div class="input_box">
                <input type="text" id="roll" class="input-field" placeholder="This input will genrate automatic" readonly>
                <label for="roll" class="label">Roll number</label>
            </div>
            <div class="input_box">
                <input type="text" id="user" class="input-field" name="name" required>
                <label for="user" class="label">Username</label>
                <i class="bx bx-user icon"></i>
            </div>
              <div class="input_box">
                <input type="password" id="pass" class="input-field" name="password" required>
                <label for="pass" class="label">Password</label>
                <i class="bx bx-lock-alt icon"></i>
            </div>
            <div class="input_box">
                <input type="email" id="mail" class="input-field"name="email" required>
                <label for="mail" class="label"> Email Id</label>
            </div>
            <div class="input_box">
                <input type="text" id="fname" class="input-field" name="fname" required>
                <label for="fname" class="label"> Father's name</label>
            </div>
            <div class="input_box">
                <input type="Number" id="num" class="input-field" name="contact" required>
                <label for="num" class="label">Contact No</label>
            </div>
            <div class="input_box">
                <input type="date" id="dob" class="input-field" name="dob" required>
                <label for="dob" class="label">Date of Birth</label>
            </div>
            <div class="input_box">
                <input type="address" id="add" class="input-field" name="add" required>
                <label for="add" class="label">Address</label>
            </div>
            <div class="input_box">
            <select name="course" id="course" class="input-field ">
                <option selected>Select Current Course</option>
                <option >MDCA</option>
                <option >ADCE   </option>
                <option >DCAP</option>
                <option >Ethical Hacking</option>
                <option >Graphic Design</option>
                <option >Digital Marketing</option>
                <option >BCA</option>
                <option >Hardware</option>
                <option >Web Devloper</option>
            </select>
            </div>
            <div class="remember-forget">
                <div class="remember-me">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div class="forget">
                    <a href="">Forget Password ?</a>
                </div>
            </div>
            <br>
            <div class="register">
                <span><a href="{{url('/contect')}}">I have an account?</a>    <a href="{{url('/home')}}">Dashboad</a></span>
            </div>
             <div class="input_box">
                <input type="submit" class="input-submit" value="Register Account">
            </div>
        </div>
    </div>

    </form>
</body>
</html>