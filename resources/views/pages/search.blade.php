<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Searched Food Items</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-2">
        <ul class="bg-warning ms-5">
          <li><a href="">Trending Item</a></li>
          <li><a href="">Recent Item</a></li>
          <li><a href="">Offered Item</a></li>
        </ul>
      </div>
      <div class="col-lg-10">
  <center> <h1 class="text-primary">Searched Results:</h1></center>
     @if(count($fooditem)>0)
    @foreach($fooditem as $fooditems)
    <div class="w3-card-4 mt-2 mb-2" style="width:100%;">
     <header class="w3-container"><h1 class="text-center">{{$fooditems->name}}</h1></header>
    <div class="w3-container">
      <img class="card-img-top" src="{{ asset('uploads/fooditems/'. $fooditems->image)}}" alt="Food Item Image" height="370px" width="120px">
      <center><h5>Food Item Details:{{$fooditems->description}}</h5></center>
     <center><footer class="w3-container"><h1>Price: {{$fooditems->price}} tk</h1>
      <footer class="w3-container">
      <center><a href="" class="crtdsn btn btn-danger ms-2">Order Menu</a><br><br>
          </center>
        </footer>
  </div>
</div>
@endforeach
@else
<p class="alert alert-danger">No Result Found!</p>
@endif
 
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>