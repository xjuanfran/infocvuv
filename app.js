// Get the ul elements from the lists
const linkList = document.getElementById("link-list");
const linkList2 = document.getElementById("link-list-2");
const linkList3 = document.getElementById("link-list-3");
const linkList4 = document.getElementById("link-list-4");
const linkList5 = document.getElementById("link-list-5");
// Create an XMLHttpRequest object to read the text file

const xhr = new XMLHttpRequest();
xhr.open("GET", "links.txt");

// Listen for the onload event to read the file contents
xhr.onload = function () {
  // Check if the request was successful
  if (xhr.status === 200) {
    //Split file content by newline in an array
    const lines = xhr.responseText.split("\n");
    // Iterate over the array
    lines.forEach(function (line) {
      const parts = line.split("|");
      if (parts.length === 3) {
        const name = parts[0].trim();
        const url = parts[1].trim();
        const category = parts[2].trim();

        if (name && url && category) {
          //If category is 'students', add the link to the students list
          if (category.toLowerCase() === "students") {
            const a = document.createElement("a");
            const link = document.createElement("li");
            a.href = url;
            a.textContent = name;
            link.appendChild(a);
            linkList.appendChild(link);
          }
          //If category is 'users', add the link to the users list
          else if (category.toLowerCase() === "users") {
            const link = document.createElement("li");
            const a = document.createElement("a");
            a.href = url;
            a.textContent = " " + name;
            link.appendChild(a);
            linkList2.appendChild(link);
          } else if (category.toLowerCase() === "courses") {
            const link = document.createElement("li");
            const a = document.createElement("a");
            a.href = url;
            a.textContent = " " + name;
            link.appendChild(a);
            linkList3.appendChild(link);
          } else if (category.toLowerCase() == "resources and activities") {
            const link = document.createElement("li");
            const a = document.createElement("a");
            a.href = url;
            a.textContent = " " + name;
            link.appendChild(a);
            linkList4.appendChild(link);
          } else if (category.toLowerCase() == "questionnaires") {
            const link = document.createElement("li");
            const a = document.createElement("a");
            a.href = url;
            a.textContent = " " + name;
            link.appendChild(a);
            linkList5.appendChild(link);
          }
        } else {
          console.log("No hay link");
        }
      }
    });
  }
};
// Send the request to read the text file
xhr.send();
