# ehealth-carecommunication - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-carecommunication**

## Resource Profile: ehealth-carecommunication 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:ehealth-carecommunication |

# Introduction

An Ehealth-CareCommunication is an FUT abstraction of a MedCom CareCommunication. This is needed to support communication through the VANS network with parties outside the FUT infrastructure, as well as inside FUT. The Ehealth-CareCommunication's primary feature is to enable communication in relation to several images of different file types.

# Remarks about status and administrative-status

* **status**: 
* A message is considered "not yet sent" when it has one of the following status and can freely transition from one to another: 'preparation', 'on-hold', 'not-done', 'entered-in-error'
* A message is considered "being sent" when created or patched into status 'in-progress' and cannot be patched further or deleted by the sender
* The server will automatically transition a message from 'in-progress' to 'completed' when it has been sent successfully (happens when the Vans-Relay has received a positive acknowledgement on the send message)
* The server will automatically transition a message from 'in-progress' to 'stopped' if it could not be sent (happens when the Vans-Relay has received a negative acknowledgement on the send message, or at 3 failed attempts at sending)
* The client can never create or patch a message into status 'completed' or 'stopped'
* The sender cannot patch, only delete messages with status 'stopped'
* The sender cannot patch or delete messages with status 'completed'
* The recipient can patch /received and administrative-status on messages with status 'completed'
 
* **administrative-status** (extension): Makes it possible for the message **recipient** to indicate the state of a message. A message may hold an administrative status that defines the last action the recipient took on the message in question. At first, the message has administrative-status "activate". The recipient may mark the message as read by setting administrative-status "read". If the recipient considers the message a sort of "task", the message may also be updated with administrative-status "complete" when the task is done, or "reactivate" if the task was not complete anyway.

# Search parameters

The following custom search parameters may be used when searching for ehealth-CareCommunication instances:

* **administrativeStatus**: Specify the desired administrative status using system and code (eg. "http://ehealth.sundhed.dk/cs/administrative-status" and "read")
* **careCommunicationSenderPractitioner**: Specify an absolute reference to the Practitioner that must be the sender of the message (the Practitioner linked in the sender extension)
* **careCommunicationSenderCareTeam**: Specify an absolute reference to the CareTeam that is the sender of the message (the CareTeam linked in the sender extension)
* **communicationCategory**: Specify the desired category using system and code (eg. "http://ehealth.sundhed.dk/cs/ehealth-carecommunication-category" and "nursing")
* **topic**: Specify the desired topic. For CareCommunication the topic is provided as free text (topic.text), so use a text search

# Scope and Usage

In the eHealth Infrastructure the ehealth-CareCommunication resource is used in conjunction with the following resources:

* Patient 
* As a subject of a message
 
* PractitionerRole 
* As specific sender/recipient of a message
 
* Practitioner 
* the Practitioner of the PractitionerRole
 
* CareTeam 
* as specific sender/recipient of a message
 
* Organization 
* as sender/recipient of a message
 

**note on sender**: The sender of a message is structured as a complex extension, holding a reference to the sending PractitionerRole, the linked Practitioner and optional CareTeam. If a CareTeam is present, that CareTeam is considered the specific sender, not the PractitionerRole. PractitionerRole is still required, since every message has to have a PractitionerRole representing that message.

# General rules

* The sender/receiver Organizations have to have both a SOR and GLN (EAN) identifier to be eligible for VANS communication.
* If the message type is Forward, you as a sender have to pick which payloads should be included in the message.
* If the message type is Reply, the message will be populated automatically with all prior payloads of the given conversation.
* The Communication identifier is the same for all Ehealth-CareCommunications of the same conversation. A new Communication Id is needed for a Forward message type, even though bundles from a prior conversation are included.
* The MessageHeader identifier is set for received messages, as client-side assignment of id's is not possible. For messages sent from the FUT infrastructure, it is not needed. The reasoning for the use of this identifier is that the correlating MedCom model for Ehealth-CareCommunications identifies specific messages based on the MessageHeader identifier.
* inResponseTo has to be included for Reply messages. It points to the previous MessageHeader identifier in the conversation if present, otherwise Ehealth-CareCommunication.id.
* If category is other, the topic.text element has to be populated.
* recipient can be excluded, which means the message is considered sent to the destination organization.

