# Export Appointment to iCal - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Export Appointment to iCal**

## OperationDefinition: Export Appointment to iCal 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/ehealth-appointment-toical | *Version*:10.0.1 |
| Active as of 2019-02-02 | *Computable Name*:Export Appointment to iCal |

 
This operation exports the Appointment to an iCal [RFC-5545](https://tools.ietf.org/html/rfc5545) format 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "ehealth-appointment-toical",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/ehealth-appointment-toical",
  "version" : "10.0.1",
  "name" : "Export Appointment to iCal",
  "status" : "active",
  "kind" : "operation",
  "date" : "2019-02-02",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "This operation exports the Appointment to an iCal [RFC-5545](https://tools.ietf.org/html/rfc5545) format",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : true,
  "code" : "exportAsiCal",
  "comment" : "The iCal file is wrapped inside a Binary resource.",
  "resource" : ["Appointment"],
  "system" : false,
  "type" : false,
  "instance" : true,
  "parameter" : [{
    "name" : "return",
    "use" : "out",
    "min" : 1,
    "max" : "1",
    "documentation" : "A Binary resource that encapsulates the iCal file. ",
    "type" : "Bundle"
  }]
}

```
