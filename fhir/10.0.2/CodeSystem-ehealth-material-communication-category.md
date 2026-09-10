# Material Communication Category - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Material Communication Category**

## CodeSystem: Material Communication Category 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/material-communication-category | *Version*:10.0.2 |
| Active as of 2019-01-29 | *Computable Name*:MaterialCommunicationCategory |

 
The set of possible material-communication categories 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MaterialCommunicationCategory](ValueSet-material-communication-category.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-material-communication-category",
  "url" : "http://ehealth.sundhed.dk/cs/material-communication-category",
  "version" : "10.0.2",
  "name" : "MaterialCommunicationCategory",
  "title" : "Material Communication Category",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "The set of possible material-communication categories",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [{
    "code" : "material-assignment",
    "display" : "Material assignment"
  }]
}

```
