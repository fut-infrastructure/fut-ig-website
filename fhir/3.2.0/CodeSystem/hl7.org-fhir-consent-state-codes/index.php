<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/CodeSystem-hl7.org-fhir-consent-state-codes.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/CodeSystem-hl7.org-fhir-consent-state-codes.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/CodeSystem-hl7.org-fhir-consent-state-codes.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/CodeSystem-hl7.org-fhir-consent-state-codes.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/CodeSystem-hl7.org-fhir-consent-state-codes.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/CodeSystem-hl7.org-fhir-consent-state-codes.html');
else 
  Redirect('http://ehealth.sundhed.dk/fhir/3.2.0/CodeSystem-hl7.org-fhir-consent-state-codes.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.