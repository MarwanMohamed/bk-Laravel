@extends('layout')
@section('content')

    <div class="container">

      <form class="form-signin text-center" method="post">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">

         <h2 class="form-signin-heading">Please Login</h2>
         
         <label for="inputEmail" class="sr-only">Email address</label>
         <input type="email" name ='email' id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

         <label for="inputPassword" class="sr-only">Password</label>
         <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
       
         <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>

   @if(count($errors) > 0)

      @foreach($errors->all() as $error)
         <div class="alert alert-danger">{{ $error }}</div>
      @endforeach

   @endif

    </div>
@stop