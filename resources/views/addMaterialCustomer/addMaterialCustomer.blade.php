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
        </div>
    </header>

      <div class="body">

        <main class="main">

          <div class="main__col-1">

            <div>
              <h2 class="main__heading">Add New Material</h2>
              
              <p class="main__sub"> </p>
            </div>

            <div class="main__list-heading-wrap">
              
                <form action="/material/add/succes" method="post">
                @csrf   
                <p>
                    <label for="name">Name:</label>
                    <input type="text" 
                        name="name"
                        placeholder="name">
                    </input>
                </p>
                <p>
                    
                    <label for="cost">Cost:</label>
                    <input type="text" 
                        name="cost"
                        placeholder="cost">
                    </input>
                </p>
                <p>
                    
                    <label for="price">Price:</label>
                    <input type="text" 
                        name="price"
                        placeholder="price">
                    </input>
                </p>
                <p>
                    
                    <label for="amount">Amount:</label>
                    <input type="text" 
                        name="amount"
                        placeholder="amount">
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
</html>