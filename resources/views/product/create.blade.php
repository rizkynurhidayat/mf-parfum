@extends('layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @error('title')
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
                      <h5 class="mb-0">Add Products Data</h5>
                      <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="title">Title</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Input Title" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="description">Description</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="description" name="description" placeholder="Input Description" />
                          </div>
                        </div>
                        
                        

                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                    <div class="col-md-6 col-lg-4 mb-3 img-preview" >
                                        <div class="card h-100">
                                            <img id="img-preview" class="card-img-top" src="" alt="" /></img>
                                            <div class="card-body">
                                            </div>
                                        </div>
                                    </div>
                                    <input class="form-control" type="file" id="image" name="image" onChange="previewImage()" /> 
                            </div>
                       </div>
                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="price">Price</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="price" name="price" placeholder="Input Price" />
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
                        const card = document.querySelector('.img-preview');

                        card.style.display = 'none';

                        if (image.files && image.files[0]) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                imgPreview.src = e.target.result;
                                imgPreview.style.display = 'block';
                                card.style.display = 'block';
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