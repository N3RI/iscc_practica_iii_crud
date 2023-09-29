// Genera un número aleatorio entre 1 y 100
function generarNumeroAleatorio() {
  return Math.floor(Math.random() * 100) + 1;
}

// Genera una publicación simulada
function generarPublicacion() {
  const titulo = "Publicación " + generarNumeroAleatorio();
  const contenido = "Este es el contenido de la publicación " + generarNumeroAleatorio();
  const autor = "Autor " + generarNumeroAleatorio();
  const fecha = new Date();

  return {
    titulo,
    contenido,
    autor,
    fecha,
  };
}

// Carga las publicaciones simuladas
function cargarPublicaciones() {
  const publicaciones = [];
  for (let i = 0; i < 3; i++) {
    publicaciones.push(generarPublicacion());
  }

  const ulPosts = document.querySelector("#posts");
  publicaciones.forEach((publicacion) => {
    const liPost = document.createElement("li");
    liPost.classList.add("post");

    const h2PostTitle = document.createElement("h2");
    h2PostTitle.textContent = publicacion.titulo;
    liPost.appendChild(h2PostTitle);

    const pPostContent = document.createElement("p");
    pPostContent.textContent = publicacion.contenido;
    liPost.appendChild(pPostContent);

    const imgPostImage = document.createElement("img");
    imgPostImage.src = "https://picsum.photos/id/" + generarNumeroAleatorio() + "/300/300";
    liPost.appendChild(imgPostImage);

    const pPostAuthor = document.createElement("p");
    pPostAuthor.textContent = "Autor: " + publicacion.autor;
    liPost.appendChild(pPostAuthor);

    const pPostDate = document.createElement("p");
    pPostDate.textContent = "Fecha: " + publicacion.fecha;
    liPost.appendChild(pPostDate);

    ulPosts.appendChild(liPost);
  });
}

// Carga las publicaciones simuladas al cargar la página
window.onload = cargarPublicaciones;

//calendario