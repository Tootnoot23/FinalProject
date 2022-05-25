@extends('layout.master')
@section('title', 'index')
@section('content')
<main class="form-signin">
    <form>
      <h1 class="h3 mb-3 mt-5 fw-normal">Sign Up Onegaishimasu</h1>
        <form action = "/register" method = "POST"> 
      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="name" placeholder="name@example.com">
        <label for="name">Name</label>
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="email">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name = "password" class="form-control" id="passwrod" placeholder="Password">
        <label for="passwrod">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">SIGNUP</button>
    </form>
    <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
  </main>
@endsection
