<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/CodeSystem-dk-ihe-formatcode-cs.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/CodeSystem-dk-ihe-formatcode-cs.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/CodeSystem-dk-ihe-formatcode-cs.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/CodeSystem-dk-ihe-formatcode-cs.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/CodeSystem-dk-ihe-formatcode-cs.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/CodeSystem-dk-ihe-formatcode-cs.html');
else 
  Redirect('http://ehealth.sundhed.dk/fhir/3.5.1/CodeSystem-dk-ihe-formatcode-cs.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
