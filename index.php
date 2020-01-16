<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>

    <title>Recherche par adresse</title>

</head>

<body onload="initialize(48.85181,2.34798,4);">


    <header>
        <!--ZONE BOUTON-->
        <div class="container container-modify zone-bouton">
            <!--btn-modify-->
            <button id="sidebarCollapse" class="btn btn-primary btn-modify">

                <!--fa-modify-->
                <i class="fa fa-bars fa-modify"></i>

            </button>
        </div>

        <!--ZONE LOGO-->
        <div class="zone-logo">
            <h1><a href="#" class="logo">BIKYMAP</a></h1>
        </div>

        <!--ZONE CONNEXION-->
        <div class="zone-connexion">
            <div class="gauche">
                <a href="#"><span class="fa fa-user-circle"></span></a>
            </div>
        </div>
    </header>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="active">
            <ul class="list-unstyled components">
                <li id="dropdown-itineraire" class="active">
                    <a class="dropdown-toggle collapse" href="#"><span class="fa"><i class="fas fa-route"></i></span>
                        Itinéraire</a>
                </li>

                <!--ZONE RECHERCHE ITINERAIRE-->
                <div id="dropdown-iti-content" class="iti-content">
                    <form action="index.php" method="post">
                        <div>
                            <input id="adresse_dep" class="effect-1" type="text" placeholder="adresse de départ">
                            <span class="focus-border"></span>

                        </div>

                        <div>
                            <input id="adresse_dest" class="effect-1" type="text" placeholder="adresse de destination">
                            <span class="focus-border"></span>
                        </div>

                        <div class="zone-submit">
                            <button class="button-submit" type="submit">Rechercher mon itinéraire</button>
                        </div>
                    </form>
                </div>

                <li>
                    <a href="#"><span class="far fa-star"></span> Favoris</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-cogs"></span> Paramètres</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-paper-plane"></span> Contacts</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content" class="">
            <div id="mapid"></div>
        </div>
    </div>

    <script src="drop-menu.js"></script>

    <script src="https://kit.fontawesome.com/bf0e245687.js" crossorigin="anonymous"></script>

    <!--affichage de la carte-->
    <script type="text/javascript">
        function initialize() {
            lat = 48.85181;
            lon = 2.34798;
            zoom = 12;
            var map = L.map('mapid', {
                zoomControl: false
            }).setView([lat, lon], zoom); // LIGNE 14
            new L.Control.Zoom({
                position: 'bottomright'
            }).addTo(map);

            var osmLayer = L.tileLayer('http://{s}.tile.openstreetmap.se/hydda/full/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors',
                maxZoom: 19
            });
            map.options.minZoom = 12;
            map.options.maxZoom = 18;
            map.addLayer(osmLayer);
            
        }

    </script>

    <style>.leaflet-bottom .leaflet-control {margin-bottom: 30px;}</style>

</body>

</html>