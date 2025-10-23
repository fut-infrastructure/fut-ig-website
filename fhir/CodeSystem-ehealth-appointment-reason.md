# Appointment Reason - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Appointment Reason**

## CodeSystem: Appointment Reason 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/appointment-reason | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:AppointmentReason |

 
Appointment Reason 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AppointmentReason](ValueSet-ehealth-appointment-reason.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-appointment-reason",
  "url" : "http://ehealth.sundhed.dk/cs/appointment-reason",
  "version" : "6.0.0",
  "name" : "AppointmentReason",
  "title" : "Appointment Reason",
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
  "description" : "Appointment Reason",
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
      "code" : "412776001",
      "display" : "Clinical review",
      "definition" : "Clinical review"
    }
  ]
}

```
