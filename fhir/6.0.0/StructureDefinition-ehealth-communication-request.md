# ehealth-communication-request - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-communication-request**

## Resource Profile: ehealth-communication-request 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-request | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-communication-request |

# Introduction

The CommunicationRequest resource allows for changes in the way the eHealth Infrastructure creates Communications (of profile `ehealth-message`).

# Scope and Usage

The eHealth Infrastructure generates Communications (of profile `ehealth-message`) in the following cases:

* Automated processing has been performed on a submitted measurement - whether zero, one or more Communication are created depends on the automated processing rules involved.
* A measurement is missing, that is, expected measurement has not been submitted
* A measurement has been submitted at an unexpected time
* A reminder that a measurement is expected to be submitted
* A CarePlan or EpisodeOfCare has been created or updated
* A reminder that an order in the SSL domain is to be delivered (requires additional configuration in the SSL Contract)

The default behaviour and controllability for the different Communication scenarios differ. An overview of how to control the different Communication generation can be found [here](https://ehealth-dk.atlassian.net/wiki/spaces/EDTW/pages/2415034369/Controlling+Creation+of+Messages).

The CommunicationRequest is used to customize how and when Communications are created by the infrastructure:

* CommunicationRequest can in some scenarios specify suppression of a specific Communication for CareTeams and/or Patients
* CommunicationRequest can in some scenarios specify overriding of medium and/or payload for Patient Communications

If multiple CommunicationRequests for the same recipient are found the most recent (by occurrencePeriod.start) with status active takes precedence. If multiple CommunicationRequest resources are the most recent and active, any CommunicationRequest with `doNotPerform` = true takes precedence.

## Suppression of Communications

When the infrastructure by default creates Communication for either a Patient or CareTeam, it may be possible to suppress creation for a specific recipient. An overview of when suppression is possible is given [here](https://ehealth-dk.atlassian.net/wiki/spaces/EDTW/pages/2415034369/Controlling+Creation+of+Messages). A CommunicationRequest states suppression when:

* `doNotPerform` is set to true

See the other requirements for a CommunicationRequest to take effect [here](https://ehealth-dk.atlassian.net/wiki/spaces/EDTW/pages/2415034369/Controlling+Creation+of+Messages).Updating `doNotPerform` to false or removing the attribute disables the specified suppression of the Communication. Alternatively, the CommunicationRequest lifecycle can be adjusted by setting a `status` value other than active.

## Override medium and payload

In some scenarios it is possible to use CommunicationRequest to override some default values of the Communication:

* `medium` overrides the Communication medium.
* `payload` overrides the Communication payload.

# Boundaries and Relationships

A CommunicationRequest is related to Communication (`ehealth-message`) and in some cases EpisodeOfCare (`ehealth-episode-of-care`) or ServiceRequest (`ehealth-serviceRequest`).

**Usages:**

* CapabilityStatements using this Profile: [careplan](CapabilityStatement-careplan.md)
* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-communication-request)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-communication-request.csv), [Excel](StructureDefinition-ehealth-communication-request.xlsx), [Schematron](StructureDefinition-ehealth-communication-request.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-communication-request",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-request",
  "version" : "6.0.0",
  "name" : "ehealth-communication-request",
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "CommunicationRequest",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/CommunicationRequest",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "CommunicationRequest",
        "path" : "CommunicationRequest"
      },
      {
        "id" : "CommunicationRequest.extension",
        "path" : "CommunicationRequest.extension",
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
        "id" : "CommunicationRequest.extension:episodeOfCare",
        "path" : "CommunicationRequest.extension",
        "sliceName" : "episodeOfCare",
        "min" : 0,
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
        "id" : "CommunicationRequest.extension:episodeOfCare.value[x]",
        "path" : "CommunicationRequest.extension.value[x]",
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
        "id" : "CommunicationRequest.basedOn",
        "path" : "CommunicationRequest.basedOn",
        "max" : "1"
      },
      {
        "id" : "CommunicationRequest.category",
        "path" : "CommunicationRequest.category",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/message-category"
        }
      },
      {
        "id" : "CommunicationRequest.priority",
        "path" : "CommunicationRequest.priority",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.org/fhir/ValueSet/request-priority"
        }
      },
      {
        "id" : "CommunicationRequest.medium",
        "path" : "CommunicationRequest.medium",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/message-medium"
        }
      },
      {
        "id" : "CommunicationRequest.subject",
        "path" : "CommunicationRequest.subject",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Patient"]
          }
        ]
      },
      {
        "id" : "CommunicationRequest.recipient",
        "path" : "CommunicationRequest.recipient",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/StructureDefinition/Patient",
              "http://hl7.org/fhir/StructureDefinition/CareTeam"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      }
    ]
  }
}

```
