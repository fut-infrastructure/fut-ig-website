# Action guidance types - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Action guidance types**

## CodeSystem: Action guidance types 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/action-guidance-types | *Version*:6.0.0 |
| Active as of 2021-10-15 | *Computable Name*:ActionGuidanceType |

 
Action guidance types 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ActionGuidanceTypes](ValueSet-ehealth-action-guidance-types.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-action-guidance-types",
  "url" : "http://ehealth.sundhed.dk/cs/action-guidance-types",
  "version" : "6.0.0",
  "name" : "ActionGuidanceType",
  "title" : "Action guidance types",
  "status" : "active",
  "experimental" : false,
  "date" : "2021-10-15T00:00:00+00:00",
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
  "description" : "Action guidance types",
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
      "code" : "actionguidance",
      "display" : "Action guidance display",
      "definition" : "Action guidance",
      "designation" : [
        {
          "language" : "da",
          "value" : "Handlingsvejledning"
        }
      ]
    }
  ]
}

```
