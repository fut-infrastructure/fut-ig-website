# ehealth-goal - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-goal**

## Resource Profile: ehealth-goal 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-goal | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-goal |

# Introduction

Describes the intended objective(s) for a patient, group or organization care, for example, weight loss, restoring an activity of daily living, obtaining herd immunity via immunization, meeting a process improvement objective, etc.

# Scope and Usage

In scope of the eHealth infrastructure Goals are used together with reference ranges to configure triaging based on relative values.

This use is indicated by setting the code `reference-value` in Goal.description. This is currently the only type of Goal used in the infrastructure, but other types may be added in the future.

A Goal must have a startDate and optionally a target.dueDate or dueDuration to specify during which period the Goal applies.

Goal.addresses must reference exactly one serviceRequest containing the reference ranges that the Goal supports.

Goal.target.measure must contain an observation code indicating which type of observation the Goal is intended for.

**Usages:**

* Refer to this Profile: [ehealth-careplan](StructureDefinition-ehealth-careplan.md)
* CapabilityStatements using this Profile: [careplan](CapabilityStatement-careplan.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-goal)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-goal.csv), [Excel](StructureDefinition-ehealth-goal.xlsx), [Schematron](StructureDefinition-ehealth-goal.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-goal",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-goal",
  "version" : "6.0.0",
  "name" : "ehealth-goal",
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Goal",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Goal",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Goal",
        "path" : "Goal"
      },
      {
        "id" : "Goal.description",
        "path" : "Goal.description",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/goal-description"
        }
      },
      {
        "id" : "Goal.subject",
        "path" : "Goal.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Goal.target.measure",
        "path" : "Goal.target.measure",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/goal-target-measure"
        }
      },
      {
        "id" : "Goal.expressedBy",
        "path" : "Goal.expressedBy",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Goal.addresses",
        "path" : "Goal.addresses",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation",
              "http://hl7.org/fhir/StructureDefinition/MedicationStatement",
              "http://hl7.org/fhir/StructureDefinition/NutritionOrder",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest",
              "http://hl7.org/fhir/StructureDefinition/RiskAssessment"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Goal.outcomeReference",
        "path" : "Goal.outcomeReference",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      }
    ]
  }
}

```
