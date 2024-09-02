<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/CodeSystem-ehealth-questionnaire-elements.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/CodeSystem-ehealth-questionnaire-elements.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/CodeSystem-ehealth-questionnaire-elements.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/CodeSystem-ehealth-questionnaire-elements.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/CodeSystem-ehealth-questionnaire-elements.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/CodeSystem-ehealth-questionnaire-elements.html');
else 
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/CodeSystem-ehealth-questionnaire-elements.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
