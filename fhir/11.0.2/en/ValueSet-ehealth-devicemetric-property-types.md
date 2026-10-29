# DeviceMetricPropertyTypes - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DeviceMetricPropertyTypes**

## ValueSet: DeviceMetricPropertyTypes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/devicemetric-property-types | *Version*:11.0.2 |
| Active as of 2019-02-08 | *Computable Name*:DeviceMetricPropertyTypes |

 
Device Metric Property Types value set. 

 **References** 

* [Properties](StructureDefinition-ehealth-devicemetric-properties.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-devicemetric-property-types",
  "url" : "http://ehealth.sundhed.dk/vs/devicemetric-property-types",
  "version" : "11.0.2",
  "name" : "DeviceMetricPropertyTypes",
  "title" : "DeviceMetricPropertyTypes",
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
  "description" : "Device Metric Property Types value set.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/devicemetric-property-types"
    }]
  }
}

```
