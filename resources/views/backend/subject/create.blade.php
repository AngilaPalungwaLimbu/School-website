<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card-header ">
                    <span class="fs-4 fw-bold">Subjects</span>
                    <a href="/subject" class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">

                    <form action="/subject" , method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="code">Code <span class="text-danger">*</span></label>
                            <input type="text" name="code" id="code" class="form-control"
                                placeholder="Enter your code" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject  <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter your  subject name">
                        </div>
                        <div class="form-group">
                            <label for="faculty_id">Faculty <span class="text-danger">*</span></label>
                            <select name="faculty_id" id="faculty_id" class="form-control form-select">
                                @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="syallbus">Syallbus <span class="text-danger">*</span></label>
                            <textarea class="summernote" name="syllabus" id="syllabus" class="form-control" placeholder="Enter your syllabus"></textarea>
                        </div>

                        <button type="submit" class="btn btn-info">Save Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
