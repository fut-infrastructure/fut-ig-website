# Execute careteam stats - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Execute careteam stats**

## OperationDefinition: Execute careteam stats 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-execute-careteam-stats | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:execute-careteam-stats |

 

### Report Contents

 
This report contains counts of resources associated with CareTeams: 
* EpisodeOfCare
* CarePlan
* This report is grouped by CareTeam. Each group is returned in a separate JSon file.
* organization: Filter on CareTeam.managingOrganization match
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.
 

URL: [base]/$execute-careteam-stats

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
  "id" : "-s-execute-careteam-stats",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-execute-careteam-stats",
  "version" : "6.0.0",
  "name" : "execute-careteam-stats",
  "title" : "Execute careteam stats",
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
  "description" : "### Report Contents\nThis report contains counts of resources associated with CareTeams:\n- EpisodeOfCare\n- CarePlan\n- Task: Count for each task category\n### Grouping \nThis report is grouped by CareTeam. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on CareTeam.managingOrganization match\n- period: Filter on:\n    - CarePlan.period overlap for CarePlans\n    - EpisodeOfCare.period overlap for EpisodeOfCare\n    - Task.authoredOn inside period for Tasks\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nEHealthCareTeam is a Fhir resource. See the implementation guide for details\n\n    {\n        'EHealthCareTeam': {\n            'resourceType': 'CareTeam',\n            'id': '12958',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-careteam']\n            },\n            'identifier': [{\n                    'id': '59f70e4e-1c31-4647-8c91-404939b6b14e',\n                    'system': 'urn:ietf:rfc:3986'\n                }\n            ],\n            'status': 'active',\n            'name': '0cea5c11-af39-4e5c-8733-9f532ea9961a',\n            'reasonCode': [{\n                    'coding': [{\n                            'system': 'http://ehealth.sundhed.dk/cs/conditions',\n                            'code': 'TBD'\n                        }\n                    ]\n                }\n            ],\n            'managingOrganization': [{\n                    'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/66642'\n                }\n            ]\n        },\n        'CareTeamSummary': {\n            'episodeOfCareCount': 2,\n            'carePlanCount': 6,\n            'taskCountByCategory': {\n                'MissingMeasurementResolving': 2\n            }\n        }\n    }",
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
  "code" : "execute-careteam-stats",
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
