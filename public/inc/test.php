<?php

// Create array containing abbreviations of days of week.
$daysOfWeek = array('Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sat');

// What is the first day of the month in question?
$firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);

// How many days does this month contain?
$numberDays = date('t', $firstDayOfMonth);

// Retrieve some information about the first day of the
// month in question.
$dateComponents = getdate($firstDayOfMonth);

// What is the name of the month in question?
$monthName = $dateComponents['month'];

// What is the index value (0-6) of the first day of the
// month in question.
$dayOfWeek = $dateComponents['wday'];

$currentDay = 1;

$event = array();
$event[13] = "9000";
$event[17] = "14000";
$event[23] = "3000";
$event[29] = "8000";
$event[1] = "8000";

$month = str_pad($month, 2, "0", STR_PAD_LEFT);

while ($currentDay <= $numberDays) {

     // Seventh column (Saturday) reached. Start a new row.

     if ($dayOfWeek == 7) {

          $dayOfWeek = 0;
          $calendar .= "</tr><tr>";
     }

     $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);

     $date = "$year-$month-$currentDayRel";

     if ($date == date("Y-m-d")) {
          $calendar .= "<td class='day today' rel='$date'><span class='today-date'>$currentDay</span></td>";
     } else {
          $calendar .= "<td class='day' rel='$date'><span class='day-date'>$currentDay " . (isset($event[$currentDay * 1]) ? "<BR><span class='span-price'>" . number_format($event[$currentDay]) : "</span>") . "</span></td>";
     }

     // Increment counters

     $currentDay++;
     $dayOfWeek++;
}

function build_calendar($month, $year, $dateArray)
{

     // Create array containing abbreviations of days of week.
     $daysOfWeek = array('Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sat');

     // What is the first day of the month in question?
     $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);

     // How many days does this month contain?
     $numberDays = date('t', $firstDayOfMonth);

     // Retrieve some information about the first day of the
     // month in question.
     $dateComponents = getdate($firstDayOfMonth);

     // What is the name of the month in question?
     $monthName = $dateComponents['month'];

     // What is the index value (0-6) of the first day of the
     // month in question.
     $dayOfWeek = $dateComponents['wday'];

     // Create the table tag opener and day headers

     $calendar = "<table class=''>";
     $calendar .= "<caption class='flex-auto text-sm font-semibold text-gray-900'>$monthName $year</caption>";
     $calendar .= "<tr>";

     // Create the calendar headers

     foreach ($daysOfWeek as $day) {
          $calendar .= "<th class='header'>$day</th>";
     }

     // Create the rest of the calendar

     // Initiate the day counter, starting with the 1st.

     $currentDay = 1;

     $calendar .= "</tr><tr>";

     $event = array();
     $event[13] = "9000";
     $event[17] = "14000";
     $event[23] = "3000";
     $event[29] = "8000";
     $event[1] = "8000";

     // The variable $dayOfWeek is used to
     // ensure that the calendar
     // display consists of exactly 7 columns.

     if ($dayOfWeek > 0) {
          $calendar .= "<td colspan='$dayOfWeek' class='not-month'>&nbsp;</td>";
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

          if ($date == date("Y-m-d")) {
               $calendar .= "<td class='day today' rel='$date'><span class='today-date'>$currentDay</span></td>";
          } else {
               $calendar .= "<td class='day' rel='$date'><span class='day-date'>$currentDay " . (isset($event[$currentDay * 1]) ? "<BR><span class='span-price'>" . number_format($event[$currentDay]) : "</span>") . "</span></td>";
          }

          // Increment counters

          $currentDay++;
          $dayOfWeek++;
     }

     // Complete the row of the last week in month, if necessary
     if ($dayOfWeek != 7) {
          $remainingDays = 7 - $dayOfWeek;
          $calendar .= "<td colspan='$remainingDays' class='not-month'>&nbsp;</td>";
     }

     $calendar .= "</tr>";

     $calendar .= "</table>";

     return $calendar;
}

// function build_previousMonth($month, $year, $monthString)
// {
//      $prevMonth = $month - 1;

//      if ($prevMonth == 0) {
//           $prevMonth = 12;
//      }

