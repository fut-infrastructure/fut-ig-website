# ehealth-activitydefinition - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-activitydefinition**

## Resource Profile: ehealth-activitydefinition 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-activitydefinition | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-activitydefinition |

# Introduction

This resource allows for the definition of some activity to be performed, independent of a particular patient, practitioner, or other performance context.

# Scope and Usage

In the eHealth Infrastructure the ActivityDefinition resource is used together with PlanDefinition to define the steps to be performed in the course of a telemedical package. As the name implies, the ActivityDefinition resource is strictly definitional. It does not represent the intention to take any action, nor does it represent that any actions have been taken. Rather, the resource provides a definition that can be applied in the appropriate circumstances.

Once a PlanDefinition is applied to a Patient it is transformed into a CarePlan, and all of the PlanDefinition's underlying ActivityDefinitions are transformed into activities under the CarePlan.

The eHealth profile of ActivityDefinition has the following extensions:

* `ehealth-reuseCriteria` which defines whether resource(s) resulting from conducting the activity may be reused and if so with which criteria
* `ehealth-recommendation` which defines the recommendation level of this ActivityDefinition. The values of the used ValueSet allows for indicating the life cycle state, for instance that it is a draft or recommended ActivityDefinition.
* `ehealth-intendedAudience` can be set to one or more Organizations to indicate for which Organization(s) this ActivityDefinition should be selectable for use. This is meant for filtering and is not enforced or in any way restricting which Organization have access.
* `ehealth-referenceRange` can contain one or more reference ranges against which values in measurements (resource(s) resulting from conducting the activity) can be compared. The reference ranges in the ActivityDefinition function as templates assigned and adaptable to a particular Patient in the ServiceRequest reference ranges.
* `ehealth-modifier-role` see below.
* `ehealth-quality` The minimum quality levels that should be obtained with measurements (resource(s) resulting from conducting the activity). These do not constitute enforced levels but rather expectations which may or may not be met with actual submitted measurements.
* `ehealth-sharingPolicy` sets a stance on whether publication to national document sharing of the measurements (resource(s) resulting from conducting the activity) shall be allowed or not. The value in the ActivityDefinition function as a template assigned and adaptable to a particular Patient in a similar element in the ServiceRequest.
* `ehealth-sharingApprovalPolicy` Selects whether the approval of publication to national document sharing of measurements (resource(s) resulting from conducting the activity) must be done manually or if it is done automatically. The value in the ActivityDefinition function as a template assigned and adaptable to a particular Patient in a similar element in the ServiceRequest.

### Update restrictions

The element `ehealth-modifier-role` specifies one or more Organization and each Organization's role in maintaining the ActivityDefinition:

* `ehealth-modifier-role.reference` references the Organization
* `ehealth-modifier-role.role` set to `owner` means that the referenced Organization can update the resource and alter the entities referenced by `ehealth-modifier-role`, for instance, by adding more co-authors.
* `ehealth-modifier-role.role` set to `co-author` means that the referenced Organization can update the resource but not alter the element `ehealth-modifier-role`.

### Title and description

A ActivityDefinition has two sets of titles and desriptions. `title` and `description` are intended for the citizens and should be of a natural language. Whereas `ehealth-employee-title` and `usage` are intended for clinicians and should be of a specific and professional language.

### UseContext

The element `useContext` can be used to specify the context in which the ActivityDefinition is applicable. The element `useContext.code` is bound to the ValueSet http://hl7.org/fhir/ValueSet/use-context (see https://hl7.org/fhir/R4/valueset-use-context.html) and defines the context which the `useContext` can specify. The `useContext.valueCodeableConcept` defines the value (e.g. if the `useContext.code` is `focus`, the `useContext.valueCodeableConcept` can specify a specific condition). The element `useContext.valueCodeableConcept` is validated against the eHealth ValueSet http://ehealth.sundhed.dk/vs/ehealth-usage-context-type (see https://ehealth.sundhed.dk/fhir/ValueSet-ehealth-usage-context-type.html). The validation includes that the value in `useContext.valueCodeableConcept` is acceptable in the ValueSet described for `useContext.code`.

The `useContext` element can be updated at any time, regardless of the status of the ActivityDefinition.

An example of a `useContext` is that a ActivityDefinition is only applicable for use in a specific intended solution (Note: the code and display for the intended solution in the example are fictional):

