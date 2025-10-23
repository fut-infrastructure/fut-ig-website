# Questionnaire Item Image Format - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire Item Image Format**

## ValueSet: Questionnaire Item Image Format (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/questionnaire-item-image-format | *Version*:6.0.0 |
| Active as of 2021-09-16 | *Computable Name*:QuestionnaireItemImageFormat |

 
Questionnaire item image format value set. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 3 concepts

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
  "id" : "ehealth-questionnaire-item-image-format",
  "url" : "http://ehealth.sundhed.dk/vs/questionnaire-item-image-format",
  "version" : "6.0.0",
  "name" : "QuestionnaireItemImageFormat",
  "title" : "Questionnaire Item Image Format",
  "status" : "active",
  "experimental" : true,
  "date" : "2021-09-16",
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
  "description" : "Questionnaire item image format value set.",
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
        "system" : "urn:ietf:bcp:13",
        "concept" : [
          {
            "code" : "image/png",
            "display" : "PNG image format",
            "designation" : [
              {
                "language" : "da",
                "value" : "PNG billedformat"
              }
            ]
          },
          {
            "code" : "image/jpeg",
            "display" : "JPEG image format",
            "designation" : [
              {
                "language" : "da",
                "value" : "JPEG billedformat"
              }
            ]
          },
          {
            "code" : "image/svg+xml",
            "display" : "SVG og XML format",
            "designation" : [
              {
                "language" : "da",
                "value" : "SVG og XML format"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
