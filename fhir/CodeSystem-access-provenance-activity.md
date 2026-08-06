# AccessProvenance Activity - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AccessProvenance Activity**

## CodeSystem: AccessProvenance Activity 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/access-provenance-activity | *Version*:10.0.0 |
| Active as of 2026-01-08 | *Computable Name*:AccessProvenanceActivity |

 
AccessProvenance Activity 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AccessProvenanceActivity](ValueSet-access-provenance-activity.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "access-provenance-activity",
  "url" : "http://ehealth.sundhed.dk/cs/access-provenance-activity",
  "version" : "10.0.0",
  "name" : "AccessProvenanceActivity",
  "title" : "AccessProvenance Activity",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-08T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "AccessProvenance Activity",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [{
    "code" : "user-authentication",
    "display" : "User authentication",
    "definition" : "User authentication"
  }]
}

```
