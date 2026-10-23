# Audit Restriction Levels - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Audit Restriction Levels**

## ValueSet: Audit Restriction Levels 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/audit-restriction-levels | *Version*:11.0.1 |
| Active as of 2025-04-02 | *Computable Name*:auditRestrictionLevels |

 **References** 

* [ehealth-auditevent](StructureDefinition-ehealth-auditevent.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-audit-restriction-levels",
  "url" : "http://ehealth.sundhed.dk/vs/audit-restriction-levels",
  "version" : "11.0.1",
  "name" : "auditRestrictionLevels",
  "title" : "Audit Restriction Levels",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-04-02T00:00:00+00:00",
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
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/audit-restriction-levels"
    },
    {
      "valueSet" : ["http://hl7.org/fhir/ValueSet/security-labels"]
    }]
  }
}

```
