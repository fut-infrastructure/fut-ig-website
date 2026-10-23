# Overview Usage Mode - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Overview Usage Mode**

## ValueSet: Overview Usage Mode (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/overviewUsageMode | *Version*:11.0.1 |
| Active as of 2020-10-19 | *Computable Name*:OverviewUsageMode |

 
Whether the element should appear in overview modes of operation. 

 **References** 

* [Overview usage mode](StructureDefinition-ehealth-overviewUsageMode.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-overviewUsageMode",
  "url" : "http://ehealth.sundhed.dk/vs/overviewUsageMode",
  "version" : "11.0.1",
  "name" : "OverviewUsageMode",
  "title" : "Overview Usage Mode",
  "status" : "active",
  "experimental" : true,
  "date" : "2020-10-19T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Whether the element should appear in overview modes of operation.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/overviewUsageMode"
    }]
  }
}

```
