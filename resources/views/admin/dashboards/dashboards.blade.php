@extends('layouts.admin')

@section('judul', 'Sistem Informasi Kelautan')
    
@section('isi')


<script src="{{asset('vendor2/jquery/jquery.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSihN8UcE1z-zpnwc2BAPQMqJjA1fW7xE"></script>
<script type="text/javascript" src="{{asset('vendor2/jquery/jquery.googlemap.js')}}"></script>

<div id="map" style="width: 1000px; height: 600px;"></div>
<script type="text/javascript">
  $(function() {
    $("#map").googleMap({
      zoom: 5, // Initial zoom level (optional)
      coords: [1.29145,128.0346680,], // Map center (optional)
      type: "ROADMAP" // Map type (optional)
    });
  })
</script>



@endsection