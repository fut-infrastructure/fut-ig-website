# ehealth-condition - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-condition**

## Resource Profile: ehealth-condition 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-condition |

# Introduction

A Condition is a clinical condition, problem, diagnosis, or other event, situation, issue, or clinical concept that has risen to a level of concern.

**Usages:**

* Refer to this Profile: [ehealth-careplan](StructureDefinition-ehealth-careplan.md), [ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md), [ehealth-communication](StructureDefinition-ehealth-communication.md), [ehealth-episodeofcare](StructureDefinition-ehealth-episodeofcare.md)...Show 2 more,[ehealth-goal](StructureDefinition-ehealth-goal.md)and[ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md)
* Examples for this Profile: [Condition/42](Condition-42.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-condition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-condition.csv), [Excel](StructureDefinition-ehealth-condition.xlsx), [Schematron](StructureDefinition-ehealth-condition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-condition",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition",
  "version" : "6.0.0",
  "name" : "ehealth-condition",
  "status" : "active",
  "date" : "2025-10-23T10:25:37+00:00",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "sct-concept",
      "uri" : "http://snomed.info/conceptdomain",
      "name" : "SNOMED CT Concept Domain Binding"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "sct-attr",
      "uri" : "http://snomed.org/attributebinding",
      "name" : "SNOMED CT Attribute Binding"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Condition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Condition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Condition",
        "path" : "Condition"
      },
      {
        "id" : "Condition.extension",
        "path" : "Condition.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Condition.extension:episodeOfCare",
        "path" : "Condition.extension",
        "sliceName" : "episodeOfCare",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare"
            ]
          }
        ]
      },
      {
        "id" : "Condition.extension:episodeOfCare.value[x]",
        "path" : "Condition.extension.value[x]",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Condition.code",
        "path" : "Condition.code",
        "min" : 1,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/conditions"
        }
      },
      {
        "id" : "Condition.subject",
        "path" : "Condition.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://hl7.org/fhir/StructureDefinition/Group"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Condition.asserter",
        "path" : "Condition.asserter",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Condition.stage.assessment",
        "path" : "Condition.stage.assessment",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression",
              "http://hl7.org/fhir/StructureDefinition/DiagnosticReport",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Condition.note.author[x]",
        "path" : "Condition.note.author[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Condition.note.author[x]:authorReference",
        "path" : "Condition.note.author[x]",
        "sliceName" : "authorReference",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Condition.note.author[x]:authorString",
        "path" : "Condition.note.author[x]",
        "sliceName" : "authorString",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ]
      }
    ]
  }
}

```
