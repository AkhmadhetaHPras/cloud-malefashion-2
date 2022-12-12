@extends('admin.layouts.app')

<!-- Content Section -->

@section('content')

<div class="row">
  <!-- User Sidebar -->
  <div class="col-12">
  <div id="passwdresponse">
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
      @if ($message = Session::get('error'))
      <div class="alert alert-error">
        <p>{{ $message }}</p>
      </div>
      @endif
    </div>
  </div>
  <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
    <!-- User Card -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="user-avatar-section">
          <div class=" d-flex align-items-center flex-column">
            <img class="img-fluid rounded my-4" src="{{asset('storage/'.$products->thumbnail)}}" height='160' width='160' alt="User avatar">
            <div class="user-info text-center">
              <h4 class="mb-2">{{$products->product_name}}</h4>
              <span class="badge bg-label-secondary">{{$products->brand->name}}</span>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-around flex-wrap my-4 py-3">
          <div class="d-flex align-items-start me-4 gap-3">
            <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-check bx-sm"></i></span>
            <div>
              <h5 class="mb-0">{{$products->detailorder->sum('quantity')}}</h5>
              <span>Sold Item</span>
            </div>
          </div>
          <div class="d-flex align-items-start gap-3">
            <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-customize bx-sm"></i></span>
            <div>
              <h5 class="mb-0">{{$products->variant->sum('stock')}}</h5>
              <span>Total Stock </span>
            </div>
          </div>
        </div>
        <h5 class="pb-2 border-bottom mb-4">Details</h5>
        <div class="info-container">
          <ul class="list-unstyled">
            <li class="mb-3">
              <span class="fw-bold me-2">Product Name:</span>
              <span>{{$products->product_name}}</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Price:</span>
              <span>Rp {{$products->price}}</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Brand:</span>
              <span>{{$products->brand->name}}</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Category:</span>
              <span>{{$products->category->category}}</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Tags:</span>
              <span>{{$products->tags}}</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Slug:</span>
              <span>{{$products->slug}}</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Rating:</span>
              <span>{{$products->rating}}</span>
            </li>
          </ul>
          <div class="d-flex justify-content-center pt-3">
            <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editProduct" data-bs-toggle="modal">Edit</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /User Card -->
  </div>
  <!--/ User Sidebar -->

  <!-- User Content -->
  <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
    <!-- Product list -->
    <div class="card card-action mb-4">
      <div class="card-header align-items-center">
        <h5 class="card-action-title mb-0">Product Display</h5>
      </div>
      <div class="card-body">
        <div class="d-flex align-items-center flex-row">
          <img class="img-fluid rounded my-4 mt-1 border-label-secondary me-2" src="{{ asset('storage/'.$products->display1) }}" height='178' width='178' alt="User avatar">
          <img class="img-fluid rounded my-4 mt-1 border-label-secondary me-2" src="{{ asset('storage/'.$products->display2) }}" height='178' width='178' alt="User avatar">
          <img class="img-fluid rounded my-4 mt-1 border-label-secondary me-2" src="{{ asset('storage/'.$products->display3) }}" height='178' width='178' alt="User avatar">
          <img class="img-fluid rounded my-4 mt-1 border-label-secondary" src="{{ asset('storage/'.$products->display4) }}" height='178' width='178' alt="User avatar">
        </div>
      </div>
    </div>
    <!-- /Product List -->

    <div class="card mb-4">
      <div class="card-header align-items-center">
        <h5 class="card-action-title mb-0">Description Product</h5>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12">
            <dl class="row mb-0">
              <dt class="col-sm-3 fw-semibold mb-3">Link Youtube:</dt>
              <dd class="col-sm-9"><a href="{{$products->yt_link}}">{{$products->yt_link}}</a></dd>

              <div class="border-bottom mb-2"></div>

              <dt class="col-sm-3 fw-semibold mb-3">Short Description:</dt>
              <dd class="col-sm-9 mb-3">{{$products->short_desc}}</dd>

              <div class="border-bottom mb-2"></div>

              <dt class="col-sm-3 fw-semibold mb-3">Description:</dt>
              <dd class="col-sm-9">{!!$products->description!!}</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>

    <!-- product variants  -->
    <div class="card mb-4">
      <h5 class="card-header">Product Variants</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-4 mb-4 order-0">
            <img src="{{asset('admin/img/illustrations/sitting-girl-with-laptop-light.png')}}" height="120" alt="View Badge User" />
          </div>
          <div class="col-lg-8 mb-4 order-0">
            <!-- Tabel start -->
            <table class="datatables-users table border-top dataTable no-footer dtr-column collapsed" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: auto">

              <thead>
                <tr role="row">
                  <th tabindex="0" style="width: 80px;" aria-label="User: activate to sort column ascending">#ID</th>
                  <th tabindex="0" style="width: 0px;" aria-label="Role: activate to sort column ascending">Size</th>
                  <th tabindex="0" style="width: 120px;" aria-label="Plan: activate to sort column ascending">Stok</th>
                  <th style="width: 50px;" aria-label="Actions">Actions</th>
                </tr>
              </thead>

              <tbody>
                @foreach($products->variant as $v)
                <!-- product1 -->
                <tr class="odd">
                  <td class="sorting_1"><a href="#"># {{$v->id}}</a></td>
                  <!-- Tags -->
                  <td><span class="fw-semibold">{{$v->size}}</span></td>
                  <td><span class="fw-semibold">{{$v->stock}}</span></td>

                  <td>
                    <div class="d-inline-block">
                      <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end">                      
                        <a href="javascript:;" class="dropdown-item" data-bs-target="#editVariant{{$v->id}}" data-bs-toggle="modal">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- /product1 -->

                <!-- Edit Variants Modal -->
                <div class="modal fade lead" id="editVariant{{$v->id}}" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                    <div class="modal-content p-3 p-md-5">
                      <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                          <h3>Edit Variants Product</h3>
                          <p>Updating user details will receive a privacy audit.</p>
                        </div>
                        <form action="{{ route('variant-edit', $v->id) }}" method="POST">
                          @csrf
                          @method('PUT')                  
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">
                              <h6>Variants</h6>              
                            </label>
                            <div class="col-sm-10">
                              <div class="row">
                                <div class="col-sm-5">
                                  <label class="form-label">Size</label>
                                  <input type="text" class="form-control" id="add-user-city" placeholder="Size" name="size" value="{{$v->size}}" required>
                                </div>
                                <div class="col-sm-5">
                                  <label class="form-label">Stock</label>
                                  <input type="text" class="form-control" id="add-user-city" placeholder="Stock" name="stock" value="{{$v->stock}}" required>
                                </div>
                              </div>
                            </div>
                          </div>       
                          <div class="row justify-content-end">
                            <div class="col-sm-10">
                              <input type="submit" class="btn btn-primary" value="Send">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach

              </tbody>
            </table>
            <!-- Tabel end -->

          </div>
          <div class="col-4"></div>
          <div class="col-8 d-flex justify-content-center">
            <a href="#" class="btn btn-primary" data-bs-target="#addVariant" data-bs-toggle="modal">Add</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /product variants  -->

  </div>
  <!--/ User Content -->
