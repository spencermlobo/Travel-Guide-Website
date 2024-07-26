<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO shirdicomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: shirdi.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SHIRDI</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="CAPTAIN.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<body>
  <header>
    <h2 class="logo">Travel Guide</h2>
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
    <h1>SHIRDI</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120638.0645227955!2d74.67263294338294!3d19.11030915690623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcb05d46788921%3A0x6677e92c1a5181b6!2sAhmednagar%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633603729514!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <img src="images\Shirdi.jpg" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>Amongst the places of deep belief and faith in India, falls Shirdi – the place of Saint Sai Baba. 
The devotees and followers of Sai Baba are spread all over the world and hence the place has attained importance.
 A small village in Ahmedanagar district Shirdi ,has acquired a lot of fame & followers for Sant Shree Sai Baba.
Sai Baba attained samadhi on Dassera day in 1918.Sai Baba preached at Shirdi all his life & renewned people’s faith in God.
Devotees from every faith throng here all year round to pay their respects to his memory.Khandoba Mandir,Samadhi of Shree 
Sai Baba,Dwarkamai mosque,Mhasoba temple all these places are within a periphery of 1km & can be covered on foot.
Samadhi Mandir:The Mandir is built with stones and Baba’s Samadhi is built with white marble stones. A railing is built in marble around the 
Samadhi and is full of ornamental decorations. In front of the Samadhi are two silver pillars full of decorative designs. Just behind the 
Samadhi is Sai Baba’s marvelous statue made of Italian marble, which shows him seated on a throne.
Dwarkamai:Dwarkamai is situated on the right side of the entrance of Samadhi Mandir.
Gurusthan:Sai Baba first came to Shidi in the form of Bal Yogi – a child ascetic. He was first spotted seated under a Neem tree. 
This place came to be known as Gurusthan.
Lendi Baug:At some distance from Gurusthan there is the Lendi Baug. This Baug was made and watered daily by Baba himself.
      </h3>
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

        $sql = "SELECT * FROM shirdicomment";
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
        <h3><a href="ahmednagar fort.php">AHMEDNAGAR FORT</a></h3>
        <img src="images\Ahmednagar Fort.jpg" alt="AHMEDNAGAR FORT" />
      </div>
      <div class="card">
      <h3><a href="bhandardara dam.php">BHANDARDARA DAM</a></h3>
        <img src="images\Bhandardara Dam.jpg" alt="BHANDARDARA DAM" />
      </div>
      <div class="card">
        <h3><a href="cavalry tank museum.php">CAVALRY TANK MUSEUM</a></h3>
        <img src="images\Cavalry Tank Museum.jpg" alt="CAVALRY TANK MUSEUM"/>
      </div>
      <div class="card">
      <h3><a href="chandbibis mahel.php">CHANDBIBI'S MAHEL</a></h3>
        <img src="images\Chandbibi's Mahel.jpg" alt="CHANDBIBI'S MAHEL" />
      </div>
      <div class="card">
      <h3><a href="shani shingnapur.php">SHANI SHINGNAPUR</a></h3>
        <img src="images\Shani Shingnapur.jpg" alt="SHANI SHINGNAPUR" />
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