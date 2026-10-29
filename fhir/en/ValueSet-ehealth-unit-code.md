# eHealthUnitCodes - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealthUnitCodes**

## ValueSet: eHealthUnitCodes 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-unit-code | *Version*:11.0.3 |
| Active as of 2020-10-19 | *Computable Name*:eHealthUnitCodes |

 
Value set of Unit Codes 

 **References** 

* Included into [eHealthUnit](ValueSet-ehealth-unit.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-unit-code",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-unit-code",
  "version" : "11.0.3",
  "name" : "eHealthUnitCodes",
  "title" : "eHealthUnitCodes",
  "status" : "active",
  "experimental" : false,
  "date" : "2020-10-19T08:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set of Unit Codes",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-unit-code"
    }]
  }
}

```
