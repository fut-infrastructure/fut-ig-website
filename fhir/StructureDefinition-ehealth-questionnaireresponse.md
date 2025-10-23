# ehealth-questionnaireresponse - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-questionnaireresponse**

## Resource Profile: ehealth-questionnaireresponse 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-questionnaireresponse |

# Introduction

QuestionnaireResponse provides a complete or partial list of answers to a set of questions filled when responding to a questionnaire.

# Scope and Usage

Some activities may involve answering a Questionnaire. The answer is captured in a QuestionnaireResponse. Questionnaires can be used for standalone information about the health of the patient, or they can be used to provide context information for Observations.

It is possible to search for QuestionnaireResponses based on:

* context
* subject
* code
* period
* deviceMeasuringQuality
* situationQuality
* operationQuality
* effectivePeriodStart
* effectivePeriodEnd

At least one of "subject" and "context" must be provided. "period" searches on range of "authored".

### Effective Period

`effectivePeriod` is intended to reflect the period for which the answers in the questionnaire response are considered applicable. In combination with `authored`, this can be used to describe that a questionnaire response about, say, patient's mood, reflects the previous week Monday to Sunday (stated in `effectivePeriod`), while entry of answers happened Monday this week (stated in `authored`). If the questionnaire response pertains to the patient's current state, the `effectivePeriod` could represent the start and end time of the period during which the questionnaire was completed.

Transformation of the QuestionnaireResponse to Questionnaire Response Document (QRD) representation requires that `effectivePeriod.start` has been specified and that `effectivePeriod.end`, when specified, differs from `effectivePeriod.start`.

**Usages:**

* Refer to this Profile: [ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md) and [ehealth-consent](StructureDefinition-ehealth-consent.md)
* CapabilityStatements using this Profile: [measurement](CapabilityStatement-measurement.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-questionnaireresponse)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-questionnaireresponse.csv), [Excel](StructureDefinition-ehealth-questionnaireresponse.xlsx), [Schematron](StructureDefinition-ehealth-questionnaireresponse.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-questionnaireresponse",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaireresponse",
  "version" : "6.0.0",
  "name" : "ehealth-questionnaireresponse",
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "QuestionnaireResponse",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "QuestionnaireResponse",
        "path" : "QuestionnaireResponse"
      },
      {
        "id" : "QuestionnaireResponse.extension",
        "path" : "QuestionnaireResponse.extension",
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
        "id" : "QuestionnaireResponse.extension:episodeOfCare",
        "path" : "QuestionnaireResponse.extension",
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
        "id" : "QuestionnaireResponse.extension:episodeOfCare.value[x]",
        "path" : "QuestionnaireResponse.extension.value[x]",
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
        "id" : "QuestionnaireResponse.extension:quality",
        "path" : "QuestionnaireResponse.extension",
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
        "id" : "QuestionnaireResponse.extension:resolvedTiming",
        "path" : "QuestionnaireResponse.extension",
        "sliceName" : "resolvedTiming",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing"
            ]
          }
        ]
      },
      {
        "id" : "QuestionnaireResponse.extension:effectivePeriod",
        "path" : "QuestionnaireResponse.extension",
        "sliceName" : "effectivePeriod",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-effectivePeriod"
            ]
          }
        ]
      },
      {
        "id" : "QuestionnaireResponse.basedOn",
        "path" : "QuestionnaireResponse.basedOn",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "QuestionnaireResponse.partOf",
        "path" : "QuestionnaireResponse.partOf",
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation",
              "http://hl7.org/fhir/StructureDefinition/Procedure"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "QuestionnaireResponse.questionnaire",
        "path" : "QuestionnaireResponse.questionnaire",
        "min" : 1,
        "type" : [
          {
            "code" : "canonical",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-questionnaire"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "QuestionnaireResponse.subject",
        "path" : "QuestionnaireResponse.subject",
        "min" : 1
      },
      {
        "id" : "QuestionnaireResponse.authored",
        "path" : "QuestionnaireResponse.authored",
        "min" : 1
      },
      {
        "id" : "QuestionnaireResponse.author",
        "path" : "QuestionnaireResponse.author",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "QuestionnaireResponse.source",
        "path" : "QuestionnaireResponse.source",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      }
    ]
  }
}

```
