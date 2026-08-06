# careCommunicationSenderPractitioner - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **careCommunicationSenderPractitioner**

## SearchParameter: careCommunicationSenderPractitioner 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/careCommunicationSenderPractitioner | *Version*:10.0.0 |
| Active as of 2026-06-12 | *Computable Name*:careCommunicationSenderPractitioner |

 
Search parameter for finding CareCommunication based on the sending Practitioner (the practitioner sub-extension of the ehealth-carecommunication-sender extension). 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-careCommunicationSenderPractitioner",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/careCommunicationSenderPractitioner",
  "version" : "10.0.0",
  "name" : "careCommunicationSenderPractitioner",
  "status" : "active",
  "date" : "2026-06-12T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Search parameter for finding CareCommunication based on the sending Practitioner (the practitioner sub-extension of the ehealth-carecommunication-sender extension).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "careCommunicationSenderPractitioner",
  "base" : ["Communication"],
  "type" : "reference",
  "expression" : "Communication.extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-sender').extension('practitioner').value",
  "xpathUsage" : "normal"
}

```
