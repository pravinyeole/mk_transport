@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Add Vehicle Type') }}</div>
                    <div class="card-body">
                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{url('/submit_vehical_type')}}"  class="form-inline">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="staticEmail2" class="sr-only">Vehicle Type</label>
                                <input type="text" name="name" class="form-control" Placeholder="Please Enter Vehicle Type" require/>
                            </div>
                            <button type="submit" class="btn btn-primary mb-2" style="margin-left:5px;">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <div class="card">
                <div class="card-header">{{ __('List Vehicle Type') }}</div>
                    <div class="card-body">    

                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Id</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('view_vehicle_type') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script>

@endsection


