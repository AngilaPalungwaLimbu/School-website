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
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Facultu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($subjects as $subject)
                            <tbody>
                                <tr>
                                    <td>{{ $subject->name }}</td>
                                    <td>{{ $subject->faculty->name }}</td>
                                    <th>
                                        <form action="/subject/{{ $subject->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="/subject/{{ $subject->id }}/edit"
                                                class="btn badge bg-primary">Edit</a>
                                            <button type="submit" class="btn badge bg-danger">Delete</button>

                                        </form>

                                    </th>
                                </tr>
                            </tbody>

                            @endforeach
                    </table>
                @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
