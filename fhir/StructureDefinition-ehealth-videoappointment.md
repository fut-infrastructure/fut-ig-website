# ehealth-videoappointment - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-videoappointment**

## Resource Profile: ehealth-videoappointment 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-videoappointment | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-videoappointment |

# Introduction

A video appointment is a booking of a healthcare event among ehealth patients, practitioners, related persons, and locations. Even though a meeting may span a number of participants, only one physical video appointment resource must be created. Participant status (approved, declined etc.) is handled using the AppointmentResponse resource, which in turn updates the status of the participant on the video appointment resource.

Certain data on a video appointment will be provided by the service itself when the video appointment is created, such as the meeting PIN code and the URL at which the meeting takes place. This means that the client must consider the service response instead of just the create request itself, and that the client cannot itself decide the meeting URL or the PIN code, which is defined in the scheduling template.

The URL to the video appointment is accessible 15 minutes (currently fixed) before the meeting starts.

The most important fields of the ehealth-videoappointment are described below:

* description: The "subject" of the video appointment (textual description).
* comment: Free text description of the video appointment to take place.
* participants: A list of participants invited to the meeting. These may be of type Patient, Practitioner, RelatedPerson, and Location. At least two participants are required. Each participant has a status, which may only be updated by creating an AppointmentResponse. In that case, the status on the Appointment will be updated with the participantStatus sent in the response.
* start/end: the start and end time of when the appointment is to take place (both required for video appointments).
* ehealth-responsible (extension): the responsible individual, care team and/or organization for the meeting.
* appointmentType: the type of appointment booked (checkup, emergency, followup etc).
* end-meeting-on-end-time (extension): Indicates if the meeting must be terminated at end time.
* max-participants (extension): The maximum number of participants allowed in the video meeting.
* meeting-url (extension): the URL used to attend the meeting (provided by the service, not the client).
* vmr-uri (extension): the Virtual Meeting Room URI that can be used in eg. webRTC clients.
* guest pinCode (extension): The guest pin code to be used when entering the meeting (is provided by the service itself based on the scheduling template used).
* host pinCode (extension): The host pin code to be used when entering the meeting (is provided by the service itself based on the scheduling template used). If no host attends, the meeting is not started

If other resources need to be referenced as part of the video appointment, it is possible to reference Condition and Procedure resources as the reason for the meeting, or using "supportingInformation" to reference other resource types. The "group-id" extension can be used for logically grouping different appointments.

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
 

**Usages:**

* Examples for this Profile: [Appointment/videoappointment01](Appointment-videoappointment01.md)
* CapabilityStatements using this Profile: [patient](CapabilityStatement-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-videoappointment)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-videoappointment.csv), [Excel](StructureDefinition-ehealth-videoappointment.xlsx), [Schematron](StructureDefinition-ehealth-videoappointment.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-videoappointment",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-videoappointment",
  "version" : "6.0.0",
  "name" : "ehealth-videoappointment",
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
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-videoappointment"
          },
          {
            "key" : "single-patient-appointment",
            "severity" : "error",
            "human" : "Only a single patient is allowed pr. appointment",
            "expression" : "participant.actor.where(reference.contains('/Patient')).count() < 2",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-videoappointment"
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
        "id" : "Appointment.extension:endMeetingOnEndTime",
        "path" : "Appointment.extension",
        "sliceName" : "endMeetingOnEndTime",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-end-meeting-on-end-time"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.extension:maxParticipants",
        "path" : "Appointment.extension",
        "sliceName" : "maxParticipants",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-max-participants"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.extension:meetingUrl",
        "path" : "Appointment.extension",
        "sliceName" : "meetingUrl",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-meeting-url"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.extension:vmrUri",
        "path" : "Appointment.extension",
        "sliceName" : "vmrUri",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-vmr-uri"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.extension:guestPinCode",
        "path" : "Appointment.extension",
        "sliceName" : "guestPinCode",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-guest-pin-code"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.extension:hostPinCode",
        "path" : "Appointment.extension",
        "sliceName" : "hostPinCode",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-host-pin-code"
            ]
          }
        ]
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
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-videoappointment"
          },
          {
            "key" : "responsible-2",
            "severity" : "error",
            "human" : "Both performing organization and responsible organization must be populated when legal basis is used",
            "expression" : "%resource.extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-performing-organization').exists() and %resource.extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-responsible-organization').exists()",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-videoappointment"
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
        "id" : "Appointment.identifier",
        "path" : "Appointment.identifier",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Appointment.identifier:vdxMeetingId",
        "path" : "Appointment.identifier",
        "sliceName" : "vdxMeetingId",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Appointment.identifier:vdxMeetingId.system",
        "path" : "Appointment.identifier.system",
        "min" : 1,
        "fixedUri" : "http://vdx.medcom.dk/meeting"
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
        "fixedCode" : "video"
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
        "id" : "Appointment.start",
        "path" : "Appointment.start",
        "min" : 1
      },
      {
        "id" : "Appointment.end",
        "path" : "Appointment.end",
        "min" : 1
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
            "aggregation" : ["referenced", "referenced", "contained"]
          }
        ]
      }
    ]
  }
}

```
