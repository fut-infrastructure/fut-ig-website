# Activity Definition Code - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Activity Definition Code**

## ValueSet: Activity Definition Code (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/activitydefinition-code | *Version*:6.0.0 |
| Active as of 2019-02-08 | *Computable Name*:ActivityDefinitionCode |

 
Activity Definition Code. 

 **References** 

* [ehealth-activitydefinition](StructureDefinition-ehealth-activitydefinition.md)
* [ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md)

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
  "id" : "ehealth-activitydefinition-code",
  "url" : "http://ehealth.sundhed.dk/vs/activitydefinition-code",
  "version" : "6.0.0",
  "name" : "ActivityDefinitionCode",
  "title" : "Activity Definition Code",
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
  "description" : "Activity Definition Code.",
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
        "system" : "http://ehealth.sundhed.dk/cs/activitydefinition-code"
      },
      {
        "valueSet" : [
          "http://ehealth.sundhed.dk/vs/observation-codes",
          "http://ehealth.sundhed.dk/vs/media-codes"
        ]
      },
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "445988008",
            "display" : "Assessment using health assessment questionnaire (procedure)",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Assessment using health assessment questionnaire (procedure)"
              }
            ]
          },
          {
            "code" : "229057006",
            "display" : "Meetings (procedure)"
          },
          {
            "code" : "273586006",
            "display" : "Master questionnaire"
          },
          {
            "code" : "409073007",
            "display" : "Instruction"
          }
        ]
      },
      {
        "system" : "urn:oid:1.2.208.176.2.4",
        "concept" : [
          {
            "code" : "ALCA00",
            "display" : "fysisk fremmøde"
          },
          {
            "code" : "ALCA03",
            "display" : "virtuel kontakt"
          }
        ]
      }
    ]
  }
}

```
