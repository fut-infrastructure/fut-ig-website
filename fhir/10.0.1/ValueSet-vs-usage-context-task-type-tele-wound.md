# Usage Context for Tele Wound Task Type - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Usage Context for Tele Wound Task Type **

## ValueSet: Usage Context for Tele Wound Task Type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/usage-context-task-type-tele-wound | *Version*:10.0.1 |
| Active as of 2026-01-19 | *Computable Name*:usageContextTaskTypeTeleWound |

 
Value set of task types for the Tele Wound domain. 

 **References** 

* Included into [usageContextTaskType](ValueSet-vs-usage-context-task-type.md)

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
  "id" : "vs-usage-context-task-type-tele-wound",
  "url" : "http://ehealth.sundhed.dk/vs/usage-context-task-type-tele-wound",
  "version" : "10.0.1",
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
