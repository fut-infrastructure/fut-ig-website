# Create a clone of an ActivityDefinition - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Create a clone of an ActivityDefinition**

## OperationDefinition: Create a clone of an ActivityDefinition 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/ActivityDefinitionPlanDefinition-i-create-clone | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:create-clone |

 

### Input

 
* resourceId: reference to the ActivityDefinition resource that should be cloned
* clone_operation: minor-version/major-version/copy Coding from codesystem: http://ehealth.sundhed.dk/cs/ehealth-clone-operation
* default-clone-behavior: true/false. False signifies deep-clone mode where the list of deep-clone-references determine which resources should be cloned
* deep-clone-references: References to resources to create as new resources rather than referencing the existing ones.
 

### Output

 
Bundle containing all resources that were created during the operation. 

### Validation

 
* New business versions require that the user has modifier-role: owner or co-author for the resource
* New copy does not require that the user has a modifier-role.
* New business version can be made only when no draft resource exists (having identical base identifier).
* Read/search/create privileges are required for the resource types affected by $create-clone
 

URL: [base]/ActivityDefinition/[id]/$create-clone

URL: [base]/PlanDefinition/[id]/$create-clone

### Parameters

* **Use**: IN
  * **Name**: clone-operation
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: default-clone-behavior
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [boolean](http://hl7.org/fhir/R4/datatypes.html#boolean)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: deep-clone-references
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "ActivityDefinitionPlanDefinition-i-create-clone",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/ActivityDefinitionPlanDefinition-i-create-clone",
  "version" : "6.0.0",
  "name" : "create-clone",
  "title" : "Create a clone of an ActivityDefinition",
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
  "description" : "### Input\n- resourceId: reference to the ActivityDefinition resource that should be cloned\n- clone_operation: minor-version/major-version/copy Coding from codesystem: http://ehealth.sundhed.dk/cs/ehealth-clone-operation \n- default-clone-behavior: true/false. False signifies deep-clone mode where the list of deep-clone-references determine which resources should be cloned \n- deep-clone-references: References to resources to create as new resources rather than referencing the existing ones.\n\n### Output\nBundle containing all resources that were created during the operation.\n\n### Validation\n- New business versions require that the user has modifier-role: owner or co-author for the resource\n- New copy does not require that the user has a modifier-role.\n- New business version can be made only when no draft resource exists (having identical base identifier).\n- Read/search/create privileges are required for the resource types affected by $create-clone\n",
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
  "code" : "create-clone",
  "resource" : ["ActivityDefinition", "PlanDefinition"],
  "system" : false,
  "type" : false,
  "instance" : true,
  "parameter" : [
    {
      "name" : "clone-operation",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "Coding"
    },
    {
      "name" : "default-clone-behavior",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "boolean"
    },
    {
      "name" : "deep-clone-references",
      "use" : "in",
      "min" : 0,
      "max" : "*",
      "type" : "Reference"
    }
  ]
}

```
