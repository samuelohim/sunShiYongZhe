@extends ('layouts.main')

@section('content')

	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email</th>
      <th>Address</th>
    </tr>
  </thead>
  <tbody>    	@foreach ($users as $syz)
    <tr>


	      <td>{{$syz->id}}</td>
	      <td>{{$syz->name}}</td>
	      <td>{{$syz->email}}</td>
	      <td>{{$syz->address}}</td>
    </tr>
	     @endforeach
  </tbody>
</table> 
@endsection