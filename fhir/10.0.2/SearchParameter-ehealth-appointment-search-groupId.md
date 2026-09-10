# appointmentGroupId - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **appointmentGroupId**

## SearchParameter: appointmentGroupId 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/SearchParameter/Appointment/groupId | *Version*:10.0.2 |
| Active as of 2021-05-06 | *Computable Name*:appointmentGroupId |

 
Search parameter for finding resources based on group id 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ehealth-appointment-search-groupId",
  "url" : "http://ehealth.sundhed.dk/fhir/SearchParameter/Appointment/groupId",
  "version" : "10.0.2",
  "name" : "appointmentGroupId",
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
  "description" : "Search parameter for finding resources based on group id",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "appointmentGroupId",
  "base" : ["Appointment"],
  "type" : "string",
  "expression" : "Appointment.extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-id')",
  "xpathUsage" : "normal"
}

```
