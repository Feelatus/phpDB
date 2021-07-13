<?php
$title = "Company";
$description = "Описание страницы";
require_once './src/php/connect.php';
?>

<html>
<title><?= $title ?></title>
<meta name="description" content="<?= $description ?>">
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="./src/css/style.css">

<body>
  <header>
    <div class="logo">
      <img src="./src/img/Logo.png" alt="logo" class="logo_img">
    </div>
    <div class="mobile_nav">
      <img src="./src/img/bars-solid.svg" alt="burger" class="burger">
    </div>
    <div class="nav">
      <a href="#" class="head_nav">Home</a>
      <a href="#" class="head_nav">About Us</a>
      <a href="#" class="head_nav">Software</a>
      <a href="#" class="head_nav">Pricing</a>
      <a href="#" class="head_nav or_btn">Get Started</a>
    </div>
  </header>
  <div class="container">
    <section class="hero">
      <div>
        <h1>What is Lorem Ipsum?</h1>
        <p class="hero_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <a href="#" class="hero_btn">Button</a>
      </div>
    </section>
    <section class="check">
      <div class="check_box">
        <img src="./src/img/check-icon.png" alt="check-icon" class="check-icon">
        <p class="check_p">Contrary to popular belief, Lorem
          Ipsum is not simply random text</p>
      </div>
      <div class="check_box">
        <img src="./src/img/check-icon.png" alt="check-icon" class="check-icon">
        <p class="check_p">Lorem ipsum dolor sit amet,
          consectetur adipiscing elit</p>
      </div>
      <div class="check_box">
        <img src="./src/img/check-icon.png" alt="check-icon" class="check-icon">
        <p class="check_p">The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced</p>
      </div>
    </section>
    <section class="where">
      <div class="cont">
        <div class="wh_box">
          <h3>Where does it come from?</h3>
          <p class="where_p">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
          </p>
        </div>
        <div class="wh_box">
          <h3>Where can I get some?</h3>
          <p class=" where_p">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
          </p>
        </div>
      </div>
    </section>
    <section class="discounts">

      <div class="blocked">
        <h2 class="d_h2">Discounts</h2>
        <?php
        $result = mysqli_query($con, "SELECT * FROM `discounts` LIMIT 0 , 3");
        while ($row = mysqli_fetch_array($result)) {
          $id = $row['id'];
          $title = $row['title'];
          $price = $row['price'];
          $servers = $row['servers'];
          $description = $row['description'];
          $provider = $row['trueprovider'];
          $downloads = $row['downloads'];
          $speed = $row['speed'];
          $btnlink = $row['btnlink'];
        ?>
          <div class="disc_cont">
            <div class="first">
              <div class="name_servers">
                <h2 class="host_name"><? echo $title ?></h2>
                <p class="d_server"><? echo $servers ?></p>
              </div>
              <a href="<? echo $btnlink ?>" class="disc_btn">Button</a>

            </div>
            <div class="second">
              <div class="price">
                <img src="./src/img/Price.png" alt="price" class="disc_img">
                <p class="disc_p">$<? echo $price ?>/mo for 1yr</p>
              </div>
              <div class="price">
                <img src="./src/img/downloads.png" alt="price" class="disc_img">
                <p class="disc_p"><? echo $downloads ?></p>
              </div>
              <div class="price">
                <img src="./src/img/speed.png" alt="price" class="disc_img">
                <p class="disc_p"><? echo $speed ?></p>
              </div>
            </div>
            <div class="desc_disc">
              <img src="./src/img/check.png" alt="check" class="check_ico">
              <p class="desc_disc_p"><? echo $description ?></p>
            </div>
          </div>
        <?php
        }
        mysqli_close($con);
        ?>
      </div>
    </section>
    <section class="faq">
      <div class="ctxt">
        <h2>FAQ’s</h2>
      </div>
      <div class="acc">
        <button class="accordion">Why do we use it?</button>
        <div class="panel">
          <p class="acc_p">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
        </div>

        <button class="accordion">Where can I get some?</button>
        <div class="panel">
          <p class="acc_p">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing </p>
        </div>

        <button class="accordion">Where does it come from?</button>
        <div class="panel">
          <p class="acc_p">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections</p>
        </div>
      </div>
    </section>
    <footer>
      <p class="f_p">
        2021 All rights reserved
      </p>
      <div class="f_nav">
        <a href="#" class="f_nav">Privacy Policy</a>
        <a href="#" class="f_nav">Terms of Service</a>
        <a href="#" class="f_nav">Copyright Policy</a>
      </div>
    </footer>

  </div>
  <script src="./src/js/accordion.js"></script>

</body>

</html>
