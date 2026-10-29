# Appointment Service Types - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Appointment Service Types**

## CodeSystem: Appointment Service Types 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/appointment-servicetype | *Version*:11.0.3 |
| Active as of 2019-01-29 | *Computable Name*:AppointmentServiceTypes |

 
Appointment service type 

This Code system is referenced in the definition of the following value sets:

* [Appointment Service Type](ValueSet-ehealth-appointment-servicetype.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-appointment-servicetype",
  "url" : "http://ehealth.sundhed.dk/cs/appointment-servicetype",
  "version" : "11.0.3",
  "name" : "AppointmentServiceTypes",
  "title" : "Appointment Service Types",
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
  "description" : "Appointment service type",
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
    "code" : "regular",
    "display" : "A regular appointment"
  },
  {
    "code" : "video",
    "display" : "A video appointment"
  },
  {
    "code" : "group",
    "display" : "A group appointment"
  },
  {
    "code" : "group-video",
    "display" : "A group video appointment"
  }]
}

```
