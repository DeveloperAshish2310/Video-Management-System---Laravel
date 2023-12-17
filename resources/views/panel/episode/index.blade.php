@extends('panel.layout.main')

@push('title')
    Manage Episode
@endpush

@section('content')
    @section('push-head')
        <link
            href="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-1.13.7/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/cr-1.7.0/date-1.5.1/r-2.5.0/datatables.min.css"
            rel="stylesheet">
    @endsection


    <div class="h4 my-2">
        <u>Manage Episodes</u>
    </div>

    <table id="myTable" class="display table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Show TMDB</th>
                <th>E. Number</th>
                <th>VIDEO CODE</th>
                <th>STATUS</th>
                <th>ACTION</th>
                <th>VIEW</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($episodes as $movie)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $movie->name }}</td>
                    <td>{{ $movie->show_id }}</td>
                    <td>{{ $movie->episode_number == 0 ? 'No Parts' : $movie->episode_number }}</td>
                    <td>{{ $movie->episode_code }}</td>
                    <td>
                        @if ($movie->status == 1)
                            <button class="btn btn-outline-success">
                                Publish
                            </button>
                        @else
                            <button class="btn btn-outline-warning">
                                Unpublish
                            </button>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('panel.store.episode.make.action', ['1', $movie->id]) }}"
                            class="btn btn-sm btn-rounded btn-outline-success mx-1">
                            <i class="mdi mdi-eye" style="margin: 10px 0;"></i>
                        </a>
                        <a href="{{ route('panel.store.episode.make.action', ['0', $movie->id]) }}"
                            class="btn btn-sm btn-rounded btn-outline-warning mx-1">
                            <i class="mdi mdi-eye-off" style="margin: 10px 0;"></i>
                        </a>
                        <a href="{{ route('panel.store.episode.make.action', ['2', $movie->id]) }}"
                            class="btn btn-sm btn-rounded btn-outline-danger mx-1">
                            <i class="mdi mdi-delete" style="margin: 10px 0;"></i>
                        </a>
                    </td>
                    <td>{{ $movie->view_count }}</td>
                </tr>
            @empty
            @endforelse

        </tbody>
    </table>


    
    @section('push-script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script
            src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-1.13.7/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/cr-1.7.0/date-1.5.1/r-2.5.0/datatables.min.js">
        </script>

        <script>
            // $(document).ready( function () {
            //     $('#myTable').DataTable();
            // } );    
        </script>
    @endsection

@endsection
