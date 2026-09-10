# Usage Context for Tele Wound Workflow - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Usage Context for Tele Wound Workflow **

## ValueSet: Usage Context for Tele Wound Workflow 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/usage-context-workflow-tele-wound | *Version*:10.0.2 |
| Active as of 2026-01-19 | *Computable Name*:usageContextWorkflowTeleWound |

 
Value set of workflows for Tele Wound 

 **References** 

* Included into [Usage Context Workflow](ValueSet-vs-usage-context-workflow.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "vs-usage-context-workflow-tele-wound",
  "url" : "http://ehealth.sundhed.dk/vs/usage-context-workflow-tele-wound",
  "version" : "10.0.2",
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
