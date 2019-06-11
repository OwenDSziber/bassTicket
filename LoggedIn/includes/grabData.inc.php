<?php
	session_start();
	$editor_data = $_POST[ 'message' ];
	echo $editor_data;
	$counter = substr_count($editor_data,";base64,");
	function base64_to_jpeg($src, $output_file) {
		// open the output file for writing
		$ifp = fopen( $output_file, 'wb' ); 

		// split the string on commas
		// $data[ 0 ] == "data:image/png;base64"
		// $data[ 1 ] == <actual base64 string>
		$data = explode( ',', $src);

		// we could add validation here with ensuring count( $data ) > 1
		fwrite( $ifp, base64_decode( $data[ 1 ] ) );

		// clean up the file resource
		fclose( $ifp ); 

		return $output_file;
	}
	//echo $counter;
	for ($i = 1; $i <= $counter; $i++) {
		
		//echo "Found: " . $i . " times.";
		$doc = new DOMDocument();
		$doc->loadHTML($editor_data);
		$xpath = new DOMXPath($doc);
		$src = $xpath->evaluate("string(//img/@src)");
		if (strpos($src, 'base64') !== false) {
			echo $src;
			echo $src . '<br>';
			$k = 0;
			$result = "";
			while(!$result){
				if(!file_exists("ticketImages/[$k].jpg"))
					$result = "ticketImages/[$k].jpg";
				$k++;
			}
			base64_to_jpeg($value, $result);
		}
		else{
			echo "<br>NOT BASE64<br>";
		}		
	}

?>