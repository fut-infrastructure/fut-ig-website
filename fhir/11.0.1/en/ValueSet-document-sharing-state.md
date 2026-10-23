# Document Sharing State - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Document Sharing State**

## ValueSet: Document Sharing State (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/document-sharing-state | *Version*:11.0.1 |
| Active as of 2024-12-03 | *Computable Name*:DocumentSharingState |

 
Document Sharing State 

 **References** 

* [State of the document sharing](StructureDefinition-ehealth-document-sharing-state.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "document-sharing-state",
  "url" : "http://ehealth.sundhed.dk/vs/document-sharing-state",
  "version" : "11.0.1",
  "name" : "DocumentSharingState",
  "title" : "Document Sharing State",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-12-03T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Document Sharing State",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/document-sharing-state"
    }]
  }
}

```
