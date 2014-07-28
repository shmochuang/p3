<?php

	class Pw {
	
		public static function gen() {

			// get word list - http://www.mieliestronk.com/corncob_lowercase.txt
			// parse through list into array using file()
			$words = file('words.txt', FILE_IGNORE_NEW_LINES| FILE_SKIP_EMPTY_LINES);
		
			// set number of words
			$num_words = 4;
		
			
			// if $num_words not greater than 0 and less than 10, echo "please put number btwn 1-10"
			// this already happens in browser with input type number.
			
			// create new array for password array password
			$password = array();
		
			// loop through $num_words amount of times
			for ($i = 0; $i < $num_words; $i++){
				// get random number between 0 and number of words in list 
				$word_index = rand(0,58000);
				// echo $word_index."<br>";
				
				// set password at index $i to words at index $word_index
				$password[$i] = $words[$word_index];
				
				
				// camel case --> ucfirst
				$password[$i] = ucfirst($password[$i]);
				
			}// end for
			
			
			// concat num only on last word
			$num = rand(0, 99);
			$password[$num_words - 1] .= $num;
			
			// concat symbol only on last word
			// create special chars array
			$special = array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "?");
			// select random char
			$count = count($special);
			$sp_index = rand(0, $count - 1);
			$char = $special[$sp_index];		
			$password[$num_words - 1] .= $char;
			
			
			return $password;
			
		} // end gen()
			
	} // end class

