# ehealth-documentreference - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-documentreference**

## Resource Profile: ehealth-documentreference 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-documentreference | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-documentreference |

# Introduction

A DocumentReference resource is used to describe a document that is made available to a healthcare system. A document is some sequence of bytes that is identifiable, establishes its own context (e.g., what subject, author, etc. can be displayed to the user), and has defined update management. The DocumentReference resource can be used with any document format that has a recognized mime type and that conforms to this definition.

Typically, DocumentReference resources are used in document indexing systems, such as IHE XDS , and are used to refer to:

* CDA documents in FHIR systems
* FHIR documents stored elsewhere (i.e. registry/repository following the XDS model)
* PDF documents , and even digital records of faxes where sufficient information is available
* Other kinds of documents, such as records of prescriptions

The eHealth DocumentReference profile is primarily used for two purposes:

1. To contain instructional material used in relation to PlanDefinition and Questionnaire.
1. To refer to informational, instructional or clinical material files assignable to Patients and EpisodeOfCare.

# Scope and Usage

In scope of the eHealth infrastructure the primary use of the eHealth DocumentReference resource is to contain information material or refer to information material stored elsewhere in the infrastructure or externally. This information material can be in the form of embedded material (of limited size) or references to videos, PDF-files or printed material.

Two different material domains exist in the infrastructure.

1. ****Instructional Material****, is used in relation to PlanDefinition and Questionnaire.
1. ****Material for Citizens****, is used in relation to Patient and EpisodeOfCare.

## Instructional Material

**Instructional Material**, is used in relation to [PlanDefinition](StructureDefinition-ehealth-plandefinition.md) and [Questionnaire](StructureDefinition-ehealth-questionnaire.md). This information material can be in the form of embedded material (of limited size) or references to videos, PDF-files or printed material.

The eHealth DocumentReference profile, when used for **Instructional Material**, makes use of the following extensions:

* ehealth-useContext which defines the context for which the content is intended to support

### Category

**Instructional Material** is stored in the Plan service. To create or update **Instructional Material** in the Plan service the `DocumentReference.category` code must be unpopulated. Otherwise, it will be interpreted as **Material for Citizens**.

### UseContext

The element `useContext.code` has binding to the ValueSet http://hl7.org/fhir/ValueSet/use-context (see https://hl7.org/fhir/R4/valueset-use-context.html). It is, however, validated against the eHealth ValueSet [ehealth-usage-context-type](https://ehealth.sundhed.dk/fhir/ValueSet-ehealth-usage-context-type.html). This validation includes that the value in `useContext.valueCodeableConcept` is acceptable in the ValueSet described for useContext.code.

## Material for Citizens

**Material for Citizens**, is used in relation to [Patient](StructureDefinition-ehealth-patient.md) and [EpisodeOfCare](StructureDefinition-ehealth-episodeofcare.md). This material will always be referenced through a URL as it is either stored externally or internally in the infrastructure. Depending on the nature of the material it will fall into two distinct sub-categories.

* ****Patient-Specific Material****, is material that contains sensitive information about a specific patient.
* ****Generic Material****, is material that has no sensitive information about a specific patient and is broadly relevant and/or applicable to multiple patients.

**Material for Citizens** is stored in the CarePlan and Plan services. **Patient-Specific Material** is stored in the CarePlan service while **Generic Material** is stored in the Plan service.

The eHealth DocumentReference profile, when used for **Material for Citizens**, makes use of the following extensions:

* ehealth-useContext, which defines the context that the content is intended to support.
* ehealth-modifier-role, defining the organizational role in regard to the content (Required for **Material for Citizens**, but optional for **Instructional Material**).
* ehealth-intendedOrganization, the organizations that are allowed to access the material.
* ehealth-artifact-date, the date when the content field was last changed.
* ehealth-participant, the Practitioner or CareTeam that has contributed to the content.
* ehealth-usage, clinical description of the content.
* ehealth-version, version of the content.

### Category

For storage of **Generic Material** in the Plan service the `DocumentReference.category` must be populated with `generic-material`. Otherwise, it will be interpreted as **Instructional Material**.
 For storage of **Patient-Specific Material** in the CarePlan service the `DocumentReference.category` must be populated with the code `patient-specific-material`.
 If the code indicates a different material category than what the service stores (e.g. using `patient-specific-material` when registering **Generic Material** on the Plan service), it will be rejected.
 The category code is immutable after creation.

### Subject

