@extends('admin.layouts.app')

<!-- Content Section -->

@section('content')


<!-- Users List Table -->
<div class="card">
  <!-- Tabel Start -->
  <div class="card-datatable table-responsive">
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
      <!-- Tabel start -->
      <table class="datatables-users table border-top dataTable no-footer dtr-column collapsed" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1090px;">

        <thead>
          <tr role="row">
            <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 0px;" aria-label=""></th>
            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 257px;" aria-label="User: activate to sort column ascending" aria-sort="descending">User</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 121px;" aria-label="Role: activate to sort column ascending">Role</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 100px;" aria-label="Plan: activate to sort column ascending">Username</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 110px;" aria-label="Billing: activate to sort column ascending">Gender</th>
          </tr>
        </thead>

        <tbody>
          <!-- user -->
          @foreach($users as $u)
          <tr class="odd">
            <td class=" control" tabindex="0"></td>
            <td class="sorting_1">
              <div class="d-flex justify-content-start align-items-center">
                <!-- Photo Profile -->
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{asset('storage/'.$u->photo)}}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <!-- Name & email-->
                <div class="d-flex flex-column">
                  <a href="{{ route('user.show', $u->id) }}" class="text-body text-truncate">
                    <span class="fw-semibold">{{$u->name}}</span>
                  </a>
                  <small class="text-muted">{{$u->email}}</small>
                </div>
              </div>
            </td>
            <!-- roles -->
            <td>
              <span class="text-truncate d-flex align-items-center">
                @if($u->role == 'Admin')
                <span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30 me-2">
                  <i class="bx bx-cog bx-xs"></i></span>Admin
                @elseif($u->role == 'Customer')
                <span class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30 me-2">
                  <i class="bx bx-user bx-xs"></i></span>Customer
                @endif
              </span>
            </td>
            <!-- username -->
            <td><span class="fw-semibold">{{$u->username}}</span></td>
            <!-- Gender -->
            <td>{{$u->gender}}</td>
          </tr>
          @endforeach
          <!-- /user -->
        </tbody>
      </table>
      <!-- Tabel end -->

      <div class="row mx-2">
        {{$users->links()}}
      </div>
    </div>
  </div>
  <!-- Tabel End -->

</div>


@endsection

<!-- /Content Section -->