# Document Type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Document Type**

## ValueSet: Document Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/document-type | *Version*:6.0.0 |
| Active as of 2019-02-08 | *Computable Name*:DocumentType |

 
Document Type value set. 

 **References** 

* [ehealth-composition](StructureDefinition-ehealth-composition.md)
* [ehealth-transformation-documentreference](StructureDefinition-ehealth-transformation-documentreference.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on:

* Loinc v2.81
* [codesystem MedCom Message Codes v6.0.0 (CodeSystem)](CodeSystem-urn-oid-1.2.208.184.100.1.md)
* [valueset DK_IHE_TypeCode_VS v6.0.0 (ValueSet)](ValueSet-dk-ihe-typecode-vs.md)

This value set contains 16 concepts

**Additional Designations and Language Displays**

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
  "id" : "ehealth-document-type",
  "url" : "http://ehealth.sundhed.dk/vs/document-type",
  "version" : "6.0.0",
  "name" : "DocumentType",
  "title" : "Document Type",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-08T00:00:00+00:00",
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
  "description" : "Document Type value set.",
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
        "valueSet" : [
          "http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-typecode-vs"
        ]
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
          },
          {
            "code" : "48766-0",
            "display" : "Information source",
            "designation" : [
              {
                "language" : "da",
                "value" : "Informationskilde"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
