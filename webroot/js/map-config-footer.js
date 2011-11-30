var map2;
		  function initialize() {
			var myOptions = {
			  zoom: 14,
			  center: new google.maps.LatLng(33.788878185413516, -117.89936710646816),
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			map2 = new google.maps.Map(document.getElementById('map_canvas-footer'),
				myOptions);
				
		var marker = new google.maps.Marker({
		  position: new google.maps.LatLng(33.788878185413516, -117.89936710646816), 
		  map: map2, 
		  title:"Our Church!"
			});   
		  }
	
		  google.maps.event.addDomListener(window, 'load', initialize);

