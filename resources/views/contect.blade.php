<html>
    <head>
        <title></title>
    </head>
    <style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body{
  height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background: linear-gradient(135deg, #525667, #080808);
}

.login-container{
  display:flex;
  justify-content:center;
  align-items:center;
  width:100%;
}

.login-card{
  width:350px;
  padding:40px;
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(15px);
  border-radius:20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
  text-align:center;
  color:white;
}

.login-card h2{
  margin-bottom:10px;
}

.login-card p{
  margin-bottom:20px;
  font-size:14px;
  color: #e0e0e0;
}

.input-field{
  width:100%;
  padding:12px;
  margin:10px 0;
  border:none;
  border-radius:10px;
  outline:none;
  font-size:14px;
}

.btn-login{
  width:100%;
  padding:12px;
  margin-top:10px;
  border:none;
  border-radius:10px;
  background: #ffffff;
  color: #29252c;
  font-weight:bold;
  cursor:pointer;
  transition: all 0.3s ease;
}

.btn-login:hover{
  background:#4fb548;
  color:rgb(248, 235, 235);
  transform: scale(1.05);
}

.forgot{
  margin-top:15px;
  font-size:12px;
  color:#e0e0e0;
  cursor:pointer;
  text-decoration: underline;
}
a{
  margin-top:15px;
  font-size:12px;
  color:#e0e0e0;
  cursor:pointer;
  text-decoration: underline;
}
</style>  
<body>
    <div class="login-container">
        <div class="login-card">
    <h2>Welcome Back</h2>
    <p>Sign in to continue</p>
          
    <form action="/register" method="post">
      @csrf

    <input type="text" placeholder="Username" class="input-field" name="name" required >
    <input type="password" placeholder="Password" class="input-field" name="password" required>

    {{-- <a href="/array"> --}}
    <button class="btn-login" type="submit">Login</button>
    </form>
    {{-- </a> --}}
    <p class="forgot">Forgot Password?</p>
    <a href="/login">Register</a>

    @if(session('error'))
    <p style="color:red">{{ session('error') }}</p>
    @endif
  </div>
</div>
</body>
</html>