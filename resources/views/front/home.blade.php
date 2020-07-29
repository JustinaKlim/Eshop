@extends('front.app')

@section('content')
<img class="heroImg" src="images/maistas.jpg">
<div class="containeris">
    
    @foreach ($products as $product)
            <div class="card">
                <div class="menu-header">{{$product->title}}</div>
                @foreach ($product->getImages as $photo)
                    <img class="productImg" src="{{asset('images/products/'.$photo->photo)}}">
                    @endforeach
                <div class="mainMenu">
                    <div class="secondMenu">
                        <div>Kaina: {{$product->price}}</div>
                        <hr>
                        <div>Prekės aprašymas: <br>{{$product->description}}</div>
                        <hr>
                    </div>
                    
                    <div class="form">
                        <input type="hidden" name="route" value="{{route('front.add-js')}}">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input class="inputs" type="text" name="count" value="0"><br><br>
                        <button class="add-button buttons" type="button">Į krepšelį</button>
                    </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

