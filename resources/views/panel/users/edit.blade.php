@extends('panel.layout.main')

@push('title')
    Edit Profile
@endpush

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Profile Configration </h4>
                    <p class="card-description mb-3"> Edit Your Profile </p>
                    <form action="{{ route('panel.users.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="tmdb_id" value="{{ $user->tmdb_api_key ?? 'No Added' }}">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="naam">Enter Your Name</label>
                                    <input type="text" name="naam" class="form-control" id="naam"
                                        placeholder="Your Name" value="{{ $user->name }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control mb-2" id="username"
                                        placeholder="Site Domain URL" value="{{ $user->username }}" autocomplete="off">
                                    <small>Change Limit is <span class="text-danger">{{ $user->username_change_limit }}</span></small>
                                </div>
                            </div>
                        </div>


                        <!-- Second Row -->
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="email">Enter Your Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ $user->email }}" placeholder="Enter our Email Address">
                                </div>
                            </div>
                            @if (AuthRole() == 'Admin')
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="role" class="text-warning">Your Assign Role</label>
                                        <input type="text" class="form-control" id="role" name="role"
                                            placeholder="Your Assigned Role" value="{{ AuthRole() }}" readonly>
                                    </div>
                                </div>
                            @endif
                        </div>
                        
                        <div class="d-flex justify-content-end my-3">
                            <button type="reset" class="btn btn-outline-danger mx-2">Reset</button>
                            <button type="submit" name="save" class="btn btn-outline-success mx-2">Submit</button>
                        </div>


                        <div class="h4 my-3 text-center"> Configure API KEYS </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="sb_api">StreamSb API KEY</label>
                                    <input type="sb_api" class="form-control mb-3" id="sb_api" name="sb_api"
                                        value="{{ $user->videohost_api_key ?? 'No Added' }}" placeholder="StreamSb API KEY">
                                    <small class="text-danger">Be Carefull Wrong Api Keys Crash Site Fetures</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="tmdb_key">TMDB API KEY</label>
                                    <input type="text" class="form-control" id="tmdb_key" name="tmdb_key"
                                        value="{{ $user->tmdb_api_key ?? 'Not Added' }}" placeholder="TMDB API KEY">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center my-3">
                            <button type="submit" name="saveapi"
                                class="btn btn-lg rounded-pill btn-outline-success mx-2">Submit</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection
