@extends('layouts/admin')
@section('judul')
    biota terdampar
@endsection

@section('isi')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.2.0/leaflet.css">
    <link rel="stylesheet" href="assets/css/app.css">
	<link rel="stylesheet" href="assets/plugins/betterscale/L.Control.BetterScale.css" />

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon-152.png">
    <link rel="icon" sizes="196x196" href="assets/img/favicon-196.png">
    <link rel="icon" type="image/x-icon" href="assets/img/favsinaugis.png">


    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <div class="navbar-icon-container">
            <a href="#" class="navbar-icon pull-right visible-xs" id="nav-btn"><i class="fa fa-bars fa-lg white"></i></a>
          </div>
			<a class="navbar-brand" href="#">Peta Sebaran Mamalia Laut Terdampar</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			<li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" id="legend-btn"><i class="fa fa-picture-o white"></i>&nbsp;&nbsp;Legenda</a></li>
			<li class="dropdown">
              <a id="toolsDrop" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe white"></i>&nbsp;&nbsp;Tampilkan <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" id="full-extent-btn"><i class="fa fa-crosshairs"></i>&nbsp;&nbsp;D.I. Yogyakarta</a></li>
              </ul>
            </li>
			<li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" id="about-btn"><i class="fa fa-question-circle white"></i>&nbsp;&nbsp;Tentang</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div id="container">
      <div id="map"></div>
    </div>

    <div class="modal fade" id="aboutModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Tentang</h4>
          </div>
          <div class="modal-body">
            <ul class="nav nav-tabs nav-justified" id="aboutTabs">
              <li><a href="#about" data-toggle="tab"><i class="fa fa-question-circle"></i>&nbsp;Info</a></li>
              <li class="active"><a href="#contact" data-toggle="tab"><i class="fa fa-envelope"></i>&nbsp;Hubungi kami</a></li>
            </ul>
            <div class="tab-content" id="aboutTabsContent">
              <div class="tab-pane fade" id="about">
                <p>Template ini disederhanakan dari <a href="https://github.com/bmcbride/bootleaf" target="_blank">Bootleaf Template bmcbride</a></p>
              </div>
              <div class="tab-pane fade active in" id="contact">
                <table class='table table-striped table-bordered table-condensed'>
					<tr><td colspan="2" style="text-align: center"><img src="assets/img/sinaugis.png"></td></tr>
					<tr><td>Website</td><td><a href="http://www.sinaugis.com" target="_blank">www.sinaugis.com</a></td></tr>
					<tr><td>Email</td><td>sinaugis@gmail.com</td></tr>
					<tr><td>Telepon/SMS/WhatsApp</td><td>0813 2878 1680</td></tr>
					<tr><td>Facebook</td><td><a href="http://www.facebook.com/51n4ug15" target="_blank">Sinau GIS</a></td></tr>
				</table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
	
	<div class="modal fade" id="legendModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Legenda</h4>
          </div>
          <div class="modal-body">
            <p><img src="assets/legend/legend_image.png" width="30" /> Kabupaten/Kota</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="featureModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title text-primary" id="feature-title"></h4>
          </div>
          <div class="modal-body" id="feature-info"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
	
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.2.0/leaflet.js"></script>
	<script src="assets/plugins/betterscale/L.Control.BetterScale.js"></script>
	<script src="assets/js/button.js"></script>
    <script src="assets/js/app.js"></script>
  
    @endsection
