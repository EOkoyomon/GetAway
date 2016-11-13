<?
$ch = curl_init("http://python-hello-world-flask-jzbao-348.mybluemix.net/get-cheapest-fare?origin=SFO&destination=JFK&departure_date=" . "2016-11-13");
curl_exec($ch);
curl_close($ch);
?>