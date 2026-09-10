# Fetch careplan and episode of care stats - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fetch careplan and episode of care stats**

## OperationDefinition: Fetch careplan and episode of care stats 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-fetch-careplan-and-episode-of-care-stats | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:fetch-careplan-and-episode-of-care-stats |

 

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

 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-fetch-careplan-and-episode-of-care-stats",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-fetch-careplan-and-episode-of-care-stats",
  "version" : "10.0.2",
  "name" : "fetch-careplan-and-episode-of-care-stats",
  "title" : "Fetch careplan and episode of care stats",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-09-10T10:12:06+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "### Report Contents\nThis report contains a count of active EpisodeOfCare and CarePlans.\n### Grouping \nThis report is grouped by ConditionCode. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on CarePlan.period overlap\n\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nThe ConditionCode is a Fhir CodeableConcept. See the implementation guide for details\n\n    {\n        'ConditionCode': {\n            'valueCodeableConcept': {\n                'coding': [{\n                        'system': 'urn:oid:1.2.208.176.2.4',\n                        'code': 'DJ44'\n                    }\n                ]\n            }\n        },\n        'ConditionSummary': {\n            'activeEpisodeOfCareCount': 1,\n            'activeCarePlanCount': 1\n        }\n    }",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : true,
  "code" : "fetch-careplan-and-episode-of-care-stats",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "anonymization",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "This parameter is used to control if the report should be anonymized or not. If the value is set to NONE (no anonymization) and the user lacks the required permission, an exception is thrown.",
    "type" : "string"
  },
  {
    "name" : "organization",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "Filter on EpisodeOfCare.managingOrganization match",
    "type" : "Reference"
  },
  {
    "name" : "period",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "Filter on CarePlan.period overlap",
    "type" : "Period"
  },
  {
    "name" : "return",
    "use" : "out",
    "min" : 0,
    "max" : "1",
    "type" : "Binary"
  }]
}

```
