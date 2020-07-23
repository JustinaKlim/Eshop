@extends('front.app')

@section('content')
<div class="containeris">
    @foreach ($products as $product)
   
        
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
                    </div>
                    @foreach ($product->getImages as $photo)
                    <img class="productImg" src="{{asset('images/products/'.$photo->photo)}}">
                    @endforeach
                    <form action="{{route('front.add')}}" method="POST" class="add-form">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="text" name="count" value="0"><br><br>
                        @csrf
                        <button type="submit" class="buttons">Į krepšelį</button>
                    </form>
                </div>
            </div>
        
    
    @endforeach
</div>
@endsection
