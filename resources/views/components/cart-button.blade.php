@if (session()->has('user'))
    <a href="cart" class="float">
        <i class="fa fa-shopping-cart my-float"></i>
    </a>
    <div class="label-container">
        <div class="label-text">Check your cart!</div>
        <i class="fa fa-play label-arrow"></i>
    </div>
@else
    <a href="cart" class="float">
        <i class="fa fa-shopping-cart my-float"></i>
    </a>
    <div class="label-container">
        <div class="label-text">Login to order!</div>
        <i class="fa fa-play label-arrow"></i>
    </div> 
@endif

