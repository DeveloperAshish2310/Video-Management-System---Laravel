@extends('panel.layout.main')

@push('title')
    Video Host
@endpush

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Manage Video Host </h4>
                    <p class="card-description mb-3"> Manage and Edit Video Host Settings </p>
                    <form enctype="multipart/form-data" method="POST" action="{{ route('panel.videoHost.update') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="meta_desc">Video API ( Stream Wish )</label>
                                    <input type="text" class="form-control" placeholder="Enter Meta Description"
                                        id="meta_desc" name="video_api" value="{{ getConfig('video_api')->value }}"
                                        autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <label class="d-block invisible " >Submit</label>
                                <button type="submit" class="btn btn-outline-primary" name="update_api">Submit</button>
                            </div>
                            
                            <div class="col-md-12 col-12 my-2"></div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="newfolder" id="newfolder" class="form-control newfolder" placeholder="Enter New Folder Name">
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <label class="d-block invisible " >Submit</label>
                                <button type="submit" class="btn btn-outline-info" name="create_folder">Create New</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>


        <div class="col-12">

            <div class="card">

                <div class="card-header">
                    <u>Available Folders</u>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Folder Name</th>
                                <th scope="col">Folder Id</th>
                                <th scope="col">Folder Code</th>
                                <th scope="col">Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($folders as $folder)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $folder['name'] }}</td>
                                    <td>{{ $folder['fld_id'] }}</td>
                                    <td>{{ $folder['code'] }}</td>
                                    <td>
                                        <div class="d-flex">                                            
                                            <a href="{{ route('panel.videoHost.setdefault',[$folder['fld_id'],'sync']) }}" class="btn btn-sm btn-outline-primary mx-1 @if (getConfig('video_folder_sync_id')->value == $folder['fld_id']) active @endif ">
                                                Sync
                                            </a>
                                            <a href="{{ route('panel.videoHost.setdefault',[$folder['fld_id'],'2part']) }}" class="btn btn-sm btn-outline-info mx-1 @if (getConfig('video_folder_2part_id')->value == $folder['fld_id'] ) active @endif">
                                                2 Part
                                            </a>
                                            <a href="{{ route('panel.videoHost.setdefault',[$folder['fld_id'],'move']) }}" class="btn btn-sm btn-outline-warning mx-1 @if (getConfig('video_folder_move_id')->value == $folder['fld_id'] ) active @endif">
                                                Move
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>


        </div>


    </div>
@endsection
