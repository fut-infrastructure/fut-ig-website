# Activitydefinition-code to measurement resource type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Activitydefinition-code to measurement resource type**

## ConceptMap: Activitydefinition-code to measurement resource type 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/ConceptMap/activitydefinition-code-to-measurement-resource-type | *Version*:6.0.0 |
| Active as of 2023-06-28 | *Computable Name*:activitydefinition-code-to-measurement-resource-type |

 
The map controls what type of measurement resource is expected for a given activity code. 

Mapping from [Activity Definition Code](ValueSet-ehealth-activitydefinition-code.md) to [http://hl7.org/fhir/resource-types](CodeSystem-hl7.org-fhir-resource-types.md)

**Group 1**Mapping from [Activity Definition Codes](CodeSystem-ehealth-activitydefinition-code.md) to [Resource Type](CodeSystem-hl7.org-fhir-resource-types.md)

* **Source Code**: 273586006 (Master Questionnaire)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: QuestionnaireResponse
* **Source Code**: SQ (Situation quality assessment)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: QuestionnaireResponse
* **Source Code**: QR (Usage quality assessment)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: QuestionnaireResponse

-------

**Group 2**Mapping from [NPU DK](CodeSystem-1.2.208.176.2.1--20190829.md) to [Resource Type](CodeSystem-hl7.org-fhir-resource-types.md)

* **Source Code**: DNK05472 (Blodtryk systolisk;Arm)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: DNK05473 (Blodtryk diastolisk;Arm)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: NPU03011 (Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: NPU21692 (Hjerte—Systole; frekv. = ? × 1/min)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: NPU03804 (Pt—Legeme; masse = ? kg)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: NPU27281 (Pt—Legeme; massekoefficient(masse/kvadreret højde) = ? kg/m²)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: NPU03794 (Pt—Legeme; højde = ? m)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: NPU08676 (Pt—Legeme; temp. = ? °C)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation

-------

**Group 3**Mapping from [MedCom Measurement CodeSystem](CodeSystem-urn-oid-1.2.208.184.100.8.md) to [Resource Type](CodeSystem-hl7.org-fhir-resource-types.md)

* **Source Code**: MCS88015 (FEV1;Lunge)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: MCS88016 (FVC;Lunge)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: MCS88017 (FEV1/FVC;Lunge)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: MCS88021 (MRC skala;Pt(KOL))
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: MCS88023 (FEV1 af forventet værdi;Pt(KOL))
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: MCS88050 (Rejse sætte sig testen;Pt)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: MCS88137 (CAT score;Pt)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: MCS88192 (Skridt per dag;Pt)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: MCS88193 (Skridt per uge;Pt)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: MCS88194 (Skridt;Pt)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation

-------

**Group 4**Mapping from [Sundhedsvæsenets klassifikationssystem (SKS)](CodeSystem-urn-oid-1.2.208.176.2.4.md) to [Resource Type](CodeSystem-hl7.org-fhir-resource-types.md)

* **Source Code**: ZZ3170 (Hjemmeblodtryksmåling udført af patienten)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: ZZ7011 (Klinisk foto)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Media

-------

**Group 5**Mapping from [SNOMED CT (all versions)](http://hl7.org/fhir/R4/codesystem-snomedct.html) to [Resource Type](CodeSystem-hl7.org-fhir-resource-types.md)

* **Source Code**: 445988008 (Assessment using health assessment questionnaire (procedure))
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: QuestionnaireResponse
* **Source Code**: 273586006 (Master questionnaire)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: QuestionnaireResponse
* **Source Code**: 446080005 (Photography of wound)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Media

-------

**Group 6**Mapping from [Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html) to [Resource Type](CodeSystem-hl7.org-fhir-resource-types.md)

* **Source Code**: 72287-6 (Wound size panel)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: 39126-8 (Length of Wound)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: 39125-0 (Width of Wound)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: 39127-6 (Depth of Wound)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: 89260-4 (Area of wound)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation
* **Source Code**: 94083-3 (Wound volume)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: Observation



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "activitydefinition-code-to-measurement-resource-type",
  "url" : "http://ehealth.sundhed.dk/ConceptMap/activitydefinition-code-to-measurement-resource-type",
  "version" : "6.0.0",
  "name" : "activitydefinition-code-to-measurement-resource-type",
  "title" : "Activitydefinition-code to measurement resource type",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-06-28T00:00:00+00:00",
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
  "description" : "The map controls what type of measurement resource is expected for a given activity code.",
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
  "sourceUri" : "http://ehealth.sundhed.dk/vs/activitydefinition-code",
  "targetUri" : "http://hl7.org/fhir/resource-types",
  "group" : [
    {
      "source" : "http://ehealth.sundhed.dk/cs/activitydefinition-code",
      "target" : "http://hl7.org/fhir/resource-types",
      "element" : [
        {
          "code" : "273586006",
          "display" : "Master Questionnaire",
          "target" : [
            {
              "code" : "QuestionnaireResponse",
              "display" : "QuestionnaireResponse",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "SQ",
          "display" : "Situation quality assessment",
          "target" : [
            {
              "code" : "QuestionnaireResponse",
              "display" : "QuestionnaireResponse",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "QR",
          "display" : "Usage quality assessment",
          "target" : [
            {
              "code" : "QuestionnaireResponse",
              "display" : "QuestionnaireResponse",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    },
    {
      "source" : "urn:oid:1.2.208.176.2.1",
      "target" : "http://hl7.org/fhir/resource-types",
      "element" : [
        {
          "code" : "DNK05472",
          "display" : "Blodtryk systolisk;Arm",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "DNK05473",
          "display" : "Blodtryk diastolisk;Arm",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "NPU03011",
          "display" : "Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "NPU21692",
          "display" : "Hjerte—Systole; frekv. = ? × 1/min",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "NPU03804",
          "display" : "Pt—Legeme; masse = ? kg",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "NPU27281",
          "display" : "Pt—Legeme; massekoefficient(masse/kvadreret højde) = ? kg/m²",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "NPU03794",
          "display" : "Pt—Legeme; højde = ? m",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "NPU08676",
          "display" : "Pt—Legeme; temp. = ? °C",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    },
    {
      "source" : "urn:oid:1.2.208.184.100.8",
      "target" : "http://hl7.org/fhir/resource-types",
      "element" : [
        {
          "code" : "MCS88015",
          "display" : "FEV1;Lunge",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "MCS88016",
          "display" : "FVC;Lunge",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "MCS88017",
          "display" : "FEV1/FVC;Lunge",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "MCS88021",
          "display" : "MRC skala;Pt(KOL)",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "MCS88023",
          "display" : "FEV1 af forventet værdi;Pt(KOL)",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "MCS88050",
          "display" : "Rejse sætte sig testen;Pt",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "MCS88137",
          "display" : "CAT score;Pt",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "MCS88192",
          "display" : "Skridt per dag;Pt",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "MCS88193",
          "display" : "Skridt per uge;Pt",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "MCS88194",
          "display" : "Skridt;Pt",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    },
    {
      "source" : "urn:oid:1.2.208.176.2.4",
      "target" : "http://hl7.org/fhir/resource-types",
      "element" : [
        {
          "code" : "ZZ3170",
          "display" : "Hjemmeblodtryksmåling udført af patienten",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "ZZ7011",
          "display" : "Klinisk foto",
          "target" : [
            {
              "code" : "Media",
              "display" : "Media",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://hl7.org/fhir/resource-types",
      "element" : [
        {
          "code" : "445988008",
          "display" : "Assessment using health assessment questionnaire (procedure)",
          "target" : [
            {
              "code" : "QuestionnaireResponse",
              "display" : "QuestionnaireResponse",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "273586006",
          "display" : "Master questionnaire",
          "target" : [
            {
              "code" : "QuestionnaireResponse",
              "display" : "QuestionnaireResponse",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "446080005",
          "display" : "Photography of wound",
          "target" : [
            {
              "code" : "Media",
              "display" : "Media",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://loinc.org",
      "target" : "http://hl7.org/fhir/resource-types",
      "element" : [
        {
          "code" : "72287-6",
          "display" : "Wound size panel",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "39126-8",
          "display" : "Length of Wound",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "39125-0",
          "display" : "Width of Wound",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "39127-6",
          "display" : "Depth of Wound",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "89260-4",
          "display" : "Area of wound",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "94083-3",
          "display" : "Wound volume",
          "target" : [
            {
              "code" : "Observation",
              "display" : "Observation",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    }
  ]
}

```
