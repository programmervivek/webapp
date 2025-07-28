<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">

      <!-- Add User Button -->
      <div class="row mb-3">
        <div class="col text-end">
          <a href="{{ route('user.register') }}" class="btn btn-primary">Add User</a>
        </div>
      </div>

      <!-- User Table -->
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>Sr.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Date</th>
            <th>View Details</th>
          </tr>
        </thead>
        <tbody>
          @php $i = 1; @endphp
          @foreach ($user as $u)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $u->name }}</td>
              <td>{{ $u->email }}</td>
              <td>{{ $u->role }}</td>
              <td>{{ $u->created_at }}</td>
              <td>
                <a href="{{ route('user_details', $u->id) }}" class="btn btn-sm btn-info">View Details</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>
