# Fetch careplans by patient - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fetch careplans by patient**

## OperationDefinition: Fetch careplans by patient 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-fetch-careplans-by-patient | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:fetch-careplans-by-patient |

 

### Report Contents

 
This report contains the following resources: 
* EpisodeOfCare
* PlanDefinition
* CarePlan
* This report is grouped by EpisodeOfCare. Each group is returned in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details


  { 'EHealthEpisodeOfCare': { 'resourceType': 'EpisodeOfCare', 'id': '30254', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/88873' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/66740' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/18637' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/16046' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } }, 'EHealthCarePlan': [{ 'resourceType': 'CarePlan', 'id': '1597', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan'] }, 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/59578' } ], 'status': 'draft', 'intent': 'option', 'category': [{ 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/careplan-category', 'code': 'TBD' } ] } ], 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/57779' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/30254' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' }, 'addresses': [{ 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/74721' } ], 'activity': [{ 'reference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/76916' } } ] } ], 'EHealthPlanDefinition': [{ 'resourceType': 'PlanDefinition', 'id': '59578', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role', 'extension': [{ 'url': 'reference', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41757' } }, { 'url': 'role', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/modifier-role', 'code': 'owner' } ] } } ] } ], 'version': 'c701b8e8-abe6-41bd-9db5-c05b94bc1e2b', 'status': 'active' } ], 'EHealthServiceRequest': [{ 'resourceType': 'ServiceRequest', 'id': '76916', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies', 'code': 'TBD' } ] } } ], 'definition': [{ 'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/13593' } ], 'status': 'completed', 'intent': 'filler-order', 'code': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code', 'code': 'TBD' } ], 'text': '31d136f2-0b98-4e0a-8f82-f0731b54893d' }, 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/49397' }, 'context': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/72791' } } ] }
 

URL: [base]/$fetch-careplans-by-patient

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
  "id" : "-s-fetch-careplans-by-patient",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-fetch-careplans-by-patient",
  "version" : "6.0.0",
  "name" : "fetch-careplans-by-patient",
  "title" : "Fetch careplans by patient",
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
  "description" : "### Report Contents\nThis report contains the following resources:\n- EpisodeOfCare\n- PlanDefinition\n- CarePlan\n- ServiceRequest\n### Grouping \nThis report is grouped by EpisodeOfCare. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on CarePlan.period overlap\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'EHealthEpisodeOfCare': {\n            'resourceType': 'EpisodeOfCare',\n            'id': '30254',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                    'valueReference': {\n                        'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/88873'\n                    }\n                }\n            ],\n            'status': 'active',\n            'diagnosis': [{\n                    'condition': {\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/66740'\n                    },\n                    'rank': 1\n                }\n            ],\n            'patient': {\n                'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/18637'\n            },\n            'managingOrganization': {\n                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/16046'\n            },\n            'period': {\n                'start': '1970-01-01T01:00:01+01:00',\n                'end': '1970-01-01T01:01:40+01:00'\n            }\n        },\n        'EHealthCarePlan': [{\n                'resourceType': 'CarePlan',\n                'id': '1597',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careplan']\n                },\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/PlanDefinition/59578'\n                    }\n                ],\n                'status': 'draft',\n                'intent': 'option',\n                'category': [{\n                        'coding': [{\n                                'system': 'http://ehealth.sundhed.dk/cs/careplan-category',\n                                'code': 'TBD'\n                            }\n                        ]\n                    }\n                ],\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/57779'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/30254'\n                },\n                'period': {\n                    'start': '1970-01-01T01:00:01+01:00',\n                    'end': '1970-01-01T01:01:40+01:00'\n                },\n                'addresses': [{\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/74721'\n                    }\n                ],\n                'activity': [{\n                        'reference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/ServiceRequest/76916'\n                        }\n                    }\n                ]\n            }\n        ],\n        'EHealthPlanDefinition': [{\n                'resourceType': 'PlanDefinition',\n                'id': '59578',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-plandefinition']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role',\n                        'extension': [{\n                                'url': 'reference',\n                                'valueReference': {\n                                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/41757'\n                                }\n                            }, {\n                                'url': 'role',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/modifier-role',\n                                            'code': 'owner'\n                                        }\n                                    ]\n                                }\n                            }\n                        ]\n                    }\n                ],\n                'version': 'c701b8e8-abe6-41bd-9db5-c05b94bc1e2b',\n                'status': 'active'\n            }\n        ],\n        'EHealthServiceRequest': [{\n                'resourceType': 'ServiceRequest',\n                'id': '76916',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy',\n                        'valueCodeableConcept': {\n                            'coding': [{\n                                    'system': 'http://ehealth.sundhed.dk/cs/measurement-sharing-policies',\n                                    'code': 'TBD'\n                                }\n                            ]\n                        }\n                    }\n                ],\n                'definition': [{\n                        'reference': 'https://plan.local.ehealth.sundhed.dk/fhir/ActivityDefinition/13593'\n                    }\n                ],\n                'status': 'completed',\n                'intent': 'filler-order',\n                'code': {\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/activitydefinition-code',\n                            'code': 'TBD'\n                        }\n                    ],\n                    'text': '31d136f2-0b98-4e0a-8f82-f0731b54893d'\n                },\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/49397'\n                },\n                'context': {\n                    'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/EpisodeOfCare/72791'\n                }\n            }\n        ]\n    }\n",
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
  "code" : "fetch-careplans-by-patient",
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
