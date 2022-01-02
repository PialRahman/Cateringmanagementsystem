<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fooditem Details Page</title>
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	body{
		background-color: #FFFF80;
	}
</style>
<body>
	<div class="col-lg-10 ms-4">
<h1>Food Item Details</h1>
<h3>Food Item Name:{{$fooditem->name}}</h3>
 <img class="card-img-top" src="{{ asset('uploads/fooditems/'. $fooditem->image)}}" alt="Sony phone image" height="600" width="200">
<h3>Food Item Name:{{$fooditem->description}}</h3>
<h3>Food Item Price:{{$fooditem->price}}</h3>
<form action="{{route('fooditemsstore')}}" method="post">
	@if(Session::get('success'))
  <div class="alert alert-success">
    {{Session::get('success')}}
</div>
     @endif
    {{csrf_field()}}
  <input type=hidden name="id" value="{{$fooditem->id}}">
{{-- <label for="name">Item:</label><br> --}}
  <input type="hidden"  name="name" value="{{$fooditem->name}}" ><br><br>
 {{--  <label for="description">Description:</label><br> --}}
  <input type="hidden"  name="description" value="{{$fooditem->description}}" ><br><br>
{{--   <label for="price">Price</label><br> --}}
  <input type="hidden" name="price" value="{{$fooditem->price}}"><br><br>
  <label for="quantity">Quantity:</label><br>
  <input type="text"  name="quantity" ><br><br>
  <input class="btn btn-danger text-white mb-4" type="submit" value="Place order">
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>