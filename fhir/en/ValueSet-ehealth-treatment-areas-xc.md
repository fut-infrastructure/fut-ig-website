# Treatment Area Collection xc - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment Area Collection xc**

## ValueSet: Treatment Area Collection xc 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-treatment-area-collection-xc | *Version*:11.0.1 |
| Active as of 2025-12-05 | *Computable Name*:TreatmentAreaCollection_xc |
| **Usage**: system treatment area: xc | |

 
Combined treatment areas for coexistence tag xc. 

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
  "id" : "ehealth-treatment-areas-xc",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-treatment-area-collection-xc",
  "version" : "11.0.1",
  "name" : "TreatmentAreaCollection_xc",
  "title" : "Treatment Area Collection xc",
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
  "description" : "Combined treatment areas for coexistence tag xc.",
  "useContext" : [{
    "code" : {
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-usage-context-type",
      "code" : "system-treatment-area"
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
        "code" : "xc"
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
      "valueSet" : ["http://ehealth.sundhed.dk/vs/ehealth-treatment-area-xc-1"]
    },
    {
      "valueSet" : ["http://ehealth.sundhed.dk/vs/ehealth-treatment-area-xc-2"]
    },
    {
      "valueSet" : ["http://ehealth.sundhed.dk/vs/ehealth-treatment-area-xc-3"]
    }]
  }
}

```
