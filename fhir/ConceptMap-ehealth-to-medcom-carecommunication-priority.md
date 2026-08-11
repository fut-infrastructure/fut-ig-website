# eHealth to MedCom CareCommunication Priority Map - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth to MedCom CareCommunication Priority Map**

## ConceptMap: eHealth to MedCom CareCommunication Priority Map 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cm/ehealth-to-medcom-carecommunication-priority | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*: |



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ehealth-to-medcom-carecommunication-priority",
  "url" : "http://ehealth.sundhed.dk/cm/ehealth-to-medcom-carecommunication-priority",
  "version" : "10.0.1",
  "title" : "eHealth to MedCom CareCommunication Priority Map",
  "status" : "active",
  "date" : "2026-08-11T06:44:23+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "group" : [{
    "source" : "http://ehealth.sundhed.dk/cs/ehealth-carecommunication-priority",
    "target" : "http://medcomfhir.dk/ig/terminology/ValueSet/medcom-careCommunication-requestPriority",
    "element" : [{
      "code" : "routine",
      "target" : [{
        "code" : "routine",
        "display" : "Routine",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "asap",
      "target" : [{
        "code" : "asap",
        "display" : "ASAP",
        "equivalence" : "relatedto"
      }]
    }]
  }]
}

```
