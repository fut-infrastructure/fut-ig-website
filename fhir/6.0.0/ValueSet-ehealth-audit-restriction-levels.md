# Audit Restriction Levels - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Audit Restriction Levels**

## ValueSet: Audit Restriction Levels 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/audit-restriction-levels | *Version*:6.0.0 |
| Active as of 2025-04-02 | *Computable Name*:auditRestrictionLevels |

 **References** 

* [ehealth-auditevent](StructureDefinition-ehealth-auditevent.md)

### Logical Definition (CLD)

This value set includes codes based on the following rules:

* Include all codes defined in [`http://ehealth.sundhed.dk/cs/audit-restriction-levels`](CodeSystem-ehealth-audit-restriction-levels.md)version 📦6.0.0
* Import all the codes that are contained in [SecurityLabels](http://hl7.org/fhir/R4/valueset-security-labels.html)

 

### Expansion

This value set contains 497 concepts

**Additional Designations**

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
  "id" : "ehealth-audit-restriction-levels",
  "url" : "http://ehealth.sundhed.dk/vs/audit-restriction-levels",
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
  "compose" : {
    "include" : [
      {
        "system" : "http://ehealth.sundhed.dk/cs/audit-restriction-levels"
      },
      {
        "valueSet" : ["http://hl7.org/fhir/ValueSet/security-labels"]
      }
    ]
  }
}

```
