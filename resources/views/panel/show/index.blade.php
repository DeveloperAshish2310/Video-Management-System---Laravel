@extends('panel.layout.main')

@push('title') Manage Show @endpush

@section('content')
  
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>TMDB ID</th>
                    <th>Page</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Views</th>
                    <th>Episodes</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($shows as $show) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $show->name }}</td>
                        <td>{{ $show->tmdb_id }}</td>
                        <td>
                            <a href="#" class="btn btn-outline-primary">Check Live</a>
                        </td>
                        <td>
                            @if ($show->status == 1)
                                <span class="badge badge-outline-success">Published</span>
                            @else 
                                <span class="badge badge-outline-danger">Unpublished</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('panel.store.show.make.action',['1',$show->id]) }}" class="btn btn-sm btn-rounded btn-outline-success mx-1">
                                <i class="mdi mdi-eye" style="margin: 10px 0;"></i>
                            </a>
                            <a href="{{ route('panel.store.show.make.action',['0',$show->id]) }}" class="btn btn-sm btn-rounded btn-outline-warning mx-1">
                                <i class="mdi mdi-eye-off" style="margin: 10px 0;"></i>
                            </a>
                            <a href="{{ route('panel.store.show.make.action',['2',$show->id]) }}" class="btn btn-sm btn-rounded btn-outline-danger mx-1">
                                <i class="mdi mdi-delete" style="margin: 10px 0;"></i>
                            </a>
                        </td>
                        <td>10</td>
                        <td>{{ EpisodeCount($show->tmdb_id) }}</td>
                    </tr>
                @empty 
                    <tr>
                        <td colspan="8" class="text-center">No Show Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
@endsection