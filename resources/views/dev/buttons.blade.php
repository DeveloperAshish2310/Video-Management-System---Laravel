@extends('frontend.layout.main')
@push('title')
    Button Dev Page
@endpush

{{-- For Adding Internal CSS --}}
@section('push-style')
@endsection

{{-- For Adding Main content --}}
@section('content')

    <div class="container">
        <a href="{{ route('logout') }}" class="btn btn-outline-danger">Logout</a>
        <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
        <a href="{{ url('panel') }}" class="btn btn-outline-primary">Panel</a>

        <br><br>
        <button class="btn btn-outline-primary">primary</button>
        <button class="btn btn-outline-secondary">secondary</button>
        <button class="btn btn-outline-danger">danger</button>
        <button class="btn btn-outline-info">info</button>
        <button class="btn btn-outline-success">success</button>
        <button class="btn btn-outline-dark-success">Dark Success</button>
        <button class="btn btn-outline-warning">warning</button>
        <button class="btn btn-outline-light">light</button>
        <button class="btn btn-outline-dark">dark</button>
        
        <br><br>
        <button class="btn btn-primary">primary</button>
        <button class="btn btn-secondary">secondary</button>
        <button class="btn btn-danger">danger</button>
        <button class="btn btn-info">info</button>
        <button class="btn btn-success">success</button>
        <button class="btn btn-dark-success">Dark Success</button>
        <button class="btn btn-warning">warning</button>
        <button class="btn btn-light">light</button>
        <button class="btn btn-dark">dark</button>
        
        
    </div>
@endsection


{{-- For Adding Script --}}
@section('push-script')
@endsection
