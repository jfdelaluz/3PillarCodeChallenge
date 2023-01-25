@extends( 'common/layout' )

@section( 'content' )
<h1>Users List:</h1>
<hr />

<table class="table table-striped">
  <thead class="table-dark">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach ( $data as $user )
    <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
