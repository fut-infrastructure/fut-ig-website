# ehealth-clinicalimpression - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-clinicalimpression**

## Resource Profile: ehealth-clinicalimpression 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-clinicalimpression |

# Introduction

A record of a clinical assessment performed to determine what problem(s) may affect the patient and before planning the treatments or management strategies that are best to manage a patient's condition. Assessments are often 1:1 with a clinical consultation / encounter, but this varies greatly depending on the clinical workflow. This resource is called "ClinicalImpression" rather than "ClinicalAssessment" to avoid confusion with the recording of assessment tools such as Apgar score.

# Scope and Usage

In scope of the eHealth Infrastructure, the ClinicalImpression resource is used for:

* representing the result of automated processing such as triaging and decision support performed on submitted measurement(s)
* representing a placeholder for subsequent Practitioner assessment. This ClinicalImpression instance is generated when no instance is otherwise created as per automated processing described above.
* representing an assessment of a Practitioner such as approval and/or approval for publication in national document sharing
* representing an approval for using an InterpretedView (ehealth-view) for QuestionnaireResponses

The element `code` specifies which of the above uses is the case.

The ClinicalImpression can refer to another ClinicalImpression through the element `previous`. It can also refer to measurement resources such as Observation, QuestionnaireResponse and Media through a number of `investigation.item`.

### Use for Decision Support Result / Triaging Result

With the extension `ehealth-clinicalimpression-decisionContext`, the ClinicalImpression is able to capture decision support invocations such as the automated triaging. This entails:

* decision rule identification in the form of a versioned reference to the Library containing the decision rule details including input and output parameter definitions
* actual parameter values used at invocation, in the form of versioned references to resource(s), for instance input Observation

### Use for Triaging Result Basis

With the extension `ehealth-questionnaireresponse-finding-basis`, the foundation of the overall ClinicalImpression finding can be expressed.

The extension consists of a list, where each element in the list represents an answer significance which was triggered during triage.

Each element includes the following:

* linkId of the question/answer pair which triggered the finding basis
* the value of the answer. This element is not populated if the answer significance condition operator is "exists", and the condition value is false.
* the clinical impression finding code corresponding to the triggered answer significance
* the triggered ehealth-questionnaire-answerSignificance

### Use for Practitioner's Assessment

The ClinicalImpression instance for the Practitioner assessment can refer to a ClinicalImpression instance of the other types through the element `previous`.

The element `ehealth-clinicalimpression-decision` contains the Practitioner's assessment of the measurement/triaging result/decision support result, that is whether the measurement/result is approved and/or approved for publishing in national document sharing.

In case the Practitioner has comments or notes, these can be captured as one or more occurrences of the element `note.text`.

### Use for approving InterpretedView

The element `code` must be set to approved-view

The element `ehealth-clinicalimpression-decision` must be set to citizen-view-approved

The element `investigation.ehealth-clinicalimpression-viewInvestigationItem` must contain references to the ehealth-views that are approved.

The element `investigation.item` must contain references to the QuestionnaireResponses that may use the views.

This indicates to the patient solution that the patient referenced in the `subject` element is allowed to use the InterpretedViews for the specified QuestionnaireResponses.

### Required if CarePlan is known

1. The ClinicalImpression.ehealth-clinicalimpression-careplan must be set when the ClinicalImpression references a resource that somewhere in the reference chain references a CarePlan.
* For example, when a Practitioner assessment ClinicalImpression refers another ClinicalImpression through the element `previous` then it must also have the `ehealth-clinicalimpression-careplan` element set, referring the same CarePlan as the `previous` ClinicalImpression.

1. A ClinicalImpression is not allowed to concern resources from different CarePlans, for example Observations from different CarePlans.

### Used for manual approval of measurement sharing

The element `assessorOrganization` is automatically set by the infrastructure to reflect the organizational context of the assessor who performed the assessment, when a ClinicalImpression is created to indicate the approval of document sharing.

* In the case of a manual approval, the element `assessorOrganization` will automatically be set to the organizational context of the Practitioner who performed the assessment.
* In the case of an automated approval, the element `assessorOrganization` will automatically be set to the CarePlan.author if possible, else it will be the EpisodeOfCare.caremanagerOrganization.

**Usages:**

