# Tilstandskoder - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Tilstandskoder**

## ValueSet: Tilstandskoder 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/condition-conditions | *Version*:6.0.0 |
| Active as of 2022-01-14 | *Computable Name*:Condition_Conditions |

 
Condition Codes 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

* Import all the codes that are contained in [KLTilstandeKoderSygepleje](ValueSet-kl.dk-fhir-common-caresocial-ValueSet-KLConditionCodesNursing.md)

 

### Expansion

This value set contains 43 concepts

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
  "id" : "ehealth-condition-conditions",
  "url" : "http://ehealth.sundhed.dk/vs/condition-conditions",
  "version" : "6.0.0",
  "name" : "Condition_Conditions",
  "title" : "Tilstandskoder",
  "status" : "active",
  "experimental" : false,
  "date" : "2022-01-14T00:00:00+00:00",
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
  "description" : "Condition Codes",
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
        "valueSet" : [
          "http://kl.dk/fhir/common/caresocial/ValueSet/KLConditionCodesNursing"
        ]
      }
    ]
  }
}

```
