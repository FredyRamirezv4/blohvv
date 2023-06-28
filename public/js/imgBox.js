const image = document.querySelectorAll('.imgGallery')// Seleccionar todas las imágenes de la galería
const ligthImage = document.querySelector('.imagenAdd')// Seleccionar la imagen ampliada
const ligthContainer = document.querySelector('.imagenLigth')// Seleccionar el contenedor de la imagen ampliada
const menuH1 = document.querySelector(".bx-menu");//Menu

// Iterar sobre cada imagen de la galería
image.forEach(imagen =>{
    imagen.addEventListener('click', ()=>{
        viewImage(imagen.getAttribute('src'))
        
    })
})
//  Evento de clic al contenedor de la imagen ampliada
ligthContainer.addEventListener('click', (e)=>{
    if(e.target !== ligthImage){
        ligthContainer.classList.toggle('show')
        ligthImage.classList.toggle('showImage')
        menuH1.style.opacity = '1'

    }
})
// Función para mostrar la imagen ampliada
const viewImage =(imagen)=>{
ligthImage.src = imagen;
ligthContainer.classList.toggle('show')
ligthImage.classList.toggle('showImage')
menuH1.style.opacity = '0'
}