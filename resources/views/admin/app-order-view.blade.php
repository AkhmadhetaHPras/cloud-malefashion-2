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

<div class="row invoice-preview">
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
          <div>
            <h4>Invoice #{{$order->id}}</h4>
            <div class="mb-2">
              <span class="me-1">Created:</span>
              <span class="fw-semibold">{{ Carbon\Carbon::parse($order->order_date)->format('F d, Y') }}</span>
            </div>
            <div>
              <span class="me-1">Due:</span>
              <span class="fw-semibold">{{ Carbon\Carbon::parse($order->delivery_date)->format('F d, Y') }}</span>
            </div>
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
  <div class="col-xl-3 col-md-4 col-12 invoice-actions">
    <div class="card">
      <div class="card-body">
        <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
          <span class="d-flex align-items-center justify-content-center text-nowrap">
            <i class="bx bx-paper-plane bx-xs me-3"></i>Send Invoice</span>
        </button>
        <a class="btn btn-label-secondary d-grid w-100 mb-3" target="_blank" href="{{route('invoice-print', $order->id)}}">Print</a>
      </div>
    </div>
  </div>
  <!-- /Invoice Actions -->
</div>

<!-- Offcanvas -->
<!-- Send Invoice Sidebar -->
<div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
  <div class="offcanvas-header mb-3">
    <h5 class="offcanvas-title">Send Invoice</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body flex-grow-1">
    <form>
      <div class="mb-3">
        <label for="invoice-from" class="form-label">From</label>
        <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com" placeholder="company@email.com">
      </div>
      <div class="mb-3">
        <label for="invoice-to" class="form-label">To</label>
        <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com" placeholder="company@email.com">
      </div>
      <div class="mb-3">
        <label for="invoice-subject" class="form-label">Subject</label>
        <input type="text" class="form-control" id="invoice-subject" value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods">
      </div>
      <div class="mb-3">
        <label for="invoice-message" class="form-label">Message</label>
        <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="8">Dear Queen Consolidated,
                      Thank you for your business, always a pleasure to work with you!
                      We have generated a new invoice in the amount of $95.59
                      We would appreciate payment of this invoice by 05/11/2021</textarea>
      </div>
      <div class="mb-4">
        <span class="badge bg-label-primary">
          <i class="bx bx-link bx-xs"></i>
          <span class="align-middle">Invoice Attached</span>
        </span>
      </div>
      <div class="mb-3 d-flex flex-wrap">
        <button type="button" class="btn btn-primary me-3" data-bs-dismiss="offcanvas">Send</button>
        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
      </div>
    </form>
  </div>
</div>
<!-- /Send Invoice Sidebar -->

<!-- /Offcanvas -->
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