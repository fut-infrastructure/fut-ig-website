# ehealth-material-communication - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-material-communication**

## Resource Profile: ehealth-material-communication 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-material-communication | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-material-communication |

# Introduction

The FHIR resource Communication is a record of a communication. A communication is a conveyance of information from one entity, a sender, to another entity, a receiver.

This profile, the ehealth-material-communication, is intended for assigning **Material for Citizens** referenced by a DocumentReference to a Patient and EpisodeOfCare. See the `Material for Citizens` section in the [eHealth DocumentReference profile](StructureDefinition-ehealth-documentreference.md).

# Scope and Usage

In the eHealth infrastructure, the assignment is done by creating a Communication resource with the following characteristics:

* `Communication.subject` → The patient to whom the material is assigned. 
* If the material being assigned is **Patient-specific material** (the material has patient-specific content), the patient must be the same as the one referenced in the `DocumentReference.subject`.
 
* `Communication.episodeOfCare` → The episode of care to which the material is assigned. 
* If the material being assigned is **Patient-specific material** (the material has patient-specific content), the episode of care must be the same as the one referenced in the `DocumentReference.context.encounter`.
 
* `Communication.recipient` → The patient to whom the material is assigned. 
* If present, must be the same as the subject.
 
* `Communication.payload` → The `DocumentReference` for the material being assigned. 
* Must be a reference to an ehealth-documentreference resource from either the Plan or CarePlan service.
 
* `Communication.participant` → The assigner of the material. 
* Must be a Practitioner or CareTeam.
 
* `Communication.sent` → Time of assignment.
* `Communication.period` → Time period during which the material is available to the patient.
* `Communication.category` → The category of the communication. 
* Must be populated with a code from the [material-communication-category](https://ehealth.sundhed.dk/fhir/ValueSet-material-communication-category.html) ValueSet. Currently only contains the code `material-assignment`.
 
* `Communication.status` → The status of the assignment. The value `in-progress` reflects an active assignment while `completed` reflects an assignment that has been active but is done.

After creation in the infrastructure several fields in the ehealth-material-communication are immutable as updating them could significantly impact the validity of the assignment.

* `Communication.subject`
* `Communication.recipient`
* `Communication.episodeOfCare`
* `Communication.category`

# Boundaries and Relationships

In scope of the eHealth infrastructure, FHIR Communication is also used in the profiles ehealth-message, used for capturing written communication in the form of messages, notifications, advises and personal notes, and ehealth-communication, used for annotating a specific submitted measurement.

The ehealth-material-communication differs in that it is solely used for representing the assignment of Material for Citizens to a Patient and EpisodeOfCare. Indicating that the patient has access to a given piece of material. It is not intended for relaying any advice, message, notes or annotations.

**Usages:**

* CapabilityStatements using this Profile: [careplan](CapabilityStatement-careplan.md)
* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-material-communication)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-material-communication.csv), [Excel](StructureDefinition-ehealth-material-communication.xlsx), [Schematron](StructureDefinition-ehealth-material-communication.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-material-communication",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-material-communication",
  "version" : "6.0.0",
  "name" : "ehealth-material-communication",
  "status" : "active",
  "date" : "2025-10-23T10:34:08+00:00",
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Communication",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Communication",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Communication",
        "path" : "Communication"
      },
      {
        "id" : "Communication.extension",
        "path" : "Communication.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 2
      },
      {
        "id" : "Communication.extension:participant",
        "path" : "Communication.extension",
        "sliceName" : "participant",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-participant"
            ]
          }
        ]
      },
      {
        "id" : "Communication.extension:participant.extension:function",
        "path" : "Communication.extension.extension",
        "sliceName" : "function"
      },
      {
        "id" : "Communication.extension:participant.extension:function.value[x]",
        "path" : "Communication.extension.extension.value[x]",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/material-assignment-participant-function"
        }
      },
      {
        "id" : "Communication.extension:episodeOfCare",
        "path" : "Communication.extension",
        "sliceName" : "episodeOfCare",
        "min" : 1,
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
        "id" : "Communication.extension:episodeOfCare.value[x]",
        "path" : "Communication.extension.value[x]",
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
        "id" : "Communication.extension:period",
        "path" : "Communication.extension",
        "sliceName" : "period",
        "short" : "Specifies the temporal validity of an material communication instance",
        "definition" : "Specifies the temporal validity of an material communication instance. Contains a period, eg. specifying temporal validity",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-period"
            ]
          }
        ]
      },
      {
        "id" : "Communication.category",
        "path" : "Communication.category",
        "min" : 1,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/material-communication-category"
        }
      },
      {
        "id" : "Communication.subject",
        "path" : "Communication.subject",
        "min" : 1
      },
      {
        "id" : "Communication.recipient",
        "path" : "Communication.recipient",
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Patient"],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Communication.payload.content[x]",
        "path" : "Communication.payload.content[x]",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/DocumentReference"],
            "aggregation" : ["referenced"]
          }
        ]
      }
    ]
  }
}

```
