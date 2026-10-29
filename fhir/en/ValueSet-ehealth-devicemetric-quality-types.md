# DeviceMetric Quality Types - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DeviceMetric Quality Types**

## ValueSet: DeviceMetric Quality Types (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/devicemetric-quality-types | *Version*:11.0.3 |
| Active as of 2019-02-08 | *Computable Name*:DeviceMetricQualityTypes |

 
Device Metric Quality Types value set. 

 **References** 

* [Qualities](StructureDefinition-ehealth-devicemetric-qualities.md)
* [Quality history](StructureDefinition-ehealth-devicemetric-qualityHistory.md)
* [Template qualities](StructureDefinition-ehealth-devicemetric-templateQualities.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-devicemetric-quality-types",
  "url" : "http://ehealth.sundhed.dk/vs/devicemetric-quality-types",
  "version" : "11.0.3",
  "name" : "DeviceMetricQualityTypes",
  "title" : "DeviceMetric Quality Types",
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
  "description" : "Device Metric Quality Types value set.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/devicemetric-quality-types"
    }]
  }
}

```
