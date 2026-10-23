# Required policies for provenances - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Required policies for provenances**

## ValueSet: Required policies for provenances 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-required-provenance-policies | *Version*:11.0.1 |
| Active as of 2025-09-30 | *Computable Name*:Required policies for provenances |

 
Required policies under which data can be provided. One of these policies must be provided in a provenance. 

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
  "id" : "ehealth-required-provenance-policies",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-required-provenance-policies",
  "version" : "11.0.1",
  "name" : "Required policies for provenances",
  "title" : "Required policies for provenances",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-09-30T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Required policies under which data can be provided. One of these policies must be provided in a provenance.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-provenance-policies",
      "concept" : [{
        "code" : "http://ehealth.sundhed.dk/policy/dk/sundhedsloven"
      },
      {
        "code" : "http://ehealth.sundhed.dk/policy/dk/serviceloven"
      },
      {
        "code" : "http://ehealth.sundhed.dk/policy/dk/aeldreloven"
      }]
    }]
  }
}

```
