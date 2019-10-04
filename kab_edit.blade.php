@extends('template')
@section('content')
<section class="main-section">
  <div class="content">
    <h1>Ubah Kabupaten</h1>
    <hr>
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
        @endforeach
     </ul>
    </div>
    @endif

    @foreach($data as $datas)
    <form action="{{ route('kab.update', $datas->id) }}" method="post">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="form-group">
        <label for="nama">Code:</label>
        <input type="code"  class="form-control" id="code" name="code" value="{{ $datas->code }}">
      </div>
      <div class="form-group">
        <label for="nama">Description:</label>
        <textarea class="form-control" id="description" name="description">{{ $datas->description }}</textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-md btn-primary">Submit</button>
        <button type="reset" class="btn btn-md btn-danger">Cancel</button>

      </div>

    </form>
    @endforeach
  </div>
</section>
@endsection