```
{
  "useContext": [
    {
      "code": {
        "system": "http://hl7.org/fhir/ValueSet/use-context",
        "code": "program"
      },
      "valueCodeableConcept": {
        "system": "http://ehealth.sundhed.dk/cs/ehealth-program",
        "code": "some-intended-solution",
        "display": "Some Intended Solution"
      }
    }
  ]
}

```

### ApprovalDate

The date when the ActivityDefinition's `status` is set to `active`, whether it is initially created as active or changed to active, will be recorded in the `approvalDate` field.

**Usages:**

* Refer to this Profile: [ehealth-plandefinition](StructureDefinition-ehealth-plandefinition.md) and [ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md)
* CapabilityStatements using this Profile: [plan](CapabilityStatement-plan.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-activitydefinition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-activitydefinition.csv), [Excel](StructureDefinition-ehealth-activitydefinition.xlsx), [Schematron](StructureDefinition-ehealth-activitydefinition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-activitydefinition",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-activitydefinition",
  "version" : "6.0.0",
  "name" : "ehealth-activitydefinition",
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
      "identity" : "objimpl",
      "uri" : "http://hl7.org/fhir/object-implementation",
      "name" : "Object Implementation Information"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ActivityDefinition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ActivityDefinition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "ActivityDefinition",
        "path" : "ActivityDefinition"
      },
      {
        "id" : "ActivityDefinition.extension",
        "path" : "ActivityDefinition.extension",
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
        "id" : "ActivityDefinition.extension:reuseCriteria",
        "path" : "ActivityDefinition.extension",
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
        "id" : "ActivityDefinition.extension:recommendation",
        "path" : "ActivityDefinition.extension",
        "sliceName" : "recommendation",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-recommendation"
            ]
          }
        ]
      },
      {
        "id" : "ActivityDefinition.extension:intendedAudience",
        "path" : "ActivityDefinition.extension",
        "sliceName" : "intendedAudience",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-intendedAudience"
            ]
          }
        ]
      },
      {
        "id" : "ActivityDefinition.extension:referenceRange",
        "path" : "ActivityDefinition.extension",
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
        "id" : "ActivityDefinition.extension:modifierRole",
        "path" : "ActivityDefinition.extension",
        "sliceName" : "modifierRole",
        "min" : 1,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role"
            ]
          }
        ]
      },
      {
        "id" : "ActivityDefinition.extension:quality",
        "path" : "ActivityDefinition.extension",
        "sliceName" : "quality",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-quality"
            ]
          }
        ]
      },
      {
        "id" : "ActivityDefinition.extension:sharingPolicy",
        "path" : "ActivityDefinition.extension",
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
        "id" : "ActivityDefinition.extension:sharingApprovalPolicy",
        "path" : "ActivityDefinition.extension",
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
        "id" : "ActivityDefinition.extension:employeeTitle",
        "path" : "ActivityDefinition.extension",
        "sliceName" : "employeeTitle",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-employee-title"
            ]
          }
        ]
      },
      {
        "id" : "ActivityDefinition.extension:predecessor",
        "path" : "ActivityDefinition.extension",
        "sliceName" : "predecessor",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-predecessor"
            ]
          }
        ]
      },
      {
        "id" : "ActivityDefinition.extension:base",
        "path" : "ActivityDefinition.extension",
        "sliceName" : "base",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-base"
            ]
          }
        ]
      },
      {
        "id" : "ActivityDefinition.extension:baseEnvironment",
        "path" : "ActivityDefinition.extension",
        "sliceName" : "baseEnvironment",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-base-environment"
            ]
          }
        ]
      },
      {
        "id" : "ActivityDefinition.version",
        "path" : "ActivityDefinition.version",
        "min" : 1
      },
      {
        "id" : "ActivityDefinition.jurisdiction",
        "path" : "ActivityDefinition.jurisdiction",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/jurisdiction"
        }
      },
      {
        "id" : "ActivityDefinition.topic",
        "path" : "ActivityDefinition.topic",
        "min" : 1,
        "max" : "1",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/topic-type"
        }
      },
      {
        "id" : "ActivityDefinition.library",
        "path" : "ActivityDefinition.library",
        "type" : [
          {
            "code" : "canonical",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-library"
            ]
          }
        ]
      },
      {
        "id" : "ActivityDefinition.code",
        "path" : "ActivityDefinition.code",
        "min" : 1,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/activitydefinition-code"
        }
      },
      {
        "id" : "ActivityDefinition.location",
        "path" : "ActivityDefinition.location",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Location"],
            "aggregation" : ["referenced"]
          }
        ]
      }
    ]
  }
}

```
