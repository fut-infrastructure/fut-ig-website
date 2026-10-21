# eHealth CareCommunication Priority codes - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth CareCommunication Priority codes**

## CodeSystem: eHealth CareCommunication Priority codes 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/ehealth-carecommunication-priority | *Version*:11.0.0 |
| Active as of 2026-10-21 | *Computable Name*:EhealthCareCommunicationPriorityCS |

 
The set of CareCommunication priority code. 

This Code system is referenced in the definition of the following value sets:

* [eHealth CareCommunication Priorities](ValueSet-ehealth-carecommunication-priority.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-carecommunication-priority",
  "url" : "http://ehealth.sundhed.dk/cs/ehealth-carecommunication-priority",
  "version" : "11.0.0",
  "name" : "EhealthCareCommunicationPriorityCS",
  "title" : "eHealth CareCommunication Priority codes",
  "status" : "active",
  "date" : "2026-10-21T13:41:32+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "The set of CareCommunication priority code.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "content" : "complete",
  "count" : 2,
  "concept" : [{
    "code" : "routine",
    "display" : "Routine"
  },
  {
    "code" : "asap",
    "display" : "ASAP"
  }]
}

```
