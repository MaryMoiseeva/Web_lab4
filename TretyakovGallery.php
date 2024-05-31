<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art galleries</title>
    <link rel="stylesheet" href="TretyakovGallery.css"> 
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
            <h2 id="name">Tretyakov Gallery</h2>
        </section>

        <section class="list">
            <div class="tre1">
            <img src="tre1.jpg" height="400px" width="600px" class="tre1">
            
            <?php // подгрузка из базы данных
                require 'script.php';
                foreach($tretyakovGallery as $row1)  { 
                echo '<h3> Location: ' . $row1['city'] . '</h3>';
                echo '<h3> The founder of the museum: ' . $row1['founder'] . '</h3>';
                echo '<h3> Date of foundation: ' . $row1['year'] . '</h3>';
                echo '<h3> ' . $row1['inform'] . '</h3>';
                }
            ?>
            </div>

            <div class="text">
            <h2> The main objectives of the museum</h2>
            <h3> The Tretyakov Gallery, as one of the most famous cultural institutions in Russia, proclaims four main goals of its activities: to preserve, explore, present and popularize Russian art, thereby forming a national cultural identity and instilling in modern generations an understanding of the important role that art plays as the embodiment of achievements and expression of the civilization of our society.</h2>
            </div>

            <div class="text2">
            <h2> Buildings of the Tretyakov Gallery</h2>
            </div>

            <div class="tre2">
            <img src="tre2.jpg" height="400px" width="500px" class="tre2">
            <h3> The main building of the Tretyakov Gallery at 10 Lavrushinsky Lane in Zamoskvorechye used to belong to the founder's family – his parents and himself lived in this house. Subsequently, the merchant's estate was rebuilt several times. The gallery also occupies buildings adjacent to the main building. The facade that we can see today was built at the beginning of the last century, the author of the sketches was V. M. Vasnetsov.</h3>
            <h3> The style of the building is neo–Russian, and this is no coincidence: it was also intended to emphasize the fact that the museum is a repository of samples of Russian art. On the same main facade, visitors can see a bas–relief image of the capital's coat of arms - St. George with a snake. And on both sides of it there is a ceramic polychrome frieze, very elegant. A large lettering with the names of Peter and Sergei Tretyakov, both donors of the collection, is made up of a single whole with the frieze.</h3>
            </div>

            <div class="tre3">
            <img src="tre3.jpg" height="400px" width="700px" class="tre3">
            <h3> In 1930, an additional room was erected to the right of the main building, designed by architect A. Shchusov. The Engineering Building is located to the left of the former merchant estate. In addition, the Tretyakov Gallery owns a complex on Krymsky Val, where, in particular, exhibitions of contemporary art are held. The exhibition hall in Tolmachi, the museum-temple of St. Nicholas, as well as the museum of A.M. Vasnetsov, the house-museum of the national artist P. D. Korin and the museum-workshop of the sculptor A. S. Golubkina also belong to the Tretyakov Gallery.</h3>
            </div>

            <div class="text3">
            <h2> What to see at the Tretyakov Gallery</h2>
            </div>

            <div class="tre4">
            <img src="tre4.jpg" height="400px" width="600px" class="tre4">
            <h3> The modern collection includes more than 170 thousand works of Russian art, and this is far from the limit: it continues to be replenished thanks to artists, donations from individuals, various organizations and heirs of outstanding artists who bring various works as gifts. The exposition is divided into sections, each covering a specific historical period. Let's call them: ancient Russian art, starting from the XII and ending with the XVIII century; painting of the XVII — first half of the XIX centuries; painting of the second half of the XIX century; Russian Russian graphics from the XIII to the XIX centuries, as well as Russian sculpture of the same period.</h3>
            </div>

            <div class="tre5">
            <img src="tre5.jpg" height="400px" width="700px" class="tre5">
            <h3> So, in the section of ancient Russian art, the works of both famous icon painters and those who remained nameless are presented. Among the famous names, we will name Andrei Rublev, Feofan the Greek, Dionysius.</h3>
            </div>

            <div class="tre6">
            <img src="tre6.jpg" height="400px" width="700px" class="tre6">
            <h3> In the halls dedicated to the masterpieces of art of the XVIII – first half of the XIX century, paintings by such outstanding masters as F. S. Rokotov, V. L. Borovikovsky, D. G. Levitsky, K. L. Bryullov, A. A. Ivanov are exhibited.</h3>
            </div>

            <div class="tre7">
            <img src="tre7.jpg" height="400px" width="600px" class="tre7">
            <h3> The section of Russian realistic art dating from the second half of the 1800s, presented in all its completeness and diversity, also attracts attention. In this part of the Tretyakov Gallery you can see outstanding works by I. E. Repin, V. I. Surikov, I. N. Kramskoy, I. I. Shishkin, I. I. Levitan and many other masters of the brush. Among the most famous and discussed is the famous "Black Square" by Kazimir Malevich.</h3>
            <h3> Turning to the bright collection of works of the late XIX – early XX century, you will see the immortal work of V. A. Serov and M. A. Vrubel, as well as the masters of the art associations that existed at that time: the Union of Russian Artists, The World of Art and the Blue Rose.</h3>
            </div>

            <div class="tre8">
            <img src="tre8.jpg" height="400px" width="600px" class="tre8">
            <h3> It should be said about that part of the exposition, which is known as the "Treasury". There is literally an invaluable collection of artistic products made of precious stones and precious metals, made from the XII and ending with the XX century.</h3>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy;Art galleries, 2024</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>