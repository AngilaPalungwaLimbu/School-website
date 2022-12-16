<x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card-header mb-3 ">
                    <span class="fs-4 fw-bold">General Setting</span>
                    @if (empty($faculty))
                        <a href="/faculty/create" class="float-end  btn btn-info">Add faculty Detail</a>
                    @endif
                </div>
                <div class="card-body">
                    @if (!empty($faculties))
                        @foreach ($faculties as $faculty)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>{{ $faculty->name }}</td>
                                    <th>
                                        <form action="/faculty/{{ $faculty->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="/faculty/{{ $faculty->id }}/edit"
                                                class="btn badge bg-primary">Edit</a>
                                            <button type="submit" class="btn badge bg-danger">Delete</button>

                                        </form>

                                    </th>
                                </tr>
                            </tbody>

                        </table>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
