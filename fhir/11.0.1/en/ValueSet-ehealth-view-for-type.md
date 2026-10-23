# View For Type - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **View For Type**

## ValueSet: View For Type (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/view-for-type | *Version*:11.0.1 |
| Active as of 2021-10-20 | *Computable Name*:ViewType |

 
View for types 

 **References** 

* [View for](StructureDefinition-ehealth-view-for.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-view-for-type",
  "url" : "http://ehealth.sundhed.dk/vs/view-for-type",
  "version" : "11.0.1",
  "name" : "ViewType",
  "title" : "View For Type",
  "status" : "active",
  "experimental" : true,
  "date" : "2021-10-20T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "View for types",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://hl7.org/fhir/resource-types",
      "version" : "4.0.1",
      "concept" : [{
        "code" : "Questionnaire",
        "display" : "Questionnaire",
        "designation" : [{
          "language" : "da",
          "value" : "Spørgeskema"
        }]
      }]
    }]
  }
}

```
