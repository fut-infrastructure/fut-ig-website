# Material Category - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Material Category**

## CodeSystem: Material Category 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/material-category | *Version*:6.0.0 |
| Active as of 2025-09-02 | *Computable Name*:MaterialCategory |

 
Material Category 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DocumentCategory](ValueSet-ehealth-document-category.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-material-category",
  "url" : "http://ehealth.sundhed.dk/cs/material-category",
  "version" : "6.0.0",
  "name" : "MaterialCategory",
  "title" : "Material Category",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-09-02",
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
  "description" : "Material Category",
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
      "code" : "general-material",
      "display" : "General Material",
      "definition" : "Material containing general purpose information without patient specific information."
    },
    {
      "code" : "patient-specific-material",
      "display" : "Patient Specific Material",
      "definition" : "Material containing patient specific information."
    }
  ]
}

```
