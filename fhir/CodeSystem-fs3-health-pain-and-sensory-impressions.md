# FS III, Smerter og sanseindtryk - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FS III, Smerter og sanseindtryk**

## CodeSystem: FS III, Smerter og sanseindtryk (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/fs3-health-pain-and-sensory-impressions | *Version*:6.0.0 |
| Active as of 2019-02-02 | *Computable Name*:FS III, Smerter og sanseindtryk |

 
FS III, Smerter og sanseindtryk 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FS III, helbredstilstande](ValueSet-fs3-health.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "fs3-health-pain-and-sensory-impressions",
  "url" : "http://ehealth.sundhed.dk/cs/fs3-health-pain-and-sensory-impressions",
  "version" : "6.0.0",
  "name" : "FS III, Smerter og sanseindtryk",
  "title" : "FS III, Smerter og sanseindtryk",
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
  "description" : "FS III, Smerter og sanseindtryk",
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
      "code" : "ACUTE_PAIN",
      "display" : "Akutte smerter",
      "designation" : [
        {
          "language" : "da",
          "value" : "Akutte smerter"
        }
      ]
    },
    {
      "code" : "PERIODIC_PAIN",
      "display" : "Periodevise smerter",
      "designation" : [
        {
          "language" : "da",
          "value" : "Periodevise smerter"
        }
      ]
    },
    {
      "code" : "CHRONIC_PAIN",
      "display" : "Kroniske smerter",
      "designation" : [
        {
          "language" : "da",
          "value" : "Kroniske smerter"
        }
      ]
    },
    {
      "code" : "SENSE_SIGHT",
      "display" : "Problemer med synssans",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med synssans"
        }
      ]
    },
    {
      "code" : "SENSE_SMELL",
      "display" : "Problemer med lugtesans",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med lugtesans"
        }
      ]
    },
    {
      "code" : "SENSE_HEARING",
      "display" : "Problemer med hørelse",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med hørelse"
        }
      ]
    },
    {
      "code" : "SENSE_TASTE",
      "display" : "Problemer med smagssans",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med smagssans"
        }
      ]
    },
    {
      "code" : "SENSE_FEELING",
      "display" : "Problemer med følesans",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med følesans"
        }
      ]
    }
  ]
}

```
