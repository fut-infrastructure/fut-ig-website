# AccessProvenance Agent Role - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AccessProvenance Agent Role**

## ValueSet: AccessProvenance Agent Role (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/access-provenance-agent-role | *Version*:10.0.2 |
| Active as of 2026-01-08 | *Computable Name*:AccessProvenanceAgentRole |

 
AccessProvenance Agent Role 

 **References** 

* [ehealth-access-provenance](StructureDefinition-ehealth-access-provenance.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "access-provenance-agent-role",
  "url" : "http://ehealth.sundhed.dk/vs/access-provenance-agent-role",
  "version" : "10.0.2",
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
