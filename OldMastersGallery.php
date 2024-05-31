<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art galleries</title>
    <link rel="stylesheet" href="OldMastersGallery.css"> 
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
                <li><a href="index.php#logo">Main</a></li>
                <li><a href="index.php#list">Galleries of the world</a></li>
                <li><a href="index.php#leavefeedback">Feedback</a></li>
            </ul>
        </div>
    </header>

    <main>
        <section class="name">
            <h2 id="name">Old Masters Gallery</h2>
        </section>

        <section class="list">
            <div class="ol1">
            <img src="ol1.jpeg" height="400px" width="600px" class="ol1">
            
            <?php // подгрузка из базы данных
                require 'script.php';
                foreach($oldMastersGallery as $row4)  { 
                echo '<h3> Location: ' . $row4['city'] . '</h3>';
                echo '<h3> The founder of the museum: ' . $row4['founder'] . '</h3>';
                echo '<h3> Date of foundation: ' . $row4['year'] . '</h3>';
                echo '<h3> ' . $row4['inform'] . '</h3>';
                }
            ?>
            </div>

            <div class="text">
            <h2> Masterpieces of the Dresden Gallery</h2>
            <h3> There are about 1,500 works in the catalog of the Dresden Art Gallery, but the exhibition space allows you to display no more than 450 of them. From time to time, several canvases are sent to the storerooms, their place is taken by other paintings in the collection. Due to the glare of the lighting, some paintings placed in the upper row, under the ceilings, can be difficult to see. But the time comes to change the exposition, and these canvases are moved to a more advantageous site for inspection, so that tourists, when they re-visit the museum, have every chance to rediscover the works of their favorite artists.</h2>
            </div>

            <div class="ol2">
            <img src="ol2.jpg" height="400px" width="600px" class="ol2">
            <h2> The Sistine Madonna</h2>
            <h3> Raphael painted the image of the Virgin Mary with the infant Jesus in her arms around 1513 for the Benedictine monastery of St. Sixtus in Piacenza. The heavenly patrons of Piacenza, St. Barbara and St. Sixtus, bow before the Madonna stepping out of the clouds. According to legend, the model for the image of the Queen of Heaven was the beautiful Fornarina, the model and lover of the artist. The characters of the legends also became two charming little angels, gazing admiringly at the Madonna. It is said that Raphael was inspired by the images of these cherubs by village children who were fascinated by the display case with sweets in the city bakery.</h3>
            <h3> For more than two centuries, the painting hanging over the altar of a provincial monastery was not widely known. But one day she was discovered by agents of the King of Saxony, who bought works of art for him all over Europe. Elector Augustus III negotiated with Pope Benedict XIV for several years, seeking permission to buy and export this painting to Dresden. Finally, in 1754, the negotiations were crowned with success. The crowned connoisseur of painting purchased a Raphael painting for a colossal sum corresponding to 70 gold bars weighing one kilogram each. It was the largest amount ever paid for an artwork. A high-quality copy took the place of the painting above the monastery altar.</h3>
            </div>

            <div class="ol3">
            <img src="ol3.jpg" height="400px" width="700px" class="ol3">
            <h2> The Dresden Altar</h2>
            <h3> In April 1496, the Saxon Elector Frederick III visited Nuremberg. During this visit, he commissioned several works by the great German artist Albrecht Durer. In the Dresden Gallery you can get acquainted with some of them. There are Christian–themed paintings designed for the royal chapel and painted on wooden panels, an altar triptych called the Dresden Altar, and seven panels with allegorical images of the seven deadly sins.</h3>
            </div>

            <div class="ol4">
            <img src="ol4.jpg" height="500px" width="400px" class="ol4">
            <h2> Girl with a Letter</h2>
            <h3> "Girl with a Letter" is a painting by the artist Jan Vermeer, one of the greatest painters of the Golden Age of Dutch Art. The work was created presumably in 1657. It is known that the painting was sold at an Amsterdam auction in 1772 for 110 florins.</h3>
            <h3> The painting depicts a girl reading a letter from a loved one at an open window. Why is it from him? After all, nothing in the picture indicates the content of the message, except for a slight smile on the lips of the reader. The hint of a love story is hidden under a layer of paint. The study of the painting in X-rays testified that the painter planned to depict Cupid outside the window, but for some reason did not paint the god of love.</h3>
            <h3> The artist possessed the secret of a special image of light falling from several sources and highlighting the central character of the plot, focusing the viewer's attention on the girl's face, turned in profile.</h3>
            <h3> Another interesting observation: this painting by Jan Vermeer depicts the same room as his painting "Sleeping Girl", kept at the Metropolitan Museum of Art in New York. It seems that the fruit bowl on the table is also used in both paintings.</h3>
            </div>

            <div class="ol5">
            <img src="ol5.jpg" height="400px" width="700px" class="ol5">
            <h2> The Chocolate maker</h2>
            <h3> One of the most famous paintings by the artist Jean-Etienne Lyotard depicts a young German maid carrying a cup of hot chocolate on a tray. She is known as the "Viennese Chocolatier" or simply the "Chocolatier". The painting was painted in 1744 on a sheet of parchment in tempera and exhibited in one of the galleries of Venice. The following year it was bought for the Dresden Assembly by Count Francesco Algarotti, a confidant of the Saxon elector. In the cover letter, the count wrote: "This is the most amazing pastel I've ever seen."</h3>
            <h3> Today, the charming "Chocolatier" attracts attention with a creative presentation in front of the audience. She has a hall assigned to her, at the entrance to which the characteristic aroma of hot chocolate is felt.</h3>
            </div>

        </section>
    </main>

    <footer class="footer">
        <p>&copy;Art galleries, 2024</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>