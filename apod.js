// Récupération de l'élément div 
const apodContainer = document.getElementById('apod-container');  
// Appel à l'API APOD de la NASA 
fetch('https://api.nasa.gov/planetary/apod?api_key=VOTRE_API_KEY') 
.then(response => response.json()) 
.then(data => {     if (data.media_type == "image") {       
// Création de l'élément image et ajout des attributs       
const image = document.createElement('img');      
image.src = data.url;      
image.alt = data.title;        
// Ajout de l'image au conteneur     
apodContainer.appendChild(image);     } 
else {       // Si le contenu n'est pas une image, vous pouvez afficher un message alternatif      
     apodContainer.innerHTML = "Aucune image disponible pour aujourd'hui.";    } }) 
.catch(error => {
  // En cas d'erreur lors de l'appel à l'API
  console.log('Une erreur s\'est produite :', error);
  apodContainer.innerHTML = "Une erreur s'est produite lors du chargement de l'image.";
});
