<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Catering Service</title>
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
<div class="row">
<div class="imgdsn mb-5 text-center ps-3 pe-1"><img class="col-lg-11" src="cateringbackgroundpicss.jpg" alt="Catering Web Image">
</div>
<div>
</div>
<div class="btndsn text-start">
  <h3 class="font-weight-bolder">To get the best Food</h3>
    <h3 class="font-weight-bolder">Stay with us and Order</h3>
  <h3 class="font-weight-bolder">Your Favourite Foods</h3>
  <form action="{{'login'}}" method="">
<button class="ms-5 btn btn-primary col-lg-1 text-center text-white">Cick Here</button>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>