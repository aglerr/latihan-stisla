@extends('master')

@section('title', 'Peduli Diri - Register')

@section('content')
<section class="section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

          <div class="card card-primary">
            <div class="card-header"><h4>Register</h4></div>

            <div class="card-body">
              <form method="POST" action="/simpanUser">
                @csrf
                
                <div class="form-group">
                  <label for="nik">NIK</label>
                  <input id="nik" type="text" class="form-control" name="nik" tabindex="1" autofocus>
                  <div class="invalid-feedback">
                    Please fill in your NIK
                  </div>
                </div>

                <div class="form-group">
                  <div class="d-block">
                      <label for="nama_lengkap" class="control-label">Nama Lengkap</label>
                  </div>
                  <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" tabindex="2">
                  <div class="invalid-feedback">
                    Please fill in your full name
                  </div>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="3">
                    Register
                  </button>
                </div>
              </form>

              <div class="mt-5 text-center">
                Already have an account? <a href="/login">Login</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
