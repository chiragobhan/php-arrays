# PHP Arrays
Sort an array of temperatures in ascending order and retrieve 5 coolest and 5 warmest temperatures.
  
### Initialize array
`$array = array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78, 68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83);`  
  
### Print array
`print_r($array);`  
  
#### Output:  
![printArray](https://user-images.githubusercontent.com/32812640/82562015-0a62d080-9b92-11ea-8490-95c4582b636c.PNG)  
  
### Sort array in ascending order
<pre>
for ($j = 0; $j < count($array); $j++) {
  for ($i = 0; $i < count($array) - 1; $i++) {
    if ($array[$i] > $array[$i + 1]) {
      $temp = $array[$i + 1];
      $array[$i + 1] = $array[$i];
      $array[$i] = $temp;
    }
  }
} 
</pre>  
  
### Average of all tempratures
<pre>
$total = 0;
foreach ($array as $key => $value) {
  $total = $total + $value;
}
echo ($total / count($array)) . ' is the average of the temperatures.';
</pre>  
  
#### Output:  
![average](https://user-images.githubusercontent.com/32812640/82561574-3d589480-9b91-11ea-9c6c-ee15a22c8802.PNG)  
  
### Five coolest tempratures
<pre>
$max = count($array);  
for ($i = $max - 5; $i < $max; $i++) {  
  echo "$array[$i]&#8457; temperature";  
}
</pre>
  
#### Output:  
![coolest](https://user-images.githubusercontent.com/32812640/82561782-958f9680-9b91-11ea-8389-11f4e350b07e.PNG)  

  
### Five warmest tempratures
<pre>
for ($i = 0; $i < 5; $i++) {  
  echo "$array[$i]&#8457; temperature";  
}
</pre>
  
#### Output:  
![warmest](https://user-images.githubusercontent.com/32812640/82561725-798bf500-9b91-11ea-8094-924e9d476215.PNG)  
