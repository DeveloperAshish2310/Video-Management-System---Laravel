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
        <a href="{{ route('logout') }}" class="btn btn-outline-primary">Logout</a>
        <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
        <a href="{{ url('panel') }}" class="btn btn-outline-primary">Panel</a>
    </div>
@endsection


{{-- For Adding Script --}}
@section('push-script')
@endsection
