# Action Type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Action Type**

## CodeSystem: Action Type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/action-type | *Version*:6.0.0 |
| Active as of 2021-10-22 | *Computable Name*:ActionType |

 
Action type 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-action-type",
  "url" : "http://ehealth.sundhed.dk/cs/action-type",
  "version" : "6.0.0",
  "name" : "ActionType",
  "title" : "Action Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2021-10-22T13:45:00+00:00",
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
  "description" : "Action type",
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
      "code" : "trigger",
      "display" : "Action trigger",
      "definition" : "flag set if servicerequest is part of an action",
      "designation" : [
        {
          "language" : "da",
          "value" : "Flag sættes hvis servicerequest indgår i en action"
        }
      ]
    }
  ]
}

```
