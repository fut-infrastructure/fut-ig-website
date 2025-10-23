# questionnaire - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **questionnaire**

## CapabilityStatement: questionnaire 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/CapabilityStatement/questionnaire | *Version*:6.0.0 |
| Active as of 2025-10-21 | *Computable Name*:questionnaire |

 [Raw OpenAPI-Swagger Definition file](questionnaire.openapi.json) | [Download](questionnaire.openapi.json) 

## 

* Implementation Guide Version: 6.0.0 
* FHIR Version: 4.0.1 
* Supported Formats: `application/fhir+xml`, `xml`, `application/fhir+json`, `json`, `application/x-turtle`, `ttl`, `html/json`, `html/xml`, `html/turtle`
* Published on: 2025-10-21 10:34:54+0000 
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

| | | | | | | | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| [Basic](#Basic1-1) | [http://hl7.org/fhir/StructureDefinition/Basic](http://hl7.org/fhir/R4/basic.html) | y | y | y | y | y |  | _content, _has, _id, _language, _lastUpdated, _profile, _security, _tag, _text, actionGuidanceForReference, actionGuidanceForType, actionGuidanceType, code, context, context-type, context-type-value, identifier, intendedAudience, recommendation, reference, role, status, viewForReference, viewForType, viewType | `*` | `Basic:actionGuidanceForReference`,`Basic:intendedAudience`,`Basic:reference`,`Basic:viewForReference`,`Questionnaire:reference`,`StructureDefinition:valueset` | `$validate` |
| [OperationDefinition](#OperationDefinition1-2) | [http://hl7.org/fhir/StructureDefinition/OperationDefinition](http://hl7.org/fhir/R4/operationdefinition.html) | y |  |  |  |  |  |  | `*` | `Basic:actionGuidanceForReference`,`Basic:intendedAudience`,`Basic:reference`,`Basic:viewForReference`,`Questionnaire:reference`,`StructureDefinition:valueset` |  |
| [Questionnaire](#Questionnaire1-3) | [http://hl7.org/fhir/StructureDefinition/Questionnaire](http://hl7.org/fhir/R4/questionnaire.html) | y | y | y | y | y | y | _content, _has, _id, _language, _lastUpdated, _profile, _security, _tag, _text, base, baseEnvironment, code, context, context-type, context-type-value, date, description, effective, ehealthPredecessor, employeeTitle, identifier, jurisdiction, name, publisher, reference, role, status, title, type, url, version | `*` | `Basic:actionGuidanceForReference`,`Basic:intendedAudience`,`Basic:reference`,`Basic:viewForReference`,`Questionnaire:reference`,`StructureDefinition:valueset` | `$validate`,`$create-clone` |
| [StructureDefinition](#StructureDefinition1-4) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-definedquestion](StructureDefinition-ehealth-definedquestion.md) | y | y | y | y | y | y | _content, _filter, _has, _id, _language, _lastUpdated, _profile, _security, _source, _tag, _text, abstract, base, base-path, context-type, date, derivation, description, experimental, ext-context, identifier, jurisdiction, keyword, kind, name, path, publisher, status, title, type, url, valueset, version | `*`,`StructureDefinition:valueset` | `Basic:actionGuidanceForReference`,`Basic:intendedAudience`,`Basic:reference`,`Basic:viewForReference`,`Questionnaire:reference`,`StructureDefinition:valueset` | `$validate` |

-------

#### Resource Conformance: supported Basic

Base System Profile

[Basic](http://hl7.org/fhir/R4/basic.html)

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

#### Resource Conformance: supported Questionnaire

Base System Profile

[Questionnaire](http://hl7.org/fhir/R4/questionnaire.html)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `search-type`, `vread`, `read`, `delete`, `create`.

Search Parameters


 

Extended Operations


#### Resource Conformance: supported StructureDefinition

Base System Profile

[ehealth-definedquestion](StructureDefinition-ehealth-definedquestion.md)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `search-type`, `vread`, `read`, `delete`, `create`.

Search Parameters


 

Extended Operations




## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "questionnaire",
  "url" : "http://ehealth.sundhed.dk/fhir/CapabilityStatement/questionnaire",
  "version" : "6.0.0",
  "name" : "questionnaire",
  "status" : "active",
  "date" : "2025-10-21T10:34:54.231+00:00",
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
    "name" : "questionnaire",
    "version" : "2.13.0"
  },
  "implementation" : {
    "description" : "eHealth questionnaire service",
    "url" : "https://questionnaire.devtest.systematic-ehealth.com/fhir"
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
          "type" : "Basic",
          "profile" : "http://hl7.org/fhir/StructureDefinition/Basic",
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
          "searchInclude" : ["*"],
          "searchRevInclude" : [
            "Basic:actionGuidanceForReference",
            "Basic:intendedAudience",
            "Basic:reference",
            "Basic:viewForReference",
            "Questionnaire:reference",
            "StructureDefinition:valueset"
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
              "name" : "actionGuidanceForReference",
              "type" : "reference",
              "documentation" : "Action guidance for reference"
            },
            {
              "name" : "actionGuidanceForType",
              "type" : "token",
              "documentation" : "The action guidance for type"
            },
            {
              "name" : "actionGuidanceType",
              "type" : "token",
              "documentation" : "The action guidance type"
            },
            {
              "name" : "code",
              "type" : "token",
              "documentation" : "The code"
            },
            {
              "name" : "context",
              "type" : "token",
              "documentation" : "A use context assigned to the action guidance"
            },
            {
              "name" : "context-type",
              "type" : "token",
              "documentation" : "A type of use context assigned to the action guidance"
            },
            {
              "name" : "context-type-value",
              "type" : "composite",
              "documentation" : "A use context type and value assigned to the action guidance"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "The identifier"
            },
            {
              "name" : "intendedAudience",
              "type" : "reference",
              "documentation" : "The intended audience"
            },
            {
              "name" : "recommendation",
              "type" : "token",
              "documentation" : "The recommendation"
            },
            {
              "name" : "reference",
              "type" : "reference",
              "documentation" : "The modifier reference"
            },
            {
              "name" : "role",
              "type" : "token",
              "documentation" : "The modifier role"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "The current status"
            },
            {
              "name" : "viewForReference",
              "type" : "reference",
              "documentation" : "View for reference"
            },
            {
              "name" : "viewForType",
              "type" : "token",
              "documentation" : "The view for type"
            },
            {
              "name" : "viewType",
              "type" : "token",
              "documentation" : "The view type"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://questionnaire.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
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
            "Basic:actionGuidanceForReference",
            "Basic:intendedAudience",
            "Basic:reference",
            "Basic:viewForReference",
            "Questionnaire:reference",
            "StructureDefinition:valueset"
          ]
        },
        {
          "type" : "Questionnaire",
          "profile" : "http://hl7.org/fhir/StructureDefinition/Questionnaire",
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
              "code" : "delete"
            },
            {
              "code" : "create"
            }
          ],
          "conditionalCreate" : true,
          "conditionalUpdate" : true,
          "searchInclude" : ["*"],
          "searchRevInclude" : [
            "Basic:actionGuidanceForReference",
            "Basic:intendedAudience",
            "Basic:reference",
            "Basic:viewForReference",
            "Questionnaire:reference",
            "StructureDefinition:valueset"
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
              "name" : "base",
              "type" : "token",
              "documentation" : "Base of resource"
            },
            {
              "name" : "baseEnvironment",
              "type" : "token",
              "documentation" : "Base Environment of resource"
            },
            {
              "name" : "code",
              "type" : "token",
              "documentation" : "A code that corresponds to one of its items in the questionnaire"
            },
            {
              "name" : "context",
              "type" : "token",
              "documentation" : "A use context assigned to the questionnaire"
            },
            {
              "name" : "context-type",
              "type" : "token",
              "documentation" : "A type of use context assigned to the questionnaire"
            },
            {
              "name" : "context-type-value",
              "type" : "composite",
              "documentation" : "A use context type and value assigned to the questionnaire"
            },
            {
              "name" : "date",
              "type" : "date",
              "documentation" : "The questionnaire publication date"
            },
            {
              "name" : "description",
              "type" : "string",
              "documentation" : "The description of the questionnaire"
            },
            {
              "name" : "effective",
              "type" : "date",
              "documentation" : "The time during which the questionnaire is intended to be in use"
            },
            {
              "name" : "ehealthPredecessor",
              "type" : "token",
              "documentation" : "Predecessor of resource"
            },
            {
              "name" : "employeeTitle",
              "type" : "string",
              "documentation" : "Title intended for clinicians"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "External identifier for the questionnaire"
            },
            {
              "name" : "jurisdiction",
              "type" : "token",
              "documentation" : "Intended jurisdiction for the questionnaire"
            },
            {
              "name" : "name",
              "type" : "string",
              "documentation" : "Computationally friendly name of the questionnaire"
            },
            {
              "name" : "publisher",
              "type" : "string",
              "documentation" : "Name of the publisher of the questionnaire"
            },
            {
              "name" : "reference",
              "type" : "reference",
              "documentation" : "Modifier reference"
            },
            {
              "name" : "role",
              "type" : "token",
              "documentation" : "Modifier role"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "The current status of the questionnaire"
            },
            {
              "name" : "title",
              "type" : "string",
              "documentation" : "The human-friendly name of the questionnaire"
            },
            {
              "name" : "type",
              "type" : "token",
              "documentation" : "Questionnaire type"
            },
            {
              "name" : "url",
              "type" : "uri",
              "documentation" : "The uri that identifies the questionnaire"
            },
            {
              "name" : "version",
              "type" : "token",
              "documentation" : "The business version of the questionnaire"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://questionnaire.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            },
            {
              "name" : "create-clone",
              "definition" : "https://questionnaire.devtest.systematic-ehealth.com/fhir/OperationDefinition/Questionnaire-i-create-clone",
              "documentation" : "### Input\n- resourceId: reference to the Questionnaire resource that should be cloned\n- clone-operation: minor-version/major-version/copy Coding from codesystem: http://ehealth.sundhed.dk/cs/ehealth-clone-operation \n\n### Output\nBundle containing all resources that were created during the operation.\n\n### Validation\n- New business versions require that the user has modifier-role: owner or co-author for the resource\n- New copy does not require that the user has a modifier-role.\n- New business version can be made only when no draft resource exists (having identical base identifier).\n- Read/search/create privileges are required for the resource types affected by $create-clone"
            }
          ]
        },
        {
          "type" : "StructureDefinition",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-definedquestion",
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
              "code" : "delete"
            },
            {
              "code" : "create"
            }
          ],
          "conditionalCreate" : true,
          "conditionalUpdate" : true,
          "conditionalDelete" : "single",
          "searchInclude" : ["*", "StructureDefinition:valueset"],
          "searchRevInclude" : [
            "Basic:actionGuidanceForReference",
            "Basic:intendedAudience",
            "Basic:reference",
            "Basic:viewForReference",
            "Questionnaire:reference",
            "StructureDefinition:valueset"
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
              "name" : "abstract",
              "type" : "token",
              "documentation" : "Whether the structure is abstract"
            },
            {
              "name" : "base",
              "type" : "uri",
              "documentation" : "Definition that this type is constrained/specialized from"
            },
            {
              "name" : "base-path",
              "type" : "token",
              "documentation" : "Path that identifies the base element"
            },
            {
              "name" : "context-type",
              "type" : "token",
              "documentation" : "resource | datatype | extension"
            },
            {
              "name" : "date",
              "type" : "date",
              "documentation" : "The structure definition publication date"
            },
            {
              "name" : "derivation",
              "type" : "token",
              "documentation" : "specialization | constraint - How relates to base definition"
            },
            {
              "name" : "description",
              "type" : "string",
              "documentation" : "The description of the structure definition"
            },
            {
              "name" : "experimental",
              "type" : "token",
              "documentation" : "For testing purposes, not real usage"
            },
            {
              "name" : "ext-context",
              "type" : "string",
              "documentation" : "Where the extension can be used in instances"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "External identifier for the structure definition"
            },
            {
              "name" : "jurisdiction",
              "type" : "token",
              "documentation" : "Intended jurisdiction for the structure definition"
            },
            {
              "name" : "keyword",
              "type" : "token",
              "documentation" : "A code for the profile"
            },
            {
              "name" : "kind",
              "type" : "token",
              "documentation" : "primitive-type | complex-type | resource | logical"
            },
            {
              "name" : "name",
              "type" : "string",
              "documentation" : "Computationally friendly name of the structure definition"
            },
            {
              "name" : "path",
              "type" : "token",
              "documentation" : "A path that is constrained in the profile"
            },
            {
              "name" : "publisher",
              "type" : "string",
              "documentation" : "Name of the publisher of the structure definition"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "The current status of the structure definition"
            },
            {
              "name" : "title",
              "type" : "string",
              "documentation" : "The human-friendly name of the structure definition"
            },
            {
              "name" : "type",
              "type" : "token",
              "documentation" : "Type defined or constrained by this structure"
            },
            {
              "name" : "url",
              "type" : "uri",
              "documentation" : "The uri that identifies the structure definition"
            },
            {
              "name" : "valueset",
              "type" : "reference",
              "documentation" : "A vocabulary binding reference"
            },
            {
              "name" : "version",
              "type" : "token",
              "documentation" : "The business version of the structure definition"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://questionnaire.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            }
          ]
        }
      ],
      "operation" : [
        {
          "name" : "migrate",
          "definition" : "https://questionnaire.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-migrate",
          "documentation" : "Data migration"
        },
        {
          "name" : "reindex-terminology",
          "definition" : "https://questionnaire.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-reindex-terminology"
        },
        {
          "name" : "meta",
          "definition" : "https://questionnaire.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-meta"
        },
        {
          "name" : "get-resource-counts",
          "definition" : "https://questionnaire.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-get-resource-counts",
          "documentation" : "Provides the number of resources currently stored on the server, broken down by resource type"
        }
      ]
    }
  ]
}

```
