# FS III, Funktionsniveau - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FS III, Funktionsniveau**

## CodeSystem: FS III, Funktionsniveau (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/fs3-health-function-level | *Version*:6.0.0 |
| Active as of 2019-02-02 | *Computable Name*:FS III, Funktionsniveau |

 
FS III, Funktionsniveau 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FS III, helbredstilstande](ValueSet-fs3-health.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "fs3-health-function-level",
  "url" : "http://ehealth.sundhed.dk/cs/fs3-health-function-level",
  "version" : "6.0.0",
  "name" : "FS III, Funktionsniveau",
  "title" : "FS III, Funktionsniveau",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-02T00:00:00+00:00",
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
  "description" : "FS III, Funktionsniveau",
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
  "content" : "complete",
  "concept" : [
    {
      "code" : "PERSONAL_CARE",
      "display" : "Problemer med personlig pleje",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med personlig pleje"
        }
      ]
    },
    {
      "code" : "DAILY_ACTIVITIES",
      "display" : "Problemer med daglige aktiviteter",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med daglige aktiviteter"
        }
      ]
    }
  ]
}

```
