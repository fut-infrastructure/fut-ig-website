# Retrieve count of assignments for material - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Retrieve count of assignments for material**

## OperationDefinition: Retrieve count of assignments for material 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-assigned-material-count | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:assigned-material-count |

 
This operation counts the number of material assignments (`ehealth-material-communication resources`) for a given `ehealth-documentreference` from the Plan service. This is done by performing an internal search using the given ehealth-documentReference, date and status parameters. Regardless of the given parameters, only `ehealth-material-communication` resources referring to an active `ehealth-episodeofcare` are counted. The group-by-careteam parameter determines whether a simple '_summary=count' search is performed or if all results should be fetched to extract and count based on participant CareTeam references. 

## Input

 
The operation has two mandatory input parameters: 
* An EHealthDocumentReference reference
* One or more status codes
 
Additionally, there are two optional input parameters: 
* A boolean indicating whether to group the result by participant CareTeam references
* A date parameter
 

### EHealthDocumentReference reference

 
A mandatory reference to an EHealthDocumentReference (general-material) in the plan service. Only `ehealth-material-communication` resources with the given reference in `Communication.payload.content` are counted. 

### Group-by-careTeam boolean

 
The group-by-careTeam parameter is optional. When not supplied by the user, it is assumed false. When it is set to true, the operation returns a count per CareTeam referenced as a participant in the matching ehealth-material-communication resources. 

### Date

 
The date parameter is optional, however, the count is always filtered by a date. If one is not given by the user, the date of execution is used instead. Only `ehealth-material-communication` resources whose `Communication.period` contains the used date are counted. 

### Status code list

 
At least one `status` code must be supplied by the user. Only `ehealth-material-communications` with one of the supplied status codes in `Communication.status` will be counted. 

## Output

 
When supplied with valid inputs, the operation will return a Bundle resource with a single Parameters resource in its `Bundle.entry` list. The Parameters resource format depends on whether the group-by-careTeam parameter was true. 

### Output Parameters

 
If group-by-careTeam was false or not present. The Parameters resource will only contain a single parameter, named `total` with the value being the count of the `ehealth-material-communication` resources found to satisfy the given parameters. 
Example of output with group-by-careTeam as false or not present: 

```
"resource": {
    "resourceType": "Parameters",
    "parameter": [{
            "name": "total",
            "valueInteger": 42
            }]
    }]
}

```

 
If group-by-careTeam was true, the Parameters resource will contain a parameter for each CareTeam that is referenced in `Communication.participant.actor` in any of the matching `ehealth-material-communication` resources. The name of each parameter will be the reference value (CareTeam/[id]) of the CareTeam and the value will be the count of matching `ehealth-material-communication` resources that reference that CareTeam. It is worth noting that if an `ehealth-material-communication` has two (or more) distinct participant CareTeams, this will add to the count of each of them. 
Example of output with group-by-careTeam as true: 

```
"resource": {
    "resourceType": "Parameters",
    "parameter": [{
            "name": "CareTeam/123",
            "valueInteger": 5
            },
            {
            "name": "CareTeam/456",
            "valueInteger": 7
            }]
    }]
}

```

 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-assigned-material-count",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-assigned-material-count",
  "version" : "10.0.0",
  "name" : "assigned-material-count",
  "title" : "Retrieve count of assignments for material",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-08-06T13:17:54+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "This operation counts the number of material assignments (``ehealth-material-communication resources``) for a given ``ehealth-documentreference`` from the Plan service. This is done by performing an internal search using the given ehealth-documentReference, date and status parameters. Regardless of the given parameters, only ``ehealth-material-communication`` resources referring to an active ``ehealth-episodeofcare`` are counted. The group-by-careteam parameter determines whether a simple '_summary=count' search is performed or if all results should be fetched to extract and count based on participant CareTeam references.\r\n\r\n## Input\r\nThe operation has two mandatory input parameters:\r\n - An EHealthDocumentReference reference\r\n - One or more status codes\r\n\r\nAdditionally, there are two optional input parameters:\r\n - A boolean indicating whether to group the result by participant CareTeam references\r\n - A date parameter\r\n\r\n### EHealthDocumentReference reference\r\nA mandatory reference to an EHealthDocumentReference (general-material) in the plan service. Only ``ehealth-material-communication`` resources with the given reference in ``Communication.payload.content`` are counted.\r\n\r\n### Group-by-careTeam boolean\r\nThe group-by-careTeam parameter is optional. When not supplied by the user, it is assumed false. When it is set to true, the operation returns a count per CareTeam referenced as a participant in the matching ehealth-material-communication resources.\r\n\r\n### Date\r\nThe date parameter is optional, however, the count is always filtered by a date. If one is not given by the user, the date of execution is used instead. Only ``ehealth-material-communication`` resources whose ``Communication.period`` contains the used date are counted.\r\n\r\n### Status code list\r\nAt least one ``status`` code must be supplied by the user. Only ``ehealth-material-communications`` with one of the supplied status codes in ``Communication.status`` will be counted.\r\n\r\n## Output\r\nWhen supplied with valid inputs, the operation will return a Bundle resource with a single Parameters resource in its ``Bundle.entry`` list. The Parameters resource format depends on whether the group-by-careTeam parameter was true.\r\n\r\n### Output Parameters\r\nIf group-by-careTeam was false or not present. The Parameters resource will only contain a single parameter, named ``total`` with the value being the count of the ``ehealth-material-communication`` resources found to satisfy the given parameters.\r\n\r\nExample of output with group-by-careTeam as false or not present:\r\n```\r\n\"resource\": {\r\n    \"resourceType\": \"Parameters\",\r\n    \"parameter\": [{\r\n            \"name\": \"total\",\r\n            \"valueInteger\": 42\r\n            }]\r\n    }]\r\n}\r\n```\r\n\r\nIf group-by-careTeam was true, the Parameters resource will contain a parameter for each CareTeam that is referenced in ``Communication.participant.actor`` in any of the matching ``ehealth-material-communication`` resources. The name of each parameter will be the reference value (CareTeam/[id]) of the CareTeam and the value will be the count of matching ``ehealth-material-communication`` resources that reference that CareTeam. It is worth noting that if an ``ehealth-material-communication`` has two (or more) distinct participant CareTeams, this will add to the count of each of them.\r\n\r\nExample of output with group-by-careTeam as true:\r\n```\r\n\"resource\": {\r\n    \"resourceType\": \"Parameters\",\r\n    \"parameter\": [{\r\n            \"name\": \"CareTeam/123\",\r\n            \"valueInteger\": 5\r\n            },\r\n            {\r\n            \"name\": \"CareTeam/456\",\r\n            \"valueInteger\": 7\r\n            }]\r\n    }]\r\n}\r\n```\r\n",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "assigned-material-count",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "ehealth-documentReference",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "Mandatory reference for general-material ``ehealth-documentReference`` from the Plan service.",
    "type" : "Reference"
  },
  {
    "name" : "group-by-careTeam",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "group the count by CareTeams present in the ``Communication.participant.actor`` references",
    "type" : "boolean"
  },
  {
    "name" : "date",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "Only count ``ehealth-material-communications`` where the ``Communication.period`` contains the date",
    "type" : "dateTime"
  },
  {
    "name" : "status",
    "use" : "in",
    "min" : 1,
    "max" : "*",
    "documentation" : "Only count ``ehealth-material-communications`` with one of the given statuses",
    "type" : "string"
  }]
}

```
