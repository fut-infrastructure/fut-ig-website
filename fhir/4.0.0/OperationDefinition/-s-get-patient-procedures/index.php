<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/4.0.0/OperationDefinition--s-get-patient-procedures.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/4.0.0/OperationDefinition--s-get-patient-procedures.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/4.0.0/OperationDefinition--s-get-patient-procedures.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/4.0.0/OperationDefinition--s-get-patient-procedures.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/4.0.0/OperationDefinition--s-get-patient-procedures.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/4.0.0/OperationDefinition--s-get-patient-procedures.html');
else 
  Redirect('http://ehealth.sundhed.dk/fhir/4.0.0/OperationDefinition--s-get-patient-procedures.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