For **Patient-Specific Material** the `DocumentReference.subject` must be populated with a reference to the Patient the material is relevant for. Conversely, for **Generic Material** `DocumentReference.subject` must be unpopulated.

### EpisodeOfCare

The related EpisodeOfCare is referenced through the `DocumentReference.context.encounter` element. Which is allowed to have at most one entry.
 For **Patient-Specific Material** the `DocumentReference.context.encounter` must be populated with a reference to the EpisodeOfCare the material is relevant for. Conversely, for **Generic Material** `DocumentReference.context.encounter` must be unpopulated.

### Content

`DocumentReference.content` must have exactly one entry.
 When creating the DocumentReference in the infrastructure either `DocumentReference.content.attachment.data` or `DocumentReference.content.attachment.url` element must be populated. If both are populated it will be rejected:

* If providing `DocumentReference.content.attachment.data`, it will be decoded and uploaded to the infrastructure's [Storage-Service](https://storage-service.devtest.systematic-ehealth.com/swagger-ui/index.html), after which the `.data` field is cleared and the `.url` set to download location of the uploaded content.
* If providing `DocumentReference.content.attachment.url`, it is possible to manually perform the upload to the Storage-Service beforehand and set the `.url` to the download location of the uploaded content. For **Generic Material** in the Plan service, it is also possible to provide an external URL (A URL for a resource/file outside the eHealth infrastructure).

`DocumentReference.content.attachment.contentType` must be populated with the mime-type of the content as the value is passed on to the Storage-Service. The Storage-Service uses it for validation on download requests to ensure that user's accept-header matches the contentType they are downloading. This is also the case if the upload is performed manually beforehand. Then the used contentType from the manual upload should be the same as the one provided in `DocumentReference.content.attachment.contentType`.

If uploading directly to the Storage-Service instead of going through either the Plan or CarePlan service, it is important to note the difference between uploading **Patient-Specific Material** and **Generic Material**:

* For **Patient-Specific Material** one must supply the `episodeOfCareReference` and `patientReference` parameters as this indicates to the service that the content is sensitive and must be encrypted. Additionally, not supplying them will cause a validation mismatch in the CarePlan service when creating the DocumentReference as they are validated against the Patient and EpisodeOfCare references in the DocumentReference.
* For **Generic Material** the `episodeOfCareReference` and `patientReference` parameters must not be supplied as the content is not sensitive and therefore does not require encryption. Additionally, supplying them will cause a validation mismatch in the Plan service when creating the DocumentReference as they are validated to be empty.

After creation of a DocumentReference, when trying to update it:

* If the `DocumentReference.content.attachment.url` is a URL in the Storage-Service, it is not possible to update the `DocumentReference.content.attachment.url` field after creation. However, it is possible to update the uploaded content through the `DocumentReference.content.attachment.data` field. To do so both the `DocumentReference.content.attachment.data` and `DocumentReference.content.attachment.url` fields must be populated for the update. The content in the `.data` field will be decoded and uploaded to the Storage-Service URL in `.url` overwriting the content that was there before. The `.data` field is cleared after upload and only the `.url` remains in the DocumentReference.
* If the `DocumentReference.content.attachment.url` is set to an external URL, it is allowed to update the `DocumentReference.content.attachment.url` field after creation. However, it is not allowed to change it to a Storage-Service URL or add data to the `DocumentReference.content.attachment.data` field.

It is also possible to update the uploaded content directly at the Storage-Service without going through the Plan or CarePlan service. The url of the content will not change, and therefore there is no need to update the Storage-Service URL stored in the DocumentReference. One should note that the `episodeOfCareReference` and `patientReference` parameters are required to match the existing content, it is not possible to change from **Patient-Specific Material** to **Generic Material** or vice versa.

### ModifierRole

This extension is mandatory for **Material for Citizens**. However, for **Instructional Material** this extension is optional and not used for any validation. Specifically for **Generic Material** it is the basis for validation of the user's organizational context.

### IntendedOrganization

Used to indicate the organizations that might have an interest in accessing the material. However, not the basis of any validation.

### ArtifactDate

In the case of **Material for Citizens**, this extension is maintained by the infrastructure. When `DocumentReference.content` is created or updated the date is updated. However, for **Instructional Material** the extension is optional and there is no automatic maintenance of the date.

### Participant

