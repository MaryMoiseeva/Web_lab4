<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Art galleries</title>

    <link rel="stylesheet" href="style3.css">
 <!--   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
    
    <header>
        <div class="logo">
            <a href="#logo">
                <img src="images/logo.png" alt="Logo" width="15%" height="15%"/>
            </a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#logo">Main</a></li>
                <li><a href="#list">Galleries of the world</a></li>
                <li><a href="#leavefeedback">Feedback</a></li>
            </ul>
        </div>
    </header>

    <main>
        <section class="main">
            <img src="images/main.jpg"/>
            <h2 id="main"><span>Art galleries<br></span><a href="#list"><button>See list</button></a></h2>
        </section>

        <section class="list">
            <h2 id="list">Galleries of the world</h2>
            
            <section class="list">
            <div class="gal10">
            <a href="TretyakovGallery.php"> <img src="images/TretyakovGallery.png" height="350px" width="350px" class="tre1"> </a>
            
            <h5><a href="TretyakovGallery.php">"Tretyakov Gallery"</a></h5>
            <?php // подгрузка из базы данных
                require 'script.php';
                foreach($tretyakovGallery as $row1)  { 
                echo '<h3> Location: ' . $row1['city'] . '</h3>';
                echo '<h3> The founder of the museum: ' . $row1['founder'] . '</h3>';
                echo '<h3> Date of foundation: ' . $row1['year'] . '</h3>';
                echo '<h3> ' . $row1['inform'] . '</h3>';
                echo "</div>";
             }
            ?>
        </section>

        <section class="list">
            <div class="gal10">
            <a href="GalleriadegliUffizi.php"> <img src="images/GalleriadegliUffizi.png" height="350px" width="350px" class="tre1"> </a>
            
            <h5><a href="GalleriadegliUffizi.php">"Galleria degli Uffizi"</a></h5>
            <?php // подгрузка из базы данных
                require 'script.php';
                foreach($uffiziGallery as $row2)  { 
                echo '<h3> Location: ' . $row2['city'] . '</h3>';
                echo '<h3> The founder of the museum: ' . $row2['founder'] . '</h3>';
                echo '<h3> Date of foundation: ' . $row2['year'] . '</h3>';
                echo '<h3> ' . $row2['inform'] . '</h3>';
                echo "</div>";
             }
            ?>
        </section>

        <section class="list">
            <div class="gal10">
            <a href="TheHermitageMuseuminStPetersburg.php"> <img src="images/TheHermitageMuseuminStPetersburg.png" height="350px" width="350px" class="tre1"> </a>
            
            <h5><a href="TheHermitageMuseuminStPetersburg.php">"The Hermitage Museum"</a></h5>
            <?php // подгрузка из базы данных
                require 'script.php';
                foreach($hermitageMuseum as $row3)  { 
                echo '<h3> Location: ' . $row3['city'] . '</h3>';
                echo '<h3> The founder of the museum: ' . $row3['founder'] . '</h3>';
                echo '<h3> Date of foundation: ' . $row3['year'] . '</h3>';
                echo '<h3> ' . $row3['inform'] . '</h3>';
                echo "</div>";
             }
            ?>
        </section>

        <section class="list">
            <div class="gal10">
            <a href="OldMastersGallery.php"> <img src="images/OldMastersGallery.png" height="350px" width="350px" class="tre1"> </a>
            
            <h5><a href="OldMastersGallery.php">"Old Masters Gallery"</a></h5>
            <?php // подгрузка из базы данных
                require 'script.php';
                foreach($oldMastersGallery as $row4)  { 
                echo '<h3> Location: ' . $row4['city'] . '</h3>';
                echo '<h3> The founder of the museum: ' . $row4['founder'] . '</h3>';
                echo '<h3> Date of foundation: ' . $row4['year'] . '</h3>';
                echo '<h3> ' . $row4['inform'] . '</h3>';
                echo "</div>";
             }
            ?>
        </section>

        <section class="feedback"> <br> <br>            
            <h2 id="leavefeedback">Leave Feedback</h2>
            <form action="" method="POST" id="feeedback_to_write">
                <form id="feedbackForm">
                    <fieldset class="account-info">
                        <label><input name="name" type="text" id="name" placeholder="Name" required autocomplete="off"></label>
                        <label><input name="phone" type="tel" id="phone" placeholder="+7 (999) 99 99 999" required></label>
                        <label><textarea name="comment" type="text" id="comment" placeholder="Type your message" required autocomplete="off"></textarea></label>
                    </fieldset>
                    <fieldset class="account-action">
                        <input class="btn" type="submit" value="Send">
                    </fieldset>
                </form>
            </form>    
            <div id="feedbackList1"></div>
        </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
  
    <script> //маска номера телефона
        $(document).ready(function() {
        $("#phone").mask("+7 (999) 99-99-999");
        });
    </script>

<?php // Отправка введенных значений в базу данных
    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['comment'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];
        try {
            $sql = "INSERT INTO feedbacknew (name, phone, message) VALUES ('$name', '$phone', '$comment')";
            $affectedRowsNumber = $connection->exec($sql);
//            header('Location: index.php#leavefeedback'); 
            echo "<script>alert('Форма отправлена!');</script>";
//                if($affectedRowsNumber > 0 ){ // если добавлена как минимум одна строка
//                echo "Отзыв успешно добавлен";
            exit();
            }
//        }
        catch (PDOException $e) {
            echo "Ошибка базы данных: " . $e->getMessage();
        }
    }

?>

    <footer class="footer">
        <p>&copy;Art galleries, 2024</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>