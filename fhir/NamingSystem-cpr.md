# Danish civil registration system - CPR - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish civil registration system - CPR**

## NamingSystem: Danish civil registration system - CPR 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/NamingSystem/cpr | *Version*:6.0.0 |
| Active as of 1968-04-02 | *Computable Name*:Danish civil registration system - CPR |

 
The Danish civil registration system ("CPR") encompasses basic personal data about anyone with a civil registration number. A civil registration number shall be allocated to anyone who: 1) is registered in the national register in Denmark on the grounds of birth or relocation from abroad; 2) is included under Arbejdsmarkedets TillægsPension (ATP); 3) according to the tax authorities, is required to have a civil registration number for the purpose of tax processing in Denmark. 

### Summary

| | |
| :--- | :--- |
| Defining URL | http://ehealth.sundhed.dk/fhir/NamingSystem/cpr |
| Version | 6.0.0 |
| Name | Danish civil registration system - CPR |
| Status | active |
| Definition | The Danish civil registration system ("CPR") encompasses basic personal data about anyone with a civil registration number. A civil registration number shall be allocated to anyone who: 1) is registered in the national register in Denmark on the grounds of birth or relocation from abroad; 2) is included under Arbejdsmarkedets TillægsPension (ATP); 3) according to the tax authorities, is required to have a civil registration number for the purpose of tax processing in Denmark. |
| Publisher | Den telemedicinske infrastruktur (eHealth Infrastructure) |

### Identifiers

* **Type**: OID
  * **Value**: 1.2.208.176.1.2
* **Type**: URI
  * **Value**: urn:oid:1.2.208.176.1.2



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "cpr",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://ehealth.sundhed.dk/fhir/NamingSystem/cpr"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "6.0.0"
    }
  ],
  "name" : "Danish civil registration system - CPR",
  "status" : "active",
  "kind" : "identifier",
  "date" : "1968-04-02T00:00:00+00:00",
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
  "responsible" : "CPR-kontoret, Økonomi- og Indenrigsministeriets departement",
  "type" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
        "code" : "SB",
        "display" : "Social Beneficiary Identifier"
      }
    ]
  },
  "description" : "The Danish civil registration system (\"CPR\") encompasses basic personal data about anyone with a civil registration number. A civil registration number shall be allocated to anyone who: 1) is registered in the national register in Denmark on the grounds of birth or relocation from abroad; 2) is included under Arbejdsmarkedets TillægsPension (ATP); 3) according to the tax authorities, is required to have a civil registration number for the purpose of tax processing in Denmark.",
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
  "uniqueId" : [
    {
      "type" : "oid",
      "value" : "1.2.208.176.1.2"
    },
    {
      "type" : "uri",
      "value" : "urn:oid:1.2.208.176.1.2"
    }
  ]
}

```
