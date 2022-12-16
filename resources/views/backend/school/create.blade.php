
<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card-header ">
                    <span class="fs-4 fw-bold">General Setting</span>
                    <a href="/school" class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">

                    <form action="/school" , method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">School Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
                        </div>

                        <div class="form-group">
                            <label for="address">Address <span class="text-danger">*</span></label>
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="Enter your address">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact">Contact <span class="text-danger">*</span></label>
                                    <input type="text" name="contact" id="contact" class="form-control"
                                        placeholder="Enter your number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="Enter your email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Slogan <span class="text-danger">*</span></label>
                            <input type="text" name="slogan" id="slogan" class="form-control"
                                placeholder="Enter your slogan">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="twitter">Youtube (Optional)</label>
                                    <input type="text" name="Youtube" id="Youtube" class="form-control"
                                        placeholder="Enter your Youtube">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="instagram">Instagram (Optional) </label>
                                    <input type="text" name="instagram" id="instagram" class="form-control"
                                        placeholder="Enter your instagram">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="linkedin">Linkedin  (Optional) </label>
                                    <input type="text" name="linkedin" id="linkedin" class="form-control"
                                        placeholder="Enter your Linkedin">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="facebook">Facebook  (Optional)</label>
                                    <input type="text" name="facebook" id="facebook" class="form-control"
                                        placeholder="Enter your facebook">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="logo">Upload logo </label>
                                    <input type="file" name="logo" id="logo" class="form-control" accept="images/jpeg, images/jpg, images/png">
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
