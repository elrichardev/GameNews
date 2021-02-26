/* Gestión del carrusel (img ID: album) */
var currentImage = 0;
var numeroImagenes = 3;

// Temporizador cíclico 5 seg.
var timer = setInterval(changeImage, 5000);

function changeImage() {
	// Tenemos X imagenes, de la 0 a la X-1
	currentImage = (currentImage + 1) % numeroImagenes;
	
	document.getElementById("album").src =
	"img/"+currentImage + ".jpg";
}