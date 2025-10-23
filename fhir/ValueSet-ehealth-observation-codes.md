# Observation Codes - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation Codes**

## ValueSet: Observation Codes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/observation-codes | *Version*:6.0.0 |
| Active as of 2019-02-08 | *Computable Name*:ObservationCodes |

 
Observation codes value set. 

 **References** 

* Included into [ActivityDefinitionCode](ValueSet-ehealth-activitydefinition-code.md)
* Included into [ClinicalImpressionFindingCodes](ValueSet-ehealth-clinicalimpression-finding-codes.md)
* Included into [GoalTargetMeasure](ValueSet-goal-target-measure.md)
* Included into [ReferenceRangeType](ValueSet-ehealth-reference-range-type.md)
* [ehealth-observation](StructureDefinition-ehealth-observation.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on:

* Loinc v2.81
* [codesystem NPU DK v6.0.0 (CodeSystem)](CodeSystem-1.2.208.176.2.1--20190829.md)
* [codesystem Sundhedsvæsenets klassifikationssystem (SKS) v6.0.0 (CodeSystem)](CodeSystem-urn-oid-1.2.208.176.2.4.md)
* [codesystem MedCom Measurement CodeSystem v6.0.0 (CodeSystem)](CodeSystem-urn-oid-1.2.208.184.100.8.md)

This value set contains 25 concepts

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
  "id" : "ehealth-observation-codes",
  "url" : "http://ehealth.sundhed.dk/vs/observation-codes",
  "version" : "6.0.0",
  "name" : "ObservationCodes",
  "title" : "Observation Codes",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-08T00:00:00+00:00",
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
  "description" : "Observation codes value set.",
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
            "code" : "DNK05472",
            "display" : "Blodtryk systolisk;Arm",
            "designation" : [
              {
                "language" : "da",
                "value" : "Arm—Blodtryk(systolisk); tryk = ? mmHg"
              }
            ]
          },
          {
            "code" : "DNK05473",
            "display" : "Blodtryk diastolisk;Arm",
            "designation" : [
              {
                "language" : "da",
                "value" : "Arm—Blodtryk(diastolisk); tryk = ? mmHg"
              }
            ]
          },
          {
            "code" : "NPU03011",
            "display" : "Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Oxygen saturation"
              },
              {
                "language" : "da",
                "value" : "Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?"
              }
            ]
          },
          {
            "code" : "NPU21692",
            "display" : "Hjerte—Systole; frekv. = ? × 1/min",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Heartbeats per minute"
              },
              {
                "language" : "da",
                "value" : "Hjerte—Systole; frekv. = ? × 1/min"
              }
            ]
          },
          {
            "code" : "NPU03804",
            "display" : "Pt—Legeme; masse = ? kg",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Weight in kilogrammes"
              },
              {
                "language" : "da",
                "value" : "Pt—Legeme; masse = ? kg"
              }
            ]
          },
          {
            "code" : "NPU27281",
            "display" : "Pt—Legeme; massekoefficient(masse/kvadreret højde) = ? kg/m²",
            "designation" : [
              {
                "language" : "da",
                "value" : "Pt—Legeme; massekoefficient(masse/kvadreret højde) = ? kg/m²"
              }
            ]
          },
          {
            "code" : "NPU03794",
            "display" : "Pt—Legeme; højde = ? m",
            "designation" : [
              {
                "language" : "da",
                "value" : "Pt—Legeme; højde = ? m"
              }
            ]
          },
          {
            "code" : "NPU08676",
            "display" : "Pt—Legeme; temp. = ? °C",
            "designation" : [
              {
                "language" : "da",
                "value" : "Pt—Legeme; temp. = ? °C"
              }
            ]
          }
        ]
      },
      {
        "system" : "urn:oid:1.2.208.184.100.8",
        "concept" : [
          {
            "code" : "MCS88015",
            "display" : "FEV1;Lunge",
            "designation" : [
              {
                "language" : "da",
                "value" : "Lunge—Lungefunktionsundersøgelse FEV1; vol. = ? L"
              }
            ]
          },
          {
            "code" : "MCS88016",
            "display" : "FVC;Lunge",
            "designation" : [
              {
                "language" : "da",
                "value" : "Lunge—Lungefunktionsundersøgelse vitalkapasitet FVC; vol. = ? L"
              }
            ]
          },
          {
            "code" : "MCS88017",
            "display" : "FEV1/FVC;Lunge",
            "designation" : [
              {
                "language" : "da",
                "value" : "Lunge—FEV1/FVC; ratio = ?"
              }
            ]
          },
          {
            "code" : "MCS88021",
            "display" : "MRC skala;Pt(KOL)",
            "designation" : [
              {
                "language" : "da",
                "value" : "Pt(KOL) —MRC skala; arb.antal(værdi 1-5) = ?"
              }
            ]
          },
          {
            "code" : "MCS88023",
            "display" : "FEV1 af forventet værdi;Pt(KOL)",
            "designation" : [
              {
                "language" : "da",
                "value" : "Pt(KOL) - FEV1 i % af den forventede værdi (efter højde,alder og køn); ratio = ?"
              }
            ]
          },
          {
            "code" : "MCS88050",
            "display" : "Rejse sætte sig testen;Pt",
            "designation" : [
              {
                "language" : "da",
                "value" : "Rejse sætte sig testen;Pt"
              }
            ]
          },
          {
            "code" : "MCS88137",
            "display" : "CAT score;Pt",
            "designation" : [
              {
                "language" : "da",
                "value" : "CAT score;Pt"
              }
            ]
          },
          {
            "code" : "MCS88192",
            "display" : "Skridt per dag;Pt",
            "designation" : [
              {
                "language" : "da",
                "value" : "Skridt per dag;Pt"
              }
            ]
          },
          {
            "code" : "MCS88193",
            "display" : "Skridt per uge;Pt",
            "designation" : [
              {
                "language" : "da",
                "value" : "Skridt per uge;Pt"
              }
            ]
          },
          {
            "code" : "MCS88194",
            "display" : "Skridt;Pt",
            "designation" : [
              {
                "language" : "da",
                "value" : "Skridt;Pt"
              }
            ]
          }
        ]
      },
      {
        "system" : "urn:oid:1.2.208.176.2.4",
        "concept" : [
          {
            "code" : "ZZ3170",
            "display" : "Hjemmeblodtryksmåling udført af patienten"
          }
        ]
      },
      {
        "system" : "http://loinc.org",
        "concept" : [
          {
            "code" : "72287-6",
            "display" : "Wound size panel"
          },
          {
            "code" : "39126-8",
            "display" : "Length of Wound"
          },
          {
            "code" : "39125-0",
            "display" : "Width of Wound"
          },
          {
            "code" : "39127-6",
            "display" : "Depth of Wound"
          },
          {
            "code" : "89260-4",
            "display" : "Area of wound"
          },
          {
            "code" : "94083-3",
            "display" : "Wound volume"
          }
        ]
      }
    ]
  }
}

```
