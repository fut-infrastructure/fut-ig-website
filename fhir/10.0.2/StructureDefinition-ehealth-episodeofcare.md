# ehealth-episodeofcare - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-episodeofcare**

## Resource Profile: ehealth-episodeofcare 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:ehealth-episodeofcare |

# Introduction

An EpisodeOfCare is an association between a patient and an organization / healthcare provider(s) during which time encounters may occur.

# Scope and Usage

In scope of the eHealth infrastructure, creation of an EpisodeOfCare resource is triggered by a number of actions taking place out-of-band, that is, outside the scope of the eHealth infrastructure. Firstly, a patient is diagnosed with one or more conditions; then assessed as fulfilling criteria for enrollment in a telemedical care program leading to a referral being made to an organization providing such program. At this point a Practitioner within the providing organization creates an EpisodeOfCare referring to the Patient and the corresponding Conditions, all in the eHealth infrastructure. Created with `status` planned, the Practitioner updates the status to active once:

* a Consent to enroll in the program has been given by the Patient
* Adjustments have possibly been made to assigned CareTeam(s) in `team`.

The EpisodeOfCare functions as a representation of a program while the activities comprising it are defined in one or more CarePlan resources.

### careManagerOrganization and managingOrganization

An EpisodeOfCare is required to have exactly one reference to the Organization responsible for the treatment through the element `ehealth-episodeofcare-caremanagerOrganization`.

The element `managingOrganization` refers to the organization which is the custodian of the patient's data on the eHealth infrastructure and is responsible for data control, as GDPR requires.

This top-level organization controls the patient's data, is used for reporting and billing. The infrastructure enforces that the Managing Organization is a Region or a Municipality.

It is possible for multiple organizations to share the Managing Organization role.

Managing Organisation can be changed for an EpisodeOfCare. The full history of Managing Organizations over time is available in the EpisodeOfCare resource.

The infrastructure enforces that there are no gaps in responsibility, and that historic Managing Organizations cannot be changed.

A custom operation exists, `resolve-managing-organization` which, given an organization, returns the corresponding root authority (the GDPR data controller) by traversing the SOR / FK Organisation hierarchy upwards via Organization.partOf.

#### Usage in the eHealth Infrastructure

