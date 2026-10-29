# Resolved Timing Type - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Resolved Timing Type**

## ValueSet: Resolved Timing Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/resolved-timing-type | *Version*:11.0.3 |
| Active as of 2021-02-26 | *Computable Name*:ResolvedTimingType |

 
Value set for resolved timing type. 

 **References** 

* [Resolved timing](StructureDefinition-ehealth-resolved-timing.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "resolved-timing-type",
  "url" : "http://ehealth.sundhed.dk/vs/resolved-timing-type",
  "version" : "11.0.3",
  "name" : "ResolvedTimingType",
  "title" : "Resolved Timing Type",
  "status" : "active",
  "experimental" : true,
  "date" : "2021-02-26T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set for resolved timing type.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/resolved-timing-type"
    }]
  }
}

```
