# ClinicalImpression Finding Codes - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ClinicalImpression Finding Codes**

## ValueSet: ClinicalImpression Finding Codes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/clinicalimpression-finding-codes | *Version*:10.0.0 |
| Active as of 2019-02-08 | *Computable Name*:ClinicalImpressionFindingCodes |

 
Value set of clinical impression finding codes. 

 **References** 

* [ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md)
* [Questionnaire response finding basis](StructureDefinition-ehealth-questionnaireresponse-finding-basis.md)

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
  "id" : "ehealth-clinicalimpression-finding-codes",
  "url" : "http://ehealth.sundhed.dk/vs/clinicalimpression-finding-codes",
  "version" : "10.0.0",
  "name" : "ClinicalImpressionFindingCodes",
  "title" : "ClinicalImpression Finding Codes",
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
  "description" : "Value set of clinical impression finding codes.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/clinicalimpression-finding-codes"
    },
    {
      "valueSet" : ["http://ehealth.sundhed.dk/vs/observation-codes"]
    },
    {
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "281300000"
      },
      {
        "code" : "281302008"
      },
      {
        "code" : "281301001"
      },
      {
        "code" : "394844007"
      },
      {
        "code" : "442686002"
      },
      {
        "code" : "442756004"
      },
      {
        "code" : "442082004"
      },
      {
        "code" : "442096005"
      },
      {
        "code" : "449171008"
      },
      {
        "code" : "448225001"
      }]
    },
    {
      "system" : "urn:oid:1.2.208.184.100.1",
      "concept" : [{
        "code" : "RAL"
      },
      {
        "code" : "GAL"
      }]
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/reference-range-type",
      "concept" : [{
        "code" : "RELRAL"
      },
      {
        "code" : "RELGAL"
      }]
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/clinicalimpression-decision-support-codes",
      "concept" : [{
        "code" : "deviation-found"
      },
      {
        "code" : "no-deviation-found"
      },
      {
        "code" : "insufficient-data"
      }]
    }]
  }
}

```
