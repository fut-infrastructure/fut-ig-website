# ehealth-observation - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-observation**

## Resource Profile: ehealth-observation 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-observation |

# Introduction

An Observation contains the result of a measurement performed by the Patient. It is based on a ServiceRequest that contains information about what to measure and when to measure.

In addition to the result and context, the Observation also contains information about the device used to perform the measurement and reference ranges copied from the ServiceRequest. Reference ranges can change over time, so the copy ensures that the reference range at the time of measurement is preserved.

The eHealth Infrastructure will assist in calculating qualities of the measurement. The observation will be annotated with these qualities.

# Scope and Usage

In the eHealth Infrastructure the Observation resource is used in conjunction with the following resources.

* Media 
* Some Observations may be accompanied by media. E.g. images.
 
* QuestionnaireResponse 
* Some activities may involve answering a Questionnaire. The answer is captured in a QuestionnaireResponse. Questionnaires can be used for standalone information about the health of the patient, or they can be used to provide context information for Observations.
 
* Communication 
* Communication resources can be used to annotate Observations. See the profile ehealth-communication for further details.
 
* Provenance 
* In certain circumstances data from Observations and QuestionnaireResponses can be reused. When this happens, a Provenance resource will identify the source of the original data.
* Provenance is also used to link correlated resources submitted together.
 

### Submitting Observation bundles

Observations can be submitted using the submit-measurement operation. It is possible to submit a bundle of related resources containing:

* Observations
* Media
* QuestionnaireResponses
* Provenances

The submit-measurement operation is intended for uploading single measurements, not bulk uploads. Uploading large batches of resources is considered misuse.

The entire bundle is validated and then saved in a single transaction.

Observations are generally immutable once the bundle is saved. Further information about the observation can be added in separate resources like Provenance and Communication.

##### Marking Observations as "reused"

When a submitted Observation is actually reuse of a previous measurement, this must be marked by the submitter by added a Provenance resource with certain pre-defined properties.

* `Provenance` 
* `.target` must reference all reused resources in the submitted bundle; e.g. the Observation, QuestionnaireResponse or Media containing a copy of the reused values.
* `.activity` must have value "Quotation" ("wasQuotedFrom") from FHIR ValueSet https://www.hl7.org/fhir/stu3/codesystem-w3c-provenance-activity-type.html#w3c-provenance-activity-type-Quotation
* `.policy` must have value "http://ehealth.sundhed.dk/policy/ehealth/reuse-by-patient"
* `.agent.whoReference` must reference the Patient who decided to reuse
* `.entity.role` = "quotation"
* `.entity.what` = must be reference to Observation, QuestionnaireResponse or Media being reused.
 

The Provenance resource needs not be supplied for resources which are not being used. However, for non-reused resources, a Provenance resource with `.activity` = "Primary-Source" can be used to indicate a newly obtained (not reused) Observation, QuestionnaireResponse or Media.

##### Marking Resources submitted in same bundle

When an Observation-bundle is submitted the eHealth Infrastructure will automatically create a Provenance resource, which identifies the resources which were submitted in the same bundle.

The search-measurements operation can return the resources submitted as part of the same bundle.

##### Marking Observations with result missing

An Observation is expected to contain a result along with details, for instance when it was obtained. In the event that no result can be measured or otherwise obtained, an Observation can be submitted with the `.dataAbsentReason` specified.

### Searching for Observations

It is possible to search for Observations based on:

* context
* subject
* code
* period
* deviceMeasuringQuality
* situationQuality
* operationQuality

At least one of "subject" and "context" must be provided. "period" searches on range of "effective".

See [Searching](https://www.hl7.org/fhir/stu3/search.html) for more information about searching in REST, messaging, and services.

**Usages:**

* Derived from this Profile: [ehealth-observation-wound-dimensions](StructureDefinition-ehealth-observation-wound-dimensions.md)
* Refer to this Profile: [ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md), [ehealth-communication](StructureDefinition-ehealth-communication.md), [ehealth-condition](StructureDefinition-ehealth-condition.md), [ehealth-goal](StructureDefinition-ehealth-goal.md)...Show 3 more,[ehealth-observation-wound-dimensions](StructureDefinition-ehealth-observation-wound-dimensions.md),[ehealth-questionnaireresponse](StructureDefinition-ehealth-questionnaireresponse.md)and[ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md)
* CapabilityStatements using this Profile: [measurement](CapabilityStatement-measurement.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-observation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-observation.csv), [Excel](StructureDefinition-ehealth-observation.xlsx), [Schematron](StructureDefinition-ehealth-observation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-observation",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation",
  "version" : "6.0.0",
  "name" : "ehealth-observation",
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
  "type" : "Observation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation"
      },
      {
        "id" : "Observation.extension",
        "path" : "Observation.extension",
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
        "id" : "Observation.extension:episodeOfCare",
        "path" : "Observation.extension",
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
        "id" : "Observation.extension:episodeOfCare.value[x]",
        "path" : "Observation.extension.value[x]",
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
        "id" : "Observation.extension:quality",
        "path" : "Observation.extension",
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
        "id" : "Observation.extension:resolvedTiming",
        "path" : "Observation.extension",
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
        "id" : "Observation.basedOn",
        "path" : "Observation.basedOn",
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
        "id" : "Observation.code",
        "path" : "Observation.code",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/observation-codes"
        }
      },
      {
        "id" : "Observation.subject",
        "path" : "Observation.subject",
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
        "id" : "Observation.effective[x]",
        "path" : "Observation.effective[x]",
        "min" : 1
      },
      {
        "id" : "Observation.performer",
        "path" : "Observation.performer",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Observation.value[x]",
        "path" : "Observation.value[x]",
        "type" : [
          {
            "code" : "Quantity"
          },
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Observation.dataAbsentReason",
        "path" : "Observation.dataAbsentReason",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/data-absent-reason"
        }
      },
      {
        "id" : "Observation.device",
        "path" : "Observation.device",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Observation.referenceRange.type",
        "path" : "Observation.referenceRange.type",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/reference-range-type"
        }
      },
      {
        "id" : "Observation.component.code",
        "path" : "Observation.component.code",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/observation-codes"
        }
      },
      {
        "id" : "Observation.component.value[x]",
        "path" : "Observation.component.value[x]",
        "type" : [
          {
            "code" : "Quantity"
          },
          {
            "code" : "CodeableConcept"
          }
        ]
      }
    ]
  }
}

```
