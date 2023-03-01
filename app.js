// Obtener los elementos ul de las listas
const linkList = document.getElementById("link-list");
const linkList2 = document.getElementById("link-list-2");

// Crear un objeto XMLHttpRequest para leer el archivo de texto
const xhr = new XMLHttpRequest();
xhr.open("GET", "links.txt");

// Escuchar el evento onload para leer el contenido del archivo
xhr.onload = function () {
  // Verificar si la solicitud fue exitosa
  if (xhr.status === 200) {
    // Dividir el contenido del archivo por salto de línea en un arreglo
    const lines = xhr.responseText.split("\n");
    // Agregar cada línea como un elemento de la lista si es una URL válida
    lines.forEach(function (line) {
      // Verificar si la línea es un enlace válido
      const parts = line.split("|");
      if (parts.length === 3) {
        const name = parts[0].trim();
        const url = parts[1].trim();
        const category = parts[2].trim();

        if (url && category) {
          // Si la categoría es 'estudiantes', agregar el enlace a la lista de estudiantes
          if (category.toLowerCase() === "students") {
            const link = document.createElement("li");
            const a = document.createElement("a");
            a.href = url;
            a.textContent = name;
            link.appendChild(a);
            linkList.appendChild(link);
          }
          // Si la categoría es 'cursos', agregar el enlace a la lista de cursos
          else if (category.toLowerCase() === "users") {
            const link = document.createElement("li");
            const a = document.createElement("a");
            a.href = url;
            a.textContent = " "+ name;
            link.appendChild(a);
            linkList2.appendChild(link);
          }
        }
      } else {
        console.log("No hay link");
      }
    });
  }
};

// Enviar la solicitud para leer el archivo de texto
xhr.send();
