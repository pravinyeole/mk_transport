@extends('layouts.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Quotation') }}</div>

                <div class="card-body">
                    <div class="card">
                        <a href="{{url('/quotaion_view')}}">view</a>
                     
                        <div class="card-body">
                            <label>Company Name</label>
                            <input type="text"/>
                            address
                            mobile number
                            email id
                            
                            

route
material details
vehicle type master
material weight  master
Loading point
umloading point

                        </div>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
