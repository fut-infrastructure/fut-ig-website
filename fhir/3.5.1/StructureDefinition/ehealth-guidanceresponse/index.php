<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/StructureDefinition-ehealth-guidanceresponse.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/StructureDefinition-ehealth-guidanceresponse.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/StructureDefinition-ehealth-guidanceresponse.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/StructureDefinition-ehealth-guidanceresponse.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/StructureDefinition-ehealth-guidanceresponse.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/StructureDefinition-ehealth-guidanceresponse.html');
else 
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/StructureDefinition-ehealth-guidanceresponse.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
