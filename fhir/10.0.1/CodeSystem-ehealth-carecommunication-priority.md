# eHealth CareCommunication Priority codes - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth CareCommunication Priority codes**

## CodeSystem: eHealth CareCommunication Priority codes 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/ehealth-carecommunication-priority | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:EhealthCareCommunicationPriorityCS |

 
The set of CareCommunication priority code. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EhealthCareCommunicationPriorityVS](ValueSet-ehealth-carecommunication-priority.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-carecommunication-priority",
  "url" : "http://ehealth.sundhed.dk/cs/ehealth-carecommunication-priority",
  "version" : "10.0.1",
  "name" : "EhealthCareCommunicationPriorityCS",
  "title" : "eHealth CareCommunication Priority codes",
  "status" : "active",
  "date" : "2026-08-11T06:32:53+00:00",
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
