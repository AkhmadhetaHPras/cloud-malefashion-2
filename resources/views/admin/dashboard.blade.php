@extends('admin.layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-12 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-9">
          <div class="card-body">
            <h5 class="card-title text-primary">Hi {{Auth::user()->name}}! 🎉</h5>
            <p class="mb-4">
              Welcome back to admin dashboard
            </p>
          </div>
        </div>
        <div class="col-sm-3 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{asset('admin/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 mb-4 order-0">
    <div class="row">
      <div class="col-3 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('admin/img/icons/unicons/product.png')}}" alt="chart success" class="rounded" />
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Products</span>
            <h3 class="card-title mb-2">{{$product}}</h3>
            <small class="text-success fw-semibold">total items</small>
          </div>
        </div>
      </div>
      <div class="col-3 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('admin/img/icons/unicons/user.png')}}" alt="Credit Card" class="rounded" />
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
              </div>
            </div>
            <span class="d-block mb-1">Users</span>
            <h3 class="card-title text-nowrap mb-2">{{$customer}}</h3>
            <small class="text-danger fw-semibold"></i>total customers</small>
          </div>
        </div>
      </div>
      <div class="col-3 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('admin/img/icons/unicons/rating.png')}}" alt="Credit Card" class="rounded" />
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Ratings</span>
            <h3 class="card-title mb-2">{{ substr($rating, 0, 1) }}</h3>
            <small class="text-warning fw-semibold"></i> average stars</small>
          </div>
        </div>
      </div>
      <div class="col-3 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('admin/img/icons/unicons/briefcase.png')}}" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
              </div>
            </div>
            <span class="d-block">Cart</span>
            <h3 class="card-title mb-2">{{$customercart}}</h3>
            <small class="text-primary fw-semibold"></i> items in customer cart</small>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Order Statistics -->
      <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between pb-0">
            <div class="card-title mb-0">
              <h5 class="m-0 me-2">Order Statistics</h5>
              <small class="text-muted">Rp. {{number_format($sales)}} Total Sales</small>
            </div>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="d-flex flex-column align-items-center gap-1">
                <h2 class="mb-0 mt-1">{{$order}}</h2>
                <span>Total Orders</span>
              </div>
            </div>
            <ul class="p-0 m-0">
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-check-square'></i></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Completed</h6>                   
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">{{$completed}}</small>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-info"><i class='bx bx-send'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Sent</h6>                    
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">{{$sent}}</small>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-warning"><i class='bx bx-loader-circle'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Processed</h6>                    
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">{{$processed}}</small>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-secondary"><i class='bx bx-time-five'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Waiting Confirmations</h6>                  
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">{{$waiting}}</small>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-danger"><i class='bx bx-error-alt'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Cancelled</h6>                  
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">{{$canceled}}</small>
                  </div>
                </div>
              </li>
              <li class="d-flex">
                <div class="avatar flex-shrink-0 me-3">
                  <span class="avatar-initial rounded bg-label-dark"><i class='bx bx-block'></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Rejected</h6>                  
                  </div>
                  <div class="user-progress">
                    <small class="fw-semibold">{{$rejected}}</small>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Order Statistics -->

      <!-- Transactions -->
      <div class="col-md-6 col-lg-8 order-2 mb-4">
        <div class="card h-100">
          <div style="padding-bottom: 1px;" class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">
              <img src="{{asset('admin/img/icons/unicons/winner.png')}}" alt="Oneplus" height="32" width="32">
              Best Products
            </h5>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
              <tr>
                  <th style=" width: 20%;">Product</th>
                  <th style="width: 20%;">Category</th>
                  <th style="width: 15%;">Price</th>
                  <th style="width: 10%;">Rating</th>                  
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach($bestproduct as $p)
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{asset('storage/'.$p->thumbnail)}}" alt="Oneplus" height="32" width="32" class="me-2">
                      <div class="d-flex flex-column">
                        <span class="fw-semibold lh-1">{{$p->product_name}}</span>
                        <small class="text-muted">{{$p->tags}}</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    @if($p->category_id == 1)
                    <span class="badge bg-label-info rounded-pill badge-center p-3 me-2"><i class='bx bx-shape-polygon bx-xs'></i></i></span> Accessories
                    @elseif($p->category_id == 2)
                    <span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class='bx bx-shopping-bag bx-xs'></i></span> Bags
                    @elseif($p->category_id == 3)
                    <span class="badge bg-label-warning rounded-pill badge-center p-3 me-2"><i class='bx bxs-t-shirt bx-xs'></i></span> Shirts
                    @elseif($p->category_id == 4)
                    <span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"><i class='bx bx-heart-circle bx-xs'></i></i></span> Shoes
                    @endif
                  </td>
                  <td>
                    <div class="text-muted lh-1"><span class="text-primary fw-semibold">Rp {{number_format($p->price)}}</span></div>                  
                  </td>
                  <td><span class="badge {{$p->rating >= 4 ? 'bg-label-success' : 'bg-label-warning'}}">{{$p->rating}}</span></td>                  
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--/ Transactions -->
    </div>
  </div>
</div>
@endsection