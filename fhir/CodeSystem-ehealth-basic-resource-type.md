# Basic resource type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Basic resource type**

## CodeSystem: Basic resource type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/basic-resource-type | *Version*:6.0.0 |
| Active as of 2021-10-15 | *Computable Name*:BasicResourceType |

 
Basic resource type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BasicResourceType](ValueSet-ehealth-basic-resource-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-basic-resource-type",
  "url" : "http://ehealth.sundhed.dk/cs/basic-resource-type",
  "version" : "6.0.0",
  "name" : "BasicResourceType",
  "title" : "Basic resource type",
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
  "description" : "Basic resource type",
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
      "display" : "Action guidance",
      "designation" : [
        {
          "language" : "da",
          "value" : "Handlingsvejledning"
        }
      ]
    },
    {
      "code" : "view",
      "display" : "View",
      "designation" : [
        {
          "language" : "da",
          "value" : "Visning"
        }
      ]
    }
  ]
}

```
