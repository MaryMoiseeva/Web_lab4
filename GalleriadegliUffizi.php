<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art galleries</title>
    <link rel="stylesheet" href="GalleriadegliUffizi.css"> 
</head>
<body>
    <header>
        <div class="logo">
            <a href="/">
                <img src="images/logo.png" alt="Logo" width="15%" height="15%"/>
            </a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php#logo">Main</a></li>
                <li><a href="index.php#list">Galleries of the world</a></li>
                <li><a href="index.php#leavefeedback">Feedback</a></li>
            </ul>
        </div>
    </header>

    <main>
        <section class="name">
            <h2 id="name">Galleria degli Uffizi</h2>
        </section>

        <section class="list">
            <div class="uf1">
            <img src="uf1.png" height="400px" width="700px" class="uf1">
            
            <?php // подгрузка из базы данных
                require 'script.php';
                foreach($uffiziGallery as $row2)  { 
                echo '<h3> Location: ' . $row2['city'] . '</h3>';
                echo '<h3> The founder of the museum: ' . $row2['founder'] . '</h3>';
                echo '<h3> Date of foundation: ' . $row2['year'] . '</h3>';
                echo '<h3> ' . $row2['inform'] . '</h3>';
                }
            ?>
            </div>

            <div class="text">
            <h2> Collections and the most famous exhibits of the Uffizi Gallery</h2>
            </div>

            <div class="uf2">
            <img src="uf2.png" height="400px" width="700px" class="uf2">
            <h3> From the entrance to the museum halls, you can get through three lobbies. In one of them there are busts carved from marble and porphyry. The other is decorated by the Italian artist Giovanni Manozzi (Giovanni da San Giovanni).</h3>
            </div>

            <div class="uf3">
            <img src="uf3.jpg" height="400px" width="700px" class="uf3">
            <h3> In the third lobby there are sarcophagi and statues from the era of Ancient Rome. The environment, consisting of three lobbies, was created at the end of the eighteenth century with the completion of the monumental staircase, a new access to the gallery, at the behest of Grand Duke Pietro Leopoldo.</h3>
            </div>

            <div class="uf4">
            <img src="uf4.jpg" height="400px" width="600px" class="uf4">
            <h3> The third floor of the building is reserved for an art gallery. In addition, the palace houses rare documents on the history of Florence, and you can also see the Cabinet of Drawings and engravings. His unique collection began to take shape in the XVII century, thanks to Cardinal Leopoldo de' Medici.</h3>
            <h3>The Uffizi Gallery presents world-famous paintings by Sandro Botticelli: "The Birth of Venus", "Spring", "Madonna and Child with an Angel" and "Slander". Halls 10-14 are dedicated to the work of the Italian painter and a friend of the Medici family.</h3>
            </div>

            <div class="uf5">
            <img src="uf5.jpg" height="400px" width="600px" class="uf5">
            <h3> Two paintings by Leonardo da Vinci – "The Annunciation" and "The Adoration of the Magi" - are on display in Hall No. 15. In other halls of the museum, paintings by Titian "Venus of Urbino" and Verrocchio "The Baptism of Christ" are on display.</h3>
            </div>

            <div class="uf6">
            <img src="uf6.jpg" height="450px" width="450px" class="uf6">
            <h3> Hall No. 25 of the Uffizi Gallery presents to visitors the masterpiece of the young Michelangelo Buonarroti "The Holy Family". This is a round painting made in the popular kanjiante technique at that time, when the shapes of human bodies were conveyed with sculptural expressiveness. Part of the gallery's space is devoted to the works of foreign masters of painting. In these halls you can see paintings by Durer, Goya, El Greco, Velasquez, Rubens, Rembrandt and Van Dyck.</h3>
            </div>

            <div class="uf7">
            <img src="uf7.jpg" height="450px" width="350px" class="uf7">
            <h3> About 1,500 paintings are stored in the famous Vasari air corridor. These are self-portraits by Raphael, Rubens, Diego Velazquez, Giorgio Vasari and other artists. Among the Russian painters, self-portraits of Boris Kustodiev, Ivan Aivazovsky, Orest Kiprensky and Viktor Ivanov are exhibited here. The collection of self-portraits is constantly being updated through purchases and donations. All artists regard the opportunity to exhibit their self-portrait in the Uffizi Gallery as a great honor.</h3>
            </div>

            <div class="uf8">
            <img src="uf8.jpg" height="400px" width="600px" class="uf8">
            <h3> Of the sculptures stored in the museum, the statue "Venus de' Medici" deserves special attention. It was created in the 1st century AD by an unknown author. Recently, scientists conducted a study of the sculpture and found out that it used to be painted. The woman's lips were covered with scarlet paint, and her hair was golden. The sculpture on display in Florence is a copy of the famous statue of the ancient Greek sculptor Praxiteles, which he created in the IV century BC. She portrayed Aphrodite of Cnidus, and the Athenian hetaera Phryne, known for her beauty, posed for Praxiteles. Pliny called this work of the famous sculptor the most beautiful statue on Earth.</h3>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy;Art galleries, 2024</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>