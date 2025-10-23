# Overview usage mode - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Overview usage mode**

## CodeSystem: Overview usage mode 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/overviewUsageMode | *Version*:6.0.0 |
| Active as of 2022-03-17 | *Computable Name*:overviewUsageMode |

 
Identifies whether the specified element and/or results of the element should appear in overview or table presentation. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [OverviewUsageMode](ValueSet-ehealth-overviewUsageMode.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-overviewUsageMode",
  "url" : "http://ehealth.sundhed.dk/cs/overviewUsageMode",
  "version" : "6.0.0",
  "name" : "overviewUsageMode",
  "title" : "Overview usage mode",
  "status" : "active",
  "experimental" : false,
  "date" : "2022-03-17T00:00:00+00:00",
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
  "description" : "Identifies whether the specified element and/or results of the element should appear in overview or table presentation.",
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
      "code" : "no-display",
      "display" : "Do not display",
      "definition" : "Do not render in overview display",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ingen visning"
        }
      ]
    },
    {
      "code" : "display-all",
      "display" : "Display all items",
      "definition" : "Render all questions and answers regardless of Questionnaire settings",
      "designation" : [
        {
          "language" : "da",
          "value" : "Vis alle spørgsmål og svar"
        }
      ]
    },
    {
      "code" : "display-item",
      "display" : "Display item",
      "definition" : "Render item in overview display",
      "designation" : [
        {
          "language" : "da",
          "value" : "Vis spørgsmål og svar"
        }
      ]
    },
    {
      "code" : "display-result",
      "display" : "Display result",
      "definition" : "Render result for item in overview display",
      "designation" : [
        {
          "language" : "da",
          "value" : "Vis måling"
        }
      ]
    },
    {
      "code" : "no-item-display",
      "display" : "Do not render item in overview display",
      "definition" : "Do not render item in overview display",
      "designation" : [
        {
          "language" : "da",
          "value" : "Vis ikke elementet i oversigtsvisning"
        }
      ],
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2022-03-17"
        }
      ]
    },
    {
      "code" : "no-result-display",
      "display" : "Do not render result for item in overview display",
      "definition" : "Do not render result for item in overview display",
      "designation" : [
        {
          "language" : "da",
          "value" : "Vis ikke måledata for elementet i oversigtsvisning"
        }
      ],
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2022-03-17"
        }
      ]
    }
  ]
}

```
