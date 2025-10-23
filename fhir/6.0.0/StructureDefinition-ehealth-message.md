# ehealth-message - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-message**

## Resource Profile: ehealth-message 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-message | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-message |

# Introduction

An ehealth-message defines written communication and comes in four flavours depending on the "category" of the message:

* **Message**: For sending user-generated messages from Patients and CareTeams (Practitioners) to Patients or CareTeams. Messages may not be sent between Patients or between Practitioners. When sending a message to a CareTeam, it is possible to narrow the recipient to be of a certain role. This is done by setting the "restriction-category" extension to a specific role value.
* **Notification**: Must regard an incident or event that has already occurred, where the sender must be of type Device, and the recipient must be a Patient or CareTeam. These are usually text-based, and may have a temporal validity attached (see "period" extension) to indicate at which point a notification is no longer valid. When sent, a notification may no longer be updated by the sender.
* **Advise**: Advise is much like notifications. They may also have a validity period, but they may only concern a future planned event, eg. a measurement or online meeting which is to take place. The sender must be of type Device, and the recipient must be a Patient or CareTeam
* **Note**: For personal notes (written by a Patient or Practitioner), which may be shared with a CareTeam. A personal note must be created with sender=recipient. In case a personal note wants to be shared with a CareTeam, the CareTeam must be referred by the recipientCareTeam extension, and the receiver deleted (both can take place in the same PATCH operation). A personal note may be updated by the sender, but not by the recipient.

An ehealth-message may refer related resources (eg. Device, CarePlan, Appointment etc) using the "about" field, no matter which category it is. Different instances of ehealth-message may be logically organized into "threads" by assigning the same thread-id in the provided extension. Similarly, they may be organized in a group (eg. group messages) by assigning the same group-id in that extension. The message subject may be provided in the title extension, and an optional priority may be provided in the ehealth-priority extension.

# Remarks about status and administrative-status

The ehealth-message profile contains two status fields:

* **status**: 
* For notes (category='note') the status field has no restrictions or implications
* For messages (category='message') the following status transitions rules are in effect: 
* A message is considered "not yet sent" when it has one of the following status and can freely transition from one to another: 'preparation', 'on-hold', 'not-done', 'entered-in-error'
* A message is considered "being sent" when created or patched into status 'in-progress' and cannot be patched further or deleted by the sender 
* The server will automatically transition a message from 'in-progress' to 'completed' when it has been sent successfully (happens immediately for non-NemSMS mediums and is reflected in the returned resource)
* The server will automatically transition a message from 'in-progress' to 'stopped' if it could not be sent (currently only happens if a NemSMS could not be sent)
 
* The client can never create or patch a message into status 'completed' or 'stopped'
* The sender cannot patch, only delete messages with status 'stopped'
* The sender cannot patch or delete messages with status 'completed'
* The recipient can patch /received and administrative-status on messages with status 'completed'
 
 
* **administrative-status** (extension): Makes it possible for the message **recipient** to indicate the state of a message. A message may hold an administrative status that defines the last action the recipient took on the message in question. At first, the message has administrative-status "activate". The recipient may mark the message as read by setting administrative-status "read". If the recipient considers the message a sort of "task", the message may also be updated with administrative-status "complete" when the task is done, or "reactivate" if the task was not complete anyway.

# Fields with auto-assigned values

Some fields are filled in automatically on message creation, eg. if a sound default value makes sense. These fields are:

* Field "sent": If message state is set to "in-progress" on creation, then the "sent" field will be assigned current date/time.
* Extension "restriction-category": If not set by the caller, it will be set to value "None"
* Extension "thread-id": In case a thread-id is not set by the client, it will be generated server-side (random UUID) at message creation.

# Search parameters

The following custom search parameters may be used when searching for ehealth-message instances:

* **administrativeStatus**: Specify the desired administrative status using system and code (eg. "http://ehealth.sundhed.dk/cs/administrative-status" and "read")
* **careTeamRecipient**: Specify an absolute reference to the CareTeam which must be message recipient
* **careTeamSender**: Specify an absolute reference to the CareTeam which must be message sender
* **communicationCategory**: Specify the desired category using system and code (eg. "http://ehealth.sundhed.dk/message-category/" and "message")
* **period**: Use a date-type search to filter messages that must conform to temporal constraints (eg. notifications that are only valid until a specific point in time)
* **threadId**: Specify the logical "thread id" used to correlate messages
* **restrictionCategory**: Specify the desired restriction category using system and code (eg. "http://ehealth.sundhed.dk/cs/restriction-category" and "measurement-monitoring")
* **episodeOfCare**: Specify the desired episodeOfCare reference (provided in extension http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare)

# Scope and Usage

In the eHealth Infrastructure the ehealth-message resource is used in conjunction with the following resources:

* Patient 
* As sender or recipient of a message
 
* Practitioner 
* As sender/recipient of a message (only when category is "note")
 
