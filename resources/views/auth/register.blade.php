@extends("layouts.app")


@section('title')Register @endsection

@section('content')

<div class="login-form">
    <form method="POST" action="{{route('register.post')}}">
        @csrf
        <h3 class="card-header text-center">Register</h3>
        <div class="form-group">
          <label for="fullname">Full Name</label>
          <input type="text" class="form-control" id="fullname" name="fullname" aria-describedby="nameHelp" placeholder="Enter Name">
        </div>
        @if($errors->has('fullname'))
        <span class="text-danger">{{$errors->first('fullname')}}</span>
        @endif
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        @if($errors->has('email'))
        <span class="text-danger">{{$errors->first('email')}}</span>
        @endif
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password" name="password" >
        </div>
        @if($errors->has('password'))
        <span class="text-danger">{{$errors->first('password')}}</span>
        @endif
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection