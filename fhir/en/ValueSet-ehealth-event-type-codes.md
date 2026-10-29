# Event Type Codes - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Event Type Codes**

## ValueSet: Event Type Codes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/event-type-codes | *Version*:11.0.3 |
| Active as of 2019-02-08 | *Computable Name*:EventTypeCodes |

 
Event type codes value set. 

 **References** 

* [ehealth-composition](StructureDefinition-ehealth-composition.md)
* [ehealth-transformation-documentreference](StructureDefinition-ehealth-transformation-documentreference.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-event-type-codes",
  "url" : "http://ehealth.sundhed.dk/vs/event-type-codes",
  "version" : "11.0.3",
  "name" : "EventTypeCodes",
  "title" : "Event Type Codes",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-08T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Event type codes value set.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "valueSet" : ["http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-eventcodelists-vs"]
    }]
  }
}

```
