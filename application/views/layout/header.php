<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $title; ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">DIREKTORI UMSU</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
              
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-info text-white text-center">
            <div class="container d-flex align-items-center flex-column">
			<img class="masthead-avatar mb-5" src="<?= base_url('assets/'); ?>/logo.png" alt="" />
			<h2 class="masthead-subheading font-weight-light mb-0">Selamat Datang di</h2>
			<br>
                <h1 class="masthead-heading text-uppercase mb-0">DIREKTORI UMSU</h1>
			<br>
			
			</div>
			<form>
			<div class="container">
			<div class="control-group">
				<div class="row">
					<div class="col-xl-5">
						<input type="text" class="form-control form-control-lg mb-2" id="keyword" placeholder="Kata Kunci" name="keyword" required>
					</div>
			
				
					<div class="col-xl-5">
					<select class="form-control form-control-lg mb-2" id="kategori" name="kategori" required>
				     	<option selected disabled value="">Silahkan Pilih</option>
						<option value="dosen">Dosen</option>
						<option value="tendik">Tendik</option>
						<option value="mahasiswa">Mahasiswa</option>
					</select>
					</div>

					<div class="col-xl-2">
						<button class="btn btn-danger form-control-lg" type="submit"><i class="fa fa-search"></i> Search</button>
					</div>
				</div>
				</div>
			</div>
		</form>
        </header>
