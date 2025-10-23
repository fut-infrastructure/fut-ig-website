# eHealthUnit - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealthUnit**

## ValueSet: eHealthUnit 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-unit | *Version*:6.0.0 |
| Active as of 2020-10-19 | *Computable Name*:eHealthUnit |

 
Value set of Unit Codes and Ucum common 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

This value set includes codes based on the following rules:

* Import all the codes that are contained in [eHealthUnitCodes](ValueSet-ehealth-unit-code.md)
* Import all the codes that are contained in [Common UCUM units](http://hl7.org/fhir/R4/valueset-ucum-common.html)

 

### Expansion

Expansion from tx.fhir.org based on:

* [codesystem eHealth Unit Codes v6.0.0 (CodeSystem)](CodeSystem-ehealth-unit-code.md)
* codesystem UCUM version 2.2
* [valueset eHealthUnitCodes v6.0.0 (ValueSet)](ValueSet-ehealth-unit-code.md)
* [valueset Common UCUM units v4.0.1 (ValueSet)](http://hl7.org/fhir/R4/valueset-ucum-common.html)

This value set has 1,002 codes in it. In order to keep the publication size manageable, only a selection (1,000 codes) of the whole set of codes is shown.

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
  "id" : "ehealth-unit",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-unit",
  "version" : "6.0.0",
  "name" : "eHealthUnit",
  "title" : "eHealthUnit",
  "status" : "active",
  "experimental" : false,
  "date" : "2020-10-19T08:00:00+00:00",
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
  "description" : "Value set of Unit Codes and Ucum common",
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
        "valueSet" : ["http://ehealth.sundhed.dk/vs/ehealth-unit-code"]
      },
      {
        "valueSet" : ["http://hl7.org/fhir/ValueSet/ucum-common"]
      }
    ]
  }
}

```
