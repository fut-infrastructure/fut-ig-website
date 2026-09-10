# Evaluate - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Evaluate**

## OperationDefinition: Evaluate 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/Library-it-evaluate | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:evaluate |

 
This operation evaluates parameters passed as input against the decision support rule identified by the Library resource. It returns the computed clinical decision support result and/or errors. The Library resource identifies the clinical decision rule and define its parameters. 
The operation is idempotent. 

### Input

 
* 1..1 Parameters: HL7 FHIR [Parameters](https://www.hl7.org/fhir/stu3/parameters.html) resource containing input parameters for the clinical decision support computation.This should either be a QuestionnaireResponse or an Observation for evaluation.
 

### Output

 
Upon success this operation returns an GuidanceResponse resource containing the decision support result. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "Library-it-evaluate",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/Library-it-evaluate",
  "version" : "10.0.2",
  "name" : "evaluate",
  "title" : "Evaluate",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-09-10T10:04:36+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "This operation evaluates parameters passed as input against the decision support rule identified by the Library resource. It returns the computed clinical decision support result and/or errors. The Library resource identifies the clinical decision rule and define its parameters.\n\nThe operation is idempotent.\n### Input\n- 1..1 Parameters: HL7 FHIR [Parameters](https://www.hl7.org/fhir/stu3/parameters.html) resource containing input parameters for the clinical decision support computation.This should either be a QuestionnaireResponse or an Observation for evaluation.\n\n### Output\nUpon success this operation returns an GuidanceResponse resource containing the decision support result.\n\n",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "evaluate",
  "resource" : ["Library"],
  "system" : false,
  "type" : true,
  "instance" : true,
  "parameter" : [{
    "name" : "parameters",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "HL7 FHIR Parameters resource containing input parameters for the clinical decision support computation. This should either be a QuestionnaireResponse or an Observation for evaluation.",
    "type" : "Parameters"
  },
  {
    "name" : "return",
    "use" : "out",
    "min" : 0,
    "max" : "1",
    "type" : "GuidanceResponse"
  }]
}

```
