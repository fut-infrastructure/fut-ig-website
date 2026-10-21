# Restriction Category - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Restriction Category**

## ValueSet: Restriction Category (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/restriction-category | *Version*:11.0.0 |
| Active as of 2019-08-05 | *Computable Name*:RestrictionCategory |

 
Value set for restriction category. 

 **References** 

* [Restriction category](StructureDefinition-ehealth-restriction-category.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-restriction-category",
  "url" : "http://ehealth.sundhed.dk/vs/restriction-category",
  "version" : "11.0.0",
  "name" : "RestrictionCategory",
  "title" : "Restriction Category",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-08-05T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set for restriction category.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/restriction-category"
    }]
  }
}

```
