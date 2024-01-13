<button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="bi bi-pencil"></i>
    Update
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update About Page
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/update_about/' . $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                           First Image
                        </label>
                        <div class="d-flex flex-column align-items">
                            <img src="/about/{{ $about->img1 }}" width="100px" class="mb-2" alt="Image 1">
                            <input type="file" name="img1" class="form-control" id="exampleFormControlFile1">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                           Second Image
                        </label>
                        <div class="d-flex flex-column align-items">
                            <img src="/about/{{ $about->img2 }}" width="100px" class="mb-2" alt="Image 1">
                            <input type="file" name="img2" class="form-control" id="exampleFormControlFile1">
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">

                           First Name
                        </label>
                        <input type="text" name="name1" class="form-control" value="{{ $about->name1 }}" >
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">

                           Second Name
                        </label>
                        <input type="text" name="name2" class="form-control" value="{{ $about->name2 }}" >
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                           First Text
                        </label>
                        <textarea name="text1" class="form-control" rows="4" cols="50">{{ $about->text1 }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                           Second Text
                        </label>
                        <textarea name="text2" class="form-control" rows="4" cols="50">{{ $about->text2 }}</textarea>
                    </div>

                </div>





                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Update
                        {{-- <i class="bi bi-plus-lg"></i> --}}
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
