const addButton = document.querySelector('#add-new-btn');
const toggleForm = document.querySelector('.toggle-add-form');


console.log("hello");

addButton.addEventListener("click", function(){

  if (toggleForm.classList.contains('active')) {
     toggleForm.classList.remove('active');
     addButton.value ="Cancel";
  } else {
  toggleForm.classList.add('active');
  addButton.value ="Add New";
  }

});
