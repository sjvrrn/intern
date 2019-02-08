<?php 
/*
*unique functions
*/
function Common($data,$url,$type){
	
	if($type=="post"){
						$apiKey = 'CODEX@123';
						$ch = curl_init($url);
						curl_setopt($ch, CURLOPT_TIMEOUT, 30);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
						curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
						curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
						//curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
						curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
						$result = curl_exec($ch); 
						$result = json_decode($result); 
						return $result;
					}else{
						    $apiKey = 'CODEX@123';
							$ch = curl_init($url);
                            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
							curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
							curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
							//curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
							$result = curl_exec($ch);
							return $result;
							
						}
}
?>