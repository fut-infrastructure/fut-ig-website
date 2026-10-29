# Depression (treatment area) - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Depression (treatment area)**

## ValueSet: Depression (treatment area) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-treatment-area-xc-1 | *Version*:11.0.2 |
| Active as of 2026-01-09 | *Computable Name*:Depression |

 
Treatment area for depression conditions (xc). 

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
  "id" : "ehealth-treatment-area-xc-1",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-treatment-area-xc-1",
  "version" : "11.0.2",
  "name" : "Depression",
  "title" : "Depression (treatment area)",
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
  "description" : "Treatment area for depression conditions (xc).",
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
        "code" : "DF320"
      },
      {
        "code" : "DF321"
      },
      {
        "code" : "DF330"
      },
      {
        "code" : "DF331"
      }]
    }]
  }
}

```
