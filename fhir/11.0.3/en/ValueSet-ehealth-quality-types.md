# Quality Types - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Quality Types**

## ValueSet: Quality Types (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/quality-types | *Version*:11.0.3 |
| Active as of 2019-02-08 | *Computable Name*:QualityTypes |

 
Types of quality; e.g. situation quality, usability quality, device quality. 

 **References** 

* [Quality](StructureDefinition-ehealth-quality.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-quality-types",
  "url" : "http://ehealth.sundhed.dk/vs/quality-types",
  "version" : "11.0.3",
  "name" : "QualityTypes",
  "title" : "Quality Types",
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
  "description" : "Types of quality; e.g. situation quality, usability quality, device quality.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/quality-types"
    }]
  }
}

```
