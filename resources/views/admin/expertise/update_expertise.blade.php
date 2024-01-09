<a type="button"   class="text-primary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $data->id }}">

    Edit
    <i class="bi bi-pencil"></i>

</a>

<div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1"
    aria-labelledby="exampleModal{{ $data->id }}Label{{ $data->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal{{ $data->id }}Label{{ $data->id }}">
                    Update Expertise
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/update_expertise/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Image
                        </label>
                        <div class="d-flex flex-column align-items">
                            <img src="/expertise/{{ $data->img }}" width="100px" class="mb-2" alt="Image 1">
                            <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>



                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">

                            Title
                        </label>
                        <input type="text" name="title" class="form-control" required value="{{ $data->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Text Large
                        </label>
                        <textarea name="text_lg" class="form-control" rows="4" cols="50">{{ $data->text_lg }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Text Small
                        </label>
                        <textarea name="text_sm" class="form-control" rows="4" cols="50">{{ $data->text_sm }}</textarea>
                    </div>



                </div>


                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Update
                        <i class="bi bi-pencil"></i>
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
