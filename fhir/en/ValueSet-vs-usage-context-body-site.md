# Usage Context Body site - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Usage Context Body site**

## ValueSet: Usage Context Body site 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/usage-context-body-site | *Version*:11.0.2 |
| Active as of 2026-02-09 | *Computable Name*:usageContextBodySite |

 
Usage Body site 

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
  "id" : "vs-usage-context-body-site",
  "url" : "http://ehealth.sundhed.dk/vs/usage-context-body-site",
  "version" : "11.0.2",
  "name" : "usageContextBodySite",
  "title" : "Usage Context Body site",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-02-09T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Usage Body site",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "valueSet" : ["http://ehealth.sundhed.dk/vs/usage-context-body-site-tele-wound"]
    }]
  }
}

```
