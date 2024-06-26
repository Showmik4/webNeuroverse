@extends('layouts.app')
@section('title'){{ 'User' }}@endsection
@section('header.css')
<style>
    html body .content .content-wrapper {
        padding: 5px 20px 5px 20px;
    }
</style>
@endsection
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>

                </ol>
            </div>
            <h4 class="page-title">All Users</h4>
        </div>
    </div>
</div>
<!-- end page title -->


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="text-end mb-3">
                    <a href="{{route('user.create')}}" class="btn btn-md btn-info "><i class="ft-plus"></i>Create
                        New</a>
                </div>
                <table id="usersTable" class="table dt-responsive nowrap w-100"></table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
@endsection
@section('footer.js')
<script>
    $(document).ready(function () {
            $('#usersTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    "url": "{{ route('user.list') }}",
                    "type": "POST",
                    data: function (d) {
                        d._token = "{{csrf_token()}}";
                    }
                },
                columns: [
                    {title: 'Name', data: 'name', name: 'name', className: "text-center", orderable: true, searchable: true},
                    {title: 'Email', data: 'email', name: 'email', className: "text-center", orderable: true, searchable: true},
                                 
                    {title: 'Phone', data: 'phone', name: 'phone', className: "text-center", orderable: true, searchable: true},
                    {title: 'Address', data: 'address', name: 'address', className: "text-center", orderable: true, searchable: true},
                ]
            });
        });
</script>
@endsection