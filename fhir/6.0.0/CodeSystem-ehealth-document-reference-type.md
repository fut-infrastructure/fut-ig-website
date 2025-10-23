# EHealthDocumentReference Type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EHealthDocumentReference Type**

## CodeSystem: EHealthDocumentReference Type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/ehealth-document-reference-type | *Version*:6.0.0 |
| Active as of 2025-09-02 | *Computable Name*:EHealthDocumentReferenceType |

 
EHealthDocumentReference Type CodeSystem 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EHealthDocumentReferenceType](ValueSet-ehealth-document-reference-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-document-reference-type",
  "url" : "http://ehealth.sundhed.dk/cs/ehealth-document-reference-type",
  "version" : "6.0.0",
  "name" : "EHealthDocumentReferenceType",
  "title" : "EHealthDocumentReference Type",
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
  "description" : "EHealthDocumentReference Type CodeSystem",
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
      "code" : "material",
      "display" : "Material",
      "definition" : "Healthcare material."
    }
  ]
}

```
