@extends('template.master');
@section('title', 'Edit Data Genre')
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('cast.update', $casts->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="name">nama Genre</label>
            <input name="name" type="text" class="form-control @error('name') {{ 'is-invalid' }} @enderror" id="name"  placeholder="nama Genre" value="{{ $casts->name }}">
          </div>
          @error('name')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="age">your age</label>
            <input name="age" type="text" class="form-control @error('age') {{ 'is-invalid' }} @enderror" id="age"  placeholder="nama Genre" value="{{ $casts->age }}">
          </div>
          @error('age')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="bio">add bio</label>
            <input name="bio" type="text" class="form-control @error('bio') {{ 'is-invalid' }} @enderror" id="bio"  placeholder="nama Genre" value="{{ $casts->bio }}">
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
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection