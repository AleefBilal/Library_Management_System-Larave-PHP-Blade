<style>
    /* .container{
      height: 500px;
      width: 100px;
      padding: 40px;
      margin-top: 20px;
      margin-bottom: 50px;
      border: 1px solid #ccc;
      border-radius: 4px;

        }
    .form-book{
      margin-bottom: 70%;

    }     */
    form {
        width: 700px;
        margin: 10px auto;
        border: 1px solid #ccc;
        padding: 10px;
        background-color: rgba(204, 204, 204, 0.205);
    }

    label {
        display: block;
        margin-bottom: 6px;
    }

    input[type="text"],
    input[type="date"],
    textarea {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 16px;
    }

    select {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 16px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 10px;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        opacity: 0.8;
    }

</style>
@extends('backend.layout')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Book</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('body')

    <form name="books-form" action="{{route('admin.store')}}" method="POST"  enctype="multipart/form-data" class="form">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        <span class="text-danger">
    @error('name')
            {{$message}}
            @enderror
</span>
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author_name" required><br>
        <span class="text-danger">
    @error('author')
            {{$message}}
            @enderror
</span>
        <label for="published_date">Publication Date:</label><br>
        <input type="date" id="date" name="published_date" required><br>
        <span class="text-danger">
    @error('date')
            {{$message}}
            @enderror
</span>
        <label for="category">Category</label><br>
        <select id="category" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="2" cols="40" required></textarea>
        <span class="text-danger">
            @error('description')
                {{$message}}
            @enderror
        </span>
        <br>
        <input type="checkbox" id="downloadable" name="downloadable">
        <label for="downloadable">Download Book</label><br>
        <div class="form-group">
            <label for="file_path">Upload File</label>
            <input type="file" name="file_path" class="file_upload" id="file_path">
        </div>
        <div class="text-center text-md-center mt-3">
            <button class="btn btn-primary" type="submit" onclick="document.getElementById('books-form').submit();">
                Submit Book
            </button>
        </div>
    </form>
@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
    <script>
        swal("{{session('status')}}");
    </script>
@endif
