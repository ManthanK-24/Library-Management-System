<?php 
session_start();
error_reporting(0);
if($_SESSION['lid']==true)
{
	
}
else
{
    header('location:index.php');	
}
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale="0">
<meta http-equiv="x-UA-compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=poppins:400,500&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
#table {
padding:10px;
width:100%;
border-radius:5px;

}
#table1 {
padding:10px;
width:50%;
border-radius:5px;

}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}



body{
    
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

</style>
</head>
<body>
<?php
$flag=0;
$slag=0; 
$name="";
$id=0;
$i=1;
$str1="";
$temp="";
?>
<div style="height:60px;width:100%;background-color:white;">
   <div style="height:100%;width:50%;float:left;">
       <img src="/nidhi/logo.jfif" style="height:100%;width:22%;">
   </div>
</div>
<div class="topnav">
  <a href="lp.php">Home</a>
  <a href="Issued_book.php">Issued Books</a>
  <a href="Transactions.php">Transactions</a>
  <a href="logout.php" style="float:right;">Logout</a>
  <a class="active" href="librarian-profile.php" style="float:right;">Your Profile</a>
  
</div>
<div class="container">
    <div class="main-body">
    
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://mpng.subpng.com/20180602/ssk/kisspng-login-computer-icons-password-login-5b131491279ac1.5147136415279771051622.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $_SESSION['liname']; ?></h4>
                      <p class="text-secondary mb-1"></p>
                      <p class="text-muted small"><?php echo $_SESSION['lcollege']; ?></p>
                     
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-2">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-10 text-secondary">
                      <?php echo $_SESSION['liname']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-2">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-10 text-secondary">
                     <?php echo $_SESSION['lemail']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-2">
                      <h6 class="mb-0">College</h6>
                    </div>
                    <div class="col-sm-10 text-secondary">
                      <?php echo $_SESSION['lcollege']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-2">
                      <h6 class="mb-0">Unique ID</h6>
                    </div>
                    <div class="col-sm-10 text-secondary">
                      <?php echo $_SESSION['lid']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-2">
                      <h6 class="mb-0">Birthday</h6>
                    </div>
                    <div class="col-sm-10 text-secondary">
                      <?php echo $_SESSION['lbd']; ?>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
    </div>
</body>
</html>
