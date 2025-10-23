# Upload QFDD - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Upload QFDD**

## OperationDefinition: Upload QFDD 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-upload-QFDD | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:upload-QFDD |

 
Uploads an DK-HL7 Questionnaire Form Definition Document (QFDD). The input FHIR DocumentReference must be of type QFDD (74468-0) and the status set to current. Include an attachment which contains the base64 encoded QFDD XML document with contentType application/xml. The QFDD XML document must contain a unique id which is used as the the masterIdentifier in the DocumentReference. The returned FHIR DocumentReference contains a masterIdentifier, a type and the description all pulled from the attachment. 

URL: [base]/$upload-QFDD

### Parameters

* **Use**: IN
  * **Name**: documentReference
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [DocumentReference](http://hl7.org/fhir/R4/documentreference.html)
  * **Binding**: 
  * **Documentation**: 
* **Use**: OUT
  * **Name**: documentReference
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [DocumentReference](http://hl7.org/fhir/R4/documentreference.html)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-upload-QFDD",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-upload-QFDD",
  "version" : "6.0.0",
  "name" : "upload-QFDD",
  "title" : "Upload QFDD",
  "status" : "active",
  "kind" : "operation",
  "date" : "2025-10-23T10:25:37+00:00",
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
  "description" : "Uploads an DK-HL7 Questionnaire Form Definition Document (QFDD). The input FHIR DocumentReference must be of type QFDD (74468-0) and the status set to current. Include an attachment which contains the base64 encoded QFDD XML document with contentType application/xml. The QFDD XML document must contain a unique id which is used as the the masterIdentifier in the DocumentReference. The returned FHIR DocumentReference contains a masterIdentifier, a type and the description all pulled from the attachment. ",
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
  "affectsState" : false,
  "code" : "upload-QFDD",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [
    {
      "name" : "documentReference",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "DocumentReference"
    },
    {
      "name" : "documentReference",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "DocumentReference"
    }
  ]
}

```
