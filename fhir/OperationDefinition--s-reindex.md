# reindex - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **reindex**

## OperationDefinition: reindex 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-reindex | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:reindex |



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-reindex",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-reindex",
  "version" : "10.0.1",
  "name" : "reindex",
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
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : true,
  "code" : "reindex",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "url",
    "use" : "in",
    "min" : 0,
    "max" : "*",
    "documentation" : "Optionally provides one ore more relative search parameter URLs (e.g. \"Patient?active=true\" or \"Observation?\") that will be reindexed. Note that the URL applies to the resources as they are currently indexed, so you should not use a search parameter that needs reindexing in the URL or some resources may be missed. If no URLs are provided, all resources of all types will be reindexed.",
    "type" : "string"
  },
  {
    "name" : "reindexSearchParameters",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "Should search parameters be reindexed (default: ALL)",
    "type" : "code"
  },
  {
    "name" : "optimizeStorage",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "Should we attempt to optimize storage for resources (default: NONE)",
    "type" : "code"
  },
  {
    "name" : "optimisticLock",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "Should we attempt to optimistically lock resources being reindexed in order to avoid concurrency issues (default: true)",
    "type" : "boolean"
  },
  {
    "name" : "correctCurrentVersion",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "Should the indexer check and correct resources with an invalid current version pointer (default: NONE)",
    "type" : "code"
  },
  {
    "name" : "batchSize",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "How many resources should be reindexed in a single batch. This can be reduced if you need to reindex large resources and therefore need to reduce memory footprint. Values larger than 500 or less than 1 will be ignored (default: 500)",
    "type" : "integer"
  },
  {
    "name" : "partitionId",
    "use" : "in",
    "min" : 0,
    "max" : "*",
    "type" : "string"
  }]
}

```