The managing organization is used in e.g. communication resources, when they are created in the eHealth Infrastructure. See [Communication resource](https://ehealth-dk.atlassian.net/l/cp/SSX623xA?xpis=eyJicmlkZ2UiOiJzbWFydExpbmtzIiwiaWQiOiIxNzg3NTcyMDQ3NjMzIiwic291cmNlIjoiY29uZmx1ZW5jZSJ9) (Task Notification) example.

#### RBAC - Access Control

The managing organization is controlled as part of role-based access control for reporting. See [Access Control in eHealth Services](https://ehealth-dk.atlassian.net/wiki/spaces/EDTW/pages/1695842461/Access+Control+in+eHealth+Services?xpis=eyJicmlkZ2UiOiJzbWFydExpbmtzIiwiaWQiOiIxNzg3NTcyMDQ3NjMzIiwic291cmNlIjoiY29uZmx1ZW5jZSJ9#Reports).

### CareTeam and history of CareTeam

The CareTeam(s) currently responsible for the EpisodeOfCare are referenced in element `team`. Changes in CareTeam references are automatically maintained in the element `ehealth-teamHistory`.

### Cross-team EpisodeOfCare search

Searching EpisodeOfCare resources without specifying a CareTeam in the search parameters is supported, but requires specific permission, adds additional validation and behavior for filtering reverse/-included resources. The behavior is tied to the treatment areas of the telemedicine solution in which the Practitioner is operating. The telemedicine solution is determined by inspecting the incoming security token of the practitioner (coexistence-tag in scope claim). The treatment areas are defined by each telemedicine solution having a ValueSet determining the allowed Condition.code. The treatment area ValueSets are characterized by having a useContext with 'system-treatment-area' context code, and using the coexistence-tag as the value (see https://ehealth.sundhed.dk/fhir/ValueSet-ehealth-usage-context-type.html).

When performing a cross-team search, the following rules apply:

* The search must be performed by a Practitioner with the permission `EpisodeOfCare$cross-team-search`
* The search must not include a `team` in the search parameters
* The search must include the chained parameter `condition.code`, can be multiple codes
* The condition codes provided as search parameters must be within the treatment areas of the telemedicine solution in which the Practitioner is operating
* The search operation filters out any included or reverse-included resources (CarePlan and Condition) that are not allowed by the treatment areas of the telemedicine solution in which the Practitioner is operating

### Supported PATCH operations

The following PATCH operations are supported on the EpisodeOfCare resource:

* For `diagnosis` the following PATCH operations are supported: 
* `add`, `replace` and `move`
* Note that `replace` is only allowed if no condition reference is removed.
 
* For `status` the following PATCH operations are supported: 
* `replace`
 
* For `team` the following PATCH operations are supported: 
* `add`, `replace` and `remove`
 
* For `period` the following PATCH operations are supported: 
* `replace`
 
* For extension `caremanagerOrganization` the following PATCH operations are supported: 
* `replace`
 
* For extension `episodeofcareStatusschedule` the following PATCH operations are supported: 
* `add`, `replace` and `remove`
 
* For extension `teamschedule` the following PATCH operations are supported: 
* `add`, `replace` and `remove`
 
* For extension `participant` the following PATCH operations are supported: 
* `add`, `replace` and `remove`
 

**Usages:**

* Refer to this Profile: [ehealth-appointment](StructureDefinition-ehealth-appointment.md), [ehealth-careplan](StructureDefinition-ehealth-careplan.md), [ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md), [ehealth-communication-request](StructureDefinition-ehealth-communication-request.md)... Show 15 more, [ehealth-communication](StructureDefinition-ehealth-communication.md), [ehealth-condition](StructureDefinition-ehealth-condition.md), [What the consent is related to](StructureDefinition-ehealth-consent-affiliation.md), [ehealth-documentreference](StructureDefinition-ehealth-documentreference.md), [ehealth-group-appointment](StructureDefinition-ehealth-group-appointment.md), [ehealth-group-videoappointment](StructureDefinition-ehealth-group-videoappointment.md), [EpisodeOfCare](StructureDefinition-ehealth-guidanceresponse-episodeOfCare.md), [ehealth-guidanceresponse](StructureDefinition-ehealth-guidanceresponse.md), [ehealth-material-communication](StructureDefinition-ehealth-material-communication.md), [ehealth-media](StructureDefinition-ehealth-media.md), [ehealth-observation](StructureDefinition-ehealth-observation.md), [ehealth-questionnaireresponse](StructureDefinition-ehealth-questionnaireresponse.md), [ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md), [EpisodeOfCare](StructureDefinition-ehealth-task-episodeOfCare.md) and [ehealth-videoappointment](StructureDefinition-ehealth-videoappointment.md)
* Examples for this Profile: [EpisodeOfCare/42](EpisodeOfCare-42.md)
* CapabilityStatements using this Profile: [careplan](CapabilityStatement-careplan.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-episodeofcare.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-episodeofcare.csv), [Excel](StructureDefinition-ehealth-episodeofcare.xlsx), [Schematron](StructureDefinition-ehealth-episodeofcare.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-episodeofcare",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare",
  "version" : "10.0.2",
  "name" : "ehealth-episodeofcare",
  "status" : "active",
  "date" : "2026-09-10T10:04:36+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "EpisodeOfCare",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/EpisodeOfCare",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "EpisodeOfCare",
      "path" : "EpisodeOfCare"
    },
    {
      "id" : "EpisodeOfCare.extension",
      "path" : "EpisodeOfCare.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 2
    },
    {
      "id" : "EpisodeOfCare.extension:caremanagerOrganization",
      "path" : "EpisodeOfCare.extension",
      "sliceName" : "caremanagerOrganization",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization"]
      }]
    },
    {
      "id" : "EpisodeOfCare.extension:teamHistory",
      "path" : "EpisodeOfCare.extension",
      "sliceName" : "teamHistory",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-teamHistory"]
      }]
    },
    {
      "id" : "EpisodeOfCare.extension:episodeofcareStatusschedule",
      "path" : "EpisodeOfCare.extension",
      "sliceName" : "episodeofcareStatusschedule",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-statusschedule"]
      }]
    },
    {
      "id" : "EpisodeOfCare.extension:teamschedule",
      "path" : "EpisodeOfCare.extension",
      "sliceName" : "teamschedule",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-teamschedule"]
      }]
    },
    {
      "id" : "EpisodeOfCare.extension:participant",
      "path" : "EpisodeOfCare.extension",
      "sliceName" : "participant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-participant"]
      }]
    },
    {
      "id" : "EpisodeOfCare.extension:participant.extension:function",
      "path" : "EpisodeOfCare.extension.extension",
      "sliceName" : "function"
    },
    {
      "id" : "EpisodeOfCare.extension:participant.extension:function.value[x]",
      "path" : "EpisodeOfCare.extension.extension.value[x]",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://ehealth.sundhed.dk/vs/participant-function"
      }
    },
    {
      "id" : "EpisodeOfCare.extension:managingOrganization",
      "path" : "EpisodeOfCare.extension",
      "sliceName" : "managingOrganization",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-managing-organization"]
      }]
    },
    {
      "id" : "EpisodeOfCare.diagnosis",
      "path" : "EpisodeOfCare.diagnosis",
      "min" : 1
    },
    {
      "id" : "EpisodeOfCare.diagnosis.condition",
      "path" : "EpisodeOfCare.diagnosis.condition",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition"],
        "aggregation" : ["referenced"]
      }]
    },
    {
      "id" : "EpisodeOfCare.patient",
      "path" : "EpisodeOfCare.patient",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"],
        "aggregation" : ["referenced"]
      }]
    },
    {
      "id" : "EpisodeOfCare.managingOrganization",
      "path" : "EpisodeOfCare.managingOrganization",
      "max" : "0"
    },
    {
      "id" : "EpisodeOfCare.period",
      "path" : "EpisodeOfCare.period",
      "min" : 1
    },
    {
      "id" : "EpisodeOfCare.careManager",
      "path" : "EpisodeOfCare.careManager",
      "max" : "0"
    },
    {
      "id" : "EpisodeOfCare.team",
      "path" : "EpisodeOfCare.team",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam"],
        "aggregation" : ["referenced"]
      }]
    },
    {
      "id" : "EpisodeOfCare.account",
      "path" : "EpisodeOfCare.account",
      "max" : "0"
    }]
  }
}

```
