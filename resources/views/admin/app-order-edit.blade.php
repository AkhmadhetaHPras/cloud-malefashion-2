@extends('admin.layouts.app')

<!-- Content Section -->

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

<div id="updateresponse">
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


<form action="{{route('orders-edit', $order->id)}}" method="POST">
  @csrf
  @method('PUT')
  <div class="row invoice-edit">
    <!-- Invoice -->
    <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
      <div class="card invoice-preview-card">
        <div class="card-body">
          <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column p-sm-3 p-0">
            <div class="mb-xl-0 mb-4">
              <div class="d-flex svg-illustration mb-4 gap-2">
                <span class="app-brand-logo demo">
                  <img src="{{ asset('img/logo-light.webp') }}" alt="logo">
                </span>
              </div>
              <p class="mb-1">Office 149, 450 South Brand Brooklyn</p>
              <p class="mb-1">San Diego County, CA 91905, USA</p>
              <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
            </div>            
            <div class="col-md-6">
              <dl class="row mb-2">
                <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                  <span class="h4 text-capitalize mb-0 text-nowrap">Invoice #</span>
                </dt>
                <dd class="col-sm-6 d-flex justify-content-md-end">
                  <div class="w-px-150">
                    <input type="text" class="form-control" disabled="" placeholder="3492" value="{{$order->id}}" id="invoiceId">
                  </div>
                </dd>
                <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                  <span class="fw-normal">Order Date:</span>
                </dt>
                <dd class="col-sm-6 d-flex justify-content-md-end">
                  <div class="w-px-150">
                    <input type="text" class="form-control invoice-date flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly" value="{{ $order->order_date }}">
                  </div>
                </dd>
                <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                  <span class="fw-normal">Due Date:</span>
                </dt>
                <dd class="col-sm-6 d-flex justify-content-md-end">
                  <div class="w-px-150">
                    <input type="date" class="form-control due-date flatpickr-input" placeholder="YYYY-MM-DD" name="duedate" value="{{$order->delivery_date != null ? $order->delivery_date : ''}}" required>
                  </div>
                </dd>
              </dl>
            </div>
          </div>
        </div>
        <hr class="my-0">
        <div class="card-body">
          <div class="row p-sm-3 p-0">
            <div class="col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4">
            </div>
            <div class="col-xl-6 col-md-12 col-sm-7 col-12 text-end">
              <h6 class="pb-2">Invoice To:</h6>
              <table class="d-flex justify-content-end">
                <tbody>
                  <tr>
                    <td class="text-end">
                      {{ $order->address->street_address }}<br />
                      {{ $order->address->city }} ,{{ $order->address->province }} , {{ $order->address->postal_code }}<br />
                      {{ $order->address->name }} | {{ $order->address->telp }}
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table border-top m-0">
            <thead>
              <tr>
                <th>Product</th>
                <th>Size</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Subtotal</th>
              </tr>
            </thead>
            <tbody>
              @foreach($order->detailorder as $d)
              <tr>
                <td class="text-nowrap">{{ $d->variant->product->product_name }}</td>
                <td class="text-nowrap">{{ $d->variant->size }}</td>
                <td>Rp. {{ number_format($d->variant->product->price) }}</td>
                <td>{{ $d->quantity }}</td>
                <td>Rp. {{ number_format($d->subtotal) }}</td>
              </tr>
              @endforeach
              <tr>
                <td colspan="3" class="align-top px-4 py-5">
                </td>
                <td class="text-end px-4 py-5">
                  <p class="mb-0">Total:</p>
                </td>
                <td class="px-4 py-5">
                  <p class="fw-semibold mb-0">Rp. {{ number_format($order->total) }}</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <span class="fw-semibold">Note:</span>
              <span>{{ $order->note }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Invoice -->   

    <!-- Invoice Actions -->
    <div class="col-lg-3 col-12 invoice-actions">
      <div class="card mb-4">
        <div class="card-body">
          <button class="btn btn-primary d-grid w-100">
            <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="bx bx-edit-alt bx-xs me-3"></i>Save</span>
          </button>
        </div>
      </div>
      <div>
        <p class="mb-2">Accept payments via</p>
        <div class="badge bg-label-success">
          <p class="lead mb-0"><strong>COD</strong></p>
        </div>
        <div class="d-flex justify-content-between mb-2">
          <label for="payment-terms" class="mb-0">Payment Terms</label>
          <label class="switch switch-primary me-0">
            <input type="checkbox" class="switch-input" id="payment-terms" checked="">
            <span class="switch-toggle-slider">
              <span class="switch-on">
                <i class="bx bx-check"></i>
              </span>
              <span class="switch-off">
                <i class="bx bx-x"></i>
              </span>
            </span>
            <span class="switch-label"></span>
          </label>
        </div>
        <div class="d-flex justify-content-between mb-2">
          <label for="client-notes" class="mb-0">Client Notes</label>
          <label class="switch switch-primary me-0">
            <input type="checkbox" class="switch-input" id="client-notes">
            <span class="switch-toggle-slider">
              <span class="switch-on">
                <i class="bx bx-check"></i>
              </span>
              <span class="switch-off">
                <i class="bx bx-x"></i>
              </span>
            </span>
            <span class="switch-label"></span>
          </label>
        </div>
        <div class="d-flex justify-content-between">
          <label for="payment-stub" class="mb-0">Payment Stub</label>
          <label class="switch switch-primary me-0">
            <input type="checkbox" class="switch-input" id="payment-stub">
            <span class="switch-toggle-slider">
              <span class="switch-on">
                <i class="bx bx-check"></i>
              </span>
              <span class="switch-off">
                <i class="bx bx-x"></i>
              </span>
            </span>
            <span class="switch-label"></span>
          </label>
        </div>
      </div>
    </div>
    <!-- /Invoice Actions -->
  </div>
</form>

@endsection

<!-- /Content Section -->

@section('scriptJS')
<script>
  window.setTimeout(function() {
    $("#updateresponse .alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 4000);
</script>
@endsection