<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card-header ">
                    <span class="fs-4 fw-bold">About us</span>
                    <a href="/faculty" class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">

                    <form action="/faculty/{{$faculty->id}}" , method="post" enctype="multipart/form-data">
                        @csrf
                        @method("put")
                        <div class="form-group">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter your name" value="{{ $faculty->name }}">
                        </div>

                        <button type="submit" class="btn btn-info">Save Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
