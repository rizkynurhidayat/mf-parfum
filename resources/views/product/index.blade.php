@extends('layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
      @if (session('success'))
        <!-- <div class="alert alert-success">
            {{ session('success') }}
        </div> -->

        <div class="alert alert-warning alert-dismissible" role="alert">
                Berhasil menambahkan data
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

<!-- Hoverable Table rows -->
                
              <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-header">Products Data</h5>
                    <a class="btn btn-primary" href="{{ route('product.create') }}">Add Person </a>
                </div>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($products as $product)
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong >{{ $product->title }}</strong></td>
                          <td>{{ $product->description}}</td>
                          <!-- <td>
                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                              <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                title="Lilian Fuller"
                              >
                                <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                              </li>
                              <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                title="Sophia Wilkerson"
                              >
                                <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                              </li>
                              <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                title="Christina Parker"
                              >
                                <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                              </li>
                            </ul>
                          </td> -->
                          <td> @if ($product->image && Storage::disk('public')->exists($product->image))
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100">
                                            <img class="card-img-top" src="{{ asset('storage/'.$product->image) }}" alt="Card image cap" /></img>
                                            <div class="card-body">
                                            <!-- <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">
                                            With supporting text below as a natural lead-in to additional content natural lead-in to
                                            additional content.
                                            </p> -->
                                            <!-- <a href="javascript:void(0)" class="btn btn-danger">Delete</a> -->
                                            </div>
                                        </div>
                                
                                </div>

                                @else
                                    <div class="from-text">Belum ada gambar</div>
                                @endif
                            </td>
                            <td>{{ $product->price}}</td>
                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href=" {{ route('product.edit', $product) }} "
                                  ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <form action="{{ route('product.destroy', $product) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type=submit class="dropdown-item" href=""><i class="bx bx-trash me-1"></i>Delete</button>
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
              <!--/ Hoverable Table rows -->



@endsection