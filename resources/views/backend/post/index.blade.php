<x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header mb-3 ">
                    <span class="fs-4 fw-bold">Posts</span>
                    <a href="/post/create" class="float-end  btn btn-info">Add New Post</a>
                </div>
                <div class="card-body">
                    @if (!empty($posts))
                        @foreach ($posts as $post)
                            <div class="container mb-2">
                                <div class="col-md-8 px-0">
                                    <p>{{ $post->title }}</p>
                                    <img src="{{ asset($post->image) }}" class="img-fluid" alt="Responsive image">
                                    <p>{!! $post->text !!}</p>
                                    <form action="/post/{{ $post->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="/post/{{ $post->id }}/edit" class="badge btn bg-success">Edit</a>
                                        <button type="submit" class="badge btn bg-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach


                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
