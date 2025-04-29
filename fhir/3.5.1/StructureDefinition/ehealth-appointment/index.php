<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/StructureDefinition-ehealth-appointment.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/StructureDefinition-ehealth-appointment.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/StructureDefinition-ehealth-appointment.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/StructureDefinition-ehealth-appointment.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/StructureDefinition-ehealth-appointment.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/StructureDefinition-ehealth-appointment.html');
else 
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/StructureDefinition-ehealth-appointment.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
