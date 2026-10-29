# Appointment Reason - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Appointment Reason**

## ValueSet: Appointment Reason (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/appointment-reason | *Version*:11.0.3 |
| Active as of 2019-02-08 | *Computable Name*:AppointmentReason |

 
Appointment reason 

 **References** 

* [ehealth-appointment](StructureDefinition-ehealth-appointment.md)
* [ehealth-group-appointment](StructureDefinition-ehealth-group-appointment.md)
* [ehealth-group-videoappointment](StructureDefinition-ehealth-group-videoappointment.md)
* [ehealth-videoappointment](StructureDefinition-ehealth-videoappointment.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-appointment-reason",
  "url" : "http://ehealth.sundhed.dk/vs/appointment-reason",
  "version" : "11.0.3",
  "name" : "AppointmentReason",
  "title" : "Appointment Reason",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-08T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Appointment reason",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/appointment-reason"
    }]
  }
}

```
