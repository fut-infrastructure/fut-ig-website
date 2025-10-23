# library - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **library**

## CapabilityStatement: library 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/CapabilityStatement/library | *Version*:6.0.0 |
| Active as of 2025-10-21 | *Computable Name*:library |

 [Raw OpenAPI-Swagger Definition file](library.openapi.json) | [Download](library.openapi.json) 

## 

* Implementation Guide Version: 6.0.0 
* FHIR Version: 4.0.1 
* Supported Formats: `application/fhir+xml`, `xml`, `application/fhir+json`, `json`, `application/x-turtle`, `ttl`, `html/json`, `html/xml`, `html/turtle`
* Published on: 2025-10-21 11:11:29+0000 
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

| | | | | | | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| [Library](#Library1-1) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-library](StructureDefinition-ehealth-library.md) | y | y | y | y | y | _content, _has, _id, _language, _lastUpdated, _profile, _security, _tag, _text, composed-of, date, depends-on, derived-from, description, effective, identifier, jurisdiction, name, predecessor, publisher, status, successor, title, topic, url, version | `*`,`Library:composed-of`,`Library:depends-on`,`Library:derived-from`,`Library:predecessor`,`Library:successor` | `Library:composed-of`,`Library:depends-on`,`Library:derived-from`,`Library:predecessor`,`Library:successor` | `$validate`,`$evaluate` |
| [OperationDefinition](#OperationDefinition1-2) | [http://hl7.org/fhir/StructureDefinition/OperationDefinition](http://hl7.org/fhir/R4/operationdefinition.html) | y |  |  |  |  |  | `*` | `Library:composed-of`,`Library:depends-on`,`Library:derived-from`,`Library:predecessor`,`Library:successor` |  |

-------

#### Resource Conformance: supported Library

Base System Profile

[ehealth-library](StructureDefinition-ehealth-library.md)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `search-type`, `vread`, `read`, `create`.

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



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "library",
  "url" : "http://ehealth.sundhed.dk/fhir/CapabilityStatement/library",
  "version" : "6.0.0",
  "name" : "library",
  "status" : "active",
  "date" : "2025-10-21T11:11:29.387+00:00",
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
    "name" : "library",
    "version" : "1.18.0"
  },
  "implementation" : {
    "description" : "eHealth library service",
    "url" : "https://library.devtest.systematic-ehealth.com/fhir"
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
          "type" : "Library",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-library",
          "interaction" : [
            {
              "code" : "update"
            },
            {
              "code" : "search-type"
            },
            {
              "code" : "vread"
            },
            {
              "code" : "read"
            },
            {
              "code" : "create"
            }
          ],
          "conditionalCreate" : true,
          "conditionalUpdate" : true,
          "searchInclude" : [
            "*",
            "Library:composed-of",
            "Library:depends-on",
            "Library:derived-from",
            "Library:predecessor",
            "Library:successor"
          ],
          "searchRevInclude" : [
            "Library:composed-of",
            "Library:depends-on",
            "Library:derived-from",
            "Library:predecessor",
            "Library:successor"
          ],
          "searchParam" : [
            {
              "name" : "_content",
              "type" : "string",
              "documentation" : "Search the contents of the resource's data using a fulltext search"
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
              "type" : "string",
              "documentation" : "The language of the resource"
            },
            {
              "name" : "_lastUpdated",
              "type" : "date",
              "documentation" : "Only return resources which were last updated as specified by the given range"
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
              "name" : "composed-of",
              "type" : "reference",
              "documentation" : "What resource is being referenced"
            },
            {
              "name" : "date",
              "type" : "date",
              "documentation" : "The library publication date"
            },
            {
              "name" : "depends-on",
              "type" : "reference",
              "documentation" : "What resource is being referenced"
            },
            {
              "name" : "derived-from",
              "type" : "reference",
              "documentation" : "What resource is being referenced"
            },
            {
              "name" : "description",
              "type" : "string",
              "documentation" : "The description of the library"
            },
            {
              "name" : "effective",
              "type" : "date",
              "documentation" : "The time during which the library is intended to be in use"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "External identifier for the library"
            },
            {
              "name" : "jurisdiction",
              "type" : "token",
              "documentation" : "Intended jurisdiction for the library"
            },
            {
              "name" : "name",
              "type" : "string",
              "documentation" : "Computationally friendly name of the library"
            },
            {
              "name" : "predecessor",
              "type" : "reference",
              "documentation" : "What resource is being referenced"
            },
            {
              "name" : "publisher",
              "type" : "string",
              "documentation" : "Name of the publisher of the library"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "The current status of the library"
            },
            {
              "name" : "successor",
              "type" : "reference",
              "documentation" : "What resource is being referenced"
            },
            {
              "name" : "title",
              "type" : "string",
              "documentation" : "The human-friendly name of the library"
            },
            {
              "name" : "topic",
              "type" : "token",
              "documentation" : "Topics associated with the module"
            },
            {
              "name" : "url",
              "type" : "uri",
              "documentation" : "The uri that identifies the library"
            },
            {
              "name" : "version",
              "type" : "token",
              "documentation" : "The business version of the library"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://library.devtest.systematic-ehealth.com/fhir/OperationDefinition/Library-it-validate"
            },
            {
              "name" : "evaluate",
              "definition" : "https://library.devtest.systematic-ehealth.com/fhir/OperationDefinition/Library-it-evaluate",
              "documentation" : "This operation evaluates parameters passed as input against the decision support rule identified by the Library resource. It returns the computed clinical decision support result and/or errors. The Library resource identifies the clinical decision rule and define its parameters.\n\nThe operation is idempotent.\n### Input\n- 1..1 Parameters: HL7 FHIR [Parameters](https://www.hl7.org/fhir/stu3/parameters.html) resource containing input parameters for the clinical decision support computation.This should either be a QuestionnaireResponse or an Observation for evaluation.\n\n### Output\nUpon success this operation returns an GuidanceResponse resource containing the decision support result."
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
            "Library:composed-of",
            "Library:depends-on",
            "Library:derived-from",
            "Library:predecessor",
            "Library:successor"
          ]
        }
      ],
      "operation" : [
        {
          "name" : "migrate",
          "definition" : "https://library.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-migrate",
          "documentation" : "Data migration"
        },
        {
          "name" : "reindex-terminology",
          "definition" : "https://library.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-reindex-terminology"
        },
        {
          "name" : "meta",
          "definition" : "https://library.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-meta"
        },
        {
          "name" : "get-resource-counts",
          "definition" : "https://library.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-get-resource-counts",
          "documentation" : "Provides the number of resources currently stored on the server, broken down by resource type"
        }
      ]
    }
  ]
}

```
