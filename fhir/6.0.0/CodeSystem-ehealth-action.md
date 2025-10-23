# Action - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Action**

## CodeSystem: Action 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/action | *Version*:6.0.0 |
| Active as of 2021-10-22 | *Computable Name*:Action |

 
Action Code 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Action](ValueSet-ehealth-action.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-action",
  "url" : "http://ehealth.sundhed.dk/cs/action",
  "version" : "6.0.0",
  "name" : "Action",
  "title" : "Action",
  "status" : "active",
  "experimental" : false,
  "date" : "2021-10-22T13:31:31+00:00",
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
  "description" : "Action Code",
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
      "code" : "status-on-hold-to-active",
      "display" : "Update status from on-hold to active",
      "definition" : "Update status from on-hold to active",
      "designation" : [
        {
          "language" : "da",
          "value" : "Opdater status fra pauseret til aktiv"
        }
      ]
    }
  ]
}

```
