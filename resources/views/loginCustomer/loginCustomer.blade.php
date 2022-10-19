<!DOCTYPE html>
<form action="/dashboard">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password">

    <button class="button"><a>Login</a></button>
    
  </div>
</form>

<form action="/register">
        <button class="button"><a>Register </a></button>
</form>


<style>
form {
  border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 20px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

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
</style>