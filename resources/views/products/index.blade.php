<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title></title>
    <style>
    </style>
</head>
<body>
    <h1> {{__('Products List')}} </h1>
    <div class="container">
        <div class="row">
            @forelse($products as $product)
            <div class="col-md-3">
                <div class="card">
                <div class="card-header"> {{$product->name}} </div>
                <div class="card-body">
                    <img src="{{ asset($product-> image_path) }}" style="max-width:100%">
                </div>
                <div class="card-footer">
                    <ul>
                        <li>
                        {{$product->price}}
                        </li>
                        <li> 
                            <a href="/products/edit/{{$product->id}}">
                         <button class="btn btn-info">{{__('Edit')}}</button>
                            </a>
                        </li>
                        <li>
                            <a href="/products/delete">
                            <button class="btn btn-danger">{{__('Delete')}}</button>
                        
                            </a>
                        </li>

                    </ul>
                    

                </div>
            </div>
        </div>
        </div>
        @empty
           {{__('no data')}}

        @endforelse
        </div>
    
  
    
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>  

</body>
</html>