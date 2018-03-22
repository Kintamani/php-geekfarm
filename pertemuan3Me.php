<?php
function bubble_Sort($my_array )
{
    $temp =0;
  do
  {
    $swapped = false;
      
    for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
    {
      if( $my_array[$i] > $my_array[$i + 1] )
      {
        $temp = $my_array[$i];
        $my_array[$i] = $my_array[$i + 1];
        $my_array[$i + 1]=$temp;
        
        $swapped = true;
      }
    
      }
  }
  while( $swapped );
return $my_array;
}
 $test_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ',$test_array );
echo "\nSorted Array\n:";
echo implode(', ',bubble_Sort($test_array)). PHP_EOL;
?>