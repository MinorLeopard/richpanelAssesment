<?php
$databaseHostName='localhost';
$databasesname='id21097699_tradeassesment';
$specialsu='id21097699_hardy';
$specialsusecret='AssesmentTest1-1';
$app_name='tradeautomation';

$connect=new mysqli($databaseHostName,$specialsu,$specialsusecret,$databasesname);
if($connect->connect_error) die($connect->connect_error);

function datarequestfrom_($requesttypedata)
{
    global $connect;
    $resp= $connect->query($requesttypedata);
    if(!$resp) die($connect->error);
    return $resp;
    $connect->close();
}

function clearingWhatsLeft($vat)
{
    global $connect;
    $vat=strip_tags($vat);
    $vat=htmlentities($vat);
    $vat=stripslashes($vat);
    return $connect->real_escape_string($vat);
    
}

function addingtheoriginality($vats)
{
$vats=htmlspecialchars_decode($vats);

// note that here the quotes aren't converted
return $vats;

}

function salting($text)
{
    $text=sha1("1salt99Minor".$text."2salt99Hardy");
    return $text;
}


?>