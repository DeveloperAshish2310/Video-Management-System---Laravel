@extends('panel.layout.main')

@push('title')
    Manage User
@endpush

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title d-flex justify-content-between">
                        Users
                        <a href="addUser.php" class="btn btn-outline-info">Add User</a>
                    </h4>
                    <p class="card-description"> Manage Users </p>

                    <input type="text" style="float: right; display: block; margin-bottom: 2em;" id="searchbxuser"
                        class="form-control" placeholder="Search User" autofocus="true">

                    @include('panel.users.load')
                    

                </div>
            </div>
        </div>
    </div>


    {{-- @section('push-script')
        <script> 
            $("#searchbxuser").on("keyup",function(){
                var a = $(this).val();
                var b = $("#tablecon");
                $.ajax({
                    url: '{{ route("panel.users.index") }}',
                    type: "GET",
                    data:{
                        query: a
                    },
                    success: function(data){
                        b.html(data)
                    },
                    error: function(data){
                        b.html("Error Bro! Fix me Up Fast....... ")
                    }
                })
            });
        </script>
    @endsection --}}

@endsection
