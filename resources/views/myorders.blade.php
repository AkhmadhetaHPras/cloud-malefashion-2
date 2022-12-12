@extends('layouts.app')

@section('content')
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>My Orders</h4>
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}">Home</a>
                        <span>My Orders</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="myorders">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-12">
                @if ($message = Session::get('success'))
                <div class="alert alert-success mt-2">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div id="reviewresponse" class="mt-3">

                </div>
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#waiting" role="tab">Waiting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#processed" role="tab">Processed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#sent" role="tab">Sent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" id="pills-complate-tab" href="#completed" role="tab">Completed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#canceled" role="tab">Canceled</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#rejected" role="tab">Rejected</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Waiting Confirmation -->
                        <div class="tab-pane active" id="waiting" role="tabpanel">
                            @if($waiting->isEmpty())
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/empty.png') }}" class="mt-5" alt="" width="400px">
                            </div>
                            <div class="row ">
                                <h3 class="col-12 text-center">Oops no item, <div class="mt-1 continue__btn">
                                        <a href="{{ route('shop') }}">Continue Shopping</a>
                                    </div>
                                </h3>
                            </div>
                            @else
                            @foreach($waiting as $o)
                            <div class="product__details__tab__content">
                                <div class="checkout__order mb-4">
                                    <h3 class="mb-0" style="font-weight: 700;">#{{ $o->id }}</h3>
                                    <h4 class="order__title d-flex justify-content-between align-items-center">{{ Carbon\Carbon::parse($o->order_date)->format('F d, Y') }}
                                        <div class="address" style="font-weight:300">
                                            <div class="text-right" style="font-size: 16px;">{{ $o->address->street_address }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->city }} , {{$o->address->province}}, {{ $o->address->postal_code }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->name }} | {{ $o->address->telp }}</div>
                                        </div>
                                    </h4>
                                    <div class=" row mb-3">
                                        <div class="col">Product</div>
                                        <div class="col text-center">Size</div>
                                        <div class="col text-center">Qty</div>
                                        <div class="col text-right">Subtotal</div>
                                    </div>
                                    @foreach($o->detailorder as $p)
                                    <div class="row mb-2">
                                        <div class="col"><a href="{{ route('shop.details', $p->variant->product) }}" class="productlink__order">{{ $p->variant->product->product_name }}</a></div>
                                        <div class="col text-center">{{ $p->variant->size }}</div>
                                        <div class="col text-center">{{ $p->quantity }}</div>
                                        <div class="col text-right">Rp. {{ number_format($p->subtotal) }}</div>
                                    </div>
                                    @endforeach
                                    <ul class="checkout__total__all">
                                        <li>Total <span>Rp. {{ number_format($o->total) }}</span></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="note">
                                                <p>
                                                    {{ $o->note }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4"><button class="site-btn" data-toggle="modal" data-target="#cancelorder{{$o->id}}">CANCEL</button></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal  Confirmation Cancel-->
                            <div class="modal fade" id="cancelorder{{$o->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="cancelordertitle">Confirmation</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure to cancel this order?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('myorders.cancel', $o->id) }}" method="post">
                                                @csrf
                                                @method('put')
                                                <input type="submit" class="site-btn" value="Yes">
                                                <button type="button" class="site-btn-outline" data-dismiss="modal">No</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>

                        <!-- Processed -->
                        <div class="tab-pane" id="processed" role="tabpanel">
                            @if($processed->isEmpty())
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/empty.png') }}" class="mt-5" alt="" width="400px">
                            </div>
                            <div class="row ">
                                <h3 class="col-12 text-center">Oops no item, <div class="mt-1 continue__btn">
                                        <a href="{{ route('shop') }}">Continue Shopping</a>
                                    </div>
                                </h3>
                            </div>
                            @else
                            @foreach($processed as $o)
                            <div class="product__details__tab__content">
                                <div class="checkout__order mb-4">
                                    <h3 class="mb-0" style="font-weight: 700;">#{{ $o->id }}</h3>
                                    <a target="_blank" href="{{ route('invoice', $o->id) }}" class="text-primary">Download Invoice</a>
                                    <h4 class="order__title d-flex justify-content-between align-items-center">{{ Carbon\Carbon::parse($o->order_date)->format('F d, Y') }}
                                        <div class="address" style="font-weight:300">
                                            <div class="text-right" style="font-size: 16px;">{{ $o->address->street_address }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->city }} , {{$o->address->province}}, {{ $o->address->postal_code }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->name }} | {{ $o->address->telp }}</div>
                                        </div>
                                    </h4>
                                    <div class=" row mb-3">
                                        <div class="col">Product</div>
                                        <div class="col text-center">Size</div>
                                        <div class="col text-center">Qty</div>
                                        <div class="col text-right">Subtotal</div>
                                    </div>
                                    @foreach($o->detailorder as $p)
                                    <div class="row mb-2">
                                        <div class="col"><a href="{{ route('shop.details', $p->variant->product) }}" class="productlink__order">{{ $p->variant->product->product_name }}</a></div>
                                        <div class="col text-center">{{ $p->variant->size }}</div>
                                        <div class="col text-center">{{ $p->quantity }}</div>
                                        <div class="col text-right">Rp. {{ number_format($p->subtotal) }}</div>
                                    </div>
                                    @endforeach
                                    <ul class="checkout__total__all">
                                        <li>Total <span>Rp. {{ number_format($o->total) }}</span></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="note">
                                                <p>
                                                    {{ $o->note }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>

                        <!-- Sent -->
                        <div class="tab-pane" id="sent" role="tabpanel">
                            @if($sent->isEmpty())
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/empty.png') }}" class="mt-5" alt="" width="400px">
                            </div>
                            <div class="row ">
                                <h3 class="col-12 text-center">Oops no item, <div class="mt-1 continue__btn">
                                        <a href="{{ route('shop') }}">Continue Shopping</a>
                                    </div>
                                </h3>
                            </div>
                            @else
                            @foreach($sent as $o)
                            <div class="product__details__tab__content">
                                <div class="checkout__order mb-4">
                                    <h3 class="d-flex justify-content-between align-items-center mb-0" style="font-weight: 700;">#{{ $o->id }}
                                        <div class="text-right" style="font-size: 18px;">Due: {{ Carbon\Carbon::parse($o->delivery_date)->format('F d, Y') }}</div>
                                    </h3>
                                    <a href="{{ route('invoice', $o->id) }}" class="text-primary">Download Invoice</a>
                                    <h4 class="order__title d-flex justify-content-between align-items-center">{{ Carbon\Carbon::parse($o->order_date)->format('F d, Y') }}
                                        <div class="address" style="font-weight:300">
                                            <div class="text-right" style="font-size: 16px;">{{ $o->address->street_address }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->city }} , {{$o->address->province}}, {{ $o->address->postal_code }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->name }} | {{ $o->address->telp }}</div>
                                        </div>
                                    </h4>
                                    <div class=" row mb-3">
                                        <div class="col">Product</div>
                                        <div class="col text-center">Size</div>
                                        <div class="col text-center">Qty</div>
                                        <div class="col text-right">Subtotal</div>
                                    </div>
                                    @foreach($o->detailorder as $p)
                                    <div class="row mb-2">
                                        <div class="col"><a href="{{ route('shop.details', $p->variant->product) }}" class="productlink__order">{{ $p->variant->product->product_name }}</a></div>
                                        <div class="col text-center">{{ $p->variant->size }}</div>
                                        <div class="col text-center">{{ $p->quantity }}</div>
                                        <div class="col text-right">Rp. {{ number_format($p->subtotal) }}</div>
                                    </div>
                                    @endforeach
                                    <ul class="checkout__total__all">
                                        <li>Total <span>Rp. {{ number_format($o->total) }}</span></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="note">
                                                <p>
                                                    {{ $o->note }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <form action="{{ route('myorders.complated', $o->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="submit" class="site-btn" value="COMPLETE">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>

                        <!-- Completed -->
                        <div class="tab-pane" id="completed" role="tabpanel">
                            @if($completed->isEmpty())
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/empty.png') }}" class="mt-5" alt="" width="400px">
                            </div>
                            <div class="row ">
                                <h3 class="col-12 text-center">Oops no item, <div class="mt-1 continue__btn">
                                        <a href="{{ route('shop') }}">Continue Shopping</a>
                                    </div>
                                </h3>
                            </div>
                            @else
                            @foreach($completed as $o)
                            <div class="product__details__tab__content">
                                <div class="checkout__order mb-4">
                                    <h3 class="mb-0" style="font-weight: 700;">#{{ $o->id }}</h3>
                                    <h4 class="order__title d-flex justify-content-between align-items-center">{{ Carbon\Carbon::parse($o->order_date)->format('F d, Y') }}
                                        <div class="address" style="font-weight:300">
                                            <div class="text-right" style="font-size: 16px;">{{ $o->address->street_address }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->city }} , {{$o->address->province}}, {{ $o->address->postal_code }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->name }} | {{ $o->address->telp }}</div>
                                        </div>
                                    </h4>
                                    <div class=" row mb-3">
                                        <div class="col">Product</div>
                                        <div class="col text-center">Size</div>
                                        <div class="col text-center">Qty</div>
                                        <div class="col text-right"></div>
                                    </div>
                                    @foreach($o->detailorder as $p)
                                    <div class="row mb-2">
                                        <div class="col"><a href="{{ route('shop.details', $p->variant->product) }}" class="productlink__order">{{ $p->variant->product->product_name }}</a></div>
                                        <div class="col text-center">{{ $p->variant->size }}</div>
                                        <div class="col text-center">{{ $p->quantity }}</div>
                                        <div class="col text-right subtotal{{$p->id}}">
                                            @if(\App\Models\Review::where('order_id', $o->id)->where('product_id', $p->variant->product->id)->get()->isEmpty())
                                            <a href="#" class="text-dark" data-toggle="modal" data-target="#reviewmodal{{$p->id}}">REVIEW</a>
                                            @else
                                            Rp. {{ number_format($p->subtotal) }}
                                            @endif
                                        </div>

                                        <!-- Modal review-->
                                        <div class="modal fade" id="reviewmodal{{$p->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Review</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="reviewmodalresponse"></div>
                                                        <div class="review-form">
                                                            <div class="contact__form">

                                                                <div class="row">
                                                                    <div class="col-lg-12 mb-2">
                                                                        <div class="product__details__option__size">
                                                                            <div class="product__cart__item row mb-2">
                                                                                <div class="product__cart__item__pic col-4">
                                                                                    <img src="{{ asset('storage/'.$p->variant->product->thumbnail) }}" alt="" width="90px" />
                                                                                </div>
                                                                                <div class="product__cart__item__text col-8">
                                                                                    <h6 class="mb-0">{{ $p->variant->product->product_name }}</h6>
                                                                                    <p class="mb-1" style="font-size: 14px;">Size : {{ $p->variant->size }}</p>
                                                                                    <h5>Rp. {{ number_format($p->variant->product->price) }}</h5>
                                                                                </div>
                                                                            </div>
                                                                            <span>Rating:</span>
                                                                            <label for="1{{ $p->id }}">1
                                                                                <input type="radio" class="radio{{ $p->id }}" id="1{{ $p->id }}" value="1" name="rating{{ $p->id }}" />
                                                                            </label>
                                                                            <label for="2{{ $p->id }}">2
                                                                                <input type="radio" class="radio{{ $p->id }}" id="2{{ $p->id }}" value="2" name="rating{{ $p->id }}" />
                                                                            </label>
                                                                            <label for="3{{ $p->id }}">3
                                                                                <input type="radio" class="radio{{ $p->id }}" id="3{{ $p->id }}" value="3" name="rating{{ $p->id }}" />
                                                                            </label>
                                                                            </label>
                                                                            <label for="4{{ $p->id }}">4
                                                                                <input type="radio" class="radio{{ $p->id }}" id="4{{ $p->id }}" value="4" name="rating{{ $p->id }}" />
                                                                            </label>
                                                                            </label>
                                                                            <label for="5{{ $p->id }}">5
                                                                                <input type="radio" class="radio{{ $p->id }}" id="5{{ $p->id }}" value="5" name="rating{{ $p->id }}" />
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <textarea placeholder="Message" name="review" id="review{{$p->id}}"></textarea>
                                                                        <button class="site-btn" onclick='review("{{ $o->id }}", "{{ $p->id }}")'>Post Review</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <ul class="checkout__total__all">
                                        <li>Total <span>Rp. {{ number_format($o->total) }}</span></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="note">
                                                <p>
                                                    {{ $o->note }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 align-bottom text-right"><b>COMPLETED</b></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>

                        <!-- Canceled -->
                        <div class="tab-pane" id="canceled" role="tabpanel">
                            @if($canceled->isEmpty())
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/empty.png') }}" class="mt-5" alt="" width="400px">
                            </div>
                            <div class="row ">
                                <h3 class="col-12 text-center">Oops no item, <div class="mt-1 continue__btn">
                                        <a href="{{ route('shop') }}">Continue Shopping</a>
                                    </div>
                                </h3>
                            </div>
                            @else
                            @foreach($canceled as $o)
                            <div class="product__details__tab__content">
                                <div class="checkout__order mb-4">
                                    <h3 class="mb-0" style="font-weight: 700;">#{{ $o->id }}</h3>
                                    <h4 class="order__title d-flex justify-content-between align-items-center">{{ Carbon\Carbon::parse($o->order_date)->format('F d, Y') }}
                                        <div class="address" style="font-weight:300">
                                            <div class="text-right" style="font-size: 16px;">{{ $o->address->street_address }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->city }} , {{$o->address->province}}, {{ $o->address->postal_code }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->name }} | {{ $o->address->telp }}</div>
                                        </div>
                                    </h4>
                                    <div class=" row mb-3">
                                        <div class="col">Product</div>
                                        <div class="col text-center">Size</div>
                                        <div class="col text-center">Qty</div>
                                        <div class="col text-right">Subtotal</div>
                                    </div>
                                    @foreach($o->detailorder as $p)
                                    <div class="row mb-2">
                                        <div class="col"><a href="{{ route('shop.details', $p->variant->product) }}" class="productlink__order">{{ $p->variant->product->product_name }}</a></div>
                                        <div class="col text-center">{{ $p->variant->size }}</div>
                                        <div class="col text-center">{{ $p->quantity }}</div>
                                        <div class="col text-right">Rp. {{ number_format($p->subtotal) }}</div>
                                    </div>
                                    @endforeach
                                    <ul class="checkout__total__all">
                                        <li>Total <span>Rp. {{ number_format($o->total) }}</span></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="note">
                                                <p>
                                                    {{ $o-> note }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 align-bottom text-right"><b>CANCELED</b></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>

                        <!-- Rejected -->
                        <div class="tab-pane" id="rejected" role="tabpanel">
                            @if($rejected->isEmpty())
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/empty.png') }}" class="mt-5" alt="" width="400px">
                            </div>
                            <div class="row ">
                                <h3 class="col-12 text-center">Oops no item, <div class="mt-1 continue__btn">
                                        <a href="{{ route('shop') }}">Continue Shopping</a>
                                    </div>
                                </h3>
                            </div>
                            @else
                            @foreach($rejected as $o)
                            <div class="product__details__tab__content">
                                <div class="checkout__order mb-4">
                                    <h3 class="mb-0" style="font-weight: 700;">#{{ $o->id }}</h3>
                                    <h4 class="order__title d-flex justify-content-between align-items-center">{{ Carbon\Carbon::parse($o->order_date)->format('F d, Y') }}
                                        <div class="address" style="font-weight:300">
                                            <div class="text-right" style="font-size: 16px;">{{ $o->address->street_address }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->city }} , {{$o->address->province}}, {{ $o->address->postal_code }}</div>
                                            <div class="text-right" style="font-size: 14px;">{{ $o->address->name }} | {{ $o->address->telp }}</div>
                                        </div>
                                    </h4>
                                    <div class=" row mb-3">
                                        <div class="col">Product</div>
                                        <div class="col text-center">Size</div>
                                        <div class="col text-center">Qty</div>
                                        <div class="col text-right">Subtotal</div>
                                    </div>
                                    @foreach($o->detailorder as $p)
                                    <div class="row mb-2">
                                        <div class="col"><a href="{{ route('shop.details', $p->variant->product) }}" class="productlink__order">{{ $p->variant->product->product_name }}</a></div>
                                        <div class="col text-center">{{ $p->variant->size }}</div>
                                        <div class="col text-center">{{ $p->quantity }}</div>
                                        <div class="col text-right">Rp. {{ number_format($p->subtotal) }}</div>
                                    </div>
                                    @endforeach
                                    <ul class="checkout__total__all">
                                        <li>Total <span>Rp. {{ number_format($o->total) }}</span></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="note">
                                                <p>
                                                    {{ $o-> note }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 align-bottom text-right"><b>REJECTED</b></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
@if(!empty(Session::get('error_code')) && Session::get('error_code') == 7)
<script>
    $(function() {
        $('#pills-complate-tab').tab('show');
        $('#reviewresponse').html("");
        $('#reviewresponse').html("<div class='alert alert-success' role='alert'></div>");
        $('#reviewresponse .alert-success').text('Thankyou for the review');

        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 6000);
    });
