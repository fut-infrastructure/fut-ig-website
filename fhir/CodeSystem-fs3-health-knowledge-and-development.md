# FS III, Viden og udvikling - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FS III, Viden og udvikling**

## CodeSystem: FS III, Viden og udvikling (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/fs3-health-knowledge-and-development | *Version*:6.0.0 |
| Active as of 2019-02-02 | *Computable Name*:FS III, Viden og udvikling |

 
FS III, Viden og udvikling 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FS III, helbredstilstande](ValueSet-fs3-health.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "fs3-health-knowledge-and-development",
  "url" : "http://ehealth.sundhed.dk/cs/fs3-health-knowledge-and-development",
  "version" : "6.0.0",
  "name" : "FS III, Viden og udvikling",
  "title" : "FS III, Viden og udvikling",
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
  "description" : "FS III, Viden og udvikling",
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
      "code" : "MEMORY",
      "display" : "Problemer med hukommelse",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med hukommelse"
        }
      ]
    },
    {
      "code" : "INSIGHT_DISEASE",
      "display" : "Problemer med sygdomsindsigt",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med sygdomsindsigt"
        }
      ]
    },
    {
      "code" : "INSIGHT_TREATMENT_PURPOSE",
      "display" : "Problemer med indsigt i behandlingsformål",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med indsigt i behandlingsformål"
        }
      ]
    },
    {
      "code" : "COGNITIVE",
      "display" : "Kognitive problemer",
      "designation" : [
        {
          "language" : "da",
          "value" : "Kognitive problemer"
        }
      ]
    }
  ]
}

```
