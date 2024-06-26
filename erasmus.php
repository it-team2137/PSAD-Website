<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" id="pagestyle" href="styles/style.css">
    <link rel="preload" href="/styles/dark.css" as="style">
    <style>
.erasmus{
    justify-content: flex-start;
}
.erasmus > header {
    font-size: 1.4rem;
    text-align:center;
    align-self:center;
    width:fit-content;
    margin-bottom: 1vh;
}
.erasmus > header::first-line {
    font-size: 2rem;
    font-weight:bold;
    font-family:Montserrat-Bold;
}
article {
    display: flex;
    flex-direction: row;
    width: 100%;
    height: 20%;
    align-items: center;
    justify-content: space-evenly;
}

.img {
    height:25%;
    width:25%;
    object-fit:contain;
    align-self:flex-end; 
}
article > .text {
    text-align: center;
    width: 30vw;
}
    </style>
</head>
<?php include_once 'navbar.php' ?>
<main class="wraper">
<div class="erasmus flex">

    <header class="text">
        Welcome to the “Erasmus” Section! <br>
        Paphos Studios of Art and Design
    </header>

    <article>
        <div class="text">
            At Paphos Studios of Art and Design, we offer an exciting opportunity for students, teachers,
            and artists to immerse themselves in our vibrant art community through our Erasmus exchange program.
            By participating in this program, individuals have the chance to engage in our dynamic activities and projects, all while working in our newly renovated studios for placements of up to two months.
        </div>
        <img class="img" src="images\erasmus\art-dog.jpg">
    </article>
    
    <article>
        <img class="img" src="images\erasmus\orchids.jpg">
        <div class="text">
            Our center operates in various areas of expertise, including fine arts, painting, sculpture,
            illustration, animation, graphic design, IT, photography, videography, mural art, and more.
            Participants in the Erasmus program will have the unique opportunity to collaborate and work alongside some of the city’s best
            professionals and artists, gaining invaluable experience and insight into the local art scene.
        </div>
    </article>

    <article>
        <div class="text">
            In addition to studio work, participants will also have the opportunity to explore
            and experience the rich cultural heritage of Paphos through organized cultural trips to archaeological sites,
            museums, and galleries. These excursions aim to familiarize participants with the cultural and historical significance of the region,
            enriching their overall experience.
        </div>
        <img class="img" src="images\erasmus\city.jpg">
    </article>
    <article>
        <img class="img" src="images\erasmus\oranges.jpg">
        <div class="text">
            To ensure a comfortable and stress-free experience,
            our team and associates handle all aspects of transportation, accommodation,
            and amenities throughout the duration of the program. From arranging comfortable lodging to
            providing support for navigation and daily living, we strive to create a nurturing and supportive environment for all
            participants.
        </div>
    </article>

    <article>
        <div class="text">
            Join us at Paphos Studios of Art and Design and embark on a transformative journey filled with artistic inspiration,
            cultural exploration, and meaningful connections. Apply now for an unforgettable experience in the heart
            of Cyprus’s thriving art community!
        </div>
        <img class="img" src="images\erasmus\building.jpg">
    </article>
</div>

<?php include_once 'footer.php' ?>
</main>
</body>
</html>