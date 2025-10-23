# Execute careplan customization stats - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Execute careplan customization stats**

## OperationDefinition: Execute careplan customization stats 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-execute-careplan-customization-stats | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:execute-careplan-customization-stats |

 

### Report Contents

 
This report contains a count of patient specific modifications of: 
* Measurement schedule timing
* This report is grouped by PlanDefinition. Each group is returned in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* period: Filter on CarePlan.period overlap
 

### Output

 
Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups. 

### Example output

 
EHealthPlanDefinition is a Fhir resource. See the implementation guide for details 

```
{
    'EHealthPlanDefinition': {
        'resourceType': 'PlanDefinition',
        'id': '53450',
        'meta': {
            'versionId': '1',
            'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']
        },
        'extension': [{
                'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',
                'extension': [{
                        'url': 'reference',
                        'valueReference': {
                            'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/85109'
                        }
                    }, {
                        'url': 'role',
                        'valueCodeableConcept': {
                            'coding': [{
                                    'system': 'http://ehealth.sundhed.dk/cs/modifier-role',
                                    'code': 'owner'
                                }
                            ]
                        }
                    }
                ]
            }
        ],
        'version': '97219ba1-2202-42a1-b99d-45de3a506b40',
        'status': 'active'
    },
    'CarePlanCustomizationSummary': {
        'timingCustomizationCount': 1,
        'referenceRangeCustomizationCount': 1
    }
}

```

 

URL: [base]/$execute-careplan-customization-stats

### Parameters

* **Use**: IN
  * **Name**: anonymization
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [string](http://hl7.org/fhir/R4/datatypes.html#string)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: organization
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: period
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Period](http://hl7.org/fhir/R4/datatypes.html#Period)
  * **Binding**: 
  * **Documentation**: 
* **Use**: OUT
  * **Name**: return
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Binary](http://hl7.org/fhir/R4/binary.html)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-execute-careplan-customization-stats",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-execute-careplan-customization-stats",
  "version" : "6.0.0",
  "name" : "execute-careplan-customization-stats",
  "title" : "Execute careplan customization stats",
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
  "description" : "### Report Contents\nThis report contains a count of patient specific modifications of:\n- Measurement schedule timing\n- Reference ranges\n### Grouping \nThis report is grouped by PlanDefinition. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on CarePlan.period overlap\n\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nEHealthPlanDefinition is a Fhir resource. See the implementation guide for details\n\n    {\n        'EHealthPlanDefinition': {\n            'resourceType': 'PlanDefinition',\n            'id': '53450',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n                    'extension': [{\n                            'url': 'reference',\n                            'valueReference': {\n                                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/85109'\n                            }\n                        }, {\n                            'url': 'role',\n                            'valueCodeableConcept': {\n                                'coding': [{\n                                        'system': 'http://ehealth.sundhed.dk/cs/modifier-role',\n                                        'code': 'owner'\n                                    }\n                                ]\n                            }\n                        }\n                    ]\n                }\n            ],\n            'version': '97219ba1-2202-42a1-b99d-45de3a506b40',\n            'status': 'active'\n        },\n        'CarePlanCustomizationSummary': {\n            'timingCustomizationCount': 1,\n            'referenceRangeCustomizationCount': 1\n        }\n    }",
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
  "code" : "execute-careplan-customization-stats",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [
    {
      "name" : "anonymization",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "type" : "string"
    },
    {
      "name" : "organization",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "Reference"
    },
    {
      "name" : "period",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "Period"
    },
    {
      "name" : "return",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "Binary"
    }
  ]
}

```
