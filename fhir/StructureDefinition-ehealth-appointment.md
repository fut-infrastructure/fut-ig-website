# ehealth-appointment - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-appointment**

## Resource Profile: ehealth-appointment 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-appointment | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-appointment |

# Introduction

An Appointment is a booking of a healthcare event among ehealth patients, practitioners, related persons, and locations. This may be either a physical or virtual meeting. Even though a meeting may span a number of participants, only one physical Appointment resource must be created. Participant status (approved, declined etc.) is handled using the AppointmentResponse resource, which in turn updates the status of the participant on the appointment resource.

The most important fields of the ehealth-appointment are described below:

* description: The "subject" of the appointment (textual description).
* comment: Free text description of the appointment to take place.
* participants: A list of participants invited to the meeting. These may be of type Patient, Practitioner, RelatedPerson, and Location. At least two participants are required. Each participant has a status, which may only be updated by creating an AppointmentResponse. In that case, the status on the Appointment will be updated with the participantStatus sent in the response.
* start/end: the start and end time of when the appointment is to take place.
* ehealth-responsible (extension): the responsible individual, care team and/or organization for the meeting.
* appointmentType: the type of appointment booked (checkup, emergency, followup etc).

If other resources need to be referenced as part of the appointment, it is possible to reference Condition and Procedure resources as the reason for the meeting, or using "supportingInformation" to reference other resource types. The "group-id" extension can be used for logically grouping different appointments.

# Scope and Usage

In the eHealth Infrastructure the Appointment resource is used in conjunction with the following resources:

* Patient 
* If the appointment contains a participant of type Patient
 
* Practitioner 
* If the appointment contains a participant of type Practitioner
 
* RelatedPerson 
* If the appointment contains a participant of type RelatedPerson
 
* Location 
* If the appointment contains a participant of type Location
 

# Notifications

The following rules apply to ehealth-appointment resources, given the appointment contains a participant of type **Patient**, who allows reception of NemSMS (has telecom with value 'NemSMS'):

* a NemSMS is sent to the patient the day prior to the appointments **start** time.

**Usages:**

* Examples for this Profile: [Appointment/appointment01](Appointment-appointment01.md)
* CapabilityStatements using this Profile: [patient](CapabilityStatement-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-appointment)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-appointment.csv), [Excel](StructureDefinition-ehealth-appointment.xlsx), [Schematron](StructureDefinition-ehealth-appointment.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-appointment",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-appointment",
  "version" : "6.0.0",
  "name" : "ehealth-appointment",
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
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-appointment"
          },
          {
            "key" : "single-patient-appointment",
            "severity" : "error",
            "human" : "Only a single patient is allowed pr. appointment",
            "expression" : "participant.actor.where(reference.contains('/Patient')).count() < 2",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-appointment"
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
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-appointment"
          },
          {
            "key" : "responsible-2",
            "severity" : "error",
            "human" : "Both performing organization and responsible organization must be populated when legal basis is used",
            "expression" : "%resource.extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-performing-organization').exists() and %resource.extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-responsible-organization').exists()",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-appointment"
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
        "fixedCode" : "regular"
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
        "id" : "Appointment.participant",
        "path" : "Appointment.participant",
        "min" : 2
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
        }
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
