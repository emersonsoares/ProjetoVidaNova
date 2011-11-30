	function initialize() {
		var myLatlng = new google.maps.LatLng(33.788878185413516, -117.89936710646816);
 
		var myOptions = {
				zoom: 14,
				center: myLatlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				streetViewControl: true
			}
		var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

		
		var marker = new google.maps.Marker({
      position: myLatlng, 
      map: map, 
      title:"Our Church!"
  		});   

			panoramaOptions = {
			addressControlOptions: {
				style: {backgroundColor: '#000', color: '#fff'}
			},
			position: myLatlng,
			pov: {
				heading: 180,
				pitch: +11,
				zoom: 1			}
		};
		panorama = new  google.maps.StreetViewPanorama(document.getElementById("pano"), panoramaOptions);
		map.setStreetView(panorama);
			}