@extends('backend.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Ubah Akun Adminstrator</h3>
                </div>
                <div class="card-body">
                    @include('backend.admins.fields')
                </div>
            </div>
        </div>

    </div>
@endsection