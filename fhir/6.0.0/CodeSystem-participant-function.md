# Participant Function - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Participant Function**

## CodeSystem: Participant Function 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/participant-function | *Version*:6.0.0 |
| Active as of 2024-09-02 | *Computable Name*:ParticipantFunction |

 
Participant Function. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ParticipantFunction](ValueSet-participant-function.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "participant-function",
  "url" : "http://ehealth.sundhed.dk/cs/participant-function",
  "version" : "6.0.0",
  "name" : "ParticipantFunction",
  "title" : "Participant Function",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-09-02T00:00:00+00:00",
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
  "description" : "Participant Function.",
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
  "content" : "complete",
  "concept" : [
    {
      "code" : "Primary Contact",
      "display" : "Primary contact",
      "definition" : "Primary contact",
      "designation" : [
        {
          "language" : "da",
          "value" : "Primær kontaktperson"
        }
      ]
    },
    {
      "code" : "Secondary Contact",
      "display" : "Secondary contact",
      "definition" : "Secondary contact",
      "designation" : [
        {
          "language" : "da",
          "value" : "Sekundær kontaktperson"
        }
      ]
    },
    {
      "code" : "Default-careteam-for-task-and-communication",
      "display" : "Default careteam for task and communication",
      "definition" : "Default careteam for task and communication",
      "designation" : [
        {
          "language" : "da",
          "value" : "Standard careteam for opgaver og kommunikation"
        }
      ]
    }
  ]
}

```
