# eHealth Telecom Purpose - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Telecom Purpose**

## ValueSet: eHealth Telecom Purpose 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/telecom-purpose | *Version*:11.0.1 |
| Active as of 2026-10-23 | *Computable Name*:EhealthTelecomPurposeVS |

 
ValueSet for telecom purpose codes. 

 **References** 

* [Telecom purpose](StructureDefinition-ehealth-telecom-purpose.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-telecom-purpose",
  "url" : "http://ehealth.sundhed.dk/vs/telecom-purpose",
  "version" : "11.0.1",
  "name" : "EhealthTelecomPurposeVS",
  "title" : "eHealth Telecom Purpose",
  "status" : "active",
  "date" : "2026-10-23T09:25:15+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "ValueSet for telecom purpose codes.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/telecom-purpose"
    }]
  }
}

```
