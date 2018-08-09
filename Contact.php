<?php
  class Contact
  {
    public $name;
    public $phone;
    public $address;
    public $image_path;
  }

  $hendrix = new Contact();
  $hendrix->name = "Joey Hendrix";
  $hendrix->phone = "823-3333";
  $hendrix->address = "East 1st Street";
  $hendrix->image_path = "https://img.discogs.com/Zuu63mGuIdRc0Vh1lKEQjJF2um4=/600x692/smart/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/A-110593-1449578430-6807.jpeg.jpg";

  $elvis = new Contact();
  $elvis->name = "Elvis Presley";
  $elvis->phone = "617-356-3571";
  $elvis->address = "Graceland";
  $elvis->image_path = "https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Elvis_Presley_promoting_Jailhouse_Rock.jpg/220px-Elvis_Presley_promoting_Jailhouse_Rock.jpg";

  $einstein = new Contact();
  $einstein->name = "Albert Einstein";
  $einstein->phone = "415-738-4935";
  $einstein->address = "3718 MLK blvd. Oakland, CA 94609";
  $einstein->image_path = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRttH4G6cu72RXnzqCc75gJq6uDOGWS6Zj2r_P7g-SVOmVaZt9";

  $address_book = array($hendrix, $elvis, $einstein);
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Address Book</title>
  </head>
  <body>
      <div class="container">
          <h1>Address Book</h1>
          <ol id="flex">
              <?php
                  foreach ($address_book as $contact) {
                    echo "<li>";
                    echo $contact->name;
                    echo "<ul>";
                    echo "<li><img src='$contact->image_path'></li>";
                    echo "<li> $contact->phone </li>";
                    echo "<li>$contact->address</li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<button>";
                    echo "call";
                    echo "</button>";
                  }
              ?>
          </ul>
      </div>
  </body>
</html>
