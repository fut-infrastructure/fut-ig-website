# FS III, Udskillelse af affaldsstoffer - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FS III, Udskillelse af affaldsstoffer**

## CodeSystem: FS III, Udskillelse af affaldsstoffer (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/fs3-health-excretion-of-waste-materials | *Version*:6.0.0 |
| Active as of 2019-02-02 | *Computable Name*:FS III, Udskillelse af affaldsstoffer |

 
FS III, Udskillelse af affaldsstoffer 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FS III, helbredstilstande](ValueSet-fs3-health.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "fs3-health-excretion-of-waste-materials",
  "url" : "http://ehealth.sundhed.dk/cs/fs3-health-excretion-of-waste-materials",
  "version" : "6.0.0",
  "name" : "FS III, Udskillelse af affaldsstoffer",
  "title" : "FS III, Udskillelse af affaldsstoffer",
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
  "description" : "FS III, Udskillelse af affaldsstoffer",
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
      "code" : "URINATION",
      "display" : "Problemer med vandladning",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med vandladning"
        }
      ]
    },
    {
      "code" : "URINARY_INCONTINENCE",
      "display" : "Problemer med urininkontinens",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med urininkontinens"
        }
      ]
    },
    {
      "code" : "FAECAL_INCONTINENCE",
      "display" : "Problemer med afføringsinkontinens",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med afføringsinkontinens"
        }
      ]
    },
    {
      "code" : "STOMACH_INTESTINES",
      "display" : "Problemer med mave og tarm",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med mave og tarm"
        }
      ]
    }
  ]
}

```
