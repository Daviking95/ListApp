@extends('layouts.app')
@section('content')
  <div class="container">
    <h1>Submit a link</h1>
    <form class="" action="/submit" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control"  id="title" name="title" placeholder="Title" value="">
      </div>
      <div class="form-group">
        <label for="url">Url</label>
        <input type="text" class="form-control"  id="url" name="url" placeholder="URL" value="">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" rows="8" cols="80" class="form-control" id="description" placeholder="description"></textarea>
      </div>
      <button type="submit" name="button" class="btn btn-default">Submit</button>
    </form>
  </div>
@endsection
