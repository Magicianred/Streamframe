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
// console.log(checkingBox.checked);
var checkingStatus=document.querySelectorAll("input[name=checkStatus]");

var checkboxForStatus = document.querySelectorAll("input[name=taskCheck]");
// var formData = new FormData();
var testForm = document.getElementById("FormExam");
checkboxForStatus.forEach(
  function(item){
    item.addEventListener('change', function() {
      // formData.append('id',item.dataset.id);
      

      if (this.checked ==1){

        // document.forms["testForm"].submit();
          // fetch('StatusUpdate.php',{
          //   method:'POST',
          //   body:JSON.stringify(formData),
          // }).then(data => {
          //   console.log(data.text());
          // }).catch(error=> {
          //   console.log(error)
          // });
          checkingStatus.innerHTML = "Done";
          console.log(checkingStatus.innerHTML);
      
      } else {
        // fetch('StatusUpdate.php',{
        //   method:'POST',
        //   body:JSON.stringify(formData)
        // }).then(data => {
        //   console.log(data.text());
        // }).catch(error=> {
        //   console.log(error)
        // });
        //   // console.log("Checkbox is not checked..");
          checkingStatus.innerHTML = "In Progress";
          console.log(checkingStatus.innerHTML);
      }
  });
  }
)

checkboxForStatus.forEach(
  function(item){
    item.addEventListener('change', function() {
      // formData.append('id',item.dataset.id);
      

      if (this.checked ==1){

        // document.forms["testForm"].submit();
          // fetch('StatusUpdate.php',{
          //   method:'POST',
          //   body:JSON.stringify(formData),
          // }).then(data => {
          //   console.log(data.text());
          // }).catch(error=> {
          //   console.log(error)
          // });
          checkingStatus.innerHTML = "Done";
          console.log(checkingStatus.innerHTML);
      
      } else {
        // fetch('StatusUpdate.php',{
        //   method:'POST',
        //   body:JSON.stringify(formData)
        // }).then(data => {
        //   console.log(data.text());
        // }).catch(error=> {
        //   console.log(error)
        // });
        //   // console.log("Checkbox is not checked..");
          checkingStatus.innerHTML = "In Progress";
          console.log(checkingStatus.innerHTML);
      }
  });
  }
)

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