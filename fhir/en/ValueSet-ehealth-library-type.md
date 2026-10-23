# Library Type - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Library Type**

## ValueSet: Library Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/library-type | *Version*:11.0.1 |
| Active as of 2019-08-27 | *Computable Name*:LibraryType |

 
http://terminology.hl7.org/CodeSystem/library-type + automated-processing 

 **References** 

* [ehealth-library](StructureDefinition-ehealth-library.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-library-type",
  "url" : "http://ehealth.sundhed.dk/vs/library-type",
  "version" : "11.0.1",
  "name" : "LibraryType",
  "title" : "Library Type",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-08-27T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "http://terminology.hl7.org/CodeSystem/library-type + automated-processing",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/library-type"
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/library-type"
    }]
  }
}

```
