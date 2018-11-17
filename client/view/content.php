<?php

include '../../../server/proses/get_tanah.php';

?>


<!-- Script JS Menu-->




<div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Lakalantas</a>
                </li>
                <li class="breadcrumb-item active">Selamat datang</li>
              </ol>



              <div class="row">
                <div class="col-sm-8">
                    <div class="panel-body">
                        <div id="map" style="width:100%;height:400px; z-index:60"></div>
                    </div>
                </div>
              </div>
          </div>

    <script>
        function initMap() //google maps
        {
            map = new google.maps.Map(document.getElementById('map'),
                {
                    zoom: 13,
                    center: new google.maps.LatLng(-0.9140897,100.4565161),
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1TwYksj1uQg1V_5yPUZqwqYYtUIvidrY&callback=initMap"
            async defer></script>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
                <footer class="sticky-footer">
                  <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                      <span>Copyright © Your Website 2018</span>
                    </div>
                  </div>
                </footer>
        </div>

<!-- /.content-wrapper -->
