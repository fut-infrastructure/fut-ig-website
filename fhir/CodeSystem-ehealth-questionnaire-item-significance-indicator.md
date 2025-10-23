# Questionnaire Item Significance Indicator - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire Item Significance Indicator**

## CodeSystem: Questionnaire Item Significance Indicator 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/questionnaire-item-significance-indicator | *Version*:6.0.0 |
| Active as of 2021-09-16 | *Computable Name*:QuestionnaireItemSignificanceIndicator |

 
Questionnaire Item Significance Indicator 

 This Code system is referenced in the content logical definition of the following value sets: 

* [QuestionnaireItemSignificanceIndicator](ValueSet-ehealth-questionnaire-significance-indicator.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-questionnaire-item-significance-indicator",
  "url" : "http://ehealth.sundhed.dk/cs/questionnaire-item-significance-indicator",
  "version" : "6.0.0",
  "name" : "QuestionnaireItemSignificanceIndicator",
  "title" : "Questionnaire Item Significance Indicator",
  "status" : "active",
  "experimental" : false,
  "date" : "2021-09-16T00:00:00+00:00",
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
  "description" : "Questionnaire Item Significance Indicator",
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
      "code" : "green",
      "display" : "Green",
      "definition" : "Green significance indicator",
      "designation" : [
        {
          "language" : "da",
          "value" : "Grøn"
        }
      ]
    },
    {
      "code" : "yellow",
      "display" : "Yellow",
      "definition" : "Yellow significance indicator",
      "designation" : [
        {
          "language" : "da",
          "value" : "Gul"
        }
      ]
    },
    {
      "code" : "red",
      "display" : "Red",
      "definition" : "Red significance indicator",
      "designation" : [
        {
          "language" : "da",
          "value" : "Rød"
        }
      ]
    }
  ]
}

```
