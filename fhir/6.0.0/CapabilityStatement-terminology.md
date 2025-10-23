# terminology - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **terminology**

## CapabilityStatement: terminology 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/CapabilityStatement/terminology | *Version*:6.0.0 |
| Active as of 2025-10-21 | *Computable Name*:terminology |

 [Raw OpenAPI-Swagger Definition file](terminology.openapi.json) | [Download](terminology.openapi.json) 

## 

* Implementation Guide Version: 6.0.0 
* FHIR Version: 4.0.1 
* Supported Formats: `application/fhir+xml`, `xml`, `application/fhir+json`, `json`, `application/x-turtle`, `ttl`, `html/json`, `html/xml`, `html/turtle`
* Published on: 2025-10-21 10:45:23+0000 
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

| | | | | | | | | | | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| [CodeSystem](#CodeSystem1-1) | [http://hl7.org/fhir/StructureDefinition/CodeSystem](http://hl7.org/fhir/R4/codesystem.html) | y | y | y | y | y | y | y | y | y | _content, _filter, _has, _id, _language, _lastUpdated, _list, _profile, _security, _source, _tag, _text, code, content-mode, context, context-quantity, context-type, context-type-quantity, context-type-value, date, description, identifier, jurisdiction, language, name, publisher, status, supplements, system, title, url, version | `*`,`CodeSystem:supplements` | `CodeSystem:supplements`,`ConceptMap:other`,`ConceptMap:source`,`ConceptMap:source-uri`,`ConceptMap:target`,`ConceptMap:target-uri`,`Group:managing-entity`,`Group:member` | `$upload-external-code-system`,`$apply-codesystem-delta-remove`,`$apply-codesystem-delta-add`,`$validate`,`$meta-delete`,`$meta-add`,`$meta`,`$expunge`,`$validate-code`,`$subsumes`,`$lookup` |
| [ConceptMap](#ConceptMap1-2) | [http://hl7.org/fhir/StructureDefinition/ConceptMap](http://hl7.org/fhir/R4/conceptmap.html) | y | y | y | y | y | y | y | y | y | _content, _filter, _has, _id, _language, _lastUpdated, _list, _profile, _security, _source, _tag, _text, context, context-quantity, context-type, context-type-quantity, context-type-value, date, dependson, description, identifier, jurisdiction, name, other, product, publisher, source, source-code, source-system, source-uri, status, target, target-code, target-system, target-uri, title, url, version | `*`,`ConceptMap:other`,`ConceptMap:source`,`ConceptMap:source-uri`,`ConceptMap:target`,`ConceptMap:target-uri` | `CodeSystem:supplements`,`ConceptMap:other`,`ConceptMap:source`,`ConceptMap:source-uri`,`ConceptMap:target`,`ConceptMap:target-uri`,`Group:managing-entity`,`Group:member` | `$validate`,`$meta-delete`,`$meta-add`,`$meta`,`$expunge`,`$translate` |
| [Group](#Group1-3) | [http://hl7.org/fhir/StructureDefinition/Group](http://hl7.org/fhir/R4/group.html) | y | y | y | y | y | y | y | y | y | _content, _filter, _has, _id, _language, _lastUpdated, _list, _profile, _security, _source, _tag, _text, actual, characteristic, characteristic-value, code, exclude, identifier, managing-entity, member, type, value | `*`,`Group:managing-entity`,`Group:member` | `CodeSystem:supplements`,`ConceptMap:other`,`ConceptMap:source`,`ConceptMap:source-uri`,`ConceptMap:target`,`ConceptMap:target-uri`,`Group:managing-entity`,`Group:member` | `$validate`,`$meta-delete`,`$meta-add`,`$meta`,`$expunge` |
| [NamingSystem](#NamingSystem1-4) | [http://hl7.org/fhir/StructureDefinition/NamingSystem](http://hl7.org/fhir/R4/namingsystem.html) | y | y | y | y | y | y | y | y | y | _content, _filter, _has, _id, _language, _lastUpdated, _list, _profile, _security, _source, _tag, _text, contact, context, context-quantity, context-type, context-type-quantity, context-type-value, date, description, id-type, jurisdiction, kind, name, period, publisher, responsible, status, telecom, type, value | `*` | `CodeSystem:supplements`,`ConceptMap:other`,`ConceptMap:source`,`ConceptMap:source-uri`,`ConceptMap:target`,`ConceptMap:target-uri`,`Group:managing-entity`,`Group:member` | `$validate`,`$meta-delete`,`$meta-add`,`$meta`,`$expunge` |
| [OperationDefinition](#OperationDefinition1-5) | [http://hl7.org/fhir/StructureDefinition/OperationDefinition](http://hl7.org/fhir/R4/operationdefinition.html) | y |  |  |  |  |  |  |  |  |  | `*` | `CodeSystem:supplements`,`ConceptMap:other`,`ConceptMap:source`,`ConceptMap:source-uri`,`ConceptMap:target`,`ConceptMap:target-uri`,`Group:managing-entity`,`Group:member` |  |
| [Practitioner](#Practitioner1-6) | [http://hl7.org/fhir/StructureDefinition/Practitioner](http://hl7.org/fhir/R4/practitioner.html) | y | y | y | y | y | y | y | y | y | _content, _filter, _has, _id, _language, _lastUpdated, _list, _profile, _security, _source, _tag, _text, active, address, address-city, address-country, address-postalcode, address-state, address-use, communication, email, family, gender, given, identifier, name, phone, phonetic, telecom | `*` | `CodeSystem:supplements`,`ConceptMap:other`,`ConceptMap:source`,`ConceptMap:source-uri`,`ConceptMap:target`,`ConceptMap:target-uri`,`Group:managing-entity`,`Group:member` | `$validate`,`$meta-delete`,`$meta-add`,`$meta`,`$expunge` |
| [StructureDefinition](#StructureDefinition1-7) | [http://hl7.org/fhir/StructureDefinition/StructureDefinition](http://hl7.org/fhir/R4/structuredefinition.html) | y |  | y |  |  |  |  |  |  | type | `*` | `CodeSystem:supplements`,`ConceptMap:other`,`ConceptMap:source`,`ConceptMap:source-uri`,`ConceptMap:target`,`ConceptMap:target-uri`,`Group:managing-entity`,`Group:member` |  |
| [ValueSet](#ValueSet1-8) | [http://hl7.org/fhir/StructureDefinition/ValueSet](http://hl7.org/fhir/R4/valueset.html) | y | y | y | y | y | y | y | y | y | _content, _filter, _has, _id, _language, _lastUpdated, _list, _profile, _security, _source, _tag, _text, code, context, context-quantity, context-type, context-type-quantity, context-type-value, date, description, expansion, identifier, jurisdiction, name, publisher, reference, status, title, url, version | `*` | `CodeSystem:supplements`,`ConceptMap:other`,`ConceptMap:source`,`ConceptMap:source-uri`,`ConceptMap:target`,`ConceptMap:target-uri`,`Group:managing-entity`,`Group:member` | `$validate-code`,`$invalidate-expansion`,`$expand`,`$validate`,`$meta-delete`,`$meta-add`,`$meta`,`$expunge` |

-------

#### Resource Conformance: supported CodeSystem

Base System Profile

[CodeSystem](http://hl7.org/fhir/R4/codesystem.html)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `vread`, `read`, `patch`, `history-type`, `history-instance`, `delete`, `create`, `search-type`.

Search Parameters


 

Extended Operations


#### Resource Conformance: supported ConceptMap

Base System Profile

[ConceptMap](http://hl7.org/fhir/R4/conceptmap.html)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `vread`, `read`, `patch`, `history-type`, `history-instance`, `delete`, `create`, `search-type`.

Search Parameters


 

Extended Operations


#### Resource Conformance: supported Group

Base System Profile

[Group](http://hl7.org/fhir/R4/group.html)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `search-type`, `update`, `vread`, `read`, `patch`, `history-type`, `history-instance`, `delete`, `create`.

Search Parameters


 

Extended Operations


#### Resource Conformance: supported NamingSystem

Base System Profile

[NamingSystem](http://hl7.org/fhir/R4/namingsystem.html)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `vread`, `read`, `patch`, `history-type`, `history-instance`, `delete`, `create`, `search-type`.

Search Parameters


 

Extended Operations


#### Resource Conformance: supported OperationDefinition

Base System Profile

[OperationDefinition](http://hl7.org/fhir/R4/operationdefinition.html)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `read`.

#### Resource Conformance: supported Practitioner

Base System Profile

[Practitioner](http://hl7.org/fhir/R4/practitioner.html)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `search-type`, `update`, `vread`, `read`, `patch`, `history-type`, `history-instance`, `delete`, `create`.

Search Parameters


 

Extended Operations


#### Resource Conformance: supported StructureDefinition

Base System Profile

[StructureDefinition](http://hl7.org/fhir/R4/structuredefinition.html)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `search-type`, `read`.

Search Parameters


 

#### Resource Conformance: supported ValueSet

Base System Profile

[ValueSet](http://hl7.org/fhir/R4/valueset.html)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `vread`, `read`, `patch`, `history-type`, `history-instance`, `delete`, `create`, `search-type`.

Search Parameters


 

Extended Operations




## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "terminology",
  "url" : "http://ehealth.sundhed.dk/fhir/CapabilityStatement/terminology",
  "version" : "6.0.0",
  "name" : "terminology",
  "status" : "active",
  "date" : "2025-10-21T10:45:23.154+00:00",
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
    "name" : "terminology",
    "version" : "1.21.0"
  },
  "implementation" : {
    "description" : "eHealth terminology service",
    "url" : "https://terminology.devtest.systematic-ehealth.com/fhir"
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
          "type" : "CodeSystem",
          "profile" : "http://hl7.org/fhir/StructureDefinition/CodeSystem",
          "interaction" : [
            {
              "code" : "update"
            },
            {
              "code" : "vread"
            },
            {
              "code" : "read"
            },
            {
              "code" : "patch"
            },
            {
              "code" : "history-type"
            },
            {
              "code" : "history-instance"
            },
            {
              "code" : "delete"
            },
            {
              "code" : "create"
            },
            {
              "code" : "search-type"
            }
          ],
          "conditionalCreate" : true,
          "conditionalUpdate" : true,
          "conditionalDelete" : "multiple",
          "searchInclude" : ["*", "CodeSystem:supplements"],
          "searchRevInclude" : [
            "CodeSystem:supplements",
            "ConceptMap:other",
            "ConceptMap:source",
            "ConceptMap:source-uri",
            "ConceptMap:target",
            "ConceptMap:target-uri",
            "Group:managing-entity",
            "Group:member"
          ],
          "searchParam" : [
            {
              "name" : "_content",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a fulltext search"
            },
            {
              "name" : "_filter",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a filter"
            },
            {
              "name" : "_has",
              "type" : "string",
              "documentation" : "Return resources linked to by the given target"
            },
            {
              "name" : "_id",
              "type" : "token",
              "documentation" : "The ID of the resource"
            },
            {
              "name" : "_language",
              "type" : "token",
              "documentation" : "The language of the resource"
            },
            {
              "name" : "_lastUpdated",
              "type" : "date",
              "documentation" : "Only return resources which were last updated as specified by the given range"
            },
            {
              "name" : "_list",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a list"
            },
            {
              "name" : "_profile",
              "type" : "uri",
              "documentation" : "Search for resources which have the given profile"
            },
            {
              "name" : "_security",
              "type" : "token",
              "documentation" : "Search for resources which have the given security labels"
            },
            {
              "name" : "_source",
              "type" : "uri",
              "documentation" : "Search for resources which have the given source value (Resource.meta.source)"
            },
            {
              "name" : "_tag",
              "type" : "token",
              "documentation" : "Search for resources which have the given tag"
            },
            {
              "name" : "_text",
              "type" : "string",
              "documentation" : "Search the contents of the resource's narrative using a fulltext search"
            },
            {
              "name" : "code",
              "type" : "token",
              "documentation" : "A code defined in the code system"
            },
            {
              "name" : "content-mode",
              "type" : "token",
              "documentation" : "not-present | example | fragment | complete | supplement"
            },
            {
              "name" : "context",
              "type" : "token",
              "documentation" : "A use context assigned to the code system"
            },
            {
              "name" : "context-quantity",
              "type" : "quantity",
              "documentation" : "A quantity- or range-valued use context assigned to the code system"
            },
            {
              "name" : "context-type",
              "type" : "token",
              "documentation" : "A type of use context assigned to the code system"
            },
            {
              "name" : "context-type-quantity",
              "type" : "composite",
              "documentation" : "A use context type and quantity- or range-based value assigned to the code system"
            },
            {
              "name" : "context-type-value",
              "type" : "composite",
              "documentation" : "A use context type and value assigned to the code system"
            },
            {
              "name" : "date",
              "type" : "date",
              "documentation" : "The code system publication date"
            },
            {
              "name" : "description",
              "type" : "string",
              "documentation" : "The description of the code system"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "External identifier for the code system"
            },
            {
              "name" : "jurisdiction",
              "type" : "token",
              "documentation" : "Intended jurisdiction for the code system"
            },
            {
              "name" : "language",
              "type" : "token",
              "documentation" : "A language in which a designation is provided"
            },
            {
              "name" : "name",
              "type" : "string",
              "documentation" : "Computationally friendly name of the code system"
            },
            {
              "name" : "publisher",
              "type" : "string",
              "documentation" : "Name of the publisher of the code system"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "The current status of the code system"
            },
            {
              "name" : "supplements",
              "type" : "reference",
              "documentation" : "Find code system supplements for the referenced code system"
            },
            {
              "name" : "system",
              "type" : "uri",
              "documentation" : "The system for any codes defined by this code system (same as 'url')"
            },
            {
              "name" : "title",
              "type" : "string",
              "documentation" : "The human-friendly name of the code system"
            },
            {
              "name" : "url",
              "type" : "uri",
              "documentation" : "The uri that identifies the code system"
            },
            {
              "name" : "version",
              "type" : "token",
              "documentation" : "The business version of the code system"
            }
          ],
          "operation" : [
            {
              "name" : "upload-external-code-system",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/CodeSystem-t-upload-external-code-system"
            },
            {
              "name" : "apply-codesystem-delta-remove",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/CodeSystem-t-apply-codesystem-delta-remove"
            },
            {
              "name" : "apply-codesystem-delta-add",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/CodeSystem-t-apply-codesystem-delta-add"
            },
            {
              "name" : "validate",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            },
            {
              "name" : "meta-delete",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-i-meta-delete",
              "documentation" : "Delete tags, profiles, and/or security labels from a resource"
            },
            {
              "name" : "meta-add",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-i-meta-add",
              "documentation" : "Add tags, profiles, and/or security labels to a resource"
            },
            {
              "name" : "meta",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-its-meta",
              "documentation" : "Request a list of tags, profiles, and security labels for a specfic resource instance"
            },
            {
              "name" : "expunge",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-its-expunge"
            },
            {
              "name" : "validate-code",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/CodeSystemValueSet-it-validate-code"
            },
            {
              "name" : "subsumes",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/CodeSystem-t-subsumes"
            },
            {
              "name" : "lookup",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/CodeSystem-t-lookup"
            }
          ]
        },
        {
          "type" : "ConceptMap",
          "profile" : "http://hl7.org/fhir/StructureDefinition/ConceptMap",
          "interaction" : [
            {
              "code" : "update"
            },
            {
              "code" : "vread"
            },
            {
              "code" : "read"
            },
            {
              "code" : "patch"
            },
            {
              "code" : "history-type"
            },
            {
              "code" : "history-instance"
            },
            {
              "code" : "delete"
            },
            {
              "code" : "create"
            },
            {
              "code" : "search-type"
            }
          ],
          "conditionalCreate" : true,
          "conditionalUpdate" : true,
          "conditionalDelete" : "multiple",
          "searchInclude" : [
            "*",
            "ConceptMap:other",
            "ConceptMap:source",
            "ConceptMap:source-uri",
            "ConceptMap:target",
            "ConceptMap:target-uri"
          ],
          "searchRevInclude" : [
            "CodeSystem:supplements",
            "ConceptMap:other",
            "ConceptMap:source",
            "ConceptMap:source-uri",
            "ConceptMap:target",
            "ConceptMap:target-uri",
            "Group:managing-entity",
            "Group:member"
          ],
          "searchParam" : [
            {
              "name" : "_content",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a fulltext search"
            },
            {
              "name" : "_filter",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a filter"
            },
            {
              "name" : "_has",
              "type" : "string",
              "documentation" : "Return resources linked to by the given target"
            },
            {
              "name" : "_id",
              "type" : "token",
              "documentation" : "The ID of the resource"
            },
            {
              "name" : "_language",
              "type" : "token",
              "documentation" : "The language of the resource"
            },
            {
              "name" : "_lastUpdated",
              "type" : "date",
              "documentation" : "Only return resources which were last updated as specified by the given range"
            },
            {
              "name" : "_list",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a list"
            },
            {
              "name" : "_profile",
              "type" : "uri",
              "documentation" : "Search for resources which have the given profile"
            },
            {
              "name" : "_security",
              "type" : "token",
              "documentation" : "Search for resources which have the given security labels"
            },
            {
              "name" : "_source",
              "type" : "uri",
              "documentation" : "Search for resources which have the given source value (Resource.meta.source)"
            },
            {
              "name" : "_tag",
              "type" : "token",
              "documentation" : "Search for resources which have the given tag"
            },
            {
              "name" : "_text",
              "type" : "string",
              "documentation" : "Search the contents of the resource's narrative using a fulltext search"
            },
            {
              "name" : "context",
              "type" : "token",
              "documentation" : "A use context assigned to the concept map"
            },
            {
              "name" : "context-quantity",
              "type" : "quantity",
              "documentation" : "A quantity- or range-valued use context assigned to the concept map"
            },
            {
              "name" : "context-type",
              "type" : "token",
              "documentation" : "A type of use context assigned to the concept map"
            },
            {
              "name" : "context-type-quantity",
              "type" : "composite",
              "documentation" : "A use context type and quantity- or range-based value assigned to the concept map"
            },
            {
              "name" : "context-type-value",
              "type" : "composite",
              "documentation" : "A use context type and value assigned to the concept map"
            },
            {
              "name" : "date",
              "type" : "date",
              "documentation" : "The concept map publication date"
            },
            {
              "name" : "dependson",
              "type" : "uri",
              "documentation" : "Reference to property mapping depends on"
            },
            {
              "name" : "description",
              "type" : "string",
              "documentation" : "The description of the concept map"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "External identifier for the concept map"
            },
            {
              "name" : "jurisdiction",
              "type" : "token",
              "documentation" : "Intended jurisdiction for the concept map"
            },
            {
              "name" : "name",
              "type" : "string",
              "documentation" : "Computationally friendly name of the concept map"
            },
            {
              "name" : "other",
              "type" : "reference",
              "documentation" : "canonical reference to an additional ConceptMap to use for mapping if the source concept is unmapped"
            },
            {
              "name" : "product",
              "type" : "uri",
              "documentation" : "Reference to property mapping depends on"
            },
            {
              "name" : "publisher",
              "type" : "string",
              "documentation" : "Name of the publisher of the concept map"
            },
            {
              "name" : "source",
              "type" : "reference",
              "documentation" : "The source value set that contains the concepts that are being mapped"
            },
            {
              "name" : "source-code",
              "type" : "token",
              "documentation" : "Identifies element being mapped"
            },
            {
              "name" : "source-system",
              "type" : "uri",
              "documentation" : "Source system where concepts to be mapped are defined"
            },
            {
              "name" : "source-uri",
              "type" : "reference",
              "documentation" : "The source value set that contains the concepts that are being mapped"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "The current status of the concept map"
            },
            {
              "name" : "target",
              "type" : "reference",
              "documentation" : "The target value set which provides context for the mappings"
            },
            {
              "name" : "target-code",
              "type" : "token",
              "documentation" : "Code that identifies the target element"
            },
            {
              "name" : "target-system",
              "type" : "uri",
              "documentation" : "Target system that the concepts are to be mapped to"
            },
            {
              "name" : "target-uri",
              "type" : "reference",
              "documentation" : "The target value set which provides context for the mappings"
            },
            {
              "name" : "title",
              "type" : "string",
              "documentation" : "The human-friendly name of the concept map"
            },
            {
              "name" : "url",
              "type" : "uri",
              "documentation" : "The uri that identifies the concept map"
            },
            {
              "name" : "version",
              "type" : "token",
              "documentation" : "The business version of the concept map"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            },
            {
              "name" : "meta-delete",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-i-meta-delete",
              "documentation" : "Delete tags, profiles, and/or security labels from a resource"
            },
            {
              "name" : "meta-add",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-i-meta-add",
              "documentation" : "Add tags, profiles, and/or security labels to a resource"
            },
            {
              "name" : "meta",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-its-meta",
              "documentation" : "Request a list of tags, profiles, and security labels for a specfic resource instance"
            },
            {
              "name" : "expunge",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-its-expunge"
            },
            {
              "name" : "translate",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/ConceptMap-it-translate"
            }
          ]
        },
        {
          "type" : "Group",
          "profile" : "http://hl7.org/fhir/StructureDefinition/Group",
          "interaction" : [
            {
              "code" : "search-type"
            },
            {
              "code" : "update"
            },
            {
              "code" : "vread"
            },
            {
              "code" : "read"
            },
            {
              "code" : "patch"
            },
            {
              "code" : "history-type"
            },
            {
              "code" : "history-instance"
            },
            {
              "code" : "delete"
            },
            {
              "code" : "create"
            }
          ],
          "conditionalCreate" : true,
          "conditionalUpdate" : true,
          "conditionalDelete" : "multiple",
          "searchInclude" : ["*", "Group:managing-entity", "Group:member"],
          "searchRevInclude" : [
            "CodeSystem:supplements",
            "ConceptMap:other",
            "ConceptMap:source",
            "ConceptMap:source-uri",
            "ConceptMap:target",
            "ConceptMap:target-uri",
            "Group:managing-entity",
            "Group:member"
          ],
          "searchParam" : [
            {
              "name" : "_content",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a fulltext search"
            },
            {
              "name" : "_filter",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a filter"
            },
            {
              "name" : "_has",
              "type" : "string",
              "documentation" : "Return resources linked to by the given target"
            },
            {
              "name" : "_id",
              "type" : "token",
              "documentation" : "The ID of the resource"
            },
            {
              "name" : "_language",
              "type" : "token",
              "documentation" : "The language of the resource"
            },
            {
              "name" : "_lastUpdated",
              "type" : "date",
              "documentation" : "Only return resources which were last updated as specified by the given range"
            },
            {
              "name" : "_list",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a list"
            },
            {
              "name" : "_profile",
              "type" : "uri",
              "documentation" : "Search for resources which have the given profile"
            },
            {
              "name" : "_security",
              "type" : "token",
              "documentation" : "Search for resources which have the given security labels"
            },
            {
              "name" : "_source",
              "type" : "uri",
              "documentation" : "Search for resources which have the given source value (Resource.meta.source)"
            },
            {
              "name" : "_tag",
              "type" : "token",
              "documentation" : "Search for resources which have the given tag"
            },
            {
              "name" : "_text",
              "type" : "string",
              "documentation" : "Search the contents of the resource's narrative using a fulltext search"
            },
            {
              "name" : "actual",
              "type" : "token",
              "documentation" : "Descriptive or actual"
            },
            {
              "name" : "characteristic",
              "type" : "token",
              "documentation" : "Kind of characteristic"
            },
            {
              "name" : "characteristic-value",
              "type" : "composite",
              "documentation" : "A composite of both characteristic and value"
            },
            {
              "name" : "code",
              "type" : "token",
              "documentation" : "The kind of resources contained"
            },
            {
              "name" : "exclude",
              "type" : "token",
              "documentation" : "Group includes or excludes"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "Unique id"
            },
            {
              "name" : "managing-entity",
              "type" : "reference",
              "documentation" : "Entity that is the custodian of the Group's definition"
            },
            {
              "name" : "member",
              "type" : "reference",
              "documentation" : "Reference to the group member"
            },
            {
              "name" : "type",
              "type" : "token",
              "documentation" : "The type of resources the group contains"
            },
            {
              "name" : "value",
              "type" : "token",
              "documentation" : "Value held by characteristic"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            },
            {
              "name" : "meta-delete",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-i-meta-delete",
              "documentation" : "Delete tags, profiles, and/or security labels from a resource"
            },
            {
              "name" : "meta-add",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-i-meta-add",
              "documentation" : "Add tags, profiles, and/or security labels to a resource"
            },
            {
              "name" : "meta",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-its-meta",
              "documentation" : "Request a list of tags, profiles, and security labels for a specfic resource instance"
            },
            {
              "name" : "expunge",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-its-expunge"
            }
          ]
        },
        {
          "type" : "NamingSystem",
          "profile" : "http://hl7.org/fhir/StructureDefinition/NamingSystem",
          "interaction" : [
            {
              "code" : "update"
            },
            {
              "code" : "vread"
            },
            {
              "code" : "read"
            },
            {
              "code" : "patch"
            },
            {
              "code" : "history-type"
            },
            {
              "code" : "history-instance"
            },
            {
              "code" : "delete"
            },
            {
              "code" : "create"
            },
            {
              "code" : "search-type"
            }
          ],
          "conditionalCreate" : true,
          "conditionalUpdate" : true,
          "conditionalDelete" : "multiple",
          "searchInclude" : ["*"],
          "searchRevInclude" : [
            "CodeSystem:supplements",
            "ConceptMap:other",
            "ConceptMap:source",
            "ConceptMap:source-uri",
            "ConceptMap:target",
            "ConceptMap:target-uri",
            "Group:managing-entity",
            "Group:member"
          ],
          "searchParam" : [
            {
              "name" : "_content",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a fulltext search"
            },
            {
              "name" : "_filter",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a filter"
            },
            {
              "name" : "_has",
              "type" : "string",
              "documentation" : "Return resources linked to by the given target"
            },
            {
              "name" : "_id",
              "type" : "token",
              "documentation" : "The ID of the resource"
            },
            {
              "name" : "_language",
              "type" : "token",
              "documentation" : "The language of the resource"
            },
            {
              "name" : "_lastUpdated",
              "type" : "date",
              "documentation" : "Only return resources which were last updated as specified by the given range"
            },
            {
              "name" : "_list",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a list"
            },
            {
              "name" : "_profile",
              "type" : "uri",
              "documentation" : "Search for resources which have the given profile"
            },
            {
              "name" : "_security",
              "type" : "token",
              "documentation" : "Search for resources which have the given security labels"
            },
            {
              "name" : "_source",
              "type" : "uri",
              "documentation" : "Search for resources which have the given source value (Resource.meta.source)"
            },
            {
              "name" : "_tag",
              "type" : "token",
              "documentation" : "Search for resources which have the given tag"
            },
            {
              "name" : "_text",
              "type" : "string",
              "documentation" : "Search the contents of the resource's narrative using a fulltext search"
            },
            {
              "name" : "contact",
              "type" : "string",
              "documentation" : "Name of an individual to contact"
            },
            {
              "name" : "context",
              "type" : "token",
              "documentation" : "A use context assigned to the naming system"
            },
            {
              "name" : "context-quantity",
              "type" : "quantity",
              "documentation" : "A quantity- or range-valued use context assigned to the naming system"
            },
            {
              "name" : "context-type",
              "type" : "token",
              "documentation" : "A type of use context assigned to the naming system"
            },
            {
              "name" : "context-type-quantity",
              "type" : "composite",
              "documentation" : "A use context type and quantity- or range-based value assigned to the naming system"
            },
            {
              "name" : "context-type-value",
              "type" : "composite",
              "documentation" : "A use context type and value assigned to the naming system"
            },
            {
              "name" : "date",
              "type" : "date",
              "documentation" : "The naming system publication date"
            },
            {
              "name" : "description",
              "type" : "string",
              "documentation" : "The description of the naming system"
            },
            {
              "name" : "id-type",
              "type" : "token",
              "documentation" : "oid | uuid | uri | other"
            },
            {
              "name" : "jurisdiction",
              "type" : "token",
              "documentation" : "Intended jurisdiction for the naming system"
            },
            {
              "name" : "kind",
              "type" : "token",
              "documentation" : "codesystem | identifier | root"
            },
            {
              "name" : "name",
              "type" : "string",
              "documentation" : "Computationally friendly name of the naming system"
            },
            {
              "name" : "period",
              "type" : "date",
              "documentation" : "When is identifier valid?"
            },
            {
              "name" : "publisher",
              "type" : "string",
              "documentation" : "Name of the publisher of the naming system"
            },
            {
              "name" : "responsible",
              "type" : "string",
              "documentation" : "Who maintains system namespace?"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "The current status of the naming system"
            },
            {
              "name" : "telecom",
              "type" : "token",
              "documentation" : "Contact details for individual or organization"
            },
            {
              "name" : "type",
              "type" : "token",
              "documentation" : "e.g. driver,  provider,  patient, bank etc."
            },
            {
              "name" : "value",
              "type" : "string",
              "documentation" : "The unique identifier"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            },
            {
              "name" : "meta-delete",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-i-meta-delete",
              "documentation" : "Delete tags, profiles, and/or security labels from a resource"
            },
            {
              "name" : "meta-add",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-i-meta-add",
              "documentation" : "Add tags, profiles, and/or security labels to a resource"
            },
            {
              "name" : "meta",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-its-meta",
              "documentation" : "Request a list of tags, profiles, and security labels for a specfic resource instance"
            },
            {
              "name" : "expunge",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-its-expunge"
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
          "searchRevInclude" : [
            "CodeSystem:supplements",
            "ConceptMap:other",
            "ConceptMap:source",
            "ConceptMap:source-uri",
            "ConceptMap:target",
            "ConceptMap:target-uri",
            "Group:managing-entity",
            "Group:member"
          ]
        },
        {
          "type" : "Practitioner",
          "profile" : "http://hl7.org/fhir/StructureDefinition/Practitioner",
          "interaction" : [
            {
              "code" : "search-type"
            },
            {
              "code" : "update"
            },
            {
              "code" : "vread"
            },
            {
              "code" : "read"
            },
            {
              "code" : "patch"
            },
            {
              "code" : "history-type"
            },
            {
              "code" : "history-instance"
            },
            {
              "code" : "delete"
            },
            {
              "code" : "create"
            }
          ],
          "conditionalCreate" : true,
          "conditionalUpdate" : true,
          "conditionalDelete" : "multiple",
          "searchInclude" : ["*"],
          "searchRevInclude" : [
            "CodeSystem:supplements",
            "ConceptMap:other",
            "ConceptMap:source",
            "ConceptMap:source-uri",
            "ConceptMap:target",
            "ConceptMap:target-uri",
            "Group:managing-entity",
            "Group:member"
          ],
          "searchParam" : [
            {
              "name" : "_content",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a fulltext search"
            },
            {
              "name" : "_filter",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a filter"
            },
            {
              "name" : "_has",
              "type" : "string",
              "documentation" : "Return resources linked to by the given target"
            },
            {
              "name" : "_id",
              "type" : "token",
              "documentation" : "The ID of the resource"
            },
            {
              "name" : "_language",
              "type" : "token",
              "documentation" : "The language of the resource"
            },
            {
              "name" : "_lastUpdated",
              "type" : "date",
              "documentation" : "Only return resources which were last updated as specified by the given range"
            },
            {
              "name" : "_list",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a list"
            },
            {
              "name" : "_profile",
              "type" : "uri",
              "documentation" : "Search for resources which have the given profile"
            },
            {
              "name" : "_security",
              "type" : "token",
              "documentation" : "Search for resources which have the given security labels"
            },
            {
              "name" : "_source",
              "type" : "uri",
              "documentation" : "Search for resources which have the given source value (Resource.meta.source)"
            },
            {
              "name" : "_tag",
              "type" : "token",
              "documentation" : "Search for resources which have the given tag"
            },
            {
              "name" : "_text",
              "type" : "string",
              "documentation" : "Search the contents of the resource's narrative using a fulltext search"
            },
            {
              "name" : "active",
              "type" : "token",
              "documentation" : "Whether the practitioner record is active"
            },
            {
              "name" : "address",
              "type" : "string",
              "documentation" : "A server defined search that may match any of the string fields in the Address, including line, city, district, state, country, postalCode, and/or text"
            },
            {
              "name" : "address-city",
              "type" : "string",
              "documentation" : "A city specified in an address"
            },
            {
              "name" : "address-country",
              "type" : "string",
              "documentation" : "A country specified in an address"
            },
            {
              "name" : "address-postalcode",
              "type" : "string",
              "documentation" : "A postalCode specified in an address"
            },
            {
              "name" : "address-state",
              "type" : "string",
              "documentation" : "A state specified in an address"
            },
            {
              "name" : "address-use",
              "type" : "token",
              "documentation" : "A use code specified in an address"
            },
            {
              "name" : "communication",
              "type" : "token",
              "documentation" : "One of the languages that the practitioner can communicate with"
            },
            {
              "name" : "email",
              "type" : "token",
              "documentation" : "A value in an email contact"
            },
            {
              "name" : "family",
              "type" : "string",
              "documentation" : "A portion of the family name"
            },
            {
              "name" : "gender",
              "type" : "token",
              "documentation" : "Gender of the practitioner"
            },
            {
              "name" : "given",
              "type" : "string",
              "documentation" : "A portion of the given name"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "A practitioner's Identifier"
            },
            {
              "name" : "name",
              "type" : "string",
              "documentation" : "A server defined search that may match any of the string fields in the HumanName, including family, give, prefix, suffix, suffix, and/or text"
            },
            {
              "name" : "phone",
              "type" : "token",
              "documentation" : "A value in a phone contact"
            },
            {
              "name" : "phonetic",
              "type" : "string",
              "documentation" : "A portion of either family or given name using some kind of phonetic matching algorithm"
            },
            {
              "name" : "telecom",
              "type" : "token",
              "documentation" : "The value in any kind of contact"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            },
            {
              "name" : "meta-delete",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-i-meta-delete",
              "documentation" : "Delete tags, profiles, and/or security labels from a resource"
            },
            {
              "name" : "meta-add",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-i-meta-add",
              "documentation" : "Add tags, profiles, and/or security labels to a resource"
            },
            {
              "name" : "meta",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-its-meta",
              "documentation" : "Request a list of tags, profiles, and security labels for a specfic resource instance"
            },
            {
              "name" : "expunge",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-its-expunge"
            }
          ]
        },
        {
          "type" : "StructureDefinition",
          "profile" : "http://hl7.org/fhir/StructureDefinition/StructureDefinition",
          "interaction" : [
            {
              "code" : "search-type"
            },
            {
              "code" : "read"
            }
          ],
          "searchInclude" : ["*"],
          "searchRevInclude" : [
            "CodeSystem:supplements",
            "ConceptMap:other",
            "ConceptMap:source",
            "ConceptMap:source-uri",
            "ConceptMap:target",
            "ConceptMap:target-uri",
            "Group:managing-entity",
            "Group:member"
          ],
          "searchParam" : [
            {
              "name" : "type",
              "type" : "token",
              "documentation" : "Type defined or constrained by this structure"
            }
          ]
        },
        {
          "type" : "ValueSet",
          "profile" : "http://hl7.org/fhir/StructureDefinition/ValueSet",
          "interaction" : [
            {
              "code" : "update"
            },
            {
              "code" : "vread"
            },
            {
              "code" : "read"
            },
            {
              "code" : "patch"
            },
            {
              "code" : "history-type"
            },
            {
              "code" : "history-instance"
            },
            {
              "code" : "delete"
            },
            {
              "code" : "create"
            },
            {
              "code" : "search-type"
            }
          ],
          "conditionalCreate" : true,
          "conditionalUpdate" : true,
          "conditionalDelete" : "multiple",
          "searchInclude" : ["*"],
          "searchRevInclude" : [
            "CodeSystem:supplements",
            "ConceptMap:other",
            "ConceptMap:source",
            "ConceptMap:source-uri",
            "ConceptMap:target",
            "ConceptMap:target-uri",
            "Group:managing-entity",
            "Group:member"
          ],
          "searchParam" : [
            {
              "name" : "_content",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a fulltext search"
            },
            {
              "name" : "_filter",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a filter"
            },
            {
              "name" : "_has",
              "type" : "string",
              "documentation" : "Return resources linked to by the given target"
            },
            {
              "name" : "_id",
              "type" : "token",
              "documentation" : "The ID of the resource"
            },
            {
              "name" : "_language",
              "type" : "token",
              "documentation" : "The language of the resource"
            },
            {
              "name" : "_lastUpdated",
              "type" : "date",
              "documentation" : "Only return resources which were last updated as specified by the given range"
            },
            {
              "name" : "_list",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a list"
            },
            {
              "name" : "_profile",
              "type" : "uri",
              "documentation" : "Search for resources which have the given profile"
            },
            {
              "name" : "_security",
              "type" : "token",
              "documentation" : "Search for resources which have the given security labels"
            },
            {
              "name" : "_source",
              "type" : "uri",
              "documentation" : "Search for resources which have the given source value (Resource.meta.source)"
            },
            {
              "name" : "_tag",
              "type" : "token",
              "documentation" : "Search for resources which have the given tag"
            },
            {
              "name" : "_text",
              "type" : "string",
              "documentation" : "Search the contents of the resource's narrative using a fulltext search"
            },
            {
              "name" : "code",
              "type" : "token",
              "documentation" : "This special parameter searches for codes in the value set. See additional notes on the ValueSet resource"
            },
            {
              "name" : "context",
              "type" : "token",
              "documentation" : "A use context assigned to the value set"
            },
            {
              "name" : "context-quantity",
              "type" : "quantity",
              "documentation" : "A quantity- or range-valued use context assigned to the value set"
            },
            {
              "name" : "context-type",
              "type" : "token",
              "documentation" : "A type of use context assigned to the value set"
            },
            {
              "name" : "context-type-quantity",
              "type" : "composite",
              "documentation" : "A use context type and quantity- or range-based value assigned to the value set"
            },
            {
              "name" : "context-type-value",
              "type" : "composite",
              "documentation" : "A use context type and value assigned to the value set"
            },
            {
              "name" : "date",
              "type" : "date",
              "documentation" : "The value set publication date"
            },
            {
              "name" : "description",
              "type" : "string",
              "documentation" : "The description of the value set"
            },
            {
              "name" : "expansion",
              "type" : "uri",
              "documentation" : "Identifies the value set expansion (business identifier)"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "External identifier for the value set"
            },
            {
              "name" : "jurisdiction",
              "type" : "token",
              "documentation" : "Intended jurisdiction for the value set"
            },
            {
              "name" : "name",
              "type" : "string",
              "documentation" : "Computationally friendly name of the value set"
            },
            {
              "name" : "publisher",
              "type" : "string",
              "documentation" : "Name of the publisher of the value set"
            },
            {
              "name" : "reference",
              "type" : "uri",
              "documentation" : "A code system included or excluded in the value set or an imported value set"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "The current status of the value set"
            },
            {
              "name" : "title",
              "type" : "string",
              "documentation" : "The human-friendly name of the value set"
            },
            {
              "name" : "url",
              "type" : "uri",
              "documentation" : "The uri that identifies the value set"
            },
            {
              "name" : "version",
              "type" : "token",
              "documentation" : "The business version of the value set"
            }
          ],
          "operation" : [
            {
              "name" : "validate-code",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/CodeSystemValueSet-it-validate-code"
            },
            {
              "name" : "invalidate-expansion",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/ValueSet-i-invalidate-expansion"
            },
            {
              "name" : "expand",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/ValueSet-it-expand"
            },
            {
              "name" : "validate",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            },
            {
              "name" : "meta-delete",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-i-meta-delete",
              "documentation" : "Delete tags, profiles, and/or security labels from a resource"
            },
            {
              "name" : "meta-add",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-i-meta-add",
              "documentation" : "Add tags, profiles, and/or security labels to a resource"
            },
            {
              "name" : "meta",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-its-meta",
              "documentation" : "Request a list of tags, profiles, and security labels for a specfic resource instance"
            },
            {
              "name" : "expunge",
              "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-its-expunge"
            }
          ]
        }
      ],
      "operation" : [
        {
          "name" : "import",
          "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-import",
          "documentation" : "Import terminology resources"
        },
        {
          "name" : "reindex-terminology",
          "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-reindex-terminology"
        },
        {
          "name" : "meta",
          "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-its-meta"
        },
        {
          "name" : "get-resource-counts",
          "definition" : "https://terminology.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-get-resource-counts",
          "documentation" : "Provides the number of resources currently stored on the server, broken down by resource type"
        }
      ]
    }
  ]
}

```
