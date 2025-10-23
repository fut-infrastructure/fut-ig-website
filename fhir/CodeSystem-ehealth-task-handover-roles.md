# Task Handover Roles - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Task Handover Roles**

## CodeSystem: Task Handover Roles 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/task-handover-roles | *Version*:6.0.0 |
| Active as of 2024-10-21 | *Computable Name*:TaskHandoverRoles |

 
Task Handover Roles 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-task-handover-roles",
  "url" : "http://ehealth.sundhed.dk/cs/task-handover-roles",
  "version" : "6.0.0",
  "name" : "TaskHandoverRoles",
  "title" : "Task Handover Roles",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-10-21T00:00:00+00:00",
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
  "description" : "Task Handover Roles",
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
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "inviting-entity",
      "display" : "Entity inviting another entity to partake in involvement and/or responsibility",
      "definition" : "Entity inviting another entity to partake in involvement and/or responsibility",
      "designation" : [
        {
          "language" : "da",
          "value" : "Part som inviterer anden part til at deltage i tilknyttelse og/eller ansvar"
        }
      ]
    },
    {
      "code" : "arriving-entity",
      "display" : "Entity entering involvement and/or responsibility",
      "definition" : "Entity entering involvement and/or responsibility",
      "designation" : [
        {
          "language" : "da",
          "value" : "Part som træder ind i tilknyttelse og/eller ansvar"
        }
      ]
    },
    {
      "code" : "leaving-entity",
      "display" : "Entity leaving involvement and/or responsibility",
      "definition" : "Entity leaving involvement and/or responsibility",
      "designation" : [
        {
          "language" : "da",
          "value" : "Part som forlader tilknyttelse og/eller ansvar"
        }
      ]
    },
    {
      "code" : "remaining-entity",
      "display" : "Entity continuing involvement and/or responsibility",
      "definition" : "Entity continuing involvement and/or responsibility",
      "designation" : [
        {
          "language" : "da",
          "value" : "Part som fortsætter tilknyttelse og/eller ansvar"
        }
      ]
    },
    {
      "code" : "informed-entity",
      "display" : "Entity informed about planned or effectuated change in involvement and/or responsibility",
      "definition" : "Entity informed about planned or effectuated change in involvement and/or responsibility",
      "designation" : [
        {
          "language" : "da",
          "value" : "Part informeret om (planlagt) ændring i tilknyttelse og/eller ansvar"
        }
      ]
    }
  ]
}

```
