<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/StructureDefinition-patient-interpreterRequired.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/StructureDefinition-patient-interpreterRequired.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/StructureDefinition-patient-interpreterRequired.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/StructureDefinition-patient-interpreterRequired.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/StructureDefinition-patient-interpreterRequired.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/StructureDefinition-patient-interpreterRequired.html');
else 
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/StructureDefinition-patient-interpreterRequired.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.