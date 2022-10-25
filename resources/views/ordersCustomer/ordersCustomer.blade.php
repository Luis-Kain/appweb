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
          <a href="http://localhost:8000/" class="header__link">Sign out</a>
          <a href="http://localhost:8000/dashboard" class="header__link">Home</a>
        </div>
      </header>

      <div class="body">

        <main class="main">

          <div class="main__col-1">

            <div>
              <h2 class="main__heading">Orders</h2>
              
              <p class="main__sub"> </p>
            </div>

            </div>

          </div>
          
          </div>

          <div >
                <table id ="customers">
                    <tr>
                        <th>Order</th>
                        <th>id</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <th>Order 1</th>
                        <th> 0 </th>
                        <th><a href="/routes" class="ss-show"> in route</a></th>
                    </tr>
                    <tr>
                        <th>Order 2</th>
                        <th> 1 </th>
                        <th> <a href="/routes" class="ss-show"> in route</a> </th>
                    </tr>
                    <tr>
                        <th>Order 3</th>
                        <th> 2 </th>
                        <th> <a href="/routes" class="ss-show"> in route</a> </th>
                    <tr>    
                </table> 
            </div>
        </main>

      </div>

    </div>
    
</body>
</html>