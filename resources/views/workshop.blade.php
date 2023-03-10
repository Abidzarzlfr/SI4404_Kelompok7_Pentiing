@extends('layout.main')
@section('title')
    Pentiing | Workshop
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5 mb-1">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 text-white">Workshop</h1>
                    <a href="">Beranda</a>
                    <i class="far text-primary px-2"></i>
                    <a href="">Workshop</a>
                </div>
            </div>
     </div>
        <!-- Page Header End -->
    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Welcome To <span class="text-primary">Workshop</span></h1>
                <h4 class="text-primary mb-4">Persiapan sebelum menjadi pasangan suami istri dan menjadi orang tua</h4>
                <p class="mb-4">Pentiing akan membantu calon pasangan suami istri dalam persiapa pernikahan dan membantu
                    orang tua dalam mengasuh anak. Pentiing menyediakan banyak modul dan artikel </p>
                @auth
                @else
                    <a href="" class="btn btn-primary py-md-3 px-md-5 rounded-pill">Login</a>
                @endauth


            </div>
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-warning rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Konsultasi Secara Langsung</h3>
                            <p class="mb-0">
                                Pentiing menyediakan sesi konsultasi dengan para ahli. Konsultasi akan memberikan banyak
                                masukan dan juga akan memberi banyak ilmu yang akan sangat berguna untuk para calon suami
                                istri maupun orang tua
                            </p>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-warning rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-book fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Modul Terlengkap</h3>
                            <p class="mb-0">
                                Pentiing juga menyediakan berbagai modul yang berisikan ajaran-ajaran yang pastinya
                                terlengkap dan terbaik. Modul juga dilengkapi dengan berbagai ilustrasi dan langkah-langkah
                                yang harus diambil dalam menjalankan rumah tangga.

                            </p>
                        </div>
                    </div>
                    <div class="d-flex text-white">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-warning rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Komunitas Kami</h3>
                            <p class="mb-0">
                                Komunitas juga akan menjadi bagian dari keuntungan yang akan dimiliki oleh para member
                                Pentiing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <!-- Team Start -->
    <div class="container bootdey mt-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h1 class="title mb-4">Workshop</h1>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="team text-center rounded p-3 py-4">
                    <img src="img/dokter1.png" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                    <div class="content mt-3">
                        <h4 class="title mb-0">Prof. Dr. Asep</h4>
                        <small class="text-muted">Psikolog</small>
                        <ul class="list-unstyled mt-3 social-icon social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Google +"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                        </ul><!--end icon-->
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="team text-center rounded p-3 py-4">
                    <img src="img/dokter2.png" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                    <div class="content mt-3">
                        <h4 class="title mb-0">Prof. Dr. Titin</h4>
                        <small class="text-muted">Anak</small>
                        <ul class="list-unstyled mt-3 social-icon social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Google +"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                        </ul><!--end icon-->
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="team text-center rounded p-3 py-4">
                    <img src="img/dokter3.png" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                    <div class="content mt-3">
                        <h4 class="title mb-0">Prof. Dr. Sinta</h4>
                        <small class="text-muted">Psikolog</small>
                        <ul class="list-unstyled mt-3 social-icon social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Google +"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                        </ul><!--end icon-->
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="team text-center rounded p-3 py-4">
                    <img src="img/dokter4.png" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                    <div class="content mt-3">
                        <h4 class="title mb-0">Prof. Dr. Santoso</h4>
                        <small class="text-muted">Kandungan</small>
                        <ul class="list-unstyled mt-3 social-icon social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Google +"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                        </ul><!--end icon-->
                        </br>
                        </br>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>
    <!-- Team End -->
@endsection
