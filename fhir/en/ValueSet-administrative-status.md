# Administrative Status - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Administrative Status**

## ValueSet: Administrative Status (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/administrative-status | *Version*:11.0.0 |
| Active as of 2019-02-08 | *Computable Name*:AdministrativeStatus |

 
Administrative status 

 **References** 

* [Administrative status](StructureDefinition-ehealth-administrative-status.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "administrative-status",
  "url" : "http://ehealth.sundhed.dk/vs/administrative-status",
  "version" : "11.0.0",
  "name" : "AdministrativeStatus",
  "title" : "Administrative Status",
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
  "description" : "Administrative status",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/administrative-status"
    }]
  }
}

```
