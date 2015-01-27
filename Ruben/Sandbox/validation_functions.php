		<?php 
		
		// * presence
		function has_presence($value)
		{
			return isset($value) && $value !== "";
		}

		
		// * string length
	
		// max length
		function has_max_length($value, $max) {
			return strlen($value) <= $max; 
		}
		
		// * inclusion in a set
		function has_inclusion_in($value, $set) {
			return in_array($value, $set);
		}
		
		function validate_max_lengths($fields_with_max_lengths) {
			global $errors;
			//Using an assoc. array
			foreach($fields_with_max_lengths as $field => $max) {
				$value = trim($_POST[$field]);
				if(!has_max_length($value, $max)) {
					$errors[$field] = ucfirst($field) . " is too long";
				}
			}
		}
		function form_errors($error_array=array()) {
			$output = "";
			if(!empty($error_array)){
				$output 	 = 	"<div class=\"Error\">";
				$output 	.= 	"Please fix the followin errors:";
				$output 	.="<ul>";
				foreach($error_array as $key => $error) {
					$output 	.="<li>{$error}</li>";
				}
				$output 	.="</ul>";
				$output 	.="</div>";
			}
			return $output;
		}
		
		?>