# Fetch measurement stats - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fetch measurement stats**

## OperationDefinition: Fetch measurement stats 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-fetch-measurement-stats | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:fetch-measurement-stats |

 

### Report Contents

 
This report contains counts of Measurements for each EpisodeOfCare: 
* Observation
* QuestionnaireResponse
* This report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.
 

URL: [base]/$fetch-measurement-stats

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
  "id" : "-s-fetch-measurement-stats",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-fetch-measurement-stats",
  "version" : "6.0.0",
  "name" : "fetch-measurement-stats",
  "title" : "Fetch measurement stats",
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
  "description" : "### Report Contents\nThis report contains counts of Measurements for each EpisodeOfCare:\n- Observation\n- QuestionnaireResponse\n- Media\n### Grouping \nThis report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on:\n    - Observation.effective inside period for Observations\n    - Questionnaire.authored inside period for QuestionnaireResponses\n    - Media.occurence inside period for Media\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nEHealthEpisodeOfCare is a Fhir resource. See the implementation guide for details\n\n    {\n        'EHealthEpisodeOfCare': {\n            'resourceType': 'EpisodeOfCare',\n            'id': '21357',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                    'valueReference': {\n                        'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/30170'\n                    }\n                }\n            ],\n            'status': 'active',\n            'diagnosis': [{\n                    'condition': {\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/70274'\n                    },\n                    'rank': 1\n                }\n            ],\n            'patient': {\n                'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/26565'\n            },\n            'managingOrganization': {\n                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/28358'\n            },\n            'period': {\n                'start': '1970-01-01T01:00:01+01:00',\n                'end': '1970-01-01T01:01:40+01:00'\n            }\n        },\n        'EpisodeOfCareMeasurementSummary': {\n            'observationCount': 5,\n            'mediaCount': 0,\n            'questionnaireResponseCount': 0\n        }\n    }",
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
  "code" : "fetch-measurement-stats",
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
