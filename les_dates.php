<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les dates php</title>
</head>
<body>
    <?php 
    // ça pas marche snif
        // // bout de code de Jon
        // setlocale(LC_TIME,"fr");
        // $d = ucfirst(strftime("%A %d %B %Y"));
        // echo "$d";
    ?>
<h1>Php</h1>
<h2>Les dates</h2>
<h3>Ex 1, 2</h3>
    <?= date('d/m/o')."<br>".date('d-m-o') ?>
<h3>Ex 3</h3>
    <?= strftime('%A %d %B %Y')."<br>" ?>
<h3>Ex 4</h3>
    <?= time()."<br>";
        mktime()."<br>";
        mktime(15, 0, 0, 8, 2, 2016); 
    ?>
<h3>Ex 5</h3>
    <?php   
        $datediff = time() - strtotime("16 may 2016");
        $hours = round($datediff / (60 * 60 * 24));
        // echo mktime();
        echo "Nombre de jours = ".$hours."<br>"; 
    ?>
<h3>Ex 6</h3>
    <?= cal_days_in_month(CAL_GREGORIAN, 2, 2017)."<br>"; ?>
<h3>Ex 7, 8</h3>
    <?= "Il y a 22 jours = ".strftime('%d/%m/%Y', mktime(0, 0, 0, date("m"), date("d")-22, date("Y")))."<br>";
        "Dans 20 jours = ".strftime('%d/%m/%Y', mktime(0, 0, 0, date("m"), date("d")+20, date("Y"))); 
    ?>

<!-- build function / https://css-tricks.com/snippets/php/build-a-calendar-table/ -->

<?php
function build_calendar($month,$year,$dateArray) {
     // Create array containing abbreviations of days of week.
     $daysOfWeek = array('S','M','T','W','T','F','S');
     // What is the first day of the month in question?
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
     // How many days does this month contain?
     $numberDays = date('t',$firstDayOfMonth);
     // Retrieve some information about the first day of the
     // month in question.
     $dateComponents = getdate($firstDayOfMonth);
     // What is the name of the month in question?
     $monthName = $dateComponents['month'];
     // What is the index value (0-6) of the first day of the
     // month in question.
     $dayOfWeek = $dateComponents['wday'];
     // Create the table tag opener and day headers
     $calendar = "<table class='calendar'>";
     $calendar .= "<caption>$monthName $year</caption>";
     $calendar .= "<tr>";
     // Create the calendar headers
     foreach($daysOfWeek as $day) {
          $calendar .= "<th class='header'>$day</th>";
     } 
     // Create the rest of the calendar
     // Initiate the day counter, starting with the 1st.
     $currentDay = 1;
     $calendar .= "</tr><tr>";
     // The variable $dayOfWeek is used to
     // ensure that the calendar
     // display consists of exactly 7 columns.
     if ($dayOfWeek > 0) { 
          $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>"; 
     }
     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
     while ($currentDay <= $numberDays) {
          // Seventh column (Saturday) reached. Start a new row.
          if ($dayOfWeek == 7) {
               $dayOfWeek = 0;
               $calendar .= "</tr><tr>";
          }
          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          $date = "$year-$month-$currentDayRel";
          $calendar .= "<td class='day' rel='$date'>$currentDay</td>";
          // Increment counters
          $currentDay++;
          $dayOfWeek++;
     }
     // Complete the row of the last week in month, if necessary
     if ($dayOfWeek != 7) { 
          $remainingDays = 7 - $dayOfWeek;
          $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>"; 
     }
     $calendar .= "</tr>";
     $calendar .= "</table>";
     return $calendar;
}
?> 
<!-- Get POST and build function -->
<h3>TP</h3>
<form action="les_dates.php" method="post">
    <select name="month" id="month">
        <option value="01">Janvier</option>
        <option value="02">Février</option>
        <option value="03">Mars</option>
        <option value="04">Avril</option>
        <option value="05">Mai</option>
        <option value="06">Juin</option>
    </select>
    <select name="year" id="year">
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
    </select>
    <input type="submit" value="Voir calendrier">
</form>
<?php
    if(isset($_POST["month"]) && isset($_POST["year"])) {
        $dateComponents = getdate();
        $month = $_POST["month"]; 			     
        $year = $_POST["year"]; 
        echo build_calendar($month,$year,"");
    } else {
        echo build_calendar(2, 2018,"");
    }
?>
</body>
</html>