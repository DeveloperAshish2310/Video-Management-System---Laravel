@extends('panel.layout.main')

@push('title') Add Show @endpush

@section('content')
  
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Add Show </h4>
                <p class="card-description"> Add Show Mannually </p>
                <form method="post" action="{{ route('panel.store.add.show') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="tmdb_id" value="{{ getConfig('tmdb_api')->value }}">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="show_name">show Title</label>
                                <input type="text" name="show_name" class="form-control" id="show_name" placeholder="show Name" autocomplete="off">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="show_code">show Code</label>
                                <input type="text" name="show_code" class="form-control" id="show_code" placeholder="show Code" autocomplete="off" onkeyup="fetch_api(this.value)" autofocus="true">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="show_release_date">Release Date</label>
                                <input type="date" name="show_release_date" class="form-control" id="show_release_date">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="imdb_rating">IMDB Rating</label>
                                <input type="text" name="imdb_rating" max="2" min="1" class="form-control" id="imdb_rating" placeholder="IMDB Rating" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="show_duration">Per Episode Duration</label>
                                <input type="text" name="show_duration" class="form-control" id="show_duration" placeholder="Enter Episode Runtime.." autocomplete="off">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="Uploader_name">Uploader Name</label>
                                <input type="text" name="Uploader_name" class="form-control" id="Uploader_name" placeholder="show Uploaded By.." autocomplete="off" value="username">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="show_des">show Description</label>
                                <textarea name="show_description" id="show_des" rows="4" class="form-control" placeholder="Type the show Description......" autocomplete="off"></textarea>
                            </div>
                        </div>
                      
                    </div>
                    

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="poster_url" class="my-2">Poster Url</label>
                                <input type="url" id="poster_url" name="poster_url" class="form-control" placeholder="Enter The Poster Url" autocomplete="off" onchange="changeposter(this.value)">
                            </div>

                            <label for="Poster_Demo" class="mb-2">Poster Preview</label>

                            <div class="mb-3">
                                <img src="../assets/img/300x373.png" class="img-thumbnail" alt="Poster Demo" id="Poster_Demo" width="300px">
                            </div>
                        </div>

                        <div class="col">
                            <div class="mb-3">
                                <label for="thumbnail_url" class="my-2">Thumbnail Url</label>
                                <input type="url" id="thumbnail_url" name="thumbnail_url" class="form-control" placeholder="Enter The Thumbnail Url" autocomplete="off" onchange="changethumb(this.value)">
                            </div>

                            <label for="thumbnail_Demo" class="mb-2">Thumbnail Preview</label>
                            <div class="mb-3">
                                <img src="../assets/img/600x373.png" class="img-thumbnail thumbnail_demo" alt="Thumbnail Demo" id="thumbnail_Demo">
                            </div>
                        </div>
                    </div>


                    <div class="d-flex justify-content-between my-3">
                        <div class="">
                        <a href="syncshow.php?syncshow" class="btn btn-outline-warning">Sync Show With Episode</a>
                        </div>
                        <div class="">
                            <button type="reset" class="btn btn-outline-danger mx-2">Reset</button>
                            <button type="submit" name="submitshow" class="btn btn-outline-success mx-2">Submit</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    
</div>
    

@section('push-script')
<script src="{{ asset('assets/js/addshow.js') }}"></script>
@endsection

@endsection