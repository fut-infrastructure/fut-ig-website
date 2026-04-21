<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/9.0.0/ValueSet-vs-usage-context-workflow.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/9.0.0/ValueSet-vs-usage-context-workflow.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/9.0.0/ValueSet-vs-usage-context-workflow.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/9.0.0/ValueSet-vs-usage-context-workflow.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/9.0.0/ValueSet-vs-usage-context-workflow.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/9.0.0/ValueSet-vs-usage-context-workflow.html');
else 
  Redirect('http://ehealth.sundhed.dk/fhir/9.0.0/ValueSet-vs-usage-context-workflow.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
