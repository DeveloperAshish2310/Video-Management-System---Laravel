@extends('panel.layout.main')


@push('title') Home @endpush

@section('content')

<div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"> Add Movie </h4>
          <p class="card-description"> Add Movies Mannually </p>
          <form class="forms-movie" method="post">
            <div class="form-group">
              <label for="tmdb_id"> TMDB ID </label>
              <input type="text" class="form-control" name="tmdb_id" placeholder="Enter Movie TMDB ID">
            </div>
            <div class="form-group">
              <label for="movie_code"> Movie Code </label>
              <input type="text" class="form-control" name="movie_code" placeholder="Enter Movie Code ">
            </div>
            <div class="form-group">
              <label class="text-warning">User Comma (,) For Saprate Multi Part  <i class="mdi mdi-information-outline text-white" title="For Example: moviecode1,moviecode2,moviecode3"></i> </label>
            </div>
            
            <button type="submit" class="btn btn-outline-success mr-2" name="mov">Submit</button>
            <button class="btn btn-inverse-info">Cancel</button>
          </form>
        </div>
      </div>
    </div>

    
    <div class="col-md-12 grid-margin stretch-card">
        <a href="https://www.themoviedb.org/" target="_blank" class="btn btn-social-icon-text btn-facebook" title="Open TMDb Website">
          <i class="mdi mdi-open-in-new "></i> Open TMDB
        </a>
        <a href="sync.php?syncNow" target="_blank" class="btn btn-social-icon-text btn-youtube mx-2" title="Sync Files With StreamSb">
          <i class="mdi mdi-cloud-sync "></i> Sync Movie With StreamWish
        </a>
        <a href="sync2part.php?syncNow" target="_blank" class="btn btn-social-icon-text btn-linkedin mx-2" title="Sync Movies With StreamSb">
          <i class="mdi mdi-cloud-sync "></i> Sync Movie With StreamWish ( 2 Parts )
        </a>
    </div>


  </div>
  
</div>
    
@endsection