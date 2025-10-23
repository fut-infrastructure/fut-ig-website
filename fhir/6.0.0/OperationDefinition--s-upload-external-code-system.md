# upload-external-code-system - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **upload-external-code-system**

## OperationDefinition: upload-external-code-system 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-upload-external-code-system | *Version*:6.0.0 |
| Active as of 2021-05-06 | *Computable Name*:upload-external-code-system |

URL: [base]/$upload-external-code-system

### Parameters

* **Use**: IN
  * **Name**: url
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [string](http://hl7.org/fhir/R4/datatypes.html#string)([string](https://hl7.org/fhir/R4/search.html#string))
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: localfile
  * **Scope**: 
  * **Cardinality**: 1..*
  * **Type**: [string](http://hl7.org/fhir/R4/datatypes.html#string)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: package
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Attachment](http://hl7.org/fhir/R4/datatypes.html#Attachment)
  * **Binding**: 
  * **Documentation**: 
* **Use**: OUT
  * **Name**: conceptCount
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [integer](http://hl7.org/fhir/R4/datatypes.html#integer)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-upload-external-code-system",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-upload-external-code-system",
  "version" : "6.0.0",
  "name" : "upload-external-code-system",
  "status" : "active",
  "kind" : "operation",
  "date" : "2021-05-06T08:31:20+00:00",
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
  "affectsState" : true,
  "code" : "upload-external-code-system",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [
    {
      "name" : "url",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "type" : "string",
      "searchType" : "string"
    },
    {
      "name" : "localfile",
      "use" : "in",
      "min" : 1,
      "max" : "*",
      "type" : "string"
    },
    {
      "name" : "package",
      "use" : "in",
      "min" : 0,
      "max" : "*",
      "type" : "Attachment"
    },
    {
      "name" : "conceptCount",
      "use" : "out",
      "min" : 1,
      "max" : "1",
      "type" : "integer"
    }
  ]
}

```
