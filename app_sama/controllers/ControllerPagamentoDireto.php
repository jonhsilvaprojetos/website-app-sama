<?php

// Token e url de producao
$tokenProducao = "30D785E4D1544241BDEFF1A59F58E033";
$urlProducao = "https://ws.pagseguro.uol.com.br/v2/checkout";


// Token e url do sandbox
$data["email"] = "jonhs2@outlook.com";
$data["token"] = "F09BFC2A92F141A2A5AD24A30394C9C8";
$data["currency"] = "BRL";
$data["itemId1"] = "1";
$data["itemDescription1"] = "Pacote Apps Sama";
$data["itemAmount1"] = "50.90";
$data["itemQuantity1"] = "1";
$data["itemWeight1"] = "1";
$data["reference"] = "0001";
$data["senderName"] = "Jonh Silva";
$data["senderAreaCode"] = "37";
$data["senderPhone"] = "56273440";
$data["senderEmail"]="c13398943789599410784@sandbox.pagseguro.com.br";
/* caso for enviado para endereco 
$data["shippingType"]="1";
$data["shippingAddressStreet"]="Av. Brig. Faria Lima";
$data["shippingAddressNumber"]="1384";
$data["shippingAddressComplement"]="5o andar";
$data["shippingAddressDistrict"]="Jardim Paulistano";
$data["shippingAddressPostalCode"]="01452002";
$data["shippingAddressCity"]="Sao Paulo";
$data["shippingAddressState"]="SP";
$data["shippingAddressCountry"]="BRA";
*/



$buildQuery = http_build_query($data);
$url = "https://ws.sandbox.pagseguro.uol.com.br/v2/checkout";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded; charset=ISO-8859-1"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $buildQuery);

$retorno=curl_exec($curl);
curl_close($curl);

$xml=simplexml_load_string($retorno);
echo $xml->code;