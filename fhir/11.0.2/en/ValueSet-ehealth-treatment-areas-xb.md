# Treatment Area Collection xb - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment Area Collection xb**

## ValueSet: Treatment Area Collection xb 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-treatment-area-collection-xb | *Version*:11.0.2 |
| Active as of 2026-09-10 | *Computable Name*:TreatmentAreaCollection_xb |
| **Usage**: system treatment area: xb | |

 
Combined treatment areas for coexistence tag xb. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-treatment-areas-xb",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-treatment-area-collection-xb",
  "version" : "11.0.2",
  "name" : "TreatmentAreaCollection_xb",
  "title" : "Treatment Area Collection xb",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-09-10T09:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Combined treatment areas for coexistence tag xb.",
  "useContext" : [{
    "code" : {
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-usage-context-type",
      "code" : "system-treatment-area"
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
        "code" : "xb"
      }]
    }
  }],
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "valueSet" : ["http://ehealth.sundhed.dk/vs/ehealth-treatment-area-all-conditions"]
    }]
  }
}

```
