<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/8.0.1/OperationDefinition--s-get-resource-counts.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/8.0.1/OperationDefinition--s-get-resource-counts.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/8.0.1/OperationDefinition--s-get-resource-counts.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/8.0.1/OperationDefinition--s-get-resource-counts.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/8.0.1/OperationDefinition--s-get-resource-counts.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/8.0.1/OperationDefinition--s-get-resource-counts.html');
else 
  Redirect('http://ehealth.sundhed.dk/fhir/8.0.1/OperationDefinition--s-get-resource-counts.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
