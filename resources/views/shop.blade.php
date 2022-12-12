@extends('layouts.app')

@section('content')
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Shop</h4>
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop__sidebar">
                    <div class="shop__sidebar__search">
                        <!-- search form -->
                        <form action="{{ route('shop') }}" method="get">
                            <input type="text" value="{{ request('search') }}" name="search" placeholder="Search..." />
                            <button type="submit">
                                <span class="icon_search"></span>
                            </button>
                        </form>
                    </div>

                    <!-- Tags Accordion -->
                    <div class="shop__sidebar__accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories">
                                            <ul class="nice-scroll">
                                                @foreach($categories as $c)
                                                <li><a href="{{ route('shop.categoryfilter', $c) }}">{{ $c->category }} ({{ $c->product->count() }})</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                </div>
                                <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__brand">
                                            <ul>
                                                @foreach($brands as $b)
                                                <li><a href="{{ route('shop.brandfilter', $b) }}">{{ $b->name }} ({{ $b->product->count() }})</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop__product__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__left">
                                <p></p>
                            </div>
                        </div>

                        <!-- SORT PRICE -->
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        </div>
                    </div>
                </div>

                <!-- PRODUCT LIST -->
                <div class="row">
                    @if($products->isEmpty())
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/empty.png') }}" class="mt-5" alt="" width="400px">
                    </div>
                    <div class="col-12 text-center">
                        <h3>Oops no item</h3>
                    </div>
                    @else
                    @foreach($products as $p)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/'.$p->thumbnail) }}">
                                <ul class="product__hover">
                                    <li>
                                        <a href="{{ route('shop.details', $p) }}"><i class="d-flex justify-content-center align-items-center fa fa-search text-dark"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>{{ $p->product_name }}</h6>
                                <a href="#" class="add-cart" onclick='addtocart("{{$p->variant->first()->id}}")'>+ Add To Cart</a>
                                <div class="rating">
                                    @for($i = 0; $i < $p->rating; $i++)
                                        <i class="fa fa-star"></i>
                                        @endfor
                                        @for($i = 0; $i < 5-$p->rating; $i++)
                                            <i class="fa fa-star-o"></i>
                                            @endfor
                                </div>
                                <h5>Rp. {{ number_format($p->price) }}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>

                <!-- PAGINATION -->
                <div class="row">
                    <div class="col-lg-12">
                        {{ $products->links('vendor.pagination.custom') }}
                        <!-- <div class="product__pagination">
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span>...</span>
                            <a href="#">21</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection