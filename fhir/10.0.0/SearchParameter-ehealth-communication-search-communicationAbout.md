# communicationAbout - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **communicationAbout**

## SearchParameter: communicationAbout 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/about | *Version*:10.0.0 |
| Active as of 2022-08-09 | *Computable Name*:communicationAbout |

 
Search parameter for finding communication based on about 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-communication-search-communicationAbout",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Communication/about",
  "version" : "10.0.0",
  "name" : "communicationAbout",
  "status" : "active",
  "date" : "2022-08-09T12:05:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Search parameter for finding communication based on about",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "communicationAbout",
  "base" : ["Communication"],
  "type" : "reference",
  "expression" : "Communication.about",
  "xpathUsage" : "normal"
}

```
