@extends('backend.layouts.app')
@section('content')
    @include('backend.flash')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>List Daftar Kendaraan</h5>
                        <span>Tabel yang berisikan tentang Data Kendaraan</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./home"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Tabel</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tabel Data Kendaraan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @include('backend.vehicles.table')
                </div>
            </div>
        </div>
    </div>

@endsection