<?php
/**
* Format Class
*/
class Format{
	function random_alphanumeric_string($length,$repeats) {
		$chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$sbustr = substr(str_shuffle(str_repeat($chars, $repeats)), 0, $length);
		$mainstring = $sbustr;
		
		return $mainstring;
	}
	
	function random_numeric_string($length,$repeats) {
		$chars = '0123456789';
		$sbustr = substr(str_shuffle(str_repeat($chars, $repeats)), 0, $length);
		$mainstring = $sbustr;
		
		return $mainstring;
	}
	
	public function big_rand( $len = 9 ) {
		$rand   = '';
		while( !( isset( $rand[$len-1] ) ) ) {
			$rand   .= mt_rand( );
		}
		return substr( $rand , 0 , $len );
	}
	
	public function formatDate($date){
		return date('F j, Y  \A\T g:i a', strtotime($date));
	}
	
	public function formatOnlyDate($date){
		return date('j<\s\up>S</\s\up> F, Y', strtotime($date));
	}

	public function getAge($date){
		$dateOfBirth = $date;
		$today = date("Y-m-d");
		$diff = date_diff(date_create($dateOfBirth), date_create($today));
		$age = $diff->format('%y');
		return $age;
		
	}

	public function getDay($date){
		$dday = $date;
		$today = date("Y-m-d");
		$date1 = new DateTime($dday);
		$date2 = new DateTime($today);

		$day = $date2->diff($date1)->format("%a");
		return $day;
		
	}

	public function getMonth($date){
		$dday = $date;
		$today = date("Y-m-d");
		$date1 = new DateTime($dday);
		$date2 = new DateTime($today);

		$month = $date2->diff($date1)->format("%m");
		return $month;
		
	}

	public function getYear($date){
		$dday = $date;
		$today = date("Y-m-d");
		$date1 = new DateTime($dday);
		$date2 = new DateTime($today);

		$year = $date2->diff($date1)->format("%y");
		return $year;
		
	}
	public function textShorten($text, $limit = 400){
		$text = $text. " ";
		$text = substr($text, 0, $limit);
		$text = substr($text, 0, strrpos($text, ' '));
		$text = $text.".....";
		return $text;
	}

	public function validation($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	public function title(){
		$path = $_SERVER['SCRIPT_FILENAME'];
		$title = basename($path, '.php');
		//$title = str_replace('_', ' ', $title);
		if ($title == 'index') {
				$title = 'Roktokona | Login';
		}elseif ($title == 'registration_search') {
				$title = 'Roktokona | Search Student';
		}elseif ($title == 'registration') {
				$title = 'Roktokona | Registration';
		}elseif ($title == 'active_account') {
				$title = 'Roktokona | Active Account';
		}elseif ($title == 'wholesale') {
				$title = 'Salesman | Wholesale medicine';
		}elseif ($title == 'wholesaleorder') {
				$title = 'Salesman | Wholesale Order';
		}elseif ($title == 'invoice') {
				$title = 'Salesman | Invoice';
		}elseif ($title == 'due') {
				$title = 'Salesman | Retail Due List';
		}elseif ($title == 'wholesaledue') {
				$title = 'Salesman | Wholesale Due List';
		}elseif ($title == 'dueinvoice') {
				$title = 'Salesman | Retail Due Invoice';
		}elseif ($title == 'wholesaledueinvoice') {
				$title = 'Salesman | Wholesale Due Invoice';
		}
		return $title = ucfirst($title);
	}
	
	public function number_to_word( $num = '' ){
		
		function trim_all( $str , $what = NULL , $with = ' ' ){
			if( $what === NULL )
			{
				//  Character      Decimal      Use
				//  "\0"            0           Null Character
				//  "\t"            9           Tab
				//  "\n"           10           New line
				//  "\x0B"         11           Vertical Tab
				//  "\r"           13           New Line in Mac
				//  " "            32           Space
			   
				$what   = "\\x00-\\x20";    //all white-spaces and control chars
			}
		   
			return trim( preg_replace( "/[".$what."]+/" , $with , $str ) , $what );
		}

		function str_replace_last( $search , $replace , $str ) {
			if( ( $pos = strrpos( $str , $search ) ) !== false ) {
				$search_length  = strlen( $search );
				$str    = substr_replace( $str , $replace , $pos , $search_length );
			}
			return $str;
		}
		
		$num    = ( string ) ( ( int ) $num );
	   
		if( ( int ) ( $num ) && ctype_digit( $num ) )
		{
			$words  = array( );
		   
			$num    = str_replace( array( ',' , ' ' ) , '' , trim( $num ) );
		   
			$list1  = array('','one','two','three','four','five','six','seven',
				'eight','nine','ten','eleven','twelve','thirteen','fourteen',
				'fifteen','sixteen','seventeen','eighteen','nineteen');
		   
			$list2  = array('','ten','twenty','thirty','forty','fifty','sixty',
				'seventy','eighty','ninety','hundred');
		   
			$list3  = array('','thousand','million','billion','trillion',
				'quadrillion','quintillion','sextillion','septillion',
				'octillion','nonillion','decillion','undecillion',
				'duodecillion','tredecillion','quattuordecillion',
				'quindecillion','sexdecillion','septendecillion',
				'octodecillion','novemdecillion','vigintillion');
		   
			$num_length = strlen( $num );
			$levels = ( int ) ( ( $num_length + 2 ) / 3 );
			$max_length = $levels * 3;
			$num    = substr( '00'.$num , -$max_length );
			$num_levels = str_split( $num , 3 );
		   
			foreach( $num_levels as $num_part )
			{
				$levels--;
				$hundreds   = ( int ) ( $num_part / 100 );
				$hundreds   = ( $hundreds ? ' ' . $list1[$hundreds] . ' Hundred' . ( $hundreds == 1 ? '' : 's' ) . ' ' : '' );
				$tens       = ( int ) ( $num_part % 100 );
				$singles    = '';
			   
				if( $tens < 20 )
				{
					$tens   = ( $tens ? ' ' . $list1[$tens] . ' ' : '' );
				}
				else
				{
					$tens   = ( int ) ( $tens / 10 );
					$tens   = ' ' . $list2[$tens] . ' ';
					$singles    = ( int ) ( $num_part % 10 );
					$singles    = ' ' . $list1[$singles] . ' ';
				}
				$words[]    = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_part ) ) ? ' ' . $list3[$levels] . ' ' : '' );
			}
		   
			$commas = count( $words );
		   
			if( $commas > 1 )
			{
				$commas = $commas - 1;
			}
		   
			$words  = implode( ', ' , $words );
		   
			//Some Finishing Touch
			//Replacing multiples of spaces with one space
			$words  = trim( str_replace( ' ,' , ',' , trim_all( ucwords( $words ) ) ) , ', ' );
			if( $commas )
			{
				$words  = str_replace_last( ',' , ' and' , $words );
			}
		   
			return $words;
		}
		else if( ! ( ( int ) $num ) )
		{
			return 'Zero';
		}
		return '';
	}
}
?>