@extends('panel.layout.main')

@push('title') settings @endpush

@section('content')
  
    
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Site Global Configration </h4>
                <p class="card-description mb-3"> Settings That Effect Across Site </p>
                <form enctype="multipart/form-data"  method="POST" action="{{ route('panel.settings.update') }}">
                    @csrf
                    <input type="hidden" id="tmdb_id" value="">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="site_name">Site Title</label>
                                <input type="text" name="site_name" class="form-control" id="site_name" placeholder="show Name" value="{{ env("APP_NAME") }}" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="site_url">Site URL</label>
                                <input type="text" name="site_url" class="form-control" id="site_url" placeholder="Site Domain URL" value="{{ env('APP_URL') }}" autocomplete="off">
                            </div>
                        </div>
                    </div>                   

                    <div class="h3 my-3"><u>Meta Configrations</u></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="meta_desc">Meta description</label>
                                <input type="text" class="form-control" placeholder="Enter Meta Description" id="meta_desc" name="meta_description" value="{{ getConfig('meta_description')->value }}" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="meta_keyword">Meta Keywords</label>
                                <input name='meta_keyword' class='form-control h-100 tagify' id="tags" placeholder='write some tags' value='{{ getConfig("meta_keyword")->value }}'>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="h3 my-3"><u>API Configrations</u></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="meta_desc">Video API ( Stream Wish )</label>
                                <input type="text" class="form-control" placeholder="Enter Meta Description" id="meta_desc" name="video_api" value="{{ getConfig('video_api')->value }}" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="meta_keyword">TMDB API</label>
                                <input name='tmdb_api' class='form-control h-100 tagify' id="meta_keyword" placeholder='write some tags' value='{{ getConfig("tmdb_api")->value }}'>
                            </div>
                        </div>
                    </div>  

                    <div class="d-flex justify-content-end my-3">
                        <button type="reset" class="btn btn-outline-danger mx-2">Reset</button>
                        <button type="submit" class="btn btn-outline-success mx-2">Submit</button>
                    </div>

                </form>

            </div>
        </div>
    </div>





</div>

    
@endsection