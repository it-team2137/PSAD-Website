<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" id="pagestyle" href="styles/style.css">
    <link rel="preload" href="/styles/dark.css" as="style">
    <style>
      .courses {
        display:flex;
        flex-direction: column;
        align-items: center;
      }
      .bold {
        font-family: Montserrat-Bold;
        font-weight:bold;
      }
      .courses > .text {
      font-size: 1.4rem;
      padding: 1vw;
      text-align:center;
      align-self:center;
      width: 30vw;
      }
      
    </style>
    
</head>
<body onload="langChange(); mode()">
<?php include_once 'navbar.php' ?>
<main class="wraper">
<section class="flex center" style="margin-top:6vh;">
  <div class="flex"  style="width:80%;">
    <div class="text-up" data-translatable>Courses // ΜΑΘΗΜΑΤΑ</div>
      <div class="flex center">
        <div class="text c-w-item">
        <b data-translatable>Art Courses // Μαθήματα Τέχνης</b><div data-translatable>for all ages and levels. Painting with various techniques, drawing with pencil, charcoal and colour,
  engraving, photography, graffiti, three-dimensional constructions (sculpture, installations, clay, mixed media,
  cementography)... // για όλες τις ηλικίες και βαθμίδες. Ζωγραφική με διάφορες τεχνικές, σχέδιο με μολύβι,
  κάρβουνο και χρώμα, χαρακτική, φωτογραφία, graffiti, τρισδιάστατες κατασκευές (γλυπτική,
  πηλοπλαστική, ανάμεικτα υλικά, τσιμεντογραφία)...
        </div>
        </div>
        <div class="text c-w-item" data-translatable>
  Familiarity with theory and Art history, important artists, and their work. // Γνωριμία με θεωρία και ιστορία της Τέχνης, μεγάλους καλλιτέχνες και το έργο τους.
        </div>
      </div>
      <div class="flex center">
        <div class="text c-w-item">
        <b data-translatable>Freehand / Perspective Drawing Courses for 2nd and 3rd class of Lyceum: // Μαθήματα Ελευθέρου/ Προοπτικού Σχεδίου για Β ́και Γ τάξη Λυκείου:</b>
          <div data-translatable>Understanding of space, drawing
with vanishing points, correct perspective, surrounding space, figures, colour and architectural elements. // Ορθή αντιμετώπιση του
  χώρου, σχεδιασμός με σημεία φυγής, ορθή προοπτική, περιβάλλοντας χώρος, φιγούρες, χρώμα και
  αρχιτεκτονικά στοιχεία.
        </div>
        </div>
        <div class="text c-w-item" data-translatable>
        In addition, still life practising with the pencil. // Επιπλέον γίνεται εξάσκηση στη νεκρή φύση με μολύβι.
        </div>
      </div>
    </div>
</section>

<?php include_once 'footer.php' ?>
</main>
</body>
</html>