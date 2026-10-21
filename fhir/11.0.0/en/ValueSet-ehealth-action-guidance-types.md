# Action guidance types - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Action guidance types**

## ValueSet: Action guidance types (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/action-guidance-types | *Version*:11.0.0 |
| Active as of 2021-10-14 | *Computable Name*:ActionGuidanceTypes |

 
Action guidance types 

 **References** 

* [Ehealth action guidance type](StructureDefinition-ehealth-actionguidance-type.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-action-guidance-types",
  "url" : "http://ehealth.sundhed.dk/vs/action-guidance-types",
  "version" : "11.0.0",
  "name" : "ActionGuidanceTypes",
  "title" : "Action guidance types",
  "status" : "active",
  "experimental" : true,
  "date" : "2021-10-14T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Action guidance types",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/action-guidance-types"
    }]
  }
}

```
