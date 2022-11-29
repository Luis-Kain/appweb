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
          <a href="http://localhost:8000/" class="header__link">Sign out</a>
          <a href="http://localhost:8000/admin" class="header__link">Admin</a>
          <a href="http://localhost:8000/users" class="header__link">Users</a>

        </div>
      </header>

      <div class="body">

        <main class="main">

          <div class="main__col-1">

            <div>
              <h2 class="main__heading">Hawk</h2>
              
              <p class="main__sub"> </p>
            </div>

            <div class="main__list-heading-wrap">
              <h2 class="main__list-heading ss-heading">Routes</h2>
              <a href="http://localhost:8000/routes" class="ss-show">show routes</a>
            </div>

            <ul class="main__list">
              <li class="main__list-item">
                <div class="main__list-content-wrap">
                  <p class="main__list-content">Route 1</p>
                  <p class="main__list-sub">Order 1</p>
                </div>
              </li>

              <li class="main__list-item">
                
                <div class="main__list-content-wrap">
                  <p class="main__list-content">Route 2</p>
                  <p class="main__list-sub">Order 2</p>
                </div>
              </li>

              <li class="main__list-item">
                <div class="main__list-content-wrap">
                  <p class="main__list-content">Route 3</p>
                  <p class="main__list-sub">Order 3</p>
                </div>
              </li>
            </ul>

          </div>

          <div class="main__col-2">

            <div class="main__cards-container">

              <div class="main__cards-container-heading-wrap">
                <h2 class="main__cards-container-heading ss-heading">Orders</h2>
                <a href="http://localhost:8000/orders" class="ss-show">show orders</a>
              </div>

              <ul class="main__cards">
                <li class="main__card" style="--hue: 25">
                  <div class="main__card-image-container">
                    <img src="https://t4.kn3.net/taringa/D/1/6/1/D/C/cristianntvg/63A.jpg" alt="" class="main__card-image">
                  </div>
                  <h3 class="main__card-heading">Order 1</h3>
                  <p class="main__card-heading-sub">in Route</p>
                  
                </li>

                <li class="main__card" style="--hue: 250">
                  <div class="main__card-image-container">
                    <img src="https://t4.kn3.net/taringa/D/1/6/1/D/C/cristianntvg/63A.jpg" alt="" class="main__card-image">
                  </div>
                  <h3 class="main__card-heading">Order 2</h3>
                  <p class="main__card-heading-sub">in Route</p>
                  
                </li>

                <li class="main__card" style="--hue: 231;">
                  <div class="main__card-image-container">
                    <img src="https://t4.kn3.net/taringa/D/1/6/1/D/C/cristianntvg/63A.jpg" alt="" class="main__card-image">
                  </div>
                  <h3 class="main__card-heading">Order 3</h3>
                  <p class="main__card-heading-sub">in Route</p>
                  
                </li>
              </ul>

            </div>

            <div class="main__discover">

              <div class="main__discover-heading-container">
                <h2 class="main__discover-heading ss-heading">Sales</h2>
                <a href="http://localhost:8000/sales" class="ss-show">make an order</a>

              </div>
              <a href="http://localhost:8000/material" class="ss-show">show materials</a>


              <ul class="main__discover-places">

                <li class="main__discover-place">
                  <h4 class="main__discover-place-heading">Material 1</h4>
                  
                  <div class="main__discover__more">
                    <div class="main__discover__more-svg" style="background: linear-gradient(20deg, hsla(0, 60%, 50%, .2), hsla(20, 60%, 50%, .3));">
                      <svg viewBox="0 0 24 24">
                        <defs>
                          <lineargradient id="myGradient1" gradientTransform="rotate(20)">
                            <stop offset="0%" stop-color="hsl(0, 60%, 50%)"></stop>
                            <stop offset="50%" stop-color="hsl(20, 60%, 50%)"></stop>
                          </lineargradient>
                        </defs>
                        <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" fill="url(#myGradient1)"></path>
                      </svg>
                    </div>
                    <span class="ss-dots">
                      
                      
                      
                    </span>
                  </div>
                </li>

                <li class=" main__discover-place">
                  <h4 class="main__discover-place-heading">Material 2</h4>
                  
                  <div class="main__discover__more">
                    <div class="main__discover__more-svg" style="background: linear-gradient(20deg, hsla(280, 60%, 50%, .2), hsla(300, 60%, 50%, .3));">
                      <svg viewBox="0 0 24 24">
                        <defs>
                          <lineargradient id="myGradient2" gradientTransform="rotate(20)">
                            <stop offset="0%" stop-color="hsl(280, 60%, 50%)"></stop>
                            <stop offset="50%" stop-color="hsl(300, 60%, 50%)"></stop>
                          </lineargradient>
                        </defs>
                        <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" fill="url(#myGradient2)"></path>
                      </svg>
                    </div>

                  </div>
                </li>

                <li class="main__discover-place">
                  <h4 class="main__discover-place-heading">Material 3</h4>
                  
                  <div class="main__discover__more">
                    <div class="main__discover__more-svg" style="background: linear-gradient(20deg, hsla(210, 60%, 50%, .2), hsla(230, 60%, 50%, .3));">
                      <svg viewBox="0 0 24 24">
                        <defs>
                          <lineargradient id="myGradient3" gradientTransform="rotate(20)">
                            <stop offset="0%" stop-color="hsl(210, 60%, 50%)"></stop>
                            <stop offset="50%" stop-color="hsl(230, 60%, 50%)"></stop>
                          </lineargradient>
                        </defs>
                        <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" fill="url(#myGradient3)"></path>
                      </svg>
                    </div>
                    <span class="ss-dots">
                      
                      
                      
                    </span>
                  </div>
                </li>

                <li class="main__discover-place">
                  <h4 class="main__discover-place-heading">Material 4</h4>
                  
                  <div class="main__discover__more">
                    <div class="main__discover__more-svg" style="background: linear-gradient(20deg, hsla(120, 60%, 50%, .2), hsla(140, 60%, 50%, .3));">
                      <svg viewBox="0 0 24 24">
                        <defs>
                          <lineargradient id="myGradient4" gradientTransform="rotate(20)">
                            <stop offset="0%" stop-color="hsl(120, 60%, 50%)"></stop>
                            <stop offset="50%" stop-color="hsl(140, 60%, 50%)"></stop>
                          </lineargradient>
                        </defs>
                        <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" fill="url(#myGradient4)"></path>
                      </svg>
                    </div>

                  </div>

                </li>

              </ul>

            </div>

          </div>

        </main>

      </div>

    </div>

  </body>

</html><?php /**PATH C:\xampp\htdocs\halcon\resources\views\dashboardCustomer/dashboardCustomer.blade.php ENDPATH**/ ?>