# Update Patient from KRS - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Update Patient from KRS**

## OperationDefinition: Update Patient from KRS 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/ehealth-patient-skrs-update | *Version*:10.0.2 |
| Active as of 2019-02-02 | *Computable Name*:Update Patient from KRS |

 
This operation is used when batch updates on patient information is available from the national service platform. The operation is used by internal components of the eHealth Infrastructure. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "ehealth-patient-skrs-update",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/ehealth-patient-skrs-update",
  "version" : "10.0.2",
  "name" : "Update Patient from KRS",
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
  "description" : "This operation is used when batch updates on patient information is available from the national service platform. The operation is used by internal components of the eHealth Infrastructure.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "code" : "updatePatientWithSKRSData",
  "resource" : ["Patient"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [{
    "name" : "patientBundle",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "The patient information on multiple patients.",
    "type" : "Bundle"
  },
  {
    "name" : "return",
    "use" : "out",
    "min" : 1,
    "max" : "1",
    "documentation" : "Empty set of parameters",
    "type" : "Parameters"
  }]
}

```
