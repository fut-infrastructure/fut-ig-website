# FS III, Søvn og hvile - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FS III, Søvn og hvile**

## CodeSystem: FS III, Søvn og hvile (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/fs3-health-sleep-and-rest | *Version*:10.0.1 |
| Active as of 2019-02-02 | *Computable Name*:FS III, Søvn og hvile |

 
FS III, Søvn og hvile 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FS III, helbredstilstande](ValueSet-fs3-health.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "fs3-health-sleep-and-rest",
  "url" : "http://ehealth.sundhed.dk/cs/fs3-health-sleep-and-rest",
  "version" : "10.0.1",
  "name" : "FS III, Søvn og hvile",
  "title" : "FS III, Søvn og hvile",
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
  "description" : "FS III, Søvn og hvile",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "content" : "complete",
  "concept" : [{
    "code" : "CIRCADIAN_RHYTHM",
    "display" : "Døgnrytmeproblemer",
    "designation" : [{
      "language" : "da",
      "value" : "Døgnrytmeproblemer"
    }]
  },
  {
    "code" : "SLEEP",
    "display" : "Søvnproblemer",
    "designation" : [{
      "language" : "da",
      "value" : "Søvnproblemer"
    }]
  }]
}

```
