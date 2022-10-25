<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">  
  </head>
  <body>

    <div class="dash">

    <header class="header">
        <h1 class="header__heading"><a>HAWK</a></h1>
        <div class="header__options">
          <a href="http://localhost:8000/register" class="header__link">Register</a>
        </div>
      </header>

      <div class="body">

        <main class="main">

          <div class="main__col-1">

            <div>
              <h2 class="main__heading">Login</h2>
              
              <p class="main__sub"> </p>
            </div>

            <div class="main__list-heading-wrap">
              
                <form action="./dashboard" method="get">
                    <label for="user_name">UserName:</label>
                    <input type="text" 
                        name="username"
                        id="username"
                        placeholder="username">

                    <label for="password">Password:</label>
                    <input type="password" 
                        name="password" 
                        id="password"
                        placeholder="password">
                    <a href="http://localhost:8000/dashboard" class="ss-show">Submit</a>
                </form>
            </div>

          </div>
          
          </div>

        </main>

      </div>

    </div>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\halcon\resources\views\loginCustomer/loginCustomer.blade.php ENDPATH**/ ?>