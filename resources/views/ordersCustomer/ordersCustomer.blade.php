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
          <a href="http://localhost:8000/sales/add" class="header__link">Add new order</a>
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
                        <th>id</th>
                        <th>Customer id</th>
                        <th>Status id</th>
                        <th>Total</th>
                        <th>Delivery adress</th>
                        <th>Actions</th>
                        <th>Route</th>
                    </tr>
                    @foreach($invoice as $data)
                    <tr>
                        <th>{{$data->id}}</th>
                        <th>{{$data->customer_id}}</th>
                        <th>{{$data->status_id}}</th>
                        <th>{{$data->total}}</th>
                        <th>{{$data->delivery_adress}}</th>
                        <th><a href="/invoice/edit/{{ $data->id }}" class="header__link">Edit</a>
                        <a href="/invoice/delete/{{ $data->id }}" class="header__link">Delete</a></th>
                        <th><a href="/routes" class="header__link">Route</a></th>
                    </tr>
                    @endforeach  
                </table> 
            </div>
        </main>

      </div>

    </div>
    
</body>
</html>