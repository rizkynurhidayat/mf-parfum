@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<!-- Hoverable Table rows -->
              <div class="card">
                <h5 class="card-header">User Data</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                       
                        <th>Status</th>
                       
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach ( $users as $user )
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->name }}</strong></td>
                          <td>{{ $user->email}}</td>
                          
                          <td><span class="badge bg-label-primary me-1">Admin</span></td>
                          
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
</div>
<!--/ Hoverable Table rows -->
@endsection