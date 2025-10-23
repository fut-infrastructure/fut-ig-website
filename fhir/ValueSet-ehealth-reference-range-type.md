# Reference Range Type - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Reference Range Type**

## ValueSet: Reference Range Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/reference-range-type | *Version*:6.0.0 |
| Active as of 2019-02-08 | *Computable Name*:ReferenceRangeType |

 
Reference Range type value set. 

 **References** 

* [ehealth-observation](StructureDefinition-ehealth-observation.md)
* [Reference range](StructureDefinition-ehealth-referenceRange.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on:

* [codesystem Reference Range Type v6.0.0 (CodeSystem)](CodeSystem-ehealth-reference-range-type.md)
* Loinc v2.81
* [codesystem Observation Reference Range Meaning Codes v1.0.1 (CodeSystem)](http://terminology.hl7.org/6.5.0/CodeSystem-referencerange-meaning.html)
* [codesystem NPU DK v6.0.0 (CodeSystem)](CodeSystem-1.2.208.176.2.1--20190829.md)
* [codesystem Sundhedsvæsenets klassifikationssystem (SKS) v6.0.0 (CodeSystem)](CodeSystem-urn-oid-1.2.208.176.2.4.md)
* [codesystem MedCom Message Codes v6.0.0 (CodeSystem)](CodeSystem-urn-oid-1.2.208.184.100.1.md)
* [codesystem MedCom Measurement CodeSystem v6.0.0 (CodeSystem)](CodeSystem-urn-oid-1.2.208.184.100.8.md)
* [valueset Observation Codes v6.0.0 (ValueSet)](ValueSet-ehealth-observation-codes.md)

This value set contains 44 concepts

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
  "id" : "ehealth-reference-range-type",
  "url" : "http://ehealth.sundhed.dk/vs/reference-range-type",
  "version" : "6.0.0",
  "name" : "ReferenceRangeType",
  "title" : "Reference Range Type",
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
  "description" : "Reference Range type value set.",
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
        "system" : "http://terminology.hl7.org/CodeSystem/referencerange-meaning"
      },
      {
        "valueSet" : ["http://ehealth.sundhed.dk/vs/observation-codes"]
      },
      {
        "system" : "urn:oid:1.2.208.184.100.1",
        "concept" : [
          {
            "code" : "RAL",
            "display" : "Terapeutiske grænseværdier for RØD alarm"
          },
          {
            "code" : "GAL",
            "display" : "Terapeutiske grænseværdier for GUL alarm"
          }
        ]
      },
      {
        "system" : "http://ehealth.sundhed.dk/cs/reference-range-type"
      }
    ]
  }
}

```
