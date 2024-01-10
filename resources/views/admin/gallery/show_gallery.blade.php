<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body class="g-sidenav-show   bg-gray-100">

    @include('admin.sidebar')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('admin.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Gallery Section</h6>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-center">

                                    @include('admin.gallery.add_gallery')

                                </div>
                            </div>
                        </div>

                        <div class="card-body px-0 pt-0 mt-4 pb-2">
                            <div class="row text-center">
                                <div class="col-12">
                                    <label for="image">Image</label>

                                    <div>
                                        @if ($gallery && $gallery->img != null)
                                        <a href="{{ route('show_all_gallery', ['sectionId' => $portfolio->section_id]) }}">
                                                <img src="/gallery/{{ $gallery->img }}" class="w-25 m-auto" alt="Gallery Image">
                                            </a>
                                        @else
                                            <p class="text-danger">No Data</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>





                            <div class="row text-center my-3">
                                <div class="col-6">
                                    <label for="">
                                        Title
                                    </label>
                                    <p>
                                        {{ $portfolio->title }}
                                    </p>
                                </div>

                                <div class="col-6">
                                    <label for="">
                                        Text
                                    </label>
                                    <p>
                                        {{ $portfolio->text }}
                                    </p>
                                </div>

                            </div>





                        </div>
                    </div>
                </div>
            </div>
            @include('admin.footer')
        </div>
    </main>

    @include('admin.script')

</body>

</html>
