@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($products as $product)
        
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="menu-header">{{$product->title}}</div>
                <div class="mainMenu">
                    <div class="secondMenu">
                        <div>Kaina: {{$product->price}}</div>
                        <br><hr>
                        <div>Išpardavimo kaina: {{$product->sale}}</div>
                        <br><hr>
                        <div>Prekės aprašymas: <br>{{$product->description}}</div>
                        <br><hr>
                        <button type="submit" class="buttons">Į krepšelį</button>
                    </div>
                    @foreach ($product->getImages as $photo)
                    <img class="productImg" src="{{asset('/images/products/'.$photo->photo)}}">
                    
                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection