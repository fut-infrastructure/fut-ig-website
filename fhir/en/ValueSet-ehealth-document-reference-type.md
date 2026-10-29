# EHealthDocumentReference Type - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EHealthDocumentReference Type**

## ValueSet: EHealthDocumentReference Type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-document-reference-type | *Version*:11.0.3 |
| Active as of 2025-09-02 | *Computable Name*:EHealthDocumentReferenceType |

 
EHealthDocumentReference Type ValueSet 

 **References** 

* [ehealth-documentreference](StructureDefinition-ehealth-documentreference.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-document-reference-type",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-document-reference-type",
  "version" : "11.0.3",
  "name" : "EHealthDocumentReferenceType",
  "title" : "EHealthDocumentReference Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-09-02T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "EHealthDocumentReference Type ValueSet",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-document-reference-type"
    },
    {
      "system" : "http://loinc.org",
      "concept" : [{
        "code" : "69730-0",
        "display" : "Instructions",
        "designation" : [{
          "language" : "da",
          "value" : "Instruktioner"
        }]
      }]
    }]
  }
}

```
