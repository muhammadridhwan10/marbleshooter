


<!-- jumbotron -->

<div class="jumbotron jumbotron-fluid index-jumbotron rellax" data-rellax-speed="-2">
    <div class="container">
        <h1 class="display-2 mt-5 header-jumbotron" data-aos="fade-right" data-aos-duration="1500">Welcome!
        </h1>
        <p class="lead text-jumbotron" data-aos="fade-right" data-aos-duration="1700">on the marble shooter website<br>
        Shoot and explode the bubbles and reach the sky! Pop all<br>
        the bubbles and beat the incredible challenges of Marble Shooter<br>
        game! Fly on a cloud in this amazing puzzle game,<br>
        explore dreamy puzzles, relax and enjoy in the skies of bubbles.
        </p>
        <a href="<?= base_url('games') ?>"><button class="btn btn-colour btn-outline-light" data-aos="fade-right" data-aos-duration="1500">Play Now!</button></a>
    </div>
</div>
<!-- end jumbotron -->


<!-- container -->
<div class="container">
    <!-- info panel -->
    <div class="row justify-content-center">
        <div class="col-10 info-panel">
            <div class="row">
                <div class="col-md">
                    <img src="<?= base_url('assets/'); ?>img/slot-machine.png" alt="" srcset="" class="float-left">
                    <h4>Fun Games!</h4>
                    <p>make your day fun!</p>
                </div>
                <div class="col-md">
                    <img src="<?= base_url('assets/'); ?>img/nintendo-switch.png" alt="" srcset="" class="float-left">
                    <h4>Enjoy!</h4>
                    <p>relax and enjoy in the skies of bubbles!</p>
                </div>
                <div class="col-md">
                    <img src="<?= base_url('assets/'); ?>img/gamepad.png" alt="" srcset="" class="float-left">
                    <h4>Easy!</h4>
                    <p>easy to play the game!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end info panel -->

<!-- title -->
<div class="row">
    <div class="col-md-10 container mt-5">
        <h2 class="title text-center" data-aos="fade-right" data-aos-duration="1500">Explore Game & Play Now!
        </h2>
    </div>
</div>
<br>
<!-- title -->
<div class="row">
    <div class="owl-carousel mt-3 container owl-theme">
        <div class="b-game-card item" data-aos="fade-up" data-aos-duration="1200">
            <div class="b-game-card__cover" style="background-image: url(assets/img/marbleshooter1.jpg);"></div>
        </div>
        <div class="b-game-card item" data-aos="fade-down" data-aos-duration="1300">
            <div class="b-game-card__cover" style="background-image: url(assets/img/marbleshooter2.jpg);"></div>
        </div>
        <div class="b-game-card item" data-aos="fade-up" data-aos-duration="1400">
            <div class="b-game-card__cover" style="background-image: url(assets/img/marbleshooter3.jpg);"></div>
        </div>
        <div class="b-game-card item" data-aos="fade-down" data-aos-duration="1500">
            <div class="b-game-card__cover" style="background-image: url(assets/img/marbleshooter4.jpg);"></div>
        </div>
        <div class="b-game-card item" data-aos="fade-up" data-aos-duration="1600">
            <div class="b-game-card__cover" style="background-image: url(assets/img/marbleshooter5.jpg);"></div>
        </div>
    </div>
</div>
<br>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title font-weight-bold" id="exampleModalCenterTitle">Login ke gameina sekarang.</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?= base_url('assets/'); ?>img/_____2x-removebg-preview.png" height="300px;" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6">
                            <form action="<?= base_url('welcome/index') ?>" method="post">
                                <div class="form-group">
                                    <label class="label-font" for="exampleFormControlInput1">
                                        Email.</label>
                                    <input type="text" value="<?= set_value('email'); ?>" class="form-control" name="email" id="email" placeholder="Masukan email mu disini ..">
                                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="label-font" for="exampleFormControlInput1">Password.</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukan password mu disini ..">
                                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Ingat saya.
                                    </label>
                                </div>
                                <p class="terms">Dengan login anda menyetujui <i>privasi dan persyaratan ketentuan
                                        hukum kami </i> .
                                    belum punya akun? daftar <a href="<?= base_url('welcome/registration') ?>">
                                        disini.</a>
                                </p>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>

<script>
    var rellax = new Rellax('.rellax');
</script>