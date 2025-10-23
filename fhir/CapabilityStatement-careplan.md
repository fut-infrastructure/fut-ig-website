# careplan - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **careplan**

## CapabilityStatement: careplan 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/CapabilityStatement/careplan | *Version*:6.0.0 |
| Active as of 2025-10-21 | *Computable Name*:careplan |

 [Raw OpenAPI-Swagger Definition file](careplan.openapi.json) | [Download](careplan.openapi.json) 

## 

* Implementation Guide Version: 6.0.0 
* FHIR Version: 4.0.1 
* Supported Formats: `application/fhir+xml`, `xml`, `application/fhir+json`, `json`, `application/x-turtle`, `ttl`, `html/json`, `html/xml`, `html/turtle`
* Published on: 2025-10-21 13:03:36+0000 
* Published by: Den telemedicinske infrastruktur (eHealth Infrastructure) 

> **Note to Implementers: FHIR Capabilities**Any FHIR capability may be 'allowed' by the system unless explicitly marked as 'SHALL NOT'. A few items are marked as MAY in the Implementation Guide to highlight their potential relevance to the use case.

## FHIR RESTful Capabilities

### Mode: server

**Summary of System-wide Interactions**

* Supports the `transaction`interaction.

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

| | | | | | | | | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| [CarePlan](#CarePlan1-1) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan](StructureDefinition-ehealth-careplan.md) | y | y | y | y |  |  |  | _id, _lastUpdated, _tag, activity-reference, care-team, category, condition, date, episodeOfCare, goal, identifier, instantiates-canonical, part-of, participant-actor, participant-function, participant-function-actor, patient, status, status-history-end-time, status-history-start-time, status-history-status, status-scheduled-status, status-scheduled-time, team-scheduled-time | `CarePlan:activity-reference`,`CarePlan:condition`,`CarePlan:episodeOfCare`,`CarePlan:goal`,`CarePlan:part-of` | `CarePlan:activity-reference`,`CarePlan:care-team`,`CarePlan:condition`,`CarePlan:episodeOfCare`,`CarePlan:goal`,`CarePlan:instantiates-canonical`,`CarePlan:part-of`,`CarePlan:participant-actor`,`CarePlan:patient`,`Communication:episodeOfCare`,`Communication:participant-actor`,`Communication:recipient`,`Communication:subject`,`CommunicationRequest:based-on`,`CommunicationRequest:encounter`,`CommunicationRequest:episodeOfCare`,`CommunicationRequest:patient`,`CommunicationRequest:recipient`,`CommunicationRequest:replaces`,`CommunicationRequest:requester`,`CommunicationRequest:sender`,`CommunicationRequest:subject`,`Consent:actor`,`Consent:data`,`Consent:patient`,`DocumentReference:encounter`,`DocumentReference:intendedOrganization`,`DocumentReference:modifier_role_reference`,`DocumentReference:subject`,`EpisodeOfCare:condition`,`EpisodeOfCare:organization`,`EpisodeOfCare:participant-actor`,`EpisodeOfCare:patient`,`EpisodeOfCare:team`,`Goal:addresses`,`Goal:patient`,`Goal:subject`,`Provenance:target` | `$validate`,`$update-care-teams`,`$suggest-care-teams` |
| [Communication](#Communication1-2) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-material-communication](StructureDefinition-ehealth-material-communication.md) | y |  | y | y |  | y |  | _id, _lastUpdated, _tag, category, episodeOfCare, participant-actor, participant-function, participant-function-actor, period, periodEnd, periodStart, recipient, sent, status, subject | `*`,`Communication:episodeOfCare`,`Communication:participant-actor`,`Communication:recipient`,`Communication:subject` | `CarePlan:activity-reference`,`CarePlan:care-team`,`CarePlan:condition`,`CarePlan:episodeOfCare`,`CarePlan:goal`,`CarePlan:instantiates-canonical`,`CarePlan:part-of`,`CarePlan:participant-actor`,`CarePlan:patient`,`Communication:episodeOfCare`,`Communication:participant-actor`,`Communication:recipient`,`Communication:subject`,`CommunicationRequest:based-on`,`CommunicationRequest:encounter`,`CommunicationRequest:episodeOfCare`,`CommunicationRequest:patient`,`CommunicationRequest:recipient`,`CommunicationRequest:replaces`,`CommunicationRequest:requester`,`CommunicationRequest:sender`,`CommunicationRequest:subject`,`Consent:actor`,`Consent:data`,`Consent:patient`,`DocumentReference:encounter`,`DocumentReference:intendedOrganization`,`DocumentReference:modifier_role_reference`,`DocumentReference:subject`,`EpisodeOfCare:condition`,`EpisodeOfCare:organization`,`EpisodeOfCare:participant-actor`,`EpisodeOfCare:patient`,`EpisodeOfCare:team`,`Goal:addresses`,`Goal:patient`,`Goal:subject`,`Provenance:target` | `$validate` |
| [CommunicationRequest](#CommunicationRequest1-3) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-request](StructureDefinition-ehealth-communication-request.md) | y | y | y | y |  | y | y | _content, _has, _id, _language, _lastUpdated, _profile, _security, _tag, _text, authored, based-on, category, encounter, episodeOfCare, group-identifier, identifier, medium, occurrence, patient, priority, reasonCode, recipient, replaces, requester, sender, status, subject | `CommunicationRequest:based-on`,`CommunicationRequest:context` | `CarePlan:activity-reference`,`CarePlan:care-team`,`CarePlan:condition`,`CarePlan:episodeOfCare`,`CarePlan:goal`,`CarePlan:instantiates-canonical`,`CarePlan:part-of`,`CarePlan:participant-actor`,`CarePlan:patient`,`Communication:episodeOfCare`,`Communication:participant-actor`,`Communication:recipient`,`Communication:subject`,`CommunicationRequest:based-on`,`CommunicationRequest:encounter`,`CommunicationRequest:episodeOfCare`,`CommunicationRequest:patient`,`CommunicationRequest:recipient`,`CommunicationRequest:replaces`,`CommunicationRequest:requester`,`CommunicationRequest:sender`,`CommunicationRequest:subject`,`Consent:actor`,`Consent:data`,`Consent:patient`,`DocumentReference:encounter`,`DocumentReference:intendedOrganization`,`DocumentReference:modifier_role_reference`,`DocumentReference:subject`,`EpisodeOfCare:condition`,`EpisodeOfCare:organization`,`EpisodeOfCare:participant-actor`,`EpisodeOfCare:patient`,`EpisodeOfCare:team`,`Goal:addresses`,`Goal:patient`,`Goal:subject`,`Provenance:target` | `$validate` |
| [Condition](#Condition1-4) | [http://hl7.org/fhir/StructureDefinition/Condition](http://hl7.org/fhir/R4/condition.html) | y | y |  |  | y | y |  |  | `*` | `CarePlan:activity-reference`,`CarePlan:care-team`,`CarePlan:condition`,`CarePlan:episodeOfCare`,`CarePlan:goal`,`CarePlan:instantiates-canonical`,`CarePlan:part-of`,`CarePlan:participant-actor`,`CarePlan:patient`,`Communication:episodeOfCare`,`Communication:participant-actor`,`Communication:recipient`,`Communication:subject`,`CommunicationRequest:based-on`,`CommunicationRequest:encounter`,`CommunicationRequest:episodeOfCare`,`CommunicationRequest:patient`,`CommunicationRequest:recipient`,`CommunicationRequest:replaces`,`CommunicationRequest:requester`,`CommunicationRequest:sender`,`CommunicationRequest:subject`,`Consent:actor`,`Consent:data`,`Consent:patient`,`DocumentReference:encounter`,`DocumentReference:intendedOrganization`,`DocumentReference:modifier_role_reference`,`DocumentReference:subject`,`EpisodeOfCare:condition`,`EpisodeOfCare:organization`,`EpisodeOfCare:participant-actor`,`EpisodeOfCare:patient`,`EpisodeOfCare:team`,`Goal:addresses`,`Goal:patient`,`Goal:subject`,`Provenance:target` | `$validate` |
| [Consent](#Consent1-5) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent](StructureDefinition-ehealth-consent.md) | y | y | y | y |  | y |  | data, _tag, actor, category, identifier, patient, period, status |  | `CarePlan:activity-reference`,`CarePlan:care-team`,`CarePlan:condition`,`CarePlan:episodeOfCare`,`CarePlan:goal`,`CarePlan:instantiates-canonical`,`CarePlan:part-of`,`CarePlan:participant-actor`,`CarePlan:patient`,`Communication:episodeOfCare`,`Communication:participant-actor`,`Communication:recipient`,`Communication:subject`,`CommunicationRequest:based-on`,`CommunicationRequest:encounter`,`CommunicationRequest:episodeOfCare`,`CommunicationRequest:patient`,`CommunicationRequest:recipient`,`CommunicationRequest:replaces`,`CommunicationRequest:requester`,`CommunicationRequest:sender`,`CommunicationRequest:subject`,`Consent:actor`,`Consent:data`,`Consent:patient`,`DocumentReference:encounter`,`DocumentReference:intendedOrganization`,`DocumentReference:modifier_role_reference`,`DocumentReference:subject`,`EpisodeOfCare:condition`,`EpisodeOfCare:organization`,`EpisodeOfCare:participant-actor`,`EpisodeOfCare:patient`,`EpisodeOfCare:team`,`Goal:addresses`,`Goal:patient`,`Goal:subject`,`Provenance:target` | `$validate` |
| [DocumentReference](#DocumentReference1-6) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-documentreference](StructureDefinition-ehealth-documentreference.md) | y | y | y | y |  | y |  | _id, _tag, category, contenttype, date, description, encounter, intendedOrganization, modifier_role_reference, modifier_role_role, status, subject, type, use-context-context |  | `CarePlan:activity-reference`,`CarePlan:care-team`,`CarePlan:condition`,`CarePlan:episodeOfCare`,`CarePlan:goal`,`CarePlan:instantiates-canonical`,`CarePlan:part-of`,`CarePlan:participant-actor`,`CarePlan:patient`,`Communication:episodeOfCare`,`Communication:participant-actor`,`Communication:recipient`,`Communication:subject`,`CommunicationRequest:based-on`,`CommunicationRequest:encounter`,`CommunicationRequest:episodeOfCare`,`CommunicationRequest:patient`,`CommunicationRequest:recipient`,`CommunicationRequest:replaces`,`CommunicationRequest:requester`,`CommunicationRequest:sender`,`CommunicationRequest:subject`,`Consent:actor`,`Consent:data`,`Consent:patient`,`DocumentReference:encounter`,`DocumentReference:intendedOrganization`,`DocumentReference:modifier_role_reference`,`DocumentReference:subject`,`EpisodeOfCare:condition`,`EpisodeOfCare:organization`,`EpisodeOfCare:participant-actor`,`EpisodeOfCare:patient`,`EpisodeOfCare:team`,`Goal:addresses`,`Goal:patient`,`Goal:subject`,`Provenance:target` | `$validate` |
| [EpisodeOfCare](#EpisodeOfCare1-7) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare](StructureDefinition-ehealth-episodeofcare.md) | y | y | y |  | y |  |  | _tag, condition, identifier, organization, participant-actor, participant-function, participant-function-actor, patient, status, status-scheduled-time, team, team-scheduled-time | `EpisodeOfCare:condition` | `CarePlan:episodeOfCare` | `$validate`,`$update-care-teams`,`$is-context-allowed` |
| [Goal](#Goal1-8) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-goal](StructureDefinition-ehealth-goal.md) | y | y | y | y |  | y |  | _content, _filter, _has, _id, _language, _lastUpdated, _profile, _security, _source, _tag, _text, addresses, category, identifier, lifecycle-status, patient, start-date, subject, target-date | `*`,`Goal:patient`,`Goal:subject` | `CarePlan:activity-reference`,`CarePlan:care-team`,`CarePlan:condition`,`CarePlan:episodeOfCare`,`CarePlan:goal`,`CarePlan:instantiates-canonical`,`CarePlan:part-of`,`CarePlan:participant-actor`,`CarePlan:patient`,`Communication:episodeOfCare`,`Communication:participant-actor`,`Communication:recipient`,`Communication:subject`,`CommunicationRequest:based-on`,`CommunicationRequest:encounter`,`CommunicationRequest:episodeOfCare`,`CommunicationRequest:patient`,`CommunicationRequest:recipient`,`CommunicationRequest:replaces`,`CommunicationRequest:requester`,`CommunicationRequest:sender`,`CommunicationRequest:subject`,`Consent:actor`,`Consent:data`,`Consent:patient`,`DocumentReference:encounter`,`DocumentReference:intendedOrganization`,`DocumentReference:modifier_role_reference`,`DocumentReference:subject`,`EpisodeOfCare:condition`,`EpisodeOfCare:organization`,`EpisodeOfCare:participant-actor`,`EpisodeOfCare:patient`,`EpisodeOfCare:team`,`Goal:addresses`,`Goal:patient`,`Goal:subject`,`Provenance:target` |  |
| [OperationDefinition](#OperationDefinition1-9) | [http://hl7.org/fhir/StructureDefinition/OperationDefinition](http://hl7.org/fhir/R4/operationdefinition.html) | y |  |  |  |  |  |  |  | `*` | `CarePlan:activity-reference`,`CarePlan:care-team`,`CarePlan:condition`,`CarePlan:episodeOfCare`,`CarePlan:goal`,`CarePlan:instantiates-canonical`,`CarePlan:part-of`,`CarePlan:participant-actor`,`CarePlan:patient`,`Communication:episodeOfCare`,`Communication:participant-actor`,`Communication:recipient`,`Communication:subject`,`CommunicationRequest:based-on`,`CommunicationRequest:encounter`,`CommunicationRequest:episodeOfCare`,`CommunicationRequest:patient`,`CommunicationRequest:recipient`,`CommunicationRequest:replaces`,`CommunicationRequest:requester`,`CommunicationRequest:sender`,`CommunicationRequest:subject`,`Consent:actor`,`Consent:data`,`Consent:patient`,`DocumentReference:encounter`,`DocumentReference:intendedOrganization`,`DocumentReference:modifier_role_reference`,`DocumentReference:subject`,`EpisodeOfCare:condition`,`EpisodeOfCare:organization`,`EpisodeOfCare:participant-actor`,`EpisodeOfCare:patient`,`EpisodeOfCare:team`,`Goal:addresses`,`Goal:patient`,`Goal:subject`,`Provenance:target` |  |
| [Provenance](#Provenance1-10) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance](StructureDefinition-ehealth-provenance.md) | y | y | y |  |  |  |  | target, _tag |  | `CarePlan:activity-reference`,`CarePlan:care-team`,`CarePlan:condition`,`CarePlan:episodeOfCare`,`CarePlan:goal`,`CarePlan:instantiates-canonical`,`CarePlan:part-of`,`CarePlan:participant-actor`,`CarePlan:patient`,`Communication:episodeOfCare`,`Communication:participant-actor`,`Communication:recipient`,`Communication:subject`,`CommunicationRequest:based-on`,`CommunicationRequest:encounter`,`CommunicationRequest:episodeOfCare`,`CommunicationRequest:patient`,`CommunicationRequest:recipient`,`CommunicationRequest:replaces`,`CommunicationRequest:requester`,`CommunicationRequest:sender`,`CommunicationRequest:subject`,`Consent:actor`,`Consent:data`,`Consent:patient`,`DocumentReference:encounter`,`DocumentReference:intendedOrganization`,`DocumentReference:modifier_role_reference`,`DocumentReference:subject`,`EpisodeOfCare:condition`,`EpisodeOfCare:organization`,`EpisodeOfCare:participant-actor`,`EpisodeOfCare:patient`,`EpisodeOfCare:team`,`Goal:addresses`,`Goal:patient`,`Goal:subject`,`Provenance:target` | `$validate` |
| [ServiceRequest](#ServiceRequest1-11) | [http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md) | y | y |  | y |  |  |  |  | `*` | `CarePlan:activity-reference`,`CarePlan:care-team`,`CarePlan:condition`,`CarePlan:episodeOfCare`,`CarePlan:goal`,`CarePlan:instantiates-canonical`,`CarePlan:part-of`,`CarePlan:participant-actor`,`CarePlan:patient`,`Communication:episodeOfCare`,`Communication:participant-actor`,`Communication:recipient`,`Communication:subject`,`CommunicationRequest:based-on`,`CommunicationRequest:encounter`,`CommunicationRequest:episodeOfCare`,`CommunicationRequest:patient`,`CommunicationRequest:recipient`,`CommunicationRequest:replaces`,`CommunicationRequest:requester`,`CommunicationRequest:sender`,`CommunicationRequest:subject`,`Consent:actor`,`Consent:data`,`Consent:patient`,`DocumentReference:encounter`,`DocumentReference:intendedOrganization`,`DocumentReference:modifier_role_reference`,`DocumentReference:subject`,`EpisodeOfCare:condition`,`EpisodeOfCare:organization`,`EpisodeOfCare:participant-actor`,`EpisodeOfCare:patient`,`EpisodeOfCare:team`,`Goal:addresses`,`Goal:patient`,`Goal:subject`,`Provenance:target` | `$validate` |

-------

#### Resource Conformance: supported CarePlan

Base System Profile

[ehealth-careplan](StructureDefinition-ehealth-careplan.md)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `search-type`, `vread`, `read`.

Search Parameters


 

Extended Operations


#### Resource Conformance: supported Communication

Base System Profile

[ehealth-material-communication](StructureDefinition-ehealth-material-communication.md)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `search-type`, `read`, `create`.

Search Parameters


 

Extended Operations


#### Resource Conformance: supported CommunicationRequest

Base System Profile

[ehealth-communication-request](StructureDefinition-ehealth-communication-request.md)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `search-type`, `vread`, `read`, `delete`, `create`.

Search Parameters


 

Extended Operations


#### Resource Conformance: supported Condition

Base System Profile

[Condition](http://hl7.org/fhir/R4/condition.html)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `vread`, `read`, `patch`, `create`.

Extended Operations


#### Resource Conformance: supported Consent

Base System Profile

[ehealth-consent](StructureDefinition-ehealth-consent.md)

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


#### Resource Conformance: supported EpisodeOfCare

Base System Profile

[ehealth-episodeofcare](StructureDefinition-ehealth-episodeofcare.md)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `search-type`, `vread`, `read`, `patch`.

Search Parameters


 

Extended Operations


#### Resource Conformance: supported Goal

Base System Profile

[ehealth-goal](StructureDefinition-ehealth-goal.md)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `search-type`, `vread`, `read`, `create`.

Search Parameters


 

#### Resource Conformance: supported OperationDefinition

Base System Profile

[OperationDefinition](http://hl7.org/fhir/R4/operationdefinition.html)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `read`.

#### Resource Conformance: supported Provenance

Base System Profile

[ehealth-provenance](StructureDefinition-ehealth-provenance.md)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `search-type`, `vread`, `read`.

Search Parameters


 

Extended Operations


#### Resource Conformance: supported ServiceRequest

Base System Profile

[ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `update`, `vread`, `read`.

Extended Operations




## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "careplan",
  "url" : "http://ehealth.sundhed.dk/fhir/CapabilityStatement/careplan",
  "version" : "6.0.0",
  "name" : "careplan",
  "status" : "active",
  "date" : "2025-10-21T13:03:36.962+00:00",
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
    "name" : "careplan",
    "version" : "1.33.0"
  },
  "implementation" : {
    "description" : "eHealth careplan service",
    "url" : "https://careplan.devtest.systematic-ehealth.com/fhir"
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
          "type" : "CarePlan",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan",
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
            }
          ],
          "conditionalUpdate" : true,
          "searchInclude" : [
            "CarePlan:activity-reference",
            "CarePlan:condition",
            "CarePlan:episodeOfCare",
            "CarePlan:goal",
            "CarePlan:part-of"
          ],
          "searchRevInclude" : [
            "CarePlan:activity-reference",
            "CarePlan:care-team",
            "CarePlan:condition",
            "CarePlan:episodeOfCare",
            "CarePlan:goal",
            "CarePlan:instantiates-canonical",
            "CarePlan:part-of",
            "CarePlan:participant-actor",
            "CarePlan:patient",
            "Communication:episodeOfCare",
            "Communication:participant-actor",
            "Communication:recipient",
            "Communication:subject",
            "CommunicationRequest:based-on",
            "CommunicationRequest:encounter",
            "CommunicationRequest:episodeOfCare",
            "CommunicationRequest:patient",
            "CommunicationRequest:recipient",
            "CommunicationRequest:replaces",
            "CommunicationRequest:requester",
            "CommunicationRequest:sender",
            "CommunicationRequest:subject",
            "Consent:actor",
            "Consent:data",
            "Consent:patient",
            "DocumentReference:encounter",
            "DocumentReference:intendedOrganization",
            "DocumentReference:modifier_role_reference",
            "DocumentReference:subject",
            "EpisodeOfCare:condition",
            "EpisodeOfCare:organization",
            "EpisodeOfCare:participant-actor",
            "EpisodeOfCare:patient",
            "EpisodeOfCare:team",
            "Goal:addresses",
            "Goal:patient",
            "Goal:subject",
            "Provenance:target"
          ],
          "searchParam" : [
            {
              "name" : "_id",
              "type" : "token",
              "documentation" : "The ID of the resource"
            },
            {
              "name" : "_lastUpdated",
              "type" : "date",
              "documentation" : "Only return resources which were last updated as specified by the given range"
            },
            {
              "name" : "_tag",
              "type" : "token",
              "documentation" : "Search for resources which have the given tag"
            },
            {
              "name" : "activity-reference",
              "type" : "reference",
              "documentation" : "Activity details defined in specific resource"
            },
            {
              "name" : "care-team",
              "type" : "reference",
              "documentation" : "Who's involved in plan?"
            },
            {
              "name" : "category",
              "type" : "token",
              "documentation" : "Type of plan"
            },
            {
              "name" : "condition",
              "type" : "reference",
              "documentation" : "Health issues this plan addresses"
            },
            {
              "name" : "date",
              "type" : "date",
              "documentation" : "Time period plan covers"
            },
            {
              "name" : "episodeOfCare",
              "type" : "reference",
              "documentation" : "EpisodeOfCare"
            },
            {
              "name" : "goal",
              "type" : "reference",
              "documentation" : "Goal of the care plan"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "External Ids for this plan"
            },
            {
              "name" : "instantiates-canonical",
              "type" : "reference",
              "documentation" : "Instantiates FHIR protocol or definition"
            },
            {
              "name" : "part-of",
              "type" : "reference",
              "documentation" : "Part of referenced CarePlan"
            },
            {
              "name" : "participant-actor",
              "type" : "reference",
              "documentation" : "Reference to the participant"
            },
            {
              "name" : "participant-function",
              "type" : "token",
              "documentation" : "The role of the participant"
            },
            {
              "name" : "participant-function-actor",
              "type" : "composite",
              "documentation" : "A Participant with a specific function and actor"
            },
            {
              "name" : "patient",
              "type" : "reference",
              "documentation" : "Who care plan is for"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "draft | active | suspended | completed | entered-in-error | cancelled | unknown"
            },
            {
              "name" : "status-history-end-time",
              "type" : "date",
              "documentation" : "end time of historic status change"
            },
            {
              "name" : "status-history-start-time",
              "type" : "date",
              "documentation" : "start time of historic status change"
            },
            {
              "name" : "status-history-status",
              "type" : "token",
              "documentation" : "status of historic status change"
            },
            {
              "name" : "status-scheduled-status",
              "type" : "token",
              "documentation" : "Scheduled status for status change"
            },
            {
              "name" : "status-scheduled-time",
              "type" : "date",
              "documentation" : "Scheduled time for status change"
            },
            {
              "name" : "team-scheduled-time",
              "type" : "date",
              "documentation" : "Scheduled time for team change"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            },
            {
              "name" : "update-care-teams",
              "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/CarePlanEpisodeOfCare-i-update-care-teams",
              "documentation" : "The operation modifies the care team assignment of the care plan and all of its sub plans."
            },
            {
              "name" : "suggest-care-teams",
              "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/CarePlan-i-suggest-care-teams",
              "documentation" : "Suggest care teams matching the conditions required by the care plan on either a regional or a municipality level. The suggested care teams has reason codes matching all the conditions addressed by the care plan and has a managing organization matching the input region code or municipality code. One of region code or municipality code must be input. If both region code and municipality code is input, then the municipality code is ignored. Return a bundle with matching care teams and their managing organizations."
            }
          ]
        },
        {
          "type" : "Communication",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-material-communication",
          "interaction" : [
            {
              "code" : "update"
            },
            {
              "code" : "search-type"
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
            "Communication:episodeOfCare",
            "Communication:participant-actor",
            "Communication:recipient",
            "Communication:subject"
          ],
          "searchRevInclude" : [
            "CarePlan:activity-reference",
            "CarePlan:care-team",
            "CarePlan:condition",
            "CarePlan:episodeOfCare",
            "CarePlan:goal",
            "CarePlan:instantiates-canonical",
            "CarePlan:part-of",
            "CarePlan:participant-actor",
            "CarePlan:patient",
            "Communication:episodeOfCare",
            "Communication:participant-actor",
            "Communication:recipient",
            "Communication:subject",
            "CommunicationRequest:based-on",
            "CommunicationRequest:encounter",
            "CommunicationRequest:episodeOfCare",
            "CommunicationRequest:patient",
            "CommunicationRequest:recipient",
            "CommunicationRequest:replaces",
            "CommunicationRequest:requester",
            "CommunicationRequest:sender",
            "CommunicationRequest:subject",
            "Consent:actor",
            "Consent:data",
            "Consent:patient",
            "DocumentReference:encounter",
            "DocumentReference:intendedOrganization",
            "DocumentReference:modifier_role_reference",
            "DocumentReference:subject",
            "EpisodeOfCare:condition",
            "EpisodeOfCare:organization",
            "EpisodeOfCare:participant-actor",
            "EpisodeOfCare:patient",
            "EpisodeOfCare:team",
            "Goal:addresses",
            "Goal:patient",
            "Goal:subject",
            "Provenance:target"
          ],
          "searchParam" : [
            {
              "name" : "_id",
              "type" : "token",
              "documentation" : "Search for MaterialCommunication with the given _id"
            },
            {
              "name" : "_lastUpdated",
              "type" : "date",
              "documentation" : "Only return resources which were last updated as specified by the given range"
            },
            {
              "name" : "_tag",
              "type" : "token",
              "documentation" : "Search for resources which have the given tag"
            },
            {
              "name" : "category",
              "type" : "token",
              "documentation" : "Search for MaterialCommunication share the following category(s)"
            },
            {
              "name" : "episodeOfCare",
              "type" : "reference",
              "documentation" : "Search for MaterialCommunication which are associated to the given EpisodeOfCare"
            },
            {
              "name" : "participant-actor",
              "type" : "reference",
              "documentation" : "Search for MaterialCommunication which are associated to the given participant actor"
            },
            {
              "name" : "participant-function",
              "type" : "token",
              "documentation" : "Search for MaterialCommunication which are associated to the given participant function"
            },
            {
              "name" : "participant-function-actor",
              "type" : "composite",
              "documentation" : "A Participant with a specific function and actor"
            },
            {
              "name" : "period",
              "type" : "date",
              "documentation" : "Search for MaterialCommunication which are associated to the given period"
            },
            {
              "name" : "periodEnd",
              "type" : "date",
              "documentation" : "Search for MaterialCommunication which are associated to the given period end"
            },
            {
              "name" : "periodStart",
              "type" : "date",
              "documentation" : "Search for MaterialCommunication which are associated to the given period start"
            },
            {
              "name" : "recipient",
              "type" : "reference",
              "documentation" : "Search for MaterialCommunication which are associated to the given recipient"
            },
            {
              "name" : "sent",
              "type" : "date",
              "documentation" : "Search for MaterialCommunication which are associated to the given sent date"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "Search for MaterialCommunication which are associated to the given status"
            },
            {
              "name" : "subject",
              "type" : "reference",
              "documentation" : "Search for MaterialCommunication which are associated to the given subject"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            }
          ]
        },
        {
          "type" : "CommunicationRequest",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-request",
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
          "searchInclude" : [
            "CommunicationRequest:based-on",
            "CommunicationRequest:context"
          ],
          "searchRevInclude" : [
            "CarePlan:activity-reference",
            "CarePlan:care-team",
            "CarePlan:condition",
            "CarePlan:episodeOfCare",
            "CarePlan:goal",
            "CarePlan:instantiates-canonical",
            "CarePlan:part-of",
            "CarePlan:participant-actor",
            "CarePlan:patient",
            "Communication:episodeOfCare",
            "Communication:participant-actor",
            "Communication:recipient",
            "Communication:subject",
            "CommunicationRequest:based-on",
            "CommunicationRequest:encounter",
            "CommunicationRequest:episodeOfCare",
            "CommunicationRequest:patient",
            "CommunicationRequest:recipient",
            "CommunicationRequest:replaces",
            "CommunicationRequest:requester",
            "CommunicationRequest:sender",
            "CommunicationRequest:subject",
            "Consent:actor",
            "Consent:data",
            "Consent:patient",
            "DocumentReference:encounter",
            "DocumentReference:intendedOrganization",
            "DocumentReference:modifier_role_reference",
            "DocumentReference:subject",
            "EpisodeOfCare:condition",
            "EpisodeOfCare:organization",
            "EpisodeOfCare:participant-actor",
            "EpisodeOfCare:patient",
            "EpisodeOfCare:team",
            "Goal:addresses",
            "Goal:patient",
            "Goal:subject",
            "Provenance:target"
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
              "name" : "authored",
              "type" : "date",
              "documentation" : "When request transitioned to being actionable"
            },
            {
              "name" : "based-on",
              "type" : "reference",
              "documentation" : "Fulfills plan or proposal"
            },
            {
              "name" : "category",
              "type" : "token",
              "documentation" : "Message category"
            },
            {
              "name" : "encounter",
              "type" : "reference",
              "documentation" : "Encounter leading to message"
            },
            {
              "name" : "episodeOfCare",
              "type" : "reference",
              "documentation" : "Episode leading to message"
            },
            {
              "name" : "group-identifier",
              "type" : "token",
              "documentation" : "Composite request this is part of"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "Unique identifier"
            },
            {
              "name" : "medium",
              "type" : "token",
              "documentation" : "A channel of communication"
            },
            {
              "name" : "occurrence",
              "type" : "date",
              "documentation" : "When scheduled"
            },
            {
              "name" : "patient",
              "type" : "reference",
              "documentation" : "Focus of message"
            },
            {
              "name" : "priority",
              "type" : "token",
              "documentation" : "Message urgency"
            },
            {
              "name" : "reasonCode",
              "type" : "token",
              "documentation" : "ReasonCode"
            },
            {
              "name" : "recipient",
              "type" : "reference",
              "documentation" : "Message recipient"
            },
            {
              "name" : "replaces",
              "type" : "reference",
              "documentation" : "Request(s) replaced by this request"
            },
            {
              "name" : "requester",
              "type" : "reference",
              "documentation" : "Individual making the request"
            },
            {
              "name" : "sender",
              "type" : "reference",
              "documentation" : "Message sender"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "draft | active | suspended | cancelled | completed | entered-in-error | unknown"
            },
            {
              "name" : "subject",
              "type" : "reference",
              "documentation" : "Focus of message"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            }
          ]
        },
        {
          "type" : "Condition",
          "profile" : "http://hl7.org/fhir/StructureDefinition/Condition",
          "interaction" : [
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
              "code" : "create"
            }
          ],
          "conditionalCreate" : true,
          "searchInclude" : ["*"],
          "searchRevInclude" : [
            "CarePlan:activity-reference",
            "CarePlan:care-team",
            "CarePlan:condition",
            "CarePlan:episodeOfCare",
            "CarePlan:goal",
            "CarePlan:instantiates-canonical",
            "CarePlan:part-of",
            "CarePlan:participant-actor",
            "CarePlan:patient",
            "Communication:episodeOfCare",
            "Communication:participant-actor",
            "Communication:recipient",
            "Communication:subject",
            "CommunicationRequest:based-on",
            "CommunicationRequest:encounter",
            "CommunicationRequest:episodeOfCare",
            "CommunicationRequest:patient",
            "CommunicationRequest:recipient",
            "CommunicationRequest:replaces",
            "CommunicationRequest:requester",
            "CommunicationRequest:sender",
            "CommunicationRequest:subject",
            "Consent:actor",
            "Consent:data",
            "Consent:patient",
            "DocumentReference:encounter",
            "DocumentReference:intendedOrganization",
            "DocumentReference:modifier_role_reference",
            "DocumentReference:subject",
            "EpisodeOfCare:condition",
            "EpisodeOfCare:organization",
            "EpisodeOfCare:participant-actor",
            "EpisodeOfCare:patient",
            "EpisodeOfCare:team",
            "Goal:addresses",
            "Goal:patient",
            "Goal:subject",
            "Provenance:target"
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            }
          ]
        },
        {
          "type" : "Consent",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-consent",
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
          "searchRevInclude" : [
            "CarePlan:activity-reference",
            "CarePlan:care-team",
            "CarePlan:condition",
            "CarePlan:episodeOfCare",
            "CarePlan:goal",
            "CarePlan:instantiates-canonical",
            "CarePlan:part-of",
            "CarePlan:participant-actor",
            "CarePlan:patient",
            "Communication:episodeOfCare",
            "Communication:participant-actor",
            "Communication:recipient",
            "Communication:subject",
            "CommunicationRequest:based-on",
            "CommunicationRequest:encounter",
            "CommunicationRequest:episodeOfCare",
            "CommunicationRequest:patient",
            "CommunicationRequest:recipient",
            "CommunicationRequest:replaces",
            "CommunicationRequest:requester",
            "CommunicationRequest:sender",
            "CommunicationRequest:subject",
            "Consent:actor",
            "Consent:data",
            "Consent:patient",
            "DocumentReference:encounter",
            "DocumentReference:intendedOrganization",
            "DocumentReference:modifier_role_reference",
            "DocumentReference:subject",
            "EpisodeOfCare:condition",
            "EpisodeOfCare:organization",
            "EpisodeOfCare:participant-actor",
            "EpisodeOfCare:patient",
            "EpisodeOfCare:team",
            "Goal:addresses",
            "Goal:patient",
            "Goal:subject",
            "Provenance:target"
          ],
          "searchParam" : [
            {
              "name" : "data",
              "type" : "reference",
              "documentation" : "The actual data reference"
            },
            {
              "name" : "_tag",
              "type" : "token",
              "documentation" : "Search for resources which have the given tag"
            },
            {
              "name" : "actor",
              "type" : "reference",
              "documentation" : "Resource for the actor (or group, by role)"
            },
            {
              "name" : "category",
              "type" : "token",
              "documentation" : "Classification of the consent statement - for indexing/retrieval"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "Identifier for this record (external references)"
            },
            {
              "name" : "patient",
              "type" : "reference",
              "documentation" : "Who the consent applies to"
            },
            {
              "name" : "period",
              "type" : "date",
              "documentation" : "Period that this consent applies"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "draft | proposed | active | rejected | inactive | entered-in-error"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
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
          "searchRevInclude" : [
            "CarePlan:activity-reference",
            "CarePlan:care-team",
            "CarePlan:condition",
            "CarePlan:episodeOfCare",
            "CarePlan:goal",
            "CarePlan:instantiates-canonical",
            "CarePlan:part-of",
            "CarePlan:participant-actor",
            "CarePlan:patient",
            "Communication:episodeOfCare",
            "Communication:participant-actor",
            "Communication:recipient",
            "Communication:subject",
            "CommunicationRequest:based-on",
            "CommunicationRequest:encounter",
            "CommunicationRequest:episodeOfCare",
            "CommunicationRequest:patient",
            "CommunicationRequest:recipient",
            "CommunicationRequest:replaces",
            "CommunicationRequest:requester",
            "CommunicationRequest:sender",
            "CommunicationRequest:subject",
            "Consent:actor",
            "Consent:data",
            "Consent:patient",
            "DocumentReference:encounter",
            "DocumentReference:intendedOrganization",
            "DocumentReference:modifier_role_reference",
            "DocumentReference:subject",
            "EpisodeOfCare:condition",
            "EpisodeOfCare:organization",
            "EpisodeOfCare:participant-actor",
            "EpisodeOfCare:patient",
            "EpisodeOfCare:team",
            "Goal:addresses",
            "Goal:patient",
            "Goal:subject",
            "Provenance:target"
          ],
          "searchParam" : [
            {
              "name" : "_id",
              "type" : "token",
              "documentation" : "Logical id of this artifact"
            },
            {
              "name" : "_tag",
              "type" : "token",
              "documentation" : "Tags applied to this resource"
            },
            {
              "name" : "category",
              "type" : "token",
              "documentation" : "Categorization of document"
            },
            {
              "name" : "contenttype",
              "type" : "token",
              "documentation" : "Document referenced"
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
              "documentation" : "Context of the document content"
            },
            {
              "name" : "intendedOrganization",
              "type" : "reference",
              "documentation" : "The organization intended to use this resource"
            },
            {
              "name" : "modifier_role_reference",
              "type" : "reference",
              "documentation" : "Reference to modifier organization"
            },
            {
              "name" : "modifier_role_role",
              "type" : "token",
              "documentation" : "Role of organization related to modification of the DocumentReference"
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
              "documentation" : "The context that the content is intended to support"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            }
          ]
        },
        {
          "type" : "EpisodeOfCare",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare",
          "interaction" : [
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
              "code" : "patch"
            }
          ],
          "searchInclude" : ["EpisodeOfCare:condition"],
          "searchRevInclude" : ["CarePlan:episodeOfCare"],
          "searchParam" : [
            {
              "name" : "_tag",
              "type" : "token",
              "documentation" : "Search for resources which have the given tag"
            },
            {
              "name" : "condition",
              "type" : "reference",
              "documentation" : "Conditions/problems/diagnoses this episode of care is for"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "Business Identifier(s) relevant for this EpisodeOfCare"
            },
            {
              "name" : "organization",
              "type" : "reference",
              "documentation" : "The organization that has assumed the specific responsibilities of this EpisodeOfCare"
            },
            {
              "name" : "participant-actor",
              "type" : "reference",
              "documentation" : "The reference to the actor"
            },
            {
              "name" : "participant-function",
              "type" : "token",
              "documentation" : "The role of the participant"
            },
            {
              "name" : "participant-function-actor",
              "type" : "composite",
              "documentation" : "A Participant with a specific function and actor"
            },
            {
              "name" : "patient",
              "type" : "reference",
              "documentation" : "The patient who is the focus of this episode of care"
            },
            {
              "name" : "status",
              "type" : "token",
              "documentation" : "The current status of the Episode of Care as provided (does not check the status history collection)"
            },
            {
              "name" : "status-scheduled-time",
              "type" : "date",
              "documentation" : "Scheduled time for status change"
            },
            {
              "name" : "team",
              "type" : "reference",
              "documentation" : "The list of practitioners that may be facilitating this episode of care for specific purposes."
            },
            {
              "name" : "team-scheduled-time",
              "type" : "date",
              "documentation" : "Scheduled time for team change"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            },
            {
              "name" : "update-care-teams",
              "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/CarePlanEpisodeOfCare-i-update-care-teams",
              "documentation" : "Modify the care team assignment of the episode of care and all care plans that has the episode of care as context."
            },
            {
              "name" : "is-context-allowed",
              "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/EpisodeOfCare-i-is-context-allowed",
              "documentation" : "Checks that it is allowed to set an EpisodeOfCare as context.\r\nIf the user requesting context is a patient, then the patient input parameter should be specified.\r\nIf the user requesting context is a practitioner, then the careTeam input parameter should be specified.\r\nThrows an exception if it is not allowed to select the Episode Of Care context.\r\n## Output\r\nFor valid Episode of Care is returned references that cause the Episode of Care to be valid context. \r\nFor a practitioner, two output parameters will be returned on success:\r\n- CareTeam: The Careteam that gave access\r\n- EpisodeOfCare/CarePlan: The EpisodeOfCare or CarePlan that referenced the CareTeam"
            }
          ]
        },
        {
          "type" : "Goal",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-goal",
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
          "searchInclude" : ["*", "Goal:patient", "Goal:subject"],
          "searchRevInclude" : [
            "CarePlan:activity-reference",
            "CarePlan:care-team",
            "CarePlan:condition",
            "CarePlan:episodeOfCare",
            "CarePlan:goal",
            "CarePlan:instantiates-canonical",
            "CarePlan:part-of",
            "CarePlan:participant-actor",
            "CarePlan:patient",
            "Communication:episodeOfCare",
            "Communication:participant-actor",
            "Communication:recipient",
            "Communication:subject",
            "CommunicationRequest:based-on",
            "CommunicationRequest:encounter",
            "CommunicationRequest:episodeOfCare",
            "CommunicationRequest:patient",
            "CommunicationRequest:recipient",
            "CommunicationRequest:replaces",
            "CommunicationRequest:requester",
            "CommunicationRequest:sender",
            "CommunicationRequest:subject",
            "Consent:actor",
            "Consent:data",
            "Consent:patient",
            "DocumentReference:encounter",
            "DocumentReference:intendedOrganization",
            "DocumentReference:modifier_role_reference",
            "DocumentReference:subject",
            "EpisodeOfCare:condition",
            "EpisodeOfCare:organization",
            "EpisodeOfCare:participant-actor",
            "EpisodeOfCare:patient",
            "EpisodeOfCare:team",
            "Goal:addresses",
            "Goal:patient",
            "Goal:subject",
            "Provenance:target"
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
              "name" : "addresses",
              "type" : "reference",
              "documentation" : "What the goal addresses"
            },
            {
              "name" : "category",
              "type" : "token",
              "documentation" : "E.g. Treatment, dietary, behavioral, etc."
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "External Ids for this goal"
            },
            {
              "name" : "lifecycle-status",
              "type" : "token",
              "documentation" : "proposed | accepted | planned | in-progress | on-target | ahead-of-target | behind-target | sustaining | achieved | on-hold | cancelled | entered-in-error | rejected"
            },
            {
              "name" : "patient",
              "type" : "reference",
              "documentation" : "Who this goal is intended for"
            },
            {
              "name" : "start-date",
              "type" : "date",
              "documentation" : "When goal pursuit begins"
            },
            {
              "name" : "subject",
              "type" : "reference",
              "documentation" : "Who this goal is intended for"
            },
            {
              "name" : "target-date",
              "type" : "date",
              "documentation" : "Reach goal on or before"
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
            "CarePlan:activity-reference",
            "CarePlan:care-team",
            "CarePlan:condition",
            "CarePlan:episodeOfCare",
            "CarePlan:goal",
            "CarePlan:instantiates-canonical",
            "CarePlan:part-of",
            "CarePlan:participant-actor",
            "CarePlan:patient",
            "Communication:episodeOfCare",
            "Communication:participant-actor",
            "Communication:recipient",
            "Communication:subject",
            "CommunicationRequest:based-on",
            "CommunicationRequest:encounter",
            "CommunicationRequest:episodeOfCare",
            "CommunicationRequest:patient",
            "CommunicationRequest:recipient",
            "CommunicationRequest:replaces",
            "CommunicationRequest:requester",
            "CommunicationRequest:sender",
            "CommunicationRequest:subject",
            "Consent:actor",
            "Consent:data",
            "Consent:patient",
            "DocumentReference:encounter",
            "DocumentReference:intendedOrganization",
            "DocumentReference:modifier_role_reference",
            "DocumentReference:subject",
            "EpisodeOfCare:condition",
            "EpisodeOfCare:organization",
            "EpisodeOfCare:participant-actor",
            "EpisodeOfCare:patient",
            "EpisodeOfCare:team",
            "Goal:addresses",
            "Goal:patient",
            "Goal:subject",
            "Provenance:target"
          ]
        },
        {
          "type" : "Provenance",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provenance",
          "interaction" : [
            {
              "code" : "search-type"
            },
            {
              "code" : "vread"
            },
            {
              "code" : "read"
            }
          ],
          "searchRevInclude" : [
            "CarePlan:activity-reference",
            "CarePlan:care-team",
            "CarePlan:condition",
            "CarePlan:episodeOfCare",
            "CarePlan:goal",
            "CarePlan:instantiates-canonical",
            "CarePlan:part-of",
            "CarePlan:participant-actor",
            "CarePlan:patient",
            "Communication:episodeOfCare",
            "Communication:participant-actor",
            "Communication:recipient",
            "Communication:subject",
            "CommunicationRequest:based-on",
            "CommunicationRequest:encounter",
            "CommunicationRequest:episodeOfCare",
            "CommunicationRequest:patient",
            "CommunicationRequest:recipient",
            "CommunicationRequest:replaces",
            "CommunicationRequest:requester",
            "CommunicationRequest:sender",
            "CommunicationRequest:subject",
            "Consent:actor",
            "Consent:data",
            "Consent:patient",
            "DocumentReference:encounter",
            "DocumentReference:intendedOrganization",
            "DocumentReference:modifier_role_reference",
            "DocumentReference:subject",
            "EpisodeOfCare:condition",
            "EpisodeOfCare:organization",
            "EpisodeOfCare:participant-actor",
            "EpisodeOfCare:patient",
            "EpisodeOfCare:team",
            "Goal:addresses",
            "Goal:patient",
            "Goal:subject",
            "Provenance:target"
          ],
          "searchParam" : [
            {
              "name" : "target",
              "type" : "reference",
              "documentation" : "Target Reference(s) (usually version specific)"
            },
            {
              "name" : "_tag",
              "type" : "token",
              "documentation" : "Search for resources which have the given tag"
            }
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            }
          ]
        },
        {
          "type" : "ServiceRequest",
          "profile" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest",
          "interaction" : [
            {
              "code" : "update"
            },
            {
              "code" : "vread"
            },
            {
              "code" : "read"
            }
          ],
          "conditionalUpdate" : true,
          "searchInclude" : ["*"],
          "searchRevInclude" : [
            "CarePlan:activity-reference",
            "CarePlan:care-team",
            "CarePlan:condition",
            "CarePlan:episodeOfCare",
            "CarePlan:goal",
            "CarePlan:instantiates-canonical",
            "CarePlan:part-of",
            "CarePlan:participant-actor",
            "CarePlan:patient",
            "Communication:episodeOfCare",
            "Communication:participant-actor",
            "Communication:recipient",
            "Communication:subject",
            "CommunicationRequest:based-on",
            "CommunicationRequest:encounter",
            "CommunicationRequest:episodeOfCare",
            "CommunicationRequest:patient",
            "CommunicationRequest:recipient",
            "CommunicationRequest:replaces",
            "CommunicationRequest:requester",
            "CommunicationRequest:sender",
            "CommunicationRequest:subject",
            "Consent:actor",
            "Consent:data",
            "Consent:patient",
            "DocumentReference:encounter",
            "DocumentReference:intendedOrganization",
            "DocumentReference:modifier_role_reference",
            "DocumentReference:subject",
            "EpisodeOfCare:condition",
            "EpisodeOfCare:organization",
            "EpisodeOfCare:participant-actor",
            "EpisodeOfCare:patient",
            "EpisodeOfCare:team",
            "Goal:addresses",
            "Goal:patient",
            "Goal:subject",
            "Provenance:target"
          ],
          "operation" : [
            {
              "name" : "validate",
              "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/Multi-it-validate"
            }
          ]
        }
      ],
      "interaction" : [
        {
          "code" : "transaction"
        }
      ],
      "operation" : [
        {
          "name" : "migrate",
          "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-migrate",
          "documentation" : "Data migration"
        },
        {
          "name" : "get-patient-procedures",
          "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-get-patient-procedures",
          "documentation" : "This operation returns an overview of patient activities within a time period and filtered by either EpisodeOfCare or Condition code(s). On success, the returned Bundle contains a Parameters structure detailing the count of measurements received and expected. This is done per ServiceRequest with status active for those part of a CarePlan with status active related to eligible EpisodeOfCare resources. Eligible EpisodeOfCare are those with status active that refer to the given Patient and are either given as EpisodeOfCare reference in input or are referencing a Condition with a condition code that matches at least one of the Condition codes possibly given as input. The measurement regime expressed in ServiceRequest.occurrence[x] is, when possible, resolved to time slot(s) corresponding to datetime/period where an action is supposed to take place, typically performed by the Patient. When the occurrenceTiming variant is used, resolved time slots overlapping with the input time periode are considered. For occurrenceTiming expression which are either adhoc or unresolved, the effective datetime/period of a measurement is considered when checked for overlap with input time period.\r\n## Input\r\nThe operation has three mandatory inputs, a Patient reference, a start date and an end date. Additionally the operation has three optional inputs: a list of reference(s) to EpisodeOfCare, a list of Codings for Condition and a list of Codings for tags.\r\n### Patient reference\r\nMandatory reference for the Patient which the procedure overview is computed for.\r\n### Start and end datetimes\r\nStart and end datetime are both mandatory, and together specify the period of interest in the patient procedure overview. As stated above, for resolvable past and future time slots as well as adhoc and unresolved timings there must overlap with this period.\r\n### EpisodeOfCare list\r\nThe list of EpisodeOfCare references is optional. If EpisodeOfCare are provided, these will be used to further filter which active EpisodeOfCare, CarePlan and ServiceRequest are considered for the patient procedure overview.\r\n### Condition Coding list\r\nThe list of Coding for Condition is optional. If Condition Coding are provided, the EpisodeOfCare considered are those referring to a Condition matching at least one of the codes in the list. As above, the EpisodeOfCare (one or more) considered further determines which active EpisodeOfCare, CarePlan and ServiceRequest are considered.\r\n### Tag Coding list\r\nThe list of Coding for tags is optional. If tag Coding are provided, the EpisodeOfCare considered are those including a tag matching at least one of the codes in the list. As above, both the Condition (one or more) and EpisodeOfCare (one or more) considered further determines which active EpisodeOfCare, CarePlan and ServiceRequest are considered.\r\n### Extra boolean\r\nThis is an optional parameter that can be set to true if activities allowing 'Extra' submissions should be included in the response. Whether the ServiceRequest is included when Extra paremeter is set to true, is based on the ServiceRequest.includeAsExtra field.\r\n## Output\r\nFor valid inputs, the server will compute and return a Bundle. The Bundle contains a Parameters resource with resolved measurement regimes and associated counts of measurement submitted and counts expected. Such counts are also included in the Parameters structure when the measurement regime is either adhoc or unresolved. In addition, the Bundle contains CarePlan and ServiceRequest referenced in the Parameters. The Bundle can contain an OperationOutcome describing any encountered warnings.\r\n### Output Parameters\r\nThe output contains rows (encoded in parameters) for each matching and active ServiceRequest with resolved timings overlapping with the requested period. \r\n\r\nRows are represented as Parameters.parameter with names: item_1, item_2, etc. Columns are represented as Parameters.parameter.part with name and value \r\n```\r\nExample:\r\n'resource': {\r\n    'resourceType': 'Parameters',\r\n    'parameter': [{\r\n            'name': 'item_1',\r\n            'part': [{\r\n                    'name': 'CarePlan',\r\n                    'valueReference': {\r\n                        'reference': 'https://careplan.devtest.systematic-ehealth.com/fhir/CarePlan/164581'\r\n                    }\r\n            }]\r\n    }]\r\n}\r\n ```\r\n\r\n### Columns\r\n\r\n- CarePlan: Reference to the CarePlan that the ServiceRequest belongs to.\r\n- ServiceRequest: Reference to the ServiceRequest.\r\n- ServiceRequestVersionId: The version of the ServiceRequest (version specified at time of submit-measurement or the current version (for expected activities)).\r\n- Activity: Description of the planned activity.\r\n- ResolvedTimingStart: A planned start time for the activity in the requested period.\r\n- ResolvedTimingEnd: A planned end time for the activity in the requested period. May be identical to start if no duration is specified in the measurement regime.\r\n- TotalSubmitted: The number of measurements already submitted for this ServiceRequest and resolved timing.\r\n- SubmittedTimely: The number of measurements where the measurement time matches the resolved timing.\r\n- TimingType:\r\n    * Resolved: a measurement regime that is supported by the infrastructure and where resolved timing and requested number of measurements can be calculated.\r\n    * Unresolved: a measurement regime that is not supported by the infrastructure. Resolved Timing Start, end, submitted timely and Occurrences requested will be empty.\r\n    * Adhoc: A ServiceRequest without a measurement regime or a measurement regime stating ad-hoc.\r\n    * Extra: The service request may be performed outside the resolved timing.\r\n- OccurrencesRequested: Expected number of measurements.\r\n- TotalInvalidated: Number of measurements which are invalidated."
        },
        {
          "name" : "create-episode-of-care",
          "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-create-episode-of-care",
          "documentation" : "This operation persists an EpisodeOfCare based on the transient value of an EpisodeOfCare provided in the input.\r\n## Input\r\nThe input is a Bundle which must contain exactly one EpisodeOfCare, conditions referenced in diagnosis list and at least one Provenance resource. All Provenances in the input must have the EpisodeOfCare as target. At least one Provenance must be interpreted into a 'Privacy-provenance' (see below).\r\n### The EpisodeOfCare resource\r\nThe EpisodeOfCare has to have `PLANNED` status \r\nThe 'id' property of the EpisodeOfCare will be reassigned by the server, but can be referenced by other resources in the same bundle. \r\nThe 'managingOrganization' property of the EpisodeOfCare references the GDPR Data Controller (Danish: 'Dataansvarlig').\r\n### The privacy-Provenance resource\r\nA privacy-Provenance is a Provenance resource characterized by having at least one entry in Provenance.policy which data are transported, stored, or processed in the system. Possible values are:\r\n- 'http://ehealth.sundhed.dk/policy/dk/sundhedsloven'\r\n- 'http://ehealth.sundhed.dk/policy/dk/serviceloven'\r\n### Diagnosis referenced Condition resource\r\nFor any diagnosis listed, the referenced Condition must be concerning the same Patient as the EpisodeOfCare.\r\n## Output\r\nFor valid inputs, the server will create, persist and return a new EpisodeOfCare, client-supplied provenances, conditions and origin-provenance carrying a server-assigned ids.\r\nTo get resources bodies in the output the request header has to contain parameter ```Prefer: return=representation```.\r\n## Validation\r\n- Patient.deceased must be false to create episode of care\r\n### The origin-Provenance resource\r\nWhenever an EpisodeOfCare is created, the server automatically creates an 'origin' Provenance resource point to it (in addition to the client-supplied Privacy-Provenance). This Origin-Provenance resource is filled with data from the JWT access token in order to record the origin of the EpisodeOfCare resource. For instance agent.whoReference points to a resource which is created as a shadow identity from the JWT token."
        },
        {
          "name" : "apply",
          "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-apply",
          "documentation" : "Create a careplan with service requests for a specific episodeOfCare using the PlanDefinition as a template. If using POST the operation will persist resources and return the careplan. If using GET the operation will return transient resources in a transaction bundle. The bundle with transient careplan and servicerequest resources can then be modified before being persisted using a FHIR transaction."
        },
        {
          "name" : "reindex-terminology",
          "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-reindex-terminology"
        },
        {
          "name" : "meta",
          "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-meta"
        },
        {
          "name" : "get-resource-counts",
          "definition" : "https://careplan.devtest.systematic-ehealth.com/fhir/OperationDefinition/-s-get-resource-counts",
          "documentation" : "Provides the number of resources currently stored on the server, broken down by resource type"
        }
      ]
    }
  ]
}

```
