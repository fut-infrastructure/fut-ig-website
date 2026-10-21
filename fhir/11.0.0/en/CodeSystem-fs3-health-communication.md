# FS III, Kommunikation - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FS III, Kommunikation**

## CodeSystem: FS III, Kommunikation (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/fs3-health-communication | *Version*:11.0.0 |
| Active as of 2019-02-02 | *Computable Name*:FS III, Kommunikation |

 
FS III, Kommunikation 

This Code system is referenced in the definition of the following value sets:

* [FS III, helbredstilstande](ValueSet-fs3-health.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "fs3-health-communication",
  "url" : "http://ehealth.sundhed.dk/cs/fs3-health-communication",
  "version" : "11.0.0",
  "name" : "FS III, Kommunikation",
  "title" : "FS III, Kommunikation",
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
  "description" : "FS III, Kommunikation",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "content" : "complete",
  "concept" : [{
    "code" : "COMMUNICATION",
    "display" : "Problemer med kommunikation",
    "designation" : [{
      "language" : "da",
      "value" : "Problemer med kommunikation"
    }]
  }]
}

```
