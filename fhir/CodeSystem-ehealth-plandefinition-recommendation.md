# PlanDefinition Recommendation - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PlanDefinition Recommendation**

## CodeSystem: PlanDefinition Recommendation 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/plandefinition-recommendation | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:PlanDefinitionRecommendation |

 
Plan Definition Recommendation 

 This Code system is referenced in the content logical definition of the following value sets: 

* [PlanDefinitionRecommendation](ValueSet-ehealth-plandefinition-recommendation.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-plandefinition-recommendation",
  "url" : "http://ehealth.sundhed.dk/cs/plandefinition-recommendation",
  "version" : "6.0.0",
  "name" : "PlanDefinitionRecommendation",
  "title" : "PlanDefinition Recommendation",
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
  "description" : "Plan Definition Recommendation",
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
          "valueDateTime" : "2020-03-24"
        }
      ]
    },
    {
      "code" : "Mandatory",
      "display" : "Mandatory",
      "definition" : "Mandatory"
    },
    {
      "code" : "Recommended",
      "display" : "Recommended",
      "definition" : "Recommended"
    },
    {
      "code" : "Confirmed",
      "display" : "Confirmed",
      "definition" : "Confirmed"
    },
    {
      "code" : "NotRecommended",
      "display" : "NotRecommended",
      "definition" : "NotRecommended"
    },
    {
      "code" : "Applicable",
      "display" : "Applicable",
      "definition" : "Applicable"
    },
    {
      "code" : "PhasedOut",
      "display" : "PhasedOut",
      "definition" : "PhasedOut"
    },
    {
      "code" : "Observed",
      "display" : "Observed",
      "definition" : "Observed"
    },
    {
      "code" : "Planned",
      "display" : "Planned",
      "definition" : "Planned"
    }
  ]
}

```
