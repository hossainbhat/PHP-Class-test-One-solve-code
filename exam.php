<?php 
	echo "Problem One :";
	echo "<br>";
	class personOne{
		private $name;

		public function details($personName){

			echo $this ->name =$personName;

		}
	}

	$obj = new personOne;

	$obj ->details("Hello Word");


echo "<hr>";

echo "Problem Two :";
	echo "<br>";

class personTwo{
		private $name ="Touhid";

		public function detailsTwo(){

			echo "Hello All , I am {$this ->name}";

		}
	}

	$obj = new personTwo;

	$obj ->detailsTwo();


	echo "<hr>";

echo "Problem Three :";
	echo "<br>";


class personThree{
		private $name ="Touhid";

		public function detailsThree(){


			for ($i=0; $i < 10 ; $i++) { 
				echo "Hello All , I am {$this ->name}";
				echo "<br/>";
			}

		}
	}

	$obj = new personThree;

	$obj ->detailsThree();	


	echo "<hr>";

	echo "Problem Four :";
	echo "<br>";


class personFour{
		

		public function detailsFour($arraysort){

			$result =  $this->arr =$arraysort;

			echo "<pre>";
				print_r($result);
			echo "</pre>";
			
			}

	}

	$obj = new personFour;
	$arr = array(11,-2,4,35,0,8,-9);
	sort($arr);

	$obj ->detailsFour($arr);	


echo "<hr>";

echo "Problem Five :";
	echo "<br>";


class personFive{
		

		public function add($numberOne,$numberTwo){

			$this->numberOne =$numberOne;
			$this->numberTwo =$numberTwo;

			$add = ($this->numberOne =$numberOne + $this->numberTwo =$numberTwo);
			echo "Addation :".$add;
			echo "<br>";
					
			}

			public function sub($numberOne,$numberTwo){
				$this->numberOne = $numberOne;
				$this->numberTwo = $numberTwo;

			$sub = ($this->numberOne =$numberOne - $this->numberTwo =$numberTwo);
			echo "Subtract :".$sub;
			echo "<br>";

			}


			public function mul($numberOne,$numberTwo){
				$this->numberOne =$numberOne;
				$this->numberTwo =$numberTwo;

			$mul = ($this->numberOne = $numberOne * $this->numberTwo =$numberTwo);
			echo "Multiply :".$mul;
			echo "<br>";

			
			}

			public function div($numberOne,$numberTwo){	
				$this->numberOne =$numberOne;
				$this->numberTwo =$numberTwo;

			$div = ($this->numberOne =$numberOne / $this->numberTwo =$numberTwo);
			echo "Devide :".$div;
			echo "<br>";

			
			}
		}

	$obj = new personFive;
	$numberOne ="13";
	$numberTwo ="10";

	$obj ->add($numberOne,$numberTwo);
	$obj ->sub($numberOne,$numberTwo);		
	$obj ->mul($numberOne,$numberTwo);	
	$obj ->div($numberOne,$numberTwo);	
echo "<hr>";


 ?>