# Provenance/1 - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Provenance/1**

## Example Provenance: Provenance/1

Profile: [ehealth-access-provenance](StructureDefinition-ehealth-access-provenance.md)

Provenance for [Nancy Ann Berggren (official) Unknown, DoB Unknown ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#2512489996 (use: official, ))](Patient-102.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2026-01-12 10:00:00+0100 --> (ongoing) |
| Recorded | 2026-01-12 10:00:00+0100 |
| Activity | User authentication |

**Agents**

* **Role**: 
  * **who**: [Nancy Ann Berggren (official) Unknown, DoB Unknown ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#2512489996 (use: official, ))](Patient-102.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "1",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-access-provenance"]
  },
  "target" : [{
    "reference" : "Patient/102"
  }],
  "occurredPeriod" : {
    "start" : "2026-01-12T10:00:00+01:00"
  },
  "recorded" : "2026-01-12T10:00:00+01:00",
  "activity" : {
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/access-provenance-activity",
      "code" : "user-authentication"
    }]
  },
  "agent" : [{
    "role" : [{
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/access-provenance-agent-role",
        "code" : "assisted-login"
      }]
    }],
    "who" : {
      "reference" : "Patient/102"
    }
  }]
}

```
