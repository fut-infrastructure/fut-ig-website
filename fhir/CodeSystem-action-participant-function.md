# Action Participant Function - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Action Participant Function**

## CodeSystem: Action Participant Function 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org/fhir/action-participant-function | *Version*:6.0.0 | |
| *Standards status:*[Trial-use](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 3 | *Computable Name*:ActionParticipantFunction |
| *Other Identifiers:*OID:2.16.840.1.113883.4.642.4.1946 | | |

 
The function performed by the participant for the action. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MaterialAssignmentParticipantFunction](ValueSet-material-assignment-participant-function.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "action-participant-function",
  "meta" : {
    "lastUpdated" : "2023-03-26T15:21:02.749+11:00",
    "profile" : [
      "http://hl7.org/fhir/StructureDefinition/shareablecodesystem"
    ]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-wg",
      "valueCode" : "cds"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "trial-use"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 3
    }
  ],
  "url" : "http://hl7.org/fhir/action-participant-function",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.840.1.113883.4.642.4.1946"
    }
  ],
  "version" : "6.0.0",
  "name" : "ActionParticipantFunction",
  "title" : "Action Participant Function",
  "status" : "active",
  "experimental" : false,
  "date" : "2021-01-05T10:01:24+11:00",
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
  "description" : "The function performed by the participant for the action.",
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
  "valueSet" : "http://hl7.org/fhir/ValueSet/action-participant-function",
  "content" : "complete",
  "concept" : [
    {
      "code" : "performer",
      "display" : "Performer",
      "definition" : "The participant is the performer of the action."
    },
    {
      "code" : "author",
      "display" : "Author",
      "definition" : "The participant is the author of the result of the action."
    },
    {
      "code" : "reviewer",
      "display" : "Reviewer",
      "definition" : "The participant is reviewing the result of the action."
    },
    {
      "code" : "witness",
      "display" : "Witness",
      "definition" : "The participant is a witness to the action being performed."
    }
  ]
}

```
