<!DOCTYPE html>
<form action="/dashboard">
  <div class="container">
    <label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Enter Name">

    <label for="psw"><b>Second Name</b></label>
    <input type="password" placeholder="Enter Second Name">

    <label for="psw"><b>Email</b></label>
    <input type="password" placeholder="Enter Email">
    
    <label for="psw"><b>Role</b></label>
    <input type="password" placeholder="Enter Role">

    <label for="psw"><b>ID</b></label>
    <input type="password" placeholder="Enter ID">

    <button class="button"><a>Submit</a></button>
    
  </div>
</form>


<style>
    /* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 20px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button{
  background-color: #f44336;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 12.5%;
}
button:hover {
  opacity: 0.8;
}
.container {
  padding: 16px;
}
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
}
</style><?php /**PATH C:\xampp\htdocs\halcon\resources\views\registerCustomer/registerCustomer.blade.php ENDPATH**/ ?>