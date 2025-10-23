# plan - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **plan**

## CapabilityStatement: plan 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/CapabilityStatement/plan | *Version*:6.0.0 |
| Active as of 2025-10-21 | *Computable Name*:plan |

 [Raw OpenAPI-Swagger Definition file](plan.openapi.json) | [Download](plan.openapi.json) 

## 

* Implementation Guide Version: 6.0.0 
* FHIR Version: 4.0.1 
* Supported Formats: `application/fhir+xml`, `xml`, `application/fhir+json`, `json`, `application/x-turtle`, `ttl`, `html/json`, `html/xml`, `html/turtle`
* Published on: 2025-10-21 12:28:01+0000 
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
| [ActivityDefinition](#ActivityDefinition1-1) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-activitydefinition](StructureDefinition-ehealth-activitydefinition.md) | y | y | y | y | y | _content, _has, _id, _language, _lastUpdated, _profile, _security, _source, _tag, _text, base, baseEnvironment, composed-of, context, context-quantity, context-type, context-type-value, date, depends-on, derived-from, description, effective, ehealthPredecessor, employeeTitle, identifier, intendedAudience, jurisdiction, modifier_role_reference, modifier_role_role, name, predecessor, publisher, recommendation, status, successor, title, topic, url, version | `ActivityDefinition:composed-of`,`ActivityDefinition:depends-on`,`ActivityDefinition:derived-from`,`ActivityDefinition:predecessor`,`ActivityDefinition:successor` | `ActivityDefinition:composed-of`,`ActivityDefinition:depends-on`,`ActivityDefinition:derived-from`,`ActivityDefinition:intendedAudience`,`ActivityDefinition:modifier_role_reference`,`ActivityDefinition:predecessor`,`ActivityDefinition:successor`,`DocumentReference:authenticator`,`DocumentReference:author`,`DocumentReference:custodian`,`DocumentReference:encounter`,`DocumentReference:intendedOrganization`,`DocumentReference:modifier_role_reference`,`DocumentReference:patient`,`DocumentReference:related`,`DocumentReference:relatesto`,`DocumentReference:subject`,`PlanDefinition:composed-of`,`PlanDefinition:definition`,`PlanDefinition:depends-on`,`PlanDefinition:derived-from`,`PlanDefinition:documentation`,`PlanDefinition:intendedAudience`,`PlanDefinition:modifier_role_reference`,`PlanDefinition:predecessor`,`PlanDefinition:successor` | `$validate`,`$create-clone` |
| [DocumentReference](#DocumentReference1-2) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-documentreference](StructureDefinition-ehealth-documentreference.md) | y | y | y | y | y | _content, _filter, _has, _id, _language, _lastUpdated, _profile, _security, _source, _tag, _text, authenticator, author, category, contenttype, custodian, date, description, encounter, event, facility, format, identifier, intendedOrganization, language, location, modifier_role_reference, modifier_role_role, patient, period, related, relatesto, relation, relationship, security-label, setting, status, subject, type, use-context-context, use-context-context-type, use-context-context-type-value | `*`,`DocumentReference:authenticator`,`DocumentReference:author`,`DocumentReference:custodian`,`DocumentReference:encounter`,`DocumentReference:intendedOrganization`,`DocumentReference:modifier_role_reference`,`DocumentReference:patient`,`DocumentReference:related`,`DocumentReference:relatesto`,`DocumentReference:subject` | `ActivityDefinition:composed-of`,`ActivityDefinition:depends-on`,`ActivityDefinition:derived-from`,`ActivityDefinition:intendedAudience`,`ActivityDefinition:modifier_role_reference`,`ActivityDefinition:predecessor`,`ActivityDefinition:successor`,`DocumentReference:authenticator`,`DocumentReference:author`,`DocumentReference:custodian`,`DocumentReference:encounter`,`DocumentReference:intendedOrganization`,`DocumentReference:modifier_role_reference`,`DocumentReference:patient`,`DocumentReference:related`,`DocumentReference:relatesto`,`DocumentReference:subject`,`PlanDefinition:composed-of`,`PlanDefinition:definition`,`PlanDefinition:depends-on`,`PlanDefinition:derived-from`,`PlanDefinition:documentation`,`PlanDefinition:intendedAudience`,`PlanDefinition:modifier_role_reference`,`PlanDefinition:predecessor`,`PlanDefinition:successor` | `$validate` |
| [OperationDefinition](#OperationDefinition1-3) | [http://hl7.org/fhir/StructureDefinition/OperationDefinition](http://hl7.org/fhir/R4/operationdefinition.html) | y |  |  |  |  |  | `*` | `ActivityDefinition:composed-of`,`ActivityDefinition:depends-on`,`ActivityDefinition:derived-from`,`ActivityDefinition:intendedAudience`,`ActivityDefinition:modifier_role_reference`,`ActivityDefinition:predecessor`,`ActivityDefinition:successor`,`DocumentReference:authenticator`,`DocumentReference:author`,`DocumentReference:custodian`,`DocumentReference:encounter`,`DocumentReference:intendedOrganization`,`DocumentReference:modifier_role_reference`,`DocumentReference:patient`,`DocumentReference:related`,`DocumentReference:relatesto`,`DocumentReference:subject`,`PlanDefinition:composed-of`,`PlanDefinition:definition`,`PlanDefinition:depends-on`,`PlanDefinition:derived-from`,`PlanDefinition:documentation`,`PlanDefinition:intendedAudience`,`PlanDefinition:modifier_role_reference`,`PlanDefinition:predecessor`,`PlanDefinition:successor` |  |
| [PlanDefinition](#PlanDefinition1-4) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition](StructureDefinition-ehealth-plandefinition.md) | y | y | y | y | y | _content, _has, _id, _language, _lastUpdated, _profile, _security, _source, _tag, _text, base, baseEnvironment, composed-of, context, context-quantity, context-type, context-type-value, date, definition, depends-on, derived-from, description, documentation, effective, ehealthPredecessor, employeeTitle, identifier, intendedAudience, jurisdiction, modifier_role_reference, modifier_role_role, name, predecessor, publisher, recommendation, status, successor, title, topic, type, url, version | `*`,`PlanDefinition:composed-of`,`PlanDefinition:definition`,`PlanDefinition:depends-on`,`PlanDefinition:derived-from`,`PlanDefinition:documentation`,`PlanDefinition:predecessor`,`PlanDefinition:successor` | `ActivityDefinition:composed-of`,`ActivityDefinition:depends-on`,`ActivityDefinition:derived-from`,`ActivityDefinition:intendedAudience`,`ActivityDefinition:modifier_role_reference`,`ActivityDefinition:predecessor`,`ActivityDefinition:successor`,`DocumentReference:authenticator`,`DocumentReference:author`,`DocumentReference:custodian`,`DocumentReference:encounter`,`DocumentReference:intendedOrganization`,`DocumentReference:modifier_role_reference`,`DocumentReference:patient`,`DocumentReference:related`,`DocumentReference:relatesto`,`DocumentReference:subject`,`PlanDefinition:composed-of`,`PlanDefinition:definition`,`PlanDefinition:depends-on`,`PlanDefinition:derived-from`,`PlanDefinition:documentation`,`PlanDefinition:intendedAudience`,`PlanDefinition:modifier_role_reference`,`PlanDefinition:predecessor`,`PlanDefinition:successor` | `$validate`,`$import`,`$export`,`$create-clone`,`$apply` |

-------

#### Resource Conformance: supported ActivityDefinition

Base System Profile

[ehealth-activitydefinition](StructureDefinition-ehealth-activitydefinition.md)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `search-type`, `vread`, `read`, `create`.

Search Parameters


 

Extended Operations


#### Resource Conformance: supported DocumentReference

Base System Profile

[ehealth-documentreference](StructureDefinition-ehealth-documentreference.md)

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

#### Resource Conformance: supported PlanDefinition

Base System Profile

[ehealth-plandefinition](StructureDefinition-ehealth-plandefinition.md)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `search-type`, `vread`, `read`, `create`.

Search Parameters


 

Extended Operations




## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "plan",
  "url" : "http://ehealth.sundhed.dk/fhir/CapabilityStatement/plan",
  "version" : "6.0.0",
  "name" : "plan",
  "status" : "active",
  "date" : "2025-10-21T12:28:01.292+00:00",
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
    "name" : "plan",
    "version" : "2.12.0"
  },
  "implementation" : {
    "description" : "eHealth plan service",
    "url" : "https://plan.devtest.systematic-ehealth.com/fhir"
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
          "type" : "ActivityDefinition",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-activitydefinition",
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
            "ActivityDefinition:composed-of",
            "ActivityDefinition:depends-on",
            "ActivityDefinition:derived-from",
            "ActivityDefinition:predecessor",
            "ActivityDefinition:successor"
          ],
          "searchRevInclude" : [
            "ActivityDefinition:composed-of",
            "ActivityDefinition:depends-on",
            "ActivityDefinition:derived-from",
            "ActivityDefinition:intendedAudience",
            "ActivityDefinition:modifier_role_reference",
            "ActivityDefinition:predecessor",
            "ActivityDefinition:successor",
            "DocumentReference:authenticator",
            "DocumentReference:author",
            "DocumentReference:custodian",
            "DocumentReference:encounter",
            "DocumentReference:intendedOrganization",
            "DocumentReference:modifier_role_reference",
            "DocumentReference:patient",
            "DocumentReference:related",
            "DocumentReference:relatesto",
            "DocumentReference:subject",
            "PlanDefinition:composed-of",
            "PlanDefinition:definition",
            "PlanDefinition:depends-on",
            "PlanDefinition:derived-from",
            "PlanDefinition:documentation",
            "PlanDefinition:intendedAudience",
            "PlanDefinition:modifier_role_reference",
            "PlanDefinition:predecessor",
            "PlanDefinition:successor"
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
              "name" : "composed-of",
              "type" : "reference",
              "documentation" : "What resource is being referenced"
            },
            {
              "name" : "context",
              "type" : "token",
              "documentation" : "A use context assigned to the activity definition"
            },
            {
              "name" : "context-quantity",
              "type" : "quantity",
              "documentation" : "A quantity- or range-valued use context assigned to the activity definition"
            },
            {
              "name" : "context-type",
              "type" : "token",
              "documentation" : "A type of use context assigned to the activity definition"
            },
            {
              "name" : "context-type-value",
              "type" : "composite",
              "documentation" : "A use context type and value assigned to the activity definition"
            },
            {
              "name" : "date",
              "type" : "date",
              "documentation" : "The activity definition publication date"
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
              "documentation" : "The description of the activity definition"
            },
            {
              "name" : "effective",
              "type" : "date",
              "documentation" : "The time during which the activity definition is intended to be in use"
            },
            {
              "name" : "ehealthPredecessor",
              "type" : "token",
              "documentation" : "Predecessor of resource"
            },
            {
              "name" : "employeeTitle",
              "type" : "string",
              "documentation" : "Title intented for clinicians"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "External identifier for the activity definition"
            },
            {
              "name" : "intendedAudience",
              "type" : "reference",
              "documentation" : "The intended audience of the plan definition"
            },
            {
              "name" : "jurisdiction",
              "type" : "token",
              "documentation" : "Intended jurisdiction for the activity definition"
            },
            {
              "name" : "modifier_role_reference",
              "type" : "reference",
              "documentation" : "Reference to either Organization, CareTeam, Practitioner"
            },
            {
              "name" : "modifier_role_role",
              "type" : "token",
              "documentation" : "Role of Organization, CareTeam, Practitioner"
            },
            {
              "name" : "name",
              "type" : "string",
              "documentation" : "Computationally friendly name of the activity definition"
            },
            {
              "name" : "predecessor",
              "type" : "reference",
              "documentation" : "What resource is being referenced"
            },
            {
              "name" : "publisher",
              "type" : "string",
              "documentation" : "Name of the publisher of the activity definition"
            },
            {
              "name" : "recommendation",
              "type" : "token",
              "documentation" : "Recommendation for the plan definition"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "The current status of the activity definition"
            },
            {
              "name" : "successor",
              "type" : "reference",
              "documentation" : "What resource is being referenced"
            },
            {
              "name" : "title",
              "type" : "string",
              "documentation" : "The human-friendly name of the activity definition"
            },
            {
              "name" : "topic",
              "type" : "token",
              "documentation" : "Topics associated with the module"
            },
            {
              "name" : "url",
              "type" : "uri",
              "documentation" : "The uri that identifies the activity definition"
            },
            {
              "name" : "version",
              "type" : "token",
              "documentation" : "The business version of the activity definition"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://plan.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            },
            {
              "name" : "create-clone",
              "definition" : "https://plan.devtest.systematic-ehealth.com/fhir/OperationDefinition/ActivityDefinitionPlanDefinition-i-create-clone",
              "documentation" : "### Input\n- resourceId: reference to the ActivityDefinition resource that should be cloned\n- clone_operation: minor-version/major-version/copy Coding from codesystem: http://ehealth.sundhed.dk/cs/ehealth-clone-operation \n- default-clone-behavior: true/false. False signifies deep-clone mode where the list of deep-clone-references determine which resources should be cloned \n- deep-clone-references: References to resources to create as new resources rather than referencing the existing ones.\n\n### Output\nBundle containing all resources that were created during the operation.\n\n### Validation\n- New business versions require that the user has modifier-role: owner or co-author for the resource\n- New copy does not require that the user has a modifier-role.\n- New business version can be made only when no draft resource exists (having identical base identifier).\n- Read/search/create privileges are required for the resource types affected by $create-clone"
            }
          ]
        },
        {
          "type" : "DocumentReference",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-documentreference",
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
            "DocumentReference:authenticator",
            "DocumentReference:author",
            "DocumentReference:custodian",
            "DocumentReference:encounter",
            "DocumentReference:intendedOrganization",
            "DocumentReference:modifier_role_reference",
            "DocumentReference:patient",
            "DocumentReference:related",
            "DocumentReference:relatesto",
            "DocumentReference:subject"
          ],
          "searchRevInclude" : [
            "ActivityDefinition:composed-of",
            "ActivityDefinition:depends-on",
            "ActivityDefinition:derived-from",
            "ActivityDefinition:intendedAudience",
            "ActivityDefinition:modifier_role_reference",
            "ActivityDefinition:predecessor",
            "ActivityDefinition:successor",
            "DocumentReference:authenticator",
            "DocumentReference:author",
            "DocumentReference:custodian",
            "DocumentReference:encounter",
            "DocumentReference:intendedOrganization",
            "DocumentReference:modifier_role_reference",
            "DocumentReference:patient",
            "DocumentReference:related",
            "DocumentReference:relatesto",
            "DocumentReference:subject",
            "PlanDefinition:composed-of",
            "PlanDefinition:definition",
            "PlanDefinition:depends-on",
            "PlanDefinition:derived-from",
            "PlanDefinition:documentation",
            "PlanDefinition:intendedAudience",
            "PlanDefinition:modifier_role_reference",
            "PlanDefinition:predecessor",
            "PlanDefinition:successor"
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
              "name" : "authenticator",
              "type" : "reference",
              "documentation" : "Who/what authenticated the document"
            },
            {
              "name" : "author",
              "type" : "reference",
              "documentation" : "Who and/or what authored the document"
            },
            {
              "name" : "category",
              "type" : "token",
              "documentation" : "Categorization of document"
            },
            {
              "name" : "contenttype",
              "type" : "token",
              "documentation" : "Mime type of the content, with charset etc."
            },
            {
              "name" : "custodian",
              "type" : "reference",
              "documentation" : "Organization which maintains the document"
            },
            {
              "name" : "date",
              "type" : "date",
              "documentation" : "When this document reference was created"
            },
            {
              "name" : "description",
              "type" : "string",
              "documentation" : "Human-readable description"
            },
            {
              "name" : "encounter",
              "type" : "reference",
              "documentation" : "Context of the document  content"
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
              "name" : "identifier",
              "type" : "token",
              "documentation" : "Master Version Specific Identifier"
            },
            {
              "name" : "intendedOrganization",
              "type" : "reference",
              "documentation" : "The Organization which is intended to use the DocumentReference"
            },
            {
              "name" : "language",
              "type" : "token",
              "documentation" : "Human language of the content (BCP-47)"
            },
            {
              "name" : "location",
              "type" : "uri",
              "documentation" : "Uri where the data can be found"
            },
            {
              "name" : "modifier_role_reference",
              "type" : "reference",
              "documentation" : "Reference to modifier Organization"
            },
            {
              "name" : "modifier_role_role",
              "type" : "token",
              "documentation" : "Role of Organization related to modification of the DocumentReference"
            },
            {
              "name" : "patient",
              "type" : "reference",
              "documentation" : "Who/what is the subject of the document"
            },
            {
              "name" : "period",
              "type" : "date",
              "documentation" : "Time of service that is being documented"
            },
            {
              "name" : "related",
              "type" : "reference",
              "documentation" : "Related identifiers or resources"
            },
            {
              "name" : "relatesto",
              "type" : "reference",
              "documentation" : "Target of the relationship"
            },
            {
              "name" : "relation",
              "type" : "token",
              "documentation" : "replaces | transforms | signs | appends"
            },
            {
              "name" : "relationship",
              "type" : "composite",
              "documentation" : "Combination of relation and relatesTo"
            },
            {
              "name" : "security-label",
              "type" : "token",
              "documentation" : "Document security-tags"
            },
            {
              "name" : "setting",
              "type" : "token",
              "documentation" : "Additional details about where the content was created (e.g. clinical specialty)"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "current | superseded | entered-in-error"
            },
            {
              "name" : "subject",
              "type" : "reference",
              "documentation" : "Who/what is the subject of the document"
            },
            {
              "name" : "type",
              "type" : "token",
              "documentation" : "Kind of document (LOINC if possible)"
            },
            {
              "name" : "use-context-context",
              "type" : "token",
              "documentation" : "A use context assigned to the DocumentReference"
            },
            {
              "name" : "use-context-context-type",
              "type" : "token",
              "documentation" : "A type of use context assigned to the DocumentReference"
            },
            {
              "name" : "use-context-context-type-value",
              "type" : "composite",
              "documentation" : "A use context type and value assigned to the DocumentReference"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://plan.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
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
            "ActivityDefinition:composed-of",
            "ActivityDefinition:depends-on",
            "ActivityDefinition:derived-from",
            "ActivityDefinition:intendedAudience",
            "ActivityDefinition:modifier_role_reference",
            "ActivityDefinition:predecessor",
            "ActivityDefinition:successor",
            "DocumentReference:authenticator",
            "DocumentReference:author",
            "DocumentReference:custodian",
            "DocumentReference:encounter",
            "DocumentReference:intendedOrganization",
            "DocumentReference:modifier_role_reference",
            "DocumentReference:patient",
            "DocumentReference:related",
            "DocumentReference:relatesto",
            "DocumentReference:subject",
            "PlanDefinition:composed-of",
            "PlanDefinition:definition",
            "PlanDefinition:depends-on",
            "PlanDefinition:derived-from",
            "PlanDefinition:documentation",
            "PlanDefinition:intendedAudience",
            "PlanDefinition:modifier_role_reference",
            "PlanDefinition:predecessor",
            "PlanDefinition:successor"
          ]
        },
        {
          "type" : "PlanDefinition",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition",
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
            "PlanDefinition:composed-of",
            "PlanDefinition:definition",
            "PlanDefinition:depends-on",
            "PlanDefinition:derived-from",
            "PlanDefinition:documentation",
            "PlanDefinition:predecessor",
            "PlanDefinition:successor"
          ],
          "searchRevInclude" : [
            "ActivityDefinition:composed-of",
            "ActivityDefinition:depends-on",
            "ActivityDefinition:derived-from",
            "ActivityDefinition:intendedAudience",
            "ActivityDefinition:modifier_role_reference",
            "ActivityDefinition:predecessor",
            "ActivityDefinition:successor",
            "DocumentReference:authenticator",
            "DocumentReference:author",
            "DocumentReference:custodian",
            "DocumentReference:encounter",
            "DocumentReference:intendedOrganization",
            "DocumentReference:modifier_role_reference",
            "DocumentReference:patient",
            "DocumentReference:related",
            "DocumentReference:relatesto",
            "DocumentReference:subject",
            "PlanDefinition:composed-of",
            "PlanDefinition:definition",
            "PlanDefinition:depends-on",
            "PlanDefinition:derived-from",
            "PlanDefinition:documentation",
            "PlanDefinition:intendedAudience",
            "PlanDefinition:modifier_role_reference",
            "PlanDefinition:predecessor",
            "PlanDefinition:successor"
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
              "name" : "composed-of",
              "type" : "reference",
              "documentation" : "What resource is being referenced"
            },
            {
              "name" : "context",
              "type" : "token",
              "documentation" : "A use context assigned to the plan definition"
            },
            {
              "name" : "context-quantity",
              "type" : "quantity",
              "documentation" : "A quantity- or range-valued use context assigned to the plan definition"
            },
            {
              "name" : "context-type",
              "type" : "token",
              "documentation" : "A type of use context assigned to the plan definition"
            },
            {
              "name" : "context-type-value",
              "type" : "composite",
              "documentation" : "A use context type and value assigned to the plan definition"
            },
            {
              "name" : "date",
              "type" : "date",
              "documentation" : "The plan definition publication date"
            },
            {
              "name" : "definition",
              "type" : "reference",
              "documentation" : "Activity or plan definitions used by plan definition"
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
              "documentation" : "The description of the plan definition"
            },
            {
              "name" : "documentation",
              "type" : "reference",
              "documentation" : "What resource is being referenced"
            },
            {
              "name" : "effective",
              "type" : "date",
              "documentation" : "The time during which the plan definition is intended to be in use"
            },
            {
              "name" : "ehealthPredecessor",
              "type" : "token",
              "documentation" : "Predecessor of resource"
            },
            {
              "name" : "employeeTitle",
              "type" : "string",
              "documentation" : "Title intented for clinicians"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "External identifier for the plan definition"
            },
            {
              "name" : "intendedAudience",
              "type" : "reference",
              "documentation" : "The intended audience of the plan definition"
            },
            {
              "name" : "jurisdiction",
              "type" : "token",
              "documentation" : "Intended jurisdiction for the plan definition"
            },
            {
              "name" : "modifier_role_reference",
              "type" : "reference",
              "documentation" : "Reference to either Organization, CareTeam, Practitioner"
            },
            {
              "name" : "modifier_role_role",
              "type" : "token",
              "documentation" : "Role of Organization, CareTeam, Practitioner"
            },
            {
              "name" : "name",
              "type" : "string",
              "documentation" : "Computationally friendly name of the plan definition"
            },
            {
              "name" : "predecessor",
              "type" : "reference",
              "documentation" : "What resource is being referenced"
            },
            {
              "name" : "publisher",
              "type" : "string",
              "documentation" : "Name of the publisher of the plan definition"
            },
            {
              "name" : "recommendation",
              "type" : "token",
              "documentation" : "Recommendation for the plan definition"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "The current status of the plan definition"
            },
            {
              "name" : "successor",
              "type" : "reference",
              "documentation" : "What resource is being referenced"
            },
            {
              "name" : "title",
              "type" : "string",
              "documentation" : "The human-friendly name of the plan definition"
            },
            {
              "name" : "topic",
              "type" : "token",
              "documentation" : "Topics associated with the module"
            },
            {
              "name" : "type",
              "type" : "token",
              "documentation" : "The type of artifact the plan (e.g. order-set, eca-rule, protocol)"
            },
            {
              "name" : "url",
              "type" : "uri",
              "documentation" : "The uri that identifies the plan definition"
            },
            {
              "name" : "version",
              "type" : "token",
              "documentation" : "The business version of the plan definition"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://plan.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            },
            {
              "name" : "import",
              "definition" : "https://plan.devtest.systematic-ehealth.com/fhir/OperationDefinition/PlanDefinition-t-import",
              "documentation" : "Import a Plandefinition\n### Parameters\n- planDefinitionPackage: Binary package produced by the export operation\n### Output\nBundle containing the created resources. PlanDefinitions, ActivityDefinitions, and Questionnaires will be created. Imports QFFD DocumentReference into Document-Transformation service.Libraries and Organizations are used to find the corresponding resources on the target system."
            },
            {
              "name" : "export",
              "definition" : "https://plan.devtest.systematic-ehealth.com/fhir/OperationDefinition/PlanDefinition-i-export",
              "documentation" : "Export a PlanDefinition.\n### Export Contents\nThe export contains the PlanDefinition including referenced resources:- PlanDefinitions\n- ActivityDefinitions\n- Questionnaires\n- Libraries\n- Organizations\n- DocumentReference + QFDD\n\nEach resource is returned in a separate JSon file.\n### Parameters\n- exclude: references to ActivityDefinitions or PlanDefinitions to exclude from the export.\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files.\nAll returned objects are Fhir resources. See the implementation guide for details"
            },
            {
              "name" : "create-clone",
              "definition" : "https://plan.devtest.systematic-ehealth.com/fhir/OperationDefinition/ActivityDefinitionPlanDefinition-i-create-clone",
              "documentation" : "### Input\n- resourceId: reference to the PlanDefinition resource that should be cloned\n- clone_operation: minor-version/major-version/copy Coding from codesystem: http://ehealth.sundhed.dk/cs/ehealth-clone-operation \n- default-clone-behavior: true/false. False signifies deep-clone mode where the list of deep-clone-references determine which resources should be cloned \n- deep-clone-references: References to resources to create as new resources rather than referencing the existing ones.\n\n### Output\nBundle containing all resources that were created during the operation.\n\n### Validation\n- New business versions require that the user has modifier-role: owner or co-author for the resource\n- New copy does not require that the user has a modifier-role.\n- New business version can be made only when no draft resource exists (having identical base identifier).\n- Read/search/create privileges are required for the resource types affected by $create-clone"
            },
            {
              "name" : "apply",
              "definition" : "https://plan.devtest.systematic-ehealth.com/fhir/OperationDefinition/PlanDefinition-i-apply",
              "documentation" : "Create a careplan with service requests for a specific episodeOfCare using the PlanDefinition as a template. If using POST the operation will persist resources and return the careplan. If using GET the operation will return transient resources in a transaction bundle. The bundle with transient careplan and servicerequest resources can then be modified before being persisted using a FHIR transaction."
            }
          ]
        }
      ],
      "operation" : [
        {
          "name" : "migrate",
          "definition" : "https://plan.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-migrate",
          "documentation" : "Data migration"
        },
        {
          "name" : "reindex-terminology",
          "definition" : "https://plan.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-reindex-terminology"
        },
        {
          "name" : "meta",
          "definition" : "https://plan.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-meta"
        },
        {
          "name" : "get-resource-counts",
          "definition" : "https://plan.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-get-resource-counts",
          "documentation" : "Provides the number of resources currently stored on the server, broken down by resource type"
        }
      ]
    }
  ]
}

```
