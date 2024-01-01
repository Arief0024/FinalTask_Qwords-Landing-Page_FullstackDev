<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Qword | Landing Page</title>
{{-- posisi style bootstrap --}}
    @include('layouts.style')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
{{-- posisi navbar --}}
                @include('layouts.navbar')
{{-- posisi section main --}}
                @include('layouts.section')

                @yield('content')

            </div>
            <!-- End of Main Content -->
{{-- posisi footer --}}
            @include('layouts.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

{{-- posisi script js --}}
    @include('layouts.script')
</body>

</html>
