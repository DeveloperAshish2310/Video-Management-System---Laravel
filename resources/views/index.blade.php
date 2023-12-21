@extends('frontend.layout.main')
@push('title')
    Home
@endpush

{{-- For Adding Internal CSS --}}
@section('push-style')
@endsection

{{-- For Adding Main content --}}
@section('content')

    <div class="container">

        <div class="row">
            <div class="col-12">
                <h6 class="my-3">Recent Added Movies</h6>
                <x-home-slider-component>
                    
                    @forelse ($movies as $movie)
                        <div class="swiper-slide">
                            <a href="{{ route('watch.movie',$movie->tmdb_id) }}" style="object-fit: cover">
                                <img src="{{ generate_thumbnail(getTMDBImage($movie->poster_path)) }}" alt="{{ $movie->name }}" style="height: 170px;width: 125px;" class="img-fluid rounded">
                                {{-- <img src="{{ getTMDBImage($movie->poster_path) }}" alt="{{ $movie->name }}" style="height: 170px;width: 125px;" class="img-fluid rounded"> --}}
                            </a>
                        </div>
                    @empty
                        <div class="swiper-slide">
                            <div class="text-center">
                                <h6>No Movies Found</h6>
                            </div>
                        </div>                        
                    @endforelse
                   
                   
                </x-swiper-slider-component>
            </div>

            <div class="col-12">
                <h6 class="my-3">Recent Added Shows</h6>
                <x-home-slider-component>


                    @forelse ($shows as $show)
                        <div class="swiper-slide">
                            <a href="#Show_link_{{ $loop->iteration }}" style="object-fit: cover">
                                <img src="{{ generate_thumbnail($show->poster_path) }}" alt="{{ $show->name }}" style="height: 170px;width: 125px;" class="img-fluid rounded">
                                {{-- <img src="{{ $show->poster_path }}" alt="{{ $show->name }}" style="height: 170px;width: 125px;" class="img-fluid rounded"> --}}
                            </a>
                        </div>
                    @empty
                        <div class="swiper-slide">
                            <div class="text-center">
                                <h6>No Shows Found</h6>
                            </div>
                        </div>
                    @endforelse
                </x-swiper-slider-component>
            </div>
        </div>





    </div>
@endsection


{{-- For Adding Script --}}
@section('push-script')
@endsection
