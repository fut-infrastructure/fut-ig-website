# Appointment Service Type - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Appointment Service Type**

## ValueSet: Appointment Service Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/appointment-servicetype | *Version*:11.0.1 |
| Active as of 2019-02-08 | *Computable Name*:AppointmentServiceType |

 
Appointment service type 

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
  "id" : "ehealth-appointment-servicetype",
  "url" : "http://ehealth.sundhed.dk/vs/appointment-servicetype",
  "version" : "11.0.1",
  "name" : "AppointmentServiceType",
  "title" : "Appointment Service Type",
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
  "description" : "Appointment service type",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/appointment-servicetype"
    }]
  }
}

```
