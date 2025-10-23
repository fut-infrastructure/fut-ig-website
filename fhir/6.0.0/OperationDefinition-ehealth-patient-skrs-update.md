# Update Patient from KRS - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Update Patient from KRS**

## OperationDefinition: Update Patient from KRS 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/ehealth-patient-skrs-update | *Version*:6.0.0 |
| Active as of 2019-02-02 | *Computable Name*:Update Patient from KRS |

 
This operation is used when batch updates on patient information is available from the national service platform. The operation is used by internal components of the eHealth Infrastructure. 

URL: [base]/Patient/$updatePatientWithSKRSData

### Parameters

* **Use**: IN
  * **Name**: patientBundle
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [Bundle](http://hl7.org/fhir/R4/bundle.html)
  * **Binding**: 
  * **Documentation**: The patient information on multiple patients.
* **Use**: OUT
  * **Name**: return
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [Parameters](http://hl7.org/fhir/R4/parameters.html)
  * **Binding**: 
  * **Documentation**: Empty set of parameters



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "ehealth-patient-skrs-update",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/ehealth-patient-skrs-update",
  "version" : "6.0.0",
  "name" : "Update Patient from KRS",
  "status" : "active",
  "kind" : "operation",
  "date" : "2019-02-02",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "This operation is used when batch updates on patient information is available from the national service platform. The operation is used by internal components of the eHealth Infrastructure.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "code" : "updatePatientWithSKRSData",
  "resource" : ["Patient"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [
    {
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
    }
  ]
}

```
