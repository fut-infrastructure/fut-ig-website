# CareTeam Category - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CareTeam Category**

## ValueSet: CareTeam Category (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/careteam-category | *Version*:11.0.3 |
| Active as of 2019-02-08 | *Computable Name*:CareTeamCategory |

 

| | | |
| :--- | :--- | :--- |
| http://hl7.org/fhir/ValueSet/careteam-category + ssl | SSL | Service Support and Logistics Employee. |

 

 **References** 

* [ehealth-careteam](StructureDefinition-ehealth-careteam.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-careteam-category",
  "url" : "http://ehealth.sundhed.dk/vs/careteam-category",
  "version" : "11.0.3",
  "name" : "CareTeamCategory",
  "title" : "CareTeam Category",
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
  "description" : "http://hl7.org/fhir/ValueSet/careteam-category + ssl | SSL | Service Support and Logistics Employee.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/careteam-category"
    }]
  }
}

```
