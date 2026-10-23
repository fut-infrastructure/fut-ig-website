# All conditions (treatment area) - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **All conditions (treatment area)**

## ValueSet: All conditions (treatment area) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-treatment-area-all-conditions | *Version*:11.0.1 |
| Active as of 2026-10-19 | *Computable Name*:AllConditions |

 
Treatment area for all conditions. 

 **References** 

* Included into [Treatment Area Collection xa](ValueSet-ehealth-treatment-areas-xa.md)
* Included into [Treatment Area Collection xb](ValueSet-ehealth-treatment-areas-xb.md)
* Included into [Treatment Area Collection xd](ValueSet-ehealth-treatment-areas-xd.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-treatment-area-all-conditions",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-treatment-area-all-conditions",
  "version" : "11.0.1",
  "name" : "AllConditions",
  "title" : "All conditions (treatment area)",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-10-19T15:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Treatment area for all conditions.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "valueSet" : ["http://ehealth.sundhed.dk/vs/conditions"]
    }]
  }
}

```
