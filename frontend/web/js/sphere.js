$(document).ready(function(){ 
	var container = document.getElementById('containerp');
	var number = $(container).attr('class');
	var sphere = PhotoSphereViewer({
		container: document.getElementById('containerp'),
		panorama:'/images/spheres/test-'+number+'.jpg',
		//panorama:'/images/spheres/01.jpg',
		//panorama:'http://tassedecafe.org/wp-content/uploads/2013/01/parc-saint-pierre-amiens.jpg',
		autoload: false,
		navbar: [],
	});
	sphere.load();

});