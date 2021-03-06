@extends('admin.index')
@section('content')
    <form method="POST" action="{{ route('news.update', $news->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="inputZip">News Title</label>
                <input value="{{ $news->name }}" name="name" type="text" class="form-control" id="inputZip">
            </div>
            <div class="form-group col-md-4">
                <input type="file" name="photo" required>
            </div>

            <div class="form-group col-md-4">
                <label for="inputState">Categories</label>
                <select name="category" id="inputState" class="custom-select form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->name }}">
                            {{ $category->name }}
                        </option>

                    @endforeach
                </select>
            </div>
        </div>



        <div class="form-group">
            <label for="exampleFormControlTextarea1">News Content</label>
            <textarea name="content" class="form-control" id="exampleFormControlTextarea1"
                rows="3">{{ $news->content }}</textarea>
        </div>


        {{-- <div class="form-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <div class="invalid-feedback">Drop Zone Upload Image</div>
            </div>
        </div> --}}

        <button type="submit" class="btn btn-success">Update</button>

    </form>
@endsection
@section('title', 'Edit News')
@section('title2', 'News/Edit News')
