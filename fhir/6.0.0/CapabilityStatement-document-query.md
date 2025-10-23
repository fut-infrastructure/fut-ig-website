# document-query - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **document-query**

## CapabilityStatement: document-query 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/CapabilityStatement/document-query | *Version*:6.0.0 |
| Active as of 2025-10-21 | *Computable Name*:document-query |

 [Raw OpenAPI-Swagger Definition file](document-query.openapi.json) | [Download](document-query.openapi.json) 

## 

* Implementation Guide Version: 6.0.0 
* FHIR Version: 4.0.1 
* Supported Formats: `application/fhir+xml`, `xml`, `application/fhir+json`, `json`, `application/x-turtle`, `ttl`, `html/json`, `html/xml`, `html/turtle`
* Published on: 2025-10-21 10:39:21+0000 
* Published by: Den telemedicinske infrastruktur (eHealth Infrastructure) 

> **Note to Implementers: FHIR Capabilities**Any FHIR capability may be 'allowed' by the system unless explicitly marked as 'SHALL NOT'. A few items are marked as MAY in the Implementation Guide to highlight their potential relevance to the use case.

## FHIR RESTful Capabilities

### Mode: server

Summary of System-wide Operations


### Capabilities by Resource/Profile

#### Summary

The summary table lists the resources that are part of this configuration, and for each resource it lists:

