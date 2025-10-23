# Goal Description - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Goal Description**

## CodeSystem: Goal Description 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/goal-description | *Version*:6.0.0 |
| Active as of 2021-01-13 | *Computable Name*:GoalDescription |

 
Goal Description 

 This Code system is referenced in the content logical definition of the following value sets: 

* [GoalDescription](ValueSet-ehealth-goal-description.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-goal-description",
  "url" : "http://ehealth.sundhed.dk/cs/goal-description",
  "version" : "6.0.0",
  "name" : "GoalDescription",
  "title" : "Goal Description",
  "status" : "active",
  "experimental" : false,
  "date" : "2021-01-13T00:00:00+00:00",
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
  "description" : "Goal Description",
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
      "code" : "reference-value",
      "display" : "Reference value for relative reference ranges",
      "definition" : "Reference value for relative reference ranges",
      "designation" : [
        {
          "language" : "da",
          "value" : "referenceværdi"
        }
      ]
    }
  ]
}

```
