<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Enregistrer un véhicule</title>
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
                            <h4 class="page-title pull-left">Nouveau Véhicule</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="{{ route ('vehicule')}}">Véhicule</a></li>
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
                                        <h4 class="header-title">Enregistrer un Véhicule</h4>
                                        <label>Tous les champs possédant l'étoile rouge(<span style="color: red">*</span>) sont obligatoires</label>
                                        <form method="POST" action="{{ route('vehicule.store') }}">
                                        @csrf
                                            <div class="form-row align-items-center">
                                                <div class="col-md-6 my-3">
                                                    <label>Noms du Propriétaire<span style="color: red">*</span></label>
                                                    <select name="proprietaire_id" id="" class="form-control p-2 @error('proprietaire_id') is-invalid @enderror">
                                                        <option value="">Sélectionner le nom du propriétaire</option>
                                                        @foreach($noms as $nom)
                                                            <option value="{{$nom->id}}">{{$nom->nom_prop}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('proprietaire_id')
                                                    <div class="invalid-feedback">
                                                        Le nom est requis
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 my-3">
                                                    <label>Marque<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control @error('marque') is-invalid @enderror" name="marque" placeholder="Entrer la marque du véhicule">
                                                    @error('marque')
                                                    <div class="invalid-feedback">
                                                        La marque est requise
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 my-3">
                                                    <label>Immatriculation<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule" placeholder="Entrer l'immatriculation du véhicule">
                                                    @error('matricule')
                                                    <div class="invalid-feedback">
                                                        L'immatriculation est requise
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 my-3">
                                                    <label>Type de véhicule<span style="color: red">*</span></label>
                                                    <input type="text" class="form-control @error('type_veh') is-invalid @enderror" name="type_veh" placeholder="Entrer le type de véhicule">
                                                    @error('type_veh')
                                                    <div class="invalid-feedback">
                                                        Le type de véhicule est requis
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 my-3">
                                                    <label>Capacité du réservoir (en Litres)<span style="color: red">*</span></label>
                                                    <input type="number" class="form-control @error('litre_huile') is-invalid @enderror" name="litre_huile" placeholder="Entrer la capacité du réservoir du véhicule">
                                                    @error('litre_huile')
                                                    <div class="invalid-feedback">
                                                        La capacité est requise
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 my-3">
                                                    <label>Type de carburant<span style="color: red">*</span></label>
                                                    <select name="nature_carbur" id="" class="form-control p-2 @error('nature_carbur') is-invalid @enderror">
                                                        <option value="">Sélectionner la nature du Carburant</option>
                                                        <option value="0">Gazole</option>
                                                        <option value="1">Super</option>
                                                    </select>
                                                    @error('nature_carbur')
                                                    <div class="invalid-feedback">
                                                        Le type de carburant est requis
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <input type="hidden" name="acteur_id" value="{{ Auth::user()->id}}">
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