**Usages:**

* CapabilityStatements using this Profile: [patient](CapabilityStatement-patient.md)
* This Profile is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-carecommunication.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-carecommunication.csv), [Excel](StructureDefinition-ehealth-carecommunication.xlsx), [Schematron](StructureDefinition-ehealth-carecommunication.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-carecommunication",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication",
  "version" : "10.0.0",
  "name" : "ehealth-carecommunication",
  "status" : "active",
  "date" : "2026-08-06T13:29:38+00:00",
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
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Communication",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Communication",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Communication",
      "path" : "Communication",
      "constraint" : [{
        "key" : "stopped-status-statusReason",
        "severity" : "error",
        "human" : "If status is 'stopped', statusReason must be either 'system-error' or 'recipient-unavailable'.",
        "expression" : "status != 'stopped' or statusReason.coding.where(code = 'system-error' or code = 'recipient-unavailable').exists()",
        "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication"
      },
      {
        "key" : "only-asap-or-routine",
        "severity" : "error",
        "human" : "priority must be either 'asap' or 'routine'",
        "expression" : "priority.empty() or priority = 'asap' or priority = 'routine'",
        "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication"
      },
      {
        "key" : "topic-required-when-category-other",
        "severity" : "error",
        "human" : "topic must be present when category is 'other'.",
        "expression" : "iif(category.coding.code != 'other', true, category.coding.code = 'other' and topic.exists())",
        "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication"
      },
      {
        "key" : "priority-category-invariant",
        "severity" : "error",
        "human" : "Priority must not be present when category is not 'regarding-referral'.",
        "expression" : "category.coding.code = 'regarding-referral' or priority.empty()",
        "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication"
      },
      {
        "key" : "atLeastOnePayloadString",
        "severity" : "error",
        "human" : "At least one payload segment shall have a message text (payload.contentString)",
        "expression" : "payload.contentString.exists()",
        "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication"
      },
      {
        "key" : "payloadAttachment-contentType-required",
        "severity" : "error",
        "human" : "contentType SHALL be present when the attachment content is in the data element. It is not required for url-only attachments.",
        "expression" : "payload.contentAttachment.data.exists() implies payload.contentAttachment.contentType.exists()",
        "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication"
      },
      {
        "key" : "no-standard-sender",
        "severity" : "error",
        "human" : "The standard Communication.sender element SHALL NOT be used. Use the ehealth-carecommunication-sender extension instead.",
        "expression" : "sender.empty()",
        "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication"
      },
      {
        "key" : "sender-required-based-on-messagetype",
        "severity" : "error",
        "human" : "If messagetype is 'new' or 'reply', the sender extension must be present.\nIf 'forward', sender may be absent.",
        "expression" : "extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-message-Type').value.where(code = 'new-message' or code = 'reply-message').exists() implies extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-sender').exists()",
        "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication"
      },
      {
        "key" : "sender-contactPoint-required-based-on-messagetype",
        "severity" : "error",
        "human" : "If messagetype is 'new' or 'reply', the sender extension must carry a contactPoint.\nIf 'forward', it may be absent. Mirrors MedCom's required authorContact on the outbound message.",
        "expression" : "extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-message-Type').value.where(code = 'new-message' or code = 'reply-message').exists() implies extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-sender').extension('contactPoint').exists()",
        "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication"
      },
      {
        "key" : "reply-requires-inResponseTo",
        "severity" : "error",
        "human" : "If messageType is 'reply-message', inResponseTo SHALL be populated.",
        "expression" : "extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-message-Type').value.where(code = 'reply-message').exists() implies inResponseTo.exists()",
        "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication"
      },
      {
        "key" : "forward-prohibits-inResponseTo",
        "severity" : "error",
        "human" : "If messageType is 'forward-message', inResponseTo SHALL be empty.",
        "expression" : "extension('http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-message-Type').value.where(code = 'forward-message').exists() implies inResponseTo.empty()",
        "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication"
      }]
    },
    {
      "id" : "Communication.extension",
      "path" : "Communication.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 4
    },
    {
      "id" : "Communication.extension:sender",
      "path" : "Communication.extension",
      "sliceName" : "sender",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-sender"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Communication.extension:destination",
      "path" : "Communication.extension",
      "sliceName" : "destination",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-destination"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Communication.extension:origin",
      "path" : "Communication.extension",
      "sliceName" : "origin",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-origin"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Communication.extension:messageType",
      "path" : "Communication.extension",
      "sliceName" : "messageType",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-message-Type"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Communication.extension:administrativeStatus",
      "path" : "Communication.extension",
      "sliceName" : "administrativeStatus",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-administrative-status"]
      }]
    },
    {
      "id" : "Communication.identifier",
      "path" : "Communication.identifier",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "system"
        }],
        "rules" : "open"
      },
      "min" : 1,
      "max" : "2",
      "mustSupport" : true
    },
    {
      "id" : "Communication.identifier:communicationId",
      "path" : "Communication.identifier",
      "sliceName" : "communicationId",
      "short" : "The communication identifier",
      "min" : 1,
      "max" : "1",
      "constraint" : [{
        "key" : "uuidv4",
        "severity" : "error",
        "human" : "identifier.value SHALL be a valid UUID v4 in URN form (urn:uuid:<uuid>)",
        "expression" : "value.matches('^urn:uuid:[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$')",
        "source" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Communication.identifier:communicationId.use",
      "path" : "Communication.identifier.use",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://hl7.org/fhir/ValueSet/identifier-use"
      }
    },
    {
      "id" : "Communication.identifier:communicationId.system",
      "path" : "Communication.identifier.system",
      "min" : 1,
      "patternUri" : "http://ehealth.sundhed.dk/id/ehealth-carecommunication-identifier",
      "mustSupport" : true
    },
    {
      "id" : "Communication.identifier:communicationId.value",
      "path" : "Communication.identifier.value",
      "short" : "UUID v4 in URN form (urn:uuid:<uuid>)",
      "definition" : "The communication identifier as a UUID v4 in URN form. The URN form (urn:uuid:<uuid>) is used so the same UUID is byte-identical to Bundle.entry.fullUrl and references in the MedCom careCommunication Bundle this profile is aligned with.",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Communication.identifier:messageHeaderId",
      "path" : "Communication.identifier",
      "sliceName" : "messageHeaderId",
      "short" : "The ID of the originating MessageHeader resource",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Communication.identifier:messageHeaderId.system",
      "path" : "Communication.identifier.system",
      "min" : 1,
      "patternUri" : "http://ehealth.sundhed.dk/fhir/system/medcom-message-header-id",
      "mustSupport" : true
    },
    {
      "id" : "Communication.identifier:messageHeaderId.value",
      "path" : "Communication.identifier.value",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Communication.basedOn",
      "path" : "Communication.basedOn",
      "max" : "0"
    },
    {
      "id" : "Communication.partOf",
      "path" : "Communication.partOf",
      "max" : "0"
    },
    {
      "id" : "Communication.inResponseTo",
      "path" : "Communication.inResponseTo",
      "short" : "references the Ehealth-CareCommunication Communication.id, which this message is a response to.",
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Communication.status",
      "path" : "Communication.status",
      "mustSupport" : true
    },
    {
      "id" : "Communication.category",
      "path" : "Communication.category",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://ehealth.sundhed.dk/vs/ehealth-carecommunication-category"
      }
    },
    {
      "id" : "Communication.category.coding",
      "path" : "Communication.category.coding",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Communication.category.coding.system",
      "path" : "Communication.category.coding.system",
      "min" : 1,
      "patternUri" : "http://ehealth.sundhed.dk/cs/ehealth-carecommunication-category",
      "mustSupport" : true
    },
    {
      "id" : "Communication.category.coding.code",
      "path" : "Communication.category.coding.code",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Communication.priority",
      "path" : "Communication.priority",
      "short" : "Only used when the category is 'regarding referral', see priority-category-invariant.",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://ehealth.sundhed.dk/vs/ehealth-carecommunication-priority"
      }
    },
    {
      "id" : "Communication.subject",
      "path" : "Communication.subject",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Patient"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Communication.topic",
      "path" : "Communication.topic",
      "short" : "Must be added when category is \"other\". Topic must be added in the text-element.",
      "mustSupport" : true
    },
    {
      "id" : "Communication.topic.text",
      "path" : "Communication.topic.text",
      "short" : "Plain text representation of the concept.",
      "definition" : "The topic must be present.",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Communication.encounter",
      "path" : "Communication.encounter",
      "short" : "Shall contain a reference to an Encounter resource with a episodeOfCare-identifier, if the identifier is included in a previous message.",
      "mustSupport" : true
    },
    {
      "id" : "Communication.recipient",
      "path" : "Communication.recipient",
      "short" : "The recieving actor of the message",
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/CareTeam",
        "http://hl7.org/fhir/StructureDefinition/PractitionerRole"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Communication.sender",
      "path" : "Communication.sender",
      "max" : "0"
    },
    {
      "id" : "Communication.payload",
      "path" : "Communication.payload",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this.content"
        }],
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Communication.payload:string",
      "path" : "Communication.payload",
      "sliceName" : "string",
      "min" : 1,
      "max" : "*"
    },
    {
      "id" : "Communication.payload:string.extension",
      "path" : "Communication.payload.extension",
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
      "id" : "Communication.payload:string.extension:date",
      "path" : "Communication.payload.extension",
      "sliceName" : "date",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-datetime"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Communication.payload:string.extension:identifier",
      "path" : "Communication.payload.extension",
      "sliceName" : "identifier",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-payload-identifier"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Communication.payload:string.content[x]",
      "path" : "Communication.payload.content[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Communication.payload:string.content[x]:contentString",
      "path" : "Communication.payload.content[x]",
      "sliceName" : "contentString",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Communication.payload:attachment",
      "path" : "Communication.payload",
      "sliceName" : "attachment",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Communication.payload:attachment.extension",
      "path" : "Communication.payload.extension",
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
      "id" : "Communication.payload:attachment.extension:date",
      "path" : "Communication.payload.extension",
      "sliceName" : "date",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-datetime"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Communication.payload:attachment.extension:identifier",
      "path" : "Communication.payload.extension",
      "sliceName" : "identifier",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-carecommunication-payload-identifier"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Communication.payload:attachment.content[x]",
      "path" : "Communication.payload.content[x]",
      "type" : [{
        "code" : "Attachment"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Communication.payload:attachment.content[x].contentType",
      "path" : "Communication.payload.content[x].contentType",
      "short" : "The content type shall be present when the content is an attachment included in the data element.",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://ehealth.sundhed.dk/vs/ehealth-carecommunication-mimetypes"
      }
    },
    {
      "id" : "Communication.payload:attachment.content[x].data",
      "path" : "Communication.payload.content[x].data",
      "short" : "Shall be present and contain the base64 encoded content of the attachment.",
      "mustSupport" : true
    },
    {
      "id" : "Communication.payload:attachment.content[x].url",
      "path" : "Communication.payload.content[x].url",
      "short" : "Shall be present if the attachment is a link to a web page.",
      "mustSupport" : true
    },
    {
      "id" : "Communication.payload:attachment.content[x].title",
      "path" : "Communication.payload.content[x].title",
      "short" : "Note: it is not allowed for the system to automatically include '.filetype' in the title.",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Communication.payload:attachment.content[x].creation",
      "path" : "Communication.payload.content[x].creation",
      "short" : "The time the attachment was created",
      "mustSupport" : true
    }]
  }
}

```
