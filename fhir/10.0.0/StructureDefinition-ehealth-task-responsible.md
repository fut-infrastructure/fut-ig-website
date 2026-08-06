# Task responsible - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Task responsible**

## Extension: Task responsible 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-responsible | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:ehealth-task-responsible |

Individual organization or Device currently responsible for task execution.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-task](StructureDefinition-ehealth-task.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-task-responsible.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-task-responsible.csv), [Excel](StructureDefinition-ehealth-task-responsible.xlsx), [Schematron](StructureDefinition-ehealth-task-responsible.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-task-responsible",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-responsible",
  "version" : "10.0.0",
  "name" : "ehealth-task-responsible",
  "title" : "Task responsible",
  "status" : "active",
  "date" : "2026-08-06T13:17:54+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Individual organization or Device currently responsible for task execution.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "Element"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Responsible entity",
      "definition" : "Individual organization or Device currently responsible for task execution."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-task-responsible"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
        "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
        "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson",
        "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam"]
      }]
    }]
  }
}

```
