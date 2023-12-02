@extends('panel.layout.main')

@push('title') Manage Show @endpush

@section('content')
  
    <div class="container">
        <table class="table" border="1">
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
                                <span class="badge badge-success">Active</span>
                            @else 
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                        <td>10</td>
                        <td>{{ EpisodeCount($show->show_id) }}</td>
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