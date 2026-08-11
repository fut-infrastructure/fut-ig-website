# Observation Codes - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation Codes**

## ValueSet: Observation Codes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/observation-codes | *Version*:10.0.1 |
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
  "version" : "10.0.1",
  "name" : "ObservationCodes",
  "title" : "Observation Codes",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-08T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Observation codes value set.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "urn:oid:1.2.208.176.2.1",
      "concept" : [{
        "code" : "DNK05463"
      },
      {
        "code" : "DNK05465"
      },
      {
        "code" : "DNK05467"
      },
      {
        "code" : "DNK05469"
      },
      {
        "code" : "DNK05472"
      },
      {
        "code" : "DNK05473"
      },
      {
        "code" : "NPU02193"
      },
      {
        "code" : "NPU03011"
      },
      {
        "code" : "NPU21692"
      },
      {
        "code" : "NPU03804"
      },
      {
        "code" : "NPU27281"
      },
      {
        "code" : "NPU03794"
      },
      {
        "code" : "NPU08676"
      }]
    },
    {
      "system" : "urn:oid:1.2.208.184.100.8",
      "concept" : [{
        "code" : "MCS88015"
      },
      {
        "code" : "MCS88016"
      },
      {
        "code" : "MCS88017"
      },
      {
        "code" : "MCS88021"
      },
      {
        "code" : "MCS88023"
      },
      {
        "code" : "MCS88050"
      },
      {
        "code" : "MCS88137"
      },
      {
        "code" : "MCS88192"
      },
      {
        "code" : "MCS88193"
      },
      {
        "code" : "MCS88194"
      },
      {
        "code" : "MCS88214"
      }]
    },
    {
      "system" : "urn:oid:1.2.208.176.2.4",
      "concept" : [{
        "code" : "ZZ3170"
      }]
    },
    {
      "system" : "http://loinc.org",
      "concept" : [{
        "code" : "72287-6"
      },
      {
        "code" : "39126-8"
      },
      {
        "code" : "39125-0"
      },
      {
        "code" : "39127-6"
      },
      {
        "code" : "89260-4"
      },
      {
        "code" : "94083-3"
      }]
    }]
  }
}

```
