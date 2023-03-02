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
          switch (category.toLowerCase()) {
            case "students":
              const linkStudents = document.createElement("a");
              const listStudents = document.createElement("li");
              linkStudents.href = url;
              linkStudents.textContent = name;
              linkStudents.target = "_blank"; // Agregar el atributo target con valor _blank
              listStudents.appendChild(linkStudents);
              linkList.appendChild(listStudents);
              break;
            case "users":
              const linkUsers = document.createElement("a");
              const listUsers = document.createElement("li");
              linkUsers.href = url;
              linkUsers.textContent = " " + name;
              linkUsers.target = "_blank"; // Agregar el atributo target con valor _blank
              listUsers.appendChild(linkUsers);
              linkList2.appendChild(listUsers);
              break;
            case "courses":
              const linkCourses = document.createElement("a");
              const listCourses = document.createElement("li");
              linkCourses.href = url;
              linkCourses.textContent = " " + name;
              linkCourses.target = "_blank"; // Agregar el atributo target con valor _blank
              listCourses.appendChild(linkCourses);
              linkList3.appendChild(listCourses);
              break;
            case "resources and activities":
              const linkResources = document.createElement("a");
              const listResources = document.createElement("li");
              linkResources.href = url;
              linkResources.textContent = " " + name;
              linkResources.target = "_blank"; // Agregar el atributo target con valor _blank
              listResources.appendChild(linkResources);
              linkList4.appendChild(listResources);
              break;
            case "questionnaires":
              const linkQuestionnaires = document.createElement("a");
              const listQuestionnaires = document.createElement("li");
              linkQuestionnaires.href = url;
              linkQuestionnaires.textContent = " " + name;
              linkQuestionnaires.target = "_blank"; // Agregar el atributo target con valor _blank
              listQuestionnaires.appendChild(linkQuestionnaires);
              linkList5.appendChild(listQuestionnaires);
              break;
          }
        }
      }
    });
  }
};
// Send the request to read the text file
xhr.send();

