# Jurisdiction - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Jurisdiction**

## CodeSystem: Jurisdiction 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/jurisdiction | *Version*:6.0.0 |
| Active as of 2019-12-16 | *Computable Name*:Jurisdiction |

 
Jurisdiction 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Jurisdiction](ValueSet-ehealth-jurisdiction.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-jurisdiction",
  "url" : "http://ehealth.sundhed.dk/cs/jurisdiction",
  "version" : "6.0.0",
  "name" : "Jurisdiction",
  "title" : "Jurisdiction",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-12-16T00:00:00+00:00",
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
  "description" : "Jurisdiction",
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
      "code" : "healthcare-act",
      "display" : "Danish healthcare act",
      "definition" : "Danish healthcare act",
      "designation" : [
        {
          "language" : "da",
          "value" : "Sundhedsloven"
        }
      ]
    },
    {
      "code" : "service-act",
      "display" : "Danish service act",
      "definition" : "Danish service act",
      "designation" : [
        {
          "language" : "da",
          "value" : "Serviceloven"
        }
      ]
    }
  ]
}

```
