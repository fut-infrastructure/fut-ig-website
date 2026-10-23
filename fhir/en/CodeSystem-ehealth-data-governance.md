# Data Governance - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Data Governance**

## CodeSystem: Data Governance 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/data-governance | *Version*:11.0.1 |
| Active as of 2026-07-21 | *Computable Name*:DataGovernance |

 
Data governance codes describing how the master data of a resource is governed by the infrastructure. 

This Code system is referenced in the definition of the following value sets:

* This CodeSystem is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-data-governance",
  "url" : "http://ehealth.sundhed.dk/cs/data-governance",
  "version" : "11.0.1",
  "name" : "DataGovernance",
  "title" : "Data Governance",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-07-21T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Data governance codes describing how the master data of a resource is governed by the infrastructure.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [{
    "code" : "managed",
    "display" : "Managed",
    "definition" : "The master data of this resource is owned and kept in sync by the infrastructure. Master-data fields are locked against client updates and are maintained through infrastructure paths only."
  }]
}

```
