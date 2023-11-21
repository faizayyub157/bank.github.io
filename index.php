<?php
session_start();
include('config/dbcon.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/png" href="img/icon.png" />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Interior</title>

    <script defer src="script.js"></script>
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #e37264;
  color: white;
}
#anchor {
  color: black;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
</style>
  </head>
  <body>
    <header class="header">
      <nav class="nav">
        <img
          src="img/log.png"
          alt="Bankist logo"
          class="nav__logo"
          id="logo"
          designer="Jonas"
          data-version-number="3.0"
        />
        <ul class="nav__links">
          <li class="nav__item">
            <a class="nav__link" href="#section--1">Features</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#section--2">Interior Available</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#section--4">Enqury</a> 
          </li>
          <li class="nav__item"><?php
          if(isset($_SESSION['auth']))
              {?>
            <a class="nav__link" href="#section--3">Status</a><?php } ?>
          </li>
           
</ul>
        </ul><ul class="nav__links">
        <li class="nav__item"><?php
              if(isset($_SESSION['auth']))
              {
                ?><form action="logincode.php" method="POST" class="needs-validation" novalidate="" autocomplete="off">
                 <button name="logout" type="submit" class="btn btn-primary ms-auto">
                Logout
              </button>
              </form>
                <?php
              }
              else { 
                ?> <a id="anchor" style="text-decoration: none" class="btn btn-dark" href="account.php">CREATE AN ACCOUNT</a>
             <?php } ?>
          </li>
        <li class="nav__item">
          <a  id="anchor"  class="btn btn-dark" href="login.php"
              ><?php
              if(isset($_SESSION['auth']))
              {
                echo "WELCOME BACK ", $_SESSION['auth_user']['user_first'];
              }
              else{
                echo "LOGIN";
              }?>
              </a
            ></li></ul>
      </nav>

      <div class="header__title">
        <!-- <h1 onclick="alert('HTML alert')"> -->
        <h1>
          When
          <!-- Green highlight effect -->
          <span class="highlight">banking</span>
          meets<br />
          <span class="highlight">minimalist</span>
        </h1>
        <h4>A simpler banking experience for a simpler life.</h4>
        <button class="btn--text btn--scroll-to">Learn more &DownArrow;</button>
        <img
          src="img/hero.png"
          class="header__img"
          alt="Minimalist bank items"
        />
      </div>
    </header>

    <section class="section" id="section--1">
      <div class="section__title">
        <h2 class="section__description">Features</h2>
        <h3 class="section__header">
          Everything you need in a modern bank and more.
        </h3>
      </div>

      <div class="features">
        <img
          src="img/digital-lazy.jpg"
          data-src="img/digital.jpg"
          alt="Computer"
          class="features__img lazy-img"
        />
        <div class="features__feature">
          <div class="features__icon">
            <svg>
              <use xlink:href="img/icons.svg#icon-monitor"></use>
            </svg>
          </div>
          <h5 class="features__header">100% digital bank</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde alias
            sint quos? Accusantium a fugiat porro reiciendis saepe quibusdam
            debitis ducimus.
          </p>
        </div>

        <div class="features__feature">
          <div class="features__icon">
            <svg>
              <use xlink:href="img/icons.svg#icon-trending-up"></use>
            </svg>
          </div>
          <h5 class="features__header">Watch your money grow</h5>
          <p>
            Nesciunt quos autem dolorum voluptates cum dolores dicta fuga
            inventore ab? Nulla incidunt eius numquam sequi iste pariatur
            quibusdam!
          </p>
        </div>
        <img
          src="img/grow-lazy.jpg"
          data-src="img/grow.jpg"
          alt="Plant"
          class="features__img lazy-img"
        />

        <img
          src="img/card-lazy.jpg"
          data-src="img/card.jpg"
          alt="Credit card"
          class="features__img lazy-img"
        />
        <div class="features__feature">
          <div class="features__icon">
            <svg>
              <use xlink:href="img/icons.svg#icon-credit-card"></use>
            </svg>
          </div>
          <h5 class="features__header">Free debit card included</h5>
          <p>
            Quasi, fugit in cumque cupiditate reprehenderit debitis animi enim
            eveniet consequatur odit quam quos possimus assumenda dicta fuga
            inventore ab.
          </p>
        </div>
      </div>
    </section>

    <section class="section" id="section--2">
      <div class="section__title">
        <h2 class="section__description">Operations</h2>
        <h3 class="section__header">
          Everything as simple as possible, but no simpler.
        </h3>
      </div>

      <div class="operations">
        <div class="operations__tab-container">
          <button
            class="btn operations__tab operations__tab--1 operations__tab--active"
            data-tab="1"
          >
            <span>01</span>Instant Transfers
          </button>
          <button class="btn operations__tab operations__tab--2" data-tab="2">
            <span>02</span>Instant Loans
          </button>
          <button class="btn operations__tab operations__tab--3" data-tab="3">
            <span>03</span>Instant Closing
          </button>
        </div>
        <div
          class="operations__content operations__content--1 operations__content--active"
        >
          <div class="operations__icon operations__icon--1">
            <svg>
              <use xlink:href="img/icons.svg#icon-upload"></use>
            </svg>
          </div>
          <h5 class="operations__header">
            Tranfser money to anyone, instantly! No fees, no BS.
          </h5>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
          </p>
        </div>

        <div class="operations__content operations__content--2">
          <div class="operations__icon operations__icon--2">
            <svg>
              <use xlink:href="img/icons.svg#icon-home"></use>
            </svg>
          </div>
          <h5 class="operations__header">
            Buy a home or make your dreams come true, with instant loans.
          </h5>
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
          </p>
        </div>
        <div class="operations__content operations__content--3">
          <div class="operations__icon operations__icon--3">
            <svg>
              <use xlink:href="img/icons.svg#icon-user-x"></use>
            </svg>
          </div>
          <h5 class="operations__header">
            No longer need your account? No problem! Close it instantly.
          </h5>
          <p>
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum. Ut enim ad minim
            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.
          </p>
        </div>
      </div>
    </section>
    <?php if(isset($_SESSION['auth']))
              {    ?>     
    <section class="section" id="section--3">
      <div class="section__title section__title--testimonials">
        <h2 class="section__description">Not sure yet?</h2>
        <h3 class="section__header">
        Status of Card
        </h3>
      </div>
     
  <div class="container mt-3"> 
  <table id="customers">
                            <thead>
                                <tr>
                                    <th>Account No.</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Card</th>
                                    <th>time</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 
                
                                    $name= $_SESSION['auth_user']['user_first'];;
                                       $query="SELECT * FROM `card` WHERE name='$name'";
                                       $query_run = mysqli_query($con, $query); 
                                      
                                        
                                            foreach($query_run as $row){
                                               // echo $row['name'];
                                               ?> <tr>
                                                <td><?php echo $row['account'];?></td>
                                               <td><?php echo $row['name'];?></td>
                                               <td><?php echo $row['address'];?></td>
                                               <td><?php echo $row['email'];?></td>
                                               <td><?php echo $row['card'];?></td>
                                               <td><?php echo $row['time'];?></td>
                                               <td><?php echo $row['status'];?></td>
<?php } ?>
                                           </tr>


<?php
                                            }
                        
            
                                    ?>
                            </thead>
                        </table>
                    </div>
                </div>
      </div>
              
    </section><?php
    if(isset($_SESSION['auth']))
              { ?>
    <section class="section" id="section--4">
      <div class="section__title section__title--testimonials">
      <div class="overlay"></div>
    <div class="modal">
    <button class="btn--close-modal">&times;</button>
      <h2 class="modal__header">
        Apply for Cards <br />
        in just <span class="highlight">5 minutes</span>
      </h2>
      <form action="code.php" method="POST" class="modal__form">
        <label>Account Number</label>
        <input name="account" type="number" required autofocus />
        <label>Name</label>
        <input name="name" type="text" required autofocus/>
        <label>address</label>
        <input name="address" type="text" required autofocus/>
        <label>Email Address</label>
        <input name="email" type="email" required autofocus/>
        <label>Card Type</label>
        <input name="card" type="text" required autofocus/>
        <label>Password</label>
        <input name="password" type="password" required autofocus/>
        <button type="submit" name="cardapply" class="btn">Apply &rarr;</button>
      </form>
    </div>
    <div class="overlay hidden"></div>
            </section> <?php } ?>
            </section>

    <section class="section section--sign-up">
      <div class="section__title">
        <h3 class="section__header">
          The best day to join Bankist was one year ago. The second best is
          today!
        </h3>
      </div>
      <button class="btn"><a id="anchor" href="account.php">Open your free account today!</a></button>
    </section>

    <footer class="footer">
      <ul class="footer__nav">
        <li class="footer__item">
          <a class="footer__link" href="#">About</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="#">Pricing</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="#">Terms of Use</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="#">Privacy Policy</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="#">Careers</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="#">Blog</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="#">Contact Us</a>
        </li>
      </ul>
      <img src="img/icon.png" alt="Logo" class="footer__logo" />
      <p class="footer__copyright">
        &copy; Copyright by
        <a
          class="footer__link twitter-link"
          target="_blank"
          href="https://github.com/faizayyub157/bank-webpage.git"
          >Faiz Ayyub</a
        >
      </p>
    </footer>
    <div class="modal hidden">
      <button class="btn--close-modal">&times;</button>
      <h2 class="modal__header">
        Open your bank account <br />
        in just <span class="highlight">5 minutes</span>
      </h2>
      <form action="code.php" method="POST" class="modal__form">
        <label>First Name</label>
        <input name="first" type="text" />
        <label>Last Name</label>
        <input name="last" type="text" />
        <label>Email Address</label>
        <input name="email" type="email" />
        <label>Password</label>
        <input name="password" type="password" />
        <button type="submit" name="adduser" class="btn">Next step &rarr;</button>
      </form>
    </div>
    

    <!-- <script src="script.js"></script> -->
  </body>
</html>
