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
              <h2 class="main__heading">Edit order</h2>
              
              <p class="main__sub"> </p>
            </div>

            <div class="main__list-heading-wrap">
              
                <form action="/invoice/update/<?php echo $invoices[0]->id;?>" method="post">
                    @csrf
                    <p>  
                    <label for="client_id">client id:</label>
                    <input type="text" 
                        name="customer_id"
                        placeholder="customer_id"
                        value = "<?php echo$invoices[0]->customer_id; ?>">
                    </p>
                  
                    <p>
                    <label for="status_id">status id:</label>
                    <input type="text" 
                        name="status_id" 
                        placeholder="status id"
                        value = "<?php echo$invoices[0]->status_id; ?>">
                    </p>
                    
                    <p><label for="total">total</label>
                    <input type="text" 
                        name="total" 
                        placeholder="total"
                        value = "<?php echo$invoices[0]->total; ?>">

                    
                    <p><label for="delivery_adress">Delivery adress:</label>
                    <input type="text" 
                        name="delivery_adress" 
                        id="id"
                        placeholder="Delivery Adess"
                        value = "<?php echo$invoices[0]->delivery_adress; ?>">

                    <p>
                     <button type="submit" class="ss-show">Submit</button>
                    </p>
                    
                    
                </form>
            </div>

          </div>
          
          </div>

        </main>

      </div>

    </div>
    
</body>
</html>