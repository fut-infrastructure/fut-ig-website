# EHealthDocumentReference Type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EHealthDocumentReference Type**

## ValueSet: EHealthDocumentReference Type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-document-reference-type | *Version*:6.0.0 |
| Active as of 2025-09-02 | *Computable Name*:EHealthDocumentReferenceType |

 
EHealthDocumentReference Type ValueSet 

 **References** 

* [ehealth-documentreference](StructureDefinition-ehealth-documentreference.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on:

* [codesystem EHealthDocumentReference Type v6.0.0 (CodeSystem)](CodeSystem-ehealth-document-reference-type.md)
* Loinc v2.81

This value set contains 2 concepts

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-document-reference-type",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-document-reference-type",
  "version" : "6.0.0",
  "name" : "EHealthDocumentReferenceType",
  "title" : "EHealthDocumentReference Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-09-02T00:00:00+00:00",
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
  "description" : "EHealthDocumentReference Type ValueSet",
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
  "compose" : {
    "include" : [
      {
        "system" : "http://ehealth.sundhed.dk/cs/ehealth-document-reference-type"
      },
      {
        "system" : "http://loinc.org",
        "concept" : [
          {
            "code" : "69730-0",
            "display" : "Instructions",
            "designation" : [
              {
                "language" : "da",
                "value" : "Instruktioner"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
