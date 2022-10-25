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
          <a href="http://localhost:8000/register" class="header__link">Register</a>
          <a href="http://localhost:8000/dashboard" class="header__link">home</a>

        </div>
      </header>

      <div class="body">

        <main class="main">

          <div class="main__col-1">

            <div>
              <h2 class="main__heading">New order</h2>
              
              <p class="main__sub"> </p>
            </div>

            <div class="main__list-heading-wrap">
              
                <form action="./dashboard" method="get">
                    <p>  
                    <label for="client_name">Client Name:</label>
                    <input type="text" 
                        name="Name or company"
                        id="username"
                        placeholder="Name or company">
                    </p>
                  
                    <p>
                    <label for="customer_number">customer number:</label>
                    <input type="text" 
                        name="customer_number" 
                        id="id"
                        placeholder="customer id">
                    </p>
                    
                    <p><label for="invoice">physical invoice:</label>
                    <input type="text" 
                        name="invoice" 
                        id="id"
                        placeholder="invoice number">

                    <p>
                    <label for="start">Deliver date:</label>
                    <input type="date" id="Deliver Date" name="deliver"
                        min="2022-01-01" max="2024-12-31">
                    </p>
                    <p>
                        <label for="Material">Material:</label>
                            <p>
                                <label for="Material">Material 1</label>
                                <input type="radio" value="material 1">
                            </p>
                                <label for="Material">Material 2</label>
                                <input type="radio" value="material 2">
                            <p>
                                <label for="Material">Material 3</label>
                                <input type="radio" value="material 3">
                            </p>
                            <p>
                                <label for="Material">Material 4</label>
                                <input type="radio" value="material 4">
                            </p>

                    </p>
                    
                    <p><label for="invoice">Delivery adress:</label>
                    <input type="text" 
                        name="invoice" 
                        id="id"
                        placeholder="Delivery Adess">

                    <p>
                    <a href="http://localhost:8000/dashboard" class="ss-show">Submit</a></p>
                    
                    
                </form>
            </div>

          </div>
          
          </div>

        </main>

      </div>

    </div>
    
</body>
</html>