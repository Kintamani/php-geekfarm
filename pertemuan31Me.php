<?php 
//1
	function colorText()
		{
			$colors = array('white', 'green', 'red', 'blue', 'black');		
			echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the".$colors[2]." carpet, the" .$colors[1]." lawn, the ".$colors[0]." house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
		}
		/*echo colorText();*/

	//2
		function colorList(){
			$color = array("white", "green", "blue");
			$panjang = count($color);
			for($i = 0; $i < $panjang; $i++) {
    	echo "<li>".$color[$i]."</li>";
			}
		}
		/*echo colorList();*/

	//3
		function city(){
			$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg","Belgium"=> "Brussels", "Denmark"=>"Copenhagen","Finland"=>"Helsinki", "France" => "Paris","Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" =>"Berlin", "Greece" => "Athens", "Ireland"=>"Dublin","Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon","Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius","Czech Republic"=>"Prague", "Estonia"=>"Tallin","Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta","Austria" => "Vienna", "Poland"=>"Warsaw") ;
				foreach($ceu as $key => $value) {
    		echo "The capital of " . $key . " is " . $value;
    		echo "<br>";
				}
		}
		/*echo city();*/

		//5
			function colorKey(){
				$color = array(4 => 'white', 6 => 'green', 11=> 'red');
    			echo $color[4];
    			echo "<br>";
			}
			/*echo colorKey();*/

		//7
			function arrayInsert(){
				$original = array( '1','2','3','4','5' );
				echo 'Original array : '."\n";
				foreach ($original as $x){
					echo "$x ";
				}
				$inserted = '$';
				array_splice( $original, 3, 0, $inserted ); //array_splice untuk menyisipkan pada array ke baris ke tiga
				echo " \n After inserting '$' the array is : "."\n";
				foreach ($original as $x){
					echo "$x ";
				}
				echo "\n";
			}
			/*echo arrayInsert();*/

			//8
			function ascDsc(){
				$age =	array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
				
				echo "<h4>Descending Order (key)</h4>";
				foreach ($age as $key => $value) {
					krsort($age); //Descending Order (key)
					echo $key."<br>";
				}

				echo "<h4>Descending Order (value)</h4>";
				foreach ($age as $key => $value) {
					arsort($age); //Descending Order (value)
					echo $value."<br>";
				}

				echo "<h4>Ascending (value)</h4>";				
					foreach ($age as $key => $value) {
					asort($age);	//Ascending (value)
					echo $value."<br>";
				}

				echo "<h4>Ascending (key)</h4>";
				foreach ($age as $key => $value) {
					ksort($age);	//Ascending (key)
					echo $key."<br>";
				}
			}
			/*echo ascDsc();*/

			//9
			function temperature(){
				$rec_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
				$temp_array = explode(',', $rec_temp);// explode memcah STRING/VARIABEL menjadi ARRAY
				$tot_temp = 0; //initial total_temperatur
				$temp_array_length = count($temp_array);//jumlah array
				foreach($temp_array as $temp)//loop ARRAY dan initial baru untuk VALUE (temp) dan pemberian nilai baru pada tot_temp
				{
				 $tot_temp = $tot_temp + $temp; // 0 + ARRAy sampai rec_temp= END
				}

				$avg_high_temp = $tot_temp/$temp_array_length;//hitung total_temperatur di bagi jumlah ARRAY (count)
				echo "<br>"."Average Temperature is : ".$avg_high_temp; 
				
				sort($temp_array); //sorting dari kecilke besar
				echo "<br>"." List of seven lowest temperatures :";// menampilkan 5 terkecil
				for ($i=0; $i< 5; $i++)
				{ 
					echo $temp_array[$i].", ";
				}

				echo "<br>"."List of seven highest temperatures :";// menamplkan5 terbesar
				for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
				{
					echo $temp_array[$i].", ";
				}
			}
			/*echo temperature();*/

			//12
			function arrayLowUp(){
				$Color = array('A' => 'Blue', 'B' => 'Green', 'C' => 'Red');
				echo "<br>".'low case'."<br>";
				foreach ($Color as $key=>$value) {
					$Color = array_map("strtolower", $Color);//array_map untuk
					echo $key."=>".$value." " ;
				}
				echo "<br>".'highest case'."<br>";
				foreach ($Color as $key=>$value) {
					$Color = array_map("strtoupper", $Color);
					echo $key."=>".$value." ";
				}
			}
			/*echo arrayLowUp()*/;

			//14 (BELUM)
			function arrayStoL(){
				$my_array = array("abcd","abc","de","hjjj","g","wer");
				$new_array = array_map('strlen', $my_array);//strlen berguna untuk menghitung jumlah string
				//maximum and minimum string menggunakan max() function and min() function Pada function PHP
				echo "The shortest array length is " . min($new_array) .". The longest array length is " . max($new_array).'.';
				}
			echo arrayStoL();

			//15
			function arrayRandom(){
				$no = range(11, 20);
				shuffle($no); // Berguna untuk merandom
				foreach ($no as $value) {
					print_r ($value); //print_r() harus digunakan agar tidak error
					echo "<br>";
				}
			}
			/*echo arrayRandom();*/

			//16
			function large(){
				$arr = array( 1 => "A", 10 => "B", 5 => "C" );
				$arrMax = max(array_keys($arr)); //untuk menampilkan KEY terbesar
				echo $arrMax;		
			}
			/*echo large();*/

			//17
			function min_values_not_zero(Array $values) {
				return min(array_diff(array_map('intval', $values), array(0)));
			}
			/*print_r(min_values_not_zero(array(-1,0,1,12,-100,1))."\n");*/

			//36
			function lala(){
				$colors = array( "Red", "Green", "Black", "White"); 
				print_r($colors);
				$lower_colors = array_map('strtolower', $colors);
				print_r($lower_colors);
				$upper_colors = array_map('strtoupper', $colors);
				print_r($upper_colors);
			}
			/*echo lala()*/

			//37
			function sumArray(){
				$array = array(1, 10, 5);
				$sum = count($array);
				$newSum=0;
				for ($i = 0; $i <$sum ; $i++) {
					$newSum += $array[$i];   	
				}
				echo $newSum;
			}
			/*echo sumArray();*/

?>