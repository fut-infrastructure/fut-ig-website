# responsible - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **responsible**

## SearchParameter: responsible 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Appointment/responsible | *Version*:10.0.2 |
| Active as of 2021-05-06 | *Computable Name*:responsible |

 
Search parameter for finding responsible entity on Appointment 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-appointment-search-responsible",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Appointment/responsible",
  "version" : "10.0.2",
  "name" : "responsible",
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
  "description" : "Search parameter for finding responsible entity on Appointment",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "responsible",
  "base" : ["Appointment"],
  "type" : "reference",
  "expression" : "Appointment.extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-responsible')",
  "xpathUsage" : "normal"
}

```