* Device 
* As sender of an ehealth-message (eg. as a result of automatic processing/triage)
 
* CareTeam 
* As sender or recipient using the extensions senderCareTeam/recipientCareTeam, respectively
 

# General rules

The following rules apply for the ehealth-message profile:

* If medium.code is eboks or nemsms, the recipient must be of type Patient
* Only one of sender or extension senderCareTeam may be filled in
* Only one of recipient or extension recipientCareTeam may be filled in
* Medium 'nemsms' may only be used if the Patient allows reception of NemSMS (has telecom with value 'NemSMS'). In that case, a NemSMS message will be sent to the Patient.

# NemSMS Notifications

The Patient service will forward ehealth-messages to the public Danish NemSMS service given the following conditions:

* message.medium.code is 'nemsms' (defined in http://ehealth.sundhed.dk/cs/message-medium)
* message.status is 'in-progress'

The message is forwarded asynchronously. To track the progress of the NemSMS, the `status` and `statusReason` code is used:

* Initially, a NemSMS is sent like any other message by setting the status to 'in-progress'. The status will remain 'in-progress' while the NemSMS is being dispatched.
* If the NemSMS dispatch is successful, status is updated to 'completed' by the server.
* If the NemSMS dispatch fails, status is updated to 'stopped' by the server and statusReason is set to either 'system-error' or 'recipient-unavailable' (defined in http://hl7.org/fhir/R4/valueset-communication-not-done-reason.html) 
* A message.note.text may be added to the message which can contain further information about the reason for dispatch failure in case of 'system-error'
 

### Automatic NemSMS Notifications

Automatic NemSMS notifications is a toggleable feature at the service level. If enabled, the Patient service will generate NemSMS ehealth-messages, notifying the recipient that they have received a message, given the following conditions:

* message.medium.code is not 'nemsms'
* message.status is 'completed'
* message.category is 'message' (defined in http://ehealth.sundhed.dk/cs/message-category)
* message.recipient is a Patient reference
* patient.telecom contains ContactPoint 'NemSMS'

The Patient service will generate NemSMS ehealth-messages, notifying patients that they have an appointment or video appointment scheduled for de following day, given the following conditions:

* appointment.start is current day + 1 day
* appointment.participant contains one Patient reference
* patient.telecom contains ContactPoint 'NemSMS'

# Update rules

An ehealth-message may not have its category changed, eg. from 'note' to 'message'.
 An ehealth-message may be PATCH updated on paths complying with the regular expressions below (provided that security and status transition rules are obeyed)

* /implicitRules.*
* /contained.*
* /recipient.*
* /definition.*
* /basedOn.*
* /partOf.*
* /topic.*
* /about.*
* /context.*
* /received.*
* /reasonCode.*
* /reasonReference.*
* /payload.*
* /note.*
* /status.*
* /extension.*

**Usages:**

* Examples for this Profile: [Communication/message01](Communication-message01.md)
* CapabilityStatements using this Profile: [patient](CapabilityStatement-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-message)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-message.csv), [Excel](StructureDefinition-ehealth-message.xlsx), [Schematron](StructureDefinition-ehealth-message.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-message",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-message",
  "version" : "6.0.0",
  "name" : "ehealth-message",
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
  "type" : "Communication",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Communication",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Communication",
        "path" : "Communication",
        "constraint" : [
          {
            "key" : "nemsms-invariant",
            "severity" : "error",
            "human" : "If communication resource is a NemSMS payload cannot exceed 160",
            "expression" : "medium.coding.where(code = 'nemsms').exists() implies payload.content.ofType(string).length() <= 160",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-message"
          },
          {
            "key" : "note-invariant",
            "severity" : "error",
            "human" : "Category note invariant",
            "expression" : "category.coding.code contains 'note' implies (recipient.reference contains sender.reference) or (recipient.reference.exists().not() and extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam').value.as(Reference).exists())",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-message"
          },
          {
            "key" : "notification-invariant",
            "severity" : "error",
            "human" : "Category notification invariant",
            "expression" : "category.coding.code contains 'notification' implies (recipient.reference.contains('Patient/') or extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam').value.as(Reference).exists()) and ( sender.reference.contains('Device/') or contained.ofType(Device).where('#' + id = %resource.sender.reference).empty().not())",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-message"
          },
          {
            "key" : "message-invariant",
            "severity" : "error",
            "human" : "Category message invariant",
            "expression" : "category.coding.code contains 'message' implies (recipient.reference.contains('Patient/') and ( extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam').value.as(Reference).exists())) or (( extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam').value.as(Reference).exists()) and (sender.reference.contains('Patient/')) or (extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam').value.as(Reference).exists() and extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam').value.as(Reference).exists() ))",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-message"
          },
          {
            "key" : "advice-invariant",
            "severity" : "error",
            "human" : "Category advice invariant",
            "expression" : "category.coding.code contains 'advice' implies (recipient.reference.contains('Patient/') or extension.where(url = 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam').value.as(Reference).exists()) and ( sender.reference.contains('Device/') or contained.ofType(Device).where('#' + id = %resource.sender.reference).empty().not())",
            "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-message"
          }
        ]
      },
      {
        "id" : "Communication.extension",
        "path" : "Communication.extension",
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
        "id" : "Communication.extension:episodeOfCare",
        "path" : "Communication.extension",
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
        "id" : "Communication.extension:episodeOfCare.value[x]",
        "path" : "Communication.extension.value[x]",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/EpisodeOfCare"],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Communication.extension:recipientCareTeam",
        "path" : "Communication.extension",
        "sliceName" : "recipientCareTeam",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-recipientCareTeam"
            ]
          }
        ]
      },
      {
        "id" : "Communication.extension:senderCareTeam",
        "path" : "Communication.extension",
        "sliceName" : "senderCareTeam",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam"
            ]
          }
        ]
      },
      {
        "id" : "Communication.extension:restrictionCategory",
        "path" : "Communication.extension",
        "sliceName" : "restrictionCategory",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category"
            ]
          }
        ]
      },
      {
        "id" : "Communication.extension:threadId",
        "path" : "Communication.extension",
        "sliceName" : "threadId",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-thread-id"
            ]
          }
        ]
      },
      {
        "id" : "Communication.extension:period",
        "path" : "Communication.extension",
        "sliceName" : "period",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-period"
            ]
          }
        ]
      },
      {
        "id" : "Communication.extension:administrativeStatus",
        "path" : "Communication.extension",
        "sliceName" : "administrativeStatus",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-administrative-status"
            ]
          }
        ]
      },
      {
        "id" : "Communication.extension:title",
        "path" : "Communication.extension",
        "sliceName" : "title",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-title"
            ]
          }
        ]
      },
      {
        "id" : "Communication.extension:priority",
        "path" : "Communication.extension",
        "sliceName" : "priority",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-priority"
            ]
          }
        ]
      },
      {
        "id" : "Communication.extension:groupId",
        "path" : "Communication.extension",
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
        "id" : "Communication.extension:onBehalfOf",
        "path" : "Communication.extension",
        "sliceName" : "onBehalfOf",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-on-behalf-of"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Communication.partOf",
        "path" : "Communication.partOf",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/CarePlan"],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Communication.category",
        "path" : "Communication.category",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "coding.system"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Communication.category:DkTmCategory",
        "path" : "Communication.category",
        "sliceName" : "DkTmCategory",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Communication.category:DkTmCategory.coding.system",
        "path" : "Communication.category.coding.system",
        "min" : 1,
        "patternUri" : "http://ehealth.sundhed.dk/cs/message-category"
      },
      {
        "id" : "Communication.category:DkTmCategory.coding.code",
        "path" : "Communication.category.coding.code",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/message-category"
        }
      },
      {
        "id" : "Communication.medium",
        "path" : "Communication.medium",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "coding.system"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Communication.medium:DkTmMedium",
        "path" : "Communication.medium",
        "sliceName" : "DkTmMedium",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Communication.medium:DkTmMedium.coding.system",
        "path" : "Communication.medium.coding.system",
        "min" : 1,
        "patternUri" : "http://ehealth.sundhed.dk/cs/message-medium"
      },
      {
        "id" : "Communication.medium:DkTmMedium.coding.code",
        "path" : "Communication.medium.coding.code",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/message-medium"
        }
      },
      {
        "id" : "Communication.recipient",
        "path" : "Communication.recipient",
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/StructureDefinition/Patient",
              "http://hl7.org/fhir/StructureDefinition/Practitioner"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Communication.sender",
        "path" : "Communication.sender",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://hl7.org/fhir/StructureDefinition/Patient",
              "http://hl7.org/fhir/StructureDefinition/Practitioner"
            ],
            "aggregation" : ["referenced", "contained"]
          }
        ]
      },
      {
        "id" : "Communication.reasonCode",
        "path" : "Communication.reasonCode",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/message-reasonCode"
        }
      },
      {
        "id" : "Communication.reasonReference",
        "path" : "Communication.reasonReference",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/StructureDefinition/Condition",
              "http://hl7.org/fhir/StructureDefinition/Observation"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "Communication.payload",
        "path" : "Communication.payload",
        "max" : "1"
      },
      {
        "id" : "Communication.payload.content[x]",
        "path" : "Communication.payload.content[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "rules" : "closed"
        }
      },
      {
        "id" : "Communication.payload.content[x]:contentString",
        "path" : "Communication.payload.content[x]",
        "sliceName" : "contentString",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ]
      },
      {
        "id" : "Communication.note.author[x]",
        "path" : "Communication.note.author[x]",
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
        "id" : "Communication.note.author[x]:authorReference",
        "path" : "Communication.note.author[x]",
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
        "id" : "Communication.note.author[x]:authorString",
        "path" : "Communication.note.author[x]",
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
