<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/57635d64f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>css/styling.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="<?=base_url('assets/')?>sweetalert/package/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="<?=base_url('assets/')?>sweetalert/package/dist/sweetalert2.min.css">
    <link href=" https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    <title>GameINA - Web Game Portal Indonesia</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light nav-colour" id="nav">
        <div class="container">
            <a class="navbar-brand text-white" href="<?=base_url('welcome')?>">Marble Shooter</a>
            <script src="<?=base_url('assets/');?>js/myscript.js"></script>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

    </nav>
    <!-- end navbar -->

    <div class="container">
        <div class="row bg-registration mt-5">
            <div class="col-md-6 mx-auto img-fluid">
                <img src="<?=base_url('assets/')?>img/hayabusa.png" class="mx-auto" alt="" srcset="">
            </div>
            <div class="col-md-6 mx-auto my-auto mt-5">
                <form action="<?=base_url('welcome/registration')?>" method="post">
                    <div class="form-group">
                        <label for="nama_lengkap" class="label-font-register">Nama lengkap.</label>

                        <input type="text" class="form-control effect-9" name="nama" id="nama_lengkap"
                            value="<?=set_value('nama');?>">
                        <?=form_error('nama', '<small class="text-danger">', '</small>');?>
                    </div>
                    <div class="form-group">
                        <label for="email" class="label-font-register">Email</label>
                        <input type="text" class="form-control" name="email" id="email"
                            value="<?=set_value('email');?>">
                        <?=form_error('email', '<small class="text-danger">', '</small>');?>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password" class="label-font-register">Password.</label>
                            <input type="password" class="form-control" name="password" id="password">
                            <?=form_error('password', '<small class="text-danger">', '</small>');?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="retype_password" class="label-font-register">Retype password.</label>
                            <input type="password" class="form-control" name="retype_password" id="retype_password">
                            <?=form_error('retype_password', '<small class="text-danger">', '</small>');?>
                        </div>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input checkbox" type="checkbox" id="defaultCheck1"
                            onchange="document.getElementById('btnsubmit').disabled = !this.checked;">
                        <label class=" form-check-label" for="defaultCheck1">
                            Saya setuju dan ingin melanjutkan.
                        </label>
                    </div>
                    <p class="terms">Dengan daftar anda menyetujui <i>privasi dan persyaratan ketentuan
                            hukum kami </i> .
                        baca selengkapnya <a href="#"> disini.</a></p>
                    <button type="submit" name="submit" id="btnsubmit" disabled
                        class="btn btn-block btn-modal btn-submit">Daftar
                        Sekarang!</button>
                </form>
            </div>
        </div>
    </div>

    <script>
    $('.tab1_btn').prop('disabled', !$('.tab1_chk:checked')
        .length); //initially disable/enable button based on checked length
    $('input[type=checkbox]').click(function() {
        if ($('.tab1_chk:checkbox:checked').length > 0) {
            $('.btn-submit').prop('disabled', false);
        } else {
            $('.btn-submit').prop('disabled', true);
        }
    });
    </script>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalCenterTitle">Login ke gameina sekarang.</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?=base_url('assets/');?>img/pablo-sign-in.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-6">
                                <form>
                                    <div class="form-group">
                                        <label class="label-font" for="exampleFormControlInput1">
                                            Email.</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Masukan username mu disini ..">
                                    </div>
                                    <div class="form-group">
                                        <label class="label-font" for="exampleFormControlInput1">Password.</label>
                                        <input type="password" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Masukan password mu disini ..">
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Ingat saya.
                                        </label>
                                    </div>
                                    <p class="terms">Dengan login anda menyetujui <i>privasi dan persyaratan ketentuan
                                            hukum kami </i> .
                                        belum punya akun? daftar <a href="<?=base_url('welcome/registration')?>">
                                            disini.</a></p>
                                    <button class="btn btn-modal btn-block">Login Sekarang!</button>
                                </form>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->