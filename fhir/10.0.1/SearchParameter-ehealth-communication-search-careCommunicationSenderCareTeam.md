# careCommunicationSenderCareTeam - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **careCommunicationSenderCareTeam**

## SearchParameter: careCommunicationSenderCareTeam 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/careCommunicationSenderCareTeam | *Version*:10.0.1 |
| Active as of 2026-06-16 | *Computable Name*:careCommunicationSenderCareTeam |

 
Search parameter for finding CareCommunication based on the sending CareTeam (the careteam sub-extension of the ehealth-carecommunication-sender extension). 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-careCommunicationSenderCareTeam",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/careCommunicationSenderCareTeam",
  "version" : "10.0.1",
  "name" : "careCommunicationSenderCareTeam",
  "status" : "active",
  "date" : "2026-06-16T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Search parameter for finding CareCommunication based on the sending CareTeam (the careteam sub-extension of the ehealth-carecommunication-sender extension).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "careCommunicationSenderCareTeam",
  "base" : ["Communication"],
  "type" : "reference",
  "expression" : "Communication.extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-sender').extension('careTeam').value",
  "xpathUsage" : "normal"
}

```
