@extends('admin.home')
@section('content')
    <div class="container" style="padding: 12px">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ url('addlatestnews') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="header">Title</label>
                        <input type="text" name="header" id="header" placeholder="header" required>
                    </div>
                    <div>
                        <label for="category">category</label>
                        <input type="category" name="category" id="category" placeholder="category" required>
                    </div>
                    <div>
                        <label for="publisher">Publisher Name</label>
                        <input type="publisher" name="publisher" id="publisher" placeholder="publisher" required>
                    </div>
                    <div>
                        <label for="body">Body</label>
                        <input type="body" name="body" id="body" placeholder="body" required>
                    </div>
                    <div>
                        <label for="image">Add Image</label>
                        <input type="file" name="image" id="image" placeholder="image" required>
                    </div>
                    <div>
                    <button type="submit" class="btn btn-primary btn-sm"> Save</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection