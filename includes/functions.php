<?PHP
error_reporting(E_ERROR);
require_once("PHPMailer_v5.1/class.phpmailer.php");
/**** function ********/
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
			/** this is added to avoid junks :to have strict validation use ($check_junk < $limit) **/
			$check_junk = count($out);
			if($check_junk < (int)($limit/1.2))
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



function vcf_to_array($filename)
{


	$content = file_get_contents($filename);
 	$pattern = 'BEGIN:VCARD
VERSION:3.0';
  	$matches=explode($pattern, $content);
  
  	$content="";
 	foreach($matches as $id)
  	{
		$content.=$id;
  	}
  
  	$pattern = 'END:VCARD';
  	$matches=explode($pattern, $content);
  
 	 $content="";
  	$i=0;
  	if(sizeof($matches))
  	{
		foreach($matches as $id)
		{
			  
			  
			
			$refined = preg_replace("/[,]+/"," ", stripslashes($id));
			
			preg_match('/(FN:)(.*)/', $refined, $fname);
			preg_match('/(N:)(.*)/', $refined, $name);
			preg_match_all("/[E][M][A][I][L][;][T][Y][P][E][=][\w]+([;][T][Y][P][E][=][\w]+)*[:](?P<email>[a-zA-Z0-9\._-]+@[a-zA-Z0-9\._-]+)/", $refined, $email);
			preg_match_all("/[T][E][L][;][T][Y][P][E][=][\w]+([;][T][Y][P][E][=][\w]+)*[:](?P<number>[\+]?[\d]{6,20})/", $refined, $phone);
			preg_match_all("/[A][D][R][;][T][Y][P][E][=][\w]+([;][T][Y][P][E][=][\w]+)*[:](?P<address>[;\w;]+)/", $refined, $address);
			preg_match("/[U][R][L][;][T][Y][P][E][=][\w]+([;][T][Y][P][E][=][\w]+)*[:](?P<url>[:\w\d\.\/_-]+)/i", $refined, $url);
			
			
			
			if(isset($fname[0]))
				$contact[$i]['firstname'] = preg_replace("/FN:/","",$fname[0]);
			if(isset($name[0]))
				$contact[$i]['name'] = preg_replace("/N:/","",$name[0]);
			
			
			if(isset($email))
			{
				
				list($contact[$i]['mail1'], $contact[$i]['mail2'], $contact[$i]['mail3']) = $email['email'];
					
			}
			
			if(isset($phone))
			{
			
				list($contact[$i]['phone1'], $contact[$i]['phone2'], $contact[$i]['phone3']) = $phone['number'];
			
			}
			
			if(isset($address))
			{
				
				foreach($address['address'] as $id)
				{
					if(strlen(preg_replace("/;/"," ",$id))>6)
					{
					$contact[$i]['address']= preg_replace("/;/"," ",$id);
					break;
					}
				}
			
				
			}
			
			if(isset($url['url']))
				$contact[$i]['wbpage'] = $url['url'];		
			
			$i++;
		}
	}
  
  	array_pop ( $contact );
  
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



/****** function ******/
function sendmail($to,$name,$sub,$content)
{
	$flag=false;
	$mail             = new PHPMailer(); // defaults to using php "mail()"
	$body             = $content;
	$body             = eregi_replace("[\]",'',$body);
	
	$mail->AddReplyTo(ADMIN_MAIL,APP_NAME);
	
	$mail->SetFrom(ADMIN_MAIL,APP_NAME);
	
	$address = $to;
	
	$mail->AddAddress($address,$name);
	
	$mail->Subject    = $sub;
	
		
	$mail->MsgHTML($body);
	
	
	
	if(!$mail->Send()) 
	{
	  echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else 
	{
	  $flag=true;
	}
	return $flag;
	
}



?> 
