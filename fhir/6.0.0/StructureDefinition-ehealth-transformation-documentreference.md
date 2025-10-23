# ehealth-transformation-documentreference - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-transformation-documentreference**

## Resource Profile: ehealth-transformation-documentreference 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-transformation-documentreference | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-transformation-documentreference |

# Introduction

A DocumentReference resource is used to describe a document that is made available to a healthcare system. A document is some sequence of bytes that is identifiable, establishes its own context (e.g., what subject, author, etc. can be displayed to the user), and has defined update management. The DocumentReference resource can be used with any document format that has a recognized mime type and that conforms to this definition.

The eHealth Infrastructure has multiple profiles for DocumentReference, each with their own purpose. Generally, DocumentReference resources are used in document indexing systems, such as IHE XDS , and are used to refer to:

* CDA documents in FHIR systems
* FHIR documents stored elsewhere (i.e. registry/repository following the XDS model)
* PDF documents , and even digital records of faxes where sufficient information is available
* Other kinds of documents, such as records of prescriptions

The eHealth Transformation DocumentReference is used to store CDA documents in the FHIR system or refer to those stored in an XDS modelled repository (i.e. registry/repository following the XDS model).

# Scope and Usage

The eHealth Transformation DocumentReference resource is stored solely in the Document-Transformation service. However, the Document-Query service, which is used to query and retrieve CDA documents from national document sharing infrastructure, will return the found document metadata and documents in the form of an eHealth Transformation DocumentReference resource.

The resources stored in the Document-Transformation service are CDA document representations of FHIR resources in the eHealth infrastructure, such as [Observation](StructureDefinition-ehealth-observation.md), [QuestionnaireResponses](StructureDefinition-ehealth-questionnaireresponses.md), [Appointments](StructureDefinition-ehealth-appointments.md) and [Questionnaires](StructureDefinition-ehealth-questionnaires.md). Upon approval a resource can be transformed to a CDA format and shared to an XDS repository. The DocumentReference resource will then contain a reference to the document in the XDS repository.

To support the expression of the document lifecycle in the external system as well as the lifecycle of the internal sharing process, the eHealth Transformation profile of DocumentReference has the following extensions:

* `ehealth-manuallydeprecated-type` - to indicate whether the document is manually deprecated.
* `ehelth-document-sharing-state` - to indicate the state of the document in relation to sharing it to an XDS repository.

### Document sharing states

For the purpose of sharing documents to the XDS repository, the DocumentReference has a collection of states to express where in the document-sharing process the document is and why it is there.

There are 4 overall states expressing where in the sharing process the document is, and a further 11 sub-states to express th reason why the document is in the given state.

The states defined in the system [http://ehealth.sundhed.dk/cs/document-sharing-state](CodeSystem-document-sharing-state.md) and are stored in the DocumentReference using the `ehelth-document-sharing-state` extension.

**Usages:**

* CapabilityStatements using this Profile: [document-query](CapabilityStatement-document-query.md) and [document-transformation](CapabilityStatement-document-transformation.md)
* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-transformation-documentreference)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-transformation-documentreference.csv), [Excel](StructureDefinition-ehealth-transformation-documentreference.xlsx), [Schematron](StructureDefinition-ehealth-transformation-documentreference.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-transformation-documentreference",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-transformation-documentreference",
  "version" : "6.0.0",
  "name" : "ehealth-transformation-documentreference",
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
        "path" : "DocumentReference"
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
        "id" : "DocumentReference.extension:manuallyDeprecated",
        "path" : "DocumentReference.extension",
        "sliceName" : "manuallyDeprecated",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-manuallydeprecated-type"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.extension:documentSharingState",
        "path" : "DocumentReference.extension",
        "sliceName" : "documentSharingState",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-document-sharing-state"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.type",
        "path" : "DocumentReference.type",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/document-type"
        }
      },
      {
        "id" : "DocumentReference.category",
        "path" : "DocumentReference.category",
        "max" : "1",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/document-class"
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
        "id" : "DocumentReference.content.format",
        "path" : "DocumentReference.content.format",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/format-codes"
        }
      },
      {
        "id" : "DocumentReference.context.event",
        "path" : "DocumentReference.context.event",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/event-type-codes"
        }
      },
      {
        "id" : "DocumentReference.context.facilityType",
        "path" : "DocumentReference.context.facilityType",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/facility-type-codes"
        }
      },
      {
        "id" : "DocumentReference.context.practiceSetting",
        "path" : "DocumentReference.context.practiceSetting",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/practice-setting-codes"
        }
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
