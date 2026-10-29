# Usage Context for Tele Wound Task Type - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Usage Context for Tele Wound Task Type **

## ValueSet: Usage Context for Tele Wound Task Type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/usage-context-task-type-tele-wound | *Version*:11.0.3 |
| Active as of 2026-01-19 | *Computable Name*:usageContextTaskTypeTeleWound |

 
Value set of task types for the Tele Wound domain. 

 **References** 

* Included into [Usage Context Task Type](ValueSet-vs-usage-context-task-type.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "vs-usage-context-task-type-tele-wound",
  "url" : "http://ehealth.sundhed.dk/vs/usage-context-task-type-tele-wound",
  "version" : "11.0.3",
  "name" : "usageContextTaskTypeTeleWound",
  "title" : "Usage Context for Tele Wound Task Type ",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-19T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set of task types for the Tele Wound domain.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "urn:oid:1.2.208.176.2.4",
      "concept" : [{
        "code" : "ZZ0150A"
      },
      {
        "code" : "DZ872"
      }]
    }]
  }
}

```
