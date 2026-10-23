# Priority - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Priority**

## ValueSet: Priority (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/priority | *Version*:11.0.1 |
| Active as of 2023-02-27 | *Computable Name*:Priority |

 
Practitioner roles 

 **References** 

* [Priority](StructureDefinition-ehealth-priority.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-priority",
  "url" : "http://ehealth.sundhed.dk/vs/priority",
  "version" : "11.0.1",
  "name" : "Priority",
  "title" : "Priority",
  "status" : "active",
  "experimental" : true,
  "date" : "2023-02-27T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Practitioner roles",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/priority"
    }]
  }
}

```
