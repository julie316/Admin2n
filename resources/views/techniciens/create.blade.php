<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Enregistrer un technicien</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logo_login.jpg')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        @include('layouts.sidebar')
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            @include('layouts.header')
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix m-3">
                            <h4 class="page-title pull-left">Nouveau Technicien</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="{{ route ('technicien')}}">Technicien</a></li>
                                <li><span>Formulaire d'enregistrement</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5" style="margin-left: 220px">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Enregistrer un Technicien</h4>
                                        <label>Tous les champs possédant l'étoile rouge(<span style="color: red">*</span>) sont obligatoires</label>
                                        <form method="POST" action="{{ route('technicien.store') }}" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-row align-items-center">
                                                <div class="col-md-6 my-3">
                                                    <label>Noms et Prénoms<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control @error('nom_tech') is-invalid @enderror" name="nom_tech" placeholder="Entrer le nom et le prénom du technicien">
                                                    @error('nom_tech')
                                                    <div class="invalid-feedback">
                                                        Le nom et le prénom sont requis
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 my-3">
                                                    <label>Téléphone 1<span style="color: red">*</span></label>
                                                    <input type="number" class="form-control @error('tel_tech') is-invalid @enderror" name="tel_tech" placeholder="Entrer le numéro de téléphone">
                                                    @error('tel_tech')
                                                    <div class="invalid-feedback">
                                                        Le numéro de téléphone est requis et doit être de 9 chiffres
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 my-3">
                                                    <label>Téléphone 2</label>
                                                    <input type="number" class="form-control" name="number" placeholder="Entrer le numéro de téléphone">
                                                </div>
                                                <div class="col-md-6 my-3">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email_tech" placeholder="Entrer l'adresse email">
                                                </div>
                                                <div class="col-md-6 my-3">
                                                    <label>Profession<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control @error('metier') is-invalid @enderror" name="metier" placeholder="Entrer la profession du technicien">
                                                    @error('metier')
                                                    <div class="invalid-feedback">
                                                        Le metier est requis
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 my-3">
                                                    <label>Localisation de l'atelier<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control @error('local_atelier') is-invalid @enderror" name="local_atelier" placeholder="Entrer le local de l'atelier">
                                                    @error('local_atelier')
                                                    <div class="invalid-feedback">
                                                        La localisation de l'atelier est requise
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 my-3">
                                                    <label>Ville<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" placeholder="Entrer la ville">
                                                    @error('ville')
                                                    <div class="invalid-feedback">
                                                        La ville est requise
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 my-3">
                                                    <div class="custom-file">
                                                        <input type="file" name="cni" class="custom-file-input @error('cni') is-invalid @enderror">
                                                        <label class="custom-file-label">Choisir le fichier CNI du technicien (PDF)<span style="color: red">*</span> </label>
                                                        @error('cni')
                                                    <div class="invalid-feedback">
                                                        La CNI est requise
                                                    </div>
                                                    @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 my-3">
                                                    <div class="custom-file">
                                                        <input type="file" name="contrat" class="custom-file-input">
                                                        <label class="custom-file-label">Choisir le fichier Contrat du technicien (PDF)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" name="save" class="btn btn-primary btn-sm mt-4 pr-4 pl-4">Enregistrer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- basic form end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>Copyright © 2N CORPORATE 2021. Tous les droits réservés |by<i><b> EJ</b></i>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- others plugins -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>
