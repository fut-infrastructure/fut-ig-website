# Document Type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Document Type**

## CodeSystem: Document Type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/document-type | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:DocumentType |

 
Document Type 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-document-type",
  "url" : "http://ehealth.sundhed.dk/cs/document-type",
  "version" : "6.0.0",
  "name" : "DocumentType",
  "title" : "Document Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29",
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
  "description" : "Document Type",
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
      "designation" : [
        {
          "language" : "da",
          "value" : "Midlertidig værdi"
        }
      ],
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2019-09-18"
        }
      ]
    },
    {
      "code" : "TBD2",
      "display" : "Example value - Under construction",
      "definition" : "Example value - Under construction",
      "designation" : [
        {
          "language" : "da",
          "value" : "Midlertidig værdi"
        }
      ],
      "property" : [
        {
          "code" : "deprecated",
          "valueDateTime" : "2019-09-18"
        }
      ]
    }
  ]
}

```
