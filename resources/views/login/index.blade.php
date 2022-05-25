@extends('layout.master')
@section('title', 'index')
@section('content')
<main class="form-signin">
    <form>
      <h1 class="h3 mb-3 mt-5 fw-normal">Login Onegaishimasu</h1>
  
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">LOGIN</button>
    </form>
    <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
  </main>
@endsection
