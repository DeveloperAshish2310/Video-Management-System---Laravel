@extends('frontend.layout.main')

@push('title') Register @endpush

@section('content')
  
    <div class="container">

        @if ($errors->all())
            {{ magicstring($errors->all()) }}
        @endif


        
        <div class="h4">Registration Form</div>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            
            <label for="" class="form-label my-2">Name</label>
            <input type="text" placeholder="Enter Your Name" class="form-control" name="name" value="{{ old('name') }}" >
            
            <label for="" class="form-label my-2">Username</label>
            <input type="text" placeholder="Enter Your Name" class="form-control" name="username" value="{{ old('username') }}">

            
            <label for="" class="form-label my-2">Email</label>
            <input type="email" placeholder="Enter Your Name" class="form-control" name="email" value="{{ old('email') }}">
            
            <label for="" class="form-label my-2">Password</label>
            <input type="text" placeholder="Enter Your Name" class="form-control" name="password" value="{{ old('password') }}">

            <label for="password_confirmation" class="form-label my-2">confirm Password</label>
            <input type="text" placeholder="Enter Your Name" class="form-control" name="password_confirmation" id="password_confirmation">

            <button type="submit" class="btn btn-outline-primary my-3 float-end ">Submit</button>

        </form>
    </div>
    
@endsection