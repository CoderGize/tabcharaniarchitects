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
                    Update portfolio
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/update_portfolio/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">




                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">

                            Title
                        </label>
                        <input type="text" name="title" class="form-control" required value="{{ $data->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Text
                        </label>
                        <textarea name="text" class="form-control" rows="4" cols="50">{{ $data->text }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="sectionType" class="form-label">
                            Section Type
                        </label>
                        <select id="sectionType" name="section_id" class="form-select" required>
                            <option value="0" {{ $data->section_id == 0 ? 'selected' : '' }} disabled>This field is required</option>
                            <option value="1" {{ $data->section_id == 1 ? 'selected' : '' }}>Form Section</option>
                            <option value="2" {{ $data->section_id == 2 ? 'selected' : '' }}>Space Section</option>
                            <option value="3" {{ $data->section_id == 3 ? 'selected' : '' }}>Mobility</option>
                        </select>
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