</script>
@endif
<script>
    // first step
    $(document).ready(function() {

        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 4000);

    });

    function review(o, p) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var data = {
            'rating': $('.radio' + p + ':checked').val(),
            'review': $('#review' + p).val(),
        }

        console.log(data);

        $.ajax({
            type: "post",
            url: "/review/" + o + "/" + p,
            data: data,
            dataType: "json",
            success: function(response) {
                if (response.status == 400) {
                    // gagal
                    $('#reviewmodalresponse').html("");
                    $('#reviewmodalresponse').html("<div class='alert alert-danger' role='alert'></div>");
                    $.each(response.errors, function(key, err_value) {
                        $('.alert-danger').append('<li>' + err_value + '</li>');
                    });
                } else {
                    // berhasil

                    // $('#reviewmodal' + p).modal('hide');

                    // $('#reviewresponse').html("");
                    // $('#reviewresponse').html("<div class='alert alert-success' role='alert'></div>");
                    // $('#reviewresponse .alert-success').text(response.message);

                    // window.setTimeout(function() {
                    //     $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    //         $(this).remove();
                    //     });
                    // }, 4000);
                    window.location = '/reviewsuccess';
                    // $('.col.text-right.subtotal' + p).text('Rp. ' + response.subtotal);
                }
            }
        });
    }
</script>
@endsection