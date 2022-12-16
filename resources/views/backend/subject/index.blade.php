<x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header mb-3 ">
                    <span class="fs-4 fw-bold">subjects</span>
                    <a href="/subject/create" class="float-end  btn btn-info">Add New subject</a>
                </div>
                <div class="card-body">
                    @if (!empty($subjects))
                        @foreach ($subjects as $subject)
                            <div class="container mb-2">
                                <div class="col-md-8 px-0">
                                    <p>{{ $subject->title }}</p>
                                    <img src="{{ asset($subject->image) }}" class="img-fluid" alt="Responsive image">
                                    <p>{!! $subject->text !!}</p>
                                    <form action="/subject/{{ $subject->id }}" method="subject">
                                        @csrf
                                        @method('delete')
                                        <a href="/subject/{{ $subject->id }}/edit" class="badge btn bg-success">Edit</a>
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
