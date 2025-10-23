# Audit Restriction Levels - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Audit Restriction Levels**

## CodeSystem: Audit Restriction Levels 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/audit-restriction-levels | *Version*:6.0.0 |
| Active as of 2025-04-02 | *Computable Name*:auditRestrictionLevels |

 
Audit Event Restriction Levels used to indicate whether the audit log should be hidden from the citizen and/or the legal guardian when interacting with the infrastructure. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [auditRestrictionLevels](ValueSet-ehealth-audit-restriction-levels.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-audit-restriction-levels",
  "url" : "http://ehealth.sundhed.dk/cs/audit-restriction-levels",
  "version" : "6.0.0",
  "name" : "auditRestrictionLevels",
  "title" : "Audit Restriction Levels",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-04-02T00:00:00+00:00",
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
  "description" : "Audit Event Restriction Levels used to indicate whether the audit log should be hidden from the citizen and/or the legal guardian when interacting with the infrastructure.",
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
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "NotCitizen",
      "display" : "Not a Citizen",
      "definition" : "The citizen cannot see the specific log entry.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ikke borger"
        }
      ]
    },
    {
      "code" : "NotGuardian",
      "display" : "Not a Guardian",
      "definition" : "The legal guardian cannot see the log entry.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ikke forældremyndighedsindehaver"
        }
      ]
    }
  ]
}

```
