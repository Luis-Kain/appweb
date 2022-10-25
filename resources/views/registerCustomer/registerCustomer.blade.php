<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">  
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
              
                <form action="./dashboard" method="get">
                   
                <p>
                    <label for="user_name">First Name:</label>
                    <input type="text" 
                        name="First name"
                        id="First name"
                        placeholder="name">
                    </input>
                </p>
                <p>
                    
                    <label for="user_name">Last Name:</label>
                    <input type="text" 
                        name="Last name"
                        id="Last name"
                        placeholder="Last name">
                    </input>
                </p>
                <p>
                    <label for="user_name">UserName:</label>
                    <input type="text" 
                        name="username"
                        id="username"
                        placeholder="username">
                    </input>  
                </p>
                <p>
                    <label for="password">Password:</label>
                    <input type="password" 
                            name="password" 
                            id="password"
                        placeholder="password">
                    </input>

                </p>
                <p>
                    <label for="password">Confirm Password:</label>
                    <input type="password" 
                            name="password" 
                            id="password"
                        placeholder="password">
                    </input>

                </p>

                    <a href="http://localhost:8000/dashboard" class="ss-show">Submit</a>
                </form>
            </div>

          </div>
          
          </div>

        </main>

      </div>

    </div>
    
</body>
</html>