* Refer to this Profile: [ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md) and [ehealth-condition](StructureDefinition-ehealth-condition.md)
* CapabilityStatements using this Profile: [task](CapabilityStatement-task.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-clinicalimpression)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-clinicalimpression.csv), [Excel](StructureDefinition-ehealth-clinicalimpression.xlsx), [Schematron](StructureDefinition-ehealth-clinicalimpression.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-clinicalimpression",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression",
  "version" : "6.0.0",
  "name" : "ehealth-clinicalimpression",
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
  "type" : "ClinicalImpression",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ClinicalImpression",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "ClinicalImpression",
        "path" : "ClinicalImpression"
      },
      {
        "id" : "ClinicalImpression.extension",
        "path" : "ClinicalImpression.extension",
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
        "id" : "ClinicalImpression.extension:assessorOrganization",
        "path" : "ClinicalImpression.extension",
        "sliceName" : "assessorOrganization",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-assessor-organization"
            ]
          }
        ]
      },
      {
        "id" : "ClinicalImpression.extension:assessorOther",
        "path" : "ClinicalImpression.extension",
        "sliceName" : "assessorOther",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-assessor-other"
            ]
          }
        ]
      },
      {
        "id" : "ClinicalImpression.extension:carePlan",
        "path" : "ClinicalImpression.extension",
        "sliceName" : "carePlan",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-careplan"
            ]
          }
        ]
      },
      {
        "id" : "ClinicalImpression.extension:decisionContext",
        "path" : "ClinicalImpression.extension",
        "sliceName" : "decisionContext",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-decisionContext"
            ]
          }
        ]
      },
      {
        "id" : "ClinicalImpression.extension:decision",
        "path" : "ClinicalImpression.extension",
        "sliceName" : "decision",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-decision"
            ]
          }
        ]
      },
      {
        "id" : "ClinicalImpression.extension:episodeOfCare",
        "path" : "ClinicalImpression.extension",
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
        "id" : "ClinicalImpression.extension:episodeOfCare.value[x]",
        "path" : "ClinicalImpression.extension.value[x]",
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
        "id" : "ClinicalImpression.extension:findingBasis",
        "path" : "ClinicalImpression.extension",
        "sliceName" : "findingBasis",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse-finding-basis"
            ]
          }
        ]
      },
      {
        "id" : "ClinicalImpression.code",
        "path" : "ClinicalImpression.code",
        "min" : 1,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/clinicalimpression-codes"
        }
      },
      {
        "id" : "ClinicalImpression.subject",
        "path" : "ClinicalImpression.subject",
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
        "id" : "ClinicalImpression.assessor",
        "path" : "ClinicalImpression.assessor",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "ClinicalImpression.previous",
        "path" : "ClinicalImpression.previous",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "ClinicalImpression.problem",
        "path" : "ClinicalImpression.problem",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition",
              "http://hl7.org/fhir/StructureDefinition/AllergyIntolerance"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "ClinicalImpression.investigation.extension",
        "path" : "ClinicalImpression.investigation.extension",
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
        "id" : "ClinicalImpression.investigation.extension:viewInvestigationItem",
        "path" : "ClinicalImpression.investigation.extension",
        "sliceName" : "viewInvestigationItem",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-clinicalimpression-viewInvestigationItem"
            ]
          }
        ]
      },
      {
        "id" : "ClinicalImpression.investigation.code",
        "path" : "ClinicalImpression.investigation.code",
        "binding" : {
          "strength" : "example",
          "valueSet" : "http://ehealth.sundhed.dk/vs/clinicalimpression-investigation-item-codes"
        }
      },
      {
        "id" : "ClinicalImpression.investigation.item",
        "path" : "ClinicalImpression.investigation.item",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-media",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse",
              "http://hl7.org/fhir/StructureDefinition/FamilyMemberHistory",
              "http://hl7.org/fhir/StructureDefinition/DiagnosticReport",
              "http://hl7.org/fhir/StructureDefinition/RiskAssessment",
              "http://hl7.org/fhir/StructureDefinition/ImagingStudy"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "ClinicalImpression.finding.itemCodeableConcept",
        "path" : "ClinicalImpression.finding.itemCodeableConcept",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/clinicalimpression-finding-codes"
        }
      },
      {
        "id" : "ClinicalImpression.finding.itemReference",
        "path" : "ClinicalImpression.finding.itemReference",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/StructureDefinition/Observation",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition"
            ]
          }
        ]
      },
      {
        "id" : "ClinicalImpression.prognosisReference",
        "path" : "ClinicalImpression.prognosisReference",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/RiskAssessment"],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "ClinicalImpression.note.author[x]",
        "path" : "ClinicalImpression.note.author[x]",
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
        "id" : "ClinicalImpression.note.author[x]:authorReference",
        "path" : "ClinicalImpression.note.author[x]",
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
        "id" : "ClinicalImpression.note.author[x]:authorString",
        "path" : "ClinicalImpression.note.author[x]",
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
