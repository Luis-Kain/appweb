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
          <a href="http://localhost:8000/" class="header__link">Login</a>
        </div>
    </header>

      <div class="body">

        <main class="main">

          <div class="main__col-1">

            <div>
              <h2 class="main__heading">Register</h2>
              
              <p class="main__sub"> </p>
            </div>

            <div class="main__list-heading-wrap">
              
                <form action="/register/succes" method="post">
                <?php echo csrf_field(); ?>   
                <p>
                    <label for="name">First Name:</label>
                    <input type="text" 
                        name="name"
                        placeholder="name">
                    </input>
                </p>
                <p>
                    
                    <label for="first_lastname">First last Name:</label>
                    <input type="text" 
                        name="first_lastname"
                        placeholder="first last name">
                    </input>
                </p>
                <p>
                    
                    <label for="second_lastname">Second last Name:</label>
                    <input type="text" 
                        name="second_lastname"
                        placeholder="first last name">
                    </input>
                </p>
                <p>
                    <label for="username">UserName:</label>
                    <input type="text" 
                        name="username"
                        placeholder="username">
                    </input>  
                </p>
                <p>
                    <label for="password">Password:</label>
                    <input type="password" 
                            name="password" 
                        placeholder="password">
                    </input>

                </p>
                <p>
                    <label for="roll_id">roll id:</label>
                    <input type="text" 
                            name="roll_id" 
                        placeholder="roll id">
                    </input>

                </p>
                    <button type="Submit" class="ss-show">Submit</button>
                </form>
            </div>

          </div>
          
          </div>

        </main>

      </div>

    </div>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\halcon\resources\views\registerCustomer/registerCustomer.blade.php ENDPATH**/ ?>