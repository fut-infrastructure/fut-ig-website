# Angst (treatment area) - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Angst (treatment area)**

## ValueSet: Angst (treatment area) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-treatment-area-xc-2 | *Version*:11.0.1 |
| Active as of 2026-01-09 | *Computable Name*:Angst |

 
Treatment area for angst conditions (xc). 

 **References** 

* Included into [Treatment Area Collection xc](ValueSet-ehealth-treatment-areas-xc.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-treatment-area-xc-2",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-treatment-area-xc-2",
  "version" : "11.0.1",
  "name" : "Angst",
  "title" : "Angst (treatment area)",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-09T09:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Treatment area for angst conditions (xc).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "urn:oid:1.2.208.176.2.4",
      "concept" : [{
        "code" : "DF400"
      },
      {
        "code" : "DF4000"
      },
      {
        "code" : "DF4001"
      },
      {
        "code" : "DF401"
      },
      {
        "code" : "DF402"
      },
      {
        "code" : "DF410"
      }]
    }]
  }
}

```
