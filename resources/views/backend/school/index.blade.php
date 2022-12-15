
<x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header mb-3 ">
                    <span class="fs-4 fw-bold">General Setting</span>
                    @if (empty($school))
                        <a href="/school/create" class="float-end  btn btn-info">Add School Detail</a>
                    @endif
                </div>
                <div class="card-body">
                    @if (!empty($school))
                    <div class="container mb-2">
                        <div class="col-md-1 px-0">
                            <img src="{{ $school->logo }}" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>{{ $school->name }}</td>
                                    <td>{{ $school->address }}</td>
                                    <td>{{ $school->contact }}</td>
                                    <td>{{ $school->email }}</td>
                                    <th>
                                        <form action="/school/{{ $school->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="/school/{{ $school->id }}/edit" class="btn badge bg-primary">Edit</a>
                                            <button type="submit" class="btn badge bg-danger">Delete</button>

                                        </form>

                                    </th>
                                </tr>
                            </tbody>

                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