//      if ($prevMonth == 12) {
//           $prevYear = $year - 1;
//      } else {
//           $prevYear = $year;
//      }

//      $dateObj = DateTime::createFromFormat('!m', $prevMonth);
//      $monthName = $dateObj->format('F');

//      return "<div style='width: 33%; display:inline-block;'><a href='?m=" . $prevMonth . "&y=" . $prevYear . "'><- " . $monthName . "</a></div>";
// }

// function build_nextMonth($month, $year, $monthString)
// {

//      $nextMonth = $month + 1;

//      if ($nextMonth == 13) {
//           $nextMonth = 1;
//      }

//      if ($nextMonth == 1) {
//           $nextYear = $year + 1;
//      } else {
//           $nextYear = $year;
//      }

//      $dateObj = DateTime::createFromFormat('!m', $nextMonth);
//      $monthName = $dateObj->format('F');

//      return "<div style='width: 33%; display:inline-block;'>&nbsp;</div><div style='width: 33%; display:inline-block; text-align:right;'><a href='?m=" . $nextMonth . "&y=" . $nextYear . "'>" . $monthName . " -></a></div>";
// }

?>
<?php

$m = "";

if ($m == "") {

     $dateComponents = getdate();
     $month = $dateComponents['mon'];
     $year = $dateComponents['year'];
} else {

     $month = $m;
     $year = $y;
}

// echo build_previousMonth($month, $year, $monthString);
//echo build_nextMonth($month,$year,$monthString);
// echo build_calendar($month, $year, $dateArray);

// Call the function and get the month name
// $monthName = build_calendar($month, $year, $dateArray);
?>


<style>
     caption {
          font-size: 12pt;
          margin: 10px 0 20px 0;
          font-weight: 700;
     }

     table.calendar {
          width: 400px;
          border: 0px solid #ccc;
          box-shadow: 0px 0px 10px 10px #efefef;
     }

     td.day {
          width: 14%;
          height: 40px;
          border: 0px solid #000;
          vertical-align: top;
          text-align: center;
     }

     td.day span.day-date {
          font-size: 12pt;
          font-weight: 700;
          text-align: center;
     }

     //th.header{background-color: #003972; color: #fff; font-size: 12pt; padding: 5px;}
     th.header {
          background-color: #fff;
          color: #000;
          font-size: 12pt;
          padding: 5px;
     }



     td.day span.today-date {
          font-size: 12pt;
          font-weight: 700;
          text-align: center;
     }

     .span-price {
          font-size: 8pt;
          font-weight: bold;
          color: blue;
     }
</style>


<div class="bg-white pr-5">
     <div>
          <div class="">
               <h2 class="flex-auto text-sm font-semibold text-gray-900">
                    <?php echo $monthName . " " . $year; ?>
               </h2>
          </div>
          <div class="mt-10 grid grid-cols-7 text-center text-xs leading-6 text-gray-500">
               <?php
               // Loop through the daysOfWeek array
               foreach ($daysOfWeek as $day) {
                    echo "<div>$day</div>";
               }
               ?>
          </div>
          <div class="mt-2 grid grid-cols-7 text-sm">
               <div class="py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200">
                         <!-- <time datetime="2021-12-27">27</time> -->
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">27</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>

               <div class="py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2021-12-28">28</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>

               <div class="py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2021-12-29">29</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>

               <div class="py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2021-12-30">30</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>

               <div class="py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2021-12-31">31</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>

               <div class="py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-01">1</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>

               <div class="py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-02">2</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>

               <div class="border-t border-gray-200 py-4 ">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200 ">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">3</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>

               </div>

               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">4</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>

               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">5</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>

               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">6</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>

               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">7</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>

               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">8</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">9</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">10</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">11</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">12</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">13</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">14</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">15</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">16</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">17</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">18</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">19</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">20</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">21</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">22</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">23</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">24</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">25</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">26</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">27</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">28</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">29</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>
               <div class="border-t border-gray-200 py-4">
                    <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                         <div class="flex flex-col">
                              <time datetime="2022-01-03">30</time>
                              <span class="text-[10px]">1750</span>
                         </div>
                    </button>
               </div>



          </div>
     </div>

</div>





<?php
// Display the calendar
// echo build_calendar($month, $year, $dateArray);
?>