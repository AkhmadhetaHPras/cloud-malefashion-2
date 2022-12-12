@extends('admin.layouts.app')

@section('content')

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

<div id="addresponse">
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

<h3 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Products/</span> Add</h3>
<div class="col-xxl">
  <div class="card mb-4">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h4 class="mb-2">Add Product</h4>
      <small class="text-muted float-end">Mensweaer</small>
    </div>
    <div class="card-body">
      <form action="{{ route('products-post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Product Name</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Product name" aria-describedby="basic-addon11" name="product_name" required>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Link Youtube</h6>
          </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="add-user-fullname" placeholder="https://youtu.be/BJJxOiQdSXg" name="yt_link" required>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Description</h6>
          </label>
          <div class="col-sm-10">
            <textarea id="description-product" class="form-control" rows="3" placeholder="Product details" name="description" required></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Short description</h6>
          </label>
          <div class="col-sm-10">
            <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="Short description on show product" name="short_desc" required>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Prices</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group input-group-merge">
              <span class="input-group-text" id="currency">Rp </span>
              <input class="form-control" type="number" value="0" id="html5-number-input" name="price" required>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Category</h6>
          </label>
          <div class="col-sm-10">
            <select id="category" class="form-select" name="category" required>
              @foreach($categories as $c)
              <option value="{{ $c->id }}">{{ $c->category }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Brands</h6>
          </label>
          <div class="col-sm-10">
            <select id="brand" class="form-select" name="brand" required>
              @foreach($brands as $b)
              <option value="{{ $b->id }}">{{ $b->name }}</option>
              @endforeach
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
                  <input class="form-check-input" type="checkbox" name="tags[]" value="Man" id="Man">
                  <label class="form-check-label" for="Man"> Man </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="tags[]" value="Unisex" id="Unisex">
                  <label class="form-check-label" for="Unisex"> Unisex </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="tags[]" value="Golf" id="Golf">
                  <label class="form-check-label" for="Golf"> Golf </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="tags[]" value="Lifestyle" id="Lifestyle">
                  <label class="form-check-label" for="Lifestyle"> Lifestyle </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="tags[]" value="Football" id="Football">
                  <label class="form-check-label" for="Football"> Football </label>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="tags[]" value="Original" id="Original">
                  <label class="form-check-label" for="Original"> Original </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="tags[]" value="Training" id="Training">
                  <label class="form-check-label" for="Training"> Training </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="tags[]" value="Skateboarding" id="Skateboarding">
                  <label class="form-check-label" for="Skateboarding"> Skateboarding </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="tags[]" value="Basketball" id="Basketball">
                  <label class="form-check-label" for="Basketball"> Basketball </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="tags[]" value="Others" id="Others">
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
            <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="pink-mini-bag" name="slug" required>
            <div class="form-text">you can use the character "-" for spaces </div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Thumbnail image</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="file" class="form-control" id="Thumbnail" name="thumbnail" required>
              <label class="input-group-text" for="Thumbnail">Upload</label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Display 1</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="file" class="form-control" id="display1" name="display1" required>
              <label class="input-group-text" for="display1">Upload</label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Display 2</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="file" class="form-control" id="display2" name="display2" required>
              <label class="input-group-text" for="display2">Upload</label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Display 3</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="file" class="form-control" id="display3" name="display3" required>
              <label class="input-group-text" for="display3">Upload</label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">
            <h6>Display 4</h6>
          </label>
          <div class="col-sm-10">
            <div class="input-group">
              <input type="file" class="form-control" id="display4" name="display4" required>
              <label class="input-group-text" for="display4">Upload</label>
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

@endsection

<!-- /Content Section -->

@section('scriptJS')
<script>
  window.setTimeout(function() {
    $("#addresponse .alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 4000);
</script>
@endsection