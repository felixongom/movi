<?php
// connection to databse
$conn = mysqli_connect('localhost', 'campusgf_felix', 'OqMEml#@TGlM', 'campusgf_hostapp');
if(!$conn){
    echo mysqli_connect_error($conn);
}
?>
?>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/w3.css">

<body>

    <div class="w3-container w3-blue">
        <h2>Movie Zone</h2>
    </div>
    <div style="display: flex; justify-content: center;">
        <h1 class="w3-text-orange">Upload movies</h1>

        <form method="POST" action="./upload.php" class="w3-container" style="width: 50%; position: absolute;top:200px;">
            <p>
                <label>Movie Name</label>
                <input class="w3-input" type="text" name="name">
            </p>
            <p>
                <label>Movie Desciption</label>
                <input class="w3-input" type="text" name="description">
            </p>
            <p>

                <input class="w3-input w3-blue " type="submit">
            </p>
            <div class="w3-panel w3-pale-green">
                <p>
                <h3><i>Available Movies</i></h3>
                </p>
            </div>
            
            <!--  -->

            <div class="w3-border-bottom w3-padding" style="display: flex;">
                <div class="w3-text-orange" style="width: 5%; text-transform:capitalize; font-weight:bold">
                    no
                </div>
                <div class="w3-text-blue" style="width: 30%; text-transform:capitalize; font-weight:bold">
                    movie name
                </div>
                <div class="" style="text-transform:capitalize; ">
                    movie description

                </div>
            </div>

            <!--  -->
            
            <?php
            $sql = "SELECT * FROM  moviws";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                $num = 0;
                while ($row = mysqli_fetch_assoc($result)) { ?>

                    <div class="w3-border-bottom w3-padding" style="display: flex;">
                        <div class="w3-text-orange" style="width: 5%; text-transform:capitalize; font-weight:bold">
                            <?php echo $num += 1; ?>
                        </div>
                        <div class="w3-text-blue" style="width: 30%; text-transform:capitalize; font-weight:bold">
                            <?php echo $row['movie_name'] ?>
                        </div>
                        <div class="" style="text-transform:capitalize; ">
                            <?php echo $row['movie_description'] ?>

                        </div>
                    </div>

            <?php

                }
            } else {
                echo "0 results";
            }

            ?>




        </form>

    </div>
</body>

</html>