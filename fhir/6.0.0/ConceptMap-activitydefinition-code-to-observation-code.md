# ActivityDefinition code to Observation code - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ActivityDefinition code to Observation code**

## ConceptMap: ActivityDefinition code to Observation code 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/ConceptMap/activitydefinition-code-to-observation-code | *Version*:6.0.0 |
| Active as of 2020-03-13 | *Computable Name*:activitydefinition-code-to-observation-code |

Mapping from [Activity Definition Code](ValueSet-ehealth-activitydefinition-code.md) to [Observation Codes](ValueSet-ehealth-observation-codes.md)

**Group 1**Mapping from [Sundhedsvæsenets klassifikationssystem (SKS)](CodeSystem-urn-oid-1.2.208.176.2.4.md) to [NPU DK](CodeSystem-1.2.208.176.2.1--20190829.md)

* **Codes**from[Sundhedsvæsenets klassifikationssystem (SKS)](CodeSystem-urn-oid-1.2.208.176.2.4.md): ZZ3170
  * : Hjemmeblodtryksmåling udført af patienten
  * **Codes**from[NPU DK](CodeSystem-1.2.208.176.2.1--20190829.md): [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * : DNK05472
  * ?: Blodtryk systolisk;Arm
  * ?: Should really be specializes but igpublisher turns into narrower (which requires a comment)
* **Codes**from[Sundhedsvæsenets klassifikationssystem (SKS)](CodeSystem-urn-oid-1.2.208.176.2.4.md): 
  * : 
  * **Codes**from[NPU DK](CodeSystem-1.2.208.176.2.1--20190829.md): [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * : DNK05473
  * ?: Blodtryk diastolisk;Arm
  * ?: Should really be specializes but igpublisher turns into narrower (which requires a comment)

-------

**Group 2**Mapping from [Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html) to [Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html)

* **Codes**from[Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): 72287-6
  * : Wound size panel
  * **Codes**from[Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * ?: 39126-8
  * ?: Length of Wound
* **Codes**from[Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): 
  * : 
  * **Codes**from[Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * ?: 39125-0
  * ?: Width of Wound
* **Codes**from[Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): 
  * : 
  * **Codes**from[Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * ?: 39127-6
  * ?: Depth of Wound
* **Codes**from[Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): 
  * : 
  * **Codes**from[Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * ?: 89260-4
  * ?: Area of wound
* **Codes**from[Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): 
  * : 
  * **Codes**from[Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [has specialization](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#specializes)
  * ?: 94083-3
  * ?: Wound volume



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "activitydefinition-code-to-observation-code",
  "url" : "http://ehealth.sundhed.dk/ConceptMap/activitydefinition-code-to-observation-code",
  "version" : "6.0.0",
  "name" : "activitydefinition-code-to-observation-code",
  "title" : "ActivityDefinition code to Observation code",
  "status" : "active",
  "experimental" : false,
  "date" : "2020-03-13",
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
  "sourceUri" : "http://ehealth.sundhed.dk/vs/activitydefinition-code",
  "targetUri" : "http://ehealth.sundhed.dk/vs/observation-codes",
  "group" : [
    {
      "source" : "urn:oid:1.2.208.176.2.4",
      "target" : "urn:oid:1.2.208.176.2.1",
      "element" : [
        {
          "code" : "ZZ3170",
          "display" : "Hjemmeblodtryksmåling udført af patienten",
          "target" : [
            {
              "code" : "DNK05472",
              "display" : "Blodtryk systolisk;Arm",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            },
            {
              "code" : "DNK05473",
              "display" : "Blodtryk diastolisk;Arm",
              "equivalence" : "specializes",
              "comment" : "Should really be specializes but igpublisher turns into narrower (which requires a comment)"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://loinc.org",
      "target" : "http://loinc.org",
      "element" : [
        {
          "code" : "72287-6",
          "display" : "Wound size panel",
          "target" : [
            {
              "code" : "39126-8",
              "display" : "Length of Wound",
              "equivalence" : "specializes"
            },
            {
              "code" : "39125-0",
              "display" : "Width of Wound",
              "equivalence" : "specializes"
            },
            {
              "code" : "39127-6",
              "display" : "Depth of Wound",
              "equivalence" : "specializes"
            },
            {
              "code" : "89260-4",
              "display" : "Area of wound",
              "equivalence" : "specializes"
            },
            {
              "code" : "94083-3",
              "display" : "Wound volume",
              "equivalence" : "specializes"
            }
          ]
        }
      ]
    }
  ]
}

```
