# Document Type - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Document Type**

## ValueSet: Document Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/document-type | *Version*:11.0.2 |
| Active as of 2019-02-08 | *Computable Name*:DocumentType |

 
Document Type value set. 

 **References** 

* [ehealth-composition](StructureDefinition-ehealth-composition.md)
* [ehealth-transformation-documentreference](StructureDefinition-ehealth-transformation-documentreference.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-document-type",
  "url" : "http://ehealth.sundhed.dk/vs/document-type",
  "version" : "11.0.2",
  "name" : "DocumentType",
  "title" : "Document Type",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-08T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Document Type value set.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "valueSet" : ["http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-typecode-vs"]
    },
    {
      "system" : "http://loinc.org",
      "concept" : [{
        "code" : "69730-0"
      },
      {
        "code" : "48766-0"
      }]
    }]
  }
}

```
