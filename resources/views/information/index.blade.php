@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<!-- Hoverable Table rows -->
            @if (session('success'))
              <div class="alert alert-warning alert-dismissible" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
            @endif
              <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-header">Information Data</h5>
                    <a href="{{ route('information.create') }}" class="btn btn-primary">Add Data</a>
                    
                </div>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Phone</th>
                        <th>Tiktok</th>
                        <th>Twitter</th>
                        <th>Instagram</th>
                        <th>Location</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach ( $informations as $info )
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $info->phone }}</strong></td>
                          <td>{{ $info->tiktok }}</td>
                          <td>{{ $info->twitter }}</td>
                          <td>{{ $info->instagram }}</td>
                          <td>{{ $info->location }}</td>
                          
                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('information.edit', $info) }}"
                                  ><i class="bx bx-edit-alt me-1"></i>Edit</a> 
                                  <form action="{{ route('information.destroy', $info->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="dropdown-item text-danger"><i class="bx bx-trash me-1"></i>Delete</button>
                              </form>                              
                              </div>
                            </div>
                          </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
</div>

<style>
    /* Supaya menu dropdown tidak terpotong oleh container tabel */
    .table-responsive {
        overflow: inherit !important;
    }
    
    /* Tambahan agar posisi dropdown pas */
    .dropdown-menu {
        z-index: 1000;
    }
</style>

<!--/ Hoverable Table rows -->
@endsection