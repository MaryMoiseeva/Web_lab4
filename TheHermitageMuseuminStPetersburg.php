<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art galleries</title>
    <link rel="stylesheet" href="TheHermitageMuseuminStPetersburg.css"> 
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
            <h2 id="name">The Hermitage Museum in St.Petersburg</h2>
        </section>

        <section class="list">
        <div class="the1">
            <img src="the1.png" height="400px" width="800px" class="the1">
            
            <?php // подгрузка из базы данных
                require 'script.php';
                foreach($hermitageMuseum as $row3)  { 
                echo '<h3> Location: ' . $row3['city'] . '</h3>';
                echo '<h3> The founder of the museum: ' . $row3['founder'] . '</h3>';
                echo '<h3> Date of foundation: ' . $row3['year'] . '</h3>';
                echo '<h3> ' . $row3['inform'] . '</h3>';
                }
            ?>
            </div>

            <div class="text">
            <h2> Museum collections</h2>
            <h3> It is physically impossible to view the entire collection in one visit, so visitors are offered to independently develop routes in accordance with their interests. From an architectural point of view, the interiors of the Winter Palace are the most attractive, picturesque masterpieces are concentrated in the halls of the Bolshoi and New Hermitage.</h2>
            </div>

            <div class="the2">
            <img src="the2.png" height="400px" width="600px" class="the2">
            <h2> The Winter Palace</h2>
            <h3> The main exposition of the first floor of the Winter Palace is ancient art and archeology, the second – paintings of England and France of the XVI-XVIII centuries and interiors of various eras, the third – classical art of Asian countries. The halls of the second floor deserve special mention: the Throne Room, the Alexandrovsky, the Bolshoi, the Concert, the chamber rooms of Empress Maria Alexandrovna and the family of the last emperor.</h3>
            </div>

            <div class="the3">
            <img src="the3.png" height="400px" width="600px" class="the3">
            <h2> The Small Hermitage</h2>
            <h3> The building is connected to the Winter Palace by the Sivkov passage with a platform where ancient Roman mosaics, sarcophagi and reliefs are stored. The name of the hall perpetuates the name of Alexander Sivkov, the architect of the Hermitage of the Soviet period, who united all the buildings into a common museum space. The pavilion hall, whose windows overlook the Neva River, was decorated in the middle of the XIX century by a Stackenschneider, who did not spare gilding and crystal for the walls and ceiling. Four copies of the Bakhchisarai fountain, mosaics and a Peacock clock are on display here. The bronze clockwork machine made by English masters of the XVIII century is still functioning – its "singing" can be heard every Wednesday, at 19 o'clock. The Romanov Gallery, on the side of the Winter Palace, houses medieval exhibits decorated with enamels, wood and ivory carvings, and earthenware. The gallery brings visitors to the hall of Dutch and Flemish paintings. In the opposite Romanovskaya, Petrovsky Gallery, German paintings and sculptures of the XV-XVIII centuries are kept.</h3>
            </div>

            <div class="the4">
            <img src="the4.png" height="400px" width="600px" class="the4">
            <h2> The Old (Big) Hermitage</h2>
            <h3> A Soviet staircase made of white and pink marble leads from the first floor of the Old Hermitage to the second, exhibition floor. It was built according to the project of Stackenschneider in the middle of the XIX century on the site of the former Oval Hall, from which there was a spirit-lifting ceiling with images of the goddess Minerva and Russian youth. The name, contrary to popular belief, has nothing to do with the USSR: the State Council was located in this building back in the XIX century.</h3>
            </div>

            <div class="the5">
            <img src="the5.png" height="400px" width="700px" class="the5">
            <h2> The New Hermitage</h2>
            <h3> The collection of the New Hermitage contains exhibits from the epochs of Antiquity, Renaissance and Modern Times. You can also see a collection of weapons from different centuries here. The very history of the construction of the New Hermitage building also deserves attention. It was the first in the country specially designed for a museum. Since there was no suitable place left on the Neva River embankment, the main facade of the New Hermitage faces Millionnaya Street. It is decorated with the famous powerful granite figures of Atlanteans by sculptor Terebenev.</h3>
            </div>

            <div class="the6">
            <img src="the6.png" height="400px" width="600px" class="the6">
            <h2> Hermitage Theatre</h2>
            <h3> The building was erected on the site of the former Winter Palace of Peter I. The architects managed to restore part of the basement and ground floor in the rooms under the stage. You can view the study, the dining room and the front yard with Peter the Great's sleigh from the side of the Palace Embankment. The interior of the theater's foyer is decorated in grayish-blue tones, emphasizing the splendor of heavy chandeliers, the sophistication of medallions, stucco and ceiling paintings. In the auditorium, as in an ancient amphitheater, there are 6 semicircular rows of benches. Here, in acoustic conditions ideal for chamber opera, performances and concerts are held by its own orchestra and singers invited from the Mariinsky Theatre.</h3>
            </div>

            <div class="the7">
            <img src="the7.png" height="400px" width="600px" class="the7">
            <h2> Menshikov Palace</h2>
            <h3> The Baroque building, the first capital structure of St. Petersburg made of stone, stands on the University Embankment. While Menshikov was in power, the palace, the center of a huge estate, hosted the main entertainment events of the royal court. Subsequently, the unclaimed building deteriorated to such an extent that in the twentieth century, reconstruction lasted for several decades. Some rooms have not been restored so far. After the transfer of the building to the Hermitage in 1981, it was decided to recreate the interiors of the first third of the XVIII century – the suite of state rooms, the Walnut Study.</h3>
            </div>

            <div class="the8">
            <img src="the8.png" height="400px" width="600px" class="the8">
            <h2> The building of the General Staff</h2>
            <h3> The latest acquisition of the museum is two buildings united by a semicircular triumphal arch, the creation of architect Carlo Rossi in honor of the victory of the Russian Empire in the war of 1812. The new department of the museum is a strict three-storey building with elongated facades, the monotony of which is broken only by snow-white Corinthian colonnades. For many years, the General Staff performed only an official function, now representatives of military departments still sit in part of the building. At the moment, the halls of the building are being reconstructed in accordance with the tasks of the museum – part of the collections of European paintings from the Winter Palace will move here.</h3>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy;Art galleries, 2024</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>