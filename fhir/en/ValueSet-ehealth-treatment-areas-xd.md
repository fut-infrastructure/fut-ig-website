# Treatment Area Collection xd - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment Area Collection xd**

## ValueSet: Treatment Area Collection xd 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-treatment-area-collection-xd | *Version*:11.0.2 |
| Active as of 2026-10-19 | *Computable Name*:TreatmentAreaCollection_xd |
| **Usage**: system treatment area: xd | |

 
Combined treatment areas for coexistence tag xd. 

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
  "id" : "ehealth-treatment-areas-xd",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-treatment-area-collection-xd",
  "version" : "11.0.2",
  "name" : "TreatmentAreaCollection_xd",
  "title" : "Treatment Area Collection xd",
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
  "description" : "Combined treatment areas for coexistence tag xd.",
  "useContext" : [{
    "code" : {
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-usage-context-type",
      "code" : "system-treatment-area"
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
        "code" : "xd"
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
