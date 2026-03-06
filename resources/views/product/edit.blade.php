@extends('layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @error('name')
        <p>{{$message}}</p>
        @enderror
        @error('description')
        <p>{{$message}}</p>
        @enderror
        @error('image')
        <p>{{$message}}</p>
        @enderror
        @error('price')
        <p>{{$message}}</p>
        @enderror
        
              

              <!-- Basic Layout & Basic with Icons -->
              <!-- <div class="row"> -->
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Edit Products Data</h5>
                      <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('product.update', $product) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="name">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" placeholder="Input Name" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="description">Description</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}" placeholder="Input Description" />
                          </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                @if ($product->image && Storage::disk('public')->exists($product->image))
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100">
                                            <img id="img-preview" class="card-img-top" src="{{ asset('storage/'.$product->image) }}" alt="Card image cap" /></img>
                                            <div class="card-body">
                                            </div>
                                        </div>
                                </div>

                                @else
                                    <div class="form-text">Belum ada gambar</div>
                                @endif
                                <input class="form-control" type="file" id="image" name="image" onChange="previewImage()" /> 
                            </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="price">Price</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}" placeholder="Input link Price" />
                          </div>
                        </div>
                        

                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Send</button>
                            <a href="{{ route('product.index') }}" class="btn btn-secondary">Back</a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <script>
                    function previewImage() {
                        const image = document.querySelector('#image');
                        const imgPreview = document.querySelector('#img-preview');

                        if (image.files && image.files[0]) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                imgPreview.src = e.target.result;
                                imgPreview.style.display = 'block';
                            }
                            reader.readAsDataURL(image.files[0]);                        }
                        }
                        imgPreview.style.display = 'block';

                        const oFReader = new FileReader();
                        oFReader.readAsDataURL(image.files[0]);

                        oFReader.onload = function(oFREvent) {
                            imgPreview.src = oFREvent.target.result;
                        
                    }
                </script>
                
               
@endsection