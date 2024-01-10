<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body class="g-sidenav-show bg-gray-100">

    @include('admin.sidebar')
    <main class="main-content position-relative border-radius-lg">
        <!-- Navbar -->
        @include('admin.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>ALL Galleries</h6>
                        </div>

                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Image
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Title
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Text
                                            </th>
                                            <th class="text-secondary opacity-7"></th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($gallery as $gallery)
                                            <tr class="text-center">
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        <img src="/gallery/{{ $gallery->img }}" async class="d-block m-auto" width="50px" alt="">
                                                    </p>
                                                </td>


                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $portfolio->title }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $portfolio->text }}
                                                    </p>
                                                </td>

                                                <td class="align-middle">
                                                    <a href="{{ url('admin/delete_gallery', $gallery->id) }}" class="text-danger font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit gallery"
                                                        onclick="return confirm('Are you sure you want to delete this gallery?')">
                                                        Delete
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                        {{-- @if ($gallery->isEmpty())
                                            <tr>
                                                <td colspan="5">
                                                    <p class="text-xs text-center text-danger font-weight-bold mb-0">
                                                        No Data!
                                                    </p>
                                                </td>
                                            </tr>
                                        @endif --}}
                                    </tbody>
                                </table>
                                {{-- {{ $gallery->render('admin.pagination') }} --}}
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
