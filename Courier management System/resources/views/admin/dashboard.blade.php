@extends('admin.layouts.master')
@section('title','Dashboard')
@push('css')
    
@endpush

@section('content')
<div class="container-fluid px-4">
    <div class="row g-3 my-2">

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2"></h3>
                    <p class="fs-5"><h5>Branches</h5></p>
                </div>
               <a href="branch-master"> <i class="far fa-id-card fs-1 primary-text border rounded-full secondary-bg p-3"></i></a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <p class="fs-5">
                    <h5>Parcels</h5>
                    </p>
                </div>
                <a href="parcel">
                    <i class="fa fa-th-large fs-1 primary-text border rounded-full secondary-bg p-3"></i></a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <p class="fs-5">
                    <h5>Members</h5>
                    </p>
                </div>
                <a href="members/add">
                    <i class="fa fa-th-large fs-1 primary-text border rounded-full secondary-bg p-3"></i></a>
            </div>
        </div>
    </div>
</div>    

@stop
@push('js')
    
@endpush