* The relevant profiles (if any)
* The interactions supported by each resource (**R**ead, **S**earch, **U**pdate, and **C**reate, are always shown, while **VR**ead, **P**atch, **D**elete, **H**istory on **I**nstance, or **H**istory on **T**ype are only present if at least one of the resources has support for them.
* The required, recommended, and some optional search parameters (if any).
* The linked resources enabled for `_include`
* The other resources enabled for `_revinclude`
* The operations on the resource (if any)

| | | | | | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| [Binary](#Binary1-1) | [http://hl7.org/fhir/StructureDefinition/Binary](http://hl7.org/fhir/R4/binary.html) |  |  |  |  |  | `*` | `DocumentReference:patient` | `$retrieve-document` |
| [Bundle](#Bundle1-2) | [http://hl7.org/fhir/StructureDefinition/Bundle](http://hl7.org/fhir/R4/bundle.html) |  |  |  |  |  | `*` | `DocumentReference:patient` | `$retrieve-and-transform-QRD`,`$retrieve-and-transform-PHMR`,`$retrieve-and-transform-APD` |
| [DocumentReference](#DocumentReference1-3) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-transformation-documentreference](StructureDefinition-ehealth-transformation-documentreference.md) |  | y |  |  | status, category, consentOverride, date, event, facility, format, patient, patient-identifier, period, reason, setting, type | `*`,`DocumentReference:patient` | `DocumentReference:patient` |  |
| [OperationDefinition](#OperationDefinition1-4) | [http://hl7.org/fhir/StructureDefinition/OperationDefinition](http://hl7.org/fhir/R4/operationdefinition.html) | y |  |  |  |  | `*` | `DocumentReference:patient` |  |

-------

#### Resource Conformance: supported Binary

Base System Profile

[Binary](http://hl7.org/fhir/R4/binary.html)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

Extended Operations


#### Resource Conformance: supported Bundle

Base System Profile

[Bundle](http://hl7.org/fhir/R4/bundle.html)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

Extended Operations


#### Resource Conformance: supported DocumentReference

Base System Profile

[ehealth-transformation-documentreference](StructureDefinition-ehealth-transformation-documentreference.md)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `search-type`.

Search Parameters


 

#### Resource Conformance: supported OperationDefinition

Base System Profile

[OperationDefinition](http://hl7.org/fhir/R4/operationdefinition.html)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `read`.



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "document-query",
  "url" : "http://ehealth.sundhed.dk/fhir/CapabilityStatement/document-query",
  "version" : "6.0.0",
  "name" : "document-query",
  "status" : "active",
  "date" : "2025-10-21T10:39:21.643+00:00",
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
  "kind" : "instance",
  "software" : {
    "name" : "document-query",
    "version" : "1.18.0"
  },
  "implementation" : {
    "description" : "eHealth document-query service",
    "url" : "https://document-query.devtest.systematic-ehealth.com/fhir"
  },
  "fhirVersion" : "4.0.1",
  "format" : [
    "application/fhir+xml",
    "xml",
    "application/fhir+json",
    "json",
    "application/x-turtle",
    "ttl",
    "html/json",
    "html/xml",
    "html/turtle"
  ],
  "rest" : [
    {
      "mode" : "server",
      "resource" : [
        {
          "type" : "Binary",
          "profile" : "http://hl7.org/fhir/StructureDefinition/Binary",
          "searchInclude" : ["*"],
          "searchRevInclude" : ["DocumentReference:patient"],
          "operation" : [
            {
              "name" : "retrieve-document",
              "definition" : "https://document-query.devtest.systematic-ehealth.com/fhir/OperationDefinition/Binary-t-retrieve-document",
              "documentation" : "Input (url) is the element DocumentReference.content.attachment.url for metadata about the QRD/APD/PHMR document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed  by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring.The preferred method is to call this operation without consent override and to only call with consent override when necessary. Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents.The value is logged in the Infrastructure."
            }
          ]
        },
        {
          "type" : "Bundle",
          "profile" : "http://hl7.org/fhir/StructureDefinition/Bundle",
          "searchInclude" : ["*"],
          "searchRevInclude" : ["DocumentReference:patient"],
          "operation" : [
            {
              "name" : "retrieve-and-transform-QRD",
              "definition" : "https://document-query.devtest.systematic-ehealth.com/fhir/OperationDefinition/Bundle-t-retrieve-and-transform-QRD",
              "documentation" : "Retrieves a DK-HL7 Questionnaire Response Document (QRD) XML document from national document sharing infrastructure and transforms the QRD XML document to a FHIR QuestionnaireResponse (ehealth-questionnaireresponse profile) resource.Input (url) is the element DocumentReference.content.attachment.url for metadata about the QRD document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (bundle) must contain a Questionnaire FHIR resource corresponding to the questionnaire definition (QFDD) that the QRD references and is a response to.Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary. Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure.The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing a FHIR QuestionnaireResponse (ehealth-documentreference profile) resource, if the Questionnaire FHIR resource was provided as an input, and if the transformation was successful.If the Questionnaire FHIR resource was not provided as an input, or if the transformation was not successful, the returned FHIR Bundle contains the QRD XML document that was retrieved from the national document sharing infrastructure."
            },
            {
              "name" : "retrieve-and-transform-PHMR",
              "definition" : "https://document-query.devtest.systematic-ehealth.com/fhir/OperationDefinition/Bundle-t-retrieve-and-transform-PHMR",
              "documentation" : "Retrieves a DK-HL7 Personal Health Monitoring Report (PHMR) XML document from national document sharing infrastructure and transforms the PHMR XML document to FHIR Observation (ehealth-observation profile) resources.Input (url) is the element DocumentReference.content.attachment.url for metadata about the PHMR document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary. Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure.The returned FHIR Bundle contains a FHIR Composition (ehealth-composition profile) resource referencing one or more FHIR Observation (ehealth-observation profile) resources and referenced resources such as FHIR Organization."
            },
            {
              "name" : "retrieve-and-transform-APD",
              "definition" : "https://document-query.devtest.systematic-ehealth.com/fhir/OperationDefinition/Bundle-t-retrieve-and-transform-APD",
              "documentation" : "Retrieves a DK-HL7 Appointment (APD) XML document from national document sharing infrastructure and transforms the APD XML document to a FHIR Appointment (ehealth-appointment profile) resource.Input (url) is the element DocumentReference.content.attachment.url for metadata about the APD document as returned from the DocumentReference search operation performing a query to national document sharing infrastructure. The url, which shall be used as-is in this operation, is an encoding of the XDS DocumentEntry.uniqueId, XDS DocumentEntry.repositoryUniqueId and XDS DocumentEntry.homeCommunityId metadata attributes needed to retrieve the document. Input (consentOverride) signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary.Input (reason) is mandatory when input element consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure.The returned FHIR Bundle contains a FHIR Appointment (ehealth-appointment profile) resource."
            }
          ]
        },
        {
          "type" : "DocumentReference",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-transformation-documentreference",
          "interaction" : [
            {
              "code" : "search-type"
            }
          ],
          "searchInclude" : ["*", "DocumentReference:patient"],
          "searchRevInclude" : ["DocumentReference:patient"],
          "searchParam" : [
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "current | superseded"
            },
            {
              "name" : "category",
              "type" : "token",
              "documentation" : "Categorization of document"
            },
            {
              "name" : "consentOverride",
              "type" : "token",
              "documentation" : "ConsentOverride signifies, when set to true, that the retrieve of a document shall be performed with override of any withholding of information possibly performed by the national document sharing service in accordance with patient's consents. Override of consents constitutes a form of break-the-glass invocation, known in Danish as værdispring. The preferred method is to call this operation without consent override and to only call with consent override when necessary."
            },
            {
              "name" : "date",
              "type" : "date",
              "documentation" : "Document creation time"
            },
            {
              "name" : "event",
              "type" : "token",
              "documentation" : "Main clinical acts documented"
            },
            {
              "name" : "facility",
              "type" : "token",
              "documentation" : "Kind of facility where patient was seen"
            },
            {
              "name" : "format",
              "type" : "token",
              "documentation" : "Format/content rules for the document"
            },
            {
              "name" : "patient",
              "type" : "reference",
              "documentation" : "Who/what is the subject of the document"
            },
            {
              "name" : "patient-identifier",
              "type" : "token",
              "documentation" : "Who/what is the subject of the document (identifier)"
            },
            {
              "name" : "period",
              "type" : "date",
              "documentation" : "Time of service that is being documented"
            },
            {
              "name" : "reason",
              "type" : "string",
              "documentation" : "Reason is mandatory when parameter consentOverride is set to true. The string input is intended as a placeholder for the user's rationale for choosing to override consents. The value is logged in the Infrastructure."
            },
            {
              "name" : "setting",
              "type" : "token",
              "documentation" : "Additional details about where the content was created (e.g. clinical specialty)"
            },
            {
              "name" : "type",
              "type" : "token",
              "documentation" : "Kind of document (LOINC if possible)"
            }
          ]
        },
        {
          "type" : "OperationDefinition",
          "profile" : "http://hl7.org/fhir/StructureDefinition/OperationDefinition",
          "interaction" : [
            {
              "code" : "read"
            }
          ],
          "searchInclude" : ["*"],
          "searchRevInclude" : ["DocumentReference:patient"]
        }
      ],
      "operation" : [
        {
          "name" : "reindex-terminology",
          "definition" : "https://document-query.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-reindex-terminology"
        },
        {
          "name" : "meta",
          "definition" : "https://document-query.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-meta"
        },
        {
          "name" : "get-resource-counts",
          "definition" : "https://document-query.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-get-resource-counts",
          "documentation" : "Provides the number of resources currently stored on the server, broken down by resource type"
        }
      ]
    }
  ]
}

```
