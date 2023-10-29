@extends('panel.layout.main')

@push('title') Add Episode @endpush

@section('content')
  
<div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"> Add Episode </h4>
          <p class="card-description"> Add Episodes Mannually </p>
          <form class="forms" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="tmdb_id"> Show TMDB ID </label>
                      <!-- <input type="text" class="form-control" id="tmdb_id" name="show_code" placeholder="Enter Show TMDB ID"> -->
                      <select class="js-example-basic-single" style="width:100%" name="show_code">
                      <option value="" selected>Select Show</option>
                        <option value="show_id">Show Name</option>

                      </select>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group">
                      <label for="tmdb_id"> Season Number </label>
                      <input type="text" class="form-control" id="tmdb_id" name="season_no" placeholder="Enter Show TMDB ID">
                  </div>
              </div>
            </div>

            <div class="form-group" style="float: right;">
              <button class="btn btn-primary" id="addfield" type="button"> <i class="mdi mdi-library-plus"></i> Add Episode</button>
              <button class="btn btn-danger" id="removefiled" type="button"> <i class="mdi mdi-playlist-remove"></i> Remove Episode</button>
            </div>
            <br><br>                

            <div class="row">
              <div class="col">
                  <div class="mb-3">
                      <label for="epi_name" class="form-label">Episode Number</label>
                      <input type="number" class="form-control" id="epi_name" name="epi_number[]" placeholder="Enter Episode Name" autocomplete="off">
                  </div>
              </div>

              <div class="col">
                  <div class="mb-3">
                      <label for="epi_code" class="form-label">Episode Code</label>
                      <input type="text" class="form-control" id="epi_code" name="epi_code[]" placeholder="Enter Episode Code" autocomplete="off">
                  </div>
              </div>
          </div>

            
          <!-- For Adding New Fields -->
            <div id="fields"></div>


           
            <button type="submit" name="is_submit" class="btn btn-outline-success mr-2">Submit</button>
            <button class="btn btn-inverse-info">Cancel</button>
          </form>
        </div>
      </div>
    </div>

    
    <div class="col-md-6 grid-margin stretch-card">
        <a href="https://www.themoviedb.org/" target="_blank" class="btn btn-social-icon-text btn-facebook" title="Open TMDb Website">
          <i class="mdi mdi-open-in-new "></i> Open TMDB
        </a>
        <a href="syncEpisode.php?syncnow" target="_blank" class="btn btn-social-icon-text btn-youtube mx-2" title="Sync Files With StreamSb">
          <i class="mdi mdi-cloud-sync "></i> Sync File With StreamWish
        </a>
    </div>


  </div>
  
</div>
    
@endsection