<?PHP

$content = file_get_contents("outlooktestfile.csv");

$display = csv_to_array($content);

print_r($display);


function csv_to_array($csv, $delimiter = ',', $enclosure = '"', $escape = '\\', $terminator = "\n")
{
	$ignore_count = 0;
    $r = array();
    $rows = explode($terminator,trim($csv));
    $names = array_shift($rows);
    $names = str_getcsv_new($names,$delimiter,$enclosure,$escape);
	$names=$names[0];
	$limit = count($names);
	
	for($i = 0; $i < $limit; $i++)
	{
		if($names[$i] == 'First Name')
		{
			$index['firstname'] = $i;
		}
		elseif($names[$i] == 'Middle Name')
		{
			$index['midname'] = $i;
		}
		elseif($names[$i] == 'Last Name')
		{
			$index['name'] = $i;
		}
		elseif($names[$i] == 'Title')
		{
			$index['title'] = $i;
		}
		elseif($names[$i] == 'Company')
		{
			$index['company'] = $i;
		}
		elseif($names[$i] == 'E-mail Address')
		{
			$index['mail1'] = $i;
		}
		elseif($names[$i] == 'E-mail 2 Address')
		{
			$index['mail2'] = $i;
		}
		elseif($names[$i] == 'E-mail 3 Address')
		{
			$index['mail3'] = $i;
		}
		elseif($names[$i] == 'Primary Phone')
		{
			$index['phone1'] = $i;
		}
		elseif($names[$i] == 'Home Phone')
		{
			$index['phone2'] = $i;
		}
		elseif($names[$i] == 'Mobile Phone')
		{
			$index['phone3'] = $i;
		}
		elseif($names[$i] == 'Home Address')
		{
			$index['address'] = $i;
		}
		elseif($names[$i] == 'Web Page')
		{
			$index['wbpage'] = $i;
		}
		elseif($names[$i] == 'Birthday')
		{
			$index['birthday'] = $i;
		}
		
				
	}
	
	$nc = count($names);
	$j = 0;
    foreach ($rows as $row) 
	{
		if (trim($row)) 
		{
			
            $out=str_getcsv_new($row,$delimiter,$enclosure,$escape);
			if($out)
			{
				$out=$out[0];
			}
			else
			{
				continue;
			}
			/**this is added to avoid junks **/
			$check_junk = count($out);
			if($check_junk < $limit/2)
			{
				$ignore_count++;
				continue;
			}
			/**junk avoider ends **/
			
			
			foreach($index as $key => $value)
			{
				if(isset($out[$value]))
					$contact[$j][$key] = $out[$value];
			}
			
            $j++;
        }
    }
	
	return($contact);
    
}







/***** function *********/
    function str_getcsv_new($input, $delimiter = ',', $enclosure = '"', $escape = '\\', $eol = '\n') 
	{
        if (is_string($input) && !empty($input)) 
		{
            $output = array();
            $tmp    = preg_split("/".$eol."/",$input);
            if (is_array($tmp) && !empty($tmp)) {
                while (list($line_num, $line) = each($tmp)) 
				{
                    if (preg_match("/".$escape.$enclosure."/",$line)) 
					{
                        while ($strlen = strlen($line)) 
						{
                            $pos_delimiter       = strpos($line,$delimiter);
                            $pos_enclosure_start = strpos($line,$enclosure);
                            if 
							(
                                is_int($pos_delimiter) && is_int($pos_enclosure_start)
                                && ($pos_enclosure_start < $pos_delimiter)
                                ) 
							{
                                $enclosed_str = substr($line,1);
                                $pos_enclosure_end = strpos($enclosed_str,$enclosure);
                                $enclosed_str = substr($enclosed_str,0,$pos_enclosure_end);
                                $output[$line_num][] = $enclosed_str;
                                $offset = $pos_enclosure_end+3;
                            } else 
							{
                                if (empty($pos_delimiter) && empty($pos_enclosure_start)) 
								{
                                    $output[$line_num][] = substr($line,0);
                                    $offset = strlen($line);
                                } 
								else 
								{
                                    $output[$line_num][] = substr($line,0,$pos_delimiter);
                                    $offset = (
                                                !empty($pos_enclosure_start)
                                                && ($pos_enclosure_start < $pos_delimiter)
                                                )
                                                ?$pos_enclosure_start
                                                :$pos_delimiter+1;
                                }
                            }
                            $line = substr($line,$offset);
                        }
                    } 
					else 
					{
                        $line = preg_split("/".$delimiter."/",$line);
   
                        
                        if (is_array($line) && !empty($line[0])) 
						{
                            $output[$line_num] = $line;
                        } 
                    }
                }
                return $output;
            } 
			else 
			{
                return false;
            }
        } 
		else
		{
            return false;
        }
    }


?>