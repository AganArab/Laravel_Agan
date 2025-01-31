@extends('template.master'  )
@section('content')
@section('web-title','Add Genres')

@section('content-title', 'Add Your Movie Genre Here!')


<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Genre</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('genre.store')}}" method="post">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="movieGenre">Movie Genre</label><br>
                      <input type="text" class="form-control" @error('name') {{'is invalid'}} @enderror id="genrename" name="name" placeholder="Enter Genre Name..." value="{{old('name')}}">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="row">
                  <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                  </div>
                  
                  <div class="card-footer">
                    <a href="{{route ('genre.index')}}" button type="submit" class="btn btn-secondary">kembali</a>
                  </div>
                 </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
@endsection