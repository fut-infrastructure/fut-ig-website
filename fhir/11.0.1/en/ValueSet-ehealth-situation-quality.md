# Situation Quality - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Situation Quality**

## ValueSet: Situation Quality (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/situation-quality | *Version*:11.0.1 |
| Active as of 2019-02-13 | *Computable Name*:SituationQuality |

 
Value set of hierarchical codes stating the quality of a measurement situation. 

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
  "id" : "ehealth-situation-quality",
  "url" : "http://ehealth.sundhed.dk/vs/situation-quality",
  "version" : "11.0.1",
  "name" : "SituationQuality",
  "title" : "Situation Quality",
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
  "description" : "Value set of hierarchical codes stating the quality of a measurement situation.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/situation-quality"
    }]
  }
}

```
