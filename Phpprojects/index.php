<?php
$people=[ 
['name'=>'Reet', 'age'=>25],
['name'=>'Abhi', 'age'=>5],
['name'=>'Nishant', 'age'=>15],
['name'=>'Rudra', 'age'=>23],
['name'=>'Taran', 'age'=>34],
['name'=>'Rohan', 'age'=>25],
['name'=>'Pari', 'age'=>22],
['name'=>'Shagun', 'age'=>28],
['name'=>'Mohit', 'age'=>9],
['name'=>'Adi', 'age'=>3],
];




$adult=0;
$child=0;
$canapply=[];
foreach ($people as $person)
{
   $age=$person['age'];
   if($age>=18)
   {
        $adult++;

           if($age>=22 && $age<=30)
           {
              $canapply[]=$person;

           }
    }
    else{
        $child++;
    }

}
echo "There are  $adult adult in the community" .PHP_EOL;
echo"<br>";
echo "There are  $child child in the community" .PHP_EOL;
echo"<br>";
echo "This is the list of people who can apply for job" .PHP_EOL;
print_r($canapply);

?>

