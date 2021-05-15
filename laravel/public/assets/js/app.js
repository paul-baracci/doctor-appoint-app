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
