# FS III, Ernæring - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FS III, Ernæring**

## CodeSystem: FS III, Ernæring (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/fs3-health-nutrition | *Version*:6.0.0 |
| Active as of 2019-02-02 | *Computable Name*:FS III, Ernæring |

 
FS III, Ernæring 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FS III, helbredstilstande](ValueSet-fs3-health.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "fs3-health-nutrition",
  "url" : "http://ehealth.sundhed.dk/cs/fs3-health-nutrition",
  "version" : "6.0.0",
  "name" : "FS III, Ernæring",
  "title" : "FS III, Ernæring",
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
  "description" : "FS III, Ernæring",
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
      "code" : "FLUID_INTAKE",
      "display" : "Problemer med væskeindtag",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med væskeindtag"
        }
      ]
    },
    {
      "code" : "FOOD_INTAKE",
      "display" : "Problemer med fødeindtag",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med fødeindtag"
        }
      ]
    },
    {
      "code" : "WEIGHT_CHANGE",
      "display" : "Uhensigtsmæssig vægtændring",
      "designation" : [
        {
          "language" : "da",
          "value" : "Uhensigtsmæssig vægtændring"
        }
      ]
    },
    {
      "code" : "OVERWEIGHT",
      "display" : "Problemer med overvægt",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med overvægt"
        }
      ]
    },
    {
      "code" : "UNDERWEIGHT",
      "display" : "Problemer med undervægt",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med undervægt"
        }
      ]
    }
  ]
}

```
