@extends('dashboard.layouts.main')


@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Post</h1>
    </div>

    <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tittle</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->tittle }}</td>
              <td>{{ $post->category->name }}</td>
              <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info">
                    <span data-feather="eye"></span>
                </a>
                <a href="" class="badge bg-warning" style="margin-left: 5px;">
                    <span data-feather="edit"></span>
                </a>
                <a href="" class="badge bg-danger" style="margin-left: 5px;">
                    <span data-feather="trash"></span>
                </a>
            </td>
            
              </td>
            </tr>
            
            @endforeach

            
          </tbody>
        </table>
      </div>
@endsection