</div>

<!-- Modal -->
<!-- Edit product Modal -->
<div class="modal fade lead" id="editProduct" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3>Edit Detail Product</h3>
          <p>Updating user details will receive a privacy audit.</p>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('products-edit', $products->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Product Name</h6>
            </label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Product name" aria-describedby="basic-addon11" name="product_name" value="{{$products->product_name}}" required>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Link Youtube</h6>
            </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="add-user-fullname" placeholder="https://youtu.be/BJJxOiQdSXg" name="yt_link" value="{{$products->yt_link}}" required>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Description</h6>
            </label>
            <div class="col-sm-10">
              <textarea id="description-product" class="form-control" rows="3" placeholder="Product details" name="description" required>{!!$products->description!!}</textarea>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Short description</h6>
            </label>
            <div class="col-sm-10">
              <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="Short description on show product" name="short_desc" value="{{$products->short_desc}}" required>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Prices</h6>
            </label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text" id="currency">Rp </span>
                <input class="form-control" type="number" id="html5-number-input" name="price" value="{{$products->price}}" required>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Category</h6>
            </label>
            <div class="col-sm-10">
              <select id="category" class="form-select" name="category" required>
                <option value="{{ $products->category->id }}" {{ $products->category->category == 'Accessories' ? 'selected' : ''}}>Accessories</option>
                <option value="{{ $products->category->id }}" {{ $products->category->category == 'Bags' ? 'selected' : ''}}>Bags</option>
                <option value="{{ $products->category->id }}" {{ $products->category->category == 'Shirts' ? 'selected' : ''}}>Shirts</option>
                <option value="{{ $products->category->id }}" {{ $products->category->category == 'Shoes' ? 'selected' : ''}}>Shoes</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Brands</h6>
            </label>
            <div class="col-sm-10">
              <select id="brand" class="form-select" name="brand" required>
                <option value="{{ $products->brand->id }}" {{ $products->brand->name == 'Adidas Neo' ? 'selected' : ''}}>Adidas Neo</option>
                <option value="{{ $products->brand->id }}" {{ $products->brand->name == 'Adidas Original' ? 'selected' : ''}}>Adidas Original</option>
                <option value="{{ $products->brand->id }}" {{ $products->brand->name == 'Stella Mccartney' ? 'selected' : ''}}>Stella Mccartney</option>
                <option value="{{ $products->brand->id }}" {{ $products->brand->name == 'Athletics' ? 'selected' : ''}}>Athletics</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Tags</h6>
            </label>
            <div class="col-sm-10">
              <div class="row">
                <div class=" col-sm-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tags[]" value="Man" id="Man" {{ in_array('Man', explode(',' , $products->tags)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="Man"> Man </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tags[]" value="Unisex" id="Unisex" {{ in_array('Unisex', explode(',' , $products->tags)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="Unisex"> Unisex </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tags[]" value="Golf" id="Golf" {{ in_array('Golf', explode(',' , $products->tags)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="Golf"> Golf </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tags[]" value="Lifestyle" id="Lifestyle" {{ in_array('Lifestyle', explode(',' , $products->tags)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="Lifestyle"> Lifestyle </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tags[]" value="Football" id="Football" {{ in_array('Football', explode(',' , $products->tags)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="Football"> Football </label>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tags[]" value="Original" id="Original" {{ in_array('Original', explode(',' , $products->tags)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="Original"> Original </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tags[]" value="Training" id="Training" {{ in_array('Training', explode(',' , $products->tags)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="Training"> Training </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tags[]" value="Skateboarding" id="Skateboarding" {{ in_array('Skateboarding', explode(',' , $products->tags)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="Skateboarding"> Skateboarding </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tags[]" value="Basketball" id="Basketball" {{ in_array('Basketball', explode(',' , $products->tags)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="Basketball"> Basketball </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tags[]" value="Others" id="Others" {{ in_array('Others', explode(',' , $products->tags)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="Others"> Others </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Slugs</h6>
            </label>
            <div class="col-sm-10">
              <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="pink-mini-bag" name="slug" value="{{$products->slug}}" required>
              <div class="form-text">you can use the character "-" for spaces </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Thumbnail image</h6>
              <img class="img-thumbnail rounded my-4 mt-1 border-label-secondary" src="{{ asset('storage/'.$products->thumbnail) }}" height='70' width='70'>
            </label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="file" class="form-control" id="Thumbnail" name="thumbnail" value="{{$products->thumbnail}}">
                <label class="input-group-text" for="Thumbnail">Upload</label>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Display 1</h6>
              <img class="img-thumbnail rounded my-4 mt-1 border-label-secondary" src="{{ asset('storage/'.$products->display1) }}" height='70' width='70'>
            </label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="file" class="form-control" id="display1" name="display1" value="{{$products->display1}}">
                <label class="input-group-text" for="display1">Upload</label>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Display 2</h6>
              <img class="img-thumbnail rounded my-4 mt-1 border-label-secondary" src="{{ asset('storage/'.$products->display2) }}" height='70' width='70'>
            </label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="file" class="form-control" id="display2" name="display2" value="{{$products->display2}}">
                <label class="input-group-text" for="display2">Upload</label>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Display 3</h6>
              <img class="img-thumbnail rounded my-4 mt-1 border-label-secondary" src="{{ asset('storage/'.$products->display3) }}" height='70' width='70'>
            </label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="file" class="form-control" id="display3" name="display3" value="{{$products->display3}}">
                <label class="input-group-text" for="display3">Upload</label>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
              <h6>Display 4</h6>
              <img class="img-thumbnail rounded my-4 mt-1 border-label-secondary" src="{{ asset('storage/'.$products->display4) }}" height='70' width='70'>
            </label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="file" class="form-control" id="display4" name="display4" value="{{$products->display4}}">
                <label class="input-group-text" for="display4">Upload</label>
              </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <input type="submit" class="btn btn-primary" value="Update">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->


<!-- Edit Variants Modal -->
<div class="modal fade lead" id="addVariant" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3>Add Variants Product</h3>
        </div>
        <form action="{{ route('variant-post', $products->id) }}" method="POST">
          @csrf
          @method('POST')
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">
            </label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-5">
                  <label class="form-label">Size</label>
                  <input type="text" class="form-control" id="add-user-city" placeholder="Size" name="size" required>
                  <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="col-sm-5">
                  <label class="form-label">Stock</label>
                  <input type="text" class="form-control" id="add-user-city" placeholder="Stock" name="stock" required>
                  <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <input type="submit" class="btn btn-primary" value="Submit">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit Variants Modal -->
@endsection

<!-- /Content Section -->

@section('scriptJS')
<script>
  window.setTimeout(function() {
    $("#passwdresponse .alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 4000);
</script>
@if(!empty(Session::get('error_code')) && Session::get('error_code') == 8)
@section('scriptJS')
<script>
    $(function() {
        $('#editProduct').modal('show');
    });
</script>
@endsection
@endif
@endsection
