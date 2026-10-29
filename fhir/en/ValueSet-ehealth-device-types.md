# Device Types - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Device Types**

## ValueSet: Device Types (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/device-types | *Version*:11.0.3 |
| Active as of 2019-02-08 | *Computable Name*:DeviceTypes |

 
Device Types value set. 

 **References** 

* [ehealth-device](StructureDefinition-ehealth-device.md)
* [IT competence level](StructureDefinition-ehealth-itcompetencelevel.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-device-types",
  "url" : "http://ehealth.sundhed.dk/vs/device-types",
  "version" : "11.0.3",
  "name" : "DeviceTypes",
  "title" : "Device Types",
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
  "description" : "Device Types value set.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "59181002"
      },
      {
        "code" : "258057004"
      },
      {
        "code" : "19892000"
      },
      {
        "code" : "1187059002"
      }]
    }]
  }
}

```
