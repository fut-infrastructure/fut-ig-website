# group-appointment01 - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **group-appointment01**

## Example Appointment: group-appointment01



## Resource Content

```json
{
  "resourceType" : "Appointment",
  "id" : "group-appointment01",
  "meta" : {
    "versionId" : "3",
    "lastUpdated" : "2021-07-15T07:06:36.667+00:00",
    "profile" : [
      "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-appointment"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Location",
      "id" : "1",
      "name" : "Room 43b"
    }
  ],
  "extension" : [
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-responsible",
      "valueReference" : {
        "reference" : "CareTeam/108752"
      }
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-group-id",
      "valueString" : "42"
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-releasableResource",
      "valueBoolean" : true
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-responsible-organization",
      "valueReference" : {
        "reference" : "Organization/108752"
      }
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-creator",
      "valueReference" : {
        "reference" : "CareTeam/108752"
      }
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-performer",
      "valueReference" : {
        "reference" : "CareTeam/108752"
      }
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-performing-organization",
      "valueReference" : {
        "reference" : "Organization/108752"
      }
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-intendedAudience",
      "valueReference" : {
        "reference" : "Organization/8564"
      }
    },
    {
      "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-registration-deadline",
      "valueDateTime" : "2021-12-25T14:35:45-05:00"
    }
  ],
  "identifier" : [
    {
      "system" : "http://ehealth.sundhed.dk/id/ehealth-identifier",
      "value" : "5d1a3107-9fc8-4a6f-b66a-16fcf1937ade"
    },
    {
      "system" : "http://vdx.medcom.dk/meeting",
      "value" : "894e56b4-53bb-4004-8f06-6a4d7ad115ca"
    }
  ],
  "status" : "booked",
  "serviceType" : [
    {
      "coding" : [
        {
          "system" : "http://ehealth.sundhed.dk/cs/appointment-servicetype",
          "code" : "group"
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
      ]
    }
  ],
  "priority" : 1,
  "description" : "Forundersøgelse",
  "start" : "2021-07-16T09:00:00.000+00:00",
  "end" : "2021-07-16T11:00:00.000+00:00",
  "comment" : "Forundersøgelse for grå stær hos Trifork.\n Patienten møder op hos Trifork med udfyldt spørgeskema",
  "participant" : [
    {
      "extension" : [
        {
          "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-assigning-careteam",
          "valueReference" : {
            "reference" : "CareTeam/108752"
          }
        },
        {
          "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-ext-careteam",
          "valueReference" : {
            "reference" : "CareTeam/108752"
          }
        }
      ],
      "type" : [
        {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v3-ParticipationType",
              "code" : "PART",
              "display" : "Participation"
            }
          ]
        }
      ],
      "required" : "required",
      "status" : "accepted"
    },
    {
      "extension" : [
        {
          "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-assigning-careteam",
          "valueReference" : {
            "reference" : "CareTeam/108752"
          }
        },
        {
          "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-ext-careteam",
          "valueReference" : {
            "reference" : "CareTeam/108752"
          }
        }
      ],
      "actor" : {
        "reference" : "Practitioner/107302",
        "display" : "actor1 display text"
      },
      "required" : "required",
      "status" : "tentative"
    },
    {
      "extension" : [
        {
          "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-assigning-careteam",
          "valueReference" : {
            "reference" : "CareTeam/108752"
          }
        },
        {
          "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-ext-careteam",
          "valueReference" : {
            "reference" : "CareTeam/108752"
          }
        }
      ],
      "actor" : {
        "reference" : "Patient/102"
      },
      "required" : "required",
      "status" : "accepted"
    },
    {
      "extension" : [
        {
          "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-assigning-careteam",
          "valueReference" : {
            "reference" : "CareTeam/108752"
          }
        },
        {
          "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-ext-careteam",
          "valueReference" : {
            "reference" : "CareTeam/108752"
          }
        }
      ],
      "actor" : {
        "reference" : "#1"
      },
      "required" : "required",
      "status" : "accepted"
    }
  ]
}

```
