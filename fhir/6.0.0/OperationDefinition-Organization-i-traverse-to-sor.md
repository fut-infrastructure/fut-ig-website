# Traverse to SOR - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Traverse to SOR**

## OperationDefinition: Traverse to SOR 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/Organization-i-traverse-to-sor | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:traverse-to-sor |

 
Traverse upforwards to the first SOR organization Http response code 404 will be returned if no related SOR organization could be found 

URL: [base]/Organization/[id]/$traverse-to-sor

### Parameters

* **Use**: OUT
  * **Name**: return
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Organization](http://hl7.org/fhir/R4/organization.html)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "Organization-i-traverse-to-sor",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/Organization-i-traverse-to-sor",
  "version" : "6.0.0",
  "name" : "traverse-to-sor",
  "title" : "Traverse to SOR",
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
  "description" : "Traverse upforwards to the first SOR organization\nHttp response code 404 will be returned if no related SOR organization could be found",
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
  "code" : "traverse-to-sor",
  "resource" : ["Organization"],
  "system" : false,
  "type" : false,
  "instance" : true,
  "parameter" : [
    {
      "name" : "return",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "Organization"
    }
  ]
}

```
