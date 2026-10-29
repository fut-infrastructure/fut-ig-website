# Questionnaire Item Image Format - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire Item Image Format**

## ValueSet: Questionnaire Item Image Format (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/questionnaire-item-image-format | *Version*:11.0.2 |
| Active as of 2021-09-16 | *Computable Name*:QuestionnaireItemImageFormat |

 
Questionnaire item image format value set. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-questionnaire-item-image-format",
  "url" : "http://ehealth.sundhed.dk/vs/questionnaire-item-image-format",
  "version" : "11.0.2",
  "name" : "QuestionnaireItemImageFormat",
  "title" : "Questionnaire Item Image Format",
  "status" : "active",
  "experimental" : true,
  "date" : "2021-09-16",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Questionnaire item image format value set.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "urn:ietf:bcp:13",
      "concept" : [{
        "code" : "image/png",
        "display" : "PNG image format",
        "designation" : [{
          "language" : "da",
          "value" : "PNG billedformat"
        }]
      },
      {
        "code" : "image/jpeg",
        "display" : "JPEG image format",
        "designation" : [{
          "language" : "da",
          "value" : "JPEG billedformat"
        }]
      },
      {
        "code" : "image/svg+xml",
        "display" : "SVG og XML format",
        "designation" : [{
          "language" : "da",
          "value" : "SVG og XML format"
        }]
      }]
    }]
  }
}

```
