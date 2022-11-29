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
              <h2 class="main__heading">Users</h2>
              
              <p class="main__sub"> </p>
            </div>

            </div>

          </div>
          
          </div>

          <div >
                <table id ="customers">
                    <tr>
                        <th>id</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Name</th>
                        <th>first_lastname</th>
                        <th>second_lastname</th>
                        <th>Roll_id</th>
                    </tr>
                    @foreach($user as $data)
                    <tr>
                        <th>{{$data->id}}</th>
                        <th>{{$data->username}}</th>
                        <th>{{$data->password}}</th>
                        <th>{{$data->name}}</th>
                        <th>{{$data->first_lastname}}</th>
                        <th>{{$data->second_lastname}}</th>
                        <th>{{$data->roll_id}}</th>
                    </tr>
                    @endforeach  
                </table> 
            </div>
        </main>

      </div>

    </div>
    
</body>
</html>