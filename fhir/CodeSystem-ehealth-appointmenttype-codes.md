# Appointment Type Codes - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Appointment Type Codes**

## CodeSystem: Appointment Type Codes 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/appointmenttype-codes | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:AppointmentTypeCodes |

 
Appointment type code 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AppointmentTypeCodes](ValueSet-appointmenttype-codes.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-appointmenttype-codes",
  "url" : "http://ehealth.sundhed.dk/cs/appointmenttype-codes",
  "version" : "6.0.0",
  "name" : "AppointmentTypeCodes",
  "title" : "Appointment Type Codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "Appointment type code",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "CHECKUP",
      "display" : "A routine check-up, such as an annual physical"
    },
    {
      "code" : "EMERGENCY",
      "display" : "Emergency appointment"
    },
    {
      "code" : "FOLLOWUP",
      "display" : "A follow up visit from a previous appointment"
    },
    {
      "code" : "ROUTINE",
      "display" : "Routine appointment - default if not valued"
    },
    {
      "code" : "WALKIN",
      "display" : "A previously unscheduled walk-in visit"
    }
  ]
}

```
