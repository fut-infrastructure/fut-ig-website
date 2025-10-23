# Administrative Status - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Administrative Status**

## CodeSystem: Administrative Status 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/administrative-status | *Version*:6.0.0 |
| Active as of 2019-08-05 | *Computable Name*:AdministrativeStatus |

 
Administrative status 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AdministrativeStatus](ValueSet-administrative-status.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-administrative-status",
  "url" : "http://ehealth.sundhed.dk/cs/administrative-status",
  "version" : "6.0.0",
  "name" : "AdministrativeStatus",
  "title" : "Administrative Status",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-08-05T00:00:00+00:00",
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
  "description" : "Administrative status",
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
      "code" : "activate",
      "display" : "Activate",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ikke læst"
        }
      ]
    },
    {
      "code" : "read",
      "display" : "Read",
      "designation" : [
        {
          "language" : "da",
          "value" : "Læst"
        }
      ]
    },
    {
      "code" : "reactivate",
      "display" : "Reactivate",
      "designation" : [
        {
          "language" : "da",
          "value" : "Genåbnet"
        }
      ]
    },
    {
      "code" : "complete",
      "display" : "Complete",
      "designation" : [
        {
          "language" : "da",
          "value" : "Færdigbehandlet"
        }
      ]
    }
  ]
}

```
