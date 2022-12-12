@extends('admin.layouts.app')

<!-- Content Section -->

@section('content')

<!-- Users List Table -->
<div class="card">
  <!-- Tabel Start -->
  <div class="card-datatable table-responsive">
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
      <!-- Option Table Start -->
      <div class="row mx-2">
        <!-- Button table start -->
        <div class="col-md-10">
          <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-start flex-md-row flex-column mb-3 mb-md-0">
            <div class="dt-buttons">
              <!-- btn add user -->
              <button class="dt-button add-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" onclick="location.href='/products/add'">
                <span>
                  <i class="bx bx-plus me-0 me-sm-2"></i>
                  <span class="d-none d-lg-inline-block">Add New Products</span>
                </span>
              </button>
              <!-- /btn add user -->
            </div>
          </div>
        </div>
        <!-- Button table end -->

      </div>
      <!-- Option Table End -->

      <div class="row">
        <div class="col-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        </div>
      </div>
      <!-- Tabel start -->
      <table class="datatables-users table border-top dataTable no-footer dtr-column collapsed" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1140px;">

        <thead>
          <tr role="row">
            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 80px;" aria-label="User: activate to sort column ascending" aria-sort="descending">#ID</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 445px;" aria-label="Role: activate to sort column ascending">Products</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 152px;" aria-label="Plan: activate to sort column ascending">Category</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 204px;" aria-label="Billing: activate to sort column ascending">Brand</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 186px;" aria-label="Status: activate to sort column ascending">Price</th>
            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 148px;" aria-label="Actions">Actions</th>
          </tr>
        </thead>

        <tbody>
          @foreach($products as $p)
          <!-- product1 -->
          <tr class="odd">
            <td class="sorting_1"><a href="{{route('products-view', $p->id)}}">#{{$p->id}}</a></td>
            <td class="sorting_1">
              <div class="d-flex justify-content-start align-items-center">
                <!-- Photo Profile -->
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{asset('storage/'.$p->thumbnail)}}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <!-- Name & email-->
                <div class="d-flex flex-column">
                  <a href="{{ route('products-view', $p->id) }}" class="text-body text-truncate">
                    <span class="fw-semibold">{{$p->product_name}}</span>
                  </a>
                  <small class="text-muted">{{$p->tags}}</small>
                </div>
              </div>
            </td>
            <!-- roles -->
            <td>
              <span class="text-truncate d-flex align-items-center">
                @if($p->category->id == 1)
                <span class="badge badge-center rounded-pill bg-label-info w-px-30 h-px-30 me-2">
                  <i class='bx bx-shape-polygon bx-xs'></i></span> {{$p->category->category}}
                @elseif($p->category->id == 2)
                <span class="badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30 me-2">
                  <i class='bx bx-shopping-bag bx-xs'></i></span>  {{$p->category->category}}
                @elseif($p->category->id == 3)
                <span class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30 me-2">
                    <i class='bx bxs-t-shirt bx-xs'></i></span> {{$p->category->category}}
                @elseif($p->category->id == 4)
                <span class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30 me-2">
                  <i class='bx bx-heart-circle bx-xs'></i></span>  {{$p->category->category}}
                @endif                 
                </span>
            </td>
            <!-- Tags -->
            <td><span class="fw-semibold">{{$p->brand->name}}</span></td>
            <!-- Price -->
            <td>Rp {{number_format($p->price)}}</td>

            <td>
              <div class="d-inline-block">
                <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="{{ route('products-view', $p->id) }}" class="dropdown-item">View</a>
                </div>
              </div>
            </td>
          </tr>
          <!-- /product1 -->
          @endforeach        

        </tbody>
      </table>
      <!-- Tabel end -->

      <div class="row mx-2">        
        {{$products->links()}}
      </div>
    </div>
  </div>
  <!-- Tabel End -->
</div>

@endsection

<!-- /Content Section -->