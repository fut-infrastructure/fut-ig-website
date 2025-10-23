# FS III, Psykosociale forhold - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FS III, Psykosociale forhold**

## CodeSystem: FS III, Psykosociale forhold (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/fs3-health-psychosocial-conditions | *Version*:6.0.0 |
| Active as of 2019-02-02 | *Computable Name*:FS III, Psykosociale forhold |

 
FS III, Psykosociale forhold 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FS III, helbredstilstande](ValueSet-fs3-health.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "fs3-health-psychosocial-conditions",
  "url" : "http://ehealth.sundhed.dk/cs/fs3-health-psychosocial-conditions",
  "version" : "6.0.0",
  "name" : "FS III, Psykosociale forhold",
  "title" : "FS III, Psykosociale forhold",
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
  "description" : "FS III, Psykosociale forhold",
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
      "code" : "SOCIALIZATION",
      "display" : "Problemer med socialt samvær",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med socialt samvær"
        }
      ]
    },
    {
      "code" : "EMOTIONAL",
      "display" : "Emotionelle problemer",
      "designation" : [
        {
          "language" : "da",
          "value" : "Emotionelle problemer"
        }
      ]
    },
    {
      "code" : "ABUSE",
      "display" : "Problemer med misbrug",
      "designation" : [
        {
          "language" : "da",
          "value" : "Problemer med misbrug"
        }
      ]
    },
    {
      "code" : "MENTAL",
      "display" : "Mentale problemer",
      "designation" : [
        {
          "language" : "da",
          "value" : "Mentale problemer"
        }
      ]
    }
  ]
}

```
