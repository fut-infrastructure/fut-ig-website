# Library Type - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Library Type**

## CodeSystem: Library Type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/library-type | *Version*:11.0.1 |
| Active as of 2019-08-27 | *Computable Name*:LibraryType |

 
Library Type 

This Code system is referenced in the definition of the following value sets:

* [Library Type](ValueSet-ehealth-library-type.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-library-type",
  "url" : "http://ehealth.sundhed.dk/cs/library-type",
  "version" : "11.0.1",
  "name" : "LibraryType",
  "title" : "Library Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-08-27T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Library Type",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [{
    "code" : "automated-processing",
    "display" : "Automated Processing",
    "definition" : "The resource defines an evaluation context for automated processing",
    "designation" : [{
      "language" : "da",
      "value" : "Ressourcen definerer en regel og dennes kontekst til brug i automatisk processering"
    }]
  }]
}

```
