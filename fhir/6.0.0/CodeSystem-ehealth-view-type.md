# View types - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **View types**

## CodeSystem: View types 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/view-type | *Version*:6.0.0 |
| Active as of 2021-10-15 | *Computable Name*:ViewType |

 
View types 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ViewType](ValueSet-ehealth-view-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-view-type",
  "url" : "http://ehealth.sundhed.dk/cs/view-type",
  "version" : "6.0.0",
  "name" : "ViewType",
  "title" : "View types",
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
  "description" : "View types",
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
      "code" : "interpretedview",
      "display" : "Interpreted view",
      "definition" : "interpretedView",
      "designation" : [
        {
          "language" : "da",
          "value" : "Fortolket visning"
        }
      ]
    }
  ]
}

```
