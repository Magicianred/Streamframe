var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myParentModal");
var btn = document.getElementById("confirmAddTask");
var btn2 = document.getElementById("confirmAddParentTask");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

btn2.onclick = function() {
  modal2.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

span.onclick = function() {
  modal2.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}



const cbStatus = document.getElementById('checkStatus');
var checkingBox=document.querySelector('#checkValue');
// console.log(checkingBox.checked);
var checkingStatus=document.querySelectorAll("input[name=checkStatus]");

var checkboxForStatus = document.querySelectorAll("input[name=taskCheck]");


var checkParentTask = document.querySelector("#ParentTaskName");
var checkTaskName = document.querySelector("#TaskName");

var checkForm = document.querySelector("#modalForm");

checkForm.addEventListener('submit', function(event){
  
  if (checkTaskName !== null){
    return true;   
  } 
  event.preventDefault();
});

var checkParentForm = document.querySelector("#modalParentForm");

checkParentForm.addEventListener('submit', function(event){
  
  if (checkParentTask !== null){
    return true;   
  } 
  event.preventDefault();
});