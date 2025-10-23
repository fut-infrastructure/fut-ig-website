# Questionnaire Elements - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire Elements**

## ValueSet: Questionnaire Elements 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/questionnaire-elements | *Version*:6.0.0 |
| Active as of 2023-09-08 | *Computable Name*:Questionnaire_Elements |

 
Types of questionnaire elements; e.g. group, question, answer. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

* Include all codes defined in [`http://ehealth.sundhed.dk/cs/questionnaire-elements`](CodeSystem-ehealth-questionnaire-elements.md)version 📦6.0.0

 

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
  "id" : "ehealth-questionnaire-elements",
  "url" : "http://ehealth.sundhed.dk/vs/questionnaire-elements",
  "version" : "6.0.0",
  "name" : "Questionnaire_Elements",
  "title" : "Questionnaire Elements",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-09-08T00:00:00+00:00",
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
  "description" : "Types of questionnaire elements; e.g. group, question, answer.",
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
        "system" : "http://ehealth.sundhed.dk/cs/questionnaire-elements"
      }
    ]
  }
}

```
