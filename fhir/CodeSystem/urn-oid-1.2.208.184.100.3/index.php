<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.4.1/CodeSystem-urn-oid-1.2.208.184.100.3.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.4.1/CodeSystem-urn-oid-1.2.208.184.100.3.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.4.1/CodeSystem-urn-oid-1.2.208.184.100.3.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.4.1/CodeSystem-urn-oid-1.2.208.184.100.3.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.4.1/CodeSystem-urn-oid-1.2.208.184.100.3.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.4.1/CodeSystem-urn-oid-1.2.208.184.100.3.html');
else 
  Redirect('http://ehealth.sundhed.dk/fhir/3.4.1/CodeSystem-urn-oid-1.2.208.184.100.3.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
