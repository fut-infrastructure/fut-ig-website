# Priority - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Priority**

## CodeSystem: Priority 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/priority | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:Priority |

 
Priority 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Priority](ValueSet-ehealth-priority.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-priority",
  "url" : "http://ehealth.sundhed.dk/cs/priority",
  "version" : "6.0.0",
  "name" : "Priority",
  "title" : "Priority",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29T00:00:00+00:00",
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
  "description" : "Priority",
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
      "code" : "routine",
      "display" : "Routine",
      "definition" : "The request has normal priority."
    },
    {
      "code" : "urgent",
      "display" : "Urgent",
      "definition" : "The request should be actioned promptly - higher priority than routine."
    },
    {
      "code" : "asap",
      "display" : "ASAP",
      "definition" : "The request should be actioned as soon as possible - higher priority than urgent."
    },
    {
      "code" : "stat",
      "display" : "STAT",
      "definition" : "The request should be actioned immediately - highest possible priority. E.g. an emergency."
    }
  ]
}

```
