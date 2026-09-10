# eHealth Device Identifier - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Device Identifier**

## NamingSystem: eHealth Device Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/NamingSystem/ehealth-device-identifier | *Version*:10.0.2 |
| Active as of 2020-02-18 | *Computable Name*:eHealth Device Identifier |

 
An identifier of a device used in eHealth 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "ehealth-device-identifier",
  "extension" : [{
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
    "valueUri" : "http://ehealth.sundhed.dk/fhir/NamingSystem/ehealth-device-identifier"
  },
  {
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
    "valueString" : "10.0.2"
  }],
  "name" : "eHealth Device Identifier",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2020-02-18",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "responsible" : "ehealth.sundhed.dk",
  "description" : "An identifier of a device used in eHealth",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "uniqueId" : [{
    "type" : "uri",
    "value" : "http://ehealth.sundhed.dk/id/device-identifier"
  }]
}

```
