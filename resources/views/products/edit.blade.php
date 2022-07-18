<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Edit Products</title>
    <style>
    </style>
</head>
<body>
<form action="/products/update/{{ $product->id }}" methode="get" enctype="multipart/form-data">
@csrf

    <div class="containar">
        
    <h1> {{__('Edit Products')}}</h1> 
  <div class="mb-3">
    <label for="name" class="form-label">{{__('Name')}}</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{$product->name}}">
  </div>
  <div class="mb-3">
    <label for="name_ar" class="form-label">{{__('Name(Arabic')}}</label>
    <input type="text" class="form-control" id="name_ar" name="name_ar" aria-describedby="name_ar" value="{{$product->name_ar}}">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">{{__('Price')}}</label>
    <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}">
  </div>
  <div class="mb-3">
  <label for="image" class="form-label">{{__('Product Image')}}</label>
  <input class="form-control" type="file" id="image" name="image">
  <br>
  <img src="{{ asset( $product-> image_path) }}" style="max-height: 100px"alt="">
</div>
<div class="mb-3">
    <label for="categroy_id" class="form-label">{{__('Categroy Id')}}</label>
    <input type="number" class="form-control" id="categroy_id" name="categroy_id" value="{{$product->categroy_id}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>  
</body>
</html>