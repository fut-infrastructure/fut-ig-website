# Message ReasonCode - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Message ReasonCode**

## CodeSystem: Message ReasonCode 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/message-reasonCode | *Version*:6.0.0 |
| Active as of 2022-12-07 | *Computable Name*:MessageReasonCode |

 
Message ReasonCode 

 This Code system is referenced in the content logical definition of the following value sets: 

* [eHealth Message Reason Code](ValueSet-ehealth-message-reasonCode.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-message-reasonCode",
  "url" : "http://ehealth.sundhed.dk/cs/message-reasonCode",
  "version" : "6.0.0",
  "name" : "MessageReasonCode",
  "title" : "Message ReasonCode",
  "status" : "active",
  "experimental" : false,
  "date" : "2022-12-07T00:00:00+00:00",
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
  "description" : "Message ReasonCode",
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
      "code" : "EpisodeOfCareCreated",
      "display" : "EpisodeOfCare Created",
      "definition" : "EpisodeOfCare Created",
      "designation" : [
        {
          "language" : "da",
          "value" : "Oprettelse af telemedicinsk forløb"
        }
      ]
    },
    {
      "code" : "EpisodeOfCareCareTeamChange",
      "display" : "EpisodeOfCare CareTeam Change",
      "definition" : "EpisodeOfCare CareTeam Change",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ændring af tilknyttede teams for telemedicinsk forløb"
        }
      ]
    },
    {
      "code" : "EpisodeOfCareScheduledCareTeamChange",
      "display" : "EpisodeOfCare Scheduled CareTeam Change",
      "definition" : "EpisodeOfCare Scheduled CareTeam Change",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ændring af planlagte ændringer af tilknyttede teams for telemedicinsk forløb"
        }
      ]
    },
    {
      "code" : "EpisodeOfCareStatusChange",
      "display" : "EpisodeOfCare Status Change",
      "definition" : "EpisodeOfCare Status Change",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ændring af status for telemedicinsk forløb"
        }
      ]
    },
    {
      "code" : "EpisodeOfCareScheduledStatusChange",
      "display" : "EpisodeOfCare Scheduled Status Change",
      "definition" : "EpisodeOfCare Scheduled Status Change",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ændring af planlagte ændringer af status for telemedicinsk forløb"
        }
      ]
    },
    {
      "code" : "CarePlanCreated",
      "display" : "CarePlan Created",
      "definition" : "CarePlan Created",
      "designation" : [
        {
          "language" : "da",
          "value" : "Oprettelse af borgerknyttet plan"
        }
      ]
    },
    {
      "code" : "CarePlanCareTeamChange",
      "display" : "CarePlan CareTeam Change",
      "definition" : "CarePlan CareTeam Change",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ændring af tilknyttede teams for borgerknyttet plan"
        }
      ]
    },
    {
      "code" : "CarePlanScheduledCareTeamChange",
      "display" : "CarePlan Scheduled CareTeam Change",
      "definition" : "CarePlan Scheduled CareTeam Change",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ændring af planlagte ændringer af tilknyttede teams for borgerknyttet plan"
        }
      ]
    },
    {
      "code" : "CarePlanStatusChange",
      "display" : "CarePlan Status Change",
      "definition" : "CarePlan Status Change",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ændring af status for borgerknyttet plan"
        }
      ]
    },
    {
      "code" : "CarePlanScheduledStatusChange",
      "display" : "CarePlan Scheduled Status Change",
      "definition" : "CarePlan Scheduled Status Change",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ændring af planlagte ændringer af status for borgerknyttet plan"
        }
      ]
    },
    {
      "code" : "ReminderSubmitMeasurement",
      "display" : "Reminder Submit Measurement",
      "definition" : "Reminder Submit Measurement",
      "designation" : [
        {
          "language" : "da",
          "value" : "Påmindelse om at indsende måledata"
        }
      ]
    },
    {
      "code" : "AppointmentReminder",
      "display" : "Appointment Reminder",
      "definition" : "Appointment Reminder",
      "designation" : [
        {
          "language" : "da",
          "value" : "Påmindelse om aftale"
        }
      ]
    },
    {
      "code" : "VideoAppointmentReminder",
      "display" : "Video Appointment Reminder",
      "definition" : "Video Appointment Reminder",
      "designation" : [
        {
          "language" : "da",
          "value" : "Påmindelse om videoaftale"
        }
      ]
    }
  ]
}

```
