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
              <h2 class="main__heading">Edit Client</h2>
              
              <p class="main__sub"> </p>
            </div>

            <div class="main__list-heading-wrap">
              
                <form action="/admin/update/<?php echo $users[0]->id;?>" method="post">
                @csrf   
                <p>
                    <label for="nombre">nombre:</label>
                    <input type="text" 
                        name="nombre"
                        placeholder="nombre"
                        value = "<?php echo$users[0]->nombre; ?>">
                    </input>
                   
                </p>
                <p>
                    
                    <label for="RFC">RFC:</label>
                    <input type="text" 
                        name="RFC"
                        placeholder="RFC"
                        value = "<?php echo$users[0]->RFC; ?>">
                    </input>
                </p>
                <p>
                    
                    <label for="description">description</label>
                    <input type="text" 
                        name="description"
                        placeholder="description"
                        value = "<?php echo$users[0]->description; ?>">
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