<html >
<head>
  <meta charset="UTF-8">
  <title>Login form</title>
  <style>

  </style>
</head>

<body>
  <div class="A">
  <div>
    <div onclick="changeTab(this)" data-tab="login">Student</div>
    <div onclick="changeTab(this)" data-tab="signup">Teacher</div>
  </div>
  
  
  <div class="body" id="form-body">
    <div class="login">
      <div class="form-row">
        <label for="">Email</label>
        <input type="text" placeholder="Email">
      </div>
      <div class="form-row">
        <label for="">Password</label>
        <input type="password" placeholder="Password">
      </div>
      <div class="rem-row">
        <input type="checkbox" id="rem">
        <label for="rem">Remember me</label>
      </div>
      <div class="form-row">
        <button>Login</button>
      </div>
      <div class="row">
        <span>OR</span>
      </div>
      <div class="footer">
        <div class="social-form fb">
          <i class="fa fa-facebook"></i> Login with Facebook
        </div>
        <div class="social-form google">
          <i class="fa fa-google"></i> Login with Google
        </div>
      </div>
    </div>
    <div class="signup">
      <div class="form-row">
        <label for="">Name</label>
        <input type="text" placeholder="Name">
      </div>
      <div class="form-row">
        <label for="">Email</label>
        <input type="text" placeholder="Email">
      </div>      
      <div class="form-row">
        <label for="">Password</label>
        <input type="password" placeholder="Password">
      </div>
      <div class="form-row">
        <label for="">Retype Password</label>
        <input type="password" placeholder="Password">
      </div>      
      <div class="rem-row">
        <input type="checkbox" id="agr">
        <label for="agr">Agree terms & conditions.</label>
      </div>      
      <div class="form-row">
        <button>Sign up</button>
      </div>      
    </div>
  </div>
</div>
  
    <script  src="js.js"></script>

</body>
</html>