# intended-audience - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **intended-audience**

## SearchParameter: intended-audience 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Appointment/intended-audience | *Version*:10.0.1 |
| Active as of 2021-05-06 | *Computable Name*:intended-audience |

 
Search parameter for finding intended audience on Appointment 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-appointment-search-intended-audience",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Appointment/intended-audience",
  "version" : "10.0.1",
  "name" : "intended-audience",
  "status" : "active",
  "date" : "2021-05-06T08:31:20+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Search parameter for finding intended audience on Appointment",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "intended-audience",
  "base" : ["Appointment"],
  "type" : "reference",
  "expression" : "Appointment.extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-intendedAudience')",
  "xpathUsage" : "normal"
}

```
