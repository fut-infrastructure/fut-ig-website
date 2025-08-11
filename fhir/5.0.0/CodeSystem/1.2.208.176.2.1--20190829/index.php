<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/5.0.0/CodeSystem-1.2.208.176.2.1--20190829.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/5.0.0/CodeSystem-1.2.208.176.2.1--20190829.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/5.0.0/CodeSystem-1.2.208.176.2.1--20190829.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/5.0.0/CodeSystem-1.2.208.176.2.1--20190829.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/5.0.0/CodeSystem-1.2.208.176.2.1--20190829.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/5.0.0/CodeSystem-1.2.208.176.2.1--20190829.html');
else 
  Redirect('http://ehealth.sundhed.dk/fhir/5.0.0/CodeSystem-1.2.208.176.2.1--20190829.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
