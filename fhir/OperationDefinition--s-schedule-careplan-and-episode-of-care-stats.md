# Schedule careplan and episode of care stats - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Schedule careplan and episode of care stats**

## OperationDefinition: Schedule careplan and episode of care stats 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-schedule-careplan-and-episode-of-care-stats | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:schedule-careplan-and-episode-of-care-stats |

 

### Report Contents

 
This report contains a count of active EpisodeOfCare and CarePlans. 

### Grouping

 
This report is grouped by ConditionCode. Each group is returned in a separate JSon file. 

### Parameters

 
* organization: Filter on EpisodeOfCare.managingOrganization match
* period: Filter on CarePlan.period overlap
 

### Output

 
Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups. 

### Example output

 
The ConditionCode is a Fhir CodeableConcept. See the implementation guide for details 

```
{
    'ConditionCode': {
        'valueCodeableConcept': {
            'coding': [{
                    'system': 'urn:oid:1.2.208.176.2.4',
                    'code': 'DJ44'
                }
            ]
        }
    },
    'ConditionSummary': {
        'activeEpisodeOfCareCount': 1,
        'activeCarePlanCount': 1
    }
}

```

 

URL: [base]/$schedule-careplan-and-episode-of-care-stats

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
  "id" : "-s-schedule-careplan-and-episode-of-care-stats",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-schedule-careplan-and-episode-of-care-stats",
  "version" : "6.0.0",
  "name" : "schedule-careplan-and-episode-of-care-stats",
  "title" : "Schedule careplan and episode of care stats",
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
  "description" : "### Report Contents\nThis report contains a count of active EpisodeOfCare and CarePlans.\n### Grouping \nThis report is grouped by ConditionCode. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on CarePlan.period overlap\n\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nThe ConditionCode is a Fhir CodeableConcept. See the implementation guide for details\n\n    {\n        'ConditionCode': {\n            'valueCodeableConcept': {\n                'coding': [{\n                        'system': 'urn:oid:1.2.208.176.2.4',\n                        'code': 'DJ44'\n                    }\n                ]\n            }\n        },\n        'ConditionSummary': {\n            'activeEpisodeOfCareCount': 1,\n            'activeCarePlanCount': 1\n        }\n    }",
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
  "code" : "schedule-careplan-and-episode-of-care-stats",
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
