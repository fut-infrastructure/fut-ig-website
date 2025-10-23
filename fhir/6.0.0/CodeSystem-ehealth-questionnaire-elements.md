# Questionnaire Elements - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire Elements**

## CodeSystem: Questionnaire Elements 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/questionnaire-elements | *Version*:6.0.0 |
| Active as of 2023-09-08 | *Computable Name*:Questionnaire_Elements |

 
Questionnaire elements 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Questionnaire_Elements](ValueSet-ehealth-questionnaire-elements.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-questionnaire-elements",
  "url" : "http://ehealth.sundhed.dk/cs/questionnaire-elements",
  "version" : "6.0.0",
  "name" : "Questionnaire_Elements",
  "title" : "Questionnaire Elements",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-09-08T00:00:00+00:00",
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
  "description" : "Questionnaire elements",
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
      "code" : "questionnaireID",
      "display" : "Questionnaire ID",
      "definition" : "Questionnaire ID",
      "designation" : [
        {
          "language" : "da",
          "value" : "Spørgeskema ID"
        }
      ]
    },
    {
      "code" : "condition",
      "display" : "Condition",
      "definition" : "Condition",
      "designation" : [
        {
          "language" : "da",
          "value" : "Betingelse"
        }
      ]
    },
    {
      "code" : "group",
      "display" : "Questionnaire Group",
      "definition" : "Questionnaire Group",
      "designation" : [
        {
          "language" : "da",
          "value" : "Spørgsmålsgruppe"
        }
      ]
    },
    {
      "code" : "question",
      "display" : "Question",
      "definition" : "Question",
      "designation" : [
        {
          "language" : "da",
          "value" : "Spørgsmål"
        }
      ]
    },
    {
      "code" : "answer",
      "display" : "Answer",
      "definition" : "Answer",
      "designation" : [
        {
          "language" : "da",
          "value" : "Svar"
        }
      ]
    }
  ]
}

```
