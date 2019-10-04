@extends('template')
@section('content')
<section class="main-section">
  <div class="content">
    <h1>Data Kabupaten</h1>
    @if(Session::has('alert_message'))
    <div class="alert alert-success">
      <strong>{{ Session::get('alert_message') }}</strong>
    </div>
    @endif
    <hr>
    <div>
    <button class="btn-sm btn-warning"> <a href="{{url('/kab/create')}}">Create</a></button>
   </div>
    <table class="table table-bordered">
       <thead>
         <tr>
           <th>ID</th>
           <th>Code</th>
           <th>Description</th>
           <th>Aksi</th>
         </tr>
       </thead>
       <tbody>
         @php $no = 1; @endphp
         @foreach($data as $datas)
         <tr>
           <td>{{ $no++ }}</td>
           <td>{{ $datas->code }}</td>
           <td>{{ $datas->description }}</td>
           <td>
              <form action="{{ route('kab.destroy', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{ route('kab.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin
                            menghapus data?')">Delete</button>
              </form>
           </td>
         </tr>
         @endforeach
       </tbody>
    </table>

    <footer class="sticky-footer bg-white">

          <span>

            <a href="{{url('/logout')}}">Sign Out</span>


    </footer>


  </div>

</section>

@endsection
