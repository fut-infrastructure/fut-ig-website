# ehealth-episodeofcare - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-episodeofcare**

## Resource Profile: ehealth-episodeofcare 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-episodeofcare |

# Introduction

An EpisodeOfCare is an association between a patient and an organization / healthcare provider(s) during which time encounters may occur.

# Scope and Usage

In scope of the eHealth infrastructure, creation of an EpisodeOfCare resource is triggered by a number of actions taking place out-of-band, that is, outside the scope of the eHealth infrastructure. Firstly, a patient is diagnosed with one or more conditions; then assessed as fulfilling criteria for enrollment in a telemedical care program leading to a referral being made to an organization providing such program. At this point a Practitioner within the providing organization creates an EpisodeOfCare referring to the Patient and the corresponding Conditions, all in the eHealth infrastructure. Created with `status` planned, the Practitioner updates the status to active once:

* a Consent to enroll in the program has been given by the Patient
* Adjustments have possibly been made to assigned CareTeam(s) in `team`.

The EpisodeOfCare functions as a representation of a program while the activities comprising it are defined in one or more CarePlan resources.

### careManagerOrganization and managingOrganization

An EpisodeOfCare is required to have exactly one reference to the Organization responsible for the treatment through the element `ehealth-episodeofcare-caremanagerOrganization`.

The element `managingOrganization` references the Organization which is data controller for the EpisodeOfCare and all other resources directly or indirectly referencing it.

### CareTeam and history of CareTeam

The CareTeam(s) currently responsible for the EpisodeOfCare are referenced in element `team`. Changes in CareTeam references are automatically maintained in the element `ehealth-teamHistory`.

**Usages:**

* Refer to this Profile: [ehealth-appointment](StructureDefinition-ehealth-appointment.md), [ehealth-careplan](StructureDefinition-ehealth-careplan.md), [ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md), [ehealth-communication-request](StructureDefinition-ehealth-communication-request.md)...Show 14 more,[ehealth-communication](StructureDefinition-ehealth-communication.md),[ehealth-condition](StructureDefinition-ehealth-condition.md),[ehealth-documentreference](StructureDefinition-ehealth-documentreference.md),[ehealth-group-appointment](StructureDefinition-ehealth-group-appointment.md),[ehealth-group-videoappointment](StructureDefinition-ehealth-group-videoappointment.md),[EpisodeOfCare](StructureDefinition-ehealth-guidanceresponse-episodeOfCare.md),[ehealth-guidanceresponse](StructureDefinition-ehealth-guidanceresponse.md),[ehealth-material-communication](StructureDefinition-ehealth-material-communication.md),[ehealth-media](StructureDefinition-ehealth-media.md),[ehealth-observation](StructureDefinition-ehealth-observation.md),[ehealth-questionnaireresponse](StructureDefinition-ehealth-questionnaireresponse.md),[ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md),[EpisodeOfCare](StructureDefinition-ehealth-task-episodeOfCare.md)and[ehealth-videoappointment](StructureDefinition-ehealth-videoappointment.md)
* Examples for this Profile: [EpisodeOfCare/42](EpisodeOfCare-42.md)
* CapabilityStatements using this Profile: [careplan](CapabilityStatement-careplan.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-episodeofcare)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-episodeofcare.csv), [Excel](StructureDefinition-ehealth-episodeofcare.xlsx), [Schematron](StructureDefinition-ehealth-episodeofcare.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-episodeofcare",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare",
  "version" : "6.0.0",
  "name" : "ehealth-episodeofcare",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "EpisodeOfCare",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/EpisodeOfCare",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "EpisodeOfCare",
        "path" : "EpisodeOfCare"
      },
      {
        "id" : "EpisodeOfCare.extension",
        "path" : "EpisodeOfCare.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "EpisodeOfCare.extension:caremanagerOrganization",
        "path" : "EpisodeOfCare.extension",
        "sliceName" : "caremanagerOrganization",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization"
            ]
          }
        ]
      },
      {
        "id" : "EpisodeOfCare.extension:teamHistory",
        "path" : "EpisodeOfCare.extension",
        "sliceName" : "teamHistory",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-teamHistory"
            ]
          }
        ]
      },
      {
        "id" : "EpisodeOfCare.extension:episodeofcareStatusschedule",
        "path" : "EpisodeOfCare.extension",
        "sliceName" : "episodeofcareStatusschedule",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-statusschedule"
            ]
          }
        ]
      },
      {
        "id" : "EpisodeOfCare.extension:teamschedule",
        "path" : "EpisodeOfCare.extension",
        "sliceName" : "teamschedule",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-teamschedule"
            ]
          }
        ]
      },
      {
        "id" : "EpisodeOfCare.extension:participant",
        "path" : "EpisodeOfCare.extension",
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
        "id" : "EpisodeOfCare.diagnosis",
        "path" : "EpisodeOfCare.diagnosis",
        "min" : 1
      },
      {
        "id" : "EpisodeOfCare.diagnosis.condition",
        "path" : "EpisodeOfCare.diagnosis.condition",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-condition"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "EpisodeOfCare.patient",
        "path" : "EpisodeOfCare.patient",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "EpisodeOfCare.managingOrganization",
        "path" : "EpisodeOfCare.managingOrganization",
        "min" : 1,
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
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "EpisodeOfCare.account",
        "path" : "EpisodeOfCare.account",
        "max" : "0"
      }
    ]
  }
}

```
