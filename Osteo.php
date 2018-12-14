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
    <h1>Osteoarthritis</h1>
    <hr/>
  </div>
  <p class="plain-text1 background">
    Osteoarthritis (OA) or sometimes called degenerative joint disease or degenerative arthritis is the most common chronic condition of the joints. Any joint can be affected by OA, but it occurs most often in hips, knees, lower back and neck, small joints
    of the fingers and the bases of thumb and big toe.
    <br/><br/> In normal joints, cartilage (firm rubbery material) covers the end of each bone. Cartilage provides a smooth, gliding surface for joint motion and acts as a cushion between the bones. Meanwhile, in OA, the cartilage breaks down, causing
    pain, swelling and problems moving the joint. Over time as OA worsens, bone may break down and develop growths called spurs.
  </p>
  <div class="text-styles-head" id="treatments">
    <h1>The affected ones</h1>
    <hr/>
  </div>
  <p class="plain-text1 background">
    OA occurs for all ages of people. But, it is most common in people older than 65. There are some common risks of OA, such as increasing age, obesity, previous joint injury, overuse of the joint, weak thigh muscles and genes.<br/><br/> There are some
    symptoms that the affected ones have to deal with. First, stiff joints (joints feel stiff when at rest or still and then it wears off once start to move). Second pain (when moving the joints or at the end of the day, and it becomes more severe as
    the OA worsens). Third, grating sensation (bones may produce a creaking sound when move due to bone friction).
  </p>
  <div class="text-styles-head" id="treatments">
    <h1>The use of secretomes</h1>
    <hr/>
  </div>
  <p class="plain-text1 background">
    It is explicitly known that stem cells (secretomes) have the ability to grow into various tissues, cells or even cartilages. This make secretomes are useful to help managing the symptoms of OA. Using injection, secretomes are administered into the body
    of people with OA. Once the secretomes are in the joint, their objective is to fight off inflammation.<br/><br/> In result, it can reduce pain and increase lubrication of joints by improving production of synovial fluid. Individuals with OA which
    take secretomes as a treatment will experience improvements typically soon after the secretomes injections are applied to the affected area.<br/><br/>
  </p>
  <center>
    <img class="background" src="assets/male-dentist_925x.jpg" alt="rejuvenation">
    <div class="text-styles-head" id="treatments">
      <h1>Register</h1>
    </div>
    <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
      <div class="contact" id="contact">
        <form class="contact-form" action="" method="post">
          <input class="form-control" type="text" name="order_name" disabled value="Osteoarthritis" required>
          <input class="form-control" type="hidden" name="order_name" value="Osteoarthritis">
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
          <p class="foot-text">Tlp &nbsp;&nbsp;&nbsp;&nbsp;: +62 811 911 8008</p>
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
