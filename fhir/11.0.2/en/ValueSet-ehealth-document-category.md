# Document Category - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Document Category**

## ValueSet: Document Category 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/document-category | *Version*:11.0.2 |
| Active as of 2025-09-02 | *Computable Name*:DocumentCategory |

 
Document Category value set. 

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
  "id" : "ehealth-document-category",
  "url" : "http://ehealth.sundhed.dk/vs/document-category",
  "version" : "11.0.2",
  "name" : "DocumentCategory",
  "title" : "Document Category",
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
  "description" : "Document Category value set.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/material-category"
    }]
  }
}

```
