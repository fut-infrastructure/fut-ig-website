# Device Platform - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Device Platform**

## ValueSet: Device Platform 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/device-platform | *Version*:10.0.0 |
| Active as of 2026-05-07 | *Computable Name*:DevicePlatform |

 
Device Platform value set. 

 **References** 

* [Device platform](StructureDefinition-ehealth-device-platform.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-device-platform",
  "url" : "http://ehealth.sundhed.dk/vs/device-platform",
  "version" : "10.0.0",
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
