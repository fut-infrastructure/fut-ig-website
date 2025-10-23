# ehealth-group-appointment - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-group-appointment**

## Resource Profile: ehealth-group-appointment 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-appointment | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-group-appointment |

# Extra Validation Constraints

* When a dateTime value is present in the ehealth-registration-deadline extension, then a `WARNING` validation issue will be raised if a participant is added to the appointment after this point in time 
* This constraint is implemented directly on the server due to technical limitations, which means it is not listed with other Implementation Guide constraints
 
* The ehealth-creator extension value is managed by the server and holds a reference to the CareTeam that created the group appointment 
* When creating a new group appointment, the server automatically fills out this value based on the JWT CareTeam context of the user
* Trying to assign a value different from the CareTeam in context when creating a group appointment, or changing this value in an update or patch operation, generates a http 422 error
* The value is used by the security system of the server to allow the original creator of the group appointment to modify the appointment after creation, even when the creator is not the ehealth-responsible party
 

**Usages:**

* Examples for this Profile: [Appointment/group-appointment01](Appointment-group-appointment01.md)
* CapabilityStatements using this Profile: [patient](CapabilityStatement-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-group-appointment)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-group-appointment.csv), [Excel](StructureDefinition-ehealth-group-appointment.xlsx), [Schematron](StructureDefinition-ehealth-group-appointment.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-group-appointment",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-appointment",
  "version" : "6.0.0",
  "name" : "ehealth-group-appointment",
  "status" : "active",
  "date" : "2025-10-23T10:34:08+00:00",
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
      "identity" : "ical",
      "uri" : "http://ietf.org/rfc/2445",
      "name" : "iCalendar"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Appointment",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Appointment",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Appointment",
        "path" : "Appointment",
        "constraint" : [
          {
            "key" : "responsible-1",
            "severity" : "error",
            "human" : "Ensuring that responsible entity is a participating party",
            "expression" : "(extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-responsible').value.reference in participant.extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-ext-careteam').value.reference) or (extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-responsible').value.reference in participant.actor.reference)",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-appointment"
          },
          {
            "key" : "max-participants",
            "severity" : "warning",
            "human" : "Too many intended participants",
            "expression" : "extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-max-participants').exists() implies participant.actor.where(reference.startsWith('#').not()).count() <= extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-max-participants').value",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-appointment"
          },
          {
            "key" : "min-participants",
            "severity" : "warning",
            "human" : "Too few intended participants",
            "expression" : "extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-min-participants').exists() implies participant.actor.where(reference.startsWith('#').not()).count() >= extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-min-participants').value",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-appointment"
          }
        ]
      },
      {
        "id" : "Appointment.extension",
        "path" : "Appointment.extension",
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
        "id" : "Appointment.extension:responsible",
        "path" : "Appointment.extension",
        "sliceName" : "responsible",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-responsible"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.extension:groupId",
        "path" : "Appointment.extension",
        "sliceName" : "groupId",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-id"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.extension:legalBasis",
        "path" : "Appointment.extension",
        "sliceName" : "legalBasis",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-legalBasis"
            ]
          }
        ],
        "constraint" : [
          {
            "key" : "governance-1",
            "severity" : "error",
            "human" : "When extension is used a Episode of Care MUST be referenced",
            "expression" : "%resource.supportingInformation.reference.contains('EpisodeOfCare/')",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-appointment"
          },
          {
            "key" : "responsible-2",
            "severity" : "error",
            "human" : "Both performing organization and responsible organization must be populated when legal basis is used",
            "expression" : "%resource.extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-performing-organization').exists() and %resource.extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-responsible-organization').exists()",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-appointment"
          }
        ]
      },
      {
        "id" : "Appointment.extension:releasableResource",
        "path" : "Appointment.extension",
        "sliceName" : "releasableResource",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-releasableResource"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.extension:responsibleOrganization",
        "path" : "Appointment.extension",
        "sliceName" : "responsibleOrganization",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-responsible-organization"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.extension:performer",
        "path" : "Appointment.extension",
        "sliceName" : "performer",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-performer"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.extension:performingOrganization",
        "path" : "Appointment.extension",
        "sliceName" : "performingOrganization",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-performing-organization"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.extension:creator",
        "path" : "Appointment.extension",
        "sliceName" : "creator",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-creator"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.extension:intendedAudience",
        "path" : "Appointment.extension",
        "sliceName" : "intendedAudience",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-intendedAudience"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.extension:registrationDeadline",
        "path" : "Appointment.extension",
        "sliceName" : "registrationDeadline",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-registration-deadline"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.serviceType",
        "path" : "Appointment.serviceType",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "coding.code"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Appointment.serviceType:appointmentType",
        "path" : "Appointment.serviceType",
        "sliceName" : "appointmentType",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Appointment.serviceType:appointmentType.coding",
        "path" : "Appointment.serviceType.coding",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/appointment-servicetype"
        }
      },
      {
        "id" : "Appointment.serviceType:appointmentType.coding.code",
        "path" : "Appointment.serviceType.coding.code",
        "min" : 1,
        "fixedCode" : "group"
      },
      {
        "id" : "Appointment.appointmentType",
        "path" : "Appointment.appointmentType",
        "min" : 1,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/appointmenttype-codes"
        }
      },
      {
        "id" : "Appointment.reasonCode",
        "path" : "Appointment.reasonCode",
        "max" : "1",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/appointment-reason"
        }
      },
      {
        "id" : "Appointment.supportingInformation",
        "path" : "Appointment.supportingInformation",
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Appointment.participant.extension",
        "path" : "Appointment.participant.extension",
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
        "id" : "Appointment.participant.extension:careteam",
        "path" : "Appointment.participant.extension",
        "sliceName" : "careteam",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-ext-careteam"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.participant.extension:assigningCareteam",
        "path" : "Appointment.participant.extension",
        "sliceName" : "assigningCareteam",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-assigning-careteam"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.participant.actor",
        "path" : "Appointment.participant.actor",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson",
              "http://hl7.org/fhir/StructureDefinition/Location"
            ],
            "aggregation" : ["referenced", "contained"]
          }
        ]
      }
    ]
  }
}

```
