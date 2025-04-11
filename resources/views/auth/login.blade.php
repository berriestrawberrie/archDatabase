@extends("layouts.app")


@section('title')Login @endsection

@section('content')

<div class="login-form">

    <form method="POST" action="{{route('login.post')}}">
        @csrf
        <h3 class="card-header text-center">Login</h3>
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