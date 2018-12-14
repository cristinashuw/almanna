<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Almanna</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway:200" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <!-- Image and text -->
  <!-- Just an image -->
  <div class="Navbar">
    <a class="navbar-brand" href="index.php#">
    <img width="25%" src="assets/almanna-white.png" alt="almanna-logo">
  </a>
  <a class="Nav-marge" href="index.php">Home</a>
  <a class="Nav-marge" href="index.php#treatments">Treatments</a>
  <a class="Nav-marge" href="index.php#about">About</a>
  <a class="Nav-marge" href="index.php#destinations">Destinations</a>
  <a class="Nav-marge" href="#">Gallery</a>
  <a class="Nav-marge" href="index.php#contact">Contact</a>
  </div>
  <!-- background -->
  <div class="text-styles-head marge" id="treatments">
    <h1>Brain Disorder</h1><hr/>
  </div>
  <p class="plain-text1 background">
    There is a nucleus in each cell in human body where genetic material is stored in genes. Genes carry
the codes responsible for all of our inherited traits and are grouped along rod-like structures called
chromosomes. Ordinarily, each cell’s nucleus contains 23 pairs of chromosomes, half of which are
inherited from each parent. Brain disorder occurs when an individual has a full or partial extra copy
of chromosome 21.<br/><br/>
This additional genetic material alters the course of development and causes the characteristics
associated with brain disorder. There are a couple of common physical traits of brain disorder, such
as low muscle tone, small stature, an upward slant to the eyes, and a single deep crease across the
centre of the palm (although each individual with brain disorder is a unique person and may
possess these characteristics ar variance degrees, or not at all).
  </p>
  <div class="text-styles-head" id="treatments">
    <h1>Cause of brain disorder</h1><hr/>
  </div>
  <p class="plain-text1 background">
    In all or some of people with brain disorder’s cells, a critical portion of chromosome 21 is present.
This additional genetic material alters the course of development and causes the characteristics
associated with brain disorder. Unfortunately, the explanation of the extra full or partial
chromosome is still unknown. The only factor that has been linked to an increased chance of having
a baby with brain disorder is maternal age.<br/><br/>
However, due to higher birth rates in younger women, 80% of children with brain disorder are
born to women under 35 years of age. And yet, there is no definitive scientific research that
indicates that brain disorder is caused by environmental factors or the parents’ activities before or
during pregnancy. The additional full or partial copy of the 21 st chromosome can originate from
either the father or the mother. Generally, 5% of the cases have been traced to the father.
  </p>
  <div class="text-styles-head" id="treatments">
    <h1>Secretomes for brain disorder</h1><hr/>
  </div>
  <p class="plain-text1 background">
    While brain disorder is incurable, stem cell experts have reached a conclusion that secretomes
treatment can lead to some improvement to those with brain disorder. Giving them a better life
even if no permanent cure can be promised. The results and improvements by using secretomes
have shown that the new medical technology has the potential to replace damages neurons, re-
establish lost axonal connection, and provide treatment for various neutal and congenital disorder.<br/><br/>
  </p>
  <center>
  <img class="background" src="assets/male-dentist_925x.jpg" alt="rejuvenation">
  <div class="text-styles-head" id="treatments">
    <h1>Register</h1>
  </div>
<div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
  <div class="contact" id="contact">
    <form class="contact-form" action="" method="post">
          <input class="form-control" type="text" name="order_name" disabled value="Brain Disorder" required>
          <input class="form-control" type="hidden" name="order_name" value="Brain Disorder">
          <input class="form-control" type="text" name="customer_name" placeholder="name" required>
          <input class="form-control" type="email" name="email" placeholder="email" required>
          <input class="form-control" type="phone" name="phone" placeholder="phone" required>
          <input class="form-control" type="text" name="address" placeholder="address" required>
          <select class="form-control" name="destination" id="country" required="">
            <option>Select Destinations</option>
            <option>Bali</option>
            <option>Yogyakarta</option>
            <option>Lombok</option>
            <option>Danau Toba</option>
          </select>
          <input class="form-control" type="date" name="orderDate" id="myDate" required>
          <button type="submit" name="Enter" class="btn btn-outline-primary" value="">Register</button>
        </form>
  </div>
</div><br/><br/><br/>

<?php
    include 'koneksi.php';
    if(isset($_POST['Enter'])){
      $order_name = $_POST['order_name'];
      $customer_name = $_POST['customer_name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $destination = $_POST['destination'];
      $orderDate = $_POST['orderDate'];

    $query = "INSERT INTO `customers`(customer_name, email, phone, address, order_name, destination, orderDate) VALUES('$customer_name', '$email','$phone','$address', '$order_name', '$destination', '$orderDate')";
    

    $insert = mysqli_query($connect, $query);
      if($insert){
        echo "<script>alert('You have successfully registered.')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
?>
  
<?php
      }else{
        echo 'gagal disimpan'.mysqli_error($connect);
        }
  }
?>

    </center>
  <section>
  <div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
         <div class="well">
               <form action="#">
                <div class="input-group">
                   <input class="btn btn-lg border border-light" name="email" id="email" type="email" placeholder="Your Email" required>
                   <button class="btn btn-warning btn-sm" type="submit">Subscribe</button>
                </div>
               </form>
         </div>
      </div>
      <div class="col-md-6 col-md-offset-3">
        <p class="foot-text">Office : Komp. Nusantara Golden Blok B10 Batam Center</p>
        <p class="foot-text">Tlp 	&nbsp;&nbsp;&nbsp;&nbsp;: +62 811 911 8008</p>
        <p class="foot-text">Email :&nbsp;<a href="mailto:astri@almanna.co?subject=Treatment-service">astri@almanna.co</a></p>
        <small class="Kloropil">&copy;2018 by Kloropil</small>
    </div>
    </div>
  </div>
  </section>
  <script src="index.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
