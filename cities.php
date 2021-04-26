<?php
/*Create a function that reconstructs the Tour de France from the individual stages (legs of the race) and prints the cities in order. Each stage of the race will be given as a tuple of two cities, with the initial city on the left and the finish line of the stage on the right. The tuples may be given in any order; your function must reconstruct the correct order before printing the cities in the race.

Example:
Given set of tuples OUT OF ORDER:
[('Bergerac','Pau'), ('Nice','Montpellier'), ('Pau','Paris'), ('Marseille','Nice'), ('Montpellier','Bergerac')]
The finish city (2nd element) of one leg of the race (tuple) is the beginning (1st element) of another leg of the race.
Expected result:
Marseille, Nice, Montpellier, Bergerac, Pau, Paris*/


$path = array ( 'Bergerac' => 'Pau',
                'Nice'=> 'Montpellier',
                'Pau'=>'Paris',
                'Marseille'=>'Nice',
                'Montpellier'=>'Bergerac'
                );
$path2 = array_flip($path);
$start_city ="Pau";
while (isset($path2[$start_city])) {
  $start_city = $path2[$start_city];
}
echo $start_city. ",";
while (isset($path[$start_city])) {
  echo $path[$start_city] . ",";
  $start_city = $path[$start_city];
}

?>