# Activity Definition Codes - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Activity Definition Codes**

## CodeSystem: Activity Definition Codes 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/activitydefinition-code | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:ActivityDefinitionCodes |

 
Kinds of activities 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ActivityDefinitionCode](ValueSet-ehealth-activitydefinition-code.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-activitydefinition-code",
  "url" : "http://ehealth.sundhed.dk/cs/activitydefinition-code",
  "version" : "6.0.0",
  "name" : "ActivityDefinitionCodes",
  "title" : "Activity Definition Codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29T00:00:00+00:00",
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
  "description" : "Kinds of activities",
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
  "property" : [
    {
      "code" : "deprecated",
      "uri" : "http://hl7.org/fhir/concept-properties#deprecated",
      "description" : "Indicates that the concept is deprecated and should not be used",
      "type" : "dateTime"
    }
  ],
  "concept" : [
    {
      "code" : "TBD",
      "display" : "Example value - Under construction",
      "definition" : "Example value - Under construction",
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2020-02-03"
        }
      ]
    },
    {
      "code" : "229057006",
      "display" : "Møder",
      "definition" : "Meetings(procedure)",
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2020-03-24"
        }
      ]
    },
    {
      "code" : "229058001",
      "display" : "Sagskonferencer",
      "definition" : "Case-conference",
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2020-03-24"
        }
      ]
    },
    {
      "code" : "409073007",
      "display" : "Instruktion",
      "definition" : "Instruction",
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2020-03-24"
        }
      ]
    },
    {
      "code" : "273586006",
      "display" : "Master Questionnaire",
      "definition" : "Master-questionnaire(DK)",
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2020-03-24"
        }
      ]
    },
    {
      "code" : "HA",
      "display" : "Head activity",
      "definition" : "Head activity",
      "designation" : [
        {
          "language" : "da",
          "value" : "Hovedaktivitet"
        }
      ]
    },
    {
      "code" : "SQ",
      "display" : "Situation quality assessment",
      "definition" : "Assessment of situation quality",
      "designation" : [
        {
          "language" : "da",
          "value" : "Bestemmelse af situationskvalitet"
        }
      ]
    },
    {
      "code" : "QR",
      "display" : "Usage quality assessment",
      "definition" : "Assessment of usage quality",
      "designation" : [
        {
          "language" : "da",
          "value" : "Bestemmelse af betjeningskvalitet"
        }
      ]
    },
    {
      "code" : "SDG",
      "display" : "Same device group",
      "definition" : "Same device group",
      "designation" : [
        {
          "language" : "da",
          "value" : "Samme udstyrsgruppe"
        }
      ]
    }
  ]
}

```
