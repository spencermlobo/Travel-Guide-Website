<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO jinturneminathjaintemplecomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: jintur neminath jain temple.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>JINTUR NEMINATH JAIN TEMPLE</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="CAPTAIN.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<body>
  <header>
    <h2 class="logo">Travel Guide</h2>
    <div class="toggle"></div>
    <div class="main-menu">
      <ul>
        <li><a href="#">Explore</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Contact</a></li>
        <li>
          <form class="example">
            <a><input type="text" placeholder="Search.." name="search" />
              <button type="submit"><i class="fa fa-search"></i></button>
            </a>
          </form>
        </li>
      </ul>
    </div>
    <script>
      const menuToggle = document.querySelector(".toggle");
      const showcase = document.querySelector(".main-menu");
      menuToggle.addEventListener("click", () => {
        menuToggle.classList.toggle("active");
        showcase.classList.toggle("active");
      });
    </script>
  </header>
  <!--section class="info"-->
  <div class="row">
    <h1>JINTUR NEMINATH JAIN TEMPLE</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60264.3414147376!2d76.74679672894017!3d19.25968184654879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd018326e0f9865%3A0xcb2bf94fef760970!2sParbhani%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633605837784!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
      <img src="images\Jintur Neminath Jain Temple.jpg" width="670" height="300"/>
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>Nemgiri town in Parbhani district is famous for the Digambar Jain Mandir called Jintur Neminath Temple. The sacred Jain temple is located in Nemgiri which is around 44 kms from the main city Parbhani, Maharashtra.Jiintur Neminath Temple is located in the Nemgiri in Jintur taluka of Parbhani district. The temple is dedicated to the deity Jain Tirthankara Neminatha (the 22nd Jain Tirthankar) according to some unknown resources this temple which was actually built by the Rastrakuta dynasty around 8th  9th Century. Another deity i. e. observed here is Lord Parshvanatha an idol which is about 9 tons of weight is suspended in the air with a height of 3 inches and still it is a mystery that nobody couldn't find the secret. Because of this, the Lord Parshvanth is known as 'Antariksha Parshvanatha' here in these hills. According to the archaeologists, this holy site of Jain tirthankar is even older than 1000 years.Beauty of this Jain temple is the place where it is nestled. It is situated in the sub hills of famous Sahayadri Mountains which is fully filled with the glory of greenery and the peacefulness around the temple. Other specialty is that this temple is resided near to the hills called Nemgiri Hills and Chandragiri Hills. These hills are famous for their nostalgic ancient look, the artistic structure and marvelous Jain Cave temples and Chaityalayas. Each hill has two temples and seven caves which together give the Goosebumps experience to the travelers and the devotees. The small entrance into the caves and the huge idols of Jain tirthankars gives everyone a great experience to witness the super skills of the artists and sculptures of that ancient era.</h3>
      <h2>COMMENTS</h2>
      </div>
      <h3>
      <article class="article4">
    <div class="commentwrapper">
      <form action="" method="POST" class="form">
        <div class="row">
          <div class="input-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your Name" required />
          </div>
          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required />
          </div>
        </div>
        <div class="input-group textarea">
          <label for="comment">Comment</label>
          <textarea name="comment" id="comment" placeholder="Enter your comment" required></textarea>
        </div>
        <div class="input-group">
          <button name="submit" class="btn">Post Comment</button>
        </div>
      </form>
      <div class="prev-comments">
        <?php

        $sql = "SELECT * FROM jinturneminathjaintemplecomment";
        $result = mysqli_query($conn, $sql);
        if (
          mysqli_num_rows($result) >
          0
        ) {
          while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="single-item">
              <h4><?php echo $row['name']; ?></h4>
              <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
              <p><?php echo $row['comment']; ?></p>
            </div>
        <?php

          }
        }

        ?>
      </div>
    </div>
  </article>
      </h3>
    </div>
    <!--div class="left-column">
                <div class="card"></div>
               <h2>Introduction</h2>
                <img src="images/Satara.jpg" alt="blog">
                <h3>Detailed Information</h3>
                <h4>"Satara, a place bestowed with
                    historical abundance, is also known
                    for its natural landscape.
                    Surrounded by seven hills and
                    situated near the converging point
                    of two rivers, it will surely to
                    impress you."
                    The unique statue of Chhatrapati Shivaji at
                    Satara is a mark of the legacy left by the
                    Maratha empire. This journey of amazing
                    landmarks will continue with the colourfully
                    flowered Kas plateau, a World Heritage Site. Ancient forts like Ajinkyatara Fort and
                    gushing waterfalls, Satara also houses the
                    Satara Musuem, dedicated to Shivaji
                    himself. Do try the famous sweet, Kadi
                    Pedhe, as you sit on top of Yawateshwar
                    hills and see the twinkling road lights below.
                </h4>
            </div>
            <div class="left-column">
                <div class="card"></div>
               <h2>Introduction</h2>
                <img src="images/Satara.jpg" alt="blog">
                <h3>Detailed Information</h3>
                <h4>"Satara, a place bestowed with
                    historical abundance, is also known
                    for its natural landscape.
                    Surrounded by seven hills and
                    situated near the converging point
                    of two rivers, it will surely to
                    impress you."
                    The unique statue of Chhatrapati Shivaji at
                    Satara is a mark of the legacy left by the
                    Maratha empire. This journey of amazing
                    landmarks will continue with the colourfully
                    flowered Kas plateau, a World Heritage Site. Ancient forts like Ajinkyatara Fort and
                    gushing waterfalls, Satara also houses the
                    Satara Musuem, dedicated to Shivaji
                    himself. Do try the famous sweet, Kadi
                    Pedhe, as you sit on top of Yawateshwar
                    hills and see the twinkling road lights below.
                </h4>
            </div-->
    <div class="right-column">
      <div class="card">
        <h2>EXPLORE MORE PLACES:</h2>
        <h3><a href="hazrat turabul haq shah dargah.php">HAZRAT TURABUL HAQ SHAH DARGAH</a></h3>
        <img src="images\Hazrat Turabul Haq Shah Dargah.jpg" alt="HAZRAT TURABUL HAQ SHAH DARGAH"/>
      </div>
      <div class="card">
        <h3><a href="marathwada mukti sangram smarak.php">MARATHWADA MUKTI SANGRAM SMARAK</a></h3>
        <img src="images\Marathwada Mukti Sangram Smarak.jpg" alt="MARATHWADA MUKTI SANGRAM SMARAK"/>
      </div>
      <div class="card">
      <h3><a href="mudgaleshwar temple.php">MUDGALESHWAR TEMPLE</a></h3>
        <img src="images\Mudgaleshwar Temple.jpg" alt="MUDGALESHWAR TEMPLE"/>
      </div>
      <div class="card">
      <h3><a href="shriram bagh agro medical tourism and fun park.php">SHRIRAM BAGH AGRO MEDICAL TOURISM AND FUN PARK</a></h3>
        <img src="images\Shriram Bagh Agro Medical Tourism and Fun Park.jpg" alt="SHRIRAM BAGH AGRO MEDICAL TOURISM AND FUN PARK"/>
      </div>
      <div class="card">
      <h3><a href="tridhara.php">TRIDHARA</a></h3>
        <img src="images\Tridhara.jpg" alt="TRIDHARA"/>
      </div>
      <div class="card">
      <h3><a href="yeldari dam.php">YELDARI DAM</a></h3>
        <img src="images\Yeldari Dam.jpg" alt="YELDARI DAM"/>
      </div>
      <div class="card">
      <h3><a href="balaji mandir.php">BALAJI MANDIR</a></h3>
        <img src="images\Balaji Mandir.jpg" alt="BALAJI MANDIR"/>
      </div>
      <!--div class="card">
                    <h2>POPULAR POST</h2>
                    <img src="images/example.jfif" alt="">
                </div>
                <div class="card">
                    <h3>FOLLOW ME</h3>
                    <p>Some Text</p>
                </div-->
    </div>
  </div>
</body>
</head>

</html>