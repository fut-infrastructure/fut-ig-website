# Device Platform - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Device Platform**

## ValueSet: Device Platform 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/device-platform | *Version*:11.0.3 |
| Active as of 2026-05-07 | *Computable Name*:DevicePlatform |

 
Device Platform value set. 

 **References** 

* [Device platform](StructureDefinition-ehealth-device-platform.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-device-platform",
  "url" : "http://ehealth.sundhed.dk/vs/device-platform",
  "version" : "11.0.3",
  "name" : "DevicePlatform",
  "title" : "Device Platform",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-05-07T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Device Platform value set.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/device-platform",
      "concept" : [{
        "code" : "APN"
      },
      {
        "code" : "FCM"
      }]
    }]
  }
}

```
