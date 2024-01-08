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
                            <h6>Landing Section</h6>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-center">

                                    @include('admin.landing.update_landing')

                                </div>
                            </div>
                        </div>

                        <div class="card-body px-0 pt-0 mt-4 pb-2">
                            <div class="row text-center">
                                <div class="col-12">
                                    <label for="">
                                        Image
                                        {{-- <span class="text-danger fw-light text-sm">
                                            **1900px Width & 1268px Height**
                                        </span> --}}
                                    </label>

                                    <div class="">
                                        @if ($landing->img != null)
                                            <img src="/landing/{{ $landing->img }}" class="w-25 m-auto" alt="">
                                        @else
                                            <p class="text-danger">No Data</p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row text-center my-3">
                                <div class="col-12">
                                    <label for="">
                                        Text
                                    </label>
                                    <p>
                                        {{ $landing->text }}
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
