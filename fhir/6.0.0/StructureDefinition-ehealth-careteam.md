# ehealth-careteam - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-careteam**

## Resource Profile: ehealth-careteam 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-careteam |

# Introduction

The CareTeam includes all the people and organizations who plan to participate in the coordination and delivery of care for a patient. A CareTeam can be constructed for a single patient but typically handles more patients.

# Scope and Usage

In the eHealth Infrastructure, a CareTeam has a lifecycle independent of Patients and consists of a group of Practitioners. Typically the group of Practitioners are affiliated with a real-world organizational unit such as a hospital department/care unit, but a CareTeam can also be representing a "virtual" unit comprised of
 Practitioners from more sectors or several real-world organizational units.

The core FHIR CareTeam has `subject` and `context` which can reference a Patient and EpisodeOfCare, respectively, which when used ties a CareTeam to a Patient context. Similarly, use of element `reasonReference` would indirectly tie the CareTeam to a Patient. As this is not used in the eHealth Infrastructure and to prevent such tying, these elements have been set to 0..0.

Instead CareTeam is intended to be referenced from CarePlan and EpisodeOfCare. A CareTeam can be referenced from a single CarePlan but the typical scenario is that it is referenced by multiple CarePlan and/or EpisodeOfCare instances crossing multiple Patient instances.

The eHealth profile of CareTeam has the following extensions:

* `ehealth-useContext` which defines the context(s) in which the CareTeam is intended and expected to be used (non-exclusively)

### Composition of CareTeams

In the eHealth Infrastructure, the possibility to add CareTeam participant members other than Practitioner is not used, but the other types (Organization, CareTeam etc) have been retained for possible future use.

There are currently no restrictions on the composition of CareTeams. The intended usage is to establish a few layers of CareTeams, but it is important to make sure that the CareTem member graph contains no cycles.

### CareTeam Identifier

At least one `identifier` for the CareTeam shall use `system` set to `urn:ietf:rfc:3986` and contain a `value` which is a UUID.

### Condition types handled by the CareTeam

In order to ease selection of CareTeam appropriate for a given CarePlan, at least one Condition type handled by a CareTeam must be stated in `reasonCode`. This is used as criteria for suggesting CareTeams in the operation suggest-care-teams.

### UseContext

The element useContext.code has binding to the ValueSet http://hl7.org/fhir/ValueSet/use-context (see https://hl7.org/fhir/R4/valueset-use-context.html). It is, however, validated against the eHealth ValueSet http://ehealth.sundhed.dk/vs/ehealth-usage-context-type (see https://ehealth.sundhed.dk/fhir/ValueSet-ehealth-usage-context-type.html). This validation includes that the value in useContext.valueCodeableConcept is acceptable in the ValueSet described for useContext.code. **Do not use code 'focus'. Conditions must be added to the reasonCode property.**

**Usages:**

* Refer to this Profile: [Assigning careteam](StructureDefinition-ehealth-assigning-careteam.md), [ehealth-careplan](StructureDefinition-ehealth-careplan.md), [ehealth-careteam](StructureDefinition-ehealth-careteam.md), [Recipient careteam](StructureDefinition-ehealth-communication-recipientCareTeam.md)...Show 11 more,[Sender careteam](StructureDefinition-ehealth-communication-senderCareTeam.md),[Creator](StructureDefinition-ehealth-creator.md),[ehealth-episodeofcare](StructureDefinition-ehealth-episodeofcare.md),[Careteam](StructureDefinition-ehealth-ext-careteam.md),[On behalf of](StructureDefinition-ehealth-on-behalf-of.md),[Performer](StructureDefinition-ehealth-performer.md),[Responsible](StructureDefinition-ehealth-responsible.md),[ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md),[Task responsible](StructureDefinition-ehealth-task-responsible.md),[Team history](StructureDefinition-ehealth-teamHistory.md)and[Team schedule](StructureDefinition-ehealth-teamschedule.md)
* Examples for this Profile: [Example CareTeam](CareTeam-108752.md) and [CareTeam Aarhus](CareTeam-42.md)
* CapabilityStatements using this Profile: [organization](CapabilityStatement-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-careteam)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-careteam.csv), [Excel](StructureDefinition-ehealth-careteam.xlsx), [Schematron](StructureDefinition-ehealth-careteam.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-careteam",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam",
  "version" : "6.0.0",
  "name" : "ehealth-careteam",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "CareTeam",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/CareTeam",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "CareTeam",
        "path" : "CareTeam"
      },
      {
        "id" : "CareTeam.extension",
        "path" : "CareTeam.extension",
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
        "id" : "CareTeam.extension:useContext",
        "path" : "CareTeam.extension",
        "sliceName" : "useContext",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-useContext"
            ]
          }
        ]
      },
      {
        "id" : "CareTeam.status",
        "path" : "CareTeam.status",
        "min" : 1
      },
      {
        "id" : "CareTeam.category",
        "path" : "CareTeam.category",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/careteam-category"
        }
      },
      {
        "id" : "CareTeam.name",
        "path" : "CareTeam.name",
        "min" : 1
      },
      {
        "id" : "CareTeam.subject",
        "path" : "CareTeam.subject",
        "max" : "0"
      },
      {
        "id" : "CareTeam.participant.role",
        "path" : "CareTeam.participant.role",
        "min" : 1,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/careteam-participant-role"
        }
      },
      {
        "id" : "CareTeam.participant.member",
        "path" : "CareTeam.participant.member",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitionerrole",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "CareTeam.participant.onBehalfOf",
        "path" : "CareTeam.participant.onBehalfOf",
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
        "id" : "CareTeam.reasonCode",
        "path" : "CareTeam.reasonCode",
        "min" : 1,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/conditions"
        }
      },
      {
        "id" : "CareTeam.reasonReference",
        "path" : "CareTeam.reasonReference",
        "max" : "0"
      },
      {
        "id" : "CareTeam.managingOrganization",
        "path" : "CareTeam.managingOrganization",
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
        "id" : "CareTeam.telecom.value",
        "path" : "CareTeam.telecom.value",
        "min" : 1
      },
      {
        "id" : "CareTeam.note.author[x]",
        "path" : "CareTeam.note.author[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "CareTeam.note.author[x]:authorReference",
        "path" : "CareTeam.note.author[x]",
        "sliceName" : "authorReference",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "CareTeam.note.author[x]:authorString",
        "path" : "CareTeam.note.author[x]",
        "sliceName" : "authorString",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ]
      }
    ]
  }
}

```
