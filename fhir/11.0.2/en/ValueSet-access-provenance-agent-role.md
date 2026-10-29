# AccessProvenance Agent Role - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AccessProvenance Agent Role**

## ValueSet: AccessProvenance Agent Role (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/access-provenance-agent-role | *Version*:11.0.2 |
| Active as of 2026-01-08 | *Computable Name*:AccessProvenanceAgentRole |

 
AccessProvenance Agent Role 

 **References** 

* [ehealth-access-provenance](StructureDefinition-ehealth-access-provenance.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "access-provenance-agent-role",
  "url" : "http://ehealth.sundhed.dk/vs/access-provenance-agent-role",
  "version" : "11.0.2",
  "name" : "AccessProvenanceAgentRole",
  "title" : "AccessProvenance Agent Role",
  "status" : "active",
  "experimental" : true,
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
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/access-provenance-agent-role"
    }]
  }
}

```
