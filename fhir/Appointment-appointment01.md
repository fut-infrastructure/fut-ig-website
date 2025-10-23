# appointment01 - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **appointment01**

## Example Appointment: appointment01

Profile: [ehealth-appointment](StructureDefinition-ehealth-appointment.md)

**Performing organization**: [Organization 63785662-18ad-4896-b960-505e94bdc5c4](Organization-108752.md)

**Responsible organization**: [Organization 63785662-18ad-4896-b960-505e94bdc5c4](Organization-108752.md)

**Responsible**: [CareTeam Aarhus](CareTeam-42.md)

**Legal basis**: Serviceloven

**status**: Proposed

**serviceType**: A regular appointment

**appointmentType**: A follow up visit from a previous appointment

**reasonCode**: Clinical Review

**supportingInformation**: [EpisodeOfCare: extension = ->Organization 63785662-18ad-4896-b960-505e94bdc5c4; status = planned; period = 2023-01-01 00:00:00+0000 --> (ongoing)](EpisodeOfCare-42.md)

> **participant****actor**:[Tove Jensen](Practitioner-42.md)**status**: Needs Action

> **participant****actor**:[Practitioner Example2 Practitioner](Practitioner-123.md)**status**: Needs Action

> **participant****Careteam**:[CareTeam Aarhus](CareTeam-42.md)**type**:attender**status**: Needs Action



## Resource Content

```json
{
  "resourceType" : "Appointment",
  "id" : "appointment01",
  "meta" : {
    "profile" : [
      "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-appointment"
    ]
  },
  "extension" : [
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-performing-organization",
      "valueReference" : {
        "reference" : "Organization/108752"
      }
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-responsible-organization",
      "valueReference" : {
        "reference" : "Organization/108752"
      }
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-responsible",
      "valueReference" : {
        "reference" : "CareTeam/42",
        "display" : "CareTeam Aarhus"
      }
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-legalBasis",
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://ehealth.sundhed.dk/cs/jurisdiction",
            "code" : "service-act"
          }
        ]
      }
    }
  ],
  "status" : "proposed",
  "serviceType" : [
    {
      "coding" : [
        {
          "system" : "http://ehealth.sundhed.dk/cs/appointment-servicetype",
          "code" : "regular"
        }
      ]
    }
  ],
  "appointmentType" : {
    "coding" : [
      {
        "system" : "http://ehealth.sundhed.dk/cs/appointmenttype-codes",
        "code" : "FOLLOWUP"
      }
    ]
  },
  "reasonCode" : [
    {
      "coding" : [
        {
          "system" : "http://ehealth.sundhed.dk/cs/appointment-reason",
          "code" : "412776001"
        }
      ],
      "text" : "Clinical Review"
    }
  ],
  "supportingInformation" : [
    {
      "reference" : "EpisodeOfCare/42"
    }
  ],
  "participant" : [
    {
      "actor" : {
        "reference" : "Practitioner/42",
        "display" : "Tove Jensen"
      },
      "status" : "needs-action"
    },
    {
      "actor" : {
        "reference" : "Practitioner/123"
      },
      "status" : "needs-action"
    },
    {
      "extension" : [
        {
          "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-ext-careteam",
          "valueReference" : {
            "reference" : "CareTeam/42",
            "display" : "CareTeam Aarhus"
          }
        }
      ],
      "type" : [
        {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v3-ParticipationType",
              "code" : "ATND"
            }
          ]
        }
      ],
      "status" : "needs-action"
    }
  ]
}

```
