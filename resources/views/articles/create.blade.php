@extends('sbadmin.master')



@section('content')
<div class="row">
  <div class="col-md-12">
    <h1> Create an article</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <form action="/articles" method="POST">
      @csrf
        <div class="form-group">
            <label for="judul">Judul Artikel</label>
            <input type="text" id="judul" name="judul" class="form-control form-control-lg">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" class="form-control form-control-lg">
        </div>
        
        <div class="form-group">
            <label for="tag">Tag</label>
            <input type="text" id="tag" name="tag" class="form-control form-control-lg">
        </div>
        <div class="form-group">
            <label for="isi">Konten</label>
            <textarea type="text" id="isi" name="isi" class="form-control form-control-lg">
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg" >Buat Artikel</button>
    </form>
  </div>
</div>


@endsection


@push('scripts')
<script src="{{asset('/js/create.js')}}"></script>

@endpush

