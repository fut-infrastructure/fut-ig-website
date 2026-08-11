# Export a PlanDefinition - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Export a PlanDefinition**

## OperationDefinition: Export a PlanDefinition 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/PlanDefinition-i-export | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:export |

 
Export a PlanDefinition. 

### Export Contents

 
The export contains the PlanDefinition including referenced resources:- PlanDefinitions 
* ActivityDefinitions
* Questionnaires
* Libraries
* Organizations
* DocumentReference + QFDD
 
Each resource is returned in a separate JSon file. 

### Parameters

 
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files. All returned objects are Fhir resources. See the implementation guide for details
 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "PlanDefinition-i-export",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/PlanDefinition-i-export",
  "version" : "10.0.1",
  "name" : "export",
  "title" : "Export a PlanDefinition",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-08-11T06:44:23+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Export a PlanDefinition.\n### Export Contents\nThe export contains the PlanDefinition including referenced resources:- PlanDefinitions\n- ActivityDefinitions\n- Questionnaires\n- Libraries\n- Organizations\n- DocumentReference + QFDD\n\nEach resource is returned in a separate JSon file.\n### Parameters\n- exclude: references to ActivityDefinitions or PlanDefinitions to exclude from the export.\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files.\nAll returned objects are Fhir resources. See the implementation guide for details\n",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "export",
  "resource" : ["PlanDefinition"],
  "system" : false,
  "type" : false,
  "instance" : true,
  "parameter" : [{
    "name" : "exclude",
    "use" : "in",
    "min" : 0,
    "max" : "*",
    "documentation" : "References to ActivityDefinitions or PlanDefinitions to exclude from the export.",
    "type" : "string"
  }]
}

```
