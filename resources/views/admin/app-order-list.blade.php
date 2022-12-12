@extends('admin.layouts.app')

@section('spesificScript')
<link rel="stylesheet" href="{{asset('admin/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('admin/vendor/libs/datatables-bs5/responsive.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('admin/vendor/libs/datatables-bs5/buttons.bootstrap5.css')}}" />
@endsection

@section('content')

<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Invoice /</span> List
</h4>

<!-- Invoice List Table -->
<div class="card">
  <div class="card-datatable table-responsive">
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"> 
      <table class="invoice-list-table table border-top dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
        <thead>
          <tr role="row">
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px; display: none;">
            </th>
            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 20px;" aria-label="#ID: activate to sort column ascending" aria-sort="descending">#ID
            </th>
            <th tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 36px;"><i class="bx bx-trending-up"></i>
            </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 100px;" aria-label="Username: activate to sort column ascending">Username
            </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 80px;" aria-label="Total: activate to sort column ascending">Total
            </th>
            <th class="text-truncate sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 90px;" aria-label="Order Date: activate to sort column ascending">Order Date
            </th>
            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 88px;" aria-label="Balance">Status</th>
            <th class="cell-fit sorting_disabled" rowspan="1" colspan="1" style="width: 125px;" aria-label="Actions">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($orders as $o)
          <tr class="odd">
            <td class=" control" tabindex="0" style="display: none;"></td>
            <td class="sorting_1"><a href="{{ route('orders-view', $o->id) }}">#{{$o->id}}</a></td>
            <td>
              <span data-bs-toggle="tooltip" data-bs-html="true" title="" data-bs-original-title="<span>{{$o->status}}<br> Balance: Rp.{{number_format($o->total)}}<br> Due Date: {{$o->order_date}}</span>" aria-label="<span>{{$o->status}}<br> Balance: Rp.{{number_format($o->total)}}<br> Due Date: {{$o->order_date}}</span>">
                @if($o->status == 'Completed')
                <span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30">
                  <i class="bx bx-adjust bx-xs"></i>
                </span>
                @elseif($o->status == 'Canceled')
                <span class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30">
                  <i class="bx bx-error-alt bx-xs"></i>
                </span>
                @elseif($o->status == 'Processed')
                <span class="badge badge-center rounded-pill bg-label-info w-px-30 h-px-30">
                  <i class="bx bx-down-arrow-circle bx-xs"></i>
                </span>
                @elseif($o->status == 'Sent')
                <span class="badge badge-center rounded-pill bg-label-secondary w-px-30 h-px-30">
                  <i class="bx bx-paper-plane bx-xs"></i>
                </span>
                @elseif($o->status == 'Rejected')
                <span class="badge badge-center rounded-pill bg-label-dark w-px-30 h-px-30">
                  <i class="bx bx-block bx-xs"></i>
                </span>
                @elseif($o->status == 'Waiting Confirmation')
                <span class="badge badge-center rounded-pill bg-label-danger w-px-30 h-px-30">
                  <i class="bx bx-info-circle bx-xs"></i>
                </span>
                @endif
              </span>
            </td>
            <td>
              <div class="d-flex justify-content-start align-items-center">
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-2"><img src="{{asset('storage/'.$o->address->user->photo)}}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <a href="{{route('user.show', $o->address->user->id)}}" class="text-body text-truncate fw-semibold">{{$o->address->user->name}}</a>
                </div>
              </div>
            </td>
            <td><span class="d-none">{{number_format($o->total)}}</span>Rp {{number_format($o->total)}}</td>
            <td><span class="d-none">{{$o->order_date}}</span>{{$o->order_date}}</td>
            <td>
              @if($o->status == 'Completed')
              <span class="badge bg-label-success"> {{$o->status}} </span>
              @elseif($o->status == 'Canceled')
              <span class="badge bg-label-warning"> {{$o->status}} </span>
              @elseif($o->status == 'Processed')
              <span class="badge bg-label-info"> {{$o->status}} </span>
              @elseif($o->status == 'Sent')
              <span class="badge bg-label-secondary"> {{$o->status}} </span>
              @elseif($o->status == 'Rejected')
              <span class="badge bg-label-dark"> {{$o->status}} </span>
              @elseif($o->status == 'Waiting Confirmation')
              <span class="badge bg-label-danger"> {{$o->status}} </span>
              @endif
            </td>
            <td>
              <div class="d-flex align-items-center">
                <a href="{{ route('orders-view', $o->id) }}" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Preview Invoice" aria-label="Preview Invoice"><i class="bx bx-show mx-1"></i>
                </a>
                <a href="{{ route('orders-editshow', $o->id) }}" data-bs-toggle="tooltip" class="text-body" data-bs-placement="top" title="" data-bs-original-title="Edit Invoice" aria-label="Edit Invoice"><i class="bx bx-edit-alt"></i>
                </a>
                <div class="dropdown">
                  <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown" style="margin-left: 1rem">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="javascript:;" class="dropdown-item text-danger">Download</a>                                                      
                  </div>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="row mx-2">
        {{$orders->links()}}
      </div>
    </div>
  </div>
</div>
@endsection

@section('scriptJS')
<!-- Vendors JS -->
<script src="{{asset('admin/vendor/libs/datatables-bs5/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('admin/vendor/libs/datatables-bs5/datatables.responsive.js')}}"></script>
<script src="{{asset('admin/vendor/libs/datatables-bs5/responsive.bootstrap5.js')}}"></script>
<script src="{{asset('admin/vendor/libs/datatables-bs5/datatables-buttons.js')}}"></script>
<script src="{{asset('admin/vendor/libs/datatables-bs5/buttons.bootstrap5.js')}}"></script>

<!-- Page JS -->
<script src="{{asset('admin/js/app-invoice-list.js')}}"></script>
@endsection