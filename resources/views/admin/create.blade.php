@extends('layouts.app')

@section('content')
<form method="post" action="{{route('manage-blog.store')}}" enctype="multipart/form-data">
@csrf
  <div class="container">
    <div class="card">
      <div class="card-body">
        <form>
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" name="judul" placeholder="Enter Judul">
        </div>
        <div class="form-group">
          <label for="isi">Isi</label>
          <textarea class="form-control" name="isi" rows="3" placeholder="Enter Isi"></textarea>
        </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control-file" name="foto">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</form>
@endsection

@section('js')
<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('isi');
</script>
@endsection