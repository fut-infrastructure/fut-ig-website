# Participant Function - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Participant Function**

## CodeSystem: Participant Function 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/participant-function | *Version*:10.0.2 |
| Active as of 2024-09-02 | *Computable Name*:ParticipantFunction |

 
Participant Function. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Participant Function](ValueSet-participant-function.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "participant-function",
  "url" : "http://ehealth.sundhed.dk/cs/participant-function",
  "version" : "10.0.2",
  "name" : "ParticipantFunction",
  "title" : "Participant Function",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-09-02T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Participant Function.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "content" : "complete",
  "concept" : [{
    "code" : "Primary Contact",
    "display" : "Primary contact",
    "definition" : "Primary contact",
    "designation" : [{
      "language" : "da",
      "value" : "Primær kontaktperson"
    }]
  },
  {
    "code" : "Secondary Contact",
    "display" : "Secondary contact",
    "definition" : "Secondary contact",
    "designation" : [{
      "language" : "da",
      "value" : "Sekundær kontaktperson"
    }]
  },
  {
    "code" : "Default-careteam-for-task-and-communication",
    "display" : "Default careteam for task and communication",
    "definition" : "Default careteam for task and communication",
    "designation" : [{
      "language" : "da",
      "value" : "Standard careteam for opgaver og kommunikation"
    }]
  },
  {
    "code" : "administrative",
    "display" : "Administrative",
    "definition" : "Participant has administrative function of maintaining EpisodeOfCare and/or CarePlan",
    "designation" : [{
      "language" : "da",
      "value" : "administrerende"
    }]
  },
  {
    "code" : "monitoring",
    "display" : "Monitoring",
    "definition" : "Participant monitors Patient's submissions and adherence to plan",
    "designation" : [{
      "language" : "da",
      "value" : "monitorerende"
    }]
  },
  {
    "code" : "supporting",
    "display" : "Supporting",
    "definition" : "Participant supports other participants, for instance by setting up and adjusting EpisodeOfCare and/or CarePlan",
    "designation" : [{
      "language" : "da",
      "value" : "supporterende"
    }]
  },
  {
    "code" : "informed",
    "display" : "Informed",
    "definition" : "Participant is involved to stay informed and expected to perform few if any actions",
    "designation" : [{
      "language" : "da",
      "value" : "informeret"
    }]
  }]
}

```
