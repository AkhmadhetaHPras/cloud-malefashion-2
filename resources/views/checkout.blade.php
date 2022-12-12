@extends('layouts.app')

@section('content')
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Check Out</h4>
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('shop') }}">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="checkout spad">
    <div class="container">
        @if($cartitems->count() > 0)
        <div class="checkout__form">
            <form action="{{ route('myorders.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-lg-6">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <h6 class="checkout__title">Billing Details</h6>

                        <div class="checkout__input">
                            <p>Select Address<span>*</span></p>
                            @foreach($address as $a)
                            <div class="product__details__option container mb-2">
                                <div class="product__details__option__size row me-0">
                                    <label for="radioaddress{{$a->id}}" class="col-12 @if ($loop->first) active @endif">
                                        <div class="contact">
                                            {{ $a->name }} | {{ $a->telp }}
                                        </div>
                                        <div class="address">
                                            {{ $a->street_address }}, {{ $a->city }}, {{ $a->province }} | {{ $a->postal_code }}
                                        </div>
                                        <input type="radio" class="radioaddress" id="radioaddress{{$a->id}}" value="{{ $a->id }}" name="radioaddress" @if ($loop->first) required checked @endif/>
                                    </label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="checkout__input__checkbox">
                            <p for="acc">
                                Want to add new address? Create a new address <a href="{{ route('profile') }}" class="text-danger">here</a> first, and you can go back to checkout this order
                            </p>
                        </div>
                        <div class="checkout__input">
                            <p>Order notes<span>*</span></p>
                            <input type="text" placeholder="Notes about your order, e.g. special notes for delivery." name="note" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout__order">
                            <h4 class="order__title">YOUR ORDER</h4>
                            <div class="checkout__order__products">
                                Product <span>Subtotal</span>
                            </div>
                            <ul class="checkout__total__products">
                                @foreach($cartitems as $i)
                                <li>{{ $i->variant->product->product_name }} &times;{{ $i->quantity }}<span>Rp. {{ number_format($i->subtotal) }}</span>
                                    <div>Size: {{ $i->variant->size }}</div>
                                </li>
                                @endforeach
                            </ul>
                            <ul class="checkout__total__all">
                                <li>Total <span>Rp. {{ number_format($cartitems->sum('subtotal'))}}</span>
                                </li>
                            </ul>
                            <div class="checkout__input__checkbox">
                                <label for="acc-or">
                                    Cash On Delivery (COD)
                                    <input type="checkbox" id="acc-or" name="cod-checkbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>
                                After you receive the order, immediately check your order and make payment to the courier by COD
                            </p>
                            <input type="submit" class="site-btn" value="PLACE ORDER">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @else
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 text-center">
                <div class="blog__hero__text">
                    <h2>Your cart is empty, please select your items</h2>
                    <div class="continue__btn">
                        <a href="{{ route('shop') }}">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
        @endif

    </div>
</section>
@endsection