# Import a Plandefinition - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Import a Plandefinition**

## OperationDefinition: Import a Plandefinition 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/PlanDefinition-t-import | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:import |

 
Import a Plandefinition 

### Parameters

 
* Bundle containing the created resources. PlanDefinitions, ActivityDefinitions, and Questionnaires will be created. Imports QFFD DocumentReference into Document-Transformation service.Libraries and Organizations are used to find the corresponding resources on the target system.
 

URL: [base]/PlanDefinition/$import

### Parameters

* **Use**: IN
  * **Name**: planDefinitionPackage
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Binary](http://hl7.org/fhir/R4/binary.html)
  * **Binding**: 
  * **Documentation**: 
* **Use**: OUT
  * **Name**: return
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Bundle](http://hl7.org/fhir/R4/bundle.html)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "PlanDefinition-t-import",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/PlanDefinition-t-import",
  "version" : "6.0.0",
  "name" : "import",
  "title" : "Import a Plandefinition",
  "status" : "active",
  "kind" : "operation",
  "date" : "2025-10-23T10:34:08+00:00",
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
  "description" : "Import a Plandefinition\n### Parameters\n- planDefinitionPackage: Binary package produced by the export operation\n### Output\nBundle containing the created resources. PlanDefinitions, ActivityDefinitions, and Questionnaires will be created. Imports QFFD DocumentReference into Document-Transformation service.Libraries and Organizations are used to find the corresponding resources on the target system.\n",
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
  "resource" : ["PlanDefinition"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [
    {
      "name" : "planDefinitionPackage",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "Binary"
    },
    {
      "name" : "return",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "Bundle"
    }
  ]
}

```