Used to indicate the Practitioner or CareTeam that has contributed to the content, either as `author` or `editor` as defined by the ValueSet [material-registration-participant-function](https://ehealth.sundhed.dk/fhir/ValueSet-material-registration-participant-function.html).

### Usage

Allows the user to provide a clinical description of the content for the clinicians, while the `DocumentReference.decription` is intended as a description of the content understandable by citizens.

### Version

Allows the user to maintain a version of the content. The infrastructure does not maintain or interpret this extension.

**Usages:**

* Refer to this Profile: [ehealth-consent](StructureDefinition-ehealth-consent.md), [ehealth-documentreference](StructureDefinition-ehealth-documentreference.md) and [ehealth-transformation-documentreference](StructureDefinition-ehealth-transformation-documentreference.md)
* CapabilityStatements using this Profile: [careplan](CapabilityStatement-careplan.md) and [plan](CapabilityStatement-plan.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-documentreference)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-documentreference.csv), [Excel](StructureDefinition-ehealth-documentreference.xlsx), [Schematron](StructureDefinition-ehealth-documentreference.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-documentreference",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-documentreference",
  "version" : "6.0.0",
  "name" : "ehealth-documentreference",
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
      "identity" : "fhircomposition",
      "uri" : "http://hl7.org/fhir/composition",
      "name" : "FHIR Composition"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
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
    },
    {
      "identity" : "xds",
      "uri" : "http://ihe.net/xds",
      "name" : "XDS metadata equivalent"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DocumentReference",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DocumentReference",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "DocumentReference",
        "path" : "DocumentReference",
        "constraint" : [
          {
            "key" : "modifierRole-required-for-material-registration",
            "severity" : "error",
            "human" : "'ehealth-modifier-role' extension is required when category code is 'general-material' or 'patient-specific-material'",
            "expression" : "category.coding.exists(system = 'http://ehealth.sundhed.dk/cs/material-category' and (code = 'general-material' or code = 'patient-specific-material')) implies extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role').exists()",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-documentreference"
          }
        ]
      },
      {
        "id" : "DocumentReference.extension",
        "path" : "DocumentReference.extension",
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
        "id" : "DocumentReference.extension:useContext",
        "path" : "DocumentReference.extension",
        "sliceName" : "useContext",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-useContext"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.extension:modifierRole",
        "path" : "DocumentReference.extension",
        "sliceName" : "modifierRole",
        "min" : 0,
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
        "id" : "DocumentReference.extension:intendedOrganization",
        "path" : "DocumentReference.extension",
        "sliceName" : "intendedOrganization",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-intendedOrganization"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.extension:artifactDate",
        "path" : "DocumentReference.extension",
        "sliceName" : "artifactDate",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-artifact-date"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.extension:participant",
        "path" : "DocumentReference.extension",
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
        "id" : "DocumentReference.extension:participant.extension:function",
        "path" : "DocumentReference.extension.extension",
        "sliceName" : "function"
      },
      {
        "id" : "DocumentReference.extension:participant.extension:function.value[x]",
        "path" : "DocumentReference.extension.extension.value[x]",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/material-registration-participant-function"
        }
      },
      {
        "id" : "DocumentReference.extension:usage",
        "path" : "DocumentReference.extension",
        "sliceName" : "usage",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-usage"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.extension:version",
        "path" : "DocumentReference.extension",
        "sliceName" : "version",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-version"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.type",
        "path" : "DocumentReference.type",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/ehealth-document-reference-type"
        }
      },
      {
        "id" : "DocumentReference.category",
        "path" : "DocumentReference.category",
        "max" : "1",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/document-category"
        }
      },
      {
        "id" : "DocumentReference.subject",
        "path" : "DocumentReference.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://hl7.org/fhir/StructureDefinition/Group",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "DocumentReference.author",
        "path" : "DocumentReference.author",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "DocumentReference.authenticator",
        "path" : "DocumentReference.authenticator",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "DocumentReference.custodian",
        "path" : "DocumentReference.custodian",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "DocumentReference.relatesTo.target",
        "path" : "DocumentReference.relatesTo.target",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-documentreference"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.context.encounter",
        "path" : "DocumentReference.context.encounter",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.context.event",
        "path" : "DocumentReference.context.event",
        "max" : "0"
      },
      {
        "id" : "DocumentReference.context.facilityType",
        "path" : "DocumentReference.context.facilityType",
        "max" : "0"
      },
      {
        "id" : "DocumentReference.context.practiceSetting",
        "path" : "DocumentReference.context.practiceSetting",
        "max" : "0"
      },
      {
        "id" : "DocumentReference.context.sourcePatientInfo",
        "path" : "DocumentReference.context.sourcePatientInfo",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"
            ]
          }
        ]
      }
    ]
  }
}

```
