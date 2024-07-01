<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.1.0/StructureDefinition-ehealth-questionnaire-intendedOrganization.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.1.0/StructureDefinition-ehealth-questionnaire-intendedOrganization.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.1.0/StructureDefinition-ehealth-questionnaire-intendedOrganization.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.1.0/StructureDefinition-ehealth-questionnaire-intendedOrganization.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.1.0/StructureDefinition-ehealth-questionnaire-intendedOrganization.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.1.0/StructureDefinition-ehealth-questionnaire-intendedOrganization.html');
else 
  Redirect('http://ehealth.sundhed.dk/fhir/3.1.0/StructureDefinition-ehealth-questionnaire-intendedOrganization.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
