# ehealth-servicerequest - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-servicerequest**

## Resource Profile: ehealth-servicerequest 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-servicerequest |

# Introduction

ServiceRequest is a record of a request for a procedure to be planned, proposed, or performed with or on a patient. Examples of procedures include diagnostic tests/studies, endoscopic procedures, counseling, biopsies, therapies (e.g., physio-, social-, psychological-), (exploratory) surgeries or procedures, exercises, and other clinical interventions. Procedures may be performed by a healthcare professional, a friend or relative or in some cases by the patient themselves.

# Scope and Usage

In scope of the eHealth infrastructure ServiceRequests are used with CarePlans to express actual measurement activities to be performed by a Patient in the context of a CarePlan.

The eHealth profile of ServiceRequest has the following extensions:

* `ehealth-reuseCriteria` which defines whether resource(s) resulting from conducting the activity, typically measurements or answering of Questionnaire may be reused and if so with which criteria. These are copied from the ActivityDefinition referenced in `definition` and can subsequently be adjusted to suit the particular Patient context
* `ehealth-referenceRange` can contain one or more reference ranges against which values in measurements (resource(s) resulting from conducting the activity) can be compared. These are copied from the ActivityDefinition referenced in `definition` and can subsequently be adjusted to suit the particular Patient context
* `ehealth-sharingPolicy` sets a stance on whether publication to national document sharing of the measurements (resource(s) resulting from conducting the activity) shall be allowed or not. The value is copied from the ActivityDefinition referenced in `definition` and can subsequently be adjusted to suit the particular Patient context.
* `ehealth-sharingApprovalPolicy` Selects whether the approval of publication to national document sharing of measurements (resource(s) resulting from conducting the activity) must be done manually or if it is done automatically. The initial value will be inherited from the ActivityDefinition referenced in `definition`, but can subsequently be adapted for the particular Patient by adjusting the ServiceRequest.
* `ehealth-servicerequest-statusHistory` contains history of changes in `status`, and is automatically maintained by the infrastructure.
* `ehealth-servicerequest-statusSchedule` contains a list of scheduled changes in `status`. The infrastructure applies these changes automatically, and will remove the entry for the change once it has been applied.

### Occurrence validity

The `occurrence[x]` field becomes both mandatory and must be valid when a ServiceRequest is marked as `active`, `on-hold`, or `completed`, as specified by `status` or `ehealth-servicerequest-statusSchedule`. This validation applies when updating either the CarePlan (if `status` or `ehealth-careplan-statusSchedule` is `active`) or the ServiceRequest.

The validity depends on the variant of `occurrence[x]` as follows:

* `occurrenceDateTime`: Shall contain a date-time with at least hours and minutes (and hence timezone).
* `occurrencePeriod`: Shall contain at least a `Period.start` containing a date-time with at least hours and minutes (and hence timezone).
* See the [wiki](https://ehealth-dk.atlassian.net/wiki/spaces/EDTW/pages/1661665301/Adhering+to+Care+Plans+and+Measurement+Regimes#When-an-Activity-is-Supposed-to-Happen---The-Notion-of-Resolved-Timing) for examples.

**Usages:**

* Refer to this Profile: [ehealth-careplan](StructureDefinition-ehealth-careplan.md), [ehealth-goal](StructureDefinition-ehealth-goal.md), [ehealth-media](StructureDefinition-ehealth-media.md), [ehealth-observation](StructureDefinition-ehealth-observation.md) and [ehealth-questionnaireresponse](StructureDefinition-ehealth-questionnaireresponse.md)
* CapabilityStatements using this Profile: [careplan](CapabilityStatement-careplan.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-servicerequest)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-servicerequest.csv), [Excel](StructureDefinition-ehealth-servicerequest.xlsx), [Schematron](StructureDefinition-ehealth-servicerequest.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-servicerequest",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest",
  "version" : "6.0.0",
  "name" : "ehealth-servicerequest",
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
      "identity" : "quick",
      "uri" : "http://siframework.org/cqf",
      "name" : "Quality Improvement and Clinical Knowledge (QUICK)"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ServiceRequest",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ServiceRequest",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "ServiceRequest",
        "path" : "ServiceRequest"
      },
      {
        "id" : "ServiceRequest.extension",
        "path" : "ServiceRequest.extension",
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
        "min" : 3
      },
      {
        "id" : "ServiceRequest.extension:episodeOfCare",
        "path" : "ServiceRequest.extension",
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
        "id" : "ServiceRequest.extension:episodeOfCare.value[x]",
        "path" : "ServiceRequest.extension.value[x]",
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
        "id" : "ServiceRequest.extension:referenceRange",
        "path" : "ServiceRequest.extension",
        "sliceName" : "referenceRange",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-referenceRange"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.extension:sharingPolicy",
        "path" : "ServiceRequest.extension",
        "sliceName" : "sharingPolicy",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.extension:sharingApprovalPolicy",
        "path" : "ServiceRequest.extension",
        "sliceName" : "sharingApprovalPolicy",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingApprovalPolicy"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.extension:reuseCriteria",
        "path" : "ServiceRequest.extension",
        "sliceName" : "reuseCriteria",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-reuseCriteria"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.extension:triggerEnablementCode",
        "path" : "ServiceRequest.extension",
        "sliceName" : "triggerEnablementCode",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-trigger-enablement-code"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.extension:statusHistory",
        "path" : "ServiceRequest.extension",
        "sliceName" : "statusHistory",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest-statusHistory"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.extension:statusSchedule",
        "path" : "ServiceRequest.extension",
        "sliceName" : "statusSchedule",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest-statusSchedule"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.extension:includeAsExtra",
        "path" : "ServiceRequest.extension",
        "sliceName" : "includeAsExtra",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.instantiatesCanonical",
        "path" : "ServiceRequest.instantiatesCanonical",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "canonical",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-activitydefinition"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.basedOn",
        "path" : "ServiceRequest.basedOn",
        "max" : "0"
      },
      {
        "id" : "ServiceRequest.replaces",
        "path" : "ServiceRequest.replaces",
        "max" : "0"
      },
      {
        "id" : "ServiceRequest.code",
        "path" : "ServiceRequest.code",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/activitydefinition-code"
        }
      },
      {
        "id" : "ServiceRequest.subject",
        "path" : "ServiceRequest.subject",
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
        "id" : "ServiceRequest.performer",
        "path" : "ServiceRequest.performer",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam",
              "http://hl7.org/fhir/StructureDefinition/HealthcareService"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "ServiceRequest.reasonReference",
        "path" : "ServiceRequest.reasonReference",
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
        "id" : "ServiceRequest.note.author[x]",
        "path" : "ServiceRequest.note.author[x]",
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
        "id" : "ServiceRequest.note.author[x]:authorReference",
        "path" : "ServiceRequest.note.author[x]",
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
        "id" : "ServiceRequest.note.author[x]:authorString",
        "path" : "ServiceRequest.note.author[x]",
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
        "id" : "ServiceRequest.relevantHistory",
        "path" : "ServiceRequest.relevantHistory",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      }
    ]
  }
}

```
