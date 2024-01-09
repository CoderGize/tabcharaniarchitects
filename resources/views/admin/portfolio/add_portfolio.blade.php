<button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="me-2 fs-6 bi bi-plus-lg"></i>
    Add Portfolio
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Portfolio
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/add_portfolio') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">



                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Title
                        </label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Text
                        </label>
                        <textarea name="text" class="form-control" rows="4" cols="50"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="sectionType" class="form-label">
                            Section Type
                        </label>
                        <select id="sectionType" name="section_id" class="form-select" required>
                            <option value="" disabled selected>This field is required</option>
                            <option value="1">Form Section</option>
                            <option value="2">Space Section</option>
                            <option value="3">Mobility</option>
                        </select>

                    </div>



                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Add
                        <i class="bi bi-plus-lg"></i>
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
