<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.4.0/StructureDefinition-ehealth-communication-request.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.4.0/StructureDefinition-ehealth-communication-request.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.4.0/StructureDefinition-ehealth-communication-request.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.4.0/StructureDefinition-ehealth-communication-request.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.4.0/StructureDefinition-ehealth-communication-request.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.4.0/StructureDefinition-ehealth-communication-request.html');
else 
  Redirect('http://ehealth.sundhed.dk/fhir/3.4.0/StructureDefinition-ehealth-communication-request.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
