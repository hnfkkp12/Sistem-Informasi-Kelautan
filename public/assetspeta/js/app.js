//Map Center
var map = L.map('map').setView([-7.9,110.45],9);

//Basemap
var basemap0 = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
   maxZoom: 20,
   subdomains:['mt0','mt1','mt2','mt3'],
   attribution: 'Google Streets'
});
var basemap1 = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
   maxZoom: 20,
   subdomains:['mt0','mt1','mt2','mt3'],
   attribution: 'Google Satellite'
}); 
var basemap2 = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
   maxZoom: 20,
   subdomains:['mt0','mt1','mt2','mt3'],
   attribution: 'Google Terrain'
}); 

basemap2.addTo(map);  //Basemap aktif pertama ketika peta ditampilkan

//Layer Admin Kab DIY
var adminkab = L.geoJson(null, {
		style: function (feature) {
			return {
				fillColor: "red",  	//warna polygon
				fillOpacity: 0.7,  	//transparansi polygon
				color: "black",		//warna garis tepi polygon
				weight: 1,			//tebal garis tepi polygon
				opacity: 1			//transparansi garis tepi polygon
			};
		},
		onEachFeature: function (feature, layer) {
		layer.on({
		  mouseover: function (e) { //ketika kursor mouse berada pada setiap polygon
			 var layer = e.target;
			 layer.setStyle({
				fillColor: "#00ffff",  	//warna polygon
				fillOpacity: 0.7,  	//transparansi polygon
				color: "black",		//warna garis tepi polygon
				weight: 1,			//tebal garis tepi polygon
				opacity: 1			//transparansi garis tepi polygon
			 });
		  },
		  mouseout: function (e) {	//ketika kursor mouse keluar dari polygon
			 adminkab.resetStyle(e.target);		//kembali ke fungsi style awal
		  }
		});
		if (feature.properties) {	//Popup dengan modal
		  //isi dari popup
		  var content = "<table class='table table-striped table-bordered table-condensed'>" +
			"<tr><th>Kabupaten</th><td>" + feature.properties.KABUPATEN + "</td></tr>" +
			"<tr><th>Provinsi</th><td>" + "D.I. Yogyakarta" + "</td></tr>" +
			"<tr><th>Luas</th><td>" + feature.properties.LUAS_KM2 + " Km<sup>2</sup></td></tr>" +
			"</table>";
		  
		  layer.on({
			click: function (e) {	//ketika setiap polygon di klik
			  $("#feature-title").html(feature.properties.KABUPATEN);	//Judul pada modal
			  $("#feature-info").html(content);		//Isi
			  $("#featureModal").modal("show");		//Modal ditampilkan

			}
		  });
		}
	} 
});
$.getJSON("data/admin_kabupaten_diy_polygon.geojson", function (data) {	//memanggil data geojson
   adminkab.addData(data);
   map.addLayer(adminkab);
}); 

/* Attribution control */
map.attributionControl.addAttribution('<a href="http://www.sinaugis.com" target="_blank">SinauGIS</a>');

//Control Layer
var baseMaps = {	//Pilihan basemap yang digunakan
	'Google Streets': basemap0,
	'Google Satellite': basemap1,
	'Google Terrain': basemap2
};
var Layers = {		//Pilihan layer yang ditampilkan
	'Batas Kabupaten': adminkab
};
var layerControl = L.control.layers(baseMaps, Layers, {collapsed:false});
layerControl.addTo(map);

/* Zoom to layer */
$(document).one("ajaxStop", function () {
  /* Fit map to layer bounds */
  map.fitBounds(adminkab.getBounds());
});

/* ScaleBar */
L.control.betterscale({
	metric: true,
	imperial: false
}).addTo(map);

/* Logo watermark */
L.Control.Watermark = L.Control.extend({
	onAdd: function(map) {
		var img = L.DomUtil.create('img');
		img.src = 'assets/img/sinaugis.png';	//Logo gambar yang digunakan
		img.style.width = '50px';		//Ukuran logo
			return img;
	},
	onRemove: function(map) {
		// Nothing to do here
	}
});

L.control.watermark = function(opts) {
	return new L.Control.Watermark(opts);
}

L.control.watermark({ position: 'bottomleft' }).addTo(map);		//Letak logo ditampilkan