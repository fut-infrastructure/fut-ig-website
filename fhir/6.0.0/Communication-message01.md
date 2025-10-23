# message01 - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **message01**

## Example Communication: message01

version: 1; Last updated: 2021-07-15 07:06:55+0000

Profile: [ehealth-message](StructureDefinition-ehealth-message.md)

**Thread id**: b84a4a49-ede2-45eb-8400-eb2469a08f3e

**Title**: Sample title...

**Administrative status**: [Administrative Status activate](CodeSystem-ehealth-administrative-status.md#ehealth-administrative-status-activate): Ikke læst

**Priority**: routine

**Sender careteam**: [CareTeam Example CareTeam](CareTeam-108752.md)

**Restriction category**: None

**status**: Completed

**category**: Advisering

**medium**: NemSMS

**sent**: 2021-07-15 07:06:55+0000

**recipient**: [Nancy Ann Berggren (official) Ukendt, DoB Unknown ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#2512489996 (use: official, ))](Patient-102.md)

### Payloads

| | |
| :--- | :--- |
| - | **Content[x]** |
| * | MESSAGE PAYLOAD |



## Resource Content

```json
{
  "resourceType" : "Communication",
  "id" : "message01",
  "meta" : {
    "versionId" : "1",
    "lastUpdated" : "2021-07-15T07:06:55.257+00:00",
    "profile" : [
      "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-message"
    ]
  },
  "extension" : [
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-thread-id",
      "valueString" : "b84a4a49-ede2-45eb-8400-eb2469a08f3e"
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-title",
      "valueString" : "Sample title..."
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-administrative-status",
      "valueCoding" : {
        "system" : "http://ehealth.sundhed.dk/cs/administrative-status",
        "code" : "activate"
      }
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-priority",
      "valueCode" : "routine"
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-communication-senderCareTeam",
      "valueReference" : {
        "reference" : "CareTeam/108752"
      }
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-restriction-category",
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://ehealth.sundhed.dk/cs/restriction-category",
            "code" : "None"
          }
        ]
      }
    }
  ],
  "status" : "completed",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://ehealth.sundhed.dk/cs/message-category",
          "code" : "advice"
        }
      ]
    }
  ],
  "medium" : [
    {
      "coding" : [
        {
          "system" : "http://ehealth.sundhed.dk/cs/message-medium",
          "code" : "nemsms"
        }
      ]
    }
  ],
  "sent" : "2021-07-15T07:06:55+00:00",
  "recipient" : [
    {
      "reference" : "Patient/102"
    }
  ],
  "payload" : [
    {
      "contentString" : "MESSAGE PAYLOAD"
    }
  ]
}

```
