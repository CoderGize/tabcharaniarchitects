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
                            <h6>About Section</h6>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-center">

                                    @include('admin.about.update_about')

                                </div>
                            </div>
                        </div>

                        <div class="card-body px-0 pt-0 mt-4 pb-2">
                            <div class="row text-center">
                                <div class="col-6">
                                    <label for="">
                                       First Image
                                        {{-- <span class="text-danger fw-light text-sm">
                                            **1900px Width & 1268px Height**
                                        </span> --}}
                                    </label>

                                    <div class="">
                                        @if ($about->img1 != null)
                                            <img src="/about/{{ $about->img1 }}" class="w-25 m-auto" alt="">
                                        @else
                                            <p class="text-danger">No Data</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label for="">
                                       Second Image
                                        {{-- <span class="text-danger fw-light text-sm">
                                            **1900px Width & 1268px Height**
                                        </span> --}}
                                    </label>

                                    <div class="">
                                        @if ($about->img2 != null)
                                            <img src="/about/{{ $about->img2 }}" class="w-25 m-auto" alt="">
                                        @else
                                            <p class="text-danger">No Data</p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row text-center my-3">
                                <div class="col-6">
                                    <label for="">
                                       First Name
                                    </label>
                                    <p>
                                        {{ $about->name1 }}
                                    </p>
                                </div>

                                <div class="col-6">
                                    <label for="">
                                       Second Name
                                    </label>
                                    <p>
                                        {{ $about->name2 }}
                                    </p>
                                </div>

                            </div>

                            <div class="row text-center my-3">
                                <div class="col-6">
                                    <label for="">
                                        text1
                                    </label>
                                    <p>
                                        {{ $about->text1 }}
                                    </p>
                                </div>

                                <div class="col-6">
                                    <label for="">
                                        text2
                                    </label>
                                    <p>
                                        {{ $about->text2 }}
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
