<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/6.0.0/CodeSystem-fs3-health-sleep-and-rest.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/6.0.0/CodeSystem-fs3-health-sleep-and-rest.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/6.0.0/CodeSystem-fs3-health-sleep-and-rest.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/6.0.0/CodeSystem-fs3-health-sleep-and-rest.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/6.0.0/CodeSystem-fs3-health-sleep-and-rest.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/6.0.0/CodeSystem-fs3-health-sleep-and-rest.html');
else 
  Redirect('http://ehealth.sundhed.dk/fhir/6.0.0/CodeSystem-fs3-health-sleep-and-rest.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
