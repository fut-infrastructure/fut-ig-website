# Appointment Reason - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Appointment Reason**

## CodeSystem: Appointment Reason 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/appointment-reason | *Version*:11.0.3 |
| Active as of 2019-01-29 | *Computable Name*:AppointmentReason |

 
Appointment Reason 

This Code system is referenced in the definition of the following value sets:

* [Appointment Reason](ValueSet-ehealth-appointment-reason.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-appointment-reason",
  "url" : "http://ehealth.sundhed.dk/cs/appointment-reason",
  "version" : "11.0.3",
  "name" : "AppointmentReason",
  "title" : "Appointment Reason",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Appointment Reason",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [{
    "code" : "412776001",
    "display" : "Clinical review",
    "definition" : "Clinical review"
  }]
}

```
