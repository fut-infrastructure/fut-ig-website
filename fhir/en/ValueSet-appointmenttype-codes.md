# Appointment Type Codes - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Appointment Type Codes**

## ValueSet: Appointment Type Codes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/appointmenttype-codes | *Version*:11.0.3 |
| Active as of 2019-02-02 | *Computable Name*:AppointmentTypeCodes |

 
Appointment type codes used by the system 

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
  "id" : "appointmenttype-codes",
  "url" : "http://ehealth.sundhed.dk/vs/appointmenttype-codes",
  "version" : "11.0.3",
  "name" : "AppointmentTypeCodes",
  "title" : "Appointment Type Codes",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-02T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Appointment type codes used by the system",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/appointmenttype-codes"
    }]
  }
}

```
