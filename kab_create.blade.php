@extends('template')
@section('content')
<section class="main-section">
  <div class="content">
    <h1>Tambah Kabupaten</h1>
    <hr>
    @if($errors->any())
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
      <li><strong>{{ $error }}</strong>
        @endforeach

    </div>
    @endif

    <form action="{{ route('kab.store') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="code">Code:</label>
        <input type="code" class="form-control" id="code" name="code">
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description"></textarea>
      </div>
      <button type="submit" class="btn-md btn-primary">Submit</button>
      <button type="reset" class="btn-md btn-danger">Cancel</button>
    </div>

    </form>

  </div>

</section>
@endsection
