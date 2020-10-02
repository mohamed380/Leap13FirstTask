<?php 
    session_start();
?>
<!DOCTYPE html>

<html>
<head>
<!-- Bootstrap CDNs -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
<title>Home Page</title>

<!-- css file -->
<link rel="stylesheet" href="style.css">

</head>

<body class="container">

<div id='TracksContainer' class="row justify-content-center mt-3">
    
</div>

<form  id="loginForm">
<i onclick="closeForm()" class="closeForm">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>
  </i>
  <div class="form-group">
    <label >username</label>
    <input type="text" class="form-control" id="username" >
  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="loginError">
    <p>Username or password isn't correct!</p>
  </div>
  <button onclick="login()" type="button" class="btn btn-primary">Submit</button>
</form>
<!-- js file -->
<script type="text/javascript" src="script.js"></script>

</body>
</html>