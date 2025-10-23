# Questionnaire Recommendation - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire Recommendation**

## CodeSystem: Questionnaire Recommendation 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/questionnaire-recommendation | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:QuestionnaireRecommendation |

 
Questionnaire Recommendation 

 This Code system is referenced in the content logical definition of the following value sets: 

* [QuestionnaireRecommendation](ValueSet-ehealth-questionnaire-recommendation.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-questionnaire-recommendation",
  "url" : "http://ehealth.sundhed.dk/cs/questionnaire-recommendation",
  "version" : "6.0.0",
  "name" : "QuestionnaireRecommendation",
  "title" : "Questionnaire Recommendation",
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
  "description" : "Questionnaire Recommendation",
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
      "code" : "TBD2",
      "display" : "Example value2 - Under construction",
      "definition" : "Example value2 - Under construction",
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2020-02-03"
        }
      ]
    },
    {
      "code" : "Obligatory",
      "display" : "Obligatory",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Mandatory"
        },
        {
          "language" : "da",
          "value" : "Obligatorisk"
        }
      ]
    },
    {
      "code" : "Recommended",
      "display" : "Recommended",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Recommended"
        },
        {
          "language" : "da",
          "value" : "Anbefalet"
        }
      ]
    },
    {
      "code" : "Sustained",
      "display" : "Sustained",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Sustained"
        },
        {
          "language" : "da",
          "value" : "Opretholdt"
        }
      ]
    },
    {
      "code" : "Deprecated",
      "display" : "Deprecated",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Deprecated"
        },
        {
          "language" : "da",
          "value" : "Frarådes"
        }
      ]
    },
    {
      "code" : "Applicable",
      "display" : "Applicable",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Applicable"
        },
        {
          "language" : "da",
          "value" : "Anvendelig"
        }
      ]
    },
    {
      "code" : "BeingPhasedOut",
      "display" : "BeingPhasedOut",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "BeingPhasedOut"
        },
        {
          "language" : "da",
          "value" : "Udfases"
        }
      ]
    },
    {
      "code" : "Observed",
      "display" : "Observed",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Observed"
        },
        {
          "language" : "da",
          "value" : "Observeres"
        }
      ]
    },
    {
      "code" : "Planned",
      "display" : "Planned",
      "designation" : [
        {
          "language" : "en-US",
          "value" : "Planned"
        },
        {
          "language" : "da",
          "value" : "Planlagt"
        }
      ]
    }
  ]
}

```
