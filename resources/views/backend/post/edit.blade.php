<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card-header ">
                    <span class="fs-4 fw-bold">About us</span>
                    <a href="/post" class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">

                    <form action="/post/{{$post->id}}" , method="post" enctype="multipart/form-data">
                        @csrf
                        @method("put")
                        <div class="form-group">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="Enter your title" value="{{ $post->title }}">
                        </div>
                        <div class="form-group">
                            <label for="text">Text <span class="text-danger">*</span></label>
                            <textarea class="summernote" name="text" id="text" class="form-control" placeholder="Enter your text"  >{{ $post->text }}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="image">Image </label>
                                    <input type="file" name="image" id="image" class="form-control"
                                        accept="images/jpeg, images/jpg, images/png"  value="{{ $post->image }}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Save Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
