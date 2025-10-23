# ehealth-communication - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-communication**

## Resource Profile: ehealth-communication 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-communication |

# Introduction

The FHIR resource Communication is a record of a communication. A communication is a conveyance of information from one entity, a sender, to another entity, a receiver.

This profile, the ehealth-communication, is intended for use of the FHIR Communication for capturing an annotation about a measurement. Such an annotation could for example describe circumstances about a particular Observation, QuestionnaireResponse or Media submitted by a Patient.

# Scope and Usage

In the eHealth infrastructure, the annotation is defined using the following elements:

* `sender` refers to the creator and owner of the annotation
* `ehealth-communication-senderCareTeam` has same function as `sender` but is used where the creator and owner is one or more CareTeams
* `recipient` refers to the entities allowed to read the annotation
* `ehealth-communication-recipientCareTeam` has same function as `recipient` but is used where the allowed reading entity is one or more CareTeams
* `ehealth-restriction-category` indicates, when `ehealth-communication-senderCareTeam` and/or `ehealth-communication-recipientCareTeam` refer to one or more CareTeams, what workflow areas/responsibilities of members of those CareTeams that the annotation is relevant for.
* `topic` refers to the measurement which the annotation is about. This can be zero or more Observation, zero or more QuestionnaireResponse and zero or more Media. At least one of Observation, QuestionnaireResponse or Media should be referred for the annotation to make sense.
* `payload` contains the annotation text itself

# Boundaries and Relationships

In scope of the eHealth infrastructure, FHIR Communication is also used in the profile ehealth-message where a FHIR Communication captures written communication in the form of messages, notifications and advises. The ehealth-message profile is also used for personal notes.

A personal note differ from an annotation in that the latter is specific for measurements where the former has broader scope.

**Usages:**

* CapabilityStatements using this Profile: [measurement](CapabilityStatement-measurement.md) and [patient](CapabilityStatement-patient.md)
* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-communication)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-communication.csv), [Excel](StructureDefinition-ehealth-communication.xlsx), [Schematron](StructureDefinition-ehealth-communication.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-communication",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication",
  "version" : "6.0.0",
  "name" : "ehealth-communication",
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
        "id" : "Communication.extension:recipientCareTeam",
        "path" : "Communication.extension",
        "sliceName" : "recipientCareTeam",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam"
            ]
          }
        ]
      },
      {
        "id" : "Communication.extension:senderCareTeam",
        "path" : "Communication.extension",
        "sliceName" : "senderCareTeam",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam"
            ]
          }
        ]
      },
      {
        "id" : "Communication.extension:restrictionCategory",
        "path" : "Communication.extension",
        "sliceName" : "restrictionCategory",
        "min" : 1,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category"
            ]
          }
        ]
      },
      {
        "id" : "Communication.basedOn",
        "path" : "Communication.basedOn",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Resource"],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Communication.partOf",
        "path" : "Communication.partOf",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Resource"],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Communication.category",
        "path" : "Communication.category",
        "min" : 1,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/communication-category"
        }
      },
      {
        "id" : "Communication.subject",
        "path" : "Communication.subject",
        "min" : 1,
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
        "id" : "Communication.recipient",
        "path" : "Communication.recipient",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Communication.sender",
        "path" : "Communication.sender",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Communication.reasonReference",
        "path" : "Communication.reasonReference",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Communication.payload.content[x]",
        "path" : "Communication.payload.content[x]",
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
        "id" : "Communication.payload.content[x]:contentString",
        "path" : "Communication.payload.content[x]",
        "sliceName" : "contentString",
        "min" : 1,
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
