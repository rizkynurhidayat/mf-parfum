@extends('layouts.app')
@section('content')
<!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Information Edit</h5>
                     
                    </div>
                    <div class="card-body">
                      <form action="{{ route('information.update', $information) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')            
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="phone">Phone</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="phone"
                                name="phone"
                                value="{{ $information->phone }}"
                                class="form-control"
                                placeholder="Input WhatsApp Link"
                              />
                            </div>
                            <div class="form-text">You only can use a link.</div>
                        </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="tiktok">Tiktok</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="tiktok"
                                name="tiktok"
                                value="{{ $information->tiktok }}"
                                class="form-control"
                                placeholder="Input Tiktok Link"
                              />
                            </div>
                            <div class="form-text">You only can use a link.</div>
                        </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="twitter">Twitter</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="twitter"
                                name="twitter"
                                value="{{ $information->twitter }}"
                                class="form-control"
                                placeholder="Input Twitter Link"
                              />
                            </div>
                            <div class="form-text">You only can use a link.</div>
                        </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="instagram">Instagram</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="instagram"
                                name="instagram"
                                value="{{ $information->instagram }}"
                                class="form-control"
                                placeholder="Input Instagram Link"
                              />
                            </div>
                            <div class="form-text">You only can use a link.</div>
                        </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="location">Location</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="location"
                                name="location"
                                value="{{ $information->location }}"
                                class="form-control"
                                placeholder="Input Location Link"
                              />
                            </div>
                            <div class="form-text">You only can use a link.</div>
                        </div>

                    </div>                       
                    
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <a type="" href="/Information" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Send</button>
                          </div>
                        </div>
                        </div>
                    </div>
                </form>
                </div>
              </div>
            </div>
@endsection