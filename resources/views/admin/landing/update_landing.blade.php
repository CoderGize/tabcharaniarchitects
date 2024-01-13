<button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="bi bi-pencil"></i>
    Update
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Landing Page
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/update_landing/' . $landing->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Image
                        </label>
                        <div class="d-flex flex-column align-items">
                            <img src="/landing/{{ $landing->img }}" width="100px" class="mb-2" alt="Image 1">
                            <input type="file" name="img" class="form-control" id="exampleFormControlFile1">
                        </div>
                    </div>




                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Text
                        </label>
                        <textarea name="text" class="form-control" rows="4" cols="50">{{ $landing->text }}</textarea>
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
