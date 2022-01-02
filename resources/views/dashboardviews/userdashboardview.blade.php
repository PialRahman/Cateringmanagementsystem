<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Dashboard view</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
.usrdshbrddsn {
	list-style-type:none;
	background-color: orange;
	margin-left:-104px;
}
.usrdshbrddsn ul{
	list-style-type:none;
	background-color: orange;
	margin-right: 30px;
	color: white;
	overflow: hidden;


	
}
li a:hover:not(.active) {
  background-color:pink;
  width:100%;
}
.usrdshbrddsn ul li{
	margin-top: 40px;

}
.usrdshbrddsn ul li a{
	text-decoration: none;
	color: white;
	font-size: 20px;
	display: block;
}		
body{
		background-color:white;
}

</style>
<body>
<div class="container">
	<div class="row ">
		<div class="col-lg-3 border usrdshbrddsn text-white" style="height:800px;">
			<h2>User Dashboard</h2>
			<ul>
				<li><a href="">Profile</a></li>
				<li><a href="{{route('viewfoodmenuitems')}}">Order</a></li>
				<li><a href="{{route('vieworderedfooditems')}}">View Orders</a></li>
				<li><a href="{{route('login')}}">Log out</a></li>
			</ul>

		</div>
		<div class="col-lg-6 border ms-2 p-5 mt-4 border border-2" style="height:400px;">
			<h2 class="text-center">Hi {{$Loggeduserinfo->name}},welcome to userdashboard</h2>
			<h3 >Name: {{$Loggeduserinfo->name}}</h3>
			<h3>Email: {{$Loggeduserinfo->email}}</h3>
		</div>
		<div class="col-lg-2 border border-2 p-5 ms-1 mt-4" style="height:400px; width:300px;">
			<h1>Orders</h1>
			</div>
	</div>
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>