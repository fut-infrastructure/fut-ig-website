<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.3.0/NamingSystem-ehealth-question-identifier.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.3.0/NamingSystem-ehealth-question-identifier.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.3.0/NamingSystem-ehealth-question-identifier.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.3.0/NamingSystem-ehealth-question-identifier.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.3.0/NamingSystem-ehealth-question-identifier.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://ehealth.sundhed.dk/fhir/3.3.0/NamingSystem-ehealth-question-identifier.html');
else 
  Redirect('http://ehealth.sundhed.dk/fhir/3.3.0/NamingSystem-ehealth-question-identifier.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.