
// Sorting functions
const buttonContainer = document.getElementById('button-group')

const orderFunctions = {
  ascendingByName: (a, b) => a.dataset.title - b.dataset.title,
  descendingByName: (a, b) => b.dataset.title - a.dataset.title,
  ascendingByPrice: (a, b) => a.dataset.price - b.dataset.price,
  descendingByPrice: (a, b) => b.dataset.price - a.dataset.price,
  ascendingByDate: (a, b) => a.dataset.added - b.dataset.added,
  descendingByDate: (a, b) => b.dataset.added - a.dataset.added
}

let currentOrder = orderFunctions.ascendingByName

buttonContainer.addEventListener('click', (e) => {
  // Dont sort if empty space in the parent element has been clicked insted of the buttons
  if (e.target.id == "button-group") return;

  currentOrder = orderFunctions[e.target.dataset.order]
  order()
})

const order = function() {
  const ordered = [...document.getElementsByClassName('card')].sort(currentOrder)
  ordered.forEach((elem, index) => {
    elem.style.order = index
  })
}

//Click on the “grid view” button to add a .grid CSS class to #lgDemo.
//Clicking on the “list view” button will remove the .grid CSS class. 
window.addEventListener("DOMContentLoaded", function(){
  document.getElementById("sList").addEventListener("click", function(){
    document.getElementById("lgDemo").classList.remove("grid");
  });
  document.getElementById("sGrid").addEventListener("click", function(){
    document.getElementById("lgDemo").classList.add("grid");
  });
});