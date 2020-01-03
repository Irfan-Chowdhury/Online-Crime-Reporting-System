<!Doctype html>
<html lang="en">
    <head>
        <!-- Header Codes -->
        @include('backend.includes.header')
    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

                <!--left-sidebar -->
                @include('backend.includes.sidebar_left')

                    <!-- Content Wrapper -->
                    <div id="content-wrapper" class="d-flex flex-column">

                            <!-- Main Content -->
                            <div id="content">
                                
                                    <!-- Topbar -->
                                    @include('backend.includes.navbar')

                                    <!-- Begin Page Content -->
	                                <div class="container-fluid">

{{-- ============================================================================================================ --}}

                                            <!-- All Page Body Content -->
                                            @yield('allPageContent')

{{-- ============================================================================================================ --}}
                                    </div>
                                    <!-- /.container-fluid -->

                            </div>
                            <!-- End of Main Content -->


                            <!-- Footer -->
                            @include('backend.includes.footer')

                    </div>
                    <!-- End of Content Wrapper -->    

        </div>
        <!-- End of Page Wrapper -->




        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


        <!-- Logout Modal-->
        @include('backend.includes.logout_modal')


        <!-- All Script File-->
        @include('backend.includes.script')


        {{-- <div class="preloader loader" style="display: block; background:#f2f2f2;"> <img src="image/loader.gif"  alt="#"/></div>   --}}

    </body>
</html>