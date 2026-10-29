# Treatment Area Collection xa - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment Area Collection xa**

## ValueSet: Treatment Area Collection xa 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-treatment-area-collection-xa | *Version*:11.0.2 |
| Active as of 2025-12-05 | *Computable Name*:TreatmentAreaCollection_xa |
| **Usage**: system treatment area: xa | |

 
Combined treatment areas for coexistence tag xa. 

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
  "id" : "ehealth-treatment-areas-xa",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-treatment-area-collection-xa",
  "version" : "11.0.2",
  "name" : "TreatmentAreaCollection_xa",
  "title" : "Treatment Area Collection xa",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-05T09:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Combined treatment areas for coexistence tag xa.",
  "useContext" : [{
    "code" : {
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-usage-context-type",
      "code" : "system-treatment-area"
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
        "code" : "xa"
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
