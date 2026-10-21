# AccessProvenance Agent Role - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AccessProvenance Agent Role**

## CodeSystem: AccessProvenance Agent Role 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/access-provenance-agent-role | *Version*:11.0.0 |
| Active as of 2026-01-08 | *Computable Name*:AccessProvenanceAgentRole |

 
AccessProvenance Agent Role 

This Code system is referenced in the definition of the following value sets:

* [AccessProvenance Agent Role](ValueSet-access-provenance-agent-role.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "access-provenance-agent-role",
  "url" : "http://ehealth.sundhed.dk/cs/access-provenance-agent-role",
  "version" : "11.0.0",
  "name" : "AccessProvenanceAgentRole",
  "title" : "AccessProvenance Agent Role",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-08T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "AccessProvenance Agent Role",
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
    "code" : "assisted-login",
    "display" : "Assisted login",
    "definition" : "Assisted login"
  },
  {
    "code" : "mitid-login",
    "display" : "MitID login",
    "definition" : "MitID login"
  }]
}

```
