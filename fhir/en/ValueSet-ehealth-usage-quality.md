# Usage Quality - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Usage Quality**

## ValueSet: Usage Quality (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/usage-quality | *Version*:11.0.0 |
| Active as of 2019-02-13 | *Computable Name*:UsageQuality |

 
Value set of hierarchical codes stating the quality of the user's operation of a device/ability to qualify questionnaire answers. 

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
  "id" : "ehealth-usage-quality",
  "url" : "http://ehealth.sundhed.dk/vs/usage-quality",
  "version" : "11.0.0",
  "name" : "UsageQuality",
  "title" : "Usage Quality",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-13T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set of hierarchical codes stating the quality of the user's operation of a device/ability to qualify questionnaire answers.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/usage-quality"
    }]
  }
}

```
