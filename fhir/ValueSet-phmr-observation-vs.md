# MedCom PHMR Observation ValueSet - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedCom PHMR Observation ValueSet**

## ValueSet: MedCom PHMR Observation ValueSet 

| | |
| :--- | :--- |
| *Official URL*:http://medcom.dk/terminologi/phmr-observation-vs | *Version*:6.0.0 |
| Active as of 2025-05-13 | *Computable Name*:MedComPHMRObservationValueSet |

 
Value set used for Danish (DK) HL7 CDA profile PHMR-DK observation codes. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 16 concepts

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
  "id" : "phmr-observation-vs",
  "url" : "http://medcom.dk/terminologi/phmr-observation-vs",
  "version" : "6.0.0",
  "name" : "MedComPHMRObservationValueSet",
  "title" : "MedCom PHMR Observation ValueSet",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-05-13T00:00:00+00:00",
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
  "description" : "Value set used for Danish (DK) HL7 CDA profile PHMR-DK observation codes.",
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
        "system" : "urn:oid:1.2.208.176.2.1",
        "concept" : [
          {
            "code" : "NPU03804",
            "display" : "Pt—Legeme; masse = ? kg"
          },
          {
            "code" : "NPU19748",
            "display" : "P—C-reaktivt protein; massek. = ? mg/L"
          },
          {
            "code" : "NPU22089",
            "display" : "P(kB)—Glucose; stofk. = ? mmol/L"
          },
          {
            "code" : "NPU03963",
            "display" : "U—Erythrocytter; arb.k.(proc.) = ?"
          },
          {
            "code" : "DNK05472",
            "display" : "Blodtryk systolisk;Arm"
          },
          {
            "code" : "DNK05473",
            "display" : "Blodtryk diastolisk;Arm"
          },
          {
            "code" : "NPU21692",
            "display" : "Hjerte—Systole; frekv. = ? × 1/min"
          },
          {
            "code" : "NPU03011",
            "display" : "Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?"
          },
          {
            "code" : "NPU27281",
            "display" : "Pt—Legeme; massekoefficient(masse/kvadreret højde) = ? kg/m²"
          }
        ]
      },
      {
        "system" : "urn:oid:1.2.208.184.100.8",
        "concept" : [
          {
            "code" : "MCS88100",
            "display" : "FEV6;Lunge"
          },
          {
            "code" : "MCS88015",
            "display" : "FEV1;Lunge"
          },
          {
            "code" : "MCS88019",
            "display" : "Blodtryk hjemme systolisk;Arm"
          },
          {
            "code" : "MCS88020",
            "display" : "Blodtryk hjemme diastolisk;Arm"
          },
          {
            "code" : "MCS88050",
            "display" : "Rejse sætte sig testen;Pt"
          },
          {
            "code" : "MCS88137",
            "display" : "CAT score;Pt"
          },
          {
            "code" : "MCS88021",
            "display" : "MRC skala;Pt(KOL)"
          }
        ]
      }
    ]
  }
}

```
