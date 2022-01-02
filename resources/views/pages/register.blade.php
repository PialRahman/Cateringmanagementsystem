<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#FF8000;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color:#FFDD33;
  color: black;
}

.active {
  background-color: #04AA6D;
}
.navigatesection{
  width: 100%;
}
.imgdsn{
  width:1550px;
  height:500px;
}
.btndsn{
  margin-left:80px;
  margin-top: -450px;
  font-style: italic;

}
body{
  background-color: #FFFF80;
}
</style>
<body bgcolor="#E6E6FF">
</head>
<body>
  <div class="row ms-8 text-center">
    <div class="col-lg-4"></div>
    <div class="navigatesection ms-1 ">
<ul >
 <li><h2 class="text-white ms-4">Catering Service</h2></li> 
  <li><a class="ms-5" href="{{route('index')}}">Home</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="#news">Contact</a></li>
  <li><a href="{{route('login')}}">Food Items</a></li>
  <li><a href="{{'login'}}">Log in</a></li>
  <li><a href="{{'register'}}">Register</a></li>
  <li><form action="{{route('search')}}" method="get">
      <input class="m-2" type="text" placeholder="Search Menu.." name="query">
      <button class="btn btn-danger" type="submit"><i class="fa fa-search"></i></button>
    </form></li>
</ul>
</div>
</div>
<div class="container">
<div class="row text-center ms-5 ">
  <div class="border border-2 border-warning col-lg-8 mt-4">
    <h2 class="text-danger pb-2 ps-2 text-center">Register</h2><hr><br>
<form action="{{'save'}}" method="post" enctype="mutipart/form-data">
  @if(Session::get('success'))
      <div class="alert alert-success">
      {{Session::get('success')}}
    </div> 
    @endif
     @if(Session::get('fail'))
      <div class="alert alert-danger">
      {{Session::get('fail')}}
    </div> 
    @endif
  {{csrf_field()}}
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" placeholder="Enter Name"><span class="text-danger">@error('name'){{$message}}@enderror</span><br><br>
  <label for="email">Email:</label>
  <input type="text" id="email" name="email" placeholder="Enter Email"><span class="text-danger">@error('email'){{$message}}@enderror</span><br><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" placeholder="Enter Password"> <span class="text-danger">@error('password'){{$message}}@enderror</span><br><br>
  <input class="btn btn-warning text-white" type="submit" value="Register"><br><br>
</form>
</div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>