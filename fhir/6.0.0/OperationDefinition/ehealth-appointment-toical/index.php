<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/6.0.0/OperationDefinition-ehealth-appointment-toical.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/6.0.0/OperationDefinition-ehealth-appointment-toical.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/6.0.0/OperationDefinition-ehealth-appointment-toical.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/6.0.0/OperationDefinition-ehealth-appointment-toical.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/6.0.0/OperationDefinition-ehealth-appointment-toical.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/6.0.0/OperationDefinition-ehealth-appointment-toical.html');
else 
  Redirect('http://ehealth.sundhed.dk/fhir/6.0.0/OperationDefinition-ehealth-appointment-toical.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
