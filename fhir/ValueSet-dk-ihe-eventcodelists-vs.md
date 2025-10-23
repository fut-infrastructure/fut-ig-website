# DK_IHE_EventCodeLists_VS - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK_IHE_EventCodeLists_VS**

## ValueSet: DK_IHE_EventCodeLists_VS 

| | |
| :--- | :--- |
| *Official URL*:http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-eventcodelists-vs | *Version*:6.0.0 |
| Active as of 2025-03-07 | *Computable Name*:DK_IHE_EventCodeLists_VS |

 
Event codes used in DK IHE Document sharing. The codes shall be NPU or procedure codes used in the Danish health care systems. 

 **References** 

* Included into [EventTypeCodes](ValueSet-ehealth-event-type-codes.md)

### Logical Definition (CLD)

 

### Expansion

This value set contains 28 concepts

**Additional Designations and Language Displays**

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
  "id" : "dk-ihe-eventcodelists-vs",
  "url" : "http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-eventcodelists-vs",
  "version" : "6.0.0",
  "name" : "DK_IHE_EventCodeLists_VS",
  "title" : "DK_IHE_EventCodeLists_VS",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-03-07T00:00:00+01:00",
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
  "description" : "Event codes used in DK IHE Document sharing. The codes shall be NPU or procedure codes used in the Danish health care systems.",
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
        "system" : "urn:oid:1.2.208.176.2.4",
        "concept" : [
          {
            "code" : "ALAL01",
            "display" : "Kræftsygdomme"
          },
          {
            "code" : "ALAL02",
            "display" : "Hjertesygdomme"
          },
          {
            "code" : "ALAL03",
            "display" : "Psykiske lidelser og adfærdsmæssige forstyrrelser"
          },
          {
            "code" : "ALAL21",
            "display" : "Kronisk obstruktiv lungesygdom (KOL)"
          },
          {
            "code" : "ALAL22",
            "display" : "Type 2-diabetes"
          },
          {
            "code" : "ALAL23",
            "display" : "Osteoporose"
          },
          {
            "code" : "ALAL51",
            "display" : "Graviditet, fødsel og barsel"
          },
          {
            "code" : "ALAL52",
            "display" : "Nyfødte"
          }
        ]
      },
      {
        "system" : "urn:oid:1.2.208.176.2.1",
        "concept" : [
          {
            "code" : "NPU03804",
            "display" : "Pt—Legeme; masse = ? kg"
          },
          {
            "code" : "NPU03963",
            "display" : "U—Erythrocytter; arb.k.(proc.) = ?"
          },
          {
            "code" : "NPU21692",
            "display" : "Hjerte—Systole; frekv. = ? × 1/min"
          },
          {
            "code" : "NPU22089",
            "display" : "P(kB)—Glucose; stofk. = ? mmol/L"
          },
          {
            "code" : "NPU03011",
            "display" : "Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?"
          },
          {
            "code" : "NPU27281",
            "display" : "Pt—Legeme; massekoefficient(masse/kvadreret højde) = ? kg/m²"
          },
          {
            "code" : "NPU19748",
            "display" : "P—C-reaktivt protein; massek. = ? mg/L"
          },
          {
            "code" : "DNK05472",
            "display" : "Blodtryk systolisk;Arm"
          },
          {
            "code" : "DNK05473",
            "display" : "Blodtryk diastolisk;Arm"
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
      },
      {
        "system" : "urn:oid:1.2.208.176.7.3.1"
      }
    ]
  }
}

```
