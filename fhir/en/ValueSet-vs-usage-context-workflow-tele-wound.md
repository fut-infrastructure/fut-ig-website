# Usage Context for Tele Wound Workflow - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Usage Context for Tele Wound Workflow **

## ValueSet: Usage Context for Tele Wound Workflow 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/usage-context-workflow-tele-wound | *Version*:11.0.1 |
| Active as of 2026-01-19 | *Computable Name*:usageContextWorkflowTeleWound |

 
Value set of workflows for Tele Wound 

 **References** 

* Included into [Usage Context Workflow](ValueSet-vs-usage-context-workflow.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "vs-usage-context-workflow-tele-wound",
  "url" : "http://ehealth.sundhed.dk/vs/usage-context-workflow-tele-wound",
  "version" : "11.0.1",
  "name" : "usageContextWorkflowTeleWound",
  "title" : "Usage Context for Tele Wound Workflow ",
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
  "description" : "Value set of workflows for Tele Wound",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "225395003",
        "display" : "Wound assessment (procedure)"
      },
      {
        "code" : "225358003",
        "display" : "Wound care (regime/therapy)"
      }]
    }]
  }
}

```
