$(document).ready(function(){ 
	var containerfeature = document.getElementById('containerfeature');
	var feature = $(containerfeature).attr('class');
	var spherefeature = PhotoSphereViewer({
		container: document.getElementById('containerfeature'),
		panorama:'/images/spheres/'+feature+'.jpg',
		autoload: false,
		navbar: [],
	});
	spherefeature.load();
});