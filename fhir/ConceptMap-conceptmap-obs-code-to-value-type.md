# conceptmap-obs-code-to-value-type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **conceptmap-obs-code-to-value-type**

## ConceptMap: conceptmap-obs-code-to-value-type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/ConceptMap/conceptmap-obs-code-to-value-type | *Version*:6.0.0 |
| Active as of 2020-11-26 | *Computable Name*:conceptmap-obs-code-to-value-type |

Mapping from [Observation Codes](ValueSet-ehealth-observation-codes.md) to [DataType](http://hl7.org/fhir/R4/valueset-data-types.html)

**Group 1**Mapping from [NPU DK](CodeSystem-1.2.208.176.2.1--20190829.md) to [DataType](http://hl7.org/fhir/R4/codesystem-data-types.html)

* **Source Code**: DNK05472 (Blodtryk systolisk;Arm)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: integer
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Source Code**: DNK05473 (Blodtryk diastolisk;Arm)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: integer
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Source Code**: NPU03011 (Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: decimal
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Source Code**: NPU21692 (Hjerte—Systole; frekv. = ? × 1/min)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: integer
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Source Code**: NPU03804 (Pt—Legeme; masse = ? kg)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: decimal
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Source Code**: NPU27281 (Pt—Legeme; massekoefficient(masse/kvadreret højde) = ? kg/m²)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: integer
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Source Code**: NPU03794 (Pt—Legeme; højde = ? m)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: decimal
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Source Code**: NPU08676 (Pt—Legeme; temp. = ? °C)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: decimal
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)

-------

**Group 2**Mapping from [MedCom Measurement CodeSystem](CodeSystem-urn-oid-1.2.208.184.100.8.md) to [DataType](http://hl7.org/fhir/R4/codesystem-data-types.html)

* **Source Code**: MCS88015 (FEV1;Lunge)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: decimal
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Source Code**: MCS88016 (FVC;Lunge)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: decimal
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Source Code**: MCS88017 (FEV1/FVC;Lunge)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: decimal
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Source Code**: MCS88021 (MRC skala;Pt(KOL))
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: integer
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Source Code**: MCS88023 (FEV1 af forventet værdi;Pt(KOL))
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: integer
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Source Code**: MCS88050 (Rejse sætte sig testen;Pt)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: integer
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Source Code**: MCS88137 (CAT score;Pt)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: integer
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Source Code**: MCS88192 (Skridt per dag;Pt)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: integer
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Source Code**: MCS88193 (Skridt per uge;Pt)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: integer
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Source Code**: MCS88194 (Skridt;Pt)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: integer
  * **Comment**: Should really be specializes but igpublisher turns into narrower (which requires a comment)

-------

**Group 3**Mapping from [Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html) to [DataType](http://hl7.org/fhir/R4/codesystem-data-types.html)

* **Source Code**: 39126-8 (Length of Wound)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: decimal
* **Source Code**: 39125-0 (Width of Wound)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: decimal
* **Source Code**: 39127-6 (Depth of Wound)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: decimal
* **Source Code**: 89260-4 (Area of wound)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: decimal
* **Source Code**: 94083-3 (Wound volume)
  * **Relationship**: [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * **Target Code**: decimal



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "conceptmap-obs-code-to-value-type",
  "url" : "http://ehealth.sundhed.dk/ConceptMap/conceptmap-obs-code-to-value-type",
  "version" : "6.0.0",
  "name" : "conceptmap-obs-code-to-value-type",
  "title" : "conceptmap-obs-code-to-value-type",
  "status" : "active",
  "experimental" : false,
  "date" : "2020-11-26",
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
  "sourceUri" : "http://ehealth.sundhed.dk/vs/observation-codes",
  "targetUri" : "http://hl7.org/fhir/ValueSet/data-types",
  "group" : [
    {
      "source" : "urn:oid:1.2.208.176.2.1",
      "target" : "http://hl7.org/fhir/data-types",
      "element" : [
        {
          "code" : "DNK05472",
          "display" : "Blodtryk systolisk;Arm",
          "target" : [
            {
              "code" : "integer",
              "display" : "integer",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        },
        {
          "code" : "DNK05473",
          "display" : "Blodtryk diastolisk;Arm",
          "target" : [
            {
              "code" : "integer",
              "display" : "integer",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        },
        {
          "code" : "NPU03011",
          "display" : "Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?",
          "target" : [
            {
              "code" : "decimal",
              "display" : "decimal",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        },
        {
          "code" : "NPU21692",
          "display" : "Hjerte—Systole; frekv. = ? × 1/min",
          "target" : [
            {
              "code" : "integer",
              "display" : "integer",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        },
        {
          "code" : "NPU03804",
          "display" : "Pt—Legeme; masse = ? kg",
          "target" : [
            {
              "code" : "decimal",
              "display" : "decimal",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        },
        {
          "code" : "NPU27281",
          "display" : "Pt—Legeme; massekoefficient(masse/kvadreret højde) = ? kg/m²",
          "target" : [
            {
              "code" : "integer",
              "display" : "integer",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        },
        {
          "code" : "NPU03794",
          "display" : "Pt—Legeme; højde = ? m",
          "target" : [
            {
              "code" : "decimal",
              "display" : "decimal",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        },
        {
          "code" : "NPU08676",
          "display" : "Pt—Legeme; temp. = ? °C",
          "target" : [
            {
              "code" : "decimal",
              "display" : "decimal",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        }
      ]
    },
    {
      "source" : "urn:oid:1.2.208.184.100.8",
      "target" : "http://hl7.org/fhir/data-types",
      "element" : [
        {
          "code" : "MCS88015",
          "display" : "FEV1;Lunge",
          "target" : [
            {
              "code" : "decimal",
              "display" : "decimal",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        },
        {
          "code" : "MCS88016",
          "display" : "FVC;Lunge",
          "target" : [
            {
              "code" : "decimal",
              "display" : "decimal",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        },
        {
          "code" : "MCS88017",
          "display" : "FEV1/FVC;Lunge",
          "target" : [
            {
              "code" : "decimal",
              "display" : "decimal",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        },
        {
          "code" : "MCS88021",
          "display" : "MRC skala;Pt(KOL)",
          "target" : [
            {
              "code" : "integer",
              "display" : "integer",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        },
        {
          "code" : "MCS88023",
          "display" : "FEV1 af forventet værdi;Pt(KOL)",
          "target" : [
            {
              "code" : "integer",
              "display" : "integer",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        },
        {
          "code" : "MCS88050",
          "display" : "Rejse sætte sig testen;Pt",
          "target" : [
            {
              "code" : "integer",
              "display" : "integer",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        },
        {
          "code" : "MCS88137",
          "display" : "CAT score;Pt",
          "target" : [
            {
              "code" : "integer",
              "display" : "integer",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        },
        {
          "code" : "MCS88192",
          "display" : "Skridt per dag;Pt",
          "target" : [
            {
              "code" : "integer",
              "display" : "integer",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        },
        {
          "code" : "MCS88193",
          "display" : "Skridt per uge;Pt",
          "target" : [
            {
              "code" : "integer",
              "display" : "integer",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        },
        {
          "code" : "MCS88194",
          "display" : "Skridt;Pt",
          "target" : [
            {
              "code" : "integer",
              "display" : "integer",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://loinc.org",
      "target" : "http://hl7.org/fhir/data-types",
      "element" : [
        {
          "code" : "39126-8",
          "display" : "Length of Wound",
          "target" : [
            {
              "code" : "decimal",
              "display" : "decimal",
              "equivalence" : "specializes"
            }
          ]
        },
        {
          "code" : "39125-0",
          "display" : "Width of Wound",
          "target" : [
            {
              "code" : "decimal",
              "display" : "decimal",
              "equivalence" : "specializes"
            }
          ]
        },
        {
          "code" : "39127-6",
          "display" : "Depth of Wound",
          "target" : [
            {
              "code" : "decimal",
              "display" : "decimal",
              "equivalence" : "specializes"
            }
          ]
        },
        {
          "code" : "89260-4",
          "display" : "Area of wound",
          "target" : [
            {
              "code" : "decimal",
              "display" : "decimal",
              "equivalence" : "specializes"
            }
          ]
        },
        {
          "code" : "94083-3",
          "display" : "Wound volume",
          "target" : [
            {
              "code" : "decimal",
              "display" : "decimal",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    }
  ]
}

```
