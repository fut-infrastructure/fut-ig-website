# ehealth-careplan - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-careplan**

## Resource Profile: ehealth-careplan 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-careplan |

# Introduction

A CarePlan describes the intention of how one or more practitioners intend to deliver care for a particular patient, group or community for a period of time, possibly limited to care for a specific condition or set of conditions.

# Scope and Usage

In scope of the eHealth infrastructure CarePlans represent specific tele-medicine plans prepared by a Practitioner and applied to a specific Patient for the treatment a condition such as chronic obstructive pulmonary disease (COPD).

### Hierarchies of care plans

A CarePlan can be constructed as a hierarchy of sub plans. The initial hierarchy is inherited from the PlanDefinition, but can be modified for the specific patient. This modification is possible both when instantiating the CarePlan and during execution of the plan.

Sub plans can be attached by making them `partOf` the parent plan.

### Restrictions on deletion

In order to preserve the context and history, it is not allowed to delete sub plans or remove ServiceRequest from the CarePlan. The `status` element can be used to either `cancel` or `complete` a CarePlan or ServiceRequest, if it is no longer relevant for the Patient.

The history of changes in `status` is automatically maintained in the element `ehealth-careplan-statusHistory`.

### Responsible CareTeam and responsibleHistory

A CarePlan can have a number of responsible CareTeam set in `careTeam`. The history of changes in `careTeam` is automatically maintained in the element `ehealth-teamHistory`.

### Participant

A CarePlan can have a number of Participants set in `participant`. Participants can have up to one function of either Primary or Secondary Contact, and can be of type Practitioner or CareTeam. One should not set the value `actorref` directly, but rather use the `actor` element to reference the Practitioner or CareTeam. The `actorref` element is used as a workaround, to allow searching with Composite search parameters.

**Usages:**

* Refer to this Profile: [ehealth-appointment](StructureDefinition-ehealth-appointment.md), [ehealth-careplan](StructureDefinition-ehealth-careplan.md), [Careplan](StructureDefinition-ehealth-clinicalimpression-careplan.md), [Context](StructureDefinition-ehealth-deviceusestatement-context.md)...Show 4 more,[ehealth-group-appointment](StructureDefinition-ehealth-group-appointment.md),[ehealth-group-videoappointment](StructureDefinition-ehealth-group-videoappointment.md),[ehealth-guidanceresponse](StructureDefinition-ehealth-guidanceresponse.md)and[ehealth-videoappointment](StructureDefinition-ehealth-videoappointment.md)
* CapabilityStatements using this Profile: [careplan](CapabilityStatement-careplan.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-careplan)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-careplan.csv), [Excel](StructureDefinition-ehealth-careplan.xlsx), [Schematron](StructureDefinition-ehealth-careplan.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-careplan",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan",
  "version" : "6.0.0",
  "name" : "ehealth-careplan",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "CarePlan",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/CarePlan",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "CarePlan",
        "path" : "CarePlan"
      },
      {
        "id" : "CarePlan.extension",
        "path" : "CarePlan.extension",
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
        "min" : 1
      },
      {
        "id" : "CarePlan.extension:episodeOfCare",
        "path" : "CarePlan.extension",
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
        "id" : "CarePlan.extension:episodeOfCare.value[x]",
        "path" : "CarePlan.extension.value[x]",
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
        "id" : "CarePlan.extension:statusHistory",
        "path" : "CarePlan.extension",
        "sliceName" : "statusHistory",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan-statusHistory"
            ]
          }
        ]
      },
      {
        "id" : "CarePlan.extension:teamHistory",
        "path" : "CarePlan.extension",
        "sliceName" : "teamHistory",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-teamHistory"
            ]
          }
        ]
      },
      {
        "id" : "CarePlan.extension:statusSchedule",
        "path" : "CarePlan.extension",
        "sliceName" : "statusSchedule",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan-statusschedule"
            ]
          }
        ]
      },
      {
        "id" : "CarePlan.extension:teamSchedule",
        "path" : "CarePlan.extension",
        "sliceName" : "teamSchedule",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-teamschedule"
            ]
          }
        ]
      },
      {
        "id" : "CarePlan.extension:participant",
        "path" : "CarePlan.extension",
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
        "id" : "CarePlan.extension:participant.extension:function",
        "path" : "CarePlan.extension.extension",
        "sliceName" : "function"
      },
      {
        "id" : "CarePlan.extension:participant.extension:function.value[x]",
        "path" : "CarePlan.extension.extension.value[x]",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/participant-function"
        }
      },
      {
        "id" : "CarePlan.instantiatesCanonical",
        "path" : "CarePlan.instantiatesCanonical",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "canonical",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition"
            ]
          }
        ]
      },
      {
        "id" : "CarePlan.basedOn",
        "path" : "CarePlan.basedOn",
        "max" : "0"
      },
      {
        "id" : "CarePlan.replaces",
        "path" : "CarePlan.replaces",
        "max" : "0"
      },
      {
        "id" : "CarePlan.partOf",
        "path" : "CarePlan.partOf",
        "max" : "1",
        "type" : [
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-hierarchy",
                "valueBoolean" : true
              }
            ],
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "CarePlan.status",
        "path" : "CarePlan.status",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.org/fhir/ValueSet/request-status"
        }
      },
      {
        "id" : "CarePlan.category",
        "path" : "CarePlan.category",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/careplan-category"
        }
      },
      {
        "id" : "CarePlan.subject",
        "path" : "CarePlan.subject",
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
        "id" : "CarePlan.period",
        "path" : "CarePlan.period",
        "min" : 1
      },
      {
        "id" : "CarePlan.author",
        "path" : "CarePlan.author",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam"
            ]
          }
        ]
      },
      {
        "id" : "CarePlan.careTeam",
        "path" : "CarePlan.careTeam",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "CarePlan.addresses",
        "path" : "CarePlan.addresses",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "CarePlan.supportingInfo",
        "path" : "CarePlan.supportingInfo",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Resource"],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "CarePlan.goal",
        "path" : "CarePlan.goal",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-goal"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "CarePlan.activity.outcomeReference",
        "path" : "CarePlan.activity.outcomeReference",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Resource"],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "CarePlan.activity.progress.author[x]",
        "path" : "CarePlan.activity.progress.author[x]",
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
        "id" : "CarePlan.activity.progress.author[x]:authorReference",
        "path" : "CarePlan.activity.progress.author[x]",
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
        "id" : "CarePlan.activity.progress.author[x]:authorString",
        "path" : "CarePlan.activity.progress.author[x]",
        "sliceName" : "authorString",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ]
      },
      {
        "id" : "CarePlan.activity.reference",
        "path" : "CarePlan.activity.reference",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest"
            ],
            "aggregation" : ["referenced", "referenced", "bundled"]
          }
        ]
      },
      {
        "id" : "CarePlan.activity.detail.reasonReference",
        "path" : "CarePlan.activity.detail.reasonReference",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "CarePlan.activity.detail.goal",
        "path" : "CarePlan.activity.detail.goal",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Goal"],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "CarePlan.activity.detail.location",
        "path" : "CarePlan.activity.detail.location",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Location"],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "CarePlan.activity.detail.performer",
        "path" : "CarePlan.activity.detail.performer",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "CarePlan.note.author[x]",
        "path" : "CarePlan.note.author[x]",
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
        "id" : "CarePlan.note.author[x]:authorReference",
        "path" : "CarePlan.note.author[x]",
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
        "id" : "CarePlan.note.author[x]:authorString",
        "path" : "CarePlan.note.author[x]",
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
