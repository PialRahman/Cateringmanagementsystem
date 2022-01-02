<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ordered Menu Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	.chkdsn{
   background-color:#CC2000;
  border:none;
  color: white;
  float: left;
  margin-left: 650px;
  padding:5px 5px ;
}
.bckcr{
	background-color:blue;
  border:none;
  color: white;
  float: left;
  margin-left: 655px;
  padding:5px 6px ;
}
body{
	background-color:#FFFF80;
	</style>
}

<body>
	<center>
<p id="chckutmsg"></p>
<h1>Ordered Menu</h1>
<table class="table table-bordered text-black m-2">
<thead>
	<tr class="bg-warning text-white">
		<th>Name</th>
		<th>Description</th>
		<th>Price:</th>
		<th>Quantity</th>
	</tr>
</thead>
<tbody>
	@foreach($orderedfooditem as $orderfooditems)
	<tr>
		
		<td>{{$orderfooditems->name}}</td>
		<td>{{$orderfooditems->description}}</td>
		<td>{{$orderfooditems->price}}</td>
		<td>{{$orderfooditems->quantity}}</td>
		

	</tr>
@endforeach
	</tbody>	
</table>
<br><br>
<form action="" method="">
<button class="chkdsn" onclick="checkoutfunction()">Checkout</button>

<script>
	function checkoutfunction(){

  document.getElementById("chckutmsg").innerHTML = "Order has been placed";
}
</script>
</form>
<br><br><br>
<form action="{{route('viewfoodmenuitems')}}" method="">
<button class="bckcr">Back</button>
</form>
</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>