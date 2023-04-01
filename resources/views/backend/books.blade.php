<style>
    .container{
        background-color: rgba(151, 155, 156, 0.301);
    }
</style>
@extends('backend.layout')

@section('content-header')
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">All Books in Library</h1>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
@endsection
@section('body')
        <div class="container">
            <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Author Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Downloadable</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                  <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author_name}}</td>
                    <td>{{$book->category_id}}</td>
                    <td>{{$book->description}}</td>
                    <td>{{$book->downloadable? 'Yes' : 'No' }}</td>
                      <td>
{{--                          <form id="delete-form-{{ $book->id }}" action="{{ route('books.delete', ['id' => $book->id]) }}" method="POST">--}}
{{--                              @csrf--}}
                          <a href="{{route('books.delete', ['id' => $book->id])}}"><button class="btn btn-danger" data-book-id="{{ $book->id }}">Delete</button></a>
{{--                          </form>--}}
                          <a href="{{route('books.edit', ['id' => $book->id])}}"><button class="btn btn-primary">Edit</button></a>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
@endsection

{{--@section('scripts')--}}
{{--    <script>--}}
{{--        // Listen to the click event on the delete button--}}
{{--        document.addEventListener('click', function(event) {--}}
{{--            if (event.target.classList.contains('btn-danger')) {--}}
{{--                // Prevent the form submission--}}
{{--                event.preventDefault();--}}

{{--                // Show a confirmation dialog box--}}
{{--                if (confirm('Are you sure you want to delete this book?')) {--}}
{{--                    // Submit the form--}}
{{--                    document.querySelector('#delete-form-' + event.target.dataset.bookId).submit();--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
