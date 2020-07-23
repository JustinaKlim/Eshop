<span class="count">{{$count}}</span>
<span class="total">{{$total}}</span>
<span class="cur">€</span>
<div class="mini-cart-list">
    <ul>
        @foreach ($cartProducts as $cartProduct)
        <li>{{$cartProduct->title}} X {{$cart[$cartProduct->id]['count']}} {{$cart[$cartProduct->id]['price']}} €
            <form action="{{route('front.remove')}}" method="POST">
                <input type="hidden" name="product_id" value="{{$cartProduct->id}}">
                @csrf
                <button type="submit">-</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>