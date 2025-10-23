# ClinicalImpression Finding Codes - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ClinicalImpression Finding Codes**

## ValueSet: ClinicalImpression Finding Codes (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/clinicalimpression-finding-codes | *Version*:6.0.0 |
| Active as of 2019-02-08 | *Computable Name*:ClinicalImpressionFindingCodes |

 
Value set of clinical impression finding codes. 

 **References** 

* [ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md)
* [Questionnaire response finding basis](StructureDefinition-ehealth-questionnaireresponse-finding-basis.md)

### Logical Definition (CLD)

 

### Expansion

No Expansion for this valueset (not supported by Publication Tooling)

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
  "version" : "6.0.0",
  "name" : "ClinicalImpressionFindingCodes",
  "title" : "ClinicalImpression Finding Codes",
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
  "description" : "Value set of clinical impression finding codes.",
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
        "system" : "http://ehealth.sundhed.dk/cs/clinicalimpression-finding-codes"
      },
      {
        "valueSet" : ["http://ehealth.sundhed.dk/vs/observation-codes"]
      },
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "281300000",
            "display" : "Below reference range",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Below reference range"
              }
            ]
          },
          {
            "code" : "281302008",
            "display" : "Above reference range",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Above reference range"
              }
            ]
          },
          {
            "code" : "281301001",
            "display" : "Within reference range",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Within reference range"
              }
            ]
          },
          {
            "code" : "394844007",
            "display" : "Outside reference range",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Outside reference range"
              }
            ]
          },
          {
            "code" : "442686002",
            "display" : "Measurement finding below reference range",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Measurement finding below reference range"
              }
            ]
          },
          {
            "code" : "442756004",
            "display" : "Measurement finding above reference range",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Measurement finding above reference range"
              }
            ]
          },
          {
            "code" : "442082004",
            "display" : "Measurement finding within reference range",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Measurement finding within reference range"
              }
            ]
          },
          {
            "code" : "442096005",
            "display" : "Measurement finding outside reference range",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Measurement finding outside reference range"
              }
            ]
          },
          {
            "code" : "449171008",
            "display" : "Oxygen saturation below reference range",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Oxygen saturation below reference range"
              }
            ]
          },
          {
            "code" : "448225001",
            "display" : "Oxygen saturation within reference range",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Oxygen saturation within reference range"
              }
            ]
          }
        ]
      },
      {
        "system" : "urn:oid:1.2.208.184.100.1",
        "concept" : [
          {
            "code" : "RAL",
            "display" : "Terapeutiske grænseværdier for RØD alarm",
            "designation" : [
              {
                "language" : "da",
                "value" : "Terapeutiske grænseværdier for RØD alarm"
              }
            ]
          },
          {
            "code" : "GAL",
            "display" : "Terapeutiske grænseværdier for GUL alarm",
            "designation" : [
              {
                "language" : "da",
                "value" : "Terapeutiske grænseværdier for GUL alarm"
              }
            ]
          }
        ]
      },
      {
        "system" : "http://ehealth.sundhed.dk/cs/reference-range-type",
        "concept" : [
          {
            "code" : "RELRAL",
            "display" : "Terapeutic relative reference range for RED alarm",
            "designation" : [
              {
                "language" : "da",
                "value" : "Terapeutiske relative grænseværdier for RØD alarm"
              }
            ]
          },
          {
            "code" : "RELGAL",
            "display" : "Terapeutic relative reference range for YELLOW alarm",
            "designation" : [
              {
                "language" : "da",
                "value" : "Terapeutiske relative grænseværdier for GUL alarm"
              }
            ]
          }
        ]
      },
      {
        "system" : "http://ehealth.sundhed.dk/cs/clinicalimpression-decision-support-codes",
        "concept" : [
          {
            "code" : "deviation-found"
          },
          {
            "code" : "no-deviation-found"
          },
          {
            "code" : "insufficient-data"
          }
        ]
      }
    ]
  }
}

```
