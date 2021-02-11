var modal = document.getElementById("myModal");
var btn = document.getElementById("confirmAddTask");
var btn2 = document.getElementById("confirmAddParentTask");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

btn2.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

const cbStatus = document.getElementById('checkStatus');
var checkingBox=document.querySelector('#checkValue');
console.log(checkingBox.checked)
var checkingStatus=document.querySelector("#checkStatus");

var checkboxForStatus = document.querySelector("input[name=taskCheck]");
checkboxForStatus.addEventListener('change', function() {
    if (this.checked ==1){
        console.log("Checkbox is checked..");
        checkingStatus.innerHTML = "Done";
    
    } else {
        console.log("Checkbox is not checked..");
        checkingStatus.innerHTML = "In Progress";
    }
});

var checkParentTask = document.querySelector("#nameParentTaskName");
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