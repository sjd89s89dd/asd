$host = "www.bluehillcapitals.com";
$path = "/open-account/";
while(1)
        {
				$post_data = 'firstName=asdhasi&lastName=hiuda&country=AX&email=brendon.miles' .rand(1000000,100000000). '%40gmail.com&prefixCountry=49&areaPhone=43&phone=' .rand(1000000,100000000);
                $socket = fsockopen("ssl://".$host, 443, $errno, $errstr, 15);
                $http = "POST {$path} HTTP/1.1\r\n";
                $http .= "Host: " .$host. "\r\n";
                $http .= "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:64.0) Gecko/20100101 Firefox/64.0\r\n";
                $http .= "Accept: */*\r\n";
                $http .= "Accept-Language: en-US,en;q=0.5\r\n";
                $http .= "Referer: https://www.bluehillcapitals.com/contact/\r\n";
                $http .= "Content-Type: application/x-www-form-urlencoded\r\n";
                $http .= "X-Requested-With: XMLHttpRequest\r\n";
                $http .= "Content-Length: " .strlen($post_data). "\r\n";
                $http .= "Connection: close\r\n";
                $http .= "Cookie: rbzid=rBagxGTqt+jOSwz3FNmBb8DFjj1UFqJj385NFOuu43tB1bALF9i26zKoidpaCOBrzufCdfrV3fzOLma3OsF8tTRkf34SQQlzwlsjx+AAsCI42z6t4xS+ttcotHv+OieMyYCFlN5cm92CPvhTNbJICgWntkj97rsfvJaZlhzkfcFSNagvNwszzxIy5uf3vMn8PVIxY5hFAR37zGm6DqOq5w==\r\n\r\n";
                $http .= $post_data . "\r\n";

                fwrite($socket, $http);

                contents = "";
                while (!feof($socket)) {
                        $contents.= fgets($socket, 4096);
                }
				echo $contents;
                fclose($socket);
exit();
                #echo(".");
				#logout();

        }
function logout()
{
				global $cookie;
				global $host;
	            $socket = fsockopen("ssl://".$host, 443, $errno, $errstr, 15);
                $http = "GET /logout.php HTTP/1.1\r\n";
                $http .= "Host: " .$host. "\r\n";
                $http .= "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:63.0) Gecko/20100101 Firefox/63.0\r\n";
                $http .= "Accept: */*\r\n";
                $http .= "Accept-Language: en-US,en;q=0.5\r\n";
                $http .= "Referer: https://" .$host. "/registration.php\r\n";
                $http .= "X-Requested-With: XMLHttpRequest\r\n";
                $http .= "Connection: close\r\n";
                $http .= "Cookie: " .$cookie. "\r\n\r\n";

                fwrite($socket, $http);

                #$contents = "";
                #while (!feof($socket)) {
                #        $contents.= fgets($socket, 4096);
                #}

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
