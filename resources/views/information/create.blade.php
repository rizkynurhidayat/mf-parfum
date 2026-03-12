@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Information Add</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('information.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="phone">Phone</label>
                    <div class="col-sm-10"><input type="text" name="phone" class="form-control" placeholder="Link WA" required /></div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="tiktok">Tiktok</label>
                    <div class="col-sm-10"><input type="text" name="tiktok" class="form-control" placeholder="Link Tiktok" required /></div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="twitter">Twitter</label>
                    <div class="col-sm-10"><input type="text" name="twitter" class="form-control" placeholder="Link Twitter" required /></div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="instagram">Instagram</label>
                    <div class="col-sm-10"><input type="text" name="instagram" class="form-control" placeholder="Link Instagram" required /></div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="location">Location</label>
                    <div class="col-sm-10"><input type="text" name="location" class="form-control" placeholder="Link Maps" required /></div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <a href="/Information" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Save Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection