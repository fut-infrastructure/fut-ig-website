# Functional ability & social circumstances (treatment area) - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Functional ability & social circumstances (treatment area)**

## ValueSet: Functional ability & social circumstances (treatment area) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-treatment-area-xb-6 | *Version*:10.0.0 |
| Active as of 2025-12-05 | *Computable Name*:FunctionalAbilityAndSocialCircumstances |

 
Treatment are for functional ability & social circumstances (xb). 

 **References** 

* Included into [TreatmentAreaCollection_xb](ValueSet-ehealth-treatment-areas-xb.md)

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
  "id" : "ehealth-treatment-area-xb-6",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-treatment-area-xb-6",
  "version" : "10.0.0",
  "name" : "FunctionalAbilityAndSocialCircumstances",
  "title" : "Functional ability & social circumstances (treatment area)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-05T09:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Treatment are for functional ability & social circumstances (xb).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
      "concept" : [{
        "code" : "F"
      },
      {
        "code" : "F1"
      },
      {
        "code" : "F2"
      },
      {
        "code" : "F3"
      },
      {
        "code" : "F4"
      },
      {
        "code" : "F5"
      },
      {
        "code" : "F6"
      },
      {
        "code" : "F7"
      },
      {
        "code" : "F8"
      },
      {
        "code" : "F9"
      },
      {
        "code" : "F10"
      },
      {
        "code" : "F12"
      },
      {
        "code" : "J1"
      },
      {
        "code" : "J1.1"
      },
      {
        "code" : "J1.2"
      },
      {
        "code" : "J1.3"
      },
      {
        "code" : "J1.4"
      },
      {
        "code" : "J1.5"
      },
      {
        "code" : "J1.6"
      },
      {
        "code" : "J1.7"
      },
      {
        "code" : "J1.8"
      },
      {
        "code" : "J2"
      },
      {
        "code" : "J2.1"
      },
      {
        "code" : "J2.2"
      },
      {
        "code" : "J2.3"
      },
      {
        "code" : "J2.4"
      },
      {
        "code" : "J3"
      },
      {
        "code" : "J3.1"
      },
      {
        "code" : "J3.2"
      },
      {
        "code" : "J3.3"
      },
      {
        "code" : "J3.4"
      },
      {
        "code" : "J3.5"
      },
      {
        "code" : "J3.6"
      },
      {
        "code" : "J3.7"
      },
      {
        "code" : "J3.8"
      },
      {
        "code" : "J3.9"
      },
      {
        "code" : "J4"
      },
      {
        "code" : "J4.1"
      },
      {
        "code" : "J4.2"
      },
      {
        "code" : "J4.3"
      },
      {
        "code" : "J4.4"
      },
      {
        "code" : "J4.5"
      },
      {
        "code" : "J4.6"
      },
      {
        "code" : "J4.7"
      },
      {
        "code" : "J4.8"
      },
      {
        "code" : "J5"
      },
      {
        "code" : "J5.1"
      }]
    }]
  }
}

```
