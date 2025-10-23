# import - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **import**

## OperationDefinition: import 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-import | *Version*:6.0.0 |
| Active as of 2021-05-06 | *Computable Name*:import |

 
Import terminology resources 

URL: [base]/$import

### Parameters

* **Use**: IN
  * **Name**: uriFileLink
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [uri](http://hl7.org/fhir/R4/datatypes.html#uri)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: overwrite
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [boolean](http://hl7.org/fhir/R4/datatypes.html#boolean)
  * **Binding**: 
  * **Documentation**: 
* **Use**: OUT
  * **Name**: number-of-resources-created-or-updated
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [integer](http://hl7.org/fhir/R4/datatypes.html#integer)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-import",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-import",
  "version" : "6.0.0",
  "name" : "import",
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
  "description" : "Import terminology resources",
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
  "code" : "import",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [
    {
      "name" : "uriFileLink",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "uri"
    },
    {
      "name" : "overwrite",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "boolean"
    },
    {
      "name" : "number-of-resources-created-or-updated",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "integer"
    }
  ]
}

```
