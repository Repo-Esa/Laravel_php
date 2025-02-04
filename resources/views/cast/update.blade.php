@extends('template.master')
@section('content')


            <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Cast</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('cast.update', $cast->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                      <label for="Nama">nama Cast</label>
                      <input name="Nama" type="text" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" id="Nama"  placeholder="Masukan Nama" value="{{ $cast->nama }}">
                    </div>
                    @error('nama')
                      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="Umur">Umur</label>
                      <input name="Umur" type="text" class="form-control @error('umur') {{ 'is-invalid' }} @enderror" id="Umur"  placeholder="Masukan Umur" value="{{ $cast->umur }}">
                    </div>
                    @error('umur')
                      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="Bio"> Bio</label>
                      <input name="Bio" type="text" class="form-control @error('bio') {{ 'is-invalid' }} @enderror" id="Bio"  placeholder="Masukan Bio" value="{{ $cast->bio }}">
                    </div>
                    @error('bio')
                      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="px-3 d-flex justify-content-between align-items-center">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
    
    <!-- /.container-fluid -->
  </section>
<!-- /.content -->

@endsection