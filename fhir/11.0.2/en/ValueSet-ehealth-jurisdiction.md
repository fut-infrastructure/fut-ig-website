# Jurisdiction - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Jurisdiction**

## ValueSet: Jurisdiction (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/jurisdiction | *Version*:11.0.2 |
| Active as of 2019-12-16 | *Computable Name*:Jurisdiction |

 
Jurisdiction value set 

 **References** 

* [ehealth-activitydefinition](StructureDefinition-ehealth-activitydefinition.md)
* [Legal basis](StructureDefinition-ehealth-legalBasis.md)
* [ehealth-library](StructureDefinition-ehealth-library.md)
* [ehealth-plandefinition](StructureDefinition-ehealth-plandefinition.md)
* [ehealth-questionnaire](StructureDefinition-ehealth-questionnaire.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-jurisdiction",
  "url" : "http://ehealth.sundhed.dk/vs/jurisdiction",
  "version" : "11.0.2",
  "name" : "Jurisdiction",
  "title" : "Jurisdiction",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-12-16T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Jurisdiction value set",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/jurisdiction"
    }]
  }
}

```
