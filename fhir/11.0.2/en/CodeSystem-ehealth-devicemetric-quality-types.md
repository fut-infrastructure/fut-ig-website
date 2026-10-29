# DeviceMetric Quality Types - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DeviceMetric Quality Types**

## CodeSystem: DeviceMetric Quality Types 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/devicemetric-quality-types | *Version*:11.0.2 |
| Active as of 2019-01-29 | *Computable Name*:DeviceMetricQualityTypes |

 
Device metric quality type codes 

This Code system is referenced in the definition of the following value sets:

* [DeviceMetric Quality Types](ValueSet-ehealth-devicemetric-quality-types.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-devicemetric-quality-types",
  "url" : "http://ehealth.sundhed.dk/cs/devicemetric-quality-types",
  "version" : "11.0.2",
  "name" : "DeviceMetricQualityTypes",
  "title" : "DeviceMetric Quality Types",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Device metric quality type codes",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [{
    "code" : "initial",
    "display" : "Initial device quality",
    "designation" : [{
      "language" : "en-US",
      "value" : "Initial device quality"
    }]
  },
  {
    "code" : "degraded",
    "display" : "Degraded device quality",
    "designation" : [{
      "language" : "en-US",
      "value" : "Degraded device quality"
    }]
  },
  {
    "code" : "overridden",
    "display" : "Overridden device quality",
    "designation" : [{
      "language" : "en-US",
      "value" : "Overridden device quality"
    }]
  }]
}